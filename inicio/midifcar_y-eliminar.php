<?php 
	require_once('../conexion/conexion.php');

	if($_POST)
	{
	  	$modificar = 'UPDATE Contador SET idContador = ?, Contadorcol = ?, ap_paterno_cont = ?, ap_materno_cont = ?, fecha_de_nacimiento = ?, telefono_cont = ?, estado_cont = ?, Municipio = ?,colonia_emp = ?,calle_emp = ?, cp_cont = ?  WHERE idContador = ?';

		$contador = isset($_GET['idContador']) ? $_GET['idContador']: '';
		$contador_2 = isset($_POST['idContador_2']) ? $_POST['idContador_2']: '';
  		$nombre = isset($_POST['Contadorcol']) ? $_POST['Contadorcol']: '';
  		$apellido_p = isset($_POST['ap_paterno_cont']) ? $_POST['ap_paterno_cont']: '';
  		$apellido_m= isset($_POST['ap_materno_cont']) ? $_POST['ap_materno_cont']: '';
  		$fecha = isset($_POST['fecha_de_nacimiento']) ? $_POST['fecha_de_nacimiento']: '';
  		$telefono = isset($_POST['telefono_cont']) ? $_POST['telefono_cont']: '';
  		$estado = isset($_POST['estado_cont']) ? $_POST['estado_cont']: '';
  		$municipio = isset($_POST['Municipio']) ? $_POST['Municipio']: '';
  		$colonia = isset($_POST['colonia_emp']) ? $_POST['colonia_emp']: '';
  		$calle = isset($_POST['calle_emp']) ? $_POST['calle_emp']: '';
  		$cp = isset($_POST['cp_cont']) ? $_POST['cp_cont']: '';
  		
	  	$statement_update_details = $pdo->prepare($modificar);
	  	$statement_update_details->execute(array($contador_2,$nombre,$apellido_p,$apellido_m,$fecha,$telefono,$estado,$municipio,$colonia,$calle,$cp,$contador));
	  	header('Location: midifcar_y-eliminar.php');
	}

	if($_GET['idContador']){

		$show_form = TRUE;

		$cun = 'SELECT * FROM Contador WHERE idContador = ?';
		$CHE = isset($_GET['idContador']) ? $_GET['idContador']: 0;

		$statement_update = $pdo->prepare($cun);
		$statement_update->execute(array($CHE));
		$result_details = $statement_update->fetchAll();
		$rs = $result_details[0];
	}
 ?>

	<?php 
	$contador = 'SELECT * FROM Contador';

	$statement = $pdo->prepare($contador);
	$statement->execute();
	$results_contador = $statement->fetchAll();
	 ?>

 <?php 
	include '../extend/header.php'
?>

<div class="container">
	<div class="row">
	<form method="post">
	<div class="row">
		<h5>Modificar contador</h5>

		<div class="input-field col s6">
          	<input value="<?php echo $rs['idContador'] ?>" name="idContador_2" type="text">
        </div>
        <div class="input-field col s6">
          	<input value="<?php echo $rs['Contadorcol'] ?>" name="Contadorcol" type="text">
        </div>
	</div>
	<div class="row">
		<div class="input-field col s4">
          	<input value="<?php echo $rs['ap_paterno_cont'] ?>" name="ap_paterno_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input value="<?php echo $rs['ap_materno_cont'] ?>" name="ap_materno_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input class="datepicker" value="<?php echo $rs['fecha_de_nacimiento'] ?>" name="fecha_de_nacimiento" type="text">
        </div>
	</div>

	<div class="row">
		<div class="input-field col s4">
          	<input value="<?php echo $rs['telefono_cont'] ?>" name="telefono_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input value="<?php echo $rs['estado_cont'] ?>" name="estado_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input value="<?php echo $rs['Municipio'] ?>" name="Municipio" type="text">
        </div>	
	</div>

	<div class="row">

		<div class="input-field col s4">
          	<input value="<?php echo $rs['colonia_emp'] ?>" name="colonia_emp" type="text">
        </div>
        <div class="input-field col s4">
          	<input value="<?php echo $rs['calle_emp'] ?>" name="calle_emp" type="text">
        </div>
        <div class="input-field col s4">
          	<input value="<?php echo $rs['cp_cont'] ?>" name="cp_cont" type="text">
        </div>

	</div>
	<input class="btn waves-effect waves-light" type="submit" value="Modificar" />
	</form>
</div>
</div>

<div class="row">
	<div  class="col s12">
		<h5>Contador</h5>
		<table class="striped">
			<thead>
				<tr>
					<th>clave</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Fecha de nacimiento</th>
					<th>Telefono</th>
					<th>Estado</th>
					<th>Municipio</th>
					<th>Colonia</th>
					<th>Calle</th>
					<th>Codigo postal</th>
					<th colspan="2">Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($results_contador as $mr) {
				 ?>
				 <tr>
				 	<td><?php echo $mr['idContador'] ?></td>
				 	<td><?php echo $mr['Contadorcol'] ?></td>
				 	<td><?php echo $mr['ap_paterno_cont'] ?></td>
				 	<td><?php echo $mr['ap_materno_cont'] ?></td>
				 	<td><?php echo $mr['fecha_de_nacimiento'] ?></td>
				 	<td><?php echo $mr['telefono_cont'] ?></td>
				 	<td><?php echo $mr['estado_cont'] ?></td>
				 	<td><?php echo $mr['Municipio'] ?></td>
				 	<td><?php echo $mr['colonia_emp'] ?></td>
				 	<td><?php echo $mr['calle_emp'] ?></td>
				 	<td><?php echo $mr['cp_cont'] ?></td>
				 	<td><a class="btn waves-effect waves-light" href="midifcar_y-eliminar.php?idContador=<?php echo $mr['idContador']; ?>">Ver detalles</a></td>
							<td><a class="btn waves-effect waves-light red" onclick="eliminar_contador(<?php echo $mr['idContador']; ?>)" href="#">ELIMINAR</a>
				 </tr>
				 <?php 
				 	}
				  ?>
			</tbody>
		</table>
	</div>
</div>



<?php 
	include '../extend/footer.php';
?>