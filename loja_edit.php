<?php
include_once"conexao.php";

//processa novo cadastro
$id =0 ;
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

//instrução sql que sera executada
$sql ="UPDATE produtos SET nome = ?, SET descricao = ?, SET preco = ?";


$stmt = $conexao->query($sql);



if ($stmt == TRUE) {
   
header("Location: ListarProdutos.php");

} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}


//executa a instrucao sq





?>