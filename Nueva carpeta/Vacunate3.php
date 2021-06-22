<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initiel-scale=1.0">
<title>VacunateRD3</title>


<style>  

    .alert {
  
    padding: 20px;
  
    background-color: #f44336;
  
    color: white;

    }
     </style> 

    
</head>

<body>

    <h2> <big>Vacunate RD3</big></h2>
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

<label for="Correo"><b>Correo:</b></label>
<input type="Correo" id="Correo" name="Correo" required>

<br/> <br/>

<legend><b>Desea Inscribirse en el Programa?</b></legend>  <br/> 
<input type="radio" id="si" name="Deseainscribirseenelprograma" value="si" required> 
<label for="si">Si</label>
<br/> <br/>

<input type="radio" id="no" name="Deseainscribirseenelprograma" value="no" required> 
<label for="no">No</label>

<br/> <br/>

<input type="radio" id="luego" name="Deseainscribirseenelprograma" value="luego" required> 
<label for="luego">Luego</label>

<br/> <br/> 



<div class="col-xs-4">

<label for="Categoriaselect"><b>Categoría – Select</b></label>

<select name="Categoriaselect" class="form-control" id="Categoriaselect" required>

<option selected hidden value=""> </option>

<option value="Evaluado">Evaluado</option>

<option value="No Evaluado">No Evaluado</option>

<option value="Participante">Participante</option>

</select> </br>
<br/> <br/> 

<div class="col-xs-2">

<label for="tarjeta"><b>Posee tarjeta de Superate?</b></label>

<div>

<input type="radio" name="Poseetarjetadesuperate"  value="si"  id="tarjeta"/>

      <label for="Poseetarjetadesuperate">Si</label>

    </div>
    <br/> 
    <div>

      <input  type="radio" value="no" onclick="myFunction1()" id="Poseetarjetadesuperate" name="Poseetarjetadesuperate" />

      <label for="Poseetarjetadesuperate">No</label>

    </div>

    </div>

     </div>



<div display="none" class="col-xs-12">

<div ID="APoseetarjetadesuperate" style="display:none;" class="alert">

<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

<strong>Recordatorio: </strong> Alerta al hacer click en Sí “debe solicitarla en el Punto Solidario más cercano”

</div>

</div> 

<br/> <br/>

<legend><b>Tiene composición Familiar?</b></legend>  <br/> 
<input type="radio" id="si" name="Tienecomposicionfamiliar" value="si" onclick="myFunction3()" required> 
<label for="si">Si</label>


<br/>
<br/>
<input type="radio" id="no" name="Tienecomposicionfamiliar" value="no" required> 
<label for="no">No</label>

<div display="none" class="col-xs-12">
 <label for="miembros" style="display:none;">Número de miembros</label>
<input type="text" placeholder="Número de miembros" style="display:none;" id="miembros" name="miembros" />




</div>



        <div class="container-fluid">
        <div align="center">
            <input type="submit" class="boton_personalizado" name="submit" value="Enviar" />
            </div> </div>



</form>




</body>

<script> 

    function myFunction1() {
    
    var x = document.getElementById("APoseetarjetadesuperate");
    
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


    