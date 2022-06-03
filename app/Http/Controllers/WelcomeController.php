<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'title' => 'Bem vindo ao Docker'
        ]);
    }

    public function configure(Request $request)
    {
        Auth::login($user);

        return redirect()->route('dashboard.index');
    }
}
