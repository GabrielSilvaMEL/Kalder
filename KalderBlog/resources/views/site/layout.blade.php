<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kalder Blog | Bem-Vindo</title>

    <!-- Google-Fonts - Bebas Neue -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Google-Fonts - Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/images/outros/blog.png') }}"></link>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/4305/4305612.png">

    <!-- CSS -->
    @vite('resources/css/style.css')
    @vite('resources/css/indexperfis.css')

  </head>

  <body>
    <!--! navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
        <div class="container-fluid" style="display:block;">

            <!--* head -->
            <h1 class="navbar-title text-center dis-txt">KALDER BLOG</h1>

            <!--* navbar-toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--* content -->
            <div class="collapse navbar-collapse" style="justify-content:center;" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('site.home') }}">Home</a>
                    </li>

                    <li class="nav-item {{ (Route::current()->getName() === 'site.about' ? ' active' : '') }}">
                        <a class="nav-link" href="{{ route('site.about') }}">Sobre Nós</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.autores') }}">Autores</a>
                    </li>

                    <!-- CRUDs -->
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CRUDs
                        </button>

                        <ul class="dropdown-menu bg-transparent">
                            <li><a class="dropdown-item" href="{{ route('autoresmanager.create') }}">Criar Autor</a></li>
                            <li><a class="dropdown-item" href="{{ route('autoresmanager.index') }}">Visualizar Autores</a></li>
                            <li><a class="dropdown-item" href="{{ route('postsmanager.create') }}">Criar Postagem</a></li>
                            <li><a class="dropdown-item" href="{{ route('postsmanager.create') }}">Visualizar Postagens</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!--! Main -->
    <main role="main">
        @yield('content')
    </main>

    <!--! footer -->
    <div class="footer">
        <div class="pt-2 row">
            <div class="col me-4 text-end">
                <h4 class="dis-txt">Pres. Prudente</h4>
                <p class="mb-0">Rua Cidade Azul, 1945</p>
                <p>Jardim Brasil</p>
            </div>
            <div class="col text-start">
                <h4 class="dis-txt">Contato</h4>
                <p class="mb-0">+55 (18) 98805-8371</p>
                <p>kalderblog@gmail.com</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  </body>
</html>