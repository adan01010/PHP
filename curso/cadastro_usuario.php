<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container" style="width: 400px; margin-top: 40px">
	<h4>Cadastro de Usuário</h4>
	
	<form>
		<div class="from-group">
			<label>Nome do Usuário</label>
			<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">			
		</div>
		<div class="from-group">
			<label>E-mail</label>
			<input type="email" name="emailusuario" class="form-control" required autocomplete="off" placeholder="Seu e-mail">			
		</div>
		<div class="from-group">
			<label>Senha do Usuário</label>
			<input id="textSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">			
		</div>
		<div class="from-group">
			<label>Repetir senha</label>
			<input type="password" name="nomeusuario2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">	
			<small>Precisa ser igual a senha digitada acima</small>		
		</div>
		<div class="from-group">
			<label>Nível de acesso</label>
			<select name="nivelusuario" class="form-control">
				
					<option value="1">Administrador</option>
					<option value="2">Funcionário</option>
					<option value="3">Conferente</option>
				
			</select>
		</div>
	</br>
		<div style="text-align: right">
			<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
		</div>
	</form>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script>
	function validaSenha(input) {
		if(input.value != document.getElementById('textSenha').value){
			input.setCustomValidity('Repita a senha corretamente');
			} else {
				input.setCustomValidity('');
			}
	}
</script>


</body>
</html>