<?php
 include "../includes/cabecalho.php";
 include "../includes/conexao.php";


$id_agenda = $_GET['id_agenda'];

$sqlBusca = "SELECT * FROM tb_agenda WHERE id = {$id_agenda}";
$listaDeAgenda = mysqli_query($conexao , $sqlBusca);

$data = $horario = $id_funcionario = $procedimento = $id_cliente = $valor =  "";

while($agenda = mysqli_fetch_assoc($listaDeAgenda)){
    $data = $agenda['data'];
    $horario = $agenda['horario'];
    $id_funcionario = $agenda['id_funcionario'];
    $procedimento = $agenda['procedimento'];
    $id_cliente = $agenda['id_cliente'];
    $valor = $agenda['valor'];
}
?>

<form name="cadastro-agenda" method="post" action="agenda-alterar.php" class="text-center" style="margin-top:2em;">
<input name="id_agenda" type="hidden" value="<?php echo $id_agenda;?>">
    <p>
        <label>Funcionário:</label><br>
        <select name="id_funcionario" class=" btn btn-outline-light" value="<?php echo $id_funcionario;?>">
            <?php
            $sqlBuscaFuncionarios = "SELECT * FROM tb_funcionarios";
            $listaDeFuncionarios = mysqli_query($conexao , $sqlBuscaFuncionarios);

            while($funcionario = mysqli_fetch_assoc($listaDeFuncionarios)){
                echo "<option value='{$funcionario['id']}'>";
                echo $funcionario['nome'];
                echo "</option>";
            }
        ?>
        </select>
    </p>
    <p>
        <label>Cliente:</label><br>
        <select name="id_cliente" class=" btn btn-outline-light" value="<?php echo $id_cliente;?>">
            <?php
            $sqlBuscaClientes = "SELECT * FROM tb_clientes";
            $listaDeClientes = mysqli_query($conexao , $sqlBuscaClientes);

            while($cliente = mysqli_fetch_assoc($listaDeClientes)){
                echo "<option value='{$cliente['id']}'>";
                echo $cliente['nome'];
                echo "</option>";
            }
        ?>
        </select>
    </p>
    <p>
        <label>Data:</label><br>
        <input name="data" type="date" class="btn btn-outline-light" value="<?php echo $data;?>">
    </p>
    <p>
        <label>Horário:</label><br>
        <input name="horario" type="time" class=" btn btn-outline-light" value="<?php echo $horario; ?>">
    </p>
    <p>
        <label>Procedimento:</label><br>
        <input name="procedimento" type="text" class="btn btn-outline-light" value="<?php echo $procedimento;?>">
    </p>
    <p>
        <label>Valor R$:</label><br>
        <input name="valor" type="number" class="btn btn-outline-light" value="<?php echo $valor;?>">
    </p>
    <p>
        <button type="submit" class=" btn btn-outline-light">Salvar</button>
    </p>

    
    </form>   

<?php include "../includes/rodape.php"?>