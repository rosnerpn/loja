<?php
include ("logica-usuario.php");
logout();
$_SESSION["sucess"] = "Deslogado com sucesso.";
header ("Location: index.php");

?>