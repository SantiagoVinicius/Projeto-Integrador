
<?php include "../includes/cabecalho.php"; 
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_funcionarios";

$listaDeFuncionarios = mysqli_query($conexao, $sqlBusca);
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
    <a href="funcionario-formulario-inserir.php" class="btn btn-outline-light text-center" style="width:11em;margin-right:1em;margin-left:1em;" >Novo  Funcionário</a>
</p>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_funcionarios;";
$listaDeFuncionarios = mysqli_query($conexao , $sqlBusca);
?>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Trabalha Dias</th>
        <th>Perído</th>
        <th>Ações</th>
    </tr>
    <?php
    while($funcionario = mysqli_fetch_assoc($listaDeFuncionarios)){
        echo "<tr>";
        echo "<td>{$funcionario['id']}</td>";
        echo "<td>{$funcionario['nome']}</td>";
        echo "<td>{$funcionario['telefone']}</td>";
        echo "<td>{$funcionario['trabalha_dias']}</td>"; 
        echo "<td>{$funcionario['trabalha_horarios']}</td>";
        echo "<td><a type='button' class='btn btn-outline-light' href='funcionario-formulario-alterar.php?id_funcionario={$funcionario['id']}'>Alterar</a> <a type='button' class='btn btn-outline-light' href='funcionario-excluir.php?id_funcionario={$funcionario['id']}'> Excluir</td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "../includes/rodape.php"; ?>
