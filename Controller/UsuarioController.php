<?php

require_once '../Model/UsuarioModel.php';
class UsuarioController
{


    public static function login($email, $senha)
    {
        $mLoginUsuario = new UsuarioModel();


        $usuario =  $mLoginUsuario->login($email, $senha);

        return $usuario;
    }

    
    public static function listarclientes()
    {
        $mClientes = new UsuarioModel();


        $ListaClientes =  $mClientes->listarclientes();

        return $ListaClientes;
    }
}

?>