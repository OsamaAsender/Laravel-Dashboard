<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function show($username)
    {
        $user = User::where('name', $username)->firstOrFail();

        return view('profile.show', ['user' => $user]);
    }

    // public function edit($username)
    // {
    //     return view('profile.edit', ['username' => $username]);
    // }
    // public function update($username)
    // {
    //     return redirect()->route('profile.show', ['username' => $username]);
    // }
}
