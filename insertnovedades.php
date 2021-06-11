

<?php
if(isset($_POST['submit'])){
$nombreCompleto = $_POST['nombrecompleto'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$fechadenacimiento = $_POST['fechadenacimiento'];
$deseavacunarse = $_POST['deseavacunarse'];
$razonselectenfermedad = $_POST['razon'];
$trabajasactualmente = $_POST['trabajasactualmente'];
$descripciondelcaso = $_POST['descripciondelcaso'];

if (!empty($fechadenacimiento) || !empty($descripciondelcaso) || !empty($nombrecompleto) || !empty($cedula) || !empty($deseavacunarse) || !empty($razon) ||  !empty($correo) || !empty($trabajasactualmente)) {
 
$db_host        = '127.0.0.1';
$db_user        = 'massiel';
$db_pass        = '123456,';
$db_database    = 'pruebas'; 
$db_port        = '3306';

$conn = new mysqli($db_host,$db_user,$db_pass,$db_database,$db_port);

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into pruebas.`vacunate rd` (razon, nombreCompleto, cedula, deseavacunarse, descripciondelcaso, correo, fechadenacimiento, trabajasactualmente) values(?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssss", $razon, $nombrecompleto, $cedula, $fechadenacimiento, $trabajasactualmente, $deseavacunarse, $descripciondelcaso, $correo);
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