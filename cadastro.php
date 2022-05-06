<?php

include('conexao.php');

if(empty($_POST['username-cad']) || empty($_POST['password-cad']) || empty($_POST['email-cad'])){
    header('Location: index.html');
    exit();
}

$username = mysqli_real_escape_string($conexao, $_POST['username-cad']);
$password = mysqli_real_escape_string($conexao, $_POST['password-cad']);
$email = mysqli_real_escape_string($conexao, $_POST['email-cad']);
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf-cad']);
$tel = mysqli_real_escape_string($conexao, $_POST['tel-cad']);


$query = "insert into users (usuario, senha, email, cpf, telefone) values ('{$username}', md5('{$password}'), '{$email}', '{$cpf}', '{$tel}')";

$result = mysqli_query($conexao, $query);



if($result){
    
    ?> 
        <script>
            alert("Usuario cadastrado com sucesso")
            window.location="index.html"
        </script>
    <?php

    
}
else{
    echo 'Falha no cadastro';
}

