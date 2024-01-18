<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Página Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <script>
    function checkForm() {
      var nome = document.getElementById('tipo_combustivel').value;
      var email = document.getElementById('estado').value;
      var preco = document.getElementById('preco').value;
      if (nome == "" || email == "" || preco == "") {
        alert("Por favor, preencha todos os campos.");
        return false;
      }
      return true;
    }
  </script>
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
  <h1 class="text-center">Combustíveis ao Tempo Real</h1>
  <br>
  <br>
  <br>
  <div class="container">
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

    $sql = "SELECT id_combustivel,tipo_combustivel, estado, preco FROM combustivel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table class='table table-striped'><thead><tr><th>ID</th><th>Combustível</th><th>Estado</th><th>Preço</th><th>Ação</th></tr></thead><tbody>";
      // Saída de cada linha
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_combustivel"]."</td><td>".$row["tipo_combustivel"]."</td><td>".$row["estado"]."</td><td>".$row["preco"]."</td>";
        echo "<td><button class='btn btn-primary' data-toggle='modal' data-target='#myModal' onclick='editar(".$row["id_combustivel"].", \"".$row["tipo_combustivel"]."\", \"".$row["estado"]."\", \"".$row["preco"]."\")'>Editar</button></td></tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "0 resultados";
    }
    $conn->close();
    ?>
  </div>
</div>

<!-- O Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabeçalho do Modal -->
      <div class="modal-header">
        <h4 class="modal-title">Editar Registro</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Corpo do Modal -->
      <div class="modal-body">
        <form id="editForm" action="atualizar.php" method="post" onsubmit="return checkForm()">
          <input type="hidden" id="id_combustivel" name="id_combustivel">
          <label for="tipo_combustivel">Combustível</label><br>
          
          <select id="tipo_combustivel" name="tipo_combustivel" required>
            <option value="">Selecione...</option>
            <option value="Gasolina">Gasolina</option>
            <option value="Gasóleo">Gasóleo</option>
          </select><br>
          <label for="estado">Estado</label><br>
          
          <select id="estado" name="estado" required>
            <option value="">Selecione...</option>
            <option value="Disponivel">Disponível</option>
            <option value="Não Disponivel">Não Disponivel</option>
          </select><br>
          <label for="preco">Preço</label><br>
          <input type="text" id="preco" name="preco" required><br>
        </form>
      </div>

      <!-- Rodapé do Modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="if(checkForm()) { document.getElementById('editForm').submit(); }">Atualizar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
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

<script>
function editar(id_combustivel, tipo_combustivel, estado, preco) {
  document.getElementById('id_combustivel').value = id_combustivel;
  document.getElementById('tipo_combustivel').value = tipo_combustivel;
  document.getElementById('estado').value = estado;
  document.getElementById('preco').value = preco;
}
</script>

</body>
</html>
