
<?php 
	
	$dns= 'mysql:dbname=TPVBD;host=localhost';
	$usuario='root';
	$contraseña= '';
	try 
	{
		$coneccion_pdo = new PDO($dns,$usuario,$contraseña);
	} catch (PDOExeption $e) {
		echo "Fallo la conexio" . $e->getMessage();

	}
	
 ?>