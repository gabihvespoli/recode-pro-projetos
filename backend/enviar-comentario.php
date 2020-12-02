<?php

require "./Models/Contato.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json");

$contato = new Contato;
$contato->nome = $_POST['nome'];
$contato->email = $_POST['email'];
$contato->msg = $_POST['msg'];

$validacao = $contato->enviarComentario();

if ($validacao == true) {
  echo json_encode(true);
} else {
  echo json_encode(false);
}