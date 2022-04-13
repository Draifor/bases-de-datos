<!DOCTYPE html>
<html lang="en">

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
                <h2>AGREGAR CLIENTE</h2>
            </div>
            <!--pagina-actual-->
        </header>
        <!--.header-nav-->

        <main class="contenedor-principal">
            <div class="contenido-clientes contenido">
                <h2>Nuevo Cliente</h2>

                <form name="add-customer" id="add-customer" method="post" action="insert.php">
                    <label for="identificacion">Identificación:</label>
                    <input type="number" name="identificacion" id="identificacion">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="apellido">Apellido: </label>
                    <input type="text" name="apellido" id="apellido">
                    <label for="celular">Celular:</label>
                    <input type="number" name="celular" id="celular">
                    <label for="direccion">Dirección:</label>
                    <input type="text" name="direccion" id="direccion">
                    <div>
                        <input type="submit" value="Agregar" id="add-customer" class="button">
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

</html>
