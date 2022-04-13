<?php
$conexion = mysqli_connect("localhost", "root", "root", "muebles_h_l") or die ("No se pudo establecer conexión con la base de datos");
mysqli_query($conexion, "DELETE FROM Cliente WHERE Cod_Cliente = '".$_GET['id']."'");

header("Location: index.php");
?>
