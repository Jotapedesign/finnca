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
                    <h1>Registro</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- cabecera-secciones -->




    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger text-center" role="alert">
                    Para continuar con tu compra debes registrarte
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-personas-tab" data-toggle="tab" href="#personas"
                            role="tab" aria-controls="nav-personas" aria-selected="true">Persona Natural</a>
                        <a class="nav-item nav-link" id="nav-empresas-tab" data-toggle="tab" href="#empresas" role="tab"
                            aria-controls="nav-empresas" aria-selected="false">Empresa</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="personas" role="tabpanel"
                        aria-labelledby="nav-personas-tab">


                        <div class="page-title" page-title>
                            <h1>Registrato de usuario</h1>
                            <h3 class="subtitulo">Persona Natural</h3>
                        </div>
                        <br>

                        <!-- formulario registro personas naturales-->
                        <form id="registerform" novalidate action="form_action.php" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <h4>Información Personal</h4>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombree" id="nombre" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" name="nombree" id="nombre" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="usuario">Nombre de Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="">
                                    <small class="form-text text-muted">lo utilizarás para ingresar al sitio</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Te contactaremos a este correo en
                                        caso de necesitar algo</small>
                                </div>
                                <div class="form-group col">
                                    <label for="emailconfirm">Confirma tu Email</label>
                                    <input type="email" class="form-control" id="emailconfirm"
                                        aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Queremos asegurarnos de que
                                        recibas correctamente tus comprobantes y despachos.</small>
                                </div>
                                <div class="form-group col">
                                    <label for="rut">Rut</label>
                                    <input type="text" class="form-control" name="rut-usuario" id="rut-usuario"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="pais">País</label>
                                    <select id="pais" class="form-control">
                                        <option selected>Selecciona...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="ciudad">Ciudad</label>
                                    <select id="ciudad" class="form-control">
                                        <option selected>Selecciona...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="comuna">Comuna</label>
                                    <select id="comuna" class="form-control">
                                        <option selected>Selecciona...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="dirección">Dirección</label>
                                    <input type="text" class="form-control" name="direccion-persona"
                                        id="direccion-persona" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control" name="celular-persona" id="celular-persona"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="password1">Contraseña</label>
                                    <input type="password" class="form-control" id="password1">
                                </div>
                                <div class="form-group col">
                                    <label for="password2">Confirma tu contraseña</label>
                                    <input type="password" class="form-control" id="password2">
                                </div>
                                <div class="form-group col"></div>
                            </div>

                            <div class="form-row">
                                <div class="col text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Acepto los términos y Codiciones
                                        </label>
                                        <div class="invalid-feedback">
                                            Debes aceptar los términos y condiciones para continuar.
                                        </div>
                                    </div>
                                    <a href="despacho.php" class="btn btn-primary btn-next">Registrarate </a>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- fin registro persona natural-->
                    <!-- registro empresas -->
                    <div class="tab-pane fade" id="empresas" role="tabpanel" aria-labelledby="nav-empresas-tab">
                        <div class="page-title" page-title>
                            <h1>Registrato de usuario</h1>
                            <h3 class="subtitulo">Empresas </h3>
                        </div>
                        <br>
                        <form id="registerform" novalidate action="form_action.php" method="post">
                            <div class="form-row">
                                <div class="col">
                                    <h4>Información Personal</h4>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombree" id="nombre" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" name="nombree" id="nombre" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="usuario">Nombre de Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="">
                                    <small class="form-text text-muted">lo utilizarás para ingresar al sitio</small>
                                </div>

                            </div>
                            <hr/>
                            <div class="form-row">
                                <div class="col">
                                    <h4>Datos de la empresa</h4>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <label for="Razon Social">Razon Social</label>
                                    <input type="text" class="form-control" name="razonsocial" id="razon-social"
                                        placeholder="">
                                </div>
                                <div class="col">
                                    <label for="Giro">Giro</label>
                                    <input type="text" class="form-control" name="giro" id="giro" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="nombre de fantasía">Nombre de fantasía</label>
                                    <input type="text" class="form-control" name="nombre-fantasia" id="nombre-fantasia"
                                        placeholder="">

                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <label for="rut empresa">Rut de la empresa</label>
                                    <input type="text" class="form-control" name="rut-empresa" id="rut-empresa"
                                        placeholder="">
                                </div>
                                <div class="col">
                                    <label for="email">Correo de la empresa</label>
                                    <input type="email" class="form-control" id="correo-empresa"
                                        aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Te contactaremos a este correo en
                                        caso de necesitar algo</small>
                                </div>
                                <div class="col">
                                    <label for="emailconfirm">Confirma tu correo</label>
                                    <input type="email" class="form-control" id="confirm-correo-empresa"
                                        aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Queremos asegurarnos de que
                                        recibas correctamente tus comprobantes y despachos.</small>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <label for="país">Pais</label>
                                    <input type="text" class="form-control" name="pais-mepresa" id="pais-empresa"
                                        placeholder="">
                                </div>
                                <div class="col">
                                    <label for="ciudad">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad-empresa" id="ciudad-empresa"
                                        placeholder="">
                                </div>
                                <div class="col">
                                    <label for="comuna">Comuna</label>
                                    <input type="text" class="form-control" name="comuna-empresa" id="comuna-empresa"
                                        placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <label for="dirección">Dirección</label>
                                    <input type="text" class="form-control" name="direccion-empresa"
                                        id="direccion-empresa" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="representante">Representante</label>
                                    <input type="text" class="form-control" name="representante-empresa"
                                        id="representante-empresa" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control" name="celular-empresa" id="celular-empresa"
                                        placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="col">
                                    <label for="password2">Confirma tu contraseña</label>
                                    <input type="password" class="form-control" id="password2">
                                </div>
                                <div class="col">
                                </div>

                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Acepto los términos y Codiciones
                                        </label>
                                        <div class="invalid-feedback">
                                            Debes aceptar los términos y condiciones para continuar.
                                        </div>
                                    </div>
                                    <a href="despacho.php" class="btn btn-primary btn-next">Registrarate </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
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