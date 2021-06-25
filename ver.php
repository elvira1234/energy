
<?php
	$db_host        = '172.17.1.134';
	$db_user        = 'Desarrollo';
	$db_pass        = 'Code1234,';
	$db_database    = 'pscloud'; 
	$db_port        = '3308';

	$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);
?>
<?php
//error_reporting(0);
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM pscloud.novedades WHERE ID=$id");
 
while($row = mysqli_fetch_array($result))
{
	$fechasol = $row['FECHA_SOLICITUD'];
  $solicitante = $row['SOLICITANTE'];
  $correosol = $row['CORREO_SOL'];
	$telsol = $row['TELEFONO_SOL'];
	$nombre = $row['NOMBRE'];
	$cargo = $row['CARGO'];
	$telres = $row['TELEFONO_RES'];
  $celres = $row['CELULAR_RES'];
  $institucion = $row['INSTITUCION'];
	$correores = $row['CORREO_RES'];
	$tiposolicitud = $row['TIPO_SOLICITUD'];
	$nombreser = $row['NOMBRE_SER'];
	$descact = $row['DESCRIPCION_ACT'];
	$descser = $row['DESCRIPCION_SER'];
	$firmasol = $row['FIRMA'];
	$fecharec = $row['FECHA_RECEPCION'];
  $accion = $row['ACCION'];
  $procesos = $row['PROCESOS'];
  $observaciones = $row['OBSERVACIONES'];
  $responsable = $row['RESPONSABLE'];
	$fechapro = $row['FECHA_PROPUESTA'];
  $estado = $row['ESTADO'];
  $fechaej = $row['FECHA_EJECUCION'];
  $observacionesej = $row['OBSERVACIONES_EJC'];
  $firmares = $row['FIRMA_RES'];
  $frrnombre = $row['FRR_NOMBRE'];
  $firmaop = $row['FIRMA_OP'];
  $fronombre = $row['FRO_NOMBRE'];
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
	<title>Formulario Novedades del Catálogo de Servicios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container">
	<div class="row">

  <div class="col-xs-12">
  <center>
	<img src="http://pscloud.puntosolidario.gob.do/novedades/pslogo.png" alt="novedades">
  </center>
	</div>
	
		<div class="col-xs-12">
		</br>
          <h2>Datos del Solicitante<button class="btn" onclick="window.print();"><i class="fa fa-print"></i></button></h2>
        </div>
		
		  <div class="col-xs-6">
          <label for="fecha">Fecha de Solicitud</label>
          <input readonly name="fecha" class="form-control" value="<?php echo $fechasol;?>">
        </div>
		
            <div class="col-xs-6">
              <label for="solicitante">Solicitante</label>
              <input readonly name="solicitante" class="form-control" value="<?php echo $solicitante;?>">
            </div>

            <div class="col-xs-6">
              <label for="correosol">Correo Electrónico</label>
              <input readonly name="correosol" class="form-control" value="<?php echo $correosol;?>">
            </div>

            <div class="col-xs-6">
              <label for="telsol">Número de Télefono</label>
              <input readonly name="telsol" class="form-control" value="<?php echo $telsol;?>">
            </div>
			

		<div class="col-xs-12">
          <h2>Datos Responsable de la Novedad</h2> 
        </div>
            <div class="col-xs-6">
              <label for="nombre">Nombre</label>
              <input readonly name="nombre" class="form-control" value="<?php echo $nombre;?>">
            </div>
            <div class="col-xs-6">
			  <label for="cargo">Cargo</label>
              <input readonly name="cargo" class="form-control" value="<?php echo $cargo;?>">
            </div>

            <div class="col-xs-6">
              <label for="telres">Número de Télefono Oficina</label>
              <input readonly name="telres" class="form-control" value="<?php echo $telres;?>">
            </div>
            <div class="col-xs-6">
              <label for="celres">Número de Télefono Celular</label>
              <input readonly name="celres" class="form-control" value="<?php echo $celres;?>">
            </div>

            <div class="col-xs-6">
              <label for="institucion">Institución</label>
              <input readonly name="institucion" class="form-control" value="<?php echo $institucion;?>">
            </div>
	
        <div class="col-xs-6">
          <label for="correores">Correo Electrónico</label>
              <input readonly name="correores" class="form-control" value="<?php echo $correores;?>">
        </div>
			<div class="col-xs-12">
          <h2>Información de la Novedad</h2> 
        </div>
		
		<div class="col-xs-6">
          <label for="tiposolicitud">Tipo de Solicitud</label>
              <input readonly name="tiposolicitud" class="form-control" value="<?php echo $tiposolicitud;?>">
        </div>
		
    <div class="col-xs-6">
      <label for="nombreser">Nombre de la Actividad o Servicio</label>
      <input readonly name="nombreser" class="form-control" value="<?php echo $nombreser;?>">
    </div>
		
        <div class="col-xs-12">
          <label for="descact">Descripción Actual del/los Servicio(s)</label>
          <textarea readonly name="descact" rows="5" cols="120" class="form-control"><?php echo $descact;?></textarea>
		</div>
		
		<div class="col-xs-12">
          <label for="descser">Descripción del/los Servicio(s)</label>
		  <textarea readonly name="descser" rows="5" cols="120" class="form-control"><?php echo $descser;?></textarea>
        </div>
		
		<div class="col-xs-6">
          <label for="firmasol">Firma Solicitante</label>
		  <img src="signatures\<?php echo $firmasol;?>" onerror="this.src='fondoblanco.png'" width = "100%" alt="Solicitante">  
        </div>
		
		<div class="col-xs-12">
          <h2>Evaluación de la Novedad</h2> 
        </div>
		
		<div class="col-xs-6">
          <label for="fecha">Fecha de Evaluación</label>
          <input readonly name="fecharec" class="form-control" value="<?php echo $fecharec;?>">
        </div>
		
		<div class="col-xs-6">
          <label for="accion">Acción a Realizar</label>
		  <input readonly name="accion" class="form-control" value="<?php echo $accion;?>">
        </div>

        <div class="col-xs-12">
      <label for="procesos">Indicar Cuáles Procesos Serán Afectados</label>
      <input readonly name="procesos" class="form-control" value="<?php echo $procesos;?>">
    </div>
		
		<div class="col-xs-12">
          <label for="observaciones">Observaciones</label>
		  <textarea  readonly name="observaciones" rows="5" cols="120" class="form-control"><?php echo $observaciones;?></textarea>
        </div>
		
        <div class="col-xs-6">
      <label for="responsable">Responsable</label>
      <input readonly name="responsable" class="form-control" value="<?php echo $responsable;?>">   
    </div>

    <div class="col-xs-6">
      <label for="estado">Estado</label>
      <input readonly name="estado" class="form-control" value="<?php echo $estado;?>">   
    </div>

    <div class="col-xs-6">
      <label for="fechapro">Fecha Propuesta para Ejecución</label>
      <input readonly name="fechapro" class="form-control" value="<?php echo $fechapro;?>">
    </div>

    <div class="col-xs-12">
          <h2>Ejecución de la Novedad</h2> 
        </div>

    <div class="col-xs-6">
      <label for="fechaej">Fecha de Ejecución</label>
      <input readonly name="fechaej" class="form-control" value="<?php echo $fechaej;?>">
    </div>

    <div class="col-xs-12">
          <label for="observacionesej">Observaciones</label>
		  <textarea  readonly name="observacionesej" rows="5" cols="120" class="form-control"><?php echo $observacionesej;?></textarea>
        </div>

		<div class="col-xs-6">
          <label>Firma Evaluación</label>
              <img src="firmas_responsables\<?php echo $firmares;?>" onerror="this.src='fondoblanco.png'" width = "100%" alt="responsable">
        </div>

    <div class="col-xs-12">
      <label for="frrnombre">Nombre Firma Evaluación</label>
      <input readonly name="frrnombre" class="form-control" value="<?php echo $frrnombre;?>">
    </div>
		
		<div class="col-xs-6">
          <label>Firma Autorización</label>
          <img src="firmas_operativos\<?php echo $firmaop;?>" width = "100%" onerror="this.src='fondoblanco.png'" alt="Operativo">    
        </div>
    
    <div class="col-xs-12">
      <label for="fronombre">Nombre Firma Autorización</label>
      <input readonly name="fronombre" class="form-control" value="<?php echo $fronombre;?>">
    </div>		
        </div>
			</br>


</div>
</div>
</div>
</div>
</body>
</html>

