
        <?php
            include_once 'conectar.php';

    //PARTE 1 - Atributos;

            class cursos
            {
                private $codC;
                private $nome;
                private $coddi1;
                private $coddisc2;
                private $coddisc3;
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


                public function getCodd1()
                {
                    return $this->codd1;
                }

                public function setCodd1($coddi1)
                {
                    $this->codd1 = $coddi1;
                }


                public function getCodd2()
                {
                    return $this->codd2;
                }

                public function setCodd2($coddi2)
                {
                    $this->codd2 = $coddi2;
                }


                public function getCodd3()
                {
                    return $this->codd3;
                }

                public function setCodd3($coddi3)
                {
                    $this->codd3 = $coddi3;
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
                        $sql = $this->conn->query("select * from cursos order by nome");
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
                        $sql = $this->conn->prepare("insert into cursos values (?, ?, ?, ?, ?)");
                        @$sql->bindParam(1, $this->getCodC(), PDO::PARAM_STR);
                        @$sql->bindParam(2, $this->getNome(), PDO::PARAM_STR);
                        @$sql->bindParam(3, $this->getCodd1(), PDO::PARAM_STR);
                        @$sql->bindParam(4, $this->getCodd2(), PDO::PARAM_STR);
                        @$sql->bindParam(5, $this->getCodd3(), PDO::PARAM_STR);

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
                        $sql = $this->conn->prepare("delete from cursos where codcurso = ?"); // Informei o ? (parâmentro)
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
                        $sql = $this->conn->prepare("select * from cursos where nome like ?"); // Informei o ?
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
                        $sql = $this -> conn -> prepare("select * from cursos where codcurso = ?"); // informei o ? (parametro)
                        @$sql -> bindParam(1, $this -> getCodc(), PDO::PARAM_STR); // definição do parametro
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
                        $sql = $this -> conn -> prepare("update cursos set nome = ?, coddisc1 = ?, coddisc2 = ?, coddisc3 = ? where codcurso = ?");
                        @$sql -> bindParam(1, $this -> getNome(), PDO::PARAM_STR);
                        @$sql -> bindParam(2, $this -> getCodd1(), PDO::PARAM_STR);
                        @$sql -> bindParam(3, $this -> getCodd2(), PDO::PARAM_STR);
                        @$sql -> bindParam(4, $this -> getCodd3(), PDO::PARAM_STR);
                        @$sql -> bindParam(5, $this -> getCodc(), PDO::PARAM_STR);
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
                
    // FIM DA CLASSE CURSOS.    

            }
        ?>
