<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Acerca de los Cómics</title>
  <link rel="stylesheet" href="{!! asset('css/acerca.css') !!}">
</head>
<body>
  <!-- Encabezado -->
  <header class="header-gray">
    <h1>Comic Land</h1>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJuJtN8EaKLd4neNe6aD2uemnhqzkDRKa8Og&usqp=CAU" alt="Logo de Comics" id="Logo">
    <!-- Nuevo nav -->
    <nav>
    <ul>
      <li><a href="{{ url('landing/home') }}">Inicio</a></li>
      <li><a href="{{ url('landing/comic') }}">Comics</a></li>
      <li><a href="{{ url('landing/personajes') }}">Personajes</a></li>
      <li><a href="{{ url('landing/acerca') }}">Acerca de</a></li>
      <li><a href="{{ url('landing/personas') }}">Personas</a></li>
    </ul>
  </nav>
  </header>

  <!-- Contenido Acerca de los Cómics -->
  <div class="acerca">
    <h2>¡Bienvenido al mundo de los cómics!</h2>
    <p>Los cómics han sido una forma fascinante de contar historias desde hace décadas. Han dado vida a innumerables superhéroes, villanos, mundos fantásticos y aventuras épicas.</p>
    <p>La historia de los cómics es vasta y llena de figuras importantes. Desde los primeros cómics en el siglo XIX hasta la edad de oro y plata de los cómics, se han creado personajes icónicos como Superman, Batman, Spider-Man y muchos más.</p>
    <p>Estos personajes no solo han entretenido a millones de personas, sino que también han inspirado películas, series, juegos y todo un universo de productos de entretenimiento.</p>
    <h3>Historia</h3>
    <p>Los cómics han evolucionado enormemente desde sus inicios, pasando de ser historias simples a complejas narrativas que abordan temas sociales, políticos y emocionales.</p>
    <h3>Figuras Importantes</h3>
    <p>Autores como Stan Lee, Jack Kirby, Alan Moore, Frank Miller y muchos más han dejado una huella indeleble en el mundo de los cómics con sus obras maestras y su creatividad.</p>
  </div>

  <!-- Pie de Página -->
  <footer class="footer-gray">
    <p>Derechos de autor © 2023. Mi sitio web.</p>
    <p>Contáctanos en ozielan2101@gmail.com</p>
  </footer>
</body>
</html>
