<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisar.php</title>
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
                <center><font face = "Century Gothic" size =  "6"><b>Consulta de Produtos Cadastrados</b><font size = "4">
                
                <font face = "Century Gothic" size = "3"></center> <br>
                <font size = "4">
                    
                <form name="cliente" method = "POST" action = "">
                    <fieldset id="a">
                        <legend><b> Informe o Nome do produto desejado: </b></legend>
                            <p> Nome: <input name="txtnome" type="text" size="40" placeholder="Nome do Produto">
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
                    include_once "produto.php";
                    $p = new Produto();
                    $p->setNome ($txtnome. '%'); // o . '%' serve para busca aproximada, ouseja começa com uma determinada letra
                    $pro_bd=$p->consultar(); //chamada de método
                    foreach($pro_bd as $pro_mostrar)
                        {
                            ?> <br>
                            <b> <?php echo "ID: "?> </b><?php echo$pro_mostrar[0]; // como é matriz - posição 0 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                            <b> <?php echo "Nome: "?> </b><?php echo$pro_mostrar[1]; // como é matriz - posição 1 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                            <b> <?php echo "Estoque: "?> </b><?php echo$pro_mostrar[2]; // como é matriz - posição 2 ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
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