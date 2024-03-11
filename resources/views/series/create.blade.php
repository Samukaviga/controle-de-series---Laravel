<x-layout title="Criar">

    <x-series.form action="/series" botao="Adicionar" :nome="old('nome')" :update="false"> <!-- pega o nome da ultima requisicao e adiciona no input caso de um erro -->
    </x-series.form>

</x-layout>