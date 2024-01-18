<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Página Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Admin  |</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"> Combustível</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fluidos.php">Fluídos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servicos.php">Servícos</a>
      </li>    
    </ul>
  </div>  
</nav>
<div class="text-right mr-3">
  <a href="verfluidos.php" class="btn btn-primary mt-2">Ver Fluidos</a>
</div>


<br>

<div class="container">
  <h1 class="text-center">Cadastrar Fluido</h1>
  <form action="inserir_fluidos.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="tipo">Tipo de Fluido:</label>
      <input type="text" class="form-control" id="tipo" name="tipo"required>
    </div>
    <div class="form-group">
      <label for="nome">Nome do Fluido:</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="litro">Litros:</label>
      <input type="number" class="form-control" id="litro" name="litro" required>
    </div>
    <div class="form-group">
      <label for="preco">Preço:</label>
      <input type="number" class="form-control" id="preco" name="preco" required>
    </div>
    <div class="form-group">
      <label for="estado">estado:</label>
      <input type="text" class="form-control" id="estado" name="estado" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>

<!-- Rodapé -->
<footer class="bg-dark text-white mt-5 p-4 text-center">
  Direitos autorais © <?php echo date("Y"); ?> odmildo
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
