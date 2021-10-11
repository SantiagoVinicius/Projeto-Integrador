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
<body class="container" style="text-align:center;max-width:80vh;margin-top:10%;background:#ffcbdb;">

    <form name="formulario-login" action="login.php" method="post" style="border:1px solid #ffcbdb;box-shadow: 0 0 1em grey;">
        <div style="background-image:url('logi.jpg'); background-repeat:no-repeat;background-size:30em;">
        <label style="color:white;margin-top:20px;"class="text-dark">Área Restrita</label>
    <hr class="card border-dark mb-3 bg-dark" >
        <label style="color:white;padding:1px;"class="text-dark">Usuário:</label>
        <input class="btn btn-dark" name="usuario">
        <br>
        <label style="color:white;margin:5px;padding:2px;"class="text-dark">Senha:</label>
        <input class="btn btn-dark" type="password" name="senha"><br>
        <button type="submit" class="btn btn-outline-dark"style="margin:35px;" >Acessar</button><br>
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