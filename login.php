<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Juan Pablo Peña">
    <meta name="generator" content="J">
    <title>Finnca</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <!-- tipografías -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- icofont -->
    <link href="css/icofont.css" rel="stylesheet">

</head>

<body>

    <!-- Cabecera -->
    <?php include 'header.php' ?>
    <!-- Fin  Cabecera -->
    <!-- cabecera-secciones -->
    <section id="header-carro">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 ">
                    <h1>Ingreso</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- cabecera-secciones -->




    <main role="main" class="container">
<div class="row">
    
    <div class="col-md-12">
    <div class="alert alert-danger text-center" role="alert">
Debes ingresar para completar tu compra.</div>

    <h1>Ingreso</h1>
    </div>
</div>
    <div class="row">
            <div class="col-md-4 offset-md-4">

<form id="loginform"  novalidate action="form_action.php" method="post">
  <div class="form-group">
    <label for="login-name">Nombre de usuario / Email</label>
    <input type="email" class="form-control" id="login-name" aria-describedby="loginnamelHelp">
    <small id="loginnamelHelp" class="form-text text-muted">Ingresa con tu nombre de usuario o correo electrónico</small>
  </div>
  <div class="form-group">
    <label for="laginpass">Contraseña <a href="#" class=""><small>¿Olvidaste tu contraseña?</small></a></label>
    <input type="password" class="form-control" id="laginpass">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="logincheck">
    <small class="form-text text-muted" for="logincheck">Mantenerme conectado</small>
  </div>
  <a href="despacho.php" class="btn btn-primary btn-block">Ingresar</a>
  <br/>
  <h5 class="text-center">¿Primera vez por aqui?</h5>
  <a href="registro.php" class="btn btn-secondary btn-block">Registrate</a>
    </div>
        </div>
    </main>



    <!-- Footer -->
    <footer id="footer" class="blog-footer">
        <div class="container">
            <div class="row menupie">
                <div class="col-md-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">¿Quienes Sómos?</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">¿Que hacemos?</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Partners</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Convenios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" href="#">Política de privacidad</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mapa del Sitio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Preguntas Frecuentes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Términos y Condiciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Servicio al cliente</a></li>
                    </ul>

                </div>
                <div class="col-md-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" href="#">Mi cuenta</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Ingreso</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Registrarme</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Registra tu empresa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Historial de compras</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mi camión de compras</a></li>
                    </ul>

                </div>
                <div class="col-md-3">

                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link disabled" href="#">Síguenos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="icofont-facebook"></i> Finnca</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="icofont-instagram"></i> @Finnca</a></li>
                    </ul>

                </div>
            </div>
            <div class="row" id="post-pie">
                <div class="col-md-5">
                    <p>© 2020 DIseñador por: JotaPe DIseño y Comunicación - www.Jotape.cl</p>
                </div>
                <div class="col-md-5">
                    <p><a href="#"><i class="icofont-envelope"></i> contacto@finnca.cl</a> - <i class="icofont-phone"></i> 123456789</p>
                </div>
                <div class="col-md-2"><img src="images/webpay.webp" alt="Medios de pago" class="img-fluid img-pagos"></div>
            </div>
        </div>
    </footer>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/wow.min.js"></script>

<script>
    new WOW().init();
</script>