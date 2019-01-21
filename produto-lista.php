<?php include ("cabecalho.php"); ?>
<?php include ("conecta.php"); ?>
<?php include ("banco-produto.php"); ?>

<?php

if(array_key_exists("removido",$_GET) && $_GET["removido"]=="true"){
    ?>
<p class="alert-success">Produto removido com sucesso.</p>

<?php
}
?>
<table class="table table-striped table-bordered">
<?php
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto){
?>
<tr>
    <td><?=$produto['nome'] ?></td>
    <td><?=$produto['preco']?></td>
    <td><?=substr($produto['descricao'],0,40)?></td>
    <td>
        <form action="remove-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <button class="btn btn-danger">remove</button>
        </form>
    </td>
</tr>
<?php
}

?>
</table>
<?php include ("cabecalho.php"); ?>