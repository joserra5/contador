<?php 
	require_once('../conexion/conexion.php');


	if( $_POST )
	{

$inserta = 'INSERT INTO Contador( idContador, Contadorcol, ap_paterno_cont, ap_materno_cont, fecha_de_nacimiento, telefono_cont, estado_cont , Municipio, colonia_emp, calle_emp, cp_cont) VALUES( ?, ?, ?, ?, ?, ? , ?, ?, ?, ?, ?)';

  		$clavecontador = isset($_POST['idContador']) ? $_POST['idContador']: '';
  		$nombre = isset($_POST['Contadorcol']) ? $_POST['Contadorcol']: '';
  		$apellido_p = isset($_POST['ap_paterno_cont']) ? $_POST['ap_paterno_cont']: '';
  		$apellido_m = isset($_POST['ap_materno_cont']) ? $_POST['ap_materno_cont']: '';
  	$fechadena = isset($_POST['fecha_de_nacimiento']) ? $_POST['fecha_de_nacimiento']: '';
  		$telefo = isset($_POST['telefono_cont']) ? $_POST['telefono_cont']: '';
  		$estado = isset($_POST['estado_cont']) ? $_POST['estado_cont']: '';
  		$municipio = isset($_POST['Municipio']) ? $_POST['Municipio']: '';
  		$colonia = isset($_POST['colonia_emp']) ? $_POST['colonia_emp']: '';
  		$calle = isset($_POST['calle_emp']) ? $_POST['calle_emp']: '';
  		$cp = isset($_POST['cp_cont']) ? $_POST['cp_cont']: '';

  		$statement_insert = $pdo->prepare($inserta);
  		$statement_insert->execute(array($clavecontador,$nombre,$apellido_p,$apellido_m,$fechadena,$telefo,$estado,$municipio,$colonia,$calle,$cp));
  		header('location insertar.php');
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
		<h5>Agrerar nuevo contador</h5>

		<div class="input-field col s6">
          	<input placeholder="Clave del contador" name="idContador" type="text">
        </div>
        <div class="input-field col s6">
          	<input placeholder="Nombre del contador" name="Contadorcol" type="text">
        </div>
	</div>
	<div class="row">
		<div class="input-field col s4">
          	<input placeholder="Apellido paterno" name="ap_paterno_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input placeholder="Apellido materno" name="ap_materno_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input class="datepicker" placeholder="Fecha de nacimiento" name="fecha_de_nacimiento" type="text">
        </div>
	</div>

	<div class="row">
		<div class="input-field col s4">
          	<input placeholder="Telefono" name="telefono_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input placeholder="Estado" name="estado_cont" type="text">
        </div>
        <div class="input-field col s4">
          	<input placeholder="Municipio" name="Municipio" type="text">
        </div>	
	</div>

	<div class="row">

		<div class="input-field col s4">
          	<input placeholder="Colonia" name="colonia_emp" type="text">
        </div>
        <div class="input-field col s4">
          	<input placeholder="Calle" name="calle_emp" type="text">
        </div>
        <div class="input-field col s4">
          	<input placeholder="Codigo Postal" name="cp_cont" type="text">
        </div>

	</div>
	<input class="btn waves-effect waves-light" type="submit" value="Agregar" />
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