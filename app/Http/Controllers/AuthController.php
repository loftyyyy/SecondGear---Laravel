<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $request->validate([
            "email" => "required|email|unique:users,email",
            "password" => "required",

        ]);

    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            // Clear the old input to ensure we're not getting stale data
            $request->flash();
            
            // Use the session() helper directly to make sure the flag is set
            session()->flash('showSignupModal', true);
            
            // Add debugging to verify flag is set
            Log::info('Validation failed. Session flag set: ' . (session('showSignupModal') ? 'Yes' : 'No'));
            Log::info('Validation errors: ' . json_encode($validator->errors()->toArray()));
            
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password', 'password_confirmation'));
        }
    
        // Create the user
        User::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Log the user in automatically
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
    
        return redirect()->route('dashboard');
    }
}
