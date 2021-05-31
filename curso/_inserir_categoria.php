<?php

include 'conexao.php';
$categoria = $_POST['categoria'];

$sql = "INSERT INTO `categoria` (categoria) VALUES ('$categoria')";
$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top:20px;">
	<center>
		<h3>Adicionado com sucesso!!!</h3>
	</center>
			<div style="margin-top: 20px">
			<center>
				<a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
				</div>
			</center>
	
</div>