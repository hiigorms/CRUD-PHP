<?php
include_once 'conectar.php';

class Usuario
{
    private $Login;
    private $Senha;
    private $conn;

    public function getLogin()
    {
        return $this->Login;
    }
    public function setLogin($Loginn)
    {
        $this->Login = $Loginn;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function logar()
    {
        try
        {
            $this-> conn = New Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuario WHERE Login LIKE ? and Senha = ?");
            @$sql-> bindParam(1, $this->getLogin(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "<span class='text-green-200'>Erro ao executar consulta.</span>". $exc->getMessage();    
        }
    }
}