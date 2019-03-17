<?php 
require_once('conexao.php');?>
<?php 


if (isset($_POST['id'])) {
	$id= $_POST['id'];
}else{
$id = 0;

}
$sql = "SELECT * FROM categorias where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i",$id);
$sqlprep->execute();
$resultadoSql = $sqlprep->get_result();
$vetorUmRegistro = $resultadoSql->fetch_assoc();

?>
<?php require_once('cabecalho.php');?>

<?php if (isset($_GET["msgOk"])) : ?>
	<div class="bg-success">
		<?=$_GET["msgOk"];?>
	</div>
<?php endif ?>		  
		
		<form action="Salvar_Categorias.php" method="post">
			 <div class="form-group">
		    <label for="id">ID</label>
		    <input value="<?=$vetorUmRegistro['id'];?>" name="id" type="text" class="form-control" id="id" readonly="true">
		  </div>
		  <div class="form-group">
		    <label for="nome">Nome</label>
		    <input value="<?=$vetorUmRegistro['nome'];?>" name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
		  </div>
		  
		  <button type="submit">Salvar</button>
		   <button><a href="ListarCategorias.php" style="text-decoration: none">Voltar</button>
	
		</form>
	
		
<?php require_once('rodape.php');?>