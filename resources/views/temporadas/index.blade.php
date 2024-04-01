
<x-layout title="Temporadas de {!! $serie->nome !!}">

    <ul class="series__lista">
         @foreach($temporadas as $temporada)
        
         <li class="series__lista-item"> Temporada {{ $temporada->numero }}
            <div class="series__episodios-div">
                 <a href="/temporadas/{{ $temporada->id }}/episodios">{{ $temporada->NumeroDeEpisodiosAssistidos(); }}/{{ $temporada->Episodios->count() }} Ep.</a>
            </div>
        </li>
        
        @endforeach
    </ul>


</x-layout>
