<?php
require_once "produto.php";
$produtos = Produto::getAll();

?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Teste de cadastro de produtos</h1>
    <p class="lead">Lembre-se de executar o dump na raiz do projeto primeiro</p>
  </div>
</div>
<div class="container">
  <a href="form_produto.php">Novo Produto</a>
  <?php
    if(count($produtos)){
      ?>
  <table class="table">
    <tr>
        <th>Código</th>
        <th>Descrição</th>
        <th>Categoria</th>
    </tr>
    <?php
        foreach($produtos as $produto) {
          ?>
        <tr>
            <td><?php echo $produto['cod_produto']; ?></td>
            <td><?php echo $produto['prod_desc']; ?></td>
            <td><?php echo $produto['cod_desc']; ?></td>
        </tr>
    <?php
        }
        ?>
  </table>
  <?php }else{ 
    echo '<h3>Não há registros</h3>';
  }
  ?>
</div>
