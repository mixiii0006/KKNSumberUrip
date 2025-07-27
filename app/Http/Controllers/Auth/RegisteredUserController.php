<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    // public function create(): View
    // {
    //     return view('auth.register');
    // }

    public function create(): View
    {
        $admins = User::where('is_admin', true)->get();

        return view('auth.register', compact('admins'));
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'is_admin' => true, // set langsung sebagai admin
        ]);

        event(new Registered($user));

        // Tidak melakukan Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $admin = User::where('is_admin', true)->findOrFail($id);

        // Optional: Cegah jika ingin tetap punya minimal 1 admin
        if (User::where('is_admin', true)->count() <= 1) {
            return redirect()->back()->with('error', 'Minimal harus ada 1 admin.');
        }

        $admin->delete();

        return redirect()->back()->with('success', 'Admin berhasil dihapus.');
    }
}
