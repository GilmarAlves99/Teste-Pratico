<?php
require '../ConexaoPDO/ConexaoPDO.php';
$conexao = ConexaoPDO::getInstance();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['login']))
    {
        $conexao = ConexaoPDO::getInstance();
        $query = "SELECT * FROM adm WHERE email =:email AND senha =:senha ";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue("email", $email);
        $stmt->bindValue("senha", $password);
        $stmt->execute();
        $dados = $stmt->rowCount();
      
        
        if($dados != 0)
            echo "success";
        else
            echo "error";
    }
    
    
?>

