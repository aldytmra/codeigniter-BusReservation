<style>
	.container-fluid{
        background: linear-gradient( #0072ff,#00c6ff);
        border-radius:20px;
    }
    .row{
        padding:20px;
    }
    h2{
        color:white;
    }
    .roundedinput{
        width:510px;
        border-radius:5px;
	}
	
	.pembayaran{
		width:357px; 
		background-color:white; 
		color:black;
		padding:10px; 
		border-radius:10px;
		height:130px;
	}

	input .bayar{
		color:white;
	}

	form img{
		width:64px;
	}

	.nav-list li{
		margin-bottom:20px;
		display:inline;
	}

	.btnbayar{
		padding:30px;
		border-radius:10px;
		margin-top:50px;
		margin:auto;
	}

	.judul{
		margin-bottom:10px;
		font-size:20px;
	}
	ul{
		padding: 0;
		list-style-type: none;
	}
	.kupon{
		border-radius:10px;
		width:330px;
	}


</style>
<br>
<form action="<?php echo base_url();?>booker/paymentpaper" method="POST">
<input type="hidden" id="totals" name="totals" value="<?php echo $_POST['totals'];?>">
	<div class="container-fluid col-10">
		<div class="row">
			<div class="col-12">
				<div class="card-box table-responsive col-12">
					<table style="width:100%">
						<tr colspan="2">
							<h2>Booking Details</h2>
						</tr>
						<tr>
							<td width="350px">
								<div style="width:350px; min-height:130px; background-color:white; color:black;padding:10px; border-radius:10px;">
									<table>
										<tr>
											<td><b>Booking Date</b></td>
											<td width="10px">
												<center><b>:</b></center>
											</td>
											<td id="dates">
												<?php echo $_POST['dates'];?>
											</td>
										</tr>
										<tr>
											<td><b>Number of Seat</b></td>
											<td width="10px">
												<center><b>:</b></center>
											</td>
											<td id="seats">
												<?php echo $_POST['seats'];?>
											</td>
										</tr>
										<tr>
											<td><b>Seats Detail</b></td>
											<td width="10px">
												<center><b>:</b></center>
											</td>
											<td colspan='3'>

												<?php 
							
							echo $_POST['arrayseat'];
							?>
											</td>
										</tr>
										<tr>
											<td><b>Total Amount</b></td>
											<td width="10px">
												<center><b>:</b></center>
											</td>
											<td id="totals">Rp.
												<?php echo $_POST['totals'];?>
											</td>
										</tr>
									</table>
								</div>
							</td>
							<td align="right" valign="top">
								<div class="pembayaran">
									<table>
										<tr>
											<td colspan="9"><b>Masukkan Kode Kupon :</b></td>
										</tr>
										<br>
										<tr>
											<td><input type="text" class="form-control kupon"></td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
					</table>
					<br><br>
					<h2 style="margin-bottom:10px; margin-top:10px;">Pilih Metode Pembayaran</h2>
					<div style="width:100%; background-color:white; color:black;padding:20px; border-radius:10px;">
						<table style="width:100%">
							<tr>
								<td style="width:60%">
									<table>
										<tr>
											<td class="col-1"></td>
											<td class="col-2"><label for="demo-radio-1"><img src="<?php echo base_url('assets/images/bank/bca.png')?>"
													 alt=""><center><input type="radio" checked="checked" name="demo-radio" id="demo-radio-1" value='<img src="<?php echo base_url('assets/images/bank/bca.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/bjb.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-2" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/bjb.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-3"><img src="<?php echo base_url('assets/images/bank/bni.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-3" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/bni.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-4"><img src="<?php echo base_url('assets/images/bank/cimb.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-4" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/cimb.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-5"><img src="<?php echo base_url('assets/images/bank/btpn.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-5" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/btpn.png')?>"
													 alt="">'></center></label></td>
											<td class="col-1"></td>
										</tr>
										<tr>
											<td class="col-1"></td>
											<td class="col-2"><label for="demo-radio-6"><img src="<?php echo base_url('assets/images/bank/mandiri.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-6" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/mandiri.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-7"><img src="<?php echo base_url('assets/images/bank/permata.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-7" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/permata.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-8"><img src="<?php echo base_url('assets/images/bank/btn.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-8" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/btn.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-9"><img src="<?php echo base_url('assets/images/bank/bri.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-9" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/bri.png')?>"
													 alt="">'></center></label></td>
											<td class="col-2"><label for="demo-radio-10"><img src="<?php echo base_url('assets/images/bank/hsbc.png')?>"
													 alt=""><center><input type="radio" name="demo-radio" id="demo-radio-10" value='<label for="demo-radio-2"><img src="<?php echo base_url('assets/images/bank/hsbc.png')?>"
													 alt="">'></center></label></td>
											<td class="col-1"></td>
										</tr>
									</table>
								</td>
								<td style="width:40%;" align="center">
									<input type="submit" class="btn btn-success btnbayar" name="bayar" value="Selesaikan Pembayaran">
								</td>
							</tr>


						</table>
					</div>


				</div>
			</div>
		</div>
	</div>

</form>
