<?php include "../includes/cabecalho.php" ; 
$id_funcionario = $_GET['id_funcionario'];
include "../includes/conexao.php";
$sqlBuscar = "SELECT * FROM tb_funcionarios WHERE id={$id_funcionario};";
$listaDeFuncionarios = mysqli_query($conexao , $sqlBuscar);
$nome = $telefone = $trabalha_dias = $trabalha_horarios = "";
while($funcionario = mysqli_fetch_assoc($listaDeFuncionarios)){
    $nome = $funcionario['nome'];
    $telefone = $funcionario['telefone'];
    $trabalha_dias = $funcionario['trabalha_dias'];
    $trabalha_horarios = $funcionario['trabalha_horarios'];
}
?>

<form name="formulario-inserir-funcionario" method="post" action="funcionario-alterar.php" enctype="multipart/form-data">
    <input type="hidden" name="id_funcionario" value="<?php echo $id_funcionario;?>">
    <div class="row">
    <p class="col-6">
        <label class="form-label">Nome: </label><br><input name="nome" class="form-control btn btn-primary"  value="<?php echo $nome;?>">
    </p>
    <p class="col-6">
        <label class="form-label">Telefone: </label><br><input name="telefone" class="form-control btn btn-primary" value="<?php echo $telefone;?>">
    </p>
    <p class="col-6">
        <label class="form-label">Trabalha Dias: </label><br><input name="trabalha_dias" class="form-control btn btn-primary" value="<?php echo $trabalha_dias;?>">
    </p>
    <p class="col-6">
        <label class="form-label">Período: </label><br><input name="trabalha_horarios" class="form-control btn btn-primary" value="<?php echo $trabalha_horarios;?>">
    </p>
        <p>
            <button type="subtmit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
<?php include "../includes/rodape.php" ; ?>