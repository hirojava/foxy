<?php 
	include('../middleware/conection.php'); //CREACION DE PDO

	$nombre_usuario    = $_POST['usuario'];
	$contraseña_usuario= $_POST['contraseña'];
    validarUsuario($coneccion_pdo,$nombre_usuario,$contraseña_usuario);

	function validarUsuario($coneccion_pdo,$nombre_usuario,$contraseña_usuario)
	{

		$aux=0;
		
		foreach ($coneccion_pdo->query('select us_nombre,us_pass from usuario') as $row) 
		{
			print $row['us_nombre'];
			print $row['us_pass'];
		}

	}






		
		// foreach ($pdo->query('select * from usuario') as $row) {
		// 	print $row['us_id'];
		// 	print $row['us_nombre'];
		// 	print $row['us_fechanacimiento'];
		// 	print $row['us_sexo'];
		// 	print $row['us_domicilio'];
		// 	print $row['us_administrador'];
		// 	print $row['us_contraseña'];
		// }}}


	// if (isset($_POST['usuario']) && isset($_POST['contraseña'])) 
	// {
			
	// }
	// else
	// {
	// 	#PAGINA DE ERROR DE LOGIN
	// }



	/*function getFruit($conn)
	{
    	$sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
    	foreach ($conn->query($sql) as $row) {
        print $row['name'] . "\t";
        print $row['color'] . "\t";
        print $row['calories'] . "\n";
   	 }
}*/





	// COMO OBTENER CAMPOS DE LA BSE DE DATOS 
	// function getData($pdo)
	// {
	// 	$sql = 'SELECT * FROM usuario ORDER BY Us_ID';

	// 	foreach ($pdo->query($sql) as $row) {
	// 		print $row['Us_ID'];
	// 		print $row['US_Nombre'];
	// 		print $row['US_FechaNacimiento'];
	// 		print $row['Us_Sexo'];
	// 		print $row['Us_Domicilio']; 
	// 		print $row['Us_Administrador'];
	// 	}
	// }
	// getData($getBaseData);




 ?>