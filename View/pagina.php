<?php

require "verifica.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 
<a href="sair.php" style="position:relative;text-align: right;">SAIR</a>

<H2> Cadastrar cliente</H2>
    <hr>
    <?php
    require_once '../Controller/UsuarioController.php';
    if (isset($_POST["btn"])) {
        // limpando os espaços nas informações enviadas
       $email=  trim($_POST['email']);
        $nome=  trim($_POST['nome']);
// ira verificar se os campos estão com caracteres 'vazios'
//verifica se o campo é vazio.
        if (empty($email) || empty($nome)) {
             // se caso estiver vazio
             echo "CAMPOS NOME E E-MAIL SÃO OBRIGATÓRIOS";
          
        } else {
         // se nao ira inserir o clinte no banco
         $inserir = UsuarioController::inserirclientes($_POST);
        }
    }

    ?>
    <form action="" method="POST">
        <label for="">Nome</label>
        <input name="nome" type="text" required>
        <label for="">Data Nascimento</label>
        <input type="date" name="dataNascimento">
        <label for="">E-mail</label>
        <input type="text" name="email" required>
        <button type="submit" name="btn" >cadastrar</button>
    </form>
    <H2> Lista de clientes</H2>
    <table style="width:100%;text-align:center;background-color:lightsteelblue">
        <tr>
            <td>Nome</td>
            <td>Data de Nascimento</td>
            <td>E-mail</td>
            <td>Editar</td>
            <td>Apagar</td>
        </tr>


        <?php
//iremos pegar a function no controller
        $listaCliente = UsuarioController::listarclientes();
 // iremos fazer a listagens dos clientes cadastrados
        foreach ($listaCliente as $cliente) {
        ?>
            <tr>
                <td><?= // irforma o nome do cliente
                    $cliente['nome'];
                    ?></td>
                <td><?php
// se a data de nascimento nao for cadastrada irei informar na pagina
                    if ($cliente['dataNascimento'] == "0000-00-00" ){
                        echo "Sem Data de Nascimento";
                    } else { // pegando a data de nascimento do usuario e mostrando na tela (dia, mes e ano)
                        $dataNascimento = (new DateTime($cliente['dataNascimento']))->format('d/m/Y');
                       
                        echo $dataNascimento ;
                    }

                    ?></td>
                <td><?=
                // irforma o email do cliente
                    $cliente['email'];
                    ?></td>
                <td><a href="editarCliente.php?id=<?= $cliente['id']; ?>"><img src="edite.png" style="width: 40px;height:40px"></a></td>
                <td><a href="apagarCliente.php?id=<?= $cliente['id']; ?>"><img src="lixeira.png" style="width: 40px;height:40px"></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>