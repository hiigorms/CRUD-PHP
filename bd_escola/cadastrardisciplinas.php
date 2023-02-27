<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Cadastrar.php</title>
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
              <legend><b> Dados da Disciplina </b></legend>
                  <p> Matrícula: <input name="txtcodC" type="number" size="20" placeholder="Número da Matrícula" required> </p>
                  <p> Nome: <input name="txtnome" type="text" size="30" placeholder="Nome da Disciplina" required> </p>
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
                  include_once 'disciplinas.php';
                  $pro= new disciplinas();
                  $pro->setCodC($txtcodC);
                  $pro->setNome($txtnome);
                  echo "<h3><br><br>" . $pro->salvar() . "</h3>";  
              }
      ?>
    </div>
  </section>
</body>
</html>