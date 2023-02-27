
        
        <?php
            include_once 'conectar.php';

    //PARTE 1 - Atributos;

            class alunos
            {
                private $mat;
                private $nome;
                private $end;
                private $cid;
                private $cod;
                private $conn;

    // PARTE 2 - Get e Set;

                public function getMat()
                {
                    return $this->mat;
                }

                public function setMat($matt)
                {
                    $this->mat = $matt;
                }


                public function getNome()
                {
                    return $this->nome;
                }

                public function setNome($name)
                {
                    $this->nome = $name;
                }


                public function getEnd()
                {
                    return $this->end;
                }

                public function setEnd($endd)
                {
                    $this->end = $endd;
                }


                public function getCid()
                {
                    return $this->cid;
                }

                public function setCid($cidd)
                {
                    $this->cid = $cidd;
                }


                public function getCod()
                {
                    return $this->cod;
                }

                public function setCod($codd)
                {
                    $this->cod = $codd;
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
                        $sql = $this->conn->query("select * from alunos order by nome");
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
                        $sql = $this->conn->prepare("insert into alunos values (?, ?, ?, ?, ?)");
                        @$sql->bindParam(1, $this->getMat(), PDO::PARAM_STR);
                        @$sql->bindParam(2, $this->getNome(), PDO::PARAM_STR);
                        @$sql->bindParam(3, $this->getEnd(), PDO::PARAM_STR);
                        @$sql->bindParam(4, $this->getCid(), PDO::PARAM_STR);
                        @$sql->bindParam(5, $this->getCod(), PDO::PARAM_STR);

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
                        $sql = $this->conn->prepare("delete from alunos where matricula = ?"); // Informei o ? (parâmentro)
                        @$sql-> bindParam(1, $this->getMat(), PDO::PARAM_STR); // Incluí essa linha para definir o parâmetro
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
                        $sql = $this->conn->prepare("select * from alunos where nome like ?"); // Informei o ?
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
                        $this-> conn = new Conectar();
                        $sql = $this->conn->prepare("select * from alunos where matricula = ?"); // Informei o ? (parâmetro)
                        @$sql-> bindParam(1, $this->getMat(), PDO::PARAM_STR); // Incluí essa linha para definir o parâmetro
                        $sql->execute();
                        return $sql->fetchAll();
                        $this->conn = null;
                    }

                    catch(PDOExcepetion $exc)
                    {
                        echo "Erro ao alterar." . $exc->getMessage();
                    }
                }

                function alterar2()
                {
                    try
                    {
                        $this -> conn = new Conectar();
                        $sql = $this->conn->prepare("update alunos set nome = ?, endereco = ?, cidade = ?, codcurso = ? where matricula = ?");
                        @$sql -> bindParam(1, $this -> getNome(), PDO::PARAM_STR);
                        @$sql -> bindParam(2, $this -> getEnd(), PDO::PARAM_STR);
                        @$sql -> bindParam(3, $this -> getCid(), PDO::PARAM_STR);
                        @$sql -> bindParam(4, $this -> getCod(), PDO::PARAM_STR);
                        @$sql -> bindParam(5, $this -> getMat(), PDO::PARAM_STR);

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
    // FIM DA CLASSE ALUNOS.    

            }
        ?>
