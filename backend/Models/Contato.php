<?php

require "Connection.php";

class Contato
{
  public $nome;
  public $email;
  public $msg;

  public static function getAll()
  {
    $connection = Connection::getDb();

    $stmt = $connection->query("SELECT * FROM comentarios ORDER BY data DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function enviarComentario()
  {
    $connection = Connection::getDb();

    $stmt = $connection->query("INSERT INTO comentarios (nome, email, msg) values ('$this->nome', '$this->email', '$this->msg')");

    if ($stmt->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

}