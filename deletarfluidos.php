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

$id = $_POST['id'];

// Deleta o fluido do banco de dados
$sql = "DELETE FROM fluidos WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Fluido deletado com sucesso";
} else {
  echo "Erro ao deletar fluido: " . $conn->error;
}

$conn->close();
?>
