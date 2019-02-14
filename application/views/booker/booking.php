<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bus Resv</title>

	<style>
		body {
	font-family: 'Roboto', sans-serif;
  background-color:#fafafa;
}
.front-indicator {
	width: 145px;
	margin: 5px 32px 15px 32px;
	background-color: white;	
	color: black;
	text-align: center;
	padding: 3px;
	border-radius: 5px;
}

.container {
	margin: 0 auto;
	width: 500px;
	text-align: left;
}
.booking-details {
	float: left;
	text-align: left;
	margin-left: 35px;
	font-size: 12px;
	position: relative;
	height: 401px;
}
.booking-details h2 {
	margin: 25px 0 20px 0;
	font-size: 17px;
}
.booking-details h3 {
	margin: 5px 5px 0 0;
	font-size: 14px;
}
div.seatCharts-cell {
	color: #182C4E;
	height: 25px;
	width: 25px;
	line-height: 25px;
	
}
div.seatCharts-seat {
	color: #FFFFFF;
	cursor: pointer;	
}
div.seatCharts-row {
	height: 35px;
}
div.seatCharts-seat.available {
	background-color: #65D8DC;

}
div.seatCharts-seat.available.ac-sleeper {
	background: url(vip.png);
	background-color: #FF5142;
}
div.seatCharts-seat.focused {
	background-color: #76B474;
}
div.seatCharts-seat.selected {
	background-color: #E6CAC4;
}
div.seatCharts-seat.unavailable {
	background-color: #472B34;
}
div.seatCharts-container {
	border-right: 1px dotted #adadad;
	width: 200px;
	padding: 20px;
	float: left;
}
div.seatCharts-legend {
	padding-left: 0px;
	position: absolute;
	bottom: 16px;
}
ul.seatCharts-legendList {
	padding-left: 0px;
}
span.seatCharts-legendDescription {
	margin-left: 5px;
	line-height: 30px;
}
.checkout-button {
	display: block;
	margin: 10px 0;
	font-size: 14px;
}
#selected-seats {
	max-height: 90px;
	overflow-y: scroll;
	overflow-x: none;
	width: 170px;
}


.container-fluid{
	background: linear-gradient( #0072ff,#00c6ff);
	border-radius:20px;
	margin-top:20px;
	color:white;
}
.row{
	padding:10px;
}
</style>
</head>

<body>
	<form action="confirm/" name="form1" id="form1" method="post" onsubmit="cek()">
		<input type="hidden" id="totals" name="totals" value="">
		<input type="hidden" id="dates" name="dates" value="">
		<input type="hidden" id="arrayseat" name="arrayseat" value="">
		<div class="container-fluid col-10">
			<div class="row">
				<label><b>Booking Date : </b></label><label id="date">&nbsp
					<?php echo $date; ?></label><br />
				<div class="col-12">
					<div class="card-box table-responsive">
						<div class="container">
							<div id="seat-map">
								<div class="front-indicator">Front</div>
							</div>
							<div class="booking-details">
								<h2>Booking Details</h2>
								<h3>Selected Seats (<span id="counter">0</span>):</h3>
								<ul id="selected-seats">
								</ul>
								Total: <b>Rp<span id="total">0</span></b>
								<button type='submit' name="seats" style="color:black">Checkout &raquo;</button>
								<div id="legend"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</form>


</body>

</html>
<script type="text/javascript">
	function cek() {
		var li = document.getElementById("selected-seats").getElementsByTagName("b").length;
		var arrayseat = Array.from(document.querySelectorAll('#selected-seats>li>b'), b => b.textContent);
		var totalfix = document.getElementById("total").innerText;
		var date = document.getElementById("date").innerText;
		document.form1.seats.value = li;
		document.form1.totals.value = totalfix;
		document.form1.dates.value = date;
		var myJSON = JSON.stringify(arrayseat);
		document.form1.arrayseat.value = myJSON;
	}

</script>
