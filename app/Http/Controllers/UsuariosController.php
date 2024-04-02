<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('usuarios.create');
    }


    public function store(Request $request, User $usuario)
    {
        $dados = $request->except('_token');

        $dados['password'] = Hash::make($dados['password']); //https://laravel.com/docs/9.x/validation#rule-confirmed

        $user = User::create($dados);
        Auth::login($user);

        return redirect('/');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy()
    {
      
    }
}
