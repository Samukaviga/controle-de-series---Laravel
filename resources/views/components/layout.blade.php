<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title }} - Controle de series</title>
</head>
<body> 

    <section class="container">

        <h1>{{ $title }}</h1>

        <!-- Mensagens de erro -->
        @if ($errors->any())
        <div class="mensagemErro-div">
            <div class="mensagemErro">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </div>
        </div>
        @endif 
        <!-- end Mensagens de erro -->

        {{ $slot }}
    </section>
    
</body>
</html>