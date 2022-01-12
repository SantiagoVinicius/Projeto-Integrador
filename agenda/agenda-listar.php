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
                $idFuncionarioSelecionado = "";
                if(isset($_POST['id_funcionario'])){
                    $idFuncionarioSelecionado = $_POST['id_funcionario'];
                    if($idFuncionarioSelecionado != 'todos'){
                        $sqlBusca .= " WHERE id_funcionario = " . $idFuncionarioSelecionado;
                    }
                }
$listaDeAgenda = mysqli_query($conexao , $sqlBusca);
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

<a href="agenda-formulario-inserir.php" class=" btn btn-outline-light" style="width:11em;margin-top:0.5em;margin-left:1em;">Nova Consulta</a>
<form method="post">
            <select name="id_funcionario" class="form-select btn btn-outline-light"style="width:11em;margin-left:1em;" >
                <option value="todos">TODOS</option>
                <?php 
                $sqlBuscaFuncionarios = "SELECT * FROM tb_funcionarios";
                $listaDeFuncionarios = mysqli_query($conexao , $sqlBuscaFuncionarios);
                $selecionado = "";
                 while($funcionario = mysqli_fetch_assoc($listaDeFuncionarios)){
                     if($idFuncionarioSelecionado == $funcionario['id']){
                         $selecionado = "selected";
                     }else{
                         $selecionado = "";
                     }
                     echo "<option value='{$funcionario['id']}' {$selecionado}>";
                     echo $funcionario['nome'];
                     echo "</option>";
                    }
                ?>
            </select>
        <div class="btn" style="width:11em;">
            <button class="btn btn-outline-light">Filtrar</button>
        </div>
</form>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Funcionário</th>
        <th>Cliente</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Procedimento</th>
        <th>Valor R$</th>
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
    echo "<td> <a type='button' class='btn btn-outline-light' href='agenda-formulario-alterar.php?id_agenda={$agenda['id']}'>Alterar <a type='button' class='btn btn-outline-light' href='agenda-excluir.php?id_agenda={$agenda['id']}'> Excluir</td>";
    echo "</tr>";
}?>
</table>


<?php include "../includes/rodape.php"?>