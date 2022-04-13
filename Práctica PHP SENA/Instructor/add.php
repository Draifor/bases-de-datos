<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<form id="form1" name="form1" method="post" action="insert.php">
  <table align="center">
    <tr>
      <td><div align="right" class="style1">Identificaci&oacute;n:</div></td>
      <td><label>
        <input name="ACCIdentifica" type="number" class="style2" id="ACCIdentifica" placeholder="Digite la Identificaci&oacute;n" required />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Nombres:</div></td>
      <td><label>
        <input name="ACCNombres" type="text" class="style2" id="ACCNombres" placeholder="Digite el Nombre del Asociado" required />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Apellidos:</div></td>
      <td><input name="ACCApellidos" type="text" class="style2" id="ACCApellidos" placeholder="Digite los Apellidos del Asociado" required/></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Cantidad acciones:</div></td>
      <td><label>
        <input name="ACCiones" type="number" class="style2" id="ACCiones" placeholder="Digite la Cantidad de Acciones del Asociado" required />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">M&oacute;vil</div></td>
      <td><label>
        <input name="ACCMovil" type="number" class="style2" id="ACCMovil" placeholder="Digite el n&uacute;mero de tel&eacute;fono móvil" required/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Correo: </div></td>
      <td><label>
        <input name="ACCorreo" type="text" class="style2" id="ACCorreo" placeholder="Digite el correo electr&oacute;nico" required />
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Direcci&oacute;n:</div></td>
      <td><label>
        <input name="ACCDireccion" type="text" class="style2" id="ACCDireccion" placeholder="Digite la direcci&oacute;n de residencia"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Fecha de Ingreso: </div></td>
      <td><label>
        <input name="ACCIngreso" type="date" class="style2" id="ACCIngreso" placeholder="Digite la fecha de afiliaci&oacute;n"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right" class="style1">Fecha de Nacimiento: </div></td>
      <td><label>
        <input name="ACCFecNac" type="date" class="style2" id="ACCFecNac" placeholder="Digite la fecha de nacimiento" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="Submit" type="submit" class="style2" value="Guardar" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
