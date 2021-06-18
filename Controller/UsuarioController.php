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

    public static function inserirclientes($dados)
    {
        $mClientes = new UsuarioModel();


        $InserirClientes=  $mClientes->inserirclientes($dados);

        return $InserirClientes;
    }
  
    public static function listarclientes()
    {
        $mClientes = new UsuarioModel();


        $ListaClientes =  $mClientes->listarclientes();

        return $ListaClientes;
    }
    
    public static function selecionacliente($id)
    {
        $mClientes = new UsuarioModel();


        $SelecionarCliente =  $mClientes->selecionacliente($id);

        return $SelecionarCliente;
    }

    public static function editarcliente($id)
    {
        $mClientes = new UsuarioModel();


        $EditarCliente =  $mClientes->editarcliente($id);

        return  $EditarCliente ;
    }

    public static function excluirUsuarioEmail($id)
    {
        $mClientes = new UsuarioModel();


        $ExcluirCliente =  $mClientes->excluirUsuarioEmail($id);

        return  $ExcluirCliente ;
    }
}

?>