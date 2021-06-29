<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-funcionarios" method="post" action="funcionario-inserir.php" enctype="multipart/form-data">
    <p>
        <label>Nome: </label><br><input class="btn btn-primary" name="nome">
    </p>
    <p>
        <label>Telefone: </label><br><input class="btn btn-primary" name="telefone">
    </p>
    <p>
        <label>Trabalha Dias: </label><br><input class="btn btn-primary" name="trabalha_dias">
    </p>
    <p>
        <label>Período: </label><br><input class="btn btn-primary" name="trabalha_horarios">
    </p>
        <p>
            <button type="subtmit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>