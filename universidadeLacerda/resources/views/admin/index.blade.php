<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Olá  administrador </h1>

<nav class="navbar navbar-expand-lg navbar-light bg-light">



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('acao/adm') }}">Formacao <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('funcionario/login') }}">Curso</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('funcionario/login') }}">Modalidade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('funcionario/login') }}">Curso</a>
          </li>


      </ul>

    </div>
  </nav>

</body>
</html>
