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

<?php
	
	// session_start();
	
	// if(!isset($_SESSION['id'])){
	// 	header("Location: index.php");
	// }
	
	// $nombre = $_SESSION['nombre'];
	// $tipo_usuario = $_SESSION['tipo_usuario'];

	// try {
    
	// 	$cox = new PDO("mysql:host=localhost;dbname=brando","root","");
	
	// } catch (Exception $e) {
	
	// 	echo $e->getMessage();
		
	// }

	// $total = "SELECT COUNT(*) FROM alumnos";
	// $rest = $cox->query($total);
	// $countt = $rest->fetchColumn();

	// $pendiente = "SELECT COUNT(*) FROM alumnos where Estado='Recuperacion'";
	// $resp = $cox->query($pendiente);
	// $countp = $resp->fetchColumn();

	// $acepto = "SELECT COUNT(*) FROM alumnos where Estado='Aprobo'";
	// $resa = $cox->query($acepto);
	// $counta = $resa->fetchColumn();

	// $rechazo = "SELECT COUNT(*) FROM alumnos where Estado='Desaprobo'";
	// $resr = $cox->query($rechazo);
	// $countr = $resr->fetchColumn();
	
	
?>


    <div class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Sistema Web</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../../controller/acceso/logout.php">Salir</a>
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
                                Dashboard</a
							>
							
							<?php if($tipo_usuario == 1) { ?>
								
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
										
							<?php } ?>
							
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
            <!-- <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
						</ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
										<h5>Alumnos</h5>
										<p id="tot"><?php echo $countt ?></p>							
									</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body  d-flex align-items-center justify-content-between">
										<h5>Recuperacion</h5>
										<p id="rec"><?php echo $countp ?></p>
									</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body  d-flex align-items-center justify-content-between">
										<h5>Aprobados</h5>
										<p id="apro"><?php echo $counta ?></p>
									</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body  d-flex align-items-center justify-content-between">
										<h5>Desaprobados</h5>
										<p id="desa"><?php echo $countr ?></p>
									</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
									</div>
								</div>
							</div>
						</div>
                        <div class="row"> -->

                            <!-- <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
								</div>
							</div> -->

                            <!-- <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
								</div>
							</div>
						</div>
			</div> -->
		</div>


		<script>
			var ctx = document.getElementById("myBarChart");
			var myLineChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Alumnos", "Recuperacion", "Aprobo", "Rechazo"],
				datasets: [{
				label: "Revenue",
				backgroundColor: "rgba(2,117,216,1)",
				borderColor: "rgba(2,117,216,1)",
				data: [0,10,15,20,25,30],
				}],
			},
			options: {
				scales: {
				xAxes: [{
					time: {
					unit: 'month'
					},
					gridLines: {
					display: false
					},
					ticks: {
					maxTicksLimit: 6
					}
				}],
				yAxes: [{
					ticks: {
					min: 0,
					max: 15000,
					maxTicksLimit: 5
					},
					gridLines: {
					display: true
					}
				}],
				},
				legend: {
				display: false
				}
			}
			});

		</script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
        <script src="assets/demo/chart-bar-demo.js"></script>
        <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script> -->
        <script src="assets/demo/datatables-demo.js"></script>
        </div>
