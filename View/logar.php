<?php
require '../ConexaoPDO/ConexaoPDO.php';
$conexao = ConexaoPDO::getInstance();


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conexao = ConexaoPDO::getInstance();
    $query = "SELECT * FROM adm WHERE email =:email AND senha =:senha ";
    $stmt = $conexao->prepare($query);
    $stmt->bindValue("email", $email);
    $stmt->bindValue("senha", $password);
    $stmt->execute();
    $dados = $stmt->rowCount();


    if ($dados > 0) {
        $dado = $stmt->fetch(); // pegando um usuario só
        // Verificador de sessão
session_start();

        $_SESSION['email'] = $dado['email'];
        $_SESSION['senha'] = $dado['senha'];
        echo "success";
        //recebe os dados
    } else {
        echo "error";
    }
}
?>
