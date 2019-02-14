<style>
	.container-fluid {
		background: linear-gradient( #0072ff,#00c6ff);
		border-radius: 20px;
		color: white;
		padding:20px;

	.row {
		padding: 20px;
	}
	#datatable thead,
	#datatable th,#datatable tbody{
		text-align: center;
		max-height:600px;
	}
	}

</style>
<br>
<div class="container-fluid col-10">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive">
				<table id="datatable" style="width:100%" class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>Journey No</th>
							<th>Route No</th>
							<th>Journey From</th>
							<th>Journey To</th>
							<th>Departure Time</th>
							<th>Arrival Time</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($schedule as $u){ ?>
						<tr>
							<td>
								<?php echo $u['journeyNo'] ?>
							</td>
							<td>
								<?php echo $u['routeNo'] ?>
							</td>
							<td>
								<?php echo $u['journeyFrom'] ?>
							</td>
							<td>
								<?php echo $u['journeyTo'] ?>
							</td>
							<td>
								<?php echo $u['departureTime'] ?>
							</td>
							<td>
								<?php echo $u['arrivalTime'] ?>
							</td>
							<td>
								<?php echo $u['price'] ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
