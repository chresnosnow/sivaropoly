<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <title>Listado de Usuarios</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

<!-- Contact Section Form-->
    <div class="row">
         <div class="col-lg-8 mx-auto">
         <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
             <form id="contactForm" name="formulario" method="post" novalidate="novalidate">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Cantidad</label>
                        <input class="form-control" id="name" name="id-jugador" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." />
                        <p class="help-block text-danger"></p>
						
                    </div>
                </div>
                <br />
         <div id="success"></div>
		 
         <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Transferir</button></div>
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
    </body>
</html>