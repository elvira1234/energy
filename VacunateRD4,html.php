<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initiel-scale=1.0">
<title></title>


<style>  

    .alert {
  
    padding: 20px;
  
    background-color: #f44336;
  
    color: white;

    }
     </style> 

    
</head>

<body>

    <h2> <big>Vacunate RD4</big></h2>
    <br/> 
<form action="insertvacunate3.php" id="formulariocon" method="POST">
<label for="nombre"><b>Nombre:</b></label>
<input type="text" id="Nombre" name="Nombre" required/>

<br/> <br/>

<label for="Apellido"><b>Apellido:</b></label>
<input type="text" id="Apellido" name="Apellido" required/>


<br/> <br/>
<label for="Cedula"><b>Cedula:</b></label>
<input type="number" id="Cedula" name="Cedula" minlenght="11" maxlenght="11" required/> 
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

<label for="Correo"><b>Correo:</b></label>
<input type="Correo" id="Correo" name="Correo" required>

<br/> <br/>

<legend><b>Desea ser parte de Superate Programa?</b></legend>  <br/> 
<input type="radio" id="si" name="DeseaserpartedeSuperatePrograma" value="si" required> 
<label for="si"1->Si</label>
<br/> <br/>

<input type="radio" id="no" name="DeseaserpartedeSuperatePrograma" value="no" required> 
<label for="no">2-No</label>

<br/> <br/>

<input type="radio" id="luego" name="DeseaserpartedeSuperatePrograma" value="luego" required> 
<label for="luego">3-Luego</label>

<br/> <br/> 


<legend><b>Forma en que desea realizar trámites y consultas?</b></legend>  <br/> 
<input type="radio" id="Presencial" name="Formaenquedesearealizartrámitesyconsultas" value="Presencial" required> 
<label for="Presencial">1-Presencial</label>
<br/> <br/>

<input type="radio" id="Appmovil" name="Formaenquedesearealizartrámitesyconsultas" value="Appmovil" required> 
<label for="Appmovil">2-App Móvil</label>

<br/> <br/>

<input type="radio" id="Serviciosenlinea" name="Formaenquedesearealizartrámitesyconsultas" value="Serviciosenlinea" required> 
<label for="Serviciosenlinea">3-Servicios en Línea</label>

<br/> <br/> 

<div class="col-xs-2">

<label for="movil"><b>Tiene conocimiento de la próxima App Móvil?</b></label>

<div>

<input type="radio" name="Tieneconocimientodelaproximaappmovil"  value="si"  id="movil"/>

      <label for="Tieneconocimientodelaproximaappmovil">Si</label>

    </div>
    <br/> 
    <div>

      <input  type="radio" value="no" onclick="myFunction1()" id="Tieneconocimientodelaproximaappmovil" name="Tieneconocimientodelaproximaappmovil" />

      <label for="Tieneconocimientodelaproximaappmovil">No</label>

    </div>

    </div>

     </div>



<div display="none" class="col-xs-12">

<div ID="ATieneconocimientodelaproximaappmovil" style="display:none;" class="alert">

<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

<strong>Por favor: </strong>  suministrar correo donde recibirá información al respecto.

</div>

</div> 

<br/> <br/>


<legend><b>Desea incluir a su familia en Supérate?</b></legend>  <br/> 
<input type="radio" id="si" name="Deseaincluirasufamiliaensuperate" value="si" onclick="myFunction3()" required> 
<label for="si">Si</label>


<br/>
<br/>
<input type="radio" id="no" name="Deseaincluirasufamiliaensuperate" value="no" required> 
<label for="no">No</label>

<div display="none" class="col-xs-12">
 <label for="miembros" style="display:none;">Cuántos miembros desea incluir?</label>
<input type="text" placeholder="Cuántos miembros desea incluir" style="display:none;" id="miembros" name="miembros" />




</div>



        <div class="container-fluid">
        <div align="center">
            <input type="submit" class="boton_personalizado" name="submit" value="Enviar" />
            </div> </div>



</form>




</body>

<script> 

    function myFunction1() {
    
    var x = document.getElementById("ATieneconocimientodelaproximaappmovil");
    
    if (x.style.display === "none") {
    
      x.style.display = "block";
    
    } else {
    
      x.style.display = "none";
    
    }
    
    }


    function myFunction3() {
    
    var x = document.getElementById("miembros");
    
    if (x.style.display === "none") {
    
      x.style.display = "block";
    
    } else {
    
      x.style.display = "none";
    
    }
    
    }
    </script> 
