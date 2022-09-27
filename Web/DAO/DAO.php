<?php

namespace Web\DAO;
use \PDO;
use \PDOException;

abstract class DAO extends PDO {

    protected $conexao;

    public function __construct() 
    {
        try {
            $dsn = "mysql:host=localhost:3307" . $_ENV['db']['host'] . ";dbname=db_sistema" . $_ENV['db']['dbname'];

            $this->conexao = new PDO(
                $dsn, $_ENV['db']['user'], 
                $_ENV['db']['pass']
            );
        } catch (PDOException $err) {
            echo "Ocorreu um erro inesperado ao tentar se conectar ao MySQL.";
        }
    }
}