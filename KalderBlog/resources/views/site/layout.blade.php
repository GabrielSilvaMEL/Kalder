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
        * {
            font-family: 'Bebas Neue', cursive;
            color: white;
            margin: 0;
            padding: 0;

        }
        html{
           
        }

        header {
           
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;/* define a ordem de empilhamento, para que o cabeçalho fique na frente de outros elementos */
            text-align: center;
        }

        a {
            text-decoration: none;
            color: white;
            font-family: 'Open Sans', sans-serif;

        }

        img {
            max-height: 20rem;
        }

        footer {
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;

        }

        footer p {
            color: gray;
            font-family: 'Open Sans', sans-serif;
        }

        .linha {
            margin: 0 1rem 0 1rem
        }

        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            justify-items: center;
            align-items: center;
            height: 80%;
            width: 80%;
            margin: auto;
            grid-column-gap: 0.5rem;
        }

        .rightalign {
            text-align: right;
        }

        .card {
            height: 20rem;
            width: 20rem;
            margin: 10px;
            background-color: rgb(31, 30, 31);
            border: linear-gradient(90deg, rgba(34, 27, 35, 1) 0%, rgba(27, 30, 29, 0.258140756302521) 65%, rgba(255, 255, 255, 1) 100%);
        }

        .right {
            text-align: right;
            width: 50%;
        }

        .left {
            text-align: left;
            width: 50%
        }

        /* .background-image {
            background-image: url(foto.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        } */
        
        .topo {
          background-image: url(https://images.pexels.com/photos/7972038/pexels-photo-7972038.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
          background-repeat: no-repeat;
          background-size: cover;
          z-index: 1;
        }
        .topo > * {
            margin: 30px;
            z-index: 0;
        }
        .f{ 
            width: 30rem;
            margin: 30px auto 30px;
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
            width: 200px;
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
        
    </style> 
    </head>

  <body style="background-color:black">
    <!-- NavBar -------------------------------------------------------->
    <header > 
        <h1>Kalder Blog</h1>
        <div class="linha">
            <a class="linha" href="">Home</a>
            <a class="linha" href="">Sobre nós</a>
            <a class="linha" href="">Perfil</a>
        </div>
    </header>

    <!-- Main -->
    <main role="main">
        @yield('content')
    </main>

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