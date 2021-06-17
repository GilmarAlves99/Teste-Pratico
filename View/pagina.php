<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H2> Cadastrar cliente</H2>

    <hr>
    <?php
    require_once '../Controller/UsuarioController.php';
    if (isset($_POST['nome'])) {
        if ($_POST['email'] != "") {
            $inserir = UsuarioController::inserirclientes($_POST);
        } else {
            echo "Email Obrigatorio";
        }
    }

    ?>
    <form action="" method="POST">
        <label for="">Nome</label>
        <input name="nome" type="text">
        <label for="">Data Nascimento</label>
        <input type="date" name="dataNascimento">
        <label for="">E-mail</label>
        <input type="text" name="email">
        <input type="submit" value="cadastrar">
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

        $listaCliente = UsuarioController::listarclientes();

        foreach ($listaCliente as $cliente) {
        ?>
            <tr>
                <td><?=
                    $cliente['nome'];
                    ?></td>
                <td><?=



                    // pegando a data de nascimento do usuario e mostrando na tela (dia, mes e ano)
                    $dataNascimento = (new DateTime($cliente['dataNascimento']))->format('d/m/Y');

                    ?></td>
                <td><?=
                    $cliente['email'];
                    ?></td>
                <td><a href="editarCliente.php?email=<?= $cliente['email']; ?>"><img src="edite.png" style="width: 40px;height:40px"></a></td>
                <td><a href="apagarCliente.php?email=<?= $cliente['email']; ?>"><img src="lixeira.png" style="width: 40px;height:40px"></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>