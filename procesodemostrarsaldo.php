<!DOCTYPE html>

<html>


<!-- Contact Section Form-->
    <div class="row">
         <div class="col-lg-8 mx-auto">
         <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
             <form id="contactForm" name="formulario" method="post" novalidate="novalidate">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Cantidad</label>
                        <input class="form-control" id="name" name="ingreso" type="text" placeholder="Name" value="0" required="required" data-validation-required-message="ingresa la cantidad." />
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
    echo $total; // Se imprime $total y se realiza la suma este proceso es de prueba
	
	
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
    echo "<h2>$total3"; // Se imprime $total y se realiza la resta
	
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

<?php
//Mostrar SALDO del USUARIO
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
?>

    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <title>Listado de Usuarios</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Mostrando Usuarios desde Base de Datos</h1>
        <table>
            <tr>
                <th>CUENTA BANCO</th> <?php
                        while($row=mysqli_fetch_array($ejecuta_sentencia)) {                              
                          echo"<tr>";
                           echo"<td><h1>".$row['saldo']."</td>";
                            echo"<td></td>";
                          echo"</tr>";
                        }
                    ?>
            <tr>
        </table>


    </body>
</html>