<?php

	session_start();
	include_once("../db/conexao.php");

	$verifica = $_SESSION['usuarioNome'];

	if (empty($verifica)){
		header('Location: index.php');
	}
?>
<br>
<a href="sair.php">Sair</a><br>

<?php
$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			
			echo "Nome: " . $row_usuario['nome'] . "<br>";
			echo "Sobrenome: " . $row_usuario['sobrenome'] . "<br>";
			echo "CPF: " . $row_usuario['cpf'] . "<br>";


			echo "E-mail: " . $row_usuario['email'] . "<br>";



		}


		?>	