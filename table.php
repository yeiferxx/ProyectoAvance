<?php

	$conex=mysqli_connect('localhost','root','','registrobovino');

?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" href="styletable.css">
</head>
<body>

	<header>
	<h1>Registro de los bovinos</h1>
	</header>
	
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_AerXkBByG-cnxYXtiojXViabVBMimrPMSg&s" alt="">
	
	<div>
	<table>
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Raza</td>
			<td>Sexo</td>
			<td>Padre y Madre</td>
			<td>Fecha de Nacimiento</td>
			<td>Tipo de Alimentación</td>
		</tr>

		<?php
		$sql="SELECT * from datosbovinos";
		$result=mysqli_query($conex,$sql);

		// Manejo de errores en la consulta
		if (!$result) {
    die("Error en la consulta: " . mysqli_error($conex));
		}

		while($mostrar=mysqli_fetch_array($result)){
		?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombreBovino'] ?></td>
			<td><?php echo $mostrar['raza'] ?></td>
			<td><?php echo $mostrar['sexo'] ?></td>
			<td><?php echo $mostrar['padres'] ?></td>
			<td><?php echo $mostrar['fechaNacimiento'] ?></td>
			<td><?php echo $mostrar['tipoAlimentacion'] ?></td>
		</tr>
	<?php
	}
	
	?>
	</table>
</div>
</body>
</html>