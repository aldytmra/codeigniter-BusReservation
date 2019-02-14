
<?php //validasi jika user belum login
	if($this->session->userdata('masukadmin') != TRUE){
		$url= 'dashboard/login';
		redirect($url);
    }
    
    date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Bus Resv</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/assetsbus/images/iconbus.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/assetsbus/images/iconbus.png">
  
  <!-- style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assetsbus/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assetsbus/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assetsbus/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assetsbus/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assetsbus/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assetsbus/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assetsbus/styles/font.css" type="text/css" />
    <!-- slider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bxslider/dist/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.css">

  <!-- datepicker -->

  <!-- bookingseat -->
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.seat-charts.css">
  
 <!-- DataTables -->
        <link href="<?php echo base_url();?>assets/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/datatables/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url();?>assets/datatables/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="<?php echo base_url();?>assets/datatables/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- style tambahan -->
    <style>
	.container-fluid{
        background: linear-gradient(#3549D3,#C67DF1);
        border-radius:20px;
        color:white;
    }
    .row{
        padding:20px;
    }
    </style>
    </head>
<body>
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
					<span class="hidden-folded inline">Ngebus Yok!</span>
				</a>
				<!-- / brand -->
			</div>
			<div class="hide-scroll" data-flex>
				<nav class="scroll nav-light">

					<ul class="nav" ui-nav>
						<!-- ini area menu dinamis -->

						<?php  
                $main_menu = $this->db->get_where('menuadmin',array('is_main_menu'=>0))->result();
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
			<div class="navbar navbar-toggleable-sm flex-row align-items-center">
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
								<h4 class="mb-0 _300">Welcome to Ngebus Yok!</h4>
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
					&copy; Copyright <strong>Ngebus Yok!</strong>
				</div>
				<div class="nav">
					<a class="nav-link" href="../">About</a>
					<a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
				</div>
			</div>
		</div>
		<div ui-view class="app-body" id="view">

			<!-- ############ PAGE START-->

			<br>
<div class="container-fluid col-10">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive">
				<form id="" action="booking" method="post">
					<h2>All System User</h2>
					<table id="datatable" style="width:100%" class="table table-bordered table-responsive">
                    <thead>
							<tr>
								<th>Username</th>
								<th>EmployeeNo</th>
								<th>Name</th>
								<th>Mobile Number</th>
								<th>Privilege</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($systemuser as $key => $u){ ?>
							<tr>
								<td>
									<?php echo $u->userName ?>
								</td>
								<td>
									<?php echo $u->empolyeeNo?>
								</td>
								<td>
									<?php echo $u->empolyeeName ?>
								</td>
								<td>
									<?php echo $u->empolyeeMNo ?>
								</td>
								<td>
									<?php echo $u->privilege ?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</form>

			</div>
		</div>
	</div>
</div>


			<!-- ############ PAGE END-->

		</div>
	</div>


</body>
</div>
<!-- build:js <?php echo base_url(); ?>assets/assetsbus/scripts/app.html.js -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/assetsbus/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/assetsbus/libs/jquery/tether/dist/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="<?php echo base_url(); ?>assets/assetsbus/libs/jquery/underscore/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/libs/jquery/PACE/pace.min.js"></script>

<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/config.lazyload.js"></script>

<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/palette.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-load.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-jp.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-include.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-device.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-form.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-nav.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-scroll-to.js"></script>
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ui-toggle-class.js"></script>

<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/app.js"></script>

<!-- ajax -->
<!-- <script src=" echo base_url(); ?>assets/assetsbus/libs/jquery/jquery-pjax/jquery.pjax.js"></script> -->
<script src="<?php echo base_url(); ?>assets/assetsbus/scripts/ajax.js"></script>
<!-- endbuild -->

<!-- slider -->
<script src="<?php echo base_url(); ?>assets/bxslider/dist/jquery.bxslider.min.js"></script>

<!-- Required datatable js -->
<script src="<?php echo base_url();?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url();?>assets/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/js/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/datatables/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/js/buttons.print.min.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.js"></script>
<script>
	$(document).ready(function () {
		$('.bxslider').bxSlider({
			auto: true,
			autoControls: false,
			stopAutoOnClick: false,
			pager: true,
			slideWidth: 900
		});

		// Default Datatable
		$('#datatable').DataTable();

	});

</script>
<script>
	$("#datepicker1").datepicker({
		inline: true
	});

</script>

<!-- bookingseat -->
<script src="<?php echo base_url(); ?>assets/js/jquery.seat-charts.js"></script>
<script>
	var firstSeatLabel = 1;

	$(document).ready(function () {
		var $cart = $('#selected-seats'),
			$counter = $('#counter'),
			$total = $('#total'),
			sc = $('#seat-map').seatCharts({
				map: [
					'ff_ff',
					'ff_ff',
					'ee_ee',
					'ee_ee',
					'ee___',
					'ee_ee',
					'ee_ee',
					'ee_ee',
					'eeeee',
				],
				seats: {
					f: {
						price: 150000,
						classes: 'ac-sleeper', //your custom CSS class
						category: 'AC Sleeper'
					},
					e: {
						price: 80000,
						classes: 'Standar', //your custom CSS class
						category: 'Standar'
					}

				},
				naming: {
					top: false,
					getLabel: function (character, row, column) {
						return firstSeatLabel++;
					},
				},
				legend: {
					node: $('#legend'),
					items: [
						['f', 'available', 'AC Sleeper'],
						['e', 'available', 'Standar'],
						['f', 'unavailable', 'Sudah Di Booking']
					]
				},
				click: function () {
					if (this.status() == 'available') {
						//let's create a new <li> which we'll add to the cart items
						$('<li><b>' + this.data().category + ' Seat #' + this.settings.label + ': Rp' + this.data().price +
								'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
							.attr('id', 'cart-item-' + this.settings.id)
							.data('seatId', this.settings.id)
							.appendTo($cart);

						/*
						 * Lets update the counter and total
						 *
						 * .find function will not find the current seat, because it will change its stauts only after return
						 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
						 */
						$counter.text(sc.find('selected').length + 1);
						$total.text(recalculateTotal(sc) + this.data().price);

						return 'selected';
					} else if (this.status() == 'selected') {
						//update the counter
						$counter.text(sc.find('selected').length - 1);
						//and total
						$total.text(recalculateTotal(sc) - this.data().price);

						//remove the item from our cart
						$('#cart-item-' + this.settings.id).remove();

						//seat has been vacated
						return 'available';
					} else if (this.status() == 'unavailable') {
						//seat has been already booked
						return 'unavailable';
					} else {
						return this.style();
					}
				}
			});

		//this will handle "[cancel]" link clicks
		$('#selected-seats').on('click', '.cancel-cart-item', function () {
			//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
			sc.get($(this).parents('li:first').data('seatId')).click();
		});

		//let's pretend some seats have already been booked
		sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');

	});

	function recalculateTotal(sc) {
		var total = 0;

		//basically find every selected seat and sum its price
		sc.find('selected').each(function () {
			total += this.data().price;
		});

		return total;
	}

</script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-36251023-1']);
	_gaq.push(['_setDomainName', 'jqueryscript.net']);
	_gaq.push(['_trackPageview']);

	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();

</script>
</body>

</html>


