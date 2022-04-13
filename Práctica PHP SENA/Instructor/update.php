<?php
$conexion = mysqli_connect('localhost', 'root', '', 'censocmoc') or die("No se pudo establecer conexion con la base de datos");
mysqli_query($conexion, "UPDATE accionista SET ACCIdentifica = '".$_POST['ACCIdentifica']."', ACCNombres = '".$_POST['ACCNombres']."', ACCApellidos = '".$_POST['ACCApellidos']."', ACCiones = '".$_POST['ACCiones']."', ACCMovil = '".$_POST['ACCMovil']."', ACCorreo = '".$_POST['ACCorreo']."', ACCDireccion = '".$_POST['ACCDireccion']."', ACCIngreso = '".$_POST['ACCIngreso']."', ACCFecNac = '".$_POST['ACCFecNac']."' WHERE ACCid = '".$_POST['ACCid']."'");

header("Location: index.php");
?>