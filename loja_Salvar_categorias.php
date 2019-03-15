<?php
include_once"conexao.php";

$id = 0;
$nome = $_POST['nome'];


$sql = "INSERT INTO categorias (nome)values (?)";

$sqlprep = $conexao ->prepare($sql);

$sqlprep -> bind_param("s", $nome);


if ($sqlprep == true) {
header("Location: FormCategorias.php");
}else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$sqlprep->execute();
 




?>