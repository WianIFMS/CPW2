<!DOCTYPE html>
<html>
	<head>
		<title> Primeiro projeto PHP com banco de dados</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<meta charset="utf-8">
	</head>
	<body>

		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4"> Primeiro projeto PHP com banco de dados</h1>
		    <p class="lead"> Realizando cadastrono banco de dados</p>
		  
		
		<form action="processa.php" method="post">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nome</label>
		    <input  name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descrição</label>
		    <input  name="descricao" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Descrição">
		  </div>
		   <div class="form-group">
		    <label for="formGroupExampleInput2">Preço</label>
		    <input  name="preco" type="number" class="form-control" id="formGroupExampleInput2" placeholder="valor R$">
		  </div>
		  <button type="submit">Cadastrar</button>
		  <button> <a href="index.php">Voltar</a> </button>
		</form>
	
		</div>
		</div>
	</body>
</html>