<?php 

include 'conexao.php';

$id = $_GET['id'];

?>


<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Editação e Deletação</title>
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
	<form action="_atualizar_produto.php" method="POST" style="margin-top: 20px;">
		<?php 

		$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
		$busca = mysqli_query($conexao, $sql);
		while ($array = mysqli_fetch_array($busca)){
			
			$id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

		?>


		<div class="form-group">
		<label>Nº Produto</label>
		<input type="number" name="nroproduto" class="form-control" value="<?php echo $nroproduto ?>" disabled>
		<input type="number" name="id" class="form-control" value="<?php echo $id ?>" style="display: none"> 
		</div>
		
		<div class="form-group">
			<label>Nome de Produto</label>
			<input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto?>">
		</div>
		
		<div class="form-group">
			<label>Categoria</label>
			    <select class="form-control" name="categoria">
			      <option>Sofware</option>
			      <option>Hadware</option>
			      <option>Celulares</option>
			</select>
	  	</div>
	  	
	  	<div class="form-group">
			<label>Quantidade</label>
			<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
		</div>

		<div class="form-group">
			<label>Fornecedor</label>
			    <select class="form-control" name="fornecedor">
			      <option>Fornecedor A</option>
			      <option>Fornecedor B</option>
			      <option>Fornecedor C</option>
			</select>
	  	</div>
	  	<div style="text-align: right;">
	  	<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
	  <?php } ?>
	</form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>