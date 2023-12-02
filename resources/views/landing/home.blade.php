<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Comic Land</title>
  <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
  <style>
    /* Estilos adicionales para centrar el video */
    .video-section {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Ajusta la altura según sea necesario */
    }

    .video-container {
      position: relative;
      padding-bottom: 30.25%; /* Proporción 16:9 para hacerlo responsivo */
      padding-top: 25px; /* Ajusta el espacio adicional arriba del reproductor */
      width: 70%; /* Ajusta el ancho del contenedor del video */
      max-width: 600px; /* Ancho máximo del contenedor */
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
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


  <section class="info-section">
    <h2>Marvel</h2>
    <p>
      Marvel Comics es una editorial de cómics conocida por crear notables superhéroes como Spider-Man, Iron Man, Capitán América, Hulk, Thor, los Vengadores, los Guardianes de la Galaxia, los X-Men, los Cuatro Fantásticos y Deadpool. Los villanos más conocidos de Marvel son el Duende Verde, Cráneo Rojo, Loki, Thanos, Ultrón, Doctor Doom y Magneto...
    </p>
    <!-- Más contenido -->
    <!-- Agregar contenido generado por ImageComponent si es necesario -->
  </section>

  <section class="video-section">
    <div class="video-container">
      <iframe width="640" height="390" src="https://www.youtube.com/embed/nAdgJGnBEKc" frameborder="0" allowfullscreen></iframe>
    </div>
  </section>

  <!-- Agregar Navigation y VideoSection -->



  <footer class="footer-gray">
    <p>Derechos de autor © 2023. Mi sitio web.</p>
    <p>Contáctanos en ozielan2101@gmail.com</p>
  </footer>

  <script>
    // Agrega aquí cualquier script necesario, como React y React YouTube
  </script>
</body>
</html>
