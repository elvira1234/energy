<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initiel-scale=1.0">
<title>VacunateRD</title>
    
</head>>

<body>

    <h2> <big>Vacunate RD</big></h2>
<form action="insertnovedades.php" id="formulariocon" method="POST">>
<label for="nombre"><b>Nombre:</b></label>
<input type="text" id="name" name="Nombre" required/>

<label for="Apellido"><b>Apellido:</b></label>
<input type="text" id="Apellido" name="Apellido" required/>


<br/> <br/>
<label for="Cedula"><b>Cedula:</b></label>
<input type="number" id="Cedula" name="Cedula" minlenght="11" maxlenght="11" required/> 


<br/> <br/>


<legend><b>Desea aplicar al programa?</b></legend>  <br/> 
<input type="radio" id="yes" name="Desea aplicar al programa?" value="si" required> 
<label for="yes">Si</label>
<br/> <br/>

<input type="radio" id="no" name="Desea aplicar al programa?" value="no" required> 
<label for="no">No</label>

<input type="radio" id="quizas" name="Desea aplicar al programa?" value="quizas" required> 
<label for="quizas">quizas</label>

<br/> <br/> <br/> <br/>

<legend><b>¿Desea Realizar una evaluación? </b></legend>  <br/> 

<input type="radio"  id="si" name="¿Desea Realizar una evaluación?" value="si" required>
<label for="si">si</label>
<br/> <br/>

<input type="radio"  id="Servicios en Línea" name="¿Desea Realizar una evaluación?"  value="Servicios en Línea" required>
<label for="Servicios en Línea">Servicios en Línea</label>

<input type="radio"  id="PSWEB" name="¿Desea Realizar una evaluación?" value="PSWEB" required>
<label for="PSWEB">PSWEB</label>
<br/> <br/>

<br/> <br/>
<br/> <br/>
<div display="none" class="col-xs-12">

        <div ID="alertadosis" style="display:none;" class="alert">

  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

  <strong>Recordatorio: </strong> Si ya tiene la 1era Dosis recuerde acudir a ponerse su 2da Dosis en el tiempo que le indicaron.

</div>

</div>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<div class="container-fluid">
    <div class="row"> <div class="col-md-4"> 
        <div class="alert alert-danger" role="alert">
           <b>Alerta. Debe vacunarse en los próximos 10 días.</b> </div>
        </div></div>

        

        <div class="container-fluid">
        <div align="center">
            <input type="submit" class="boton_personalizado" name="submit" value="Enviar" />
            </div> </div>



</form>




</body>
