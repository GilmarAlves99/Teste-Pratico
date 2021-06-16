<?php
$con=mysqli_connect("localhost","root","","testepraticogilmar")or die("Não pode conectar");
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['login']))
    {
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM adm WHERE email='$email' AND senha='$password'"));
        if($login != 0)
            echo "success";
        else
            echo "error";
    }
    mysqli_close($con);
?>
