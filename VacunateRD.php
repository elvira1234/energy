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
<label for="nombre"><b>Nombre Completo:</b></label>
<input type="text" id="name" name="Nombrecompleto" required/>

<br/> <br/>
<label for="Cedula"><b>Cedula:</b></label>
<input type="number" id="Cedula" name="Cedula" minlenght="11" maxlenght="11" required/> 


<br/> <br/>

<label for="email"> <b>Correo:</b></label>
<input type="correo" id="email" name="Correo" required>

<br/> <br/>
<div class="container">
    <div class="row"> <b>Fecha de Nacimiento:</b>  </div>
      <!-- <div class="row"><div class='col-sm-3'>  <div class="form-group">
                  <div class='input-group date' id='datetimepicker1'> -->
                      <input type='text' class="form-control" name="FechadeNacimiento" id="FechadeNacimiento"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                      </span>
         </div> </div> </div>   </div></div>
<br/> <br/>



<legend><b>Desea Vacunarse?</b></legend>  <br/> 
<input type="radio" id="yes" name="DeseaVacunarse" value="si" required> 
<label for="yes">Si</label>
<br/> <br/>

<input type="radio" id="no" name="DeseaVacunarse" value="no" required> 
<label for="no">No</label>
<br/> <br/> <br/> <br/>

<legend><b>Razon. Select/Enfermedad</b></legend>  <br/> 

<input type="radio"  id="covid19" name="Razon" value="Covid19" required>
<label for="covid19">COVID19</label>
<br/> <br/>

<input type="radio"  id="accesvacunate" name="Razon"  value="Accesovacunate" required>
<label for="accesvacunate">Acceso Vacunate</label>
<br/> <br/>
<br/> <br/>

<legend><b>Trabajas Actualmente?</b></legend> 

<input type="radio" id="yes" name="Trabajasactualmente" value="si"  required>
<label for="yes">Si</label>
<br/> <br/>


<input type="radio" id="no" name="Trabajasactualmente" value="no"  required>
<label for="no">No</label>
<br/> <br/>


<input type="radio" id="proximamente" name="Trabajasactualmente" value="pronto" required>
<label for="proximamente">Proximamente</label>
<br/> <br/>

<br/> <br/> 
<label for="Descripcion"><b>Descripcion del Caso:</b></label>
<br/> <br/> 
<textarea id="Descripcion"  name="Descripciondelcaso" rows="4" cols="55" >
</textarea>
<br/> <br/>


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

