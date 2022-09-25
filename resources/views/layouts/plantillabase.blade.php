<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @yield('css')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Multiservicios M&G</title>
  </head>
  <body>
    <h1 class="bg-primary text-white text-center">Multiservicios M&G</h1>

    <div class="container">
         @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js">
    @yield('js')

  </body>
</html>