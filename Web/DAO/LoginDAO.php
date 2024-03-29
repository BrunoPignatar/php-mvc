<?php

namespace Web\DAO;

use Web\Model\LoginModel;
use \PDO;

class LoginDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();       
    }
   
    public function selectByEmailAndSenha($email, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("Web\Model\LoginModel"); 
    }

    function insert(LoginModel $model) 
    {
           
        $sql = "INSERT INTO usuario 
                (nome, email, senha) 
                VALUES (?, ?, sha1(?))";
        

        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);

        
        $stmt->execute();      
    }

    public function update(LoginModel $model)
    {
        $sql = "UPDATE usuario SET nome=?, email=?, senha=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(8, $model->id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {

        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("Web\Model\LoginModel"); 
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        
        $stmt->execute();
    }

    
}