<?php

require_once "./config/config.php";
require_once "./config/conexao.php";
require_once "./config/autoload.php";

use Repository\Cliente;

$cliente = new Cliente();
$result = $cliente->listarDados();

echo json_encode(array(
    
    "status" => "sucesso",
    "dados" => array($result)
));