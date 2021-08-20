<?php 
$id_funcionario = $_POST['id_funcionario'];
$id_cliente = $_POST['id_cliente'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$procedimento = $_POST['procedimento'];
$valor = $_POST['valor'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_agenda(id_funcionario, id_cliente, data, horario, procedimento, valor) values('{$id_funcionario}' , '{$id_cliente}' , '{$data}' , '{$horario}' , '{$procedimento}' , '{$valor}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
   header('Location:agenda-listar.php?mensagem=cadastrado');
}else{
    echo "Algum erro aconteceu";
}
?>
