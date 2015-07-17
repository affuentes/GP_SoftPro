<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
 </nav>
    <div class="container-fluid">
    		<div class="starter-template">
    			<h1>Metodologias de Calidad de Desarrollo de Software</h1>
        		<p class="lead">Sistema de gestion de Riesgo</p>
    		</div>
			<div class="starter-template">
				<a href="create.php" class="btn btn-default">Nuevo Riesgo</a>
				<a href="#" class="btn btn-default">Creacion Roles</a>
				<a href="#" class="btn btn-default">Cronograma</a>
		
				<div class="panel panel-default">
        		<div class="panel-heading"></div>
        		<div class="container-fluid">
				<table class="table-bordered table-condensed table table-hover ">
		             <thead>
			            <tr>
			              <th>Id</th>
			              <th>Fecha</th>
			              <th>Riesgo</th>
			              <th>Fase</th>
			              <th>Estado</th>
			              <th>Accion</th>
			              <th>Seguimiento</th>
			              <th>Nivel</th>
			              <th>Responsable</th>
			              <th>Impacto</th>
			              <th>Probabilidad</th>
			              <th></th>
			              <th>Acciones</th>
			            </tr>
			          </thead>
		              <tbody>
		              <?php 
					   include 'database.php';
					   $pdo = Database::connect();
					   $sql = 'SELECT * FROM customers ORDER BY id DESC';
	 				   foreach ($pdo->query($sql) as $row) {
						   		echo '<tr>';
							   	echo '<td>'. $row['id'] . '</td>';
							   	echo '<td>'. $row['fecha'] . '</td>';
							   	echo '<td>'. $row['riesgos'] . '</td>';
							   	echo '<td>'. $row['fase'] . '</td>';
							   	echo '<td>'. $row['estado'] . '</td>';
							   	echo '<td>'. $row['accion'] . '</td>';
							   	echo '<td>'. $row['seguimiento'] . '</td>';
							   	echo '<td>'. $row['nivel'] . '</td>';
							   	echo '<td>'. $row['responsable'] . '</td>';
							   	echo '<td>'. $row['impacto'] . '</td>';
								echo '<td>'. $row['probabilidad'] . '</td>';
							   	echo '<td></td>';
							   	echo '<td width=250>';
							   	echo '<a class="btn btn-success" href="read.php?id='.$row['id'].'">Ver</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Modificar</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Eliminar</a>';
							   	echo '</td>';
							   	echo '</tr>';
					   }
					   Database::disconnect();
					  ?>
				      </tbody>
	            </table>
    	</div>
    </div> <!-- /container -->
  </body>
</html>