<x-layout title="Criar Usuario">

    <form class="login-div" action="/usuarios" method="post">
        @csrf

        <div class="form-login">

                <label>Nome</label>
                <input autofocus type="text" name="nome" >
    
                <label>Email</label>
                <input type="email" name="email" >
       
                <label>Senha</label>
                <input type="password" name="senha">
          

        </div>
        
        <input class="botao__adicionar" type="submit" value="Cadastrar">
        
    </form>
</x-layout>