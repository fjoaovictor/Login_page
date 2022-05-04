<?php



include('conexao.php');

if(empty($_POST['username']) || empty($_POST['password'])){
    header('Location: index.html');
    exit();
}

$username = mysqli_real_escape_string($conexao, $_POST['username']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);


$query = "select usuario from users where usuario = '{$username}' and senha=md5('{$password}')";

$result = mysqli_query($conexao, $query);

$row =  mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $username;
    header('Location: page.php');
    
}
else{
    
    header('Location: index.html');
}
