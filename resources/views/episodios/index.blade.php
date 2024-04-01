
<x-layout title="Episodios" :mensagemSucesso="$mensagemSucesso"> 

 
    <form method="post">
        @csrf
        @method('put')
        <ul class="series__lista">

            @foreach($episodios as $episodio)
           
                <li class="series__lista-item"> Episodio {{ $episodio->numero }}
                    <div class="episodio__botoes-div">
                        <input type="checkbox" name="episodios[]" value="{{ $episodio->id }}"  {{ $episodio->assistido ? 'checked' : '' }}>
                    </div>
                </li>
        
            @endforeach

            <button class="botao__salvar">Salvar</button>
        
        </ul>
    </form>


</x-layout>