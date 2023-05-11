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

    <!-- CSS -->
    @vite('resources/css/style.css')
    @vite('resources/css/custom.css')

    <style>
      /** MODIFICAÇÕES BOOTSTRAP */
      .row {
          --bs-gutter-x: 0;
      }

      /** GERAL */
      html {
          height: 100%;
          width: 100%;
      }

      body {
          background: #151817;
          /* background-image: linear-gradient(180deg, #20182a 0%, #182b27 100%); */
          background-repeat: no-repeat;

          position: relative;
          margin: 0;
          padding-bottom: 160px; /* altura do footer */
          min-height: 100vh;
      }

      .dis-txt {
          user-select: none;
      }

      /** NAVBAR */
      .navbar {
          background: #000000;
          background: linear-gradient(180deg, #00000063 0%, #00000000 60%);   
          --bs-bg-opacity: 0;
          position: relative;
          z-index: 2;
      }

      .navbar h1, .navbar a {
          color: white !important;
      }

      .navbar a {
          transition: color .2s ease-in-out, box-shadow .2s ease-in-out;
          border-radius: 2px;
      }

      .navbar a:hover {
          box-shadow: inset 100px 0 0 0 #ffffff;
          color: #000000 !important;
      }

      .navbar h1:hover {
          transition: 0.3s;
          text-shadow: 0px 10px 30px #ffffff81;
      }

      .navbar-title {
          font-family: 'Bebas Neue', cursive;
          font-size: 48px;
      }

      /** BODY - PERFIL ||*/
      .image-custom {
          width: 200px;
          height: auto;
          border-radius: 292px;
      }

      .image-custom:hover {
          transition: 0.3s;
          text-shadow: 0px 10px 30px #ffffffd3;
      }

      /** BODY - SOBRE NÓS */
      .abtus_image {
          height: 280px;
          top: 0;
          object-fit: cover;
          object-position: 0 70%;
          position: absolute;
          z-index: 1;
      }

      .div-abtus {
          position: relative;
          z-index: 1;
          top: 20px;
          border-radius: 5px;
          background: #000000;
          background: linear-gradient(180deg, #000000 0%, #0000000f 90%);
          transition: 0.2s;
      }

      .div-abtus:hover {
          box-shadow: 10px 10px #ffffff;
          border-radius: 0px;
      }

      /** BODY - POST */
      .img-post {
          height: 400px;
          width: 800px;
          object-fit: cover;
          object-position: 0 70%;
          border-radius: 5px;
      }

      /** BODY - HOME */
      .img-home {
          height: 410px;
          top: 0;
          object-fit: cover;
          object-position: 0 0%;
          position: absolute;
          z-index: 1;
      }

      .r-div {
          position: relative;
          z-index: 1;
          top: 170px;
          margin-bottom: 170px;
      }

      .c-div {
          background: linear-gradient(180deg, #2d252e 0%, #1b2220 100%);
          border-radius: 5px;
          width: 1090px;
          height: 400px;
          margin: 0;
          margin-right: auto!important;
          margin-left: auto!important;
          transition: 0.2s;
      }

      .c-div:hover {
          box-shadow: 0px 5px #afafaf;
          border-radius: 0px;
      }

      /** FOOTER */
      .footer {
          position: absolute;
          z-index: 2;
          bottom: 0;
          width: 100%;
          height: 110px;
          background-color: #000000;
      }

      .footer h4 {
          color:white;
          font-weight: 400;
      }

      .footer p {
          color: #ACACAC;
      }
    </style>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item {{ (Route::current()->getName() === 'site.about' ? ' active' : '') }}">
                        <a class="nav-link" href="{{ route('site.about') }}">Sobre Nós</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
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