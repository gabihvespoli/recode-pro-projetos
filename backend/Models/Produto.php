<?php

require "Connection.php";

class Produto
{
  public $idproduto;
  public $nome;
  public $descricao;
  public $preco_antigo;
  public $preco;
  public $imagem;

  public static function getAll()
  {
    $connection = Connection::getDB();

    $stmt = $connection->query("SELECT `idproduto`, produtos.idcategoria, `categoria`, `descricao`, `preco_antigo`, `preco`, `imagem` FROM `produtos` JOIN categorias ON produtos.idcategoria = categorias.idcategoria");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}