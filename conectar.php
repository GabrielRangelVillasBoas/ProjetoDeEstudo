<?php 

    $servidor = 'localhost';
    $database = 'loguin';
    $usuario = 'root';
    $senha = '';
    
   	
	$conexao = mysqli_connect($servidor,$usuario,$senha,$database) or die("Não foi possivel conectar");
    
?>