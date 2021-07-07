<?php 
include "../includes/conexao.php";
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$adulto = $_POST['adulto'];
if($_POST['adulto']){
    $adulto = "Adulto";
}else{
    $adulto = "Criança";
}
$sexo = $_POST['sexo'];
$descricao = $_POST['descricao'];


$sqlInserir = "INSERT INTO tb_clientes(nome, telefone, adulto, sexo, descricao) values('{$nome}' , '{$telefone}' , '{$adulto}' , '{$sexo}' , '{$descricao}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header('Location:cliente-listar.php?mensagem=cadastrado');
}else{
    echo "Algum erro aconteceu";
}
?>