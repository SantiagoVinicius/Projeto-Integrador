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
<body style="background:#ffcbdb;">
<div class="navbar-dark bg-dark">
        <nav class="navbar navbar-expand-sl ">
                <a href="../funcionarios/funcionario-listar.php"class="navbar-brand" style="margin-right:1em;margin-left:1em;"><img src="../images/funcionario.png" style="width:50px;"> FUNCIONÁRIOS</a>

                <a href="../clientes/cliente-listar.php" class="navbar-brand" style="margin-right:1em;margin-left:1em;"><img src="../images/cliente.png" style="width:50px;"> CLIENTES</a>

                <a href="../agenda/agenda-listar.php" class="navbar-brand" style="margin-right:1em;margin-left:1em;"><img src="../images/agenda.png" style="width:50px;"> AGENDAMENTO</a>

                <a href="../index.php" class="navbar-brand"><img src="../images/botao-x.png" style="width:50px;"> SAIR</a>
</div>
        </nav>