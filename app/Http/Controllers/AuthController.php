<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }

        return view('auth.login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        }

        return redirect()->route('auth.login')
        ->with('message', 'E-mail ou senha inválidos')
        ->with('type', 'danger');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.index');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password', [
            'title' => 'Esqueci minha senha'
        ]);
    }

    public function recoveryPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('auth.forgot-password');
        }

        $user->sendPasswordResetNotification($user->getResetPasswordToken());

        return redirect()->route('auth.forgot-password');
    }
}
