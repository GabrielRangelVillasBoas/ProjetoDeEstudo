<?php
include('conectar.php');
session_start();

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('location: site.php');
    exit();
}else{ 
    header('location: index.php');
    exit();
}

