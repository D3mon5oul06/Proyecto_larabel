<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Personajes de Cómics</title>
  <link rel="stylesheet" href="{!! asset('css/personajes.css') !!}">
  <style>
    /* Estilos adicionales para las tarjetas */
    body {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 50px;
      justify-items: center;
      align-items: center;
      text-align: center;
      padding: 20px;
    }

    h1 {
      grid-column: 1 / -1;
    }

    .character-card {
      width: 100%;
      padding: 15px;
      border: 3px solid #ccc;
      border-radius: 8px;
      text-align: center;
    }

    .character-card img {
      width: 100%;
      border-radius: 8px;
    }

    .character-card h2 {
      margin-top: 10px;
      font-size: 1.5em;
    }

    .character-card p {
      font-size: 1.1em;
    }
  </style>
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
</head>
<body>

  <h1>Personajes de Cómics</h1>

  <div class="character-card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzEpdEI4t4NXFpvxlwL6eqg6iCjlN_f0b2TQ&usqp=CAU" alt="Spider-Man">
    <h2>Spider-Man</h2>
    <p>El famoso trepamuros, también conocido como Peter Parker, posee habilidades arácnidas tras ser picado por una araña radiactiva.</p>
  </div>

  <div class="character-card">
    <img src="https://i.pinimg.com/736x/9a/7b/a2/9a7ba24b35f31a2a970b2c89814a1a8a.jpg" alt="Punisher">
    <h2>Punisher</h2>
    <p>Un vigilante italiano-estadounidense que emplea asesinato, secuestro, extorsión, coerción, amenazas de violencia y tortura en su campaña contra el crimen.</p>
  </div>

  <footer class="footer-gray">
    <p>Derechos de autor © 2023. Mi sitio web.</p>
    <p>Contáctanos en ozielan2101@gmail.com</p>
  </footer>
</body>
</html>
