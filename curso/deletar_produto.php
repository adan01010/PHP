<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao, $sql);
	
?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top:20px;">
	<center>
		<h3>Deletado com sucesso!!!</h3>
	</center>
			<div style="margin-top: 20px">
			<center>
				<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
			</div>
			</center>
	
</div>