<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Página Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<br>





<div class="container">
  <h1 class="text-center">Cadastrar Serviços</h1>
  <form action="cadastrarservicos.php" method="post">
    <div class="form-group">
      <label for="nome">Nome do Serviço:</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
    </div>
    <div class="form-group">
      <label for="preco">Preço:</label>
      <input type="number" class="form-control" id="preco" name="preco" step="0.01" min="0" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Cadastrar Serviço</button>
  </form>
</div>




<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- Rodapé -->
<footer class="bg-dark text-white mt-5 p-4 text-center">
  Direitos autorais © <?php echo date("Y"); ?> odmildo
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
