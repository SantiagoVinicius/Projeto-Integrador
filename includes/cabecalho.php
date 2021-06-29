<?php
session_start();
//if(!isset($_SESSION['logado'])){
    //header('Location: ../index.php?mensagem=login');
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
<body class="bg-secondary">
    <main class="container">
        <header>
            <h1>Santiago Hair</h1>
            <hr>
        </header>
        <nav>
            <a href="../funcionarios/funcionario-listar.php" class="btn btn-primary"><img src="../images/funcionario.png" style="width:50px;"> <br>Cadastro De Funcionários</a>
            <a href="../clientes/cliente-listar.php" class="btn btn-danger"><img src="../images/cliente.png" style="width:50px;"><br> Cadastro De Clientes</a>
            <a href="../agenda/agenda-listar.php" class=" btn btn-success"><img src="../images/agenda.png" style="width:50px;"><br> Agenda</a>
        </nav>