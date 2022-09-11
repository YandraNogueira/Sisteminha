<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar </title>
	<style type="text/css">
		button{
			border-radius: 4px;
			border: 2px solid black;
			height: 30px;
			width: 100px;
			font-family: serif;
			font-size: 18px;
			background-color: lightcyan;

		}
	</style>
</head>
<body>
	<form method="post" action="cad.php">
		<h1>Cadrastrar Funcionários</h1>
		<p>Identificador: <input type="number" name="id"></p>
	    <p>Nome: <input type="text" name="nome"></p>
	    <p>Cargo: <input type="text" name="cargo"></p>
	    <p>Salário: <input type="text" name="salario"></p>
		<p>Qtd Dependentes: <input type="number" name="depen"></p>

		<button type="submit"> Cadastrar </button>

	</form>
</body>
</html>