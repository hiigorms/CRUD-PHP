<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Escola</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="menu">
            <ul class="menu-list">
                <li class="menu-list-item">
                    <a href="">Alterar</a>
                        <ul class="sub-menu">
                            <li class="menu-list-item"><a href="alteraralunos.php">Alunos</a></li>
                            <li class="menu-list-item"><a href="alterarcursos.php">Cursos</a></li>
                            <li class="menu-list-item"><a href="alterardisciplinas.php">Disciplinas</a></li>
                        </ul>
                </li>
                <li class="menu-list-item">
                    <a href="">Cadastrar</a>
                        <ul class="sub-menu">
                            <li class="menu-list-item"><a href="cadastraralunos.php">Alunos</a></li>
                            <li class="menu-list-item"><a href="cadastrarcursos.php">Cursos</a></li>
                            <li class="menu-list-item"><a href="cadastrardisciplinas.php">Disciplinas</a></li>
                        </ul>
                </li>
                <li class="menu-list-item">
                    <a href="">Excluir</a>
                    <ul class="sub-menu">
                        <li class="menu-list-item"><a href="excluiralunos.php">Alunos</a></li>
                        <li class="menu-list-item"><a href="excluircursos.php">Cursos</a></li>
                        <li class="menu-list-item"><a href="excluirdisciplinas.php">Disciplinas</a></li>
                    </ul>
                </li>
                <li class="menu-list-item">
                <a href="">Pesquisar</a>
                <ul class="sub-menu">
                    <li class="menu-list-item"><a href="consultaralunos.php">Alunos</a></li>
                    <li class="menu-list-item"><a href="consultarcursos.php">Cursos</a></li>
                    <li class="menu-list-item"><a href="consultardisciplinas.php">Disciplinas</a></li>
                </ul>
            </li>
                <li class="menu-list-item">
                    <a href="">Listar</a>
                    <ul class="sub-menu">
                        <li class="menu-list-item"><a href="listaralunos.php">Alunos</a></li>
                        <li class="menu-list-item"><a href="listarcursos.php">Cursos</a></li>
                        <li class="menu-list-item"><a href="listardisciplinas.php">Disciplinas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <section>
            <div class="field">
                
                <center><font face="Century Gothic" size="6"><b>Alteração de Alunos Cadastrados</b><font size="4"></center><br>
                
                <font face="Century Gothic" size="3"><br>
        
                <fieldset>
                    <legend><b> Alterar </b></legend>
        
                    <?php
                        $matt=$_POST["txtmat"];
                        include_once 'alunos.php';
                        $p = new alunos();
                        $p -> setMat($matt);
                        $pro_bd = $p->alterar();
                    ?>
                    <br><form name = "aluno2" method = "POST" action = "">
                    <?php
                        foreach($pro_bd as $pro_mostrar)
                        {
                    ?>
        
                    <input type = "hidden" name = "txtmat" size = "5" value='<?php echo $pro_mostrar[0] ?>'>
                    <b> <?php echo "Matrícula: " . $pro_mostrar[0]; ?></b>
                    <br><br> <b> <?php echo "Nome: ";?></b>
                    <input type = "text" name = "txtnome" size = "35" value='<?php echo $pro_mostrar[1] ?>'>
                    <br><br> <b> <?php echo "Enderço: ";?></b>
                    <input type = "text" name = "txtend" size = "50" value='<?php echo $pro_mostrar[2] ?>'>
                    <br><br> <b> <?php echo "Cidade: ";?></b>
                    <input type = "text" name = "txtcid" size = "25" value='<?php echo $pro_mostrar[3] ?>'>
                    <br><br> <b> <?php echo "Código: ";?></b>
                    <input type = "text" name = "txtcod" size = "5" value='<?php echo $pro_mostrar[4] ?>'>
        
                    <br><br><br><center>
                    <input name = "btnalterar" type = "submit" value = "Alterar" >
        
                    <?php
                    }
                    ?>
        
                </fieldset>
                </form>
        
                <?php
                extract ($_POST, EXTR_OVERWRITE);
                if(isset($btnalterar))
                {
                    include_once 'alunos.php';
                    $pro = new alunos();
                    $pro->setNome($txtnome);
                    $pro->setEnd($txtend);
                    $pro->setCid($txtcid);
                    $pro->setCod($txtcod);
                    $pro->setMat($txtmat);
                    echo "<br><br><h3>" . $pro->alterar2() . "</h3>";   
                    //header("location:Alt_alu1.php");  
                }
                ?>
            
                <center> <br><br><br><br>
            </div>
        </section>
    </body>
</html> 