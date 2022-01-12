<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-funcionarios" method="post" action="funcionario-inserir.php" enctype="multipart/form-data" class="text-center" style="margin-top:2em;">
    <p>
        <label>Nome: </label><br><input class="btn btn-outline-light" name="nome">
    </p>
    <p>
        <label>Telefone: </label><br><input class="btn btn-outline-light" name="telefone">
    </p>
    <p>
        <label>Trabalha Dias: </label><br><input class="btn btn-outline-light" name="trabalha_dias">
    </p>
    <p>
        <label>Período: </label><br><input class="btn btn-outline-light" name="trabalha_horarios">
    </p>
        <p>
            <button type="subtmit" class="btn btn-outline-light">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>