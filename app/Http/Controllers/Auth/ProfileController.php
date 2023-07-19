<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Access the profile data of the currently logged in user
        $user = Auth::user();
        $token = $user->api_key;

        return view('/user/profile', ['user' => $user, 'token' => $token]);
    }

    public function showSetting()
    {

        $user = auth()->user();


        return view('/user/setting', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
        ];


        $validatedData = $request->validate($rules);


        $user = auth()->user();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();

        return redirect()->route('setting')->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {

        $rules = [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:6|confirmed',
        ];


        $validatedData = $request->validate($rules);


        $user = auth()->user();
        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return redirect()->route('setting')->with('error', 'Current password is incorrect.');
        }


        $user->password = Hash::make($validatedData['new_password']);
        $user->save();


        return redirect()->route('setting')->with('success', 'Password updated successfully.');
    }

    public function generateApiKey(Request $request)
    {
        $user = $request->user();


        $apiKey = Str::random(60);

        $user->api_key = $apiKey;
        $user->save();
        return redirect('/profile')->with('success', 'API key generated successfully');

    }

    public function regenerateApiKey(Request $request)
    {
        $user = $request->user();


        $apiKey = Str::random(60);


        $user->api_key = $apiKey;
        $user->save();

        return redirect('/profile')->with('success', 'API key generated successfully');

    }




}