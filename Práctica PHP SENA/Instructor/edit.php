<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
$conexion = mysqli_connect('localhost', 'root', '', 'censocmoc') or die("No se pudo establecer conexion con la base de datos");
$RSAcc=mysqli_query($conexion, "SELECT * FROM accionista WHERE ACCid = '".$_GET['id']."'");
$NumAcc=mysqli_num_rows($RSAcc);
if($NumAcc!=0){
	$vAcc=mysqli_fetch_row($RSAcc);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agregar Acccionista</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="update.php">
  <table align="center">
    <tr>
      <td><div align="right" class="style1">Identificaci&oacute;n:</div></td>
      <td><label>
        <input name="ACCIdentifica" type="number" class="style2" id="ACCIdentifica" placeholder="Digite la Identificaci&oacute;n" required value="<?php echo $vAcc[1]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Nombres:</div></td>
      <td><label>
        <input name="ACCNombres" type="text" class="style2" id="ACCNombres" placeholder="Digite el Nombre del Asociado" required value="<?php echo $vAcc[2]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Apellidos:</div></td>
      <td><input name="ACCApellidos" type="text" class="style2" id="ACCApellidos" placeholder="Digite los Apellidos del Asociado" required value="<?php echo $vAcc[3]; ?>"/></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Cantidad acciones:</div></td>
      <td><label>
        <input name="ACCiones" type="number" class="style2" id="ACCiones" placeholder="Digite la Cantidad de Acciones del Asociado" required value="<?php echo $vAcc[4]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">M&oacute;vil</div></td>
      <td><label>
        <input name="ACCMovil" type="number" class="style2" id="ACCMovil" placeholder="Digite el n&uacute;mero de tel&eacute;fono móvil" required value="<?php echo $vAcc[5]; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Correo: </div></td>
      <td><label>
        <input name="ACCorreo" type="text" class="style2" id="ACCorreo" placeholder="Digite el correo electr&oacute;nico" required value="<?php echo $vAcc[6]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Direcci&oacute;n:</div></td>
      <td><label>
        <input name="ACCDireccion" type="text" class="style2" id="ACCDireccion" placeholder="Digite la direcci&oacute;n de residencia" value="<?php echo $vAcc[7]; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Fecha de Ingreso: </div></td>
      <td><label>
        <input name="ACCIngreso" type="date" class="style2" id="ACCIngreso" placeholder="Digite la fecha de afiliaci&oacute;n" value="<?php echo $vAcc[8]; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Fecha de Nacimiento: </div></td>
      <td><label>
        <input name="ACCFecNac" type="date" class="style2" id="ACCFecNac" placeholder="Digite la fecha de nacimiento" value="<?php echo $vAcc[10]; ?>" />
      </label></td>
    </tr>
    <tr>
      <td><input type="hidden" name="ACCid" id="ACCid" value="<?php echo $vAcc[0]; ?>"/></td>
      <td><label>
        <input name="Submit" type="submit" class="style2" value="Modificar" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
}
?>