<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginBasic extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('content.authentications.auth-login-basic');
    }

    // Procesar el login
    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticación exitosa
        return redirect()->intended('/inicio'); // Redirigir a la página deseada
    }

    return redirect()->back()->withInput()->withErrors([
        'username' => 'Credenciales incorrectas.' . "\n" . 'Verifica el usuario y la contraseña.',
    ]);
}

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/iniciarsesion');
    }
}
