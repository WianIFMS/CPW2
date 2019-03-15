
<?php

	include_once("conexao.php");
    
//include_once("conexao.php");
//$id = $_GET['produtos'];

	//$resutado = "DELETE FROM produtos WHERE id='$id'";
	
	$id = $_GET['id'];

  $stmt = $conexao->prepare("DELETE FROM produtos WHERE id=?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  if ($stmt) {
  	# code...
  	header("Location:ListarProdutos.php");
  }
  


?>
