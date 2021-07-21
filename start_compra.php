<?php
session_start();
$_SESSION['produto_id'] = $_POST["produto_id"];
$_SESSION['produto_titulo'] = $_POST["produto_titulo"];
$_SESSION['produto_preco']= $_POST["produto_preco"];




header("Location: comprar/index.php");





?>