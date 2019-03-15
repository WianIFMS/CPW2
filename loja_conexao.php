<?php


$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "loja";

// conect no bd

$conexao = new mysqli($host, $usuario, $senha, $bd);
/* definir o charset utilizado na ligação */
$conexao->set_charset("utf8");

// checando conexão
/*if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} else
echo "Conexao bem sucedida";*/

?>