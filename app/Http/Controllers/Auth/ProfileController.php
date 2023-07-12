<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Access the profile data of the currently logged in user
        $user = auth()->user();

        // Display the profile page
        return view('/user/profile', compact('user'));
    }

}
