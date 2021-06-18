<?php

require "verifica.php";


require_once '../Controller/UsuarioController.php';

   $editar=UsuarioController::editarcliente($_POST);

   if($editar>0){
       echo "Cliente Editado com sucesso";
       }else{
        echo "Erro ao editar Cliente ";
       }
       

?>
<a href="pagina.php">Visualizar</a>