<x-layout title="Criar Usuario">

    <form class="login-div" action="/usuarios" method="post">
        @csrf

        <div class="form-login">

                <label>Nome</label>
                <input autofocus type="text" name="name" >
    
                <label>Email</label>
                <input type="email" name="email" >
       
                <label>Senha</label>
                <input type="password" name="password">
          

        </div>
        
        <input class="botao__adicionar" type="submit" value="Cadastrar">
        
    </form>
</x-layout>