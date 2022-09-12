<link rel="stylesheet" type="text/css" href="estilo.css">
<?php 
extract($_POST);
$arq = "$id.txt";
$refFile = fopen("Cadastro\ $arq",'w+');

$dado = "Identificador: $id <br> Nome do Funcionário: $nome <br> Cargo: $cargo <br> Salário: $salario <br> Qtd Dependentes: $depen";


fwrite($refFile,$dado);
fclose($refFile);

$dir = scandir('Cadastro');


for ($i=0; $i < count($dir); $i++) { 
	if ($dir[$i] == "." || $dir[$i] == "..") {
		echo "";
	}else{
		$di = trim($dir[$i]);
	    echo "<li> <a href='readInfo.php?id=$di'> $dir[$i] </a> </li>";

	}
}

		echo "<br> <a href='index.php'> <button> REPLAY </button> </a>";

 ?>