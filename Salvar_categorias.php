<?php
include_once"conexao.php";


$nome = $_POST['nome'];

$id = $_POST['id'];
if ($id==0) {
$sql = "INSERT INTO categorias (nome)values (?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("s",$nome);		
$sqlprep->execute();
$msgOk = "Categoria adicionada com sucesso.";
}else{
$sql = "UPDATE categorias SET nome=? where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("si",$nome,$id);
$sqlprep->execute();
$msgOk = "Categoria atualizada com sucesso.";
}

?>
<?php header("Location: FormCategorias.php?msgOk=". $msgOk);?>