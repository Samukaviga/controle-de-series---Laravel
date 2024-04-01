
<x-layout title="Series">

    <a class="botao__adicionar" href="/series/criar">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="mensagemSucesso" >
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="series__lista">
         @foreach($series as $serie)
        
         <li class="series__lista-item"> <a href="/series/{{ $serie->id }}/temporadas">{{ $serie->nome }}</a> 
            <div class="series__botoes-div">
                <form action="/series/{{ $serie->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="botao__excluir" >X</button>
                </form>
                <a class="botao__editar" href="/series/{{ $serie->id }}/editar">E</a>
            </div>
        </li>
        
        @endforeach
    </ul>


</x-layout>
