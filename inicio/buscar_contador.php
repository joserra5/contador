<?php 
	require_once('../conexion/conexion.php');

	$consultas_sql = 'SELECT * FROM Contador WHERE Contadorcol LIKE :search ORDER by idContador ASC';

		$search = isset($_GET['Contadorcol'])? $_GET['Contadorcol']: '';
		$arr[':search']= '%' . $search . '%';
		$statement = $pdo->prepare($consultas_sql);
		$statement->execute($arr);
		$resultado = $statement->fetchAll();

 ?>



<?php 
	include '../extend/header.php'
?>


<div class="container">

			<form method="get">
      			<h2 class="card-title">Buscador</h2>
        		<div class="input-field col s12">
         		<input type="text" id="autocomplete-input" name="Contadorcol" class="autocomplete">
         		<label for="autocomplete-input">Ingrese el nombre del contador</label>
         			<input class="waves-effect waves-light btn cyan" type="submit" value="Buscar">
         			
       			</div>
       		</form>
		</div>

</div>



<div class="row">
	<div  class="col s12">
		<h5>registros</h5>
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
					foreach ($resultado as $mr) {
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