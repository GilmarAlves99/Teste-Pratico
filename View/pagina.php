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
    <form action="" method="_POST">
<label for="">Nome</label>
<input name="nome" type="text">
<label for="">Data Nascimento</label>
<input type="date" name="data">
<label for="">E-mail</label>
<input type="text" name="email">
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
    require_once '../Controller/UsuarioController.php';
$listaCliente= UsuarioController::listarclientes();

foreach ($listaCliente as $cliente)
?>
<tr>
    <td><?=
$cliente['nome']
?></td>
    <td><?=
$cliente['dataNascimento']
?></td>
    <td><?=
$cliente['email']
?></td>
    <td>up</td>
    <td>xx</td>
</tr>
</table>
</body>
</html>