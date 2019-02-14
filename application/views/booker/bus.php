<style>
	.container-fluid {
		background: linear-gradient( #0072ff,#00c6ff);
		border-radius: 20px;
		color: white;
		padding:20px;

	}
	.row {
		padding: 20px;
	}
	
	#datatable th,#datatable tbody{
		text-align: center;
		
	}
	
	#datatable {
		width:90%; 
    margin-left:10%; 
	margin-right:20%;
	}


</style>
<br>
<div class="container-fluid col-7">
	<div class="row">
		<div class="col-12">
			<div class="card-box table-responsive">
				<table id="datatable" class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>Bus No</th>
							<th>Model</th>
							<th>Number Of Seat</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($searchallbus as $u){ ?>
						<tr>
							<td>
								<?php echo $u['busNo'] ?>
							</td>
							<td>
								<?php echo $u['busModel'] ?>
							</td>
							<td>
								<?php echo $u['numberOfSeat'] ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
