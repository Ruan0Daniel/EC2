<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Cadastrar Filme</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>Ano: </label>
			<input type="text" name="ano" placeholder="Digite o ano de lançamento"><br><br>
			
			<label>Duração: </label>
			<input type="text" name="tempo" placeholder="Digite o tempo de duração"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>