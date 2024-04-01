<x-layout title="Login">

    <form class="login-div" action="/login" method="post">
        @csrf
        <div class="form-login">
        
                <label>Email</label>
                <input autofocus type="email" name="email" >
       
                <label>Senha</label>
                <input type="password" name="password">
          

        </div>
        
        <input class="botao__adicionar" type="submit" value="Logar">
        
    </form>

    <div class="botao__cadastrar-div">
        <a class="botao__cadastrar" href="/usuarios/criar">Cadastrar</a>
    </div>

</x-layout>