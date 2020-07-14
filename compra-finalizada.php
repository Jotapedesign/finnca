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
    <!--
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.webp" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.webp" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.webp" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
-->

    <!-- tipografías -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- icofont -->
    <link href="css/icofont.css" rel="stylesheet">

    <style type="text/css">
    #registerform fieldset:not(:first-of-type) {
        display: none;
    }
    </style>
</head>

<body>

    <!-- Cabecera -->
    <?php include 'header.php' ?>
    <!-- Fin  Cabecera -->

    <!-- cabecera-secciones -->
    <div class="jumbotron jumbotron-fluid" id="cabecera-resumen">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="transparencia">

                        <h2 class="display-5">¡Tu compra se ha realizado con éxito!</h2>
                        <p class="lead">Mientras preparamos tu pedido, recibiras la orden de compra en tu correo de
                            contacto</p>
                        <p>Ante cualquier duda, comunicate con nuestra mesa de soporte</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- cabecera-secciones -->
    <!-- Contenido -->
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Resumen de tu pedido</h1>
            </div>
        </div>
        <article>
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <ul class="resumen-pedido">
                        <li><i class="icofont-check-alt"></i><strong>Nº: </strong> 0001</li>
                        <li><i class="icofont-check-alt"></i><Strong>Solicitado por: </Strong>Juan Pablo Peña Contreras
                        </li>
                        <li><i class="icofont-check-alt"></i><strong>Fecha de ingreso: </strong>Martes 21 de Abril de
                            2020</li>
                        <li><i class="icofont-check-alt"></i><strong>Valor total: </Strong>$8.568</li>
                        <li><i class="icofont-check-alt"></i><strong>Estado: </strong>En progreso <img
                                src="images/iconos/camion-animado1.gif" alt="pedido en progreso"></li>
                        <li><i class="icofont-check-alt"></i><strong>Medio de Pago </strong>Payu</li>
                        <li><i class="icofont-check-alt"></i><strong>Comprobante tributario: </strong>Boleta</li>
                        <li><i class="icofont-check-alt"></i><strong>Dirección de despacho: </strong> Pasaje San Isidro
                            4260. La Serena</li>
                        <li><i class="icofont-check-alt"></i><strong>Fecha estimada de entrega: </strong> Viernes 24 de
                            Abril</li>
                    </ul>
                </div>
            </div>
            <div class="row intro-text">
                <div class="col-md-8 offset-md-2">
                    <h3>Detalle de tu compra</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Vista previa</th>
                                <th scope="col">Producto</th>
                                <th scope="col">$ Precio (CLP)</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Sub-total</th>
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
                                    <p>$2.400</p>
                                </td>

                                <td>
                                    <div class="form-group col-8 offset-2">
                                        <span>1</span>
                                    </div>
                                </td>
                                <td>
                                    <h6>$2.400</h6>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/miniaturas/manzana-thumb.webp" alt="manzana"
                                        class="img-fluid"></th>
                                <td>
                                    <h6>Tomate de arica</h6>
                                    <p class="peso">20kg</p>
                                </td>
                                <td>
                                    <p>$2.400</p>
                                </td>
                                <td>
                                    <div class="form-group col-8 offset-2">
                                        <span>1</span>
                                    </div>
                                </td>
                                <td>
                                    <h6>$2.400</h6>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/miniaturas/manzana-thumb.webp" alt="manzana"
                                        class="img-fluid"></th>
                                <td>
                                    <h6>Tomate de arica</h6>
                                    <p class="peso">20kg</p>
                                </td>
                                <td>
                                    <p>$2.400</p>
                                </td>
                                <td>
                                    <div class="form-group col-8 offset-2">
                                        <span>1</span>
                                    </div>
                                </td>
                                <td>
                                    <h6>$2.400</h6>
                                </td>
                            </tr>
                            <tr class="table-secondary ">
                                <th colspan="4" scope="row">Neto:</th>
                                <td>$7.200</td>
                            </tr>
                            <tr class="table-secondary">
                                <th colspan="4" scope="row">Descuento:</th>
                                <td>0</td>
                            </tr>
                            <tr class="table-secondary">
                                <th colspan="4" scope="row">IVA:</th>
                                <td>$1.368</td>
                            </tr>
                            <tr class="table-primary">

                                <th colspan="4" scope="row">Total:</th>
                                <td>$8.568</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </article>






    </main>
    <!-- Fin Contenido -->

    <!-- Que hacemos -->
    <section id="servicio">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6 offset-md-6">
                    <div class="transparencia">
                        <h2>¿Aún no sabes cómo gestionamos tu pedido?</h2>
                        <h5>Te inviamos a saber un poco mas de La Finnca</h5>
                        <p> <a href="que-hacemos.html" class="btn btn-lg btn-primary">Aquí</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin que hacemos -->


    <!-- footer -->
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
<script src="js/pasos.js"></script>
<script src="js/modals-registro.js"></script>

<script>
new WOW().init();
</script>