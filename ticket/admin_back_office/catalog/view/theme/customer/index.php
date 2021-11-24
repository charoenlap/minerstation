<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row mb-3">
				<div class="col-md-12">
					<h4>ลูกค้า</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ลำดับ.</th>
								<th>ชื่อลูกค้า</th>
								<th>ติดต่อ</th>
								<th>ธนาคาร</th>
								<th>ยอดเงินคงเหลือ</th>
								<th class="text-center" width="10%"></th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1;foreach($customer as $val){ ?>
							<tr>
								<td><?php echo $i;?></td>
								<td>
									<div>
										<?php echo ($val['approve']==1?'<i class="fa fa-check text-success"></i>':'<i class="fa fa-times text-danger"></i>'); ?>
										<?php echo $val['name'].' '.$val['lname'];?></div>
									<small><?php echo $val['date_create'];?></small>
								</td>
								<td>
									<div><?php echo $val['phone'];?></div>
									<small><?php echo $val['email'];?></small>		
								</td>
								<td>
									<div><?php echo $val['bank_no'];?></div>
									<div><?php echo $val['bank_name'];?></div>
								</td>
								<td><?php echo $val['balance'];?></td>
								<td class="text-center">
									<!-- <a href="<?php echo route('customer/edit&id='.encrypt($val['id'])); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> -->
									<a href="<?php echo route('customer/del&id='.encrypt($val['id'])); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php $i++;} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#customer').addClass('active');
	});
</script>