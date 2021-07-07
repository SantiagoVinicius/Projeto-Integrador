<?php
include "../includes/conexao.php";

$id_cliente = $_POST['id_cliente'];
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


$sqlAlterar = "UPDATE tb_clientes set
                nome = '{$nome}' ,
                telefone = '{$telefone}' , 
                adulto = '{$adulto}' ,
                sexo = '{$sexo}' ,
                descricao = '{$descricao}'
                WHERE id = {$id_cliente}";
$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    header('Location:cliente-listar.php');
}else{
    echo "Ocorreu algum erro";
}
?>