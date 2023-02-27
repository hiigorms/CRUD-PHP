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
                
                <center><font face = "Century Gothic" size = "6"> <b>Exclusão de Disiciplinas Cadastradas</b><font size = "4">
        
                <font face = "Century Gothic" size = "3"><b>
        
                </b></center>
                <br>
                <font size = "4">
        
                <form name="cliente" method = "POST" action = "">
                    <fieldset id="a">
                        <legend><b> Informe o código da disciplina desejada: </b></legend>
                            <p> Código de Disciplina: <input name="txtcodd" type="number" size="20" maxlength="5" placeholder="Código de Disciplina" required>
                            <br><br><center>
                            <input name="btnenviar" type="submit" value="Excluir">
                    </fieldset>
        
                    <br>
        
                    <fieldset id="b">
                        <legend><b> Opções </b></legend>
                            <br>
                            <input name="btnlimpar" type="reset" value="Limpar">
                    </fieldset>
                </form>
        
                <fieldset id="b">
                    <legend><b> Resultado: </b></legend>
        
                    <?php
                        extract($_POST, EXTR_OVERWRITE);
                        if(isset($btnenviar))
                        {
                            include_once 'disciplinas.php';
                            $p = new disciplinas();
                            $p->setCodC($txtcodd);
                            echo "<h3>" . $p->exclusao() . "</h3>";
                        }
                    ?>
                </fieldset>
            </div>
        </section>
    </body>
</html>