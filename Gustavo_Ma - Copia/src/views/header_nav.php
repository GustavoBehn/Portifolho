<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap/css/bootstrap.min.css"/>
    <title>Página inicial</title>
</head>
<body>

<!-- Propriedades iniciais (tamanho e cor da barra) -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
<!-- Logo e link do logo -->
    <a class="navbar-brand" href="https://www.youtube.com">
        <img src="https://icones.pro/wp-content/uploads/2021/02/youtube-logo-icone.png" alt="Logo" title="Ir para youtube" height="80px"/>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="../public/lista.php">Listar pedidos</a>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>