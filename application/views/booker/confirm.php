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
	}
	.pembayaran img{
		width:64px;
	}

	input .bayar{
		color:white;
	}
	.btnbayar{
		padding:30px;
		border-radius:10px;
		margin-top:50px;
	}
</style>
<br>
<form action="<?php echo base_url();?>booker/payment" method="POST">
	<input type="hidden" id="totals" name="totals" value="<?php echo $_POST['totals'];?>">
	<input type="hidden" id="dates" name="dates" value="<?php echo $_POST['dates'];?>">
	<input type="hidden" id="seats" name="seats" value="<?php echo $_POST['seats'];?>">
	<input type="hidden" id="arrayseat" name="arrayseat" value="<?php $myArray = json_decode($_POST['arrayseat']);
							// echo $myArray[1];
							// $length = count($myArray);
							// for($i=0; $i < $length; $i++){
							// 	echo $myArray[i];
							// }
							foreach($myArray as $key => $val){
								echo $myArray[$key] . "
	 <br>";
	}?>">
	<div class="container-fluid col-10">
		<div class="row">
			<div class="col-12">
				<div class="card-box table-responsive">
					<table class="col-12">
						<tr colspan="2">
							<h2>Booking Details</h2>
						</tr>
						<tr>
							<td width="350px">
								<div style="width:350px; background-color:white; color:black;padding:14px; border-radius:10px;">
									<table align="center" style="height:100%;">

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
							
							$myArray = json_decode($_POST['arrayseat']);
							// echo $myArray[1];
							// $length = count($myArray);
							// for($i=0; $i < $length; $i++){
							// 	echo $myArray[i];
							// }
							foreach($myArray as $key => $val){
								echo $myArray[$key] . "<br>";
							}
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
							<td style="vertical-align:top" align="right">
								<div class="pembayaran">
									<table>
										<tr>
											<td colspan="9"><b>Pembayaran :</b></td>
										</tr>
										<tr>
											<td><img src="<?php echo base_url('assets/images/bank/bca.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/bjb.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/bni.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/cimb.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/btpn.png')?>" alt=""></td>
										</tr>
										<tr>
											<td><img src="<?php echo base_url('assets/images/bank/mandiri.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/permata.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/btn.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/bri.png')?>" alt=""></td>
											<td><img src="<?php echo base_url('assets/images/bank/hsbc.png')?>" alt=""></td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
					</table>
					<table>
						<tr>
							<td>
								<h2 style="margin-bottom:10px; margin-top:10px">Booker Details</h2>
								<div style="width:550px; background-color:white; color:black; padding:20px; border-radius:10px;">
									<table>
										<tr>
											<td><b>Booker Name :</b></td>
										</tr>
										<tr>
											<td><input type="text" name="name" class="form-control roundedinput"></td>
										</tr>
										<tr>
											<td><b>Address :</b></td>
										</tr>
										<tr>
											<td><input type="text" name="address" id="address" class="form-control roundedinput"></input></td>
										</tr>
										<tr>
											<td><b>Mobile No :</b></td>
										</tr>
										<tr>
											<td><input type="text" name="mobileno" class="form-control roundedinput"></td>
										</tr>
									</table>
								</div>
							</td>
							<td width="500px" align="center">
								<input type="submit" class="btn btn-success btnbayar " name="bayar" value="Pembayaran">
							</td>
						</tr>


					</table>


				</div>
			</div>
		</div>
	</div>

</form>
