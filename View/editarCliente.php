<?php

require_once '../Controller/UsuarioController.php';
$email = $_GET['email'];
$seleciona = UsuarioController::selecionacliente($email);
//var_dump($seleciona);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>

    <form method="POST" action="editarClienteResposta.php">
  
    <input type="text" name="nome" value="<?=$seleciona->nome;?>" >
    <input type="text" name="dataNascimento" value="<?= $seleciona->dataNascimento;?>" >
   
    <input type="hidden" name="email" value="<?= $seleciona->email;?>" placeholder="dsds" >
    <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>