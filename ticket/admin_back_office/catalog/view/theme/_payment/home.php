<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card mt-3 border-0">
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<h4>แจ้งชำระเงิน</h4>
						</div>
					</div>
					<!-- <div class="row mb-3">
						<div class="col-md-4">
							<input type="date" class="form-control" placeholder="">
						</div>
						<div class="col-md-4">
							<input type="date" class="form-control" placeholder="">
						</div>
						<div class="col-md-4">
							<button class="btn btn-primary">Search</button>
						</div>
					</div> -->
					<div class="row">
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>ลำดับ.</th>
										<th>ชื่อบริษัท</th>
										<th>ชื่อแพคเกจ</th>
										<th>จำนวนเดือน</th> 
										<th>ชื่อลูกค้าที่แจ้ง</th>
										<th>ธนาคารที่โอนเข้า</th>
										<th>จำนวนเงินที่โอน</th>
										<th>วัน-เวลา ที่โอน</th>
										<th>รูป</th>
										<th class="text-center" width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$i=1; foreach($list as $val){ ?>
									<tr>
										<td><?php echo $i++; ?>.</td>
										<td><b><?php echo $val['company_name']?></b></td>
										<td><i><?php echo $val['package_name']?></i></td>
										<td><?php echo $val['payment_month']; ?></td>
										<td><?php echo $val['payment_customer']; ?></td>
										<td><?php echo $val['payment_bank']; ?></td>
										<td class="text-right"><?php echo number_format($val['payment_price'],2); ?></td>
										<td><?php echo $val['payment_date']; ?></td>
										<td><a href="<?php echo MURL;?>uploads_payment/<?php echo date_f($val['payment_date'],'Y_m_d'); ?>/<?php echo $val['payment_file']; ?>" target="_blank" class="btn btn-primary">รูป</a></td>
										<td class="text-center">
											<?php if($val['payment_status']==0){ ?>
											<select name="payment_status" class="form-control payment_status" id_payment="<?php echo $val['id_payment'];?>">
												<option value="0" <?php echo ($val['payment_status'] == '0'?'selected':''); ?>>ยังไม่ยืนยัน</option>
												<option value="1" <?php echo ($val['payment_status'] == '1'?'selected':''); ?>>ยืนยัน</option>
											</select>
											<?php }else{?>
											ยืนยันแล้ว
											<?php } ?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#payment').addClass('active');
	});
	$(document).on('change','.payment_status',function(e){
		var ele = $(this);
		$.ajax({
			url: 'index.php?route=payment/updateStatusPayment',
			type: 'POST',
			dataType: 'json',
			data: {
				id_payment: ele.attr('id_payment'),
				payment_status: ele.val()
			},
		})
		.done(function() {
			console.log("success");
		})
		.fail(function(a,b,c) {
			console.log(a);
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
</script>