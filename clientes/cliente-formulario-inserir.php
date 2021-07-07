<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-clientes" method="post" action="cliente-inserir.php" enctype="multipart/form-data">
    <p>
        <label>Nome: </label><br><input class="btn btn-danger" name="nome">
    </p>
    <p>
        <label>Telefone: </label><br><input class="btn btn-danger" name="telefone">
    </p>
    <p>
    <input class="form-check-input btn-danger" type="checkbox" name="adulto" id="flexCheckIndeterminate"> Adulto
  
    </p>
    <p>
        <input class="form-check-input btn-danger" type="radio" name="sexo" value="Feminino"> Feminino
        <input class="form-check-input btn-danger" type="radio" name="sexo" value="Masculino"> Masculino
    </p>
    <p>
    <textarea class="btn btn-danger" name="descricao">Digite Informações!</textarea>
    </p>
        <p>
            <button type="subtmit" class="btn btn-danger">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>