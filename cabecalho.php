<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php"); ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Minha Loja</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Minha Loja</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adiciona Produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
                    <li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="principal">
			