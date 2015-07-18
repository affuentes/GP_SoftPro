<?php 
	
	require 'database.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: index.php");
	}
	
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
			$fechaError = 'Seleccione Fecha';
			$valid = false;
		}

		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE riesgos  set fecha = ?, riesgos = ?, fase =?, estado = ?, accion = ?, seguimiento = ?, nivel = ?, responsable = ?, impacto = ?, probabilidad = ? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($fecha,$riesgos,$fase,$estado,$accion,$seguimiento,$nivel,$responsable,$impacto,$probabilidad,$id));
			Database::disconnect();
			header("Location: index.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM riesgos where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$fecha = $data['fecha'];
		$riesgos = $data['riesgos'];
		$fase = $data['fase'];
		$estado = $data['estado'];
		$accion = $data['accion'];
		$seguimiento = $data['seguimiento'];
		$nivel = $data['nivel'];
		$responsable = $data['responsable'];
		$impacto = $data['impacto'];
		$probabilidad = $data['probabilidad'];
		
		Database::disconnect();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Modificar Riesgo</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
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
						  <button type="submit" class="btn btn-success">Modificar</button>
						  <a class="btn" href="index.php">Volver</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>