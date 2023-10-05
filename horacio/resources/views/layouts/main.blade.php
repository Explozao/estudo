<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- css da aplicaçao -->
        <link rel="stylesheet" href="/css/estylo.css">

        
        <!-- fonte do google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Roboto" rel="stylesheet">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/imagem/mmm.jpg" alt="logo" class="imgpp">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/eventos" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/criarEventos" class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/entrar" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cadastrar" class="nav-link">Cadaster</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>ControloM@nuel &copy; 2023</p>
        </footer>
    </body>
</html>