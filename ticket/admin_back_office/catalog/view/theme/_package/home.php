<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card mt-3 border-0">
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<h4>แพคเกจ</h4>
						</div>
					</div>
					<div class="row">
						<!-- <div class="col-md-12 text-right mb-1">
							<a href="<?php echo route('package/add'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Package</a>
						</div> -->
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th width="10%" class="text-center">ลำดับ.</th>
										<th>ชื่อแพคเกจ</th>
										<th>ราคา</th>
										<th class="text-center" width="10%"></th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1;
										foreach($list_package as $val){
									 ?>
									<tr>
										<td><?php echo $i++; ?>.</td> 
										<td><?php echo $val['package_name']; ?></td>
										<td>
											<?php echo $val['package_price']; ?>
										</td>
										<td class="text-center">
											<?php /*<a href="<?php echo route('package/edit'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
											<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>*/ ?>
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
		$('#package').addClass('active');
	});
</script>