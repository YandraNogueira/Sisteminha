<?php 
$filename = $_GET['id'];
$valorArq = file("Cadastro\ $filename");
$title = trim($filename, ".txt");


for ($i=0; $i < count($valorArq); $i++) { 
	 echo $valorArq[$i];
}


 ?>