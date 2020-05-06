<!DOCTYPE html>
<html>
<head>
	<?php require('intermediario.php');?>
	
	<title>Trabalho pratico 2</title>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<form method="post">
		<?php	

		?>

		<div class="form-row align-items-center">
			<div class="form-group col-md-4">
				<label for="firstName">Primeiro Nome:</label>
				<input type="text"  class="form-control" name="nome" id="nome" value='<?php echo $var; ?>' >
			</div>
			<div class="form-group col-md-4">
				<label for="firstName">Apelido:</label>
				<input type="text"  class="form-control" name="apelido" id="ano_nascimento"  value='<?php echo $var1; ?>'>
			</div>
			<div class="form-group col-md-4">
				<label for="firstName">Ano Nascimento:</label>
				<input type="number" class="form-control" name="ano_nascimento" id="ano_nascimento" value='<?php echo $var2; ?>'>
			</div>
			<?php include ('button.php');?>
		</div>
	</form>
	<h1 style="margin-top:20px">Pesquisa:</h1>
	<form method="post">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<button type="button" class="btn btn-outline-secondary"><?php echo $variablechange;?></button>
				<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="sr-only">seta</span>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="?procura_nome">Nome</a>
					<a class="dropdown-item" href="?procura_sobrenome">Sobrenome</a>
					<a class="dropdown-item" href="?procura_idade">Idade</a>
					
				</div>
			</div>
			<input type="text" class="form-control" name="termo_pesquisa" id="termo_pesquisa" aria-label="Text input with segmented dropdown button">
			<input type="submit"class="btn btn-danger px-5 "  value="Pesquisar" name="form_pesquisa">
		</div>
	</form>
	<h1> tabela </h1>
	<?php 
	include ('lista_pessoas.php');?>
</body>
</html>
