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
		$riesgoError = null;
		$faseError = null;
		$estadoError = null;
		$accionError = null;
		$seguimientoError = null;
		$nivelError = null;
		$responsableError = null;
		$impactoError = null;
		$probabilidadError = null;
		
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

		if (empty($riesgos)) {
			$riesgosError = 'Ingrese Riesgo';
			$valid = false;
		}

		if (empty($seguimiento)) {
			$seguimientoError = 'Please enter Name';
			$valid = false;
		}
		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE customers  set fecha = ?, riesgos = ?, fase =?, estado = ?, accion = ?, seguimiento = ?, nivel = ?, responsable = ?, impacto = ?, probabilidad = ? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($fecha,$riesgos,$fase,$estado,$accion,$seguimiento,$nivel,$responsable,$impacto,$probabilidad,$id));
			Database::disconnect();
			header("Location: index.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM customers where id = ?";
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
					   <div class="control-group <?php echo !empty($fechaError)?'error':'';?>">
					    <label class="control-label">Fecha</label>
					    <div class="controls">
					      	<input name="fecha" type="text"  required  value="<?php echo !empty($fecha)?$fecha:'';?>">
					      	<?php if (!empty($fechaError)): ?>
					      		<span class="help-inline"><?php echo $fechaError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					   <div class="control-group <?php echo !empty($riesgosError)?'error':'';?>">
					    <label class="control-label">Riesgo</label>
					    <div class="controls">
					      	<input name="riesgos" type="text"  required  value="<?php echo !empty($riesgos)?$riesgos:'';?>">
					      	<?php if (!empty($riesgosError)): ?>
					      		<span class="help-inline"><?php echo $riesgoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($faseError)?'error':'';?>">
					    <label class="control-label">Fase</label>
					    <div class="controls">
					      	<input name="fase" type="text" required  value="<?php echo !empty($fase)?$fase:'';?>">
					      	<?php if (!empty($faseError)): ?>
					      		<span class="help-inline"><?php echo $faseError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($estadoError)?'error':'';?>">
					    <label class="control-label">Estado</label>
					    <div class="controls">
					      	<input name="estado" type="text"  required  value="<?php echo !empty($estado)?$estado:'';?>">
					      	<?php if (!empty($estadoError)): ?>
					      		<span class="help-inline"><?php echo $estadoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($accionError)?'error':'';?>">
					    <label class="control-label">Accion</label>
					    <div class="controls">
					      	<input name="accion" type="text"  required  value="<?php echo !empty($accion)?$accion:'';?>">
					      	<?php if (!empty($accionError)): ?>
					      		<span class="help-inline"><?php echo $accionError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($seguimientoError)?'error':'';?>">
					    <label class="control-label">Seguimiento</label>
					    <div class="controls">
					      	<input name="seguimiento" type="text"  required  value="<?php echo !empty($seguimiento)?$seguimiento:'';?>">
					      	<?php if (!empty($seguimientoError)): ?>
					      		<span class="help-inline"><?php echo $seguimientoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($nivelError)?'error':'';?>">
					    <label class="control-label">Nivel</label>
					    <div class="controls">
					      	<input name="nivel" type="text"  required  value="<?php echo !empty($nivel)?$nivel:'';?>">
					      	<?php if (!empty($accionError)): ?>
					      		<span class="help-inline"><?php echo $nivelError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($responsableError)?'error':'';?>">
					    <label class="control-label">Responsable</label>
					    <div class="controls">
					      	<input name="responsable" type="text"  required  value="<?php echo !empty($responsable)?$responsable:'';?>">
					      	<?php if (!empty($responsableError)): ?>
					      		<span class="help-inline"><?php echo $responsableError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($impactoError)?'error':'';?>">
					    <label class="control-label">Impacto</label>
					    <div class="controls">
					      	<input name="impacto" type="text"  required  value="<?php echo !empty($impacto)?$impacto:'';?>">
					      	<?php if (!empty($impactoError)): ?>
					      		<span class="help-inline"><?php echo $impactoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($probabilidadError)?'error':'';?>">
					    <label class="control-label">Probabilidad</label>
					    <div class="controls">
					      	<input name="probabilidad" type="text" required  value="<?php echo !empty($probabilidad)?$probabilidad:'';?>">
					      	<?php if (!empty($probabilidadError)): ?>
					      		<span class="help-inline"><?php echo $probabilidadError;?></span>
					      	<?php endif;?>
					    </div>
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