<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Access the profile data of the currently logged in user
        $user = auth()->user();

        // Display the profile page
        return view('/user/profile', compact('user'));
    }

    public function showSetting()
    {
        // Access the profile data of the currently logged in user
        $user = auth()->user();

        // Display the setting page
        return view('/user/setting', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // Validation rules for updating profile
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        // Update the profile data of the currently logged in user
        $user = auth()->user();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();

        // Redirect back to the setting page with success message
        return redirect()->route('setting')->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        // Validation rules for updating password
        $rules = [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        // Check if the current password matches the authenticated user's password
        $user = auth()->user();
        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return redirect()->route('setting')->with('error', 'Current password is incorrect.');
        }

        // Update the password of the currently logged in user
        $user->password = Hash::make($validatedData['new_password']);
        $user->save();

        // Redirect back to the setting page with success message
        return redirect()->route('setting')->with('success', 'Password updated successfully.');
    }




}