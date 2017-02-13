<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Olá</title>
  </head>
  <body>
    <h2> Primeiro olá com Laravel</h2>

    @php
     $nome = "Ezequias"
    @endphp

    @for($i = 0; $i < 100; $i++)
    <h1> ola @{{$nome}} </h1>
    @endfor

  </body>
</html>
