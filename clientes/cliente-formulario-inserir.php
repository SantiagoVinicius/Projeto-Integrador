<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-clientes" method="post" action="cliente-inserir.php" enctype="multipart/form-data" class="text-center" style="margin-top:2em;">
    <p>
        <label>Nome: </label><br><input class="btn btn-outline-light" name="nome">
    </p>
    <p>
        <label>Telefone: </label><br><input class="btn btn-outline-light" name="telefone">
    </p>
    <p>
    <input class="form-check-input btn-outline-light" type="checkbox" name="adulto" id="flexCheckIndeterminate"> Adulto
  
    </p>
    <p>
        <input class="form-check-input btn-outline-light" type="radio" name="sexo" value="Feminino"> Feminino
        <input class="form-check-input  btn-outline-light" type="radio" name="sexo" value="Masculino"> Masculino
    </p>
    <p>
    <textarea class="btn btn-outline-light" name="descricao">Digite Informações!</textarea>
    </p>
        <p>
            <button type="subtmit" class="btn btn-outline-light">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>