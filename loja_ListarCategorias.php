<?php

include_once"conexao.php";
$sql = "SELECT * FROM categorias";
$resultadosql = $conexao->query($sql);
$vetorregistros = $resultadosql->fetch_all(MYSQLI_ASSOC);
?>
<pre>
	<table>
	<tr>
		<th>ID</th>
		<th>NOME</th>
	</tr>
<?php foreach ($vetorregistros as $value) {
	?>
	
	<tr>
		<td><?= $value["id"];?></td>
		<td><?= $value["nome"];?></td>
	</tr>
		

	
<?php	
};
?>
</table>
</pre>
<button> <a href="index.php">Voltar</a> </button>