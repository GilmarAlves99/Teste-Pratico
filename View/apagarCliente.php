<?php
require_once '../Controller/UsuarioController.php';
$id = $_GET['id'];

$excluir= UsuarioController::excluirUsuarioEmail($id);

if($excluir>0){
   header("location: pagina.php");
}else{
   echo "Erro ao excluir Cliente";
}


?>