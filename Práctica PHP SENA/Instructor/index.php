<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$conexion = mysqli_connect('localhost', 'root', '', 'censocmoc') or die("No se pudo establecer conexion con la base de datos");
$RSAcc=mysqli_query($conexion, "SELECT * FROM accionista");
$NumAcc=mysqli_num_rows($RSAcc);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gestionar Accionistas</title>
<style type="text/css">
<!--
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
</head>
<body>
<div align="center"><a href="add.php" class="style4">Agregar Accionista</a></div>
<table align="center">
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style3">Indentificaci&oacute;n</span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style3">Nombres</span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style3">Apellidos</span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style3">Telef&oacute;no</span></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><span class="style3">Correo</span></div></td>
  </tr>
  <?php
  if($NumAcc!=0){
  	while($vAcc=mysqli_fetch_row($RSAcc))
	{
  ?>
  <tr>
    <td><a href="edit.php?id=<?php echo $vAcc[0]; ?>"><img src="../../img/edit.png" width="20" height="20" /></a><a href="delete.php?id=<?php echo $vAcc[0]; ?>"><img src="../../img/delete.png" width="20" height="20" /></a></td>
    <td><span class="style4"><?php echo $vAcc[1]; ?></span></td>
    <td><span class="style4"><?php echo $vAcc[2]; ?></span></td>
    <td><span class="style4"><?php echo $vAcc[3]; ?></span></td>
    <td><span class="style4"><?php echo $vAcc[5]; ?></span></td>
    <td><span class="style4"><?php echo $vAcc[6]; ?></span></td>
  </tr>
  <?php
  		}
	}
  ?>
</table>
</body>
</html>
