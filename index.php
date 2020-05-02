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
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
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
    <!-- Cabecera -->
    <?php include 'cabecera-home.php' ?>
    <!-- Fin Cabecera -->

    <!-- banners -->
    <!-- Fin banners -->

    <!-- Productos -->
    <main id="catalogo" role="main" class="container">
    <section class="filtros">
        <div class="container">
        <div class="row filtros">
                        <div class="col-12 text-center">
                            <h2>¿Buscas algún producto?</h2>
                        </div>
                    </div>

            <div class="row">
                <div class="col-md-12 text-center">

                    <form class="form-inline">
                        <div class="form-row">
                                <label class="mr-sm-2">Categoría</label>
                                <select class="form-control " id="País">
                                    <option>Frutas</option>
                                    <option>Verduras</option>
                                </select>
                                <label class="mr-sm-2 ml-sm-4">Ordenar por..</label>
                                <select class="form-control " id="País">
                                    <option>Precio de mayor a menor</option>
                                    <option>Precio de menor a mayor</option>
                                    <option>Productos más vendidos</option>
                                    <option>Productos menos vendidos</option>
                                </select>
                                <input class="form-control mr-sm-2 ml-sm-2" type="text" placeholder="Encuentra lo que necesites"
                                aria-label="Search">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit"><i
                                    class="icofont-search-1"></i></button>


                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

        <div class="row">
            <div class="col-md-12">
                <h3>Encuentra todo lo que necesitas</h3>
                <hr />
                <h5>Filtro</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeIn">
                <div class="card text-center">
                    <img src="images/productos/manzana.png" alt="manzana" class="card-img-top ">
                    <div class="card-body">
                        <h5 class="card-title producto">Manzana</h5>
                        <h4 class="card-text precio">$1200 kg</h4>
                        <form>
                            <div class="form-group col-8 offset-2">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty"
                                    class="qty text form-control" size="8" pattern="" inputmode="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-add"><i
                                    class="icofont-cart-alt"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeIn">
                <div class="card text-center ">
                    <div class="ribbon ribbon-top-left"><span>¡Nuevo!</span></div>
                    <img src="images/productos/manzana.png" alt="manzana" class="card-img-top ">
                    <div class="card-body">
                        <h5 class="card-title producto">Manzana</h5>
                        <h4 class="card-text precio">$1200 kg</h4>
                        <form>
                            <div class="form-group col-8 offset-2">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty"
                                    class="qty text form-control" size="8" pattern="" inputmode="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-add"><i
                                    class="icofont-cart-alt"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeIn">
                <div class="card text-center">
                    <div class="ribbon ribbon-top-left oferta"><span>¡Promoción!</span></div>
                    <img src="images/productos/manzana.png" alt="manzana" class="card-img-top ">
                    <div class="card-body">
                        <h5 class="card-title producto">Manzana</h5>
                        <h4 class="card-text precio">$1200 kg</h4>
                        <form>
                            <div class="form-group col-8 offset-2">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty"
                                    class="qty text form-control" size="8" pattern="" inputmode="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-add"><i
                                    class="icofont-cart-alt"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeIn">
                <div class="card text-center agotado">
                    <div class="ribbon ribbon-top-left agotado"><span>Agotado</span></div>
                    <img src="images/productos/manzana.png" alt="manzana" class="card-img-top ">
                    <div class="card-body">
                        <h5 class="card-title producto">Manzana</h5>
                        <h4 class="card-text precio">$1200 kg</h4>
                        <h6>¡Estamos cosechando para reponer el stock!</h6>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center text-center">
            <div *ngFor="let product_price of products | paginate: {itemsPerPage: 1, currentPage: pageActual}"
                class="justify-content-center mt-2">

                <form #cartForm="ngForm" (ngSubmit)="onSubmitCart(id.value, cantidad.value, cartForm)" class="mb-3">

                    <div class="card ml-1 mr-1" style="width: 18rem;">
                        <img class="card-img-top" src="images/productos/manzana.png" />
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <span>
                                <div *ngIf="product_price.type == 1" class="card-text">
                                    <h4 class="precio">$1200 - KG</h4>
                                    <h6 class="unitario">$100 - C/U</h6>
                                </div>
                            </span>
                            <div class="form-group col-8 offset-2">
                                <input type="number" name="cantidad" #cantidad class="form-control mt-2">
                            </div>
                            <input type="hidden" name="id" #id value="{{product_price.id}}">
                            <button class="btn btn-success btn-add"><i class="icofont-cart-alt"></i></button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

        <!--paginación -->
        <div class="row paginacion">
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--Fin paginación -->

    </main>
    <!-- Fin Productos -->

    <!-- Newsletter -->
    <section id="newsletter">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text text-center">
                                <h5>Suscríbete a nuestro newsletter</h5>
                                <p>Y recibe importantes ofertas y descuentos</p>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="nombrenews">Nombre</label>
                                    <input type="email" class="form-control" id="nombrenews"
                                        placeholder="Ingresa tu correo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Nos aseguraremos de guardar muy
                                        bien tu información</small>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Acepto la Política de
                                        privacidad</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Suscribirme</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Newsletter -->

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
                <div class="col-md-2"><img src="images/webpay.jpg" alt="Medios de pago" class="img-fluid img-pagos">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/flickity.min.js"></script>
<script>
new WOW().init();
</script>
<script>
$('#finnCarousel').carousel({
    interval: 5000,
})
</script>