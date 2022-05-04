<?php
include ('conexao.php');

$consulta = 'select * from users';
$con = $conexao->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="page.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
</head>

<body>

<div class="container-header">
    LISTA DE USÚARIOS CADASTRADOS
</div>
    <table>
        
        <tr class="colunas">
            <td>Nome</td>
            <td>Email</td>
        </tr>
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['usuario']; ?></td>
          <td><?php echo $dado['email']; ?></td> 
        </tr>
        <?php } ?>       
    </table>
    <form action="index.html">
       <input type="submit" class="btn-voltar" value="Voltar">
    </form>
</body>

</html>

