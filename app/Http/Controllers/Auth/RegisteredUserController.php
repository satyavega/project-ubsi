<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
// use Laravel\Jetstream\Jetstream;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'username' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'image' => ['required'],
    ]);

    // Simpan gambar
    $imagePath = $request->file('image')->store('profile_images', 'public');

    $username = $request->input('username');

    // Jetstream::role('user', __('User'), [
    //     'name' => 'User',
    // ])->description(__('This role has basic access to the application.'));

    $user = User::create([
        'username' => $username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'slug' => Str::slug($request->username),
        'image' => $imagePath, // Mengisi kolom 'image' dengan path gambar

    ]);

    // $user->assignRole('user');

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
}

}
