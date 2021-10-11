<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Meta agregado por Bs-->

    <meta charset="UTF-8">

    <title>Rotiseria "Andel"</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <?php /* 
        function encabezado(){
            $salida = '<a href="pagina.php">pagina creada para el ambito de </a>';
            echo $salida;
        } */
    ?> 
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img id="logo" src="css/imagenes/logo.gif" alt="rotiseria ANDEL"></a>
                <a class="navbar-brand" href="index.php">
                    <h1 class="tituloNavegador">ROTISERIA ANDEL</h1>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="menu.php#spiedo">Spiedo</a></li>
                                <li><a class="dropdown-item" href="menu.php#ensaladas">Ensaladas</a></li>
                                <li><a class="dropdown-item" href="menu.php#pastas">Pastas</a></li>
                                <li><a class="dropdown-item" href="menu.php#platosCalientes">Platos Calientes</a></li>
                                <li><a class="dropdown-item" href="menu.php#platosFrios">Platos Frios</a></li>
                                <li><a class="dropdown-item" href="menu.php#minutas">Minutas</a></li>
                                <li><a class="dropdown-item" href="menu.php#sandwiches">Sandwiches</a></li>
                                <li><a class="dropdown-item" href="menu.php#tartas">Tartas</a></li>
                                <li><a class="dropdown-item" href="menu.php#pizzas">Pizzas</a></li>
                                <li><a class="dropdown-item" href="menu.php#bebidas">Bebidas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php" target="_blank">Nosotros
                        </li></a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ubicación
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="menu.php"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1563.852170892682!2d-60.27235873343025!3d-38.37896053943159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1621903586995!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#tituloFooter">Contacto
                    </li></a>
                        </li>


                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="compra.php" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </li></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="promociones">
        <h1> PROMOCIONES DE LA SEMANA</h1>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img class="promo" src="css/imagenes/combo1.gif" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="promo" src="css/imagenes/combo2.gif" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="promo" src="css/imagenes/combo3.gif" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <section class="producto">
        <div id="box1">

            <div class="box">
                <img class="producto" src="css/imagenes/pizza.png" alt="pizzas">

                <h2 class="tituloProductos">PIZZAS</h2>
            </div>

        </div>
        <div id="box2">

            <div class="box">
                <img class="producto" src="css/imagenes/empanadas.png" alt="empanadas">
                <h2 class="tituloProductos">EMPANADAS</h2>
            </div>

        </div>

        <div id="box3">

            <div class="box">
                <img class="producto" src="css/imagenes/tarta.png" alt="tartas">
                <h2 class="tituloProductos">TARTAS</h2>
            </div>

        </div>
        <div id="box4">

            <div class="box">
                <img class="producto" src="css/imagenes/postres.png" alt="postres">

                <h2 class="tituloProductos">POSTRES</h2>
            </div>

        </div>
        <div id="box5">

            <div class="box">
                <img class="producto" src="css/imagenes/comidaRapida.png" alt="Comida rapida">
                <h2 class="tituloProductos">COMIDA RÁPIDA</h2>
            </div>

        </div>
        <div id="box6">

            <div class="box">
                <img class="producto" src="css/imagenes/spiedo.png" alt="spiedo">
                <h2 class="tituloProductos">SPIEDO</h2>
            </div>

        </div>

    </section>


    <!--VER FOOTER, NO QUEDA ABAJO DEL TODO-->
    <footer>
        <!--<div id="col1">-->
        <h1 id="tituloFooter">Contacto</h1>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg><a href="tel:+542983446021" class="link"> 2983-446021</a></p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
          </svg><a href="mailto:anddi.verne@hotmail.com" class="link">andel@hotmail.com</a></p>
        </div>

        <!--<div id="col2">
        <h1 class="tituloFooter">Ubicacion</h1>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1563.852170892682!2d-60.27235873343025!3d-38.37896053943159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1621903586995!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        
    </div>-->
    
    <p id="creador">Creado por Andrea Verne y Joel Carbonetti</p>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>