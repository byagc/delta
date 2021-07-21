<?php
$pais = $_POST["pais"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$rua = $_POST["rua"];

$email = $_POST["email"];
$celular = $_POST["celular"];
$whatsapp= $_POST["whatsapp"];
$fixo = $_POST["fixo"];


$usuario_login = $_POST["usuario_login"];
$senha = md5($_POST['senha']);



include_once("../db/conexao.php");

$sql = "UPDATE usuarios SET pais = '$pais', estado = '$estado', cidade = '$cidade', rua = '$rua', email = '$email', celular = '$celular', whatsapp = '$whatsapp', fixo = '$fixo', senha = '$senha' WHERE usuario_login LIKE '$usuario_login'";

if (mysqli_query($conn, $sql)) {
    echo "Dados Atualizados com Sucesso! Faça o Login Novamente";
    header("Location:sair.php");
} else {
    echo "E-mail, CPF, Celular ou Usuário já existente em nosso Banco de Dados. Cadastre um Difrente para continuar.";
    header("Location:dados.php");

}
mysqli_close($conn);


?>