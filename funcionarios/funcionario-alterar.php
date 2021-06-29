<?php
include "../includes/conexao.php";

$id_funcionario = $_POST['id_funcionario'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$trabalha_dias = $_POST['trabalha_dias'];
$trabalha_horarios = $_POST['trabalha_horarios'];

$sqlAlterar = "UPDATE tb_funcionarios set
                nome = '{$nome}' ,
                telefone = '{$telefone}' , 
                trabalha_dias = '{$trabalha_dias}' ,
                trabalha_horarios = '{$trabalha_horarios}' 
                WHERE id = {$id_funcionario}";
$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    header('Location:funcionario-listar.php');
}else{
    echo "Ocorreu algum erro";
}
?>