<?php 
include "../includes/conexao.php";
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$trabalha_dias = $_POST['trabalha_dias'];
$trabalha_horarios = $_POST['trabalha_horarios'];


$sqlInserir = "INSERT INTO tb_funcionarios(nome, telefone, trabalha_dias, trabalha_horarios) values('{$nome}' , '{$telefone}' , '{$trabalha_dias}' , '{$trabalha_horarios}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header('Location:funcionario-listar.php?mensagem=cadastrado');
}else{
    echo "Algum erro aconteceu";
}
?>