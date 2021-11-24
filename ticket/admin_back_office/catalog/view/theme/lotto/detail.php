<div class="card">
	<div class="card-body">
		<form action="#" method="POST" id="form-lotto">
			<div class="container">
				<div class="row mt-4">
					<div class="col-12">
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?php echo route('lotto');?>">เลือกหมวดหมู่</a></li>
						    <li class="breadcrumb-item " aria-current="page">จัดการหวย</li>
						    <li class="breadcrumb-item active" aria-current="page"><?php echo $category['name'];?></li>
						  </ol>
						</nav>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12">
						<table class="table table-striped">
							<tr>
								<td class="" width="50%">
									<b><?php echo $category['name'];?></b>
								</td>
								<td colspan="2" class="">
									<div class="form-group">
							            <div class="form-group">
								            <div class="input-group date datetimepicker">
												<span class="input-group-addon btn btn-warning">
													<span class="fa fa-calendar"></span>
												</span>
												<input type='text' class="form-control" id="date" name="date"/>
											</div>
								         </div>
							         </div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-6">
							<table class="table table-striped" id="table-type">
								<?php 
								// var_dump($category['type']);
								if(empty($category['sub'])){ ?>
									<thead>
										<th >ผลการออกรางวัล.</th>
										<th colspan="2" class="text-end">
											<a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ เพิ่มผลการออกรางวัล</a>
										</th>
									</thead>
									<tbody>
									<?php 
									foreach($category['type'] as $type){ ?>
										<tr>
											<td class="bg-info">
												<?php echo $type['type']; ?>
											</td>
											<td class="bg-info">
												<input id="type_<?php echo $type['id_type'];?>" type="text" name="result[<?php echo $type['id_type'];?>]"
												class="form-control" value="<?php echo $type['result']; ?>">
											</td>
											<td class="text-end" width="10%">
												<a href="" class="btn btn-danger btn-del-type"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php 	} ?>
									</tbody>
							<?php 
								}else{
									foreach($category['sub'] as $v){ ?>
										<tr>
											<td colspan="3"><h5><?php echo $v['name'];?></h5></td>
										</tr>
										<?php foreach($v['type_sub'] as $type_sub){ ?>
										<tr>
											<td class="bg-info">
												<?php echo $type_sub['type'];?>
											</td>
											<td class="bg-info">
												<input id="sub_type_<?php echo $type_sub['id'];?>" type="text" name="result[<?php echo $type_sub['id'];?>]" 
												class="form-control" value="<?php echo $type_sub['result']; ?>">
											</td>
											<td class="text-end" width="10%">
												<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<?php } ?>
									<?php } ?>
							<?php } ?>
							</table>
					</div>
					<div class="col-md-6">
						<?php //var_dump($category['ratio']); ?>
						<table class="table table-striped" id="table-ratio">
							<thead>
								<th>กำหนดอัตราต่อรอง</th>
								<th colspan="2" class="text-end">
									<a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLabelRatio">+ เพิ่มอัตราต่อรอง</a>
								</th>
							</thead>
							<tbody>
								<?php 
								foreach($category['ratio'] as $ratio){ ?>
									<tr>
										<td>
											<?php echo $ratio['name']; ?>
										</td>
										<td>
											<input id="ratio_<?php echo $ratio['id_type'];?>" name="ratio[<?php echo $ratio['id_type'];?>]" 
												type="text" class="form-control" value="<?php echo $ratio['price']; ?>">
										</td>
										<td class="text-end" width="10%">
											<a href="#" class="btn btn-danger btn-del-ratio"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								<?php 	} ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12 d-grid gap-2">
						<a href="#" class="btn btn-primary btn-block" id="btn-submit">บันทึก</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="position-fixed top-0 right-0 p-3" style="z-index: 99999; right: 0; bottom: 0;height: 150px;">
	<div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	  <div class="toast-header">
	  	<i class="bi bi-arrow-bar-down"></i>
	    <strong class="mr-auto">ผลลัพธ์</strong>
	  </div>
	  <div class="toast-body"></div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">เพิ่มผลออกรางวัล</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<select name="listType" id="listType" class="form-control">
        <?php foreach($listType as $val){?>
        	<option value="<?php echo $val['id'];?>"><?php echo $val['type'];?></option>
        <?php } ?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" id="btn-add-type">เพิ่มประเภท</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="staticBackdropLabelRatio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelRatio" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">เพิ่มอัตราต่อรอง</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<select name="listRatio" id="listRatio" class="form-control">
        <?php foreach($listType as $val){?>
        	<option value="<?php echo $val['id'];?>"><?php echo $val['type'];?></option>
        <?php } ?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" id="btn-add-ratio">เพิ่มการต่อรอง</button>
      </div>
    </div>
  </div>
</div>

<link href="assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	$(document).on('click','#btn-submit',function(e){
		var form = $('#form-lotto');
		$.ajax({
			url: 'index.php?route=lotto/submitLotto&id_category=<?php echo $id_category;?>',
			type: 'POST',
			dataType: 'json',
			data: form.serialize(),
		})
		.done(function(result) {
			console.log(result);
			if(result.status=='failed'){
				$('.toast-body').text(result.desc);
				$('.toast-body').addClass('text-danger');
				$('.toast-body').removeClass('text-success');
				$('#toast').toast('show');
			}else{
				$('.toast-body').removeClass('text-danger');
				$('.toast-body').addClass('text-success');
				$('.toast-body').text(result.desc);
				$('#toast').toast('show');
			}
		})
		.fail(function(a,b,c) {
			console.log("error");
			console.log(a);
			console.log(b);
			console.log(c);
		})
		.always(function() {
			console.log("complete");
		});
		
		e.preventDefault();
	});
	$(document).on('click','.btn-del-type',function(e){
		var ele = $(this);
		ele.parents('tr').remove();
		e.preventDefault();
	});
	$(document).on('click','.btn-del-ratio',function(e){
		var ele = $(this);
		ele.parents('tr').remove();
		e.preventDefault();
	});
	$(document).on('click','#btn-add-type',function(e){
		var listType = $("#listType option:selected").text();
		var IDType = $('#listType').val();
		var html = '<tr>'
					+	'<td class="bg-info">'
						+listType
					+	'</td>'
					+	'<td class="bg-info">'
						+	'<input id="ratio_'+IDType+'" name="result['+IDType+']" '
							+'type="text" class="form-control" value="">'
					+	'</td>'
					+	'<td class="text-end" width="10%">'
						+	'<a href="#" class="btn btn-danger btn-del-type"><i class="fa fa-trash"></i></a>'
					+	'</td>'
				+	'</tr>';
		$('#table-type  tbody:last-child').append(html);
		$('#staticBackdrop').modal('hide');
	});
	$(document).on('click','#btn-add-ratio',function(e){
		var listRatio = $("#listRatio option:selected").text();
		var IDRatio = $('#listRatio').val();
		var html = '<tr>'
					+	'<td>'
						+listRatio
					+	'</td>'
					+	'<td>'
						+	'<input id="ratio_'+IDRatio+'" name="ratio['+IDRatio+']" '
							+'type="text" class="form-control" value="">'
					+	'</td>'
					+	'<td class="text-end" width="10%">'
						+	'<a href="#" class="btn btn-danger btn-del-ratio"><i class="fa fa-trash"></i></a>'
					+	'</td>'
				+	'</tr>';
		$('#table-ratio  tbody:last-child').append(html);
		$('#staticBackdropLabelRatio').modal('hide');
	});
	$(document).on('change','#date',function(e){
		var ele = $(this);
		$.ajax({
			url: 'index.php?route=lotto/getResultRatio',
			type: 'POST',
			dataType: 'json',
			data: {
				date: ele.val(),
				id_category: '<?php echo get('id_category');?>'
			},
		})
		.done(function(result) {
			console.log("success");
			console.log(result);
			if(result.status=='failed'){
				$('.toast-body').text(result.desc);
				$('.toast-body').addClass('text-danger');
				$('.toast-body').removeClass('text-success');
				$('#toast').toast('show');
			}else{
				$( result.ratio ).each(function( index,val ) {
				  $('#ratio_'+val.id).val(val.price);
				});
				$( result.type ).each(function( index,val ) {
				  $('#type_'+val.id).val(val.result);
				});
				console.log(result.sub);
				$( result.sub ).each(function( index,sub ) {
					$( sub.type_sub ).each(function( index,val ) {
				  		$('#sub_type_'+val.id).val(val.result);
				  	});
				});
				$('.toast-body').removeClass('text-danger');
				$('.toast-body').addClass('text-success');
				$('.toast-body').text(result.desc);
				$('#toast').toast('show');
			}
		})
		.fail(function(a,b,c) {
			console.log("error");
			console.log(a);
			console.log(b);
			console.log(c);
		})
		.always(function() {
			console.log("complete");
		});
	});
	$(document).ready(function(){
        $(".datetimepicker").datepicker({ 
        	format: 'yyyy-mm-dd' 
        });
    });
</script>