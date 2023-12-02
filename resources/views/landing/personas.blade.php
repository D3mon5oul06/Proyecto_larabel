<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Comic Land</title>
  <link rel="stylesheet" href="{!! asset('css/personas.css') !!}">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    td button {
      padding: 5px 10px;
      margin-right: 5px;
    }

    /* Estilos para el formulario emergente */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
    }

    .btn-container {
      text-align: right;
    }

  </style>
</head>
<body>

<header class="header-gray">
    <h1>Comic Land</h1>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJuJtN8EaKLd4neNe6aD2uemnhqzkDRKa8Og&usqp=CAU" alt="Logo de Comics" id="Logo">
  </header>

  <nav>
    <ul>
      <li><a href="{{ url('landing/home') }}">Inicio</a></li>
      <li><a href="{{ url('landing/comic') }}">Comics</a></li>
      <li><a href="{{ url('landing/personajes') }}">Personajes</a></li>
      <li><a href="{{ url('landing/acerca') }}">Acerca de</a></li>
      <li><a href="{{ url('landing/personas') }}">Personas</a></li>
    </ul>
  </nav>


    <h1>Tabla de Datos</h1>

<form id="formulario" onsubmit="agregarFila(); return false;">
    <label>ID:</label>
    <input type="text" id="idInput" required>

    <label>Nombre:</label>
    <input type="text" id="nombreInput" required>

    <label>Apellido P:</label>
    <input type="text" id="apellidoPInput" required>

    <label>Apellido M:</label>
    <input type="text" id="apellidoMInput" required>

    <button type="submit">Agregar a la Tabla</button>
</form>

<!-- Ventana modal para editar -->
<div id="modal" class="modal">
    <h2>Editar Datos</h2>
    <label>ID:</label>
    <input type="text" id="editId" readonly>

    <label>Nombre:</label>
    <input type="text" id="editNombre" required>

    <label>Apellido P:</label>
    <input type="text" id="editApellidoP" required>

    <label>Apellido M:</label>
    <input type="text" id="editApellidoM" required>

    <button onclick="guardarEdicion()">Guardar Cambios</button>
    <button onclick="cerrarModal()">Cancelar</button>
</div>

<div class="overlay" onclick="cerrarModal()"></div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO P</th>
            <th>APELLIDO M</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody id="tablaBody">
        <!-- Aquí se llenarán los datos -->
    </tbody>
</table>

<script>
    function agregarFila() {
        var id = document.getElementById('idInput').value;
        var nombre = document.getElementById('nombreInput').value;
        var apellidoP = document.getElementById('apellidoPInput').value;
        var apellidoM = document.getElementById('apellidoMInput').value;

        var tablaBody = document.getElementById('tablaBody');
        var fila = document.createElement('tr');

        var idCell = document.createElement('td');
        idCell.textContent = id;
        fila.appendChild(idCell);

        var nombreCell = document.createElement('td');
        nombreCell.textContent = nombre;
        fila.appendChild(nombreCell);

        var apellidoPCell = document.createElement('td');
        apellidoPCell.textContent = apellidoP;
        fila.appendChild(apellidoPCell);

        var apellidoMCell = document.createElement('td');
        apellidoMCell.textContent = apellidoM;
        fila.appendChild(apellidoMCell);

        var opcionesCell = document.createElement('td');
        var eliminarBtn = document.createElement('button');
        eliminarBtn.textContent = 'Eliminar';
        eliminarBtn.addEventListener('click', function () {
            // Lógica para eliminar el elemento
            fila.remove();
        });

        var editarBtn = document.createElement('button');
        editarBtn.textContent = 'Editar';
        editarBtn.addEventListener('click', function () {
            abrirModal(id, nombre, apellidoP, apellidoM);
        });

        opcionesCell.appendChild(eliminarBtn);
        opcionesCell.appendChild(editarBtn);

        fila.appendChild(opcionesCell);

        tablaBody.appendChild(fila);

        // Limpiar los campos del formulario después de agregar a la tabla
        document.getElementById('formulario').reset();
    }

    // Función para abrir la ventana modal con los datos de la fila seleccionada
    function abrirModal(id, nombre, apellidoP, apellidoM) {
        document.getElementById('editId').value = id;
        document.getElementById('editNombre').value = nombre;
        document.getElementById('editApellidoP').value = apellidoP;
        document.getElementById('editApellidoM').value = apellidoM;

        document.getElementById('modal').style.display = 'block';
        document.querySelector('.overlay').style.display = 'block';
    }

    // Función para cerrar la ventana modal
    function cerrarModal() {
        document.getElementById('modal').style.display = 'none';
        document.querySelector('.overlay').style.display = 'none';
    }

    // Función para guardar los cambios después de editar
    function guardarEdicion() {
        var id = document.getElementById('editId').value;
        var nombre = document.getElementById('editNombre').value;
        var apellidoP = document.getElementById('editApellidoP').value;
        var apellidoM = document.getElementById('editApellidoM').value;

        // Encuentra la fila en la tabla y actualiza sus datos
        var tablaBody = document.getElementById('tablaBody');
        var filas = tablaBody.getElementsByTagName('tr');

        for (var i = 0; i < filas.length; i++) {
            var celdas = filas[i].getElementsByTagName('td');
            if (celdas.length > 0 && celdas[0].textContent === id) {
                celdas[1].textContent = nombre;
                celdas[2].textContent = apellidoP;
                celdas[3].textContent = apellidoM;
                break;
            }
        }

        cerrarModal();
    }
</script>
<footer class="footer-gray">
    <p>Derechos de autor © 2023. Mi sitio web.</p>
    <p>Contáctanos en ozielan2101@gmail.com</p>
  </footer>
</body>
</html>
