<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function create()
    {
        //
    }

 
    public function logar(Request $request)
    {

        if(!Auth::attempt($request->only('email', 'password'))){ //espera as credenciais do usuario, caso nao encontro retornará false
            
            return redirect()->back()->withErrors('Usuario ou senha invalidos!');
    
        }
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


    public function destroy($id)
    {
        //
    }
}
