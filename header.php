<header>
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-md-5 ">
                <div class="form-group">
                    <form class="form-inline mt-2 mt-md-0">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label>País</label>
                                <select class="form-control" id="País">
                                    <option>Chile</option>
                                    <option>Argentina</option>
                                    <option>Perú</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Ciudad</label>
                                <select class="form-control" id="País">
                                    <option>Santiago</option>
                                    <option>La Serena</option>
                                    <option>Coquimbo</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2 text-center brand">
                <img src="images/logo-v.png" alt="Logo Finnca">
            </div>
            <div class="col-md-5 text-right">
                
                <nav class="navbar nav text-right navbar-expand-md">
                    
                <ul class="navbar-nav ml-md-auto usuario">
                        <li class="nav-item dropdown">
                            <a class="perfil-link nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-user user"></i>
                                Bienvenido Usuario</a><span class="tipo admin1">super-admin</span>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="perfil.php">Mi perfil</a>
                            <a class="dropdown-item">Ajustes</a>
                            <a class="dropdown-item">Salir</a>
                            <div class="dropdown-divider"></div>
                                 <a class="dropdown-item">Localizaciones</a>
                                <a class="dropdown-item">Categorías</a>
                                <a class="dropdown-item">Productos</a>
                                <a class="dropdown-item">Usuarios</a>
                                <a class="dropdown-item">Empresas</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="carro " href="carro.php">
                                <img src="images/iconos/camion0.png" class="img-fluid" alt="carro">
                                <span class="badge badge-danger">9</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <!-- Menú Cabecera -->
    <div class="container-fluid ">
        <div class="row-fluid ">

    <nav class="navbar navbar-expand-md   navbar-light menu-principal">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Catálogo <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="somos.php">¿Quienes Somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hacemos.php">¿Que hacemos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Encuentra lo que necesites"
                    aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="icofont-search-1"></i></button>
            </form>
        </div>
    </nav>
    </div>
    </div>

    <!-- Fin Menú Cabecera -->
</header>