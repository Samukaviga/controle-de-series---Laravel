<x-layout title="Criar">

    <form class="form-create" action="/series" method="post">
        @csrf

        <div class="form-grid">
            <div>
                <label>Nome</label>
                <input autofocus type="text" name="nome" value="{{ old('nome') }} ">
            </div>

            <div>
                <label>N° Temporadas</label>
                <input type="text" name="temporadas" value="{{ old('temporadas') }} ">
            </div>

            <div>
                <label>N° Episodios p/ Temporadas</label>
                <input type="text" name="episodios" value="{{ old('episodios') }} ">
            </div>
        </div>
        
        <input class="botao__adicionar" type="submit" value="Adicionar">
    </form>
    



    


</x-layout>