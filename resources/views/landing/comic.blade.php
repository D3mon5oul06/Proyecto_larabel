<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Comic Cards</title>
  <link rel="stylesheet" href="{!! asset('css/ComicSection.css') !!}">
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
  </header>


  <div class="comics-section">
    <div class="comic-card">
      <img src="https://upload.wikimedia.org/wikipedia/en/2/23/Civil_War_7.jpg" alt="Civil War">
      <h2>Civil War</h2>
      <p>La trama de la serie sigue una línea de historia en la que el gobierno de los EE. UU. aprueba una Ley de registro de superhéroes.</p>
    </div>

    <div class="comic-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuddJ0kf2G1iXBgWxAgAahdzLNi0bgC2vsRw&usqp=CAU" alt="Secret Wars">
      <h2>Secret Wars</h2>
      <p>La premisa básica de Secret Wars es que una entidad todopoderosa conocida como The Beyonder transporta a un grupo de héroes y villanos a un planeta remoto.</p>
    </div>
  </div>
  <footer class="footer-gray">
    <p>Derechos de autor © 2023. Mi sitio web.</p>
    <p>Contáctanos en ozielan2101@gmail.com</p>
  </footer>
</body>
</html>
