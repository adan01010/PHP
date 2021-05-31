<?php

include 'conexao.php';

$id = $_POST['id'];
$nomecategoria = $_POST['nomecategoria'];



$sql = "UPDATE categoria SET nome_categoria='$nomecategoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top:20px;">
	<center>
		<h3>Atualizado com sucesso!!!</h3>
	</center>
			<div style="margin-top: 20px">
			<center>
				<a href="listar_categoria.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
				</div>
			</center>
	
</div>