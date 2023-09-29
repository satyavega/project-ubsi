<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Logo;


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

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();

    $request->validate([
        'username' => ['required', 'string', 'max:255'],
        'email' => ['string', 'email', 'max:255', 'unique:users,email,' . $user->id],
        'password' => ['nullable', 'confirmed'],
    ]);

    $user->fill($request->validated());

    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    $user->slug = Str::slug($request->input('username'));

    if ($request->filled('password')) {
        $user->password = Hash::make($request->input('password'));
    }
    if ($user->isDirty('role')) {
        return redirect()->route('profile.edit')->with('error', 'Anda tidak dapat mengubah peran Anda.');
    }

    $user->save();

    return redirect()->route('profile.edit')->with('status', 'profile-updated');
}
}
