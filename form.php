<?php

$destino= "belacorsbo@gmail.com";
$assunto= "Contato site";
$nome= $_REQUEST['Nome'];
$email= $_REQUEST['Email'];
$mensagem= $_REQUEST['Mensagem'];

	$corpo ="<strong> Mensagem de contato </strong> <br> <br>";
	$corpo .="<strong> Nome: </strong> $nome";
	
	$corpo .="<strong> Mensagem: </strong> $mensagem";
	$corpo .="<strong> Email: </strong> $email";
	$header.= "Content-Type: text/html; charset= utf-8\n";
	$header="From: $email	Reply-to: $email\n";
	

@mail($destino,$assunto,$corpo,$header);

header("location:index.php?envio=enviado");



?>