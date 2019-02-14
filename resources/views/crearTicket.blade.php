<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <form action="#" method="POST">
                @csrf
                <p>
                    <input type="text" placeholder="title">
                </p>
                <p>
                    <input type="text" placeholder="prioridad">
                </p>
                <p>
                    <input type="textarea" placeholder="mensaje">
                </p>
                <p>
                    <select name="" id="">
                        <option disabled hidden selected>Categorias</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </p>
                <p>

                </p>
                <p>
                    <button type="submit">
                        Enviar
                    </button>
                </p>
            </form>
        </div>
        {{ $tickets->render() }}
    </body>
</html>
