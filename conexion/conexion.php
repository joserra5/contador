<?php

$dsn = 'mysql:dbname=Contador;host=localhost';
$user = 'che';
$password = 'joserrache';

try{

	$pdo = new PDO(	$dsn, 
					$user, 
					$password
					);

}catch( PDOException $e ){
	echo 'Error al conectarnos: ' . $e->getMessage();
}
?>
