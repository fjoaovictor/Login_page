<?php

include('conexao.php');

if(empty($_POST['username-cad']) || empty($_POST['password-cad']) || empty($_POST['email-cad'])){
    header('Location: index.html');
    exit();
}

$username = mysqli_real_escape_string($conexao, $_POST['username-cad']);
$password = mysqli_real_escape_string($conexao, $_POST['password-cad']);
$email = mysqli_real_escape_string($conexao, $_POST['email-cad']);


$query = "insert into users (usuario, senha, email) values ('{$username}', md5('{$password}'), '{$email}')";

$result = mysqli_query($conexao, $query);



if($result){
    echo 'Usuario cadastrado com sucesso';
    header('Location: page.php');
}
else{
    echo 'Falha no cadastro';
}

