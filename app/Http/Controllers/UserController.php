<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function showProfileForm()
    {
        return view('dashboard.profile');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if (!$user instanceof User) {
            return('User not Login.');
        }

        // Hapus foto lama jika ada
        if ($user->image) {
            Storage::delete($user->image);
        }

        // Simpan foto baru
        $path = $request->file('image')->store('profile_images');

        // Update path foto di database
        $user->image = $path;
        $user->save();

        return redirect()->back()->with('success', 'Profile image updated successfully.');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        if (!$user instanceof User) {
            return('User not Login.');
        }
    
        $validatedData = $request->validate([
            'username' => 'required|max:255|min:3|unique:users,username,' . $user->id,
            'email' => 'required|email:dns|unique:users,email,' . $user->id,
            'phone_number' => 'required|max:15',
        ]);
    
        // Update data pengguna, tanpa mengubah password
        $user->update($validatedData);
    
        return redirect()->back()->with('success', 'Profile document updated successfully.');
    }
}
