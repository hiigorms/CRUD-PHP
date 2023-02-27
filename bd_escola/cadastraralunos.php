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
                
                <form name="cliente" method = "POST" action = "">
                    <fieldset id="a">
                        <legend><b> Dados do Aluno </b></legend>
                            <p> Matrícula: <input name="txtmat" type="number" size="20" placeholder="Número de Matrícula" required> </p>
                            <p> Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Aluno" required>
                            <p> Endereço: <input name="txtend" type="text" size="40" placeholder="Nome da Rua/Avenida e número" required> </p>
                            <p> Cidade: <input name="txtcid" type="text" size="30" placeholder="Nome da Cidade" required> </p>
                            <p> Código: <input name="txtcod" type="number" size="20" placeholder="Código do Curso" required> </p>
                    </fieldset>
                    <br>
                    <fieldset id="b">
                        <legend><b> Opções </b></legend>
                            <br>
                            <input name="btnenviar" type="submit" value="Cadastrar">
                            <input name="btnlimpar" type="reset" value="Limpar">
                    </fieldset>
                </form>
                <?php
                    extract($_POST, EXTR_OVERWRITE);
                    if(isset($btnenviar))
                        {
                            include_once 'alunos.php';
                            $pro= new alunos();
                            $pro->setMat($txtmat);
                            $pro->setNome($txtnome);
                            $pro->setEnd($txtend);
                            $pro->setCid($txtcid);
                            $pro->setCod($txtcod);
                            echo "<h3><br><br>" . $pro->salvar() . "</h3>";  
                        }
                ?>
            </div>
        </section>
    </body>
</html>