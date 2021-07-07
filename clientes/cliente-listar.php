<?php include "../includes/cabecalho.php";
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_clientes";

$listaDeClientes = mysqli_query($conexao, $sqlBusca);
?>
<p>
<hr>
<?php if(isset($_GET['mensagem'])){
        if($_GET['mensagem'] == 'cadastrado'){
        ?> 
        <div class="alert alert-danger">
            Cadastrado com sucesso!
        </div>
        <?php
        }

        if($_GET['mensagem'] == 'excluido'){
            ?>
        <div class="alert alert-danger">
        Excluído com sucesso!
        </div>
        <?php
    }
}
    ?>
<p>
    <a href="cliente-formulario-inserir.php" class="btn btn-danger" ><i class="bi-plus-circle"></i>Novo Cliente</a>
</p>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_clientes;";
$listaDeClientes = mysqli_query($conexao , $sqlBusca);
?>

<table class="table table-hover">
    <tr style="color:white">
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
        echo "<td><a type='button' class='btn btn-outline-primary' href='cliente-formulario-alterar.php?id_cliente={$cliente['id']}'>Alterar</a> <a type='button' class='btn btn-outline-primary' href='cliente-excluir.php?id_cliente={$cliente['id']}'> Excluir</td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "../includes/rodape.php"; ?>