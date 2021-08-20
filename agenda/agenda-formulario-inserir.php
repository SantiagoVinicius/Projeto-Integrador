<?php
 include "../includes/cabecalho.php"
?>
<?php include "../includes/conexao.php"?>
<form name="cadastro-agenda" method="post" action="agenda-inserir.php">
<p>
        <label>Funcionário:</label>
        <select name="id_funcionario" class=" btn btn-success">
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
        <label>Cliente:</label>
        <select name="id_cliente" class=" btn btn-success">
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
        <label>Data:</label>
        <input name="data" type="date" class="btn btn-success">
    </p>
    <p>
        <label>Horário:</label>
        <input name="horario" type="time" class=" btn btn-success">
    </p>
    <p>
        <label>Procedimento:</label>
        <input name="procedimento" type="text" class="btn btn-success">
    </p>
    <p>
        <label>Valor R$:</label>
        <input name="valor" type="number" class="btn btn-success">
    </p>
    <p>
        <button type="submit" class=" btn btn-success">Salvar</button>
    </p>
</form>

<?php include "../includes/rodape.php"?>