<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $profile = $user->profile()->firstOrNew(); // Mendapatkan profil pengguna atau membuat yang baru jika tidak ada

        return view('profile', compact('user', 'profile'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $profile = $user->profile()->firstOrNew();

        $profile->name = $request->input('name');
        $profile->address = $request->input('address');
        $profile->phone = $request->input('phone');
        $profile->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
