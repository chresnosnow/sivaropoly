<!-- Portfolio Item 8-->
                    <div class="col-md-6 col-lg-4">
					<h5><center>Transferir dinero al Pozo</h5>
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal8">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/pozo.png" alt="" />
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal8Label">Pozo</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/bolsa.png" alt="" />
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
														<input class="form-control" id="name" name="ingreso8" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." required pattern="[0-9]{2,10}" />
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
      $sql= "SELECT * FROM roles WHERE id_jugador = '8'";
      $ejecuta_sentencia = mysqli_query($link, $sql);
      if(!$ejecuta_sentencia){
          echo'Hay un error en la sentencia SQL:' .mysqli_error();
      }else{
          //echo'Error al mostrar lista de usuarios:' .mysqli_error();
       }
    }

    }
$total1 = 0;	
$total1 = $_POST['ingreso8']; // total declarado antes del bucle proceso de SUMA
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
      $sql= "UPDATE `roles` SET `saldo`= ".$total." WHERE `id_jugador`= 8";
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
      $sql= "SELECT * FROM roles WHERE id_jugador = '7'";
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
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 7";
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