<!DOCTYPE html>
<html>
<head>
  <title>Editar Fluidos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Editar Fluido</h1>
    <form action="atualizarfluidos.php" method="post">
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" name="id" readonly>
      </div>
      <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control" id="tipo" name="tipo">
      </div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="form-group">
        <label for="litro">Litros</label>
        <input type="number" class="form-control" id="litro" name="litro">
      </div>
      <div class="form-group">
        <label for="preco">Preço</label>
        <input type="number" class="form-control" id="preco" name="preco">
      </div>
      <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado">
      </div>
      <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
  </div>
</body>
</html>
