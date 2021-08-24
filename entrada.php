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
<body class="bg-dark">
<div class="card border-warning mb-3 bg-dark" style="max-width: 20%; margin-left:40%; margin-top:10%; text-align:center;">
    <form name="formulario-login" action="login.php" method="post">
        <label style="color:white;margin-top:20px;">Área Restrita</label>
    <hr class="card border-warning mb-3 bg-dark" >
        <label style="color:white;">Usuário:</label>
        <input class="btn btn-warning" name="usuario">
        <label style="color:white;">Senha:</label>
        <input class="btn btn-warning" type="password" name="senha">
        <hr class="card border-warning mb-3 bg-dark" >
        <button type="submit" class="btn btn-outline-warning">Acessar</button><hr>
        <?php
        if(isset($_GET['mensagem'])){
            if($_GET['mensagem'] == 'errado'){
                ?>
                <div class="alert alert-warning">
                Usuário ou Senha inválido!
            </div>
            <?php
            }else if($_GET['mensagem'] == 'login'){
                echo "<h5>Realize Login para entrar</h5>";
            }
        }
        ?>
    </form>
    </div>
</body>
</html>