<!DOCTYPE html>
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
                
                <font face="Century Gothic" size="3"><br>
        
                <fieldset>
                    <legend><b> Alterar </b></legend>
        
                    <?php
                        $txtid=$_POST["txtid"];
                        include_once 'produto.php';
                        $p = new Produto();
                        $p->setId($txtid);
                        $pro_bd = $p->alterar();
                    ?>
                    <br><form name = "cliente2" method = "POST" action = "">
                    <?php
                        foreach($pro_bd as $pro_mostrar)
                        {
                    ?>
                    
                    <input type = "hidden" name = "txtid" size = "5" value='<?php echo $pro_mostrar[0] ?>'>
                    <b> <?php echo "ID:" . $pro_mostrar[0]; ?></b>
                    <br><br> <b> <?php echo "Nome: ";?></b>
                    <input type = "text" name = "txtnome" size = "25" value='<?php echo $pro_mostrar[1] ?>'>
                    <br><br> <b> <?php echo "Estoque: ";?></b>
                    <input type = "text" name = "txtestoq" size = "10" value='<?php echo $pro_mostrar[2] ?>'>
                    <br><br><br><center>
                    <input name = "btnalterar" type = "submit" value = "Alterar" >
        
                    <?php
                    }
                    ?>
        
                </fieldset>
                </form>
        
                <?php
                extract ($_POST, EXTR_OVERWRITE);
                if(isset($btnalterar))
                {
                    include_once 'produto.php';
                    $pro = new Produto();
                    $pro->setNome($txtnome);
                    $pro->setEstoque($txtestoq);
                    $pro->setId($txtid);
                    echo "<br><br><h3>" . $pro->alterar2() . "</h3>";   
                    header("location: consultar_alt.php");  
                }
                ?>
            
                <center> <br><br><br><br>
            </div>
        </section>
    </body>
</html> 