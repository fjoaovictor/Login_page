<?php



include('conexao.php');

if(empty($_POST['username']) || empty($_POST['password'])){
    header('Location: page.html');
    exit();
}

$username = mysqli_real_escape_string($conexao, $_POST['username']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);


$query = "insert into usuario (usuario, senha) values('{$username}', senha=md5('{$password}')";

$result = mysqli_query($conexao, $query);

