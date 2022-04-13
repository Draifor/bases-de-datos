<?php
$conexion = mysqli_connect("localhost", "root", "root", "muebles_h_l") or die ("No se pudo establecer conexión con la base de datos");
mysqli_query($conexion, "INSERT INTO Cliente (Identificacion, Nombre, Apellido, Celular, Direccion) VALUES ('".$_POST['identificacion']."', '".$_POST['nombre']."', '".$_POST['apellido']."', '".$_POST['celular']."', '".$_POST['direccion']."')");
header("Location: index.php");
?>
