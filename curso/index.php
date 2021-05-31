<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">
		#tamanho {
			width: 350px;
			-webkit-box-shadow: 10px 10px 28px -11px rgba(145,142,145,1);
			-moz-box-shadow: 10px 10px 28px -11px rgba(145,142,145,1);
			box-shadow: 10px 10px 28px -11px rgba(145,142,145,1);
		}
	</style>


</head>
<body>


<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
	<div style="padding: 10px">

	<center>	
	<img src="imagem/cadeado.png" width="125px" height="125px">
	</center>
	<form>
		<div class="form-group">
			<label>Usário</label>
			<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
		</div>
	</form>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-sm btn-success">Entrar</button>
		</div>

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>