<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdprojeto";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<h3>Não conectou</h3> Erro: " . mysqli_connect_error());
}

?>