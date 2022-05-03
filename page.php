<?php
include ('conexao.php');

$consulta = 'select * from usuario';
$con = $conexao->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
</head>

<body>
    <table>
        
        <tr>
            <td>Nome</td>
            <td>Senha</td>
        </tr>
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['usuario']; ?></td>
          <td><?php echo $dado['senha']; ?></td> 
        </tr>
        <?php } ?>       
    </table>
</body>

</html>