	<body class="hold-transition skin-yellow sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">

			<header class="main-header">
				<!-- Logo -->
				<a href="../../index2.html" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini">A<b>U</b></span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg">Abubakar <b>Usman</b></span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo base_url('dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
									<span class="hidden-xs"><?php echo $this->session->name ?></span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="<?php echo base_url('dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
										<p>
											<?php echo $this->session->username.' - '.$this->session->level ?>
											<small>Hi <?php echo ucfirst($this->session->name) ?>, have a nice day!</small>
										</p>
									</li>
									<!-- Menu Body -->
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="">
											<a href="<?php echo site_url('logout');?>" class="btn btn-default btn-block">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>

			<!-- =============================================== -->
