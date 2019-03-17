
<?php
require_once"conexao.php";

$sql= "SELECT * FROM produtos";
$resultadosql = $conexao->query($sql);
$vetorRegistros = $resultadosql->fetch_all(MYSQLI_ASSOC);


?>
<?php require_once"cabecalho.php";?>
	<div style="margin-bottom: 5px">
	<button  class="btn btn-success"><a style="color: white;text-decoration: none" href="FormProduto.php"> Novo produto</a></button>
	</div>
			<table class="table table-dark">
				<thead>
					<tr class="col">
						<th >ID</th>
						<th >NOME</th>
						<th >DESCRIÇÃO</th>
						<th>PREÇO</th>
						<th>EDITAR</th>
						<th>EXCLUIR</th>
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
						<td>
							<form action="FormProduto.php" method="post">
								<input type="hidden" name="id" value="<?=$value["id"]?>">
								<button type="submit" class="btn btn-success">Alterar</button>
							</form>
						
						<td><BUTTON class="btn btn-danger"><a  style="color: white;text-decoration: none" href="exclui.php?id=<?php echo $value['id'];?>"> 
						Excluir</a></BUTTON></td>

<?php };
 ?>
					</tr>
									</tbody>
			</table>

<?php require_once"rodape.php";?>
	