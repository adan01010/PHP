<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
  <style type="text/css">
     #botao{
       background-color: #FF1168;
       color: #ffffff;
     }
  </style>

<body>


<div class="container" style="margin-top: 40px; width: 500px">
  
<div style="text-align: right;">
  <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</div>

  <h4>Cadastro de Categoria</h4>
  <form action="_inserir_categoria.php" method="post">
    <label>Categoria</label>
     <div class="form-group">
      <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria" autocomplete="off">
    </div>
    <div style="text-align: right;">
      <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
    </div>

    
  </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>