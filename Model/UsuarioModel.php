<?php
require_once '../ConexaoPDO/ConexaoPDO.php';
class UsuarioModel
{

// aqui iremos verificar se existe o login
    public function login($email, $senha)
    {
        $conexao = ConexaoPDO::getInstance();
        $query = "SELECT * FROM adm WHERE email =:email AND senha =:senha ";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue("email", $email);
        $stmt->bindValue("senha", $senha);
        $stmt->execute();
        $dados= $stmt->rowCount();
        return $dados;
      
      
    }

    // aqui iremos lista todos os clientes
    public function listarclientes ()
    {
        $conexao = ConexaoPDO::getInstance();
        $query = "SELECT * FROM clientes ";
        $stmt = $conexao->prepare($query);
     
        $stmt->execute();
        $dados= $stmt->fetchAll();
        return $dados;
      
      
    }
    /*
    public function cadastrarUsuario($dados, $novo_nome)

    {

        $conexao = ConexaoPDO::getInstance();
        $insert = "INSERT usuario (nome,senha,email,celular,dataNascimento,tipousuario,imagem) values (:nome,:senha,:email,:celular,:dataNascimento,:tipousuario,:imagem)";
        $stmt = $conexao->prepare($insert);

        $stmt->bindValue('nome', $dados['nome'], PDO::PARAM_STR);
        $stmt->bindValue('senha', $dados['senha'], PDO::PARAM_STR);
        $stmt->bindValue('email', $dados['email'], PDO::PARAM_STR);
        $stmt->bindValue('celular', $dados['celular'], PDO::PARAM_STR);
        $stmt->bindValue('dataNascimento', $dados['dataNascimento'], PDO::PARAM_STR);
        $stmt->bindValue('tipousuario', $dados['tipousuario'], PDO::PARAM_STR);
        $stmt->bindValue('imagem', $novo_nome, PDO::PARAM_STR);
        $stmt->execute();
    }*/
}
