<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','root');
    define('db','login');

    $dbhost = 'localhost';
    $dbUser = 'root';
    $dbPass = 'root';
    $dbName = 'login';

    $conexao = new mysqli($dbhost, $dbUser, $dbPass, $dbName);
    


    if($conexao){
        echo 'conectado ao banco de dados';
    }
    else{
        echo 'Falha na conexão';
    }

?>


  