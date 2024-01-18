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

// Pega os dados do formulário
// Pega os dados do formulário
$id = isset($_POST['id']) ? $_POST['id'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$litro = isset($_POST['litro']) ? $_POST['litro'] : '';
$preco = isset($_POST['preco']) ? $_POST['preco'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';

// Verifica se todos os valores necessários estão definidos
if ($id !== '' && $tipo !== '' && $nome !== '' && $litro !== '' && $preco !== '' && $estado !== '') {
  // Atualiza o fluido no banco de dados
  $sql = "UPDATE fluidos SET tipo = '$tipo', nome = '$nome', litro = $litro, preco = $preco, estado = '$estado' WHERE id = $id";
  // Execute a consulta aqui
} else {
  echo "Erro: nem todos os valores necessários estão definidos.";
}


$conn->close();
?>
