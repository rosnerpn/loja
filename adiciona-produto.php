
<?php include("cabecalho.php"); ?>
<?php include ("conecta.php"); ?>
<?php include ("banco-produto.php"); ?>
<?php


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];




if(insereProduto($conexao,$nome,$preco,$descricao)) { 
?>
    <p class="text-success">Produto <?php echo $nome; ?>, <?php echo $preco;?> adicionado com sucesso!</p>
<?php
} else{ 
    $msg = msyqli_error($conexao);
?>
    <p class="text-danger">Produto <?php echo $nome; ?>não foi adicionado: <?= $msg ?>.</p>
<?php
}
    

?>
    

<?php include("rodape.php"); ?>