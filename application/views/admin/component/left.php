			<!-- Left side column. contains the sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="treeview <?php echo active_menu($uri_2, 'dashboard') ?>">
							<a href="<?php echo site_url('admin/dashboard');?>">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'user') ?>">
							<a href="<?php echo site_url('admin/user');?>">
								<i class="fa fa-user-secret"></i> <span>Administrator</span>
							</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'contact') ?>">
							<a href="<?php echo site_url('admin/contact');?>">
								<i class="fa fa-info"></i> <span>Profile Information</span>
							</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'text') ?>">
							<a href="<?php echo site_url('admin/text');?>">
								<i class="fa fa-font"></i> <span>Text Website</span>
							</a>
						</li>
						<li class="treeview <?php echo active_perent($uri_2, $menu['about']) ?>">
							<a href="<?php echo site_url('admin/company');?>">
								<i class="fa fa-table"></i> <span> About Us</span> <i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="treeview <?php echo active_menu($uri_2, 'firm') ?>">
									<a href="<?php echo site_url('admin/firm');?>">
										<i class="fa fa-circle-o"></i> <span> Our Firm</span>
									</a>
								</li>
								<li class="treeview <?php echo active_menu($uri_2, 'services') ?>">
									<a href="<?php echo site_url('admin/services');?>"><i class="fa fa-circle-o"></i> Our Services </a>
								</li>
								<li class="treeview <?php echo active_menu($uri_2, 'partners') ?>">
									<a href="<?php echo site_url('admin/partners');?>">
										<i class="fa fa-circle-o"></i> <span> Our Partners</span>
									</a>
								</li>
								<li class="treeview <?php echo active_menu($uri_2, 'clients') ?>">
									<a href="<?php echo site_url('admin/clients');?>">
										<i class="fa fa-circle-o"></i> <span> Our Clients</span>
									</a>
								</li>
								<li class="treeview <?php echo active_menu($uri_2, 'benefits') ?>">
									<a href="<?php echo site_url('admin/benefits');?>">
										<i class="fa fa-circle-o"></i> <span> Benefits For Our Client</span>
									</a>
								</li>
								<li class="treeview <?php echo active_menu($uri_2, 'international') ?>">
									<a href="<?php echo site_url('admin/international');?>">
										<i class="fa fa-circle-o"></i> <span> international Association</span>
									</a>
								</li>
							</ul>

						</li>
						<li class="treeview <?php echo active_perent($uri_2, $menu['news']) ?>">
							<a href="#">
								<i class="fa fa-newspaper-o"></i> <span> News & Event</span> <i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="<?php echo active_menu($uri_2, 'news') ?>">
									<a href="<?php echo site_url();?>admin/news">
										<i class="fa fa-circle-o"></i> News
									</a>
								</li>
								<li class="<?php echo active_menu($uri_2, 'event') ?>">
									<a href="<?php echo site_url('admin/event');?>"><i class="fa fa-circle-o"></i> Event</a>
								</li>
							</ul>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'careers') ?>">
							<a href="<?php echo site_url('admin/careers');?>"><i class="fa fa-user"></i> Careers</a>
						</li>
						<li class="treeview <?php echo active_menu($uri_2, 'links') ?>">
							<a href="<?php echo site_url('admin/links');?>"><i class="fa fa-link"></i> Links</a>
						</li>
						<li class="treeview <?php echo active_perent($uri_2, $menu['misscellaneous']) ?>">
							<a href="#">
								<i class="fa fa-image"></i> <span> Misscellaneous</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="<?php echo active_menu($uri_2, 'slide') ?>">
									<a href="<?php echo site_url('admin/slide');?>"><i class="fa fa-circle-o"></i> Slide </a>
								</li>
								<!-- <li class="<?php echo active_menu($uri_2, 'banner') ?>">
									<a href="<?php echo site_url('admin/banner');?>"><i class="fa fa-circle-o"></i> Banner </a>
								</li>
								<li class="<?php echo active_menu($uri_2, 'video') ?>">
									<a href="<?php echo '#'; //site_url('admin/video');?>"><i class="fa fa-circle-o"></i> Video </a>
								</li> -->
							</ul>
						</li>
						<li class="treeview <?php echo active_perent($uri_2, $menu['seo']) ?>">
							<a href="#">
								<i class="fa fa-search"></i> <span>S E O</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="<?php echo active_menu($uri_2, 'site') ?>">
									<a href="<?php echo site_url('admin/site');?>"><i class="fa fa-circle-o"></i> General Site </a>
								</li>
								<li class="<?php echo active_menu($uri_2, 'seo') ?>">
									<a href="<?php echo site_url('admin/seo');?>"><i class="fa fa-circle-o"></i> S E O Page </a>
								</li>
							</ul>
						</li>
						<li class="header">TOOLS</li>
						<li><a href="#"><i class="fa fa fa-book text-red"></i> <span>Manual Guide</span></a></li>
						<li><a href="#"><i class="fa fa-area-chart text-green"></i> <span>Web Statistics</span></a></li>
						<li><a href="#"><i class="fa fa-envelope text-aqua"></i> <span>Web Mail</span></a></li>
						<li>
							<a href="<?php echo site_url('logout');?>" >
								<i class="fa fa-sign-out text-yellow"></i> <span>Log Out</span>
							</a>
						</li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			<!-- =============================================== -->
