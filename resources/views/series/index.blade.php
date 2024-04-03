
<x-layout title="Series">

    @auth
        <a class="botao__adicionar" href="/series/criar">Adicionar</a>
    @endauth

    @isset($mensagemSucesso)
        <div class="mensagemSucesso" >
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="series__lista">
         @foreach($series as $serie)
        
         <li class="series__lista-item"> @auth <a href="/series/{{ $serie->id }}/temporadas"> @endauth {{ $serie->nome }} @auth </a> @endauth 
            <div class="series__botoes-div">
                
                @auth
                    <form action="/series/{{ $serie->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="botao__excluir" >X</button>
                    </form>
                    <a class="botao__editar" href="/series/{{ $serie->id }}/editar">E</a>
                @endauth
                
            </div>
        </li>
        
        @endforeach
    </ul>


</x-layout>
