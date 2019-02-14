	<link rel="stylesheet" href="<?php echo base_url();?>/assets/flipclock/flipclock.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/flipclock/flipclock.js"></script>
	
	
	
<style>
	.container-fluid {
		background: linear-gradient( #0072ff,#00c6ff);
		border-radius: 20px;
	}

	.row {
		padding: 10px;
	}

	h2 {
		color: #546A7E;
	}

	.paper-group {
		border: 1px solid #DFE3E7;
		background: white;
		border-radius: 10px;
	}

	.bank-info {
		padding: 10px;
	}

	.padding {
		padding: 5px;
	}

	.float-right img {
		width: 64px;
		height: 40.67px;
	}

	.time{
		display: table;
		margin: auto;
	}

	.card-box {
		padding:20px;
	}

</style>
<br>

<div class="container-fluid col-10">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive col-12">
				<div class="paper-group col-12">
					<div class="time">
						
						<div class="clock" style="padding:20px;"></div>
						
						<script type="text/javascript">
							var clock = $('.clock').FlipClock(18000, {
								countdown: true
							});
						</script>
						
					</div>
					<div class="info-payment">
						<center><h2>Informasi Pembayaran</h2></center>
					</div>
					<div class="bank-info clearfix">
						<div class="float-left padding">Bank:</div>
						<div class="float-right"><?php echo $_POST['demo-radio']; ?></div>
					</div>
					<div class="bank-info clearfix">
						<div class="norek-info ">
							<div class="float-left padding">Nomor Rekening</div>
							<div class="float-right padding">72102339772</div>
						</div>
					</div>
					<div class="bank-info clearfix">
						<div class="rek-info">
							<div class="float-left padding">Nama Rekening</div>
							<div class="float-right padding">PT Bus Reservation Berkah</div>
						</div>
					</div>
					<div class="bank-info clearfix">
						<div class="nilai-tf">
							<div class="float-left padding">Nilai Transfer</div>
							<div class="float-right padding">Rp. <?php echo $_POST['totals']?></div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
