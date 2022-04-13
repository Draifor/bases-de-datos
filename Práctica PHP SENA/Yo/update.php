<?php
$conexion = mysqli_connect("localhost", "root", "root", "muebles_h_l") or die ("No se pudo establecer conexión con la base de datos");
mysqli_query($conexion, "UPDATE Cliente SET Identificacion = '".$_POST['identificacion']."', Nombre = '".$_POST['nombre']."', Apellido = '".$_POST['apellido']."', Celular = '".$_POST['celular']."', Direccion = '".$_POST['direccion']."' WHERE Cod_Cliente = '".$_POST['cod_cliente']."'");

header("Location: index.php");
?>
