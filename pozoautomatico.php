<?php

//Mostrar SALDO del POZO
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
	
?>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <title>Listado de Usuarios</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <h1></h1>
        <table>
            <tr>
                <th>SALDO ACTUAL DE LA CUENTA POZO</th> <?php
                        while($row=mysqli_fetch_array($ejecuta_sentencia)) {                              
                          echo"<tr>";
                           echo"<td><h1>".$row['saldo']."</td>";
                            echo"<td></td>";
                          echo"</tr>";
                        }
                    ?>
            <tr>
        </table>
		
<?php

//agregar el saldo a variable
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
?>
<form method="get" action="<?php

$row=mysqli_fetch_array($ejecuta_sentencia);
$totalp = $row['saldo'];

?>">

<input class="btn btn-primary btn-xl" type="submit" value="Enviar este formulario" />

</form>

<?php
//asignando el valor


//Conectar con el servidor para cada consulta proceso de INGRESO DE POZO a cuentas, proceso individual
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

$total1 = $totalp; // total declarado antes del bucle proceso de SUMA
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
	
	//Conectar con el servidor otra vez para la actualizacion de la resta del pozo
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
      $sql= "UPDATE `roles` SET `saldo`= ".$total3." WHERE `id_jugador`= 8";
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