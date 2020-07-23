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
            <div class="col-md-8 offset-md-2">
                <div class="alert alert-danger text-center" role="alert">
                    Revisa cuidadosamente los datos ingresados, y de ser necesario, actualiza tu información o continúa.
                </div>
            </div>
        </div>

        <section id="contenido">
        <div class="row">
            <div class="col-md-6">
                <h2>Datos de usuario</h2>
                <ul class="resumen-pedido">
                        <li><i class="icofont-check-alt"></i><Strong>Nombre: </Strong>Juan Pablo Peña Contreras
                        </li>
                        <li><i class="icofont-check-alt"></i><strong>Correo Electrónico: </Strong>usuario@1234.cl</li>
                    </ul>

            </div>
            <div class="col-md-5 offset-md-1">
                <h2>Despacho</h2>


                    <div class="card">
                        
                        <div class="card-body">
                                <h6><strong>Hogar:</strong> hogar 1</h6>
                                <h6><strong>Dirección:</strong> </h6>
                            <p>Av. Juan Cisternas 2283 Of. 03
                                La Serena
                                Región de Coquimbo
                                Chile</p>
                        </div>
                    </div>

                    <div class="form-row pagos-ico">
                        <div class="col text-center">
                            <a href="pago.html" class="btn btn-primary">Continuar</a>
                        </div>
                    </div>

            </div>
        </div>

        <!-- detalles del pedido -->

        <div class="row">
            <div class="col-md-8 offset-md-2">
<h2 class="text-center"> Resumen de tu pedido </h2>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Vista previa</th>
                            <th scope="col">Producto</th>
                            <th scope="col">$ Precio (CLP)</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Sub-total</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><img src="images/miniaturas/manzana-thumb.webp" alt="manzana"
                                    class="img-fluid"></th>
                            <td>
                                <h6>Tomate de arica</h6>
                                <p class="peso">20kg</p>
                            </td>
                            <td>
                                <h6>$2.400</h6>
                            </td>
                            <td>
                                <div class="form-group col-8 offset-2">
                                    <span>1</span>
                                </div>
                            </td>
                            <td>
                                <h6>$2.400</h6>
                            </td>
                            <td><a href="#"><i class="icofont-edit primary"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="images/miniaturas/manzana-thumb.webp" alt="manzana"
                                    class="img-fluid"></th>
                            <td>
                                <h6>Tomate de arica</h6>
                                <p class="peso">20kg</p>
                            </td>
                            <td>
                                <h6>$2.400</h6>
                            </td>
                            <td>
                                <div class="form-group col-8 offset-2">
                                    <span>1</span>
                                </div>
                            </td>
                            <td>
                                <h6>$2.400</h6>
                            </td>
                            <td><a href="#"><i class="icofont-edit primary"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row"><img src="images/miniaturas/manzana-thumb.webp" alt="manzana"
                                    class="img-fluid"></th>
                            <td>
                                <h6>Tomate de arica</h6>
                                <p class="peso">20kg</p>
                            </td>
                            <td>
                                <h6>$2.400</h6>
                            </td>
                            <td>
                                <div class="form-group col-8 offset-2">
                                    <span>1</span>
                                </div>
                            </td>
                            <td>
                                <h6>$2.400</h6>
                            </td>
                            <td><a href="#"><i class="icofont-edit primary"></i></a></td>

                        </tr>
                        <tr class="table-primary ">
                            <th colspan="5" scope="row">Neto:</th>
                            <td>$7.200</td>
                        </tr>
                        <tr class="table-primary">
                            <th colspan="5" scope="row">Descuento:</th>
                            <td>0</td>
                        </tr>
                        <tr class="table-primary">
                            <th colspan="5" scope="row">IVA:</th>
                            <td>$1.368</td>
                        </tr>
                        <tr class="table-primary">

                            <th colspan="5" scope="row">Total:</th>
                            <td>$8.568</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        </section>
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
                        <li class="nav-item"><a class="nav-link" href="#"><i class="icofont-facebook"></i> Finnca</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="icofont-instagram"></i> @Finnca</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="row" id="post-pie">
                <div class="col-md-5">
                    <p>© 2020 DIseñador por: JotaPe DIseño y Comunicación - www.Jotape.cl</p>
                </div>
                <div class="col-md-5">
                    <p><a href="#"><i class="icofont-envelope"></i> contacto@finnca.cl</a> - <i
                            class="icofont-phone"></i> 123456789</p>
                </div>
                <div class="col-md-2"><img src="images/webpay.webp" alt="Medios de pago" class="img-fluid img-pagos">
                </div>
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