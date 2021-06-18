<?php

require "verifica.php";




require_once '../Controller/UsuarioController.php';
$id = $_GET['id'];
$seleciona = UsuarioController::selecionacliente($id);
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
   
    <input type="email" name="email" value="<?= $seleciona->email;?>" >
    <input type="hidden" name="id" value="<?= $seleciona->id;?>"  >
    <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>