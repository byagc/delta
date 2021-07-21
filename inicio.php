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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
		<div class="pd-ltr-20">
			
			
			

























			<div class="row align-items-center">


				<div class="col-sm">
					<div class="pricing-table text-center bg-light ">
						<div class="price-header fundo-pricing2 pt-5 pb-5">
							<h3 class="price-title text-white text-uppercase">AIO Pack 1</h3>
							<p class="mb-0">Plano Bronze</p>
						</div>
						<div class="price-value pt-4 pb-4 position-relative">
							<div class="price-lable">
								<h4 class="mb-0">R$ 759.00</h4>/ Ano
							</div>
						</div>
						<div class="pricing-features text-left">
							
							<ul class="list-unstyled border-bottom p-4 mb-0">
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i> Opera na TRYD</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Índice Futuro</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Robô do Dólar</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-close mr-3"></i>Robô de Ações</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-close mr-3"></i>Comodities</li>
							</ul>
							<div class="price-button text-center p-4">


							<form method="POST" action="start_compra.php" name="produto_1" id="produto_1">

								<input type="hidden" name="produto_id" id="produto_id" value="001">
								<input type="hidden" name="produto_titulo" id="produto_titulo" value="AIO PACK 1 - Plano Bronze">
								<input type="hidden" name="produto_preco" id="produto_preco" value="1.00">



								<a href="#" class="btn btn-dark w-100" onClick="document.getElementById('produto_1').submit();">Comprar</a>

							</form>   
								
								

							</div>
						</div>    
					</div><!--end price three-->
				</div><!--end col-->


				<div class="col-sm">
					<div class="pricing-table text-center bg-light">
						<div class="price-header fundo-pricing2 pt-5 pb-5">
							<h3 class="price-title text-white text-uppercase">AIO Pack 2</h3>
							<p class="mb-0">Plano Bronze</p>
						</div>
						<div class="price-value pt-4 pb-4 position-relative">
							<div class="price-lable">
								<h4 class="mb-0">R$ 759.00</h4>/ Ano
							</div>
						</div>
						<div class="pricing-features text-left">
							<ul class="list-unstyled border-bottom p-4 mb-0">
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i> Opera na TRYD</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Índice Futuro</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Robô do Dólar</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-close mr-3"></i>Robô de Ações</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-close mr-3"></i>Comodities</li>
							</ul>
							<div class="price-button text-center p-4">



							<form method="POST" action="start_compra.php" name="produto_2" id="produto_2">

								<input type="hidden" name="produto_id" id="produto_id" value="002">
								<input type="hidden" name="produto_titulo" id="produto_titulo" value="AIO PACK 2 - Plano Bronze">
								<input type="hidden" name="produto_preco" id="produto_preco" value="759.00">



								<a href="#" class="btn btn-dark w-100" onClick="document.getElementById('produto_2').submit();">Comprar</a>

							</form>
								
								

							</div>
						</div>    
					</div><!--end price three-->
				</div><!--end col-->
				
				<div class="col-sm">
					<div class="pricing-table text-center bg-light">
						<div class="price-header fundo-pricing pt-5 pb-5">
							<h3 class="price-title texto-pricing text-uppercase">AIO Pack 3</h3>
							<p class="mb-0 texto-pricing">Plano Prata</p>
						</div>
						<div class="price-value pt-4 pb-4 position-relative">
							<div class="price-lable">
								<h4 class="mb-0">R$ 949.00</h4>/ Ano
							</div>
						</div>
						<div class="pricing-features text-left">
							<ul class="list-unstyled border-bottom p-4 mb-0">
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i> Opera na TRYD</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Índice Futuro</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Robô do Dólar</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-close mr-3"></i>Robô de Ações</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-close mr-3"></i>Comodities</li>
							</ul>
							<div class="price-button text-center p-4">



							<form method="POST" action="start_compra.php" name="produto_3" id="produto_3">

								<input type="hidden" name="produto_id" id="produto_id" value="002">
								<input type="hidden" name="produto_titulo" id="produto_titulo" value="AIO PACK 3 - Plano Prata">
								<input type="hidden" name="produto_preco" id="produto_preco" value="949.00">



								<a href="#" class="btn btn-dark w-100" onClick="document.getElementById('produto_3').submit();">Comprar</a>

							</form>  
								
								

							</div>
						</div>    
					</div><!--end price three-->
				</div><!--end col-->
				
				<div class="col-sm">
					<div class="pricing-table text-center bg-light">
						<div class="price-header fundo-pricing2 pt-5 pb-5">
							<h3 class="price-title text-white text-uppercase">AIO Pack4</h3>
							<p class="mb-0">Plano Ouro</p>
						</div>
						<div class="price-value pt-4 pb-4 position-relative">
							<div class="price-lable">
								<h4 class="mb-0">R$ 1249.00</h4>/ Ano
							</div>
						</div>
						<div class="pricing-features text-left">
							<ul class="list-unstyled border-bottom p-4 mb-0">
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i> Opera na TRYD</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Índice Futuro</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Robô do Dólar</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-close mr-3"></i>Robô de Ações</li>
								<li class="border-0 nao-pricing"><i class="mdi mdi-close mr-3"></i>Comodities</li>
							</ul>
							<div class="price-button text-center p-4">



							<form method="POST" action="start_compra.php" name="produto_4" id="produto_4">

								<input type="hidden" name="produto_id" id="produto_id" value="002">
								<input type="hidden" name="produto_titulo" id="produto_titulo" value="AIO PACK 4 - Plano Ouro">
								<input type="hidden" name="produto_preco" id="produto_preco" value="1249.00">

								<a href="#" class="btn btn-dark w-100" onClick="document.getElementById('produto_4').submit();">Comprar</a>

							</form>
								
								

							</div>
						</div>    
					</div><!--end price three-->
				</div><!--end col-->
				
				<div class="col-sm">
					<div class="pricing-table text-center bg-light">
						<div class="price-header fundo-pricing2 pt-5 pb-5">
							<h3 class="price-title texto-pricing text-uppercase">AIO Pack 5</h3>
							<p class="mb-0 texto-pricing">Plano Diamante</p>
						</div>
						<div class="price-value pt-4 pb-4 position-relative">
							<div class="price-lable">
								<h4 class="mb-0">R$ 1749.00</h4>/ Ano
							</div>
						</div>
						<div class="pricing-features text-left">
							<ul class="list-unstyled border-bottom p-4 mb-0">
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i> Opera na TRYD</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Índice Futuro</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-check text-custom mr-3"></i>Robô do Dólar</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-close mr-3"></i>Robô de Ações</li>
								<li class="border-0 sim-pricing"><i class="mdi mdi-close mr-3"></i>Comodities</li>
							</ul>
							<div class="price-button text-center p-4">



							<form method="POST" action="start_compra.php" name="produto_5" id="produto_5">

								<input type="hidden" name="produto_id" id="produto_id" value="002">
								<input type="hidden" name="produto_titulo" id="produto_titulo" value="AIO PACK 5 - Plano Diamante">
								<input type="hidden" name="produto_preco" id="produto_preco" value="1749.00">



								<a href="#" class="btn btn-dark w-100" onClick="document.getElementById('produto_5').submit();">Comprar</a>

							</form>
								
								

							</div>
						</div>    
					</div><!--end price three-->
				</div><!--end col-->
			</div><!--end row-->



























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
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>
</html>