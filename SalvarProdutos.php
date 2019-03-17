<?php
require_once"conexao.php";


$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$id = $_POST['id'];


if ($id==0) {
$sql = "INSERT INTO produtos (nome,descricao,preco)values (?,?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("ssd",$nome,$descricao,$preco);		
$sqlprep->execute();
$msgOk = "Produto adicionado com sucesso.";
}else{
$sql = "UPDATE produtos SET nome=?, descricao=?, preco=? where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("ssdi",$nome,$descricao,$preco,$id);
$sqlprep->execute();
$msgOk = "Produto atualizad0 com sucesso.";
}

?>
<?php header("Location: FormProduto.php?msgOk=". $msgOk);?> 