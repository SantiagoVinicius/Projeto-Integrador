<?php include "../includes/cabecalho.php";
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_clientes";

$listaDeClientes = mysqli_query($conexao, $sqlBusca);
?>

<?php if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] == 'cadastrado'){
        ?> 
        <div class="alert alert-success">
            Cadastrado com sucesso!
        </div>
        <?php
        }

        if($_GET['mensagem'] == 'excluido'){
            ?>
        <div class="alert alert-success">
        Excluído com sucesso!
        </div>
        <?php
    }
}
    ?>
<p>
    <a href="cliente-formulario-inserir.php" class="btn btn-outline-dark"style="width:10em;margin-top:0.5em;margin-left:1em;" ><i class="bi-plus-circle"></i>Novo Cliente</a>
</p>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_clientes;";
$listaDeClientes = mysqli_query($conexao , $sqlBusca);
?>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Adulto</th>
        <th>Sexo</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    <?php
    while($cliente = mysqli_fetch_assoc($listaDeClientes)){
        echo "<tr>";
        echo "<td>{$cliente['id']}</td>";
        echo "<td>{$cliente['nome']}</td>";
        echo "<td>{$cliente['telefone']}</td>";
        echo "<td>{$cliente['adulto']}</td>"; 
        echo "<td>{$cliente['sexo']}</td>";
        echo "<td>{$cliente['descricao']}</td>";
        echo "<td><a type='button' class='btn btn-outline-success' href='cliente-formulario-alterar.php?id_cliente={$cliente['id']}'>Alterar</a> <a type='button' class='btn btn-outline-danger' href='cliente-excluir.php?id_cliente={$cliente['id']}'> Excluir</td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "../includes/rodape.php"; ?>