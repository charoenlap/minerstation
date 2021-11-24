<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card mt-3 border-0">
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<h4>บริษัท</h4>
						</div>
					</div>
					<!-- <div class="row mb-3">
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="company id">
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="name">
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
										<th>เบอร์โทรศัพท์</th>
										<th>วันที่สมัคร</th>
										<th>ยืนยัน</th>
										<th class="text-center" width="10%"></th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1;
										foreach($list_company as $val){
									 ?>
									<tr>
										<td><?php echo $i++; ?>.</td> 
										<td><?php echo $val['company_name']; ?></td>
										<td><?php echo $val['company_tel']; ?></td>
										<td><?php echo $val['company_date_create']; ?></td>
										<th>
											<?php echo ($val['company_verify']==0?'ยังไม่ยืนยัน':'ยืนยันแล้ว'); ?>
										</th>
										<td class="text-center">
											<?php /*<a href="<?php echo route('company/edit'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
											<button  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>*/ ?>
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
		$('#company').addClass('active');
	});
</script>