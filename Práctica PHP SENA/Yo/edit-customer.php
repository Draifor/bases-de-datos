<!DOCTYPE html>
<html lang="en">
<?php
$conexion = mysqli_connect("localhost", "root", "root", "muebles_h_l") or die ("No se pudo establecer conexión con la base de datos");
$cliente = mysqli_query($conexion, "SELECT * FROM Cliente WHERE Cod_Cliente = '".$_GET['id']."'");
$numClientes = mysqli_num_rows($cliente);
if ($numClientes!=0){
    $datosCliente=mysqli_fetch_row($cliente);
    ?>
}
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE INVENTARIO</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor-tabla contenedor-formulario contenedor">
        <header class="header-nav">
            <div class="contenido-header">
                <h1>MUEBLES H&L</h1>
                <img src="img/logo.jpeg" alt="Logo Muebles H&L">
            </div>
            <!--.contenido-header-->

            <nav>
                <a href="index.html">Inicio</a>
                <a href="clientes.html">Clientes</a>
                <a href="diseños.html">Diseños</a>
                <a href="materiales.html">Materiales</a>
                <a href="productos.html">Productos</a>
                <a href="ventas.html">Ventas</a>
                <a href="orden-de-compra.html">Orden de Compra</a>
            </nav>

            <div class="datos-usuario">
                <p class="usuario">PEPITO PEREZ</p>
                <button class="button" id="cerrar-sesion">Cerrar Sesión</button>
            </div>
            <!--.datos-usuario-->

            <div class="pagina-actual">
                <h2>MODIFICAR CLIENTE</h2>
            </div>
            <!--pagina-actual-->
        </header>
        <!--.header-nav-->

        <main class="contenedor-principal">
            <div class="contenido-clientes contenido">
                <h2>Cliente</h2>

                <form name="edit-customer" id="edit-customer" method="post" action="update.php">
                    <input type="hidden" name="cod_cliente" id="cod_cliente" value="<?php echo $datosCliente[0]; ?>">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $datosCliente[2]; ?>">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?php echo $datosCliente[3]; ?>">
                    <label for="identificacion">Identificación: </label>
                    <input type="number" name="identificacion" id="identificacion" placeholder="Identificación" value="<?php echo $datosCliente[1]; ?>">
                    <label for="celular">Celular</label>
                    <input type="number" name="celular" id="celular" placeholder="Celular" value="<?php echo $datosCliente[4]; ?>">
                    <label for="direccion">Dirección:</label>
                    <input type="text" name="direccion" id="direccion" placeholder="Dirección" value="<?php echo $datosCliente[5]; ?>">
                    <div>
                        <input type="submit" value="Modificar" id="edit-customer" class="button">
                        <input type="button" value="Cancelar" id="regresar" class="button">
                    </div>
                </form>
            </div>
            <!--.contenido-->
        </main>
        <!--.contenedor-principal-->

        <footer>
            <p>IP: ...........</p>
            <p>DIA/MES/AÑO HORA</p>

            <p>Todos los derechos reservados Muebles H&L&copy;</p>
        </footer>
    </div>
    <script src="js/scripts.js"></script>
</body>
<?php
}
?>
</html>
