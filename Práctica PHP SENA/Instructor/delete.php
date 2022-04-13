<?php
$conexion = mysqli_connect('localhost', 'root', '', 'censocmoc') or die("No se pudo establecer conexion con la base de datos");
mysqli_query($conexion, "DELETE FROM accionista WHERE ACCid = '".$_GET['id']."'");

header("Location: index.php");
?>