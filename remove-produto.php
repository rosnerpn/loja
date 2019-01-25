<?php include("cabecalho.php"); 		
 include("conecta.php");			
 include("banco-produto.php"); 
<<<<<<< HEAD
include ("logica-usuario.php");
include("mostra-alerta.php");
=======

>>>>>>> parent of ef93865... Criado tela de login e Modulo II curso
 $id = $_POST['id'];
 removeProduto($conexao, $id);
 header("Location: produto-lista.php?removido=true");
 die();
 ?>
 