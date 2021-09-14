<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="bootstrap5/css/bootstrap.css" rel="stylesheet">
</head>
<body class="container" style="text-align:center;max-width:80vh;margin-top:10%;">

    <form name="formulario-login" action="login.php" method="post">
        <div style="background-image:url('logi.jpg'); background-repeat:no-repeat;background-size:30em;">
        <label style="color:white;margin-top:20px;"class="text-success">Área Restrita</label>
    <hr class="card border-success mb-3 bg-dark" >
        <label style="color:white;padding:1px;"class="text-success">Usuário:</label>
        <input class="btn btn-success" name="usuario">
        <br>
        <label style="color:white;margin:5px;padding:2px;"class="text-success">Senha:</label>
        <input class="btn btn-success" type="password" name="senha"><br>
        <button type="submit" class="btn btn-outline-success"style="margin:35px;" >Acessar</button><br>
        <?php
        if(isset($_GET['mensagem'])){
            if($_GET['mensagem'] == 'errado'){
                ?>
                <div class="alert alert-danger">
                Usuário ou Senha inválido!
            </div>
            <?php
            }else if($_GET['mensagem'] == 'login'){
                echo "<h5>Realize Login para entrar</h5>";
            }
        }
        ?>
        </div>
    </form>
    </div>
</body>
</html>