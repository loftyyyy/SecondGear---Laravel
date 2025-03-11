<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarImage;
use App\Models\User;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    // Custom function to show the user's profile information
    public function user(Request $request): View
    {
        $cars = Car::where('user_id', Auth::id())
                   ->latest()
                   ->paginate(10);
    
        return view('profile.user', [
            'user' => $request->user(),
            'cars' => $cars,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }


        $request->user()->save();

        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
        return Redirect::route('show.profile')->with('status', 'profile-updated');
    }

    /**
     * Update the user's profile picture.
     */
    public function updateProfilePicture(Request $request)
    {
        $validated = $request->validate([
            'profile_picture' => ['required', 'image', 'max:1024'],
        ]);
        
        if ($request->hasFile('profile_picture')) {
            // Delete old picture if it exists
            if ($request->user()->profile_picture) {
                Storage::disk('public')->delete($request->user()->profile_picture);
            }
            
            // Store new picture
            $path = $request->file('profile_picture')->store('profile-pictures', 'public');
            $request->user()->profile_picture = $path;
            $request->user()->save();
        }
        
        // return redirect()->route('profile.edit')->with('status', 'profile-updated');
        return Redirect::route('show.profile')->with('status', 'profile-image-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
