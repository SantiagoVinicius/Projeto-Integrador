<?php
session_start();
if(!isset($_SESSION['logado'])){
    header('Location: ../entrada.php?mensagem=login');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santiago Hair</title>
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../bootstrap5/css/bootstrap.css" rel="stylesheet">
</head>
<body style="background-image: linear-gradient( to bottom right, #dd528d,#ff8c79,#fbae52 );background-repeat:no-repeat;background-size: 100vw; background-size: cover; background-position-x: right;background-attachment: fixed;">
<header class="navbar navbar-expand-sm" style="padding-top:1em;">
                <a href="../funcionarios/funcionario-listar.php" class="btn btn-outline-light" style=" padding: 1px 15px 3px 2px;
	            border-radius: 50px;margin-right:1em;margin-left:1em;">
                    <img src="../images/funcionario.png" style="padding:8px;width:50px;">FUNCIONÁRIOS</a>

                <a href="../clientes/cliente-listar.php" class="btn btn-outline-light" style=" padding: 1px 15px 3px 2px;
	            border-radius: 50px;margin-right:1em;margin-left:1em;">
                <img src="../images/cliente.png" style="width:50px;padding: 8px;">CLIENTES</a>

                <a href="../agenda/agenda-listar.php" class="btn btn-outline-light" style=" padding: 1px 15px 3px 2px;
	            border-radius: 50px;margin-right:1em;margin-left:1em;"><img src="../images/agenda.png" style="width:50px;padding:8px;"> AGENDAMENTO</a>

            <a href="../index.php" class="btn btn-outline-light" style=" padding: 1px 15px 3px 2px;
	            border-radius: 50px;margin-right:1em;margin-left:1em;"><img src="../images/botao-x.png" style="width:50px;padding:8px;"> SAIR</a>
</header>
<hr style="color:#ffff;border-color:#fff;border-style: dotted;
  border-width: 2px;">