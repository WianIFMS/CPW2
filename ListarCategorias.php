<?php

require_once"conexao.php";


$sql= "SELECT * FROM categorias";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);

?>

<?php require_once"cabecalho.php";?>

	<button  class="btn btn-success"><a href="FormCategorias.php"></a> Nova categoria</button>
	<table  class="table table-dark">
	<tr>
		<th>ID</th>
		<th>NOME</th>
			<th>EDITAR</th>
				<th>APAGAR</th>
	</tr>
<?php foreach ($vetorRegistros as $value) {?>
	
	<tr>
		<td><?=$value["id"];?></td>
		<td><?=$value["nome"];?></td>
		<td>
			<form action="FormCategorias.php" method="post">
				<input type="hidden" name="id" value="<?=$value["id"]?>">
				<button type="submit" class="btn btn-success">Alterar</button>
			</form>
		</td>
		<td><form action="ExcluirCategorias.php" method="post">
				<input type="hidden" name="id" value="<?=$value["id"]?>">
				<button type="submit" class="btn btn-danger">Excluir</button>
			</form>
		</td>
	</tr>
			
<?php	
};
?>
</table>
<?php  require_once"rodape.php";?>
