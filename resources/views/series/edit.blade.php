<x-layout title="Editar Série - {!! $nome !!}">

    <x-series.form action="/series/{{$id}}" botao="Editar" nome="{!! $nome !!}" :update="true" ></x-series.form>

</x-layout>