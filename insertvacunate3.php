<?php

require 'Exception.php';
require 'OAuth.php';


?>
<?php
if(isset($_POST['submit'])){ 
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Cedula = $_POST['Cedula'];
$Correo = $_POST['Correo'];
$DeseainscribirseenelPrograma = $_POST['DeseainscribirseenelPrograma'];
$Poseetarjetadesuperate = $_POST['Poseetarjetadesuperate'];
$Tienecomposiciónfamiliar = $_POST['Tienecomposiciónfamiliar'];

if (!empty($Nombre) || !empty($Apellido) || !empty($Cedula) || !empty($Correo) || !empty($DeseainscribirseenelPrograma) || !empty($Poseetarjetadesuperate)  || !empty($Tienecomposiciónfamiliar)) {
 
$db_host        = '127.0.0.1';
$db_user        = 'massiel';
$db_pass        = '123456';
$db_database    = 'pruebas'; 
$db_port        = '3306';

$conn = new mysqli($db_host,$db_user,$db_pass,$db_database,$db_port);

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into pruebas.vacunate_rd3 (Nombre, Apellido, Cedula, Correo, DeseainscribirseenelPrograma, Poseetarjetadesuperate,  Tienecomposiciónfamiliar) values(?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $Nombre, $Apellido, $Cedula, $Correo, $DeseainscribirseenelPrograma, $Poseetarjetadesuperate, $Tienecomposiciónfamiliar);
      $stmt->execute();
	  echo "<br>";
	  echo "<br>";
      echo "<br>";
      echo "<br>";
	  echo "<br>";
	  echo "<br>";
	  echo "<br>";
	  echo '<span style="color:green; font-size:50px; margin:auto; display:table;">Levantamiento realizado exitosamente </span>';
	  
	  echo "<a href='http://pscloud.puntosolidario.gob.do/covid19/index.php' style='margin:auto; display:table;'> <img style='display: block; margin-left: auto; margin-right: auto;' src='https://www.holaprincesa.es/img/cms/BOTONES/volver-03_1.png' alt='Levantamiento COVID-19' width=175px' height='65px' data-u='image' /></a>";
   
     $stmt->close();
     $conn->close();
    }
} else {
 echo '<span style="color:red; font-size:50px;margin:auto; display:table;">Falta por completar algunos campos requeridos, por favor retroceder y completarlos </span>';
 echo "<a href='http://pscloud.puntosolidario.gob.do/covid19/index.php' style='margin:auto; display:table;'> <img style='display: block; margin-left: auto; margin-right: auto;' src='https://www.holaprincesa.es/img/cms/BOTONES/volver-03_1.png' alt='Levantamiento COVID-19' width=175px' height='65px' data-u='image' /></a>";
 die();
}
}
?>