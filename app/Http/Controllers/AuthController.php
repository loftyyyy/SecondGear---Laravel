<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    //
    public function login(Request $request) {
        // Validate request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            Log::error('Login validation failed', $validator->errors()->toArray());
    
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors(),
                ], 422);
            }
    
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }
    
        // Attempt to login user
        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => ['email' => ['Invalid email or password.']],
                ], 401);
            }
    
            return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }
    
        // If authentication is successful
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'redirect' => route('browse'),
            ]);
        }
    
        return redirect()->route('browse');
    }
    
    

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            // Log errors for debugging
            Log::error('Validation failed', $validator->errors()->toArray());
    
            // Check if the request is an AJAX request
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors(),
                ], 422);
            }
    
            // If not an AJAX request, fallback to redirect
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password', 'password_confirmation'));
        }
    
        // Create the user
        $user = User::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // This thing logs the user in after registration
        Auth::login($user);
    
        // Return JSON response if it's an AJAX request
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'redirect' => route('browse'),
            ]);
        }
    
        // Otherwise, redirect
        return redirect()->route('browse');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
          
        return redirect()->route('landing');
    }
    
}
