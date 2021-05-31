<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Listagem de Categoria</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/e89728990e.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container" style="margin-top:40px; width: 500px">
    
    <div style="text-align: right;">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

	<h3>Lista de Categoria</h3>

<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
   
  
      <?php
        include 'conexao.php';
          $sql = "SELECT * FROM `categoria`";
          $busca = mysqli_query($conexao, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            
            $id_categoria = $array['id_categoria'];
            $nomecategoria = $array['nome_categoria']
            ?>
    <tr>   
       
       <td><?php echo $nomecategoria ?></td>
       
       <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>

     <?php } ?>


    </tr>
</table>
  

</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>	
</body>
</html>