<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Password::default()],
        ]);

        if (! Auth::attempt($validated)) {
            return back()->withErrors([
                'password' => 'The credentials you entered did not match our records.',
            ])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'You logged in!');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out!');
    }
}
