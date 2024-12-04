<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validação dos campos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Finge que autentica qualquer usuário
        $fakeUser = (object) [
            'id' => 1,
            'name' => 'Usuário Falso',
            'email' => $request->email,
        ];

        // Loga o usuário falso manualmente
        Auth::loginUsingId($fakeUser->id);

        // Redireciona para a página de criação de chamados
        return redirect()->route('chamados.create');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
