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
        $dados = $stmt->rowCount();
        return $dados;
    }

    // aqui iremos lista todos os clientes
    public function listarclientes()
    {
        $conexao = ConexaoPDO::getInstance();
        $query = "SELECT * FROM clientes ";
        $stmt = $conexao->prepare($query);

        $stmt->execute();
        $dados = $stmt->fetchAll();
        return $dados;
    }

    public function inserirClientes($dados)

    {

        $conexao = ConexaoPDO::getInstance();
        $insert = "INSERT clientes (nome,dataNascimento,email) values (:nome,:dataNascimento,:email)";
        $stmt = $conexao->prepare($insert);

        $stmt->bindValue('nome', $dados['nome'], PDO::PARAM_STR);
        $stmt->bindValue('dataNascimento', $dados['dataNascimento']);
        $stmt->bindValue('email', $dados['email'], PDO::PARAM_STR);


        $stmt->execute();
        $stmt->rowCount();
    }


    // aqui iremos selecionar o cliente pelo id
    public function selecionacliente($id)
    {
        $conexao = ConexaoPDO::getInstance();
        $query = "SELECT * FROM clientes where id=:id ";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $dados = $stmt->fetchObject();
        return $dados;
    }

  // aqui iremos lista todos os clientes
  public function editarCliente($dados)
  {
    $conexao = ConexaoPDO::getInstance();
  
    $insert = "UPDATE clientes SET nome=:nome,dataNascimento=:dataNascimento,email=:email WHERE id=:id";
    $stmt = $conexao->prepare($insert);
    $stmt->bindValue("nome", $dados['nome'], PDO::PARAM_STR);
    $stmt->bindValue("dataNascimento", $dados['dataNascimento'], PDO::PARAM_STR);
    $stmt->bindValue("email", $dados['email'], PDO::PARAM_STR);
    $stmt->bindValue("id", $dados['id'], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->rowCount();
  }

  
  public function excluirUsuarioEmail($id)
  {
      
      $conexao = ConexaoPDO::getInstance();

      $consulta = "DELETE FROM clientes WHERE id=:id";

      $stmt = $conexao->prepare($consulta);
      $stmt->bindValue("id", $id, PDO::PARAM_STMT);
      $stmt->execute();

      // irá retornar quantos registros foram afetados
      return $stmt->rowCount();
     
  }

}
