<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConfigureRequest;
use App\Http\Requests\StoreFirstAcessRequest;
use App\Models\Configuration;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login()
    {
        if(empty(Configuration::all()->first())){
            return redirect()->route('auth.first-access');
        }

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

    public function firstAccess()
    {
        return view('auth.first-access', [
            'title' => 'Primeiro acesso'
        ]);
    }

    public function firstAccessGenerate(StoreFirstAcessRequest $request)
    {
        $group = Group::create([
            'name' => 'Administrador',
            'description' => 'Administrador do sistema'
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => true,
            'group_id' => $group->id
        ]);

        $setting = [
            'company_name' => $request->company_name,
            'company_website' => $request->company_website,
            'app_key' => Str::uuid(),
            'company_logo' => $request->company_logo,
        ];

        $this->saveConfiguration($setting);

        Auth::login($user);

        return redirect()->route('auth.configure');
    }

    public function configure()
    {
        return view('auth.configure', [
            'title' => 'Configuração',
            'user' => Auth::user(),
            'company' => Configuration::where('key', 'company_name')->first(),
            'company_website' => Configuration::where('key', 'company_website')->first(),
        ]);
    }

    public function configureSave(StoreConfigureRequest $request)
    {
        $settings = [
            'short_name' => $request->short_name,
            'full_name' => $request->full_name,
            'short_description' => $request->short_description,
            'full_description' => $request->full_description,
            'privacy_policy' => $request->privacy_policy,
            'terms_and_conditions' => $request->terms_and_conditions,
            'image' => Storage::putFileAs('public/app', $request->image, 'color.png'),
            'primary_color' => $request->primary_color,
            'secondary_color' => $request->secondary_color,
        ];

        $this->saveConfiguration($settings);
        $teamsApp = new GeneratorTeamsAppController();
        if($teamsApp->generate()) {
            return redirect()->route('dashboard.index')->with('first_access', true);
        }
    }

    public function saveConfiguration($data = []){
        foreach ($data as $key => $value) {
            Configuration::create([
                'key' => $key,
                'value' => $value,
            ]);
        }
    }
}
