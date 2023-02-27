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
      <form name="cliente" method = "POST">
          <fieldset id="a">
              <legend><b> Dados do Curso </b></legend>
                  <p> Código: <input name="txtcodC" type="number" size="20" placeholder="Código de Curso" required> </p>
                  <p> Função: <input name="txtnome" type="text" size="40" placeholder="Área Profissional" required> </p>
                  <p> Código de Disciplina 1: <input name="txtcodd1" type="number" size="20" placeholder="Código da Primeira Disciplina" required> </p>
                  <p> Código de Disciplina 2: <input name="txtcodd2" type="number" size="20" placeholder="Código da Segunda Disciplina" required> </p>
                  <p> Código de Disciplina 3: <input name="txtcodd3" type="number" size="20" placeholder="Código da Terceira Disciplina" required> </p>
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
                  include_once 'cursos.php';
                  $pro= new cursos();
                  $pro->setCodC($txtcodC);
                  $pro->setNome($txtnome);
                  $pro->setCodd1($txtcodd1);
                  $pro->setCodd2($txtcodd2);
                  $pro->setCodd3($txtcodd3);
                  echo "<h3><br><br>" . $pro->salvar() . "</h3>";  
              }
      ?>
    </div>
  </section>
</body>
</html>