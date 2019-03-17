
<?php

	$id = $_POST['id'];

  require_once("conexao.php");

  $sql = "DELETE FROM categorias WHERE id=?";
  $sqlprep = $conexao->prepare($sql);
  $sqlprep->bind_param("i", $id);
  $sqlprep->execute();
 $msgOk = "Categoria excluida com sucesso.";

?>
<?php header('Location:ListarCategorias.php?msgOk='.$msgOk);?>



