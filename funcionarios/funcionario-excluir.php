<?php

include "../includes/conexao.php";

$id_funcionario = $_GET['id_funcionario'];

$sqlExcluir = "DELETE FROM tb_funcionarios WHERE id = {$id_funcionario}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    header('Location:funcionario-listar.php?mensagem=excluido');
}else{
    echo "Ocorreu algum problema";
}
?>