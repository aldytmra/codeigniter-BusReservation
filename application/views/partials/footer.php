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
