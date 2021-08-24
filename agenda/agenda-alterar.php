<?php
include "../includes/conexao.php";

$id_agenda = $_POST['id_agenda'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$id_funcionario = $_POST['id_funcionario'];
$procedimento = $_POST['procedimento'];
$id_cliente = $_POST['id_cliente'];
$valor = $_POST['valor'];

$sqlAlterar = "UPDATE tb_agenda set
                data = '{$data}' , 
                horario = '{$horario}' ,
                id_funcionario = '{$id_funcionario}' ,
                procedimento = '{$procedimento}',
                id_cliente = '{$id_cliente}',
                valor = '{$valor}'
                WHERE id = {$id_agenda}";
$resultado = mysqli_query($conexao , $sqlAlterar);

// print_r($sqlAlterar);
if($resultado){
    header('Location:agenda-listar.php');
}else{
    echo "Ocorreu algum erro";
}
?>