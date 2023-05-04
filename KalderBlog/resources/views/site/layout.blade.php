<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Css -->
    <!-- @vite(['public/css/style.css'])
    @vite(['public/css/custom.css']) -->

    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/images/outros/sound.png') }}">
    </link>
    <!-- <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/146/146074.png"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <style>
      html {
    height: 100%;
}
body {
    background: #000000;
    background: linear-gradient(180deg, #20182a 0%, #182b27 100%);
}

.dis-txt {
    user-select: none;
}

/** NAVBAR */
.navbar {
    background: #000000;
    background: linear-gradient(180deg, #00000063 0%, #00000000 60%);   
    --bs-bg-opacity: 0;
}
.navbar h1, .navbar a {
    color: white !important;
}

.navbar a:hover {
    text-shadow: 0px 15px 25px #ffffff;
    transition: 0.3s;
}

.navbar-title {
    font-family: 'Bebas Neue', cursive;
    font-size: 48px;
}

/** BODY */
.image-custom {
    width: 200px;
    height: auto;
    border-radius: 292px;
}

/** FOOTER */
.footer {
    
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #000000;
}
.footer h4 {
    color:white;
    font-weight: 400;
}
.footer p {
    color: #ACACAC;
}


        .home-container {
        width: 100%;
        display: flex;
        overflow: auto;
        min-height: 100vh;
        align-items: center;
        flex-direction: column;
        background-color: #000000;
        color:white;
        
        }
        .home-container1 {
        width: 457px;            
        height: 999px;
        display: flex;
        align-items: flex-start;
        flex-direction: column;
        gap:20px;
        }
        .fotinha {
            width: 202px;
            border: 2px solid white;
            border-radius:100px;
            height: 200px;
            display: flex;
            align-items: flex-start;
            flex-direction: column;
        }
        .width100{
            width:100%
        }

        .index-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
  background-color: #000000;
}
.index-container1 {
  width: 565px;
  height: 978px;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}
.index-container2 {
  flex: 0 0 auto;
  width: 100%;
  height: 254px;
  display: flex;
  align-self: center;
  align-items: center;
  border-color: #ffffff;
  border-width: 1px;
  border-radius: var(--dl-radius-radius-radius2);
  flex-direction: column;
  justify-content: center;
}
.index-container3 {
  flex: 0 0 auto;
  width: 100%;
  height: 100px;
  display: flex;
  align-self: center;
  align-items: center;
  justify-content: center;
}
.index-button {
  color: #ffffff;
  border-radius: var(--dl-radius-radius-radius8);
  background-color: #06a11a;
}
.index-button1 {
  color: #ffffff;
  border-radius: var(--dl-radius-radius-radius8);
  background-color: #b90707;
}
.index-container4 {
  width: 100%;
  height: 179px;
  display: flex;
  align-items: flex-start;
  border:2px solid white;
  border-radius:10px;
  padding:10px;
  
}
.index-container5 {
  flex: 0 0 auto;
  width: 129px;
  height: 189px;
  display: flex;
  align-self: center;
  align-items: center;
  flex-direction: column;
  justify-content: flex-start;
  gap:2px
}

.index-image {
  margin-top:10px;
  width:70%;
  height: 40%;
  align-self: flex;
  object-fit: cover;
  border-color: var(--dl-color-gray-black);
  border-width: 1px;
  border-radius: 50%;
}
.index-container6 {
  flex: 0 0 auto;
  width: 441px;
  
  height: 100%;
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}


    </style> 
    </head>

  <body style="background-color:black">
    <!-- NavBar -------------------------------------------------------->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main role="main">
        @yield('content')
    </main>

    <div class="footer pt-3">
        <div class="mt-3 row">
            <div class="col-6 text-end">
                <h4 class="dis-txt">Pres. Prudente</h4>
                <p class="mb-0">Rua Cidade Azul, 1945</p>
                <p>Jardim Brasil</p>
            </div>
            <div class="col-6 text-start">
                <h4 class="dis-txt">Contato</h4>
                <p class="mb-0">+55 (18) 98805-8371</p>
                <p>kalderblog@gmail.com</p>
            </div>
        </div>
    </div>
    <!-- Boot -------------------------------------------------------->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"></script>
  </body>
</html>