<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Curso Básico</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

	<style type="text/css">
		
		#tamanhoContainer{
			width: 500px;
		}

		#botao{
			background-color: #FF1168;
			color: #ffffff;
		}
	</style>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
 <h4>Formulário de Cadastro</h4>
	<form action="_inserir_produto.php" method="POST" style="margin-top: 20px;">
		<div class="form-group">
			<label>Nº Produto</label>
			<input type="number" name="nroproduto" class="form-control" placeholder="Insira o número do produto" autocomplete="off" required>
		</div>
		
		<div class="form-group">
			<label>Nome de Produto</label>
			<input type="text" name="nomeproduto" class="form-control"  placeholder="Insira o nome do produto">
		</div>
		
		<div class="form-group">
			<label>Categoria</label>
			    <select class="form-control" name="categoria">
			      <?php
			      	include 'conexao.php';
			      	$sql = "SELECT * FROM categoria ORDER BY nome_categoria ASC";
			      	$buscar = mysqli_query($conexao, $sql);

			      	while ($array = mysqli_fetch_array($buscar)){
			      		    
			      		     $id_categoria = $array['id_categoria'];
			      			 $nome_categoria = $array['nome_categoria'];
			      	?>

			      	<option><?php echo $nome_categoria ?></option>
			  	  <?php } ?>

			</select>
	  	</div>
	  	
	  	<div class="form-group">
			<label>Quantidade</label>
			<input type="number" class="form-control" name="quantidade" placeholder="Insira quantidade do produto">
		</div>

		<div class="form-group">
			<label>Fornecedor</label>
			    <select class="form-control" name="fornecedor">
			    	<?php
			    		include 'conexao.php';
			    		$sql2 = "SELECT * FROM  fornecedor";
			    		$buscar2 = mysqli_query($conexao, $sql2);

			    		while ($array2 = mysqli_fetch_array($buscar2)) {
			    			$id_fornecedor = $array2['id_forn'];
			    			$nome_fornecedor = $array2['nome_forn'];

			    	?>

			    	<option><?php echo $nome_fornecedor; ?></option>
			    <?php } ?>
			    </select>
	  	</div>
	  	<div style="text-align: right;">
	  	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
	  	<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>

	</form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>