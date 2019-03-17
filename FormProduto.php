<?php require_once"conexao.php";?>
<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];
}else{
	$id = 0;
}
$sql = "SELECT * FROM produtos where id=?";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i",$id);
$sqlprep->execute();
$sqlResultado = $sqlprep->get_result();
$vetorUmRegistro = $sqlResultado->fetch_assoc();

?>
<?php  require_once"cabecalho.php"; ?>
 
<?php if (isset($_GET["msgOk"])) { ?>
	<div class="bg-succes">
		<?=$_GET["msgOk"];?>
	</div>
<?php } ?>
		
		<form action="SalvarProdutos.php" method="post">
			 <div class="form-group">
		    <label for="id">ID</label>
		    <input readonly="true" value="<?=$vetorUmRegistro['id'];?>"  name="id" type="text" class="form-control" id="id" >
		  </div>
		  <div class="form-group">
		    <label for="nome">Nome</label>
		    <input value="<?=$vetorUmRegistro['nome'];?>"  name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
		  </div>
		  <div class="form-group">
		    <label for="descricao">Descrição</label>
		    <input value="<?=$vetorUmRegistro['descricao'];?>"   name="descricao" type="text" class="form-control" id="descricao" placeholder="Descrição">
		  </div>
		   <div class="form-group">
		    <label for="preco">Preço</label>
		    <input value="<?=$vetorUmRegistro['preco'];?>"  name="preco" type="number" class="form-control" id="preco" placeholder="valor R$">
		  </div>
		  <button type="submit">Cadastrar</button>
		</form>
	
	<?php require_once('rodape.php');?>