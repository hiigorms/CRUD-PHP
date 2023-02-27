<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Cadastrar.php</title>
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
            <div class="field">
                <form name="cliente" method = "POST" action = "">
                    <fieldset id="a">
                        <legend><b> Dados do Produto </b></legend>
                            <p> Nome: <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto" required>
                            <p> Estoque: <input name="txtestoq" type="number" size="10" placeholder="0" required> </p>
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
                                include_once 'produto.php';
                                $pro= new Produto();
                                $pro->setNome($txtnome);
                                $pro->setEstoque($txtestoq);
                                echo "<h3><br><br>" . $pro->salvar() . "</h3>";  
                            }
                    ?>
            </div>
        </section>
    </body>