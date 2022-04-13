// Declaración de variables

const btnIngresar = document.getElementById("ingresar");
const btnCerrarSesion = document.getElementById("cerrar-sesion");
const btnRegresar = document.getElementById("regresar");
const btnBuscar = document.getElementById("buscar");
const btnEliminar = document.getElementById("eliminar");
const inputDiseño = document.getElementById("insertar-diseño");
const labelDiseño = document.getElementById("label-diseño");
//** Funciones **/
// Función para iniciar sesión
const iniciarSesion = (evt) => {
  location.href = "index.html";
  evt.preventDefault();
};

// Función para agregar cliente
const agregarCliente = (evt) => {
  location.href = "clientes.html";
  evt.preventDefault();
};

// Función para modificar cliente
const modificarCliente = (evt) => {
  location.href = "clientes.html";
  evt.preventDefault();
};

// Función para agregar diseño
const agregarDiseño = (evt) => {
  location.href = "diseños.html";
  evt.preventDefault();
};

// Función para modificar diseño
const modificarDiseño = (evt) => {
  location.href = "diseños.html";
  evt.preventDefault();
};

// Función para agregar producto
const agregarProducto = (evt) => {
  location.href = "productos.html";
  evt.preventDefault();
};

// Función para modificar producto
const modificarProducto = (evt) => {
  location.href = "productos.html";
  evt.preventDefault();
};

// Función para agregar material
const agregarMaterial = (evt) => {
  location.href = "materiales.html";
  evt.preventDefault();
};

// Función para modificar material
const modificarMaterial = (evt) => {
  location.href = "materiales.html";
  evt.preventDefault();
};

// Función para agregar venta
const agregarVenta = (evt) => {
  location.href = "ventas.html";
  evt.preventDefault();
};

// Función para modificar venta
const modificarVenta = (evt) => {
  location.href = "ventas.html";
  evt.preventDefault();
};

// Función para agregar orden de compra
const agregarOrdenDeCompra = (evt) => {
  location.href = "orden-de-compra.html";
  evt.preventDefault();
};

// Función para modificar orden de compra
const modificarOrdenDeCompra = (evt) => {
  location.href = "orden-de-compra.html";
  evt.preventDefault();
};

//** Botones **/
// Cerrar la sesión
if (btnCerrarSesion) {
  btnCerrarSesion.onclick = () => {
    location.href = "inicio-sesion.html";
  };
}

// Botón regresar
if (btnRegresar) {
  btnRegresar.onclick = () => {
    history.go(-1);
  };
}

// Botón buscar
if (btnBuscar) {
  btnBuscar.onclick = () => {
    alert("¿Qué estás buscando?");
  };
}

// Botón eliminar
if (btnEliminar) {
  btnEliminar.onclick = () => {
    alert("¿A quién hay que eliminar?");
  };
}

// Función para mostrar el nombre del archivo subido al input de agregar diseño
if (inputDiseño) {
  inputDiseño.onchange = function () {
    labelDiseño.innerHTML = inputDiseño.files[0].name;
  };
}
