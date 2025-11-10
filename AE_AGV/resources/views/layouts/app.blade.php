<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>@yield('title','Catálogo')</title>
  <style>
    body{font-family:Arial;margin:40px;max-width:800px}
    header,footer{text-align:center;opacity:0.8}
    a{color:blue;text-decoration:none}
  </style>
</head>
<body>
  <header><h1>Catálogo de Categorías</h1><hr></header>
  <main>@yield('content')</main>
  <footer><hr>Web de Alonso Garcia Vallejo</footer>
</body>
</html>
