<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Agricultura Salvadoreña</title>
    <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/loader.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
</head>

<body>
    <div class="loader" id="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="contenedor">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="css/logobank.png" alt="LogoBanco">
                    <span class="navbar-brand-text">BANCO DE AGRICULTURA SALVADOREÑO</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">

                        <!-- Sección "Acciones" no editar si no es necesario po favo -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEventos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-calendar-alt fa-lg"></i>
                                Aprobación de acciones
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownEventos">
                                <li><a class="dropdown-item" href="acciones.php">Lista del personal</a></li>
                            </ul>
                        </div>

                        <!-- Sección "Sucursal" no editar si no es necesario po favo -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownReservaciones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-book fa-lg"></i>
                                Sucursal
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownReservaciones">
                                <li><a class="dropdown-item" href="sucursales.php">Registrar sucursal</a></li>
                            </ul>
                        </div>

                        <!-- Sección "Movimientos" no editar si no es necesario po favo -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMovimientos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-exchange-alt fa-lg"></i>
                                Movimientos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMovimientos">
                                <li><a class="dropdown-item" href="movimientos.php">Historial de movimientos</a></li>
                            </ul>
                        </div>

                        <!-- Sección "Iniciar sesión" no editar si no es necesario po favo -->
                        <a class="nav-link" href="login.php">
                            <i class="fas fa-sign-in-alt fa-lg"></i>
                            Iniciar Sesión
                        </a>
                    </div>

                </div>
            </div>
        </nav>
        <!-- END OF NAVBAR -->

        <div id="scroll-animate">
            <div id="scroll-animate-main">
                <div class="wrapper-parallax">
                <header>
                        
                    </header>

                    <!-- CONTENT -->
                    <section class="content">
                        <div class="aprob">
                            <h2 class="text-center">Aprobación de Acciones</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque laudantium qui officiis totam.
                                Adipisci optio perspiciatis consectetur quo dignissimos aliquam ipsa esse eligendi molestiae, facilis asperiores culpa expedita ad pariatur? <br><br> Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Omnis provident minima itaque ullam eveniet quo porro commodi laborum accusantium labore id,
                                obcaecati vero, eius qui animi corrupti nemo illum excepturi!</p>
                        </div>
                        <div class="sucursales">
                            <div class="sucur-text">
                                <h2 class="text-center">Sucursales</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam odio veritatis exercitationem, necessitatibus nemo praesentium doloremque magni et?
                                    Ipsum doloremque error dolor ab necessitatibus quae ullam harum tempore quia molestias. <br><br> Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Quam autem similique optio mollitia officiis quia, corrupti iusto, sequi minus esse qui totam maxime explicabo non dolorem
                                    dolore ullam modi in?</p>
                            </div>
                        </div>
                        <div class="movimientos">
                            <div class="mov-text">
                                <h2 class="text-center">Movimientos</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis numquam placeat quibusdam dicta voluptatibus ducimus molestiae,
                                    aperiam quo in sint ratione? Expedita facere eligendi molestiae, ipsum ullam repellendus neque necessitatibus. <br><br>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam error reiciendis voluptatem saepe, quia quibusdam? Sint,
                                    tempore nobis sit repellat explicabo ab voluptatum velit excepturi repudiandae, quam distinctio dolorum saepe.</p>
                            </div>
                        </div>
                        <footer>
                            <h1 class="text-center">Banco de Agricultura Salvadoreño © Todos los derechos reservados</h1>
                        </footer>
                    </section>
                    <!-- END OF CONTENT -->
                </div>
            </div>
        </div>
    </div>

    <!--JQUERY & JS STYLES ANIMATION-->
    <script src="JS/loader.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/script.js"></script>
</body>

</html>