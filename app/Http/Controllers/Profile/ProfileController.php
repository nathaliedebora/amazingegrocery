<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->account_id);
        
        return view('update-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'gender_id' => ['required', 'exists:genders'],
            'first_name' => ['required', 'string', 'max:25', 'alpha'],
            'last_name' => ['required', 'string', 'max:25', 'alpha'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'display_picture_link' => ['required'],
        ]);

        $imageName = str_replace(' ', '-', $request->first_name) . '-' . str_replace(' ', '-',  $request->last_name);
        $imagePath = $request->file('display_picture_link')->store('/public/images/users/' . $imageName);
        $imagePath = str_replace('public/', '', $imagePath);

        $user = User::find(Auth::user()->account_id);
        $user->gender_id = $request->gender_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->display_picture_link = $imagePath;
        $user->save();

        return view('profile-saved');
    }
}
