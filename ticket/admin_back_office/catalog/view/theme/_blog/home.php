<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card mt-3 border-0">
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<h4>Blog</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-right mb-1">
							<a href="<?php echo route('blog/add'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Blog</a>
						</div>
						<div class="col-md-12">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>N0.</th>
										<th>Title</th>
										<th>Detail</th>
										<th class="text-center" width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>001199</td>
										<td>Lorem ipsum dolor sit amet...</td>
										<td class="text-center">
											<a href="<?php echo route('blog/edit'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
											<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
										</td>
									</tr>
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
		$('#blog').addClass('active');
	});
</script>