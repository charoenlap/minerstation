<div class="card">
	<div class="card-body">
		<div class="container">
			<div class="row mt-4">
				<div class="col-12">
					<div class="">
						<h4>การถอน</h4>
						<table class="table table-striped">
							<thead>
								<th>วันที่</th>
								<th>ID</th>
								<th>จำนวนเงิน</th>
								<th>สถานะ</th>
								<th>สถานะ</th>
								<th></th>
							</thead>
							<tbody>
								<?php foreach($widthdraw as $val){ ?>
								<tr>
									<td><?php echo $val['date_create']; ?></td>
									<td><?php echo $val['name'].' '.$val['lname']; ?></td>
									<td><?php echo $val['amount']; ?></td>
									<td><span class="text-status"><?php echo ($val['status']==0?'รอการยืนยัน':'เรียบร้อยแล้ว'); ?></span></td>
									<td>
										<?php if($val['status']==0){ ?>
										<a href="#" class="btn btn-xs btn-warning btn-transection" 
										id-transection="<?php echo encrypt($val['id']);?>"
										>ยืนยัน</a>
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
<div class="position-fixed top-0 right-0 p-3" style="z-index: 99999; right: 0; bottom: 0;">
	<div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	  <div class="toast-header">
	  	<i class="bi bi-arrow-bar-down"></i>
	    <strong class="mr-auto">ผลลัพธ์</strong>
	    <!-- <small>11 mins ago</small> -->
	    <!-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button> -->
	  </div>
	  <div class="toast-body"></div>
	</div>
</div>

<script>
	$(document).on('click','.btn-transection',function(e){
		var ele = $(this);
		ele.prop('disabled', true);
		ele.attr('aria-disabled', true);
		ele.addClass('disabled');
		
		$.ajax({
			url: 'index.php?route=widthdraw/addWidthdraw',
			type: 'POST',
			dataType: 'json',
			data: {
				id_transection: ele.attr('id-transection')
			},
		})
		.done(function(result) {
			console.log("success");
			if(result.status=='failed'){
				ele.prop('disabled', false);
				ele.attr('aria-disabled', false);
				ele.removeClass('disabled');

				$('.toast-body').text(result.desc);
				$('.toast-body').addClass('text-danger');
				$('.toast-body').removeClass('text-success');
				$('#toast').toast('show');
			}else{
				$('.toast-body').removeClass('text-danger');
				$('.toast-body').addClass('text-success');
				$('.toast-body').text(result.desc);
				$('#toast').toast('show');
				// setInterval(function(){ 
				// 	window.location='index.php?route=member/finance'; 
				// }, 3000);
				ele.text('เสร็จสิ้น');
				ele.addClass('btn-success');
				ele.removeClass('btn-warning');
				ele.parents('tr').find('.text-status').text('เรียบร้อยแล้ว');
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
</script>