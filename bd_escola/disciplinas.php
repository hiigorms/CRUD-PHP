
        <?php
            include_once 'conectar.php';

    //PARTE 1 - Atributos;

            class disciplinas
            {
                private $codC;
                private $nome;
                private $conn;

    // PARTE 2 - Get e Set;

                public function getCodC()
                {
                    return $this->codC;
                }

                public function setCodC($codd)
                {
                    $this->codC = $codd;
                }


                public function getNome()
                {
                    return $this->nome;
                }

                public function setNome($name)
                {
                    $this->nome = $name;
                }


                public function getConn()
                {
                    return $this->conn;
                }

                public function setConn($con)
                {
                    $this->conn = $con;
                }

    // PARTE 3 - Métodos;

                function listar()
                {   
                    try
                    {
                        $this->conn  = new Conectar();
                        $sql = $this->conn->query("select * from disciplinas order by NomeDisciplina");
                        $sql->execute();
                        return $sql->fetchAll();
                        $this->conn = null;
                    }
                    catch(PDOException $exc)
                    {
                        echo "Erro ao executar consulta." . $exc->getMessage();
                    }
                }

                function salvar()
                {
                    try
                    {
                        $this-> conn = new Conectar();
                        $sql = $this->conn->prepare("insert into disciplinas values (?, ?)");
                        @$sql->bindParam(1, $this->getCodC(), PDO::PARAM_STR);
                        @$sql->bindParam(2, $this->getNome(), PDO::PARAM_STR);

                        if($sql->execute() == 1)
                        {
                            return "Registro salvo com sucesso!";
                        }
                        $this->conn - null;                        
                    }

                    catch(PDOException $exc)
                    {
                        echo "Erro ao salvar o registro." . $exc->getMessage();
                    }
                }
                
                function exclusao()
                {
                    try
                    {
                        $this->conn = new Conectar();
                        $sql = $this->conn->prepare("delete from disciplinas where CodDisciplina = ?"); // Informei o ? (parâmentro)
                        @$sql-> bindParam(1, $this->getCodC(), PDO::PARAM_STR); // Incluí essa linha para definir o parâmetro
                        if($sql->execute() == 1)
                        {
                            return "Excluído com sucesso!";
                        }
                        else
                        {
                            return "Erro ao excluir!";
                        }

                        $this->conn = null;
                    }    
                    catch(PDOException $exc)
                    {
                        echo "Erro ao excluir." . $exc->getMessage();
                    }
                }
                
                function consultar()
                {
                    try
                    {
                        $this->conn = new Conectar();
                        $sql = $this->conn->prepare("select * from disciplinas where NomeDisciplina like ?"); // Informei o ?
                        @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR); // Incluí essa linha para definir o parâmetro
                        // @$sql->bindParam(1, $this->getNome()."%", PDO::PARAM_STR);
                        $sql->execute();
                        return $sql->fetchAll();
                        $this->conn = null;
                    }
                    catch(PDOException $exc)
                    {
                        echo "Erro ao executar a consulta." . $exc->getMessage();
                    }
                }

                function alterar()
                {
                    try
                    {
                        $this -> conn = new Conectar();
                        $sql = $this -> conn -> prepare("select * from disciplinas where CodDisciplina = ?"); // informei o ? (parametro)
                        @$sql -> bindParam(1, $this -> getCodC(), PDO::PARAM_STR); // definição do parametro
                        $sql -> execute();
                        return $sql -> fetchAll();
                        $this -> conn = null;

                    }
                    catch(PDOExcepion $exc)
                    {
                        echo "Erro ao Alterar." . $exc -> getMessage();
                    }
                }

                function alterar2()
                {
                    try
                    {
                        $this -> conn = new Conectar();
                        $sql = $this -> conn -> prepare("update disciplinas set NomeDisciplina = ? where CodDisciplina = ?");
                        @$sql -> bindParam(1, $this -> getNome(), PDO::PARAM_STR);
                        @$sql -> bindParam(2, $this -> getCodC(), PDO::PARAM_STR);

                        if($sql -> execute() == 1)
                        {
                            return "Registro alterado com sucesso!";
                        }
                        $this -> conn = null;

                    }
                    
                    catch(PDOExcepion $exc)
                    {
                        echo "Erro ao salvar o registro." . $exc -> getMessage();
                    }
                }

    // FIM DA CLASSE DISCIPLINAS.    

            }
        ?>
