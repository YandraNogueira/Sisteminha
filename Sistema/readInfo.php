<link rel="stylesheet" type="text/css" href="estilo.css">
<?php 
$filename = $_GET['id'];
$valorArq = file("Cadastro\ $filename");
$ttl= trim($filename, ".txt");


for ($i=0; $i < count($valorArq); $i++) { 
	 echo $valorArq[$i];
}


 ?>