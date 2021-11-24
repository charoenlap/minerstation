<div class="container-fluid mt-3">
	<div class="row mt-4">
		<div class="col-md-12">
			<h4>ภาพรวม</h4>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-6">
			  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  			  <div id="donutchart_money"></div>
		</div>
		<div class="col-md-6">
			  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  			  <div id="donutchart_customer"></div>
		</div>
	</div>
	<hr>
	<!-- <form action="" method="POST">
		<div class="row">
			<div class="col-2">
				<input type="text" name="daterange" value="" class="form-control"/>
			</div>
			<div class="col-2">
				<div class="d-grid ">
					<input type="button" class="btn btn-block btn-primary" value="ค้นหาสรุป">
				</div>
			</div>
		</div>
	</form> -->
	<div class="row mt-4">
		<div class="col-md-3 ">
			<div class="card ">
				<div class="card-body">
					<h2 class="text-center"><span class="text-success"><?php echo $customer;?></span> </h2>
					<h4 class="text-center">ลูกค้า (คน)</h4>
				</div>
			</div>
		</div>
		<div class="col-md-3 ">
			<div class="card ">
				<div class="card-body">
					<h2 class="text-center"><span class="text-success"><?php echo number_format($deposit);?></span> </h2>
					<h4 class="text-center">ยอดฝาก (บาท)</h4>
				</div>
			</div>
		</div>
		<div class="col-md-3 ">
			<div class="card ">
				<div class="card-body">
					<h2 class="text-center"><span class="text-danger"><?php echo number_format($widthdraw);?></span> </h2>
					<h4 class="text-center">ยอดถอน (บาท)</h4>
				</div>
			</div>
		</div>
		
		<div class="col-md-3 ">
			<div class="card ">
				<div class="card-body">
					<h2 class="text-center"><span class="text-success"><?php echo number_format($bill);?></span> </h2>
					<h4 class="text-center">จำนวนโพย</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row mt-4">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4>แจ้งโอน</h4>
					<table class="table table-striped">
						<thead>
							<th>วันที่</th>
							<th>ID</th>
							<th>จำนวนเงิน</th>
							<th>สถานะ</th>
							<th></th>
						</thead>
						<tbody>
							<tr>
								<td>2021-10-09 19:10:29</td>
								<td>testid</td>
								<td>200.25</td>
								<td>รอการยืนยัน</td>
								<td><a href="#">ยืนยัน</a></td>
							</tr>
							<tr>
								<td>2021-10-09 19:10:29</td>
								<td>testid</td>
								<td>200.25</td>
								<td>รอการยืนยัน</td>
								<td><a href="#">ยืนยัน</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> -->
	
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript">
	$(function() {
	  $('input[name="daterange"]').daterangepicker({
	    opens: 'left',
	    locale: {
	      format: 'YYYY-MM-DD'
	    }
	  }, function(start, end, label) {
	    // console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	  });
	});
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'เฉพาะวันนี้'],
          ['ฝาก',     <?php echo $deposit;?>],
          ['ถอน',      <?php echo $widthdraw;?>],
        ]);

        var options = {
          title: 'ยอดฝาก/ถอน',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart_money'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'รวมทั้งหมด'],
          ['ฝาก',     <?php echo $deposit;?>],
          ['ถอน',      <?php echo $widthdraw;?>],
        ]);

        var options = {
          title: 'ยอดฝากถอนทั้งหมด',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart_customer'));
        chart.draw(data, options);
      }
    </script>