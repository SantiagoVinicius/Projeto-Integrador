<?php

include "../includes/conexao.php";

$id_cliente = $_GET['id_cliente'];

$sqlExcluir = "DELETE FROM tb_clientes WHERE id = {$id_cliente}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    header('Location:cliente-listar.php?mensagem=excluido');
}else{
    echo "Ocorreu algum problema";
}
?>