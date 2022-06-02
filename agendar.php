<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/BarbeariaNovaGeracao/agendar.php">BNG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/BarbeariaNovaGeracao/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Agenda</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Agendar</h1>
            <form action="enviar.php"method="POST">
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="mb-3">
                <label>Numero</label>
                <input type="text" name="numero" class="form-control">
            </div>
            <div class="mb-3">
                <label for="party">Data e Hora de Preferência</label>
                <input id="party" type="datetime-local" name="agendata" value="2022-06-01T08:30" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </div>
            </form>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>