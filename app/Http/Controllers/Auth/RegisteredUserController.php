<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'role_id' => ['required', 'exists:roles'],
            'gender_id' => ['required', 'exists:genders'],
            'first_name' => ['required', 'string', 'max:25', 'alpha'],
            'last_name' => ['required', 'string', 'max:25', 'alpha'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'display_picture_link' => ['required', 'mimes:jpeg, jpg, png'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $imageName = str_replace(' ', '-', $request->first_name) . '-' . str_replace(' ', '-',  $request->last_name);
        $imagePath = $request->file('display_picture_link')->store('/public/images/users/' . $imageName);
        $imagePath = str_replace('public/', '', $imagePath);

        $user = User::create([
            'role_id' => $request->role_id,
            'gender_id' => $request->gender_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'display_picture_link' => $imagePath,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
