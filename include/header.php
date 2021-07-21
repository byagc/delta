<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">



				<form name="pesquisar" id="pesquisar" action="pesquisa.php" method="POST">
					<div class="form-group mb-0">
						<i class="dw dw-list search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Alguma Dúvida? Pesquise aqui!">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" onClick="document.getElementById('pesquisar').submit();" role="button" data-toggle="dropdown">
								<i class="ion-search"></i>
							</a>

                            
						</div>
					</div>
				</form>



			</div>
		</div>
		
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="#"></i>
					</a>
				</div>
			</div>


			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>

								<li>
									<a href="#">
										<h3>Dados</h3>
										<p>Mantenha os dados atualizados. É importante para que possamos sempre manter contato.</p>
									</a>
								</li>

								<li>
									<a href="#">
										<h3>Segurança</h3>
										<p>A sua senha é única. Evite compartilhar com terceiros.</p>
									</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="imagens/usuarios/photo1.jpg" alt="">
						</span>
						<span class="user-name">
							<?php
							$result_usuarios = "SELECT * FROM usuarios WHERE email LIKE '$verifica'";
							$resultado_usuarios = mysqli_query($conn, $result_usuarios);
							while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
							echo "" . $row_usuario['email'] . "";
							}
						?>	
		
	</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

						<a class="dropdown-item" href="sair.php"><i class="dw dw-logout"></i> Sair</a>
					</div>
				</div>
			</div>

            
		</div>
	</div>