<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Excluir.php</title>
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
            <div class='field'>
                <center><font face = "Century Gothic" size = "6"> <b>Exclusão de Produtos Cadastrados</b><font size = "4">
        
                <font face = "Century Gothic" size = "3"><b>
        
                </b></center>
                <br>
                <font size = "4">
        
                <form name="cliente" method = "POST" action = "">
                    <fieldset id="a">
                        <legend><b> Informe o ID do produto desejado: </b></legend>
                            <p> Id <input name="txtid" type="text" size="20" maxlength="5" placeholder="Id do Produto">
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
                            include_once 'produto.php';
                            $p = new Produto();
                            $p->setId($txtid);
                            echo "<h3>" . $p->exclusao() . "</h3>";
                        }
                    ?>
                </fieldset>
            </div>
        </section>
    </body>
</html>