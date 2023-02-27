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

            <center><font face = "Century Gothic" size = "6"><b>Relaçao de Cursos Cadastrados</b><br><br><font size = "4">
            <?php
                include_once 'cursos.php';
                $a = new cursos();
                $pro_bd = $a->listar();
            ?>
            <table> 
                <tr>
                    <th>Cod-Curso</th>
                    <th>Nome</th>
                    <th>Cod-Disc1</th>
                    <th>Cod-Disc2</th>
                    <th>Cod-Disc3</th>
                </tr>
                <?php
                    foreach($pro_bd as $pro_mostrar)
                    {
                    ?>
                        <tr>
                        <td><?php echo $pro_mostrar[0] ?></td>
                        <td><?php echo $pro_mostrar[1] ?></td>
                        <td><?php echo $pro_mostrar[2] ?></td>
                        <td><?php echo $pro_mostrar[3] ?></td>
                        <td><?php echo $pro_mostrar[4] ?></td>
                        </tr>
                    <?php
                    }
                ?>
            </table>

        </section>
    </body>
</html>