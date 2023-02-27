<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Login</title>
    <script language=javascript>
        function blokletras(keypress) {
            if(keypress>=48 && keypress<=57) {
                return true;
            } else {
                return false;
            }    
        }
    </script>
</head>
<body>
    <section>
        <div class="field">
            <form class="login" method="POST">
                <h1>Login de Acesso</h1>
                
                <p>Informe seus dados:</p>
                <div>
                    <label for="txtnome">Usuario:</label>
                    <input type="text" id="txtnome" name="txtnome" placeholder="Digite o usuario" required>
                </div>
                <div>
                    <label for="txtsenha">Senha:</label>
                    <input type="password" name="txtsenha" placeholder="Digite sua senha" required onkeypress="return blokletras(window.event.keyCode)">
                </div>
                <input name="btnconsultar" type="submit" value="Acessar">

                <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnconsultar))
                {
                    include_once 'usuario.php';
                    $usuario = new Usuario();
                    $usuario->setLogin($txtnome);
                    $usuario->setSenha($txtsenha);
                    $pro_bd=$usuario->logar();
    
                    $existe = false;
                    foreach($pro_bd as $pro_mostrar) {
                        $existe = true;
                        ?>
                        <div class="login-success">
                            <?php echo "<span> Bem vindo! Usuário: " . $pro_mostrar[0] . "</span>" ?>
                            <a href="Menuescola.html">Entrar</a>
                        </div>
                        <?php
                    }
    
                    if ($existe===false) {
                        header("location:notfound.php");
                    }
                }
                ?>
            </form>
        </div>
    </section>
</body>