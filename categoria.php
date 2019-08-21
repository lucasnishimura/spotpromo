<?php
require_once "./define.php";
require_once "./dbConnection.php";
  
class Categoria extends Conexao
{
     
   private function __construct(){ 
   }
  
   public static function getAll() {
    try{
  
        $Conexao    = Conexao::getConnection();
        $query      = $Conexao->query("SELECT * FROM categoria");
        $categorias   = $query->fetchAll(PDO::FETCH_ASSOC);

        return $categorias;
    }catch(Exception $e){
        echo $e->getMessage();
        exit;
    }
  }
}