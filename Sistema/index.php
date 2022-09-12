<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="post" action="cad.php">
		<h1>Cadrastrar Funcionários:</h1>
		<p>Identificador: <input type="number" name="id"></p>
	    <p>Nome: <input type="text" name="nome"></p>
	    <p>Cargo: <input type="text" name="cargo"></p>
	    <p>Salário: <input type="text" name="salario"></p>
		<p>Qtd Dependentes: <input type="number" name="depen"></p>

		<center><button type="submit" > CADASTRAR </button></center>

	</form>
</body>
</html>