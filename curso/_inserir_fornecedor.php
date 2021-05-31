<?php

include 'conexao.php';
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `fornecedor` (nome_forn) VALUES ('$fornecedor')";
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