<?php
 include "../includes/cabecalho.php"
?>
<?php include "../includes/conexao.php"?>
<form name="cadastro-agenda" method="post" action="agenda-inserir.php"  class="text-center" style="margin-top:2em;">
<p>
        <label>Funcionário:</label><br>
        <select name="id_funcionario" class=" btn btn-outline-light">
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
        <select name="id_cliente" class=" btn btn-outline-light">
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
        <input name="data" type="date" class="btn btn-outline-light">
    </p>
    <p>
        <label>Horário:</label><br>
        <input name="horario" type="time" class=" btn btn-outline-light">
    </p>
    <p>
        <label>Procedimento:</label><br>
        <input name="procedimento" type="text" class="btn btn-outline-light">
    </p>
    <p>
        <label>Valor R$:</label><br>
        <input name="valor" type="number" class="btn btn-outline-light">
    </p>
    <p>
        <button type="submit" class=" btn btn-outline-light">Salvar</button>
    </p>
</form>

<?php include "../includes/rodape.php"?>