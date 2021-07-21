<?php

	session_start();
	include_once("../db/conexao.php");

	$verifica = $_SESSION['usuarioNome'];

	if (empty($verifica)){
		header('Location: index.php');
	}




?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	
	<?php
	include ("include/header.php"); 
	?>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>


	<?php
	include ("include/menu.php"); 
	?>


	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">


				<div class="pd-20 card-box mb-30">

					<div class="wizard-content">
						<form name="form" id="form" class="tab-wizard wizard-circle wizard" method="POST" action="atualiza.php">
							<h5>Informaçôes Pessoais</h5>
							<section>
								<div class="row">


									<div class="col-md-6">
										<div class="form-group">
											<label >Nome</label>
											<input type="text" class="form-control" name="nome" id="nome" readonly value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['nome'];
											}?>">
										</div>
									</div>




									<div class="col-md-6">
										<div class="form-group">
											<label >Sobrenome</label>
											<input type="text" class="form-control" name="sobrenome" id="sobrenome" readonly value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['sobrenome'];
											}?>">
										</div>
									</div>
								</div>




								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>CPF</label>
											<input type="text" class="form-control" name="cpf" id="cpf" readonly value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['cpf'];
											}?>">
										</div>
									</div>
									



									<div class="col-md-6">
										<div class="form-group">
											<label >Data de Nascimento</label>
											<input type="text" class="form-control" id="datanascimento" name="datanascimento" readonly value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['datanascimento'];
											}?>">
										</div>
									</div>



								</div>
							</section>



							<!-- Step 2 -->
							<h5>Localização</h5>
							<section>
								<div class="row">

								<div class="col-md-6">
										<div class="form-group">
											<label>País</label>
											<input type="text" class="form-control" name="pais" id="pais" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['pais'];
											}?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Estado</label>
											<input type="text" class="form-control" name="estado" id="estado" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['estado'];
											}?>">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Cidade</label>
											<input type="text" class="form-control" name="cidade" id="cidade" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['cidade'];
											}?>">
										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<label>Rua</label>
											<input type="text" class="form-control" name="rua" id="rua" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['rua'];
											}?>">
										</div>
									</div>
									


									
								</div>
							</section>
							<!-- Step 3 -->
							<h5>Contato</h5>
							<section>
								<div class="row">

								<div class="col-md-6">
										<div class="form-group">
											<label>E-mail</label>
											<input type="text" class="form-control" name="email" id="email" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['email'];
											}?>">
										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<label>Celular</label>
											<input type="text" class="form-control" name="celular" id="celular" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['celular'];
											}?>">
										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<label>WhatsApp</label>
											<input type="text" class="form-control" name="whatsapp" id="whatsapp" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['whatsapp'];
											}?>">
										</div>
									</div>



									<div class="col-md-6">
										<div class="form-group">
											<label>Fixo</label>
											<input type="text" class="form-control" name="fixo" id="fixo" value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['fixo'];
											}?>">
										</div>
									</div>

								</div>
							</section>
							<!-- Step 4 -->
							<h5>Acesso</h5>
							<section>
								<div class="row">

								<div class="col-md-12">
										<div class="form-group">
											<label>Usuário</label>
											<input type="text" class="form-control" name="usuario_login" id="usuario_login" readonly value="<?php
											$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
											$resultado_usuarios = mysqli_query($conn, $result_usuarios);
											while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
											echo $row_usuario['usuario_login'];
											}?>">
										</div>
									</div>


									<div class="col-md-12">
										<div class="form-group">
											<label>Nova Senha</label>
											<input type="password" class="form-control" name="senha" id="senha">
										</div>
									</div>

								</div>
							</section>
						</form>
					</div>
				</div>


			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				Delta Capital Digital - Todos os direitos reservados. 
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>
</html>