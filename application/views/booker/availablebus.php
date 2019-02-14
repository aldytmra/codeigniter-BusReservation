<style>
	.container-fluid{
        background: linear-gradient( #0072ff,#00c6ff);
        border-radius:20px;
        color:white;
    }
    .row{
        padding:20px;
    }
</style>
<br>
<div class="container-fluid col-10">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive">
				<form id="" action="booking" method="post">
					<input type="hidden" name="date" id="date" value="<?php echo $date; ?>" />
					<input type="hidden" name="id" value="">
					<p>Date
						<?php echo $date;?>
					</p>
					<table id="datatable" style="width:100%" class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Bus No</th>
								<th>No. of Seat</th>
								<th>Route No</th>
								<th>Dep. Time</th>
								<th>Arr. Time</th>
								<th>Price</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($availablebus as $key => $u){ ?>
							<tr>
								<td>
									<?php echo $u['busNo'] ?>
								</td>
								<td>
									<?php echo $u['numberOfSeat'] ?>
								</td>
								<td>
									<?php echo $u['routeNo'] ?>
								</td>
								<td>
									<?php echo $u['departureTime'] ?>
								</td>
								<td>
									<?php echo $u['arrivalTime'] ?>
								</td>
								<td>
									<?php echo $u['price']?>
								</td>
								<td>
									<center><input type="submit" style="padding: 5px 5px; border-radius: 7px;" class="btn btn-success" name="bookNow"
										 value="Book Now"></center>
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
