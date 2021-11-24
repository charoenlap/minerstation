<div class="card">
	<div class="card-body">
		<div class="container">
			<div class="row mt-4">
				<div class="col-12">
					<h4>เลือกหมวดหมู่</h4>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-12">
					<table class="table table-striped">
						<thead>
							<th>##</th>
							<th>ชื่อหมวดหมู่</th>
							<th class="text-center">จัดการ</th>
						</thead>
						<tbody>
							<?php $i=1;foreach($category as $val){ ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $val['name'];?></td>
								<td class="text-end">
									<a href="<?php echo route('lotto/categoryDetail&id_category='.encrypt($val['id']));?>" class="btn btn-xs btn-warning">
										<i class="fa fa-edit"></i> แกไ้ข
									</a>
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