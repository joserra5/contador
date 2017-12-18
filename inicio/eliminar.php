<?php 
	require_once('../conexion/conexion.php');

	$idcontador = isset($_GET['idContador']) ? $_GET['idContador']: 0;
	$variable = 'DELETE FROM  Contador WHERE idContador = ?';

	$statement = $pdo->prepare($variable);
	$statement->execute(array($idcontador));

	$results = $statement->fetchAll();
	header('Location: midifcar_y-eliminar.php');
 ?>