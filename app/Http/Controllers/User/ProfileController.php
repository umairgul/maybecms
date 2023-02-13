<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request)
    {
        return view('user.profile.edit', [
            'pageTitle' => 'Edit Profile',
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['email', 'max:255', 'unique:users,email,' . auth()->id() . ',id'],
        ]);

        $user = User::findOrFail($request->user()->id);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $request->validate([
                'password' => ['min:8', 'confirmed']
            ]);
            $user->password = bcrypt($request->password);
        }

        $user->save();

        notify()->success('Profile updated successfully');

        return back();
    }
}
