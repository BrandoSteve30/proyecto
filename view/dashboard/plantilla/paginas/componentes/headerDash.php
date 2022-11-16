<!-- <section class="header_dashboard">
<div class="menu_dashboard">
    <div class="head">
        <img src="../static/img/logoDash.png" alt="Dashboard">
    </div>
    <div class="listas">
        <ul class="listado">
            <a href='index.php?pagina=dashboard&lugar=perfil'><li><span class="material-symbols-outlined">account_circle</span><span>PERFIL</span></li></a>
            <a href='index.php?pagina=dashboard&lugar=cursos'><li><span class="material-symbols-outlined">collections_bookmark</span><span>CURSOS</span></li></a>
            <a href='index.php?pagina=dashboard&lugar=calificaciones'><li><span class="material-symbols-outlined">edit_square</span><span>CALIFICACIONES</span></li></a>
            <a href='index.php?pagina=dashboard&lugar=album'><li><span class="material-symbols-outlined">photo_library</span><span>ALBUM</span></li></a>
            <a href='index.php?pagina=dashboard&lugar=alumnos'><li><span class="material-symbols-outlined">school</span><span>ALUMNOS</span></li></a>
            <a href='index.php?pagina=dashboard&lugar=usuarios'><li><span class="material-symbols-outlined">account_box</span><span>USUARIOS</span></li></a>
        </ul>
        <ul class="salir">
            <a href="controller/acceso/logout.php"><li><span class="material-symbols-outlined">logout</span><span>SALIR</span></li></a>
        </ul>
    </div>
</div>
</section>-->

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="./">Sistema Web</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
    ><!-- Navbar Search-->
    <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
        <div class="input-group-append">
        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
        </div>
        </div>
    </form>-->
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador<i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Configuración</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Salir</a>
            </div>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="index.html"
                    ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard</a>
                    
                    <?php //if($tipo_usuario == 1) { ?>
                        
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                        ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                            ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                            ></a>
                                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                            </div>
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                            >Error
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                                ></a>
                                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                                </div>
                                    </nav>
                                </div>
                                
                    <?php //} ?>
                    
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html"
                    ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts</a
                        ><a class="nav-link" href="tabla.php"
                        ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables</a
                        >
                    </div>
            </div>
        </nav>
    </div>
</div>
