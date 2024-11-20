<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Listar os usuários
    public function index()
    {
        // Carregar a view
        return view('users.index');
    }

    // Detalhes do usuário
    public function show()
    {
        // Carregar a view
        return view('users.show');
    }

    // Carregar o formulário cadastrar novo usuário
    public function create()
    {
        // Carregar a view
        return view('users.create');
    }

    // Carregar o formulário editar usuário
    public function edit()
    {
        // Carregar a view
        return view('users.edit');
    }
}
