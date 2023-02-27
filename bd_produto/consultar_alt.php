<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>Consulta</title>
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
                <center><font face="Century Gothic" size="6"><b>Alteração de Produtos Cadastrados</b><font size="4"></center><br>
                
                <font face="Century Gothic" size="3"><b>
        
                <form name = "cliente" method = "POST" action = "consultar_alt2.php">
                <fieldset>
                    <legend><b> Digite o ID do produto desejado: </b></legend>
                        <p> Id: <input name = "txtid" type = "text" size = "20" maxlength = "5" palceholder = "Id do Produto">
                        <br><br><center>
                            <input name="btnenviar" type="submit" value="Consultar"> &nbsp;&nbsp;
                            <input name="Limpar" type="reset" value="Limpar">
                </fieldset>
                </form>
        
                <center> <br><br><br><br>
            </div>
        </section>
    </body>
</html> 