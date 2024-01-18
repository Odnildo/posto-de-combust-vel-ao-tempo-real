<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Ver Fluidos</title>
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
        <a class="nav-link" href="#">Servícos</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<div class="container">
  <h1 class="text-center">Ver Fluidos</h1>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bomba";

  // Cria a conexão
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica a conexão
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM fluidos";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table class='table table-striped'><thead><tr><th>ID</th><th>Tipo</th><th>Nome</th><th>Litros</th><th>Preço</th><th>Estado</th><th>Ações</th></tr></thead><tbody>";
    // Saída de cada linha
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["tipo"]."</td><td>".$row["nome"]."</td><td>".$row["litro"]."</td><td>".$row["preco"]."</td><td>".$row["estado"]."</td>";
        echo "<td><button type='button' class='btn btn-info' data-toggle='modal' data-target='#verFluidoModal' data-id='".$row["id"]."'>Ver</button> ";
        echo "<a href='editarfluidos.php?id=".$row["id"]."' class='btn btn-warning'>Editar</a> ";
        echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deletarFluidoModal' data-id='".$row["id"]."'>Deletar</button></td></tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "0 resultados";
    }
    $conn->close();
    ?>
  
</div>

<!-- Modal -->
<!-- Ver Fluidos Modal -->
<div class="modal fade" id="verFluidoModal" tabindex="-1" role="dialog" aria-labelledby="verFluidoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="verFluidoModalLabel">Detalhes do Fluido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <li class="list-group-item"><strong>ID:</strong> <span id="fluidoId"></span></li>
          <li class="list-group-item"><strong>Tipo:</strong> <span id="fluidoTipo"></span></li>
          <li class="list-group-item"><strong>Nome:</strong> <span id="fluidoNome"></span></li>
          <li class="list-group-item"><strong>Litros:</strong> <span id="fluidoLitros"></span></li>
          <li class="list-group-item"><strong>Preço:</strong> <span id="fluidoPreco"></span></li>
          <li class="list-group-item"><strong>Estado:</strong> <span id="fluidoEstado"></span></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>





<!-- Rodapé -->
<footer class="bg-dark text-white mt-5 p-4 text-center">
  Direitos autorais © <?php echo date("Y"); ?> odmildo
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="jss/script.js"></script>
</body>
</html>
