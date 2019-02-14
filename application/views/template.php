<?php $this->load->view('partials/header'); ?>
<div class="app" id="app">

	<!-- ############ LAYOUT START-->

	<!-- aside -->
	<div id="aside" class="app-aside modal nav-dropdown">
		<!-- fluid app aside -->
		<div class="left navside dark dk" data-layout="column">
			<div class="navbar no-radius">
				<!-- brand -->
				<a class="navbar-brand">
					<img src="<?php echo base_url(); ?>assets/assetsbus/images/iconbus.png" alt="">
					<img src="<?php echo base_url(); ?>assets/assetsbus/images/logo.png" alt="." class="hide">
					<span class="hidden-folded inline">BusLine</span>
				</a>
				<!-- / brand -->
			</div>
			<div class="hide-scroll" data-flex>
				<nav class="scroll nav-light">

					<ul class="nav" ui-nav>
						<!-- ini area menu dinamis -->

						<?php  
                $main_menu = $this->db->get_where('menu',array('is_main_menu'=>0))->result();
                foreach($main_menu as $main) {
                    // check apakah ada sub menu ?
                    $sub_menu = $this->db->get_where('menu',array('is_main_menu'=>$main->id));
                    if($sub_menu->num_rows()>0){
                        // tampilkan sub menu disini
                        echo "<li class='has-submenu'>
                        <table> 
                          <td style='width:30px;'><a href='#'><i class='".$main->icon."'></td>
                          <td></i> <span> ".$main->judul_menu." </span> </a></td>
                        </table>
                                <ul class='submenu megamenu'>
                                    <li>
                                        <ul>";
                                            foreach ($sub_menu->result() as $sub ) {

                                                // batas atas sub submenu

                                                
                                                // batas bawah sub submenu
                                                // echo "<li>".anchor($sub->link, "<i class='".$sub->icon."'></i>"." ".$sub->judul_menu)."</li>";
                                                echo "<li>".anchor($sub->link, "<table>
                                                                                    <tr>
                                                                                        <td style='width:30px;'><center><i class='".$sub->icon."'></i></center></td>
                                                                                        <td>".$sub->judul_menu."</td>
                                                                                    </tr>
                                                                                </table>")."</li>";
                                            }

                                    echo "</ul>
                                    </li>
                                </ul>
                            </li>";
                    } else {
                        // tampilkan main menu
                        // echo "<li>".anchor($main->link, "<i class='".$main->icon."'></i>"." ".$main->judul_menu)."</li>";
                      
                        echo "<li>".anchor($main->link, "<table>
                                                            <tr>
                                                                <td style='width:30px;'><center><i class='".$main->icon."'></i></center></td>
                                                                <td><a><span class='nav-text'>".$main->judul_menu."</span></a></td>
                                                            </tr>
                                                        </table>")."</li>";

                    }
                    
                }
                
                ?>

					</ul>
				</nav>
			</div>
			<div class="b-t">
				<div class="nav-fold">
					<a href="profile.html">
						<span class="pull-left">
							<img src="<?php echo base_url(); ?>assets/assetsbus/images/a0.jpg" alt="..." class="w-40 img-circle">
						</span>
						<span class="clear hidden-folded p-x">
							<span class="block _500">Sayyid Widad</span>
							<small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- / -->

	<!-- content -->
	<div id="content" class="app-content box-shadow-z0" role="main">
		<div class="app-header white box-shadow">
			<div style="background:#F3F4F7;" class="navbar navbar-toggleable-sm flex-row align-items-center">
				<!-- Open side - Naviation on mobile -->
				<a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
					<i class="material-icons">&#xe5d2;</i>
				</a>
				<!-- / -->

				<!-- Page title - Bind to $state's title -->
				<div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

				<!-- navbar collapse -->
				<div class="collapse navbar-collapse" id="collapse">
					<!-- link and dropdown -->
					<ul class="nav navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link" href data-toggle="dropdown">
								<h4 class="mb-0 _300">Welcome to BusLine</h4>
							</a>
						</li>
					</ul>

					<!-- / -->
				</div>
				<!-- / navbar collapse -->


				<!-- navbar right -->
				<ul class="nav navbar-nav ml-auto flex-row">
					<li class="nav-item dropdown pos-stc-xs">
						<a class="nav-link mr-2" href data-toggle="dropdown">
							<i class="material-icons">&#xe7f5;</i>
							<span class="label label-sm up warn">3</span>
						</a>
						<div ui-include="'<?php echo base_url(); ?>assets//views/blocks/dropdown.notification.html'"></div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
							<span class="avatar w-32">
								<img src="<?php echo base_url(); ?>assets/assetsbus/images/a0.jpg" alt="...">
								<i class="on b-white bottom"></i>
							</span>
						</a>
						<div ui-include="'<?php echo base_url(); ?>assets/views/blocks/dropdown.user.html'"></div>
					</li>
					<li class="nav-item hidden-md-up">
						<a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
							<i class="material-icons">&#xe5d4;</i>
						</a>
					</li>
				</ul>
				<!-- / navbar right -->
			</div>
		</div>
		<div class="app-footer">
			<div class="p-2 text-xs">
				<div class="pull-right text-muted py-1">
					&copy; Copyright <strong>BusLine</strong>
				</div>
				<div class="nav">
					<a class="nav-link" href="../">About</a>
					<a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
				</div>
			</div>
		</div>
		<div ui-view class="app-body" id="view" style="background:white;">

			<!-- ############ PAGE START-->

			<?php echo $contents;?>

			<!-- ############ PAGE END-->

		</div>
	</div>


	<!-- ############ LAYOUT END-->

	<?php $this->load->view('partials/footer'); ?>
