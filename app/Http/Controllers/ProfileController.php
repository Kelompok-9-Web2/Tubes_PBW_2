<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    // Show the user's profile
    public function show()
    {
        return view('profile.show', [
            'user' => Auth::user()
        ]);
    }

    // Show the form to edit the profile
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user()
        ]);
    }

    // Update the user's profile
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('profile.show')->with('status', 'Profile updated successfully.');
    }

    // Delete the user's account
    public function destroy()
    {
        $user = Auth::user();
        $user->delete();

        Auth::logout();

        return redirect('/')->with('status', 'Account deleted successfully.');
    }

    public function confirmDelete()
    {
        return view('profile.delete');
    }
}
