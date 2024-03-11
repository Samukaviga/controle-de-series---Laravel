
<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
        @method('PUT')
    @endif
    
    <label>Nome</label>
    <input type="text" name="nome" @isset($nome) value="{{$nome}} @endisset">
    <input class="botao__adicionar" type="submit" value="{{ $botao }}">
</form>
