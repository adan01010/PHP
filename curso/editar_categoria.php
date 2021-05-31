<?php 

include 'conexao.php';

$id = $_GET['id'];

?>


<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Editar</title>
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
 <h4>Formulário de Edição</h4>
	<form action="_atualizar_categoria.php" method="POST" style="margin-top: 20px;">
		<?php 

		$sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
		$busca = mysqli_query($conexao, $sql);
		while ($array = mysqli_fetch_array($busca)){
			
			$id_categoria = $array['id_categoria'];
            $nomecategoria = $array['nome_categoria'];
   

		?>

		
		<div class="form-group">
			<label>Nome Categoria</label>
			<input type="text" name="nomecategoria" class="form-control" value="<?php echo $nomecategoria ?>">
			<input type="text" name="id" class="form-control" value="<?php echo $id_categoria?>" style="display: none">
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