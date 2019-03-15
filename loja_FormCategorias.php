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
		    <h1 class="display-4"> Categorias</h1>
		    <p class="lead"> Realizando cadastro de categoras</p>
		  
		
		<form action="Salvar_categorias.php" method="post">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nome</label>
		    <input name="nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
		  </div>
		 
		  <button type="submit">Cadastrar</button>
		  <button> <a href="index.php">Voltar</a> </button>
		</form>
	
		</div>
		</div>
	</body>
</html>