<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sivaropoly Money Gram</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
	<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Sivaropoly Banck</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio"></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"></a></li>
                        <!--<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/coralogo.png" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Juegas como el Banco Sivaropoly</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Regala Bonos - Facilita las Hipotecas de Propiedades  - Paga por El Viaje</p>
            </div>
        </header>
		<?php
//Conectar con el servidor
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '1'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
       }
    }
    }
?>
	<div class="table-responsive">
	<table class="table" >
		<tr>
            <th><center><h1>SALDO ACTUAL-CUENTA BANCO</th> <?php
                        while($row=mysqli_fetch_array($ejecuta_sentencia)) {                              
                          echo"<tr class='warning'>";
                            echo"<td><h1><center>$".$row['saldo']."</td>";
                            echo"<td></td>";
                          echo"</tr>";
                        }
                    ?>
            <tr>
	</table>
	</div>
	<section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tramites</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
					<h5><center>Consultar Saldos</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cabina.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
					<h5><center>Transferir dinero a la Moto</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/moto.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
					<h5><center>Transferir dinero al Bus</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/bus.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
					<h5><center>Transferir dinero a la Micro</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/micro.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
					<h5><center>Transferir dinero al Taxi</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/taxi.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
					<h5><center>Transferir dinero al Camion</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/camion.png" alt="" />
                        </div>
                    </div>
					<!-- Portfolio Item 7-->
                    <div class="col-md-6 col-lg-4">
					<h5><center>Transferir dinero al Carro</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal7">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/auto.png" alt="" />
                        </div>
                    </div>
					<!-- Portfolio Item 8-->
                    <div class="col-md-6 col-lg-4">
					<h5><center>Reinicio de Cuentas</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal8">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/gameover.png" alt="" />
                        </div>
                    </div>
					
					 <div class="row justify-content-center">
                </div>
            </div>
        </section>
		<!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
		<?php
echo 'Estado de la Conexión:  ';
$enlace =  mysql_connect('localhost', 'root', '');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>
        </footer>
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Sivaropoly</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cuentas.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <h5 class="mb-5">SALDO DE LAS CUENTAS DEL JUEGO.</h5>
				<?php
//Conectar con el servidor
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          
       }
    }

    }


?>
									<div class="table-responsiveresponsive">
									<table class="table">
										<tr>
										<th>CUENTAS</th>
										<th>SALDO</th> <?php
											while($row=mysqli_fetch_array($ejecuta_sentencia)) {                              
													echo"<tr>";
													echo"<td>".$row['cuenta']."</td>";
													echo"<td>$".$row['saldo']."</td>";
													echo"<td></td>";
													echo"</tr>";
											}
											?>
										<tr>
									</table>
                                    
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
									</div>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Moto</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/target.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <h5 class="mb-5">Ingresa la cantidad de la Transferencia.</h5>
									
									<!-- Contact Section Form-->
									<div class="row">
										 <div class="col-lg-8 mx-auto">
										 <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
											 <form id="formw" name="formulario" method="post" novalidate="novalidate">
												<div class="control-group">
													<div class="form-group floating-label-form-group controls mb-0 pb-2">
														<label>Cantidad $</label>
														<input class="form-control" id="name" name="ingreso" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." required pattern="[0-9]{2,10}" />
														<p class="help-block text-danger"></p>
														
													</div>
												</div>
												<br />
										 <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Transferir</button></div>
											</form>
										 </div>
									</div>
<?php
//Conectar con el servidor para cada consulta proceso de INGRESO DE CUENTA
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '2'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
$total1 = 0;	
$total1 = $_POST['ingreso']; // total declarado antes del bucle proceso de SUMA
    while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total = $row['saldo'] + $total1; // Sumar variable $total + resultado de la consulta
    }
    //echo $total;  //Se imprime $total y se realiza la suma este proceso es de prueba
	
	
	$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total." WHERE `id_jugador`= 2";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }

//Conectar con el servidor otra vez para la actualizacion
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '1'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }




	//procedemos con el proceso de resta de valor
	$total2 = $total1;
while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total3 = $row['saldo'] - $total2; // Sumar variable $total - resultado de la consulta
    }
    //echo "<h2>$total3"; // Se imprime $total y se realiza la resta
	
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
		  $total2 = 0;
       }
    }

    }
	
?>									
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">El Bus</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/target.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <h5 class="mb-5">Ingresa la cantidad de la Transferencia.</h5>
                                    
									<!-- Contact Section Form-->
									<div class="row">
										 <div class="col-lg-8 mx-auto">
										 <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
											 <form id="formw" name="formulario" method="post" novalidate="novalidate">
												<div class="control-group">
													<div class="form-group floating-label-form-group controls mb-0 pb-2">
														<label>Cantidad $</label>
														<input class="form-control" id="name" name="ingreso3" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." required pattern="[0-9]{2,10}" />
														<p class="help-block text-danger"></p>
														
													</div>
												</div>
												<br />
										 <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Transferir</button></div>
											</form>
										 </div>
									</div>
<?php
//Conectar con el servidor para cada consulta proceso de INGRESO DE CUENTA
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '3'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
$total1 = 0;	
$total1 = $_POST['ingreso3']; // total declarado antes del bucle proceso de SUMA
    while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total = $row['saldo'] + $total1; // Sumar variable $total + resultado de la consulta
    }
    //echo $total;  //Se imprime $total y se realiza la suma este proceso es de prueba
	
	
	$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total." WHERE `id_jugador`= 3";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }

//Conectar con el servidor otra vez para la actualizacion
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '1'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }




	//procedemos con el proceso de resta de valor
	$total2 = $total1;
while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total3 = $row['saldo'] - $total2; // Sumar variable $total - resultado de la consulta
    }
    //echo "<h2>$total3"; // Se imprime $total y se realiza la resta
	
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
		  $total2 = 0;
       }
    }

    }
	
?>									
									
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">la Micro</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/target.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <h5 class="mb-5">Ingresa la cantidad de la Transferencia.</h5>
									
									<!-- Contact Section Form-->
									<div class="row">
										 <div class="col-lg-8 mx-auto">
										 <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
											 <form id="formw" name="formulario" method="post" novalidate="novalidate">
												<div class="control-group">
													<div class="form-group floating-label-form-group controls mb-0 pb-2">
														<label>Cantidad $</label>
														<input class="form-control" id="name" name="ingreso4" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." required pattern="[0-9]{2,10}" />
														<p class="help-block text-danger"></p>
														
													</div>
												</div>
												<br />
										 <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Transferir</button></div>
											</form>
										 </div>
									</div>
<?php
//Conectar con el servidor para cada consulta proceso de INGRESO DE CUENTA
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '4'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
$total1 = 0;	
$total1 = $_POST['ingreso4']; // total declarado antes del bucle proceso de SUMA
    while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total = $row['saldo'] + $total1; // Sumar variable $total + resultado de la consulta
    }
    //echo $total;  //Se imprime $total y se realiza la suma este proceso es de prueba
	
	
	$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total." WHERE `id_jugador`= 4";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }

//Conectar con el servidor otra vez para la actualizacion
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '1'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }




	//procedemos con el proceso de resta de valor
	$total2 = $total1;
while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total3 = $row['saldo'] - $total2; // Sumar variable $total - resultado de la consulta
    }
    //echo "<h2>$total3"; // Se imprime $total y se realiza la resta
	
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
		  $total2 = 0;
       }
    }

    }
	
?>
									
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Taxi</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/target.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
									<h5 class="mb-5">Ingresa la cantidad de la Transferencia.</h5>
                                    
                                    
									<!-- Contact Section Form-->
									<div class="row">
										 <div class="col-lg-8 mx-auto">
										 <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
											 <form id="formw" name="formulario" method="post" novalidate="novalidate">
												<div class="control-group">
													<div class="form-group floating-label-form-group controls mb-0 pb-2">
														<label>Cantidad $</label>
														<input class="form-control" id="name" name="ingreso5" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." required pattern="[0-9]{2,10}" />
														<p class="help-block text-danger"></p>
														
													</div>
												</div>
												<br />
										 <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Transferir</button></div>
											</form>
										 </div>
									</div>
<?php
//Conectar con el servidor para cada consulta proceso de INGRESO DE CUENTA
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '5'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
$total1 = 0;	
$total1 = $_POST['ingreso5']; // total declarado antes del bucle proceso de SUMA
    while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total = $row['saldo'] + $total1; // Sumar variable $total + resultado de la consulta
    }
    //echo $total;  //Se imprime $total y se realiza la suma este proceso es de prueba
	
	
	$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total." WHERE `id_jugador`= 5";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }

//Conectar con el servidor otra vez para la actualizacion
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '1'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }




	//procedemos con el proceso de resta de valor
	$total2 = $total1;
while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total3 = $row['saldo'] - $total2; // Sumar variable $total - resultado de la consulta
    }
    //echo "<h2>$total3"; // Se imprime $total y se realiza la resta
	
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
		  $total2 = 0;
       }
    }

    }
	
?>
									
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Camion</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/target.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <h5 class="mb-5">Ingresa la cantidad de la Transferencia.</h5>
                                    
									<!-- Contact Section Form-->
									<div class="row">
										 <div class="col-lg-8 mx-auto">
										 <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
											 <form id="formw" name="formulario" method="post" novalidate="novalidate">
												<div class="control-group">
													<div class="form-group floating-label-form-group controls mb-0 pb-2">
														<label>Cantidad $</label>
														<input class="form-control" id="name" name="ingreso6" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." required pattern="[0-9]{2,10}" />
														<p class="help-block text-danger"></p>
														
													</div>
												</div>
												<br />
										 <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Transferir</button></div>
											</form>
										 </div>
									</div>
<?php
//Conectar con el servidor para cada consulta proceso de INGRESO DE CUENTA
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '6'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
$total1 = 0;	
$total1 = $_POST['ingreso6']; // total declarado antes del bucle proceso de SUMA
    while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total = $row['saldo'] + $total1; // Sumar variable $total + resultado de la consulta
    }
    //echo $total;  //Se imprime $total y se realiza la suma este proceso es de prueba
	
	
	$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total." WHERE `id_jugador`= 6";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }

//Conectar con el servidor otra vez para la actualizacion
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '1'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }




	//procedemos con el proceso de resta de valor
	$total2 = $total1;
while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total3 = $row['saldo'] - $total2; // Sumar variable $total - resultado de la consulta
    }
    //echo "<h2>$total3"; // Se imprime $total y se realiza la resta
	
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
		  $total2 = 0;
       }
    }

    }
	
?>
									
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Portfolio Modal 7-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal7Label">Carro</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/target.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <h5 class="mb-5">Ingresa la cantidad de la Transferencia.</h5>
                                    
									<!-- Contact Section Form-->
									<div class="row">
										 <div class="col-lg-8 mx-auto">
										 <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
											 <form id="formw" name="formulario" method="post" novalidate="novalidate">
												<div class="control-group">
													<div class="form-group floating-label-form-group controls mb-0 pb-2">
														<label>Cantidad $</label>
														<input class="form-control" id="name" name="ingreso7" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." required pattern="[0-9]{2,10}" />
														<p class="help-block text-danger"></p>
														
													</div>
												</div>
												<br />
										 <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Transferir</button></div>
											</form>
										 </div>
									</div>
<?php
//Conectar con el servidor para cada consulta proceso de INGRESO DE CUENTA
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '7'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
$total1 = 0;	
$total1 = $_POST['ingreso7']; // total declarado antes del bucle proceso de SUMA
    while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total = $row['saldo'] + $total1; // Sumar variable $total + resultado de la consulta
    }
    //echo $total;  //Se imprime $total y se realiza la suma este proceso es de prueba
	
	
	$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total." WHERE `id_jugador`= 7";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }

//Conectar con el servidor otra vez para la actualizacion
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE id_jugador = '1'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }




	//procedemos con el proceso de resta de valor
	$total2 = $total1;
while($row = mysqli_fetch_array($ejecuta_sentencia))
    {
      $total3 = $row['saldo'] - $total2; // Sumar variable $total - resultado de la consulta
    }
    //echo "<h2>$total3"; // Se imprime $total y se realiza la resta
	
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
		  $total2 = 0;
       }
    }

    }
	
?>
									
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- Portfolio Modal 8-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-labelledby="portfolioModal8Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal8Label">RESET</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/reset.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <h5 class="mb-5">Ingrese el Nº de Jugador para Reinicio.</h5>
									<p class="mb-5">Este proceso regresa las cuentas a sus valores predeterminados de $0.00 Centavos.</p>
                                    
									<!-- Contact Section Form-->
									<div class="row">
										 <div class="col-lg-8 mx-auto">
										 <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
											 <form id="formw" name="formulario" method="post" novalidate="novalidate">
												<div class="control-group">
													<div class="form-group floating-label-form-group controls mb-0 pb-2">
														<label>Numero de Jugador</label>
														<input class="form-control" id="name" name="id-jugador" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingrese un valor de 2 al 9." required pattern="[1-9]{1}" />
														<p class="help-block text-danger"></p>
														
													</div>
												</div>
												<br />
										 <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Reset</button></div>
											</form>
										 </div>
									</div>
<?php
//Conectar con el servidor para cada consulta proceso de RESET
$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "SELECT * FROM roles WHERE 1";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
	$id = $_POST['id-jugador']; // numero del jugador para reset
	
		$link=mysqli_connect('localhost','root','');
if(!$link){
    echo'No se pudo establecer conexion con el servidor:'.mysql_error();
}else{
    //Seleccionamos Base de datos
    $base=mysqli_select_db($link, 'jugadores');
    if(!$base){
        echo'No se encontro la base de datos:'.mysqli_error();
    }else{
      //Sentencia SQL
      $sql= "UPDATE `roles` SET `saldo`= '0' WHERE id_jugador = '".$id."'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
	  
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
	
?>
									
									<button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
		<!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>