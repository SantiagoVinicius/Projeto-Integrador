<?php include "../includes/cabecalho.php";?>

<?php include "../includes/conexao.php";

$sqlBusca = "SELECT 
                tb_agenda.id,
                tb_agenda.data,
                tb_agenda.horario,
                tb_funcionarios.nome as 'nome_funcionario',
                tb_agenda.procedimento,
                tb_agenda.valor,
                tb_clientes.nome as 'nome_cliente'
                FROM tb_agenda
                  inner join tb_clientes on tb_agenda.id_cliente = tb_clientes.id
                  inner join tb_funcionarios on tb_agenda.id_funcionario = tb_funcionarios.id";  
                
$listaDeAgenda = mysqli_query($conexao , $sqlBusca);
?>
<hr>

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

<a href="agenda-formulario-inserir.php" class=" btn btn-success">Nova Consulta</a>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>ID_Funcionário</th>
        <th>ID_Cliente</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Procedimento</th>
        <th>Valor</th>
        <th>Ações</th>
    </tr>

<?php 
while($agenda = mysqli_fetch_assoc($listaDeAgenda)){
    echo "<tr>";
    echo "<td>{$agenda['id']}</td>";
    echo "<td>{$agenda['nome_funcionario']}</td>";
    echo "<td>{$agenda['nome_cliente']}</td>";
    echo "<td>{$agenda['data']}</td>";
    echo "<td>{$agenda['horario']}</td>";
    echo "<td>{$agenda['procedimento']}</td>";
    echo "<td>{$agenda['valor']}</td>";
    echo "<td> <a type='button' class='btn btn-outline-success' href='agenda-formulario-alterar.php?id_agenda={$agenda['id']}'>Alterar <a type='button' class='btn btn-outline-success' href='agenda-excluir.php?id_agenda={$agenda['id']}'> Excluir</td>";
    echo "</tr>";
}?>
</table>


<?php include "../includes/rodape.php"?>