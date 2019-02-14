<?php //validasi jika user belum login
	if($this->session->userdata('masukbooker') != TRUE){
		$url= 'dashboard/login';
		redirect($url);
    }
    
    date_default_timezone_set("Asia/Jakarta");
?>

<div class="padding">
	<center>
		<div class="bxslider">
			<div><img src="<?php echo base_url(); ?>assets/images/banner/banner1.jpg"></div>
			<div><img src="<?php echo base_url(); ?>assets/images/banner/banner2.jpg"></div>
			<div><img src="<?php echo base_url(); ?>assets/images/banner/banner3.jpg"></div>
		</div>
	</center>

	<!-- end page title end breadcrumb -->


	<div class="row">
		<div class="col-12">
			<div class="p-20">

				<?php echo form_open('booker/'); ?>

				<table border="0" align="center">
					<tr>
						<td width="300px">
							<div class="form-group">
								<center><label for="journeyFrom">Journey From</label> </center>
								<select class="form-control rounded" name="journeyFrom" id="journeyFrom" data-validation="required">
									<?php
                                $journeyFrom1 = null;
                                foreach ($journey as $value) {
                                    if($value->journeyFrom == $journeyFrom1){}
                                    else{
                                    echo '<option value="' . $value->journeyFrom. '">' . $value->journeyFrom . '</option>';
                                    $journeyFrom1 = $value->journeyFrom;
                                    }
                                }
                                ?>
								</select>
							</div>
						</td>
						<td rowspan="2" width="50px"></td>
						<td width="300px">
							<div class="form-group">
								<center><label for="dateofJourney" class="required">Date</label></center>
								<input name="dateOfJourney" id="datepicker1" type="text" class="form-control rounded" data-validation="required"
								 value="<?php echo date("d-m-Y"); ?>">
							</div>
						</td>
					</tr>
					<tr>
						<td width="300px">
							<div class="form-group">
								<center><label for="journeyTo">Journey To</label> </center>
								<select class="form-control rounded" name="journeyTo" id="journeyTo" data-validation="required">
									<?php
                                    $journeyTo1 = null;
                                    foreach ($journey as $value) {
                                        if($value->journeyTo == $journeyTo1){}
                                        else{
                                        echo '<option value="' . $value->journeyTo. '">' . $value->journeyTo . '</option>';
                                        $journeyTo1 = $value->journeyTo;
                                        }
                                    }
                                    ?>
								</select>
							</div>
						</td>
						<td width="300px">
							<center><button type="submit" name="submit" class="btn btn-primary btn-rounded">BOOKING</button></center>
						</td>
					</tr>







				</table>
				<?php echo form_close(); ?>

			</div>
