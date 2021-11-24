<div class="container-fluid">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Customer</a></li>
			<li class="breadcrumb-item active" aria-current="page">Customer Edit</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-md-12">
			<div class="card mt-3 border-0">
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<h4>Customer</h4>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<label for="">Customer Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="col-md-6">
							 <label for="">Detail</label>
							 <input type="text" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-right">
							<button class="btn btn-primary">Submit</button>
						</div>
					</div>
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