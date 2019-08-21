<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
  require_once "./categoria.php";
  $categorias = Categoria::getAll();
  
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo produto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Teste de cadastro de produtos</h1>
    <p class="lead">Lembre-se de executar o dump na raiz do projeto primeiro</p>
  </div>
</div>
<div class="container">
    <form action="produto.php" method="post">
        <label for="">Descrição</label>
        <input type="text" name="descricao" class="form-control"><br>
        <label for="">Catergoria</label>
        <select name="cod_categoria" id="" class="form-control">
            <option value="">Selecione uma categoria</option>
            <?php
              foreach ($categorias as $key => $categoria) {
                  echo "<option value=".$categoria['cod_categoria'].">".ucfirst($categoria['descricao'])."</option>";
              }
            ?>
        </select><br>
        <button class="btn btn-primary" type="reset">Limpar</button>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form> 
</div>
</body>
</html>