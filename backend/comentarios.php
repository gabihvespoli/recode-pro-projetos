<?php

require "./Models/Contato.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json");

$contato = Contato::getAll();

echo json_encode($contato);