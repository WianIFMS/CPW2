
<?php
include_once"conexao.php";

$sql= "SELECT * FROM produtos";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			
			<table class="table table-dark">
				<thead>
					<tr class="col">
						<th >ID</th>
						<th >NOME</th>
						<th >DESCRIÇÃO</th>
						<th>PREÇO</th>
					</tr>
				</thead>
				<tbody>
			<?php foreach ($vetorRegistros as $value) {
				?>
				
					<tr>
						<th><?= $value["id"];?> </th>
						<td ><?= $value["nome"];?> </td>
						<td ><?= $value["descricao"];?></td>
						<td ><?= $value["preco"];?></td>
						
						
						<td><a href="exclui.php?id=<?php echo $value['id'];?>"> 
						Excluir</a></td>
						<td><a href="FormProdutoedit.php?id=<?php echo $value['id'];?>"> 
						Editar</a></td>

<?php };
 ?>
					</tr>
									</tbody>
			</table>


<button type="button" class="btn btn-success" > <a href="index.php" style="color: white; text-decoration: none">Voltar</a> </button>

</div>

	</body>
</html>
