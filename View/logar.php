<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php
    if (isset($_POST['email'])) {
        require_once '../Controller/UsuarioController.php';
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = UsuarioController::login($email, $senha);
        if ($usuario > 0) {
           header('location:pagina.php');
        } else {
            echo "naodd existe";
        }
      
    }
    ?>
    <form action="" method="POST">
        <p>Login</p>

        <label>Usuário:</label>
        <input type="email" name="email" placeholder="email@.com" />

        <label>Senha:</label>
        <input type="password" name="senha" placeholder="senha com 8 digitos" />
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>

</script>



</html>