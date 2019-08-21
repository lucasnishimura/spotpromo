<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
  require_once "./define.php";
  require_once "./dbConnection.php";
  
class Produto extends Conexao
{
     
   public function __construct(){
   }
  
   public static function getAll() {
      try{
          $Conexao    = Conexao::getConnection();
          $query      = $Conexao->query("SELECT a.cod_produto, a.descricao as prod_desc, b.descricao as cod_desc FROM produto as a INNER JOIN categoria as b ON a.cod_categoria = b.cod_categoria");
          $produtos   = $query->fetchAll();

          return $produtos;
      }catch(Exception $e){
          echo $e->getMessage();
          exit;
      }
   }

   public static function save(){
    try{
      $Conexao    = Conexao::getConnection();
      $query      = $Conexao->query("INSERT INTO produto values ('','".$_POST['descricao']."',".$_POST['cod_categoria'].")");

      }catch(Exception $e){
          echo $e->getMessage();
          exit;
      }
    }
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = new Produto;
    Produto ::save();
    header("Location: /teste"); 
    die();  
  } 

