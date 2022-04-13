<?php
$conexion = mysqli_connect('localhost', 'root', '', 'censocmoc') or die("No se pudo establecer conexion con la base de datos");
mysqli_query($conexion, "INSERT INTO accionista (ACCIdentifica, ACCNombres, ACCApellidos, ACCiones, ACCMovil, ACCorreo, ACCDireccion, ACCIngreso, ACCFecNac) VALUES('" . $_POST['ACCIdentifica'] . "','" . $_POST['ACCNombres'] . "','" . $_POST['ACCApellidos'] . "','" . $_POST['ACCiones'] . "','" . $_POST['ACCMovil'] . "','" . $_POST['ACCorreo'] . "','" . $_POST['ACCDireccion'] . "','" . $_POST['ACCIngreso'] . "','" . $_POST['ACCFecNac'] . "')");

header("Location: index.php");
