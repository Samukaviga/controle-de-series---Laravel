<?php

namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Autenticador
{
 
    public function handle(Request $request, Closure $next)
    {

        if(!Auth::check()) { //se o usuario nao estiver logado
            throw new AuthenticationException(); //sera lançado uma excessao, sera redirecionado para o /login
        }

        return $next($request);
    }
}
