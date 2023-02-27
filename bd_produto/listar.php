<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar.php</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <nav class="menu">
      <ul class="menu-list">
          <li class="menu-list-item"><a href="consultar_alt.php">Alterar</a></li>
          <li class="menu-list-item"><a href="cadastrarprodutos.php">Cadastrar</a></li>
          <li class="menu-list-item"><a href="excluirproduto.php">Excluir</a></li>
          <li class="menu-list-item"><a href="consultar.php">Pesquisar</a></li>
          <li class="menu-list-item"><a href="listar.php">Listar</a>
          </li>
      </ul>
    </nav>

    <section>
      <center><font face = "Century Gothic" size = "6"><b>Relaçao de Produtos Cadastrados</b><br><br><font size = "4">
        <?php
            include_once 'produto.php';
            $p = new Produto();
            $pro_bd = $p->listar();
        ?>
        <table> 
          <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Estoque</th>
          </tr>
          <?php
            foreach($pro_bd as $pro_mostrar)
            {
              ?>
                <tr>
                  <td><?php echo $pro_mostrar[0] ?></td>
                  <td><?php echo $pro_mostrar[1] ?></td>
                  <td><?php echo $pro_mostrar[2] ?></td>
                </tr>
              <?php
            }
          ?>
        </table>
    </section>
  </body>
</html>