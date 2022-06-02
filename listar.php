<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="/BarbeariaNovaGeracao/agendar.php">BNG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/BarbeariaNovaGeracao/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/BarbeariaNovaGeracao/listar.php">Agenda</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-white">
<h1>AGENDA</h1>
<?php
    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        // code...
    }



?>

    
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>