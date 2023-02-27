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
                
                <center><font face = "Century Gothic" size =  "6"><b>Consulta de Alunos Cadastrados</b><font size = "4">
                
                <font face = "Century Gothic" size = "3"></center> <br>
                <font size = "4">
                    
                <form name="cliente" method = "POST" action = "">
                    <fieldset id="a">
                        <legend><b> Informe o Nome do(a) aluno(a) desejado: </b></legend>
                            <p> Nome: <input name="txtnome" type="text" size="40" placeholder="Nome do(a) aluno(a)" required>
                            <br><br><center>
                            <input name="btnenviar" type="submit" value="Consultar" > &nbsp;&nbsp;
                            <input name="limpar" type="reset" value="Limpar" >
        
                    </fieldset>
        
                <br>
                
                <fieldset id="b">
                    <legend><b> Resultado: </b></legend>
            
        
            <?php
            extract($_POST, EXTR_OVERWRITE);
            if(isset($btnenviar))
            {
                include_once "alunos.php";
                $p = new alunos();
                $p->setNome($txtnome. '%'); // o . '%' serve para busca aproximada, ouseja começa com uma determinada letra
                $pro_bd=$p->consultar(); //chamada de método
                foreach($pro_bd as $pro_mostrar)
                    {
                        ?> <br>
                        <b> <?php echo "Matrícula: "?> </b><?php echo $pro_mostrar[0]; // como é matriz - posição 0 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                        <b> <?php echo "Nome: "?> </b><?php echo $pro_mostrar[1]; // como é matriz - posição 1 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                        <b> <?php echo "Endereço: "?> </b><?php echo $pro_mostrar[2]; // como é matriz - posição 2 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                        <b> <?php echo "Cidade: "?> </b><?php echo $pro_mostrar[3]; // como é matriz - posição 2 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                        <b> <?php echo "Código do Curso: "?> </b><?php echo $pro_mostrar[4]; // como é matriz - posição 2 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                    }
            }
            ?>
            </fieldset>
        
                </form>
                <center> <br><br><br><br>
            </div>
        </section>
    <body>
</html> 