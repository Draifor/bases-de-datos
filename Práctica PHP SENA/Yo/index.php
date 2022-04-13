<!DOCTYPE html>
<html lang="es">
<?php
$conexion = mysqli_connect("localhost", "root", "root", "muebles_h_l") or die ("No se pudo establecer conexión con la base de datos");
$cliente = mysqli_query($conexion, "SELECT * FROM Cliente");
$numClientes = mysqli_num_rows($cliente);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTES - SISTEMA DE INVENTARIO</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor-tabla contenedor">
        <header class="header-nav">
            <div class="contenido-header">
                <h1>MUEBLES H&L</h1>
                <img src="img/logo.jpeg" alt="Logo Muebles H&L">
            </div><!--.contenido-header-->

            <nav>
                <a href="index.html">Inicio</a>
                <a href="#">Clientes</a>
                <a href="diseños.html">Diseños</a>
                <a href="materiales.html">Materiales</a>
                <a href="productos.html">Productos</a>
                <a href="ventas.html">Ventas</a>
                <a href="orden-de-compra.html">Orden de Compra</a>
            </nav>

            <div class="datos-usuario">
                <p class="usuario">PEPITO PEREZ</p>
                <button class="button" id="cerrar-sesion">Cerrar Sesión</button>
            </div><!--.datos-usuario-->

            <div class="pagina-actual">
                <h2>CLIENTES - INVENTARIOS</h2>
            </div><!--pagina-actual-->
        </header><!--.header-nav-->

        <main>
            <section class="clientes seccion-tabla">
                <ul class="contenedor-botones">
                    <li id="regresar">
                        <a><img src="img/back.svg" alt="icono regresar"></a>
                        <p>Regresar</p>
                    </li>
                    <li id="buscar">
                        <a href="#"><img src="img/look.svg" alt="icono buscar"></a>
                        <p>Buscar</p>
                    </li>
                    <li id="agregar">
                        <a href="add-customer.php"><img src="img/add.svg" alt="icono agregar"></a>
                        <p>Agregar</p>
                    </li>
                    <li id="modificar">
                        <a href="edit-customer.php?id"><img src="img/edit.svg" alt="icono modificar"></a>
                        <p>Modificar</p>
                    </li>
                    <li id="eliminar">
                        <a href="#"><img src="img/del.svg" alt="icono eliminar"></a>
                        <p>Eliminar</p>
                    </li>
                </ul><!--.contenedor-botones-->

                <table id="clientes">
                    <tr>
                        <th></th>
                        <th>COD CLIENTE</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>N° DOCUMENTO</th>
                        <th>CELULAR</th>
                        <th>DIRECCIÓN</th>
                    </tr>
                    <?php
                    if ($numClientes != 0) {
                        while ($datosCliente = mysqli_fetch_row($cliente)) {
                    ?>
                    <tr>
                        <td><a href="edit-customer.php?id=<?php echo $datosCliente[0]; ?>"><img src="img/edit.svg" alt="Edit icon" width="20"></a><a href="delete.php?id=<?php echo $datosCliente[0]; ?>"><img src="img/del.svg" alt="Delete icon" width="20"></a></td>
                        <td><?php echo $datosCliente[0]; ?></td>
                        <td><?php echo $datosCliente[2]; ?></td>
                        <td><?php echo $datosCliente[3]; ?></td>
                        <td><?php echo $datosCliente[1]; ?></td>
                        <td><?php echo $datosCliente[4]; ?></td>
                        <td><?php echo $datosCliente[5]; ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table><!--#clientes-->
            </section><!--seccion-->
        </main>

        <footer>
            <p>IP: ...........</p>
            <p>DIA/MES/AÑO HORA</p>

            <p>Todos los derechos reservados Muebles H&L&copy;</p>
        </footer>
    </div>

    <script src="js/scripts.js"></script>
</body>
</html>
