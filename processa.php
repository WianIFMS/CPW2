<?php
include_once"conexao.php";

//processa novo cadastro
$id =0 ;
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

//instrução sql que sera executada
$sql ="INSERT INTO produtos(nome, descricao,preco) VALUES(?,?,?)";



//preparando o sqlpara executar
$sqlprep = $conexao ->prepare($sql);
//para cada paramentro da isntrução sql (?) passaum valor
$sqlprep -> bind_param("ssd", $nome,$descricao,$preco);

if ($sqlprep == TRUE) {
   
header("Location: FormProduto.php");

} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}


//executa a instrucao sql

$sqlprep->execute();





?>