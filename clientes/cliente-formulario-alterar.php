<?php include "../includes/cabecalho.php" ; 
$id_cliente = $_GET['id_cliente'];
include "../includes/conexao.php";
$sqlBuscar = "SELECT * FROM tb_clientes WHERE id={$id_cliente};";
$listaDeClientes = mysqli_query($conexao , $sqlBuscar);
$nome = $telefone = $adulto = $sexo = $descricao = "";
while($cliente = mysqli_fetch_assoc($listaDeClientes)){
    $nome = $cliente['nome'];
    $telefone = $cliente['telefone'];
    $adulto = $cliente['adulto'];
    $sexo = $cliente['sexo'];
    $descricao = $cliente['descricao'];
}
?>

<form name="formulario-inserir-cliente" method="post" action="cliente-alterar.php" enctype="multipart/form-data" class="text-center" style="margin-top:2em;">
<input type="hidden" name="id_cliente" value="<?php echo $id_cliente;?>">
    <p>
        <label>Nome: </label><br><input class="btn btn-outline-light" name="nome" value="<?php echo $nome;?>">
    </p>
    <p>
        <label>Telefone: </label><br><input class="btn btn-outline-light" name="telefone" value="<?php echo $telefone;?>">
    </p>
    <p>
    <input class="form-check-input btn-outline-light" type="checkbox" name="adulto" id="flexCheckIndeterminate" value="<?php echo $adulto;?>"> Adulto
  
    </p>
    <p>
        <input class="form-check-input  btn-outline-light" type="radio" name="sexo" value="Feminino" value="<?php echo $sexo;?>"> Feminino
        <input class="form-check-input btn-outline-light" type="radio" name="sexo" value="Masculino" value="<?php echo $sexo;?>"> Masculino
    </p>
    <p>
    <textarea class="btn btn-outline-light" name="descricao" value="<?php echo $descricao;?>">Digite Informações!</textarea>
    </p>
        <p>
            <button type="subtmit" class="btn btn-outline-light">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>