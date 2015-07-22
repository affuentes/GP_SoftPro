<?php 
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$fechaError = null;
		$seguimientoError = null;
	
		
		// keep track post values
		$fecha = $_POST['fecha'];
		$riesgos = $_POST['riesgos'];
		$fase = $_POST['fase'];
		$estado = $_POST['estado'];
		$accion = $_POST['accion'];
		$seguimiento = $_POST['seguimiento'];
		$nivel = $_POST['nivel'];
		$responsable = $_POST['responsable'];
		$impacto = $_POST['impacto'];
		$probabilidad = $_POST['probabilidad'];
	
		
		// validate input
		$valid = true;
		if (empty($fecha)) {
			$fechaError = '';
			$valid = false;
		}
		
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO riesgos (fecha,riesgos,fase,estado,accion,seguimiento,nivel,responsable,impacto,probabilidad) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($fecha,$riesgos,$fase,$estado,$accion,$seguimiento,$nivel,$responsable,$impacto,$probabilidad));
			Database::disconnect();
			header("Location: index.php");
		}
	}
?>,


<!DOCTYPE html>
<html lang="Es">
<head>
   <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<nav class="container">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
 </nav>
    <div class="container">
    		<div class="starter-template">
    			<h1>Metodologias de Calidad de Desarrollo de Software</h1>
        			<p class="lead">Sistema de gestion de Riesgo</p>
    					<div class="lead">
					   	 	<h2>Nuevo Riesgo</h2>			
						</div>			
    				<form class="form" action="create.php" method="post">
					  <div class="control-group">
					    <label class="control-label">Fecha</label>
					    <div class="controls">
					      	<input name="fecha" type="date"  required  value="fecha">   	
					    </div>
					  </div>
					   <div class="control-group">
					    <label class="control-label">Riesgo</label>
					    	<div class="form-control">
					    	<textarea name="riesgos" type="text"  required  value="riesgos"></textarea>
					    </div>
					  </div>
					  <div class="control-group">
					  <div class="form-group">
                		<label class="control-label">Fases</label>
                			<select class="form-control" name="fase">
		                	<option value ="">Seleccionar</option>
		                  	<option value ="Analisis">Analisis</option>
							<option value ="Planeacion">Planeacion</option>
							<option value ="Ejecucion">Ejecucion</option>
							<option value ="Evaluacion">Evaluacion</option>
		               		</select>
					  </div>
					  <div class="form-group">
                		<label class="control-label">Estado</label>
                			<select class="form-control" name="estado">
		                	<option value ="">Seleccionar</option>
		                  	<option value ="Analisis">Activo</option>
							<option value ="Planeacion">Terminado</option>
		               		</select>
					  </div>
					  <div class="form-group">
                		<label class="control-label">Accion</label>
                			<select class="form-control" name="accion">
		                	<option value ="">Seleccionar</option>
		                  	<option value ="Mitigar">Mitigar</option>
							<option value =""></option>
		               		</select>
					  </div>
					  <div class="control-group <?php echo !empty($seguimientoError)?'error':'';?>">
					    <label class="control-label">Seguimiento</label>
					    <div class="controls">
					      	<textarea name="seguimiento" type="text"  required  value="<?php echo !empty($seguimiento)?$seguimiento:'';?>"></textarea>
					    </div>
					  </div>
					  <div class="control-group">
					  <div class="form-group">
                		<label class="control-label">Nivel</label>
                			<select class="form-control" name="nivel">
		                	<option value ="">Seleccionar</option>
		                  	<option value ="Alto">Alto</option>
							<option value ="Medio">Medio</option>
							<option value ="Bajo">Bajo</option>
		               		</select>
					  </div>
					  <div class="control-group">
					  <div class="form-group">
                		<label class="control-label">Responsable</label>
                			<select class="form-control" name="responsable">
		                	<option value ="">Seleccionar</option>
		                  	<option value ="Lider Gestion">Lider Gestion</option>
							<option value ="Analista">Analista</option>
							<option value ="Programador">Programador</option>
		               		</select>
					  </div>
					  <div class="control-group">
					  <div class="form-group">
                		<label class="control-label">Impacto</label>
                			<select class="form-control" name="impacto">
		                	<option value ="">Seleccionar</option>
		                  	<option value ="Alto">Alto</option>
							<option value ="Medio">Medio</option>
							<option value ="Bajo">Bajo</option>
		               		</select>
					  </div>
					    <label class="control-label">Probabilidad</label>
		                <select class="form-control" name="probabilidad">
		                    <option value ="">Seleccionar</option>
		                    <option value ="Muy Alto">Muy Alto</option>
		                    <option value ="Alto">Alto</option>
		                    <option value ="Medio">Medio</option>
		                    <option value ="Bajo">Bajo</option>
		                </select>
					  </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn default" 
						  <span aria-hidden="true" class="glyphicon glyphicon-ok"></span>Guardar</button>
						  <a class="btn" href="index.php">Volver</a>
						</div>
					</form>
				</div>
    </div> <!-- /container -->
  </body>
</html>