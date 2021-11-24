$(document).on('click','.btn-del-row',function(e){
	var count_row = $('#list_order tr').length;
	if(count_row>2){
		var tr = $(this).parents('tr');
		tr.remove();
	}
});
$(document).on('click','span',function(e){
	var ele = $(this);
	var val =ele.next().attr('name');
	console.log(val);
});
$(document).on('click','#addRowForm',function(e){
	console.log('btn add row');
	var count_row = $('table#list_order > tbody  > tr').length;
	
	var $table = $('table.table-list');
	$table.find('.select2-tag').select2('destroy');
	var new_line = $table.find('tr:eq(1)').clone();
	new_line.find("input:text").val('');
	// new_line.find("input:number").val('');
	new_line.find(".input-seq").val( ( count_row+1 ) );
	$table.append(new_line);

	// new_line.find('.select2-tag').select2('destroy');
	// $table.find('.select2-tag').select2({
	 //     tags: true,
	 //     width: 'resolve'
	 //   });
	$('.select2-tag').select2({
	    tags: true,
	    width: 'resolve'
	});
	e.preventDefault();
});
$(function(e){
   $('.select2-tag').select2({
        tags: true,
        width: 'resolve'
   });
});
$(document).on('change','#customer',function(e){
	var ele = $(this);
	$.ajax({
		url: 'index.php?route=api/getCustomer',
		type: 'GET',
		// dataType: 'json',
		data: { 
			id_customer: ele.val()
		},
	})
	.done(function(json) {
		// console.log(json);
		$('#customer_name').val(json.customer_name);
		$('#customer_address').val(json.customer_address);
		$('#customer_tax_no').val(json.customer_tax);
		$('#customer_branch_no').val(json.customer_branch);
		$('#customer_phone').val(json.customer_phone);
		$('#customer_email').val(json.customer_email);
		// $('#customer_project').val(json.customer_company);
		// console.log(json);
		// console.log("success");
	})
	.fail(function(xhr, ajaxOptions, thrownError) {
		console.log(xhr.responseText);
		console.log(xhr);
		console.log(ajaxOptions);
		console.log(thrownError);
	})
	.always(function() {
		// console.log("complete");
	});
	
});
$(function(e){
	$( "#sortable" ).sortable({
		handle: '.handle',
	  	update: function( event, ui ) {
	  	var count_order = 1;
	  	$('table#list_order > tbody  > tr').each(function(index, tr) { 
	  		$(this).find('.input-seq').val('');
		   	$(this).find('.input-seq').val(count_order);
		   	// console.log(count_order);
		   	count_order++;
		});
	  }
	});
});
// function check
$(document).on('submit','#formbill',function(e){
	// console.log('submit_form');
	$('#btn-form-bill-submit').attr('aria-disabled','true');
	$('#btn-form-bill-submit').addClass('disabled');
	var form = $(this);
	// // console.log(form.serialize());

	$.ajax({
		url: form.attr('action'),
		type: 'POST',
		// dataType: 'json',
		data: form.serialize(),
	})
	.done(function(data) {
		console.log(data);
		// // console.log('file/'+data.file);



		var html = '';
		html += '<div class="text-right">';
		html += '<a href="file/'+$('#type_bill').val()+'/'+data.file+'" target="_blank" class="btn btn-success" download="'+data.file+'"><i class="fas fa-download"></i> ดาวน์โหลด</a> &nbsp;';
		html += '<a href="#" class="btn btn-secondary disabled"><i class="fas fa-envelope"></i> ส่งอีเมล</a>';
		html += '</div>';
		html += '<div class="mt-4">';
		html += '<embed src="file/'+$('#type_bill').val()+'/'+data.file+'" width="100%" height="750px" />';
		html += '</div>';
		$('#model-result').modal('toggle');
		$('#model-result-text').html(html);
		$('#model-result-btn-submit').attr('data-url','index.php?route=accounting/'+$('#type_bill').val());
		$('#model-result-btn-submit').text('กลับ');



		// $('#model-result').modal({backdrop: 'static', keyboard: false});
		// $('#model-result-btn-submit').attr('data-url','index.php?route=home');
		// window.location = 'index.php?route=accounting/quotation';
		// // console.log(data);
		console.log("success");
	})
	.fail(function(xhr, ajaxOptions, thrownError) {
		console.log(xhr.responseText);
		console.log(xhr);
		console.log(ajaxOptions);
		console.log(thrownError);
	})
	.always(function() {
		// console.log("complete");
	});
	e.preventDefault();
});
// $(document).on('click','#btn-form-bill-submit-print',function(e){
// 	var form = $('#formbill');
// 	$.ajax({
// 		url: 'index.php?route=accounting/addQuotation',
// 		type: 'POST',
// 		dataType: 'json',
// 		data: form.serialize(),
// 	})
// 	.done(function(json) {
// 		// console.log(json.id_quotation);
// 		$.ajax({
// 			url: 'index.php?route=accounting/getDownloadQuotation',
// 			type: 'POST',
// 			dataType: 'json',
// 			data: {param1: 'value1'},
// 		})
// 		.done(function() {
// 			// console.log("success create pdf");
// 		})
// 		.fail(function(xhr, ajaxOptions, thrownError) {
// 			// console.log(xhr.responseText);
// 			// console.log(xhr);
// 			// console.log(ajaxOptions);
// 			// console.log(thrownError);
// 		})
// 		.always(function() {
// 			// console.log("complete");
// 		});
		
// 		// window.location = 'index.php?route=accounting/quotation';
// 		// // console.log(data);
// 		// console.log("success");
// 	})
// 	.fail(function(xhr, ajaxOptions, thrownError) {
// 		// console.log(xhr.responseText);
// 		// console.log(xhr);
// 		// console.log(ajaxOptions);
// 		// console.log(thrownError);
// 	})
// 	.always(function() {
// 		// console.log("complete");
// 	});
// 	e.preventDefault();
// });
$(document).on('change','.product_code',function(e){
	var ele = $(this);

	var product_code = ele.val();
	$.ajax({
		url: 'index.php?route=product/getProductByCode',
		type: 'GET',
		// dataType: 'json',
		data: {
			product_code : product_code
		},
	})
	.done(function(json) {
		console.log(json);
		var ele_product_name = ele.parents('tr').find('.product_name');

		ele_product_name.select2('destroy');

		ele_product_name.val(json.product_name);

		ele_product_name.select2({
		  tags: true,
		  width: 'resolve'
		});

		// console.log("success");
	})
	.fail(function(xhr, ajaxOptions, thrownError) {
		// console.log(xhr.responseText);
		// console.log(xhr);
		// console.log(ajaxOptions);
		// console.log(thrownError);
	})
	.always(function() {
		// console.log("complete");
	});
});

$(document).on('click','.radioVat', function(e){
	cal_total();
});
$(document).on('click','#check_tax',function(e){
	cal_total();
});
$(document).on('keyup','#percent_discount',function(e){
	cal_total();
});
$(document).on('change','#select_check_tax',function(e){
	cal_total();
});
$(document).on('change','#select_check_vat',function(e){
	cal_total();
});
$(document).on('keyup','.text-no,.text-price',function(e){
	var ele = $(this);
	var ele_no = ele.parents('tr').find('.text-no')
	var ele_price = ele.parents('tr').find('.text-price');
	var ele_sum = ele.parents('tr').find('.text-sum');

	var no 		= parseFloat( ele_no.val() );
	var price 	= parseFloat( ele_price.val() );
	// // console.log('no>' + no + ' price>' + price);
	var total 	= parseFloat(no * price);
	if(total>0){
		ele_sum.text(addCommas(total));
		cal_total();
	}else{
		ele_sum.text(0);
	}
});
function cal_total(){

	var total = 0;
	var vat_type = $( ".radioVat:checked" ).val();
	$('table#list_order > tbody  > tr').each(function(index, tr) { 
	   	var no 		= $(this).find('.text-no').val();
		var price 	= $(this).find('.text-price').val();
		if(no!='' && price!=''){
			total += parseFloat(no) * parseFloat(price);
		}
	});
	$('#sum_bill').text(addCommas(total));
	$('#input_sum_bill').val(total);
	var discount_percent = parseFloat($('#percent_discount').val());
	var discount = ((parseFloat(total)*discount_percent)/100);
	var total_discount = parseFloat(total)-discount;

	$('#text-discount').text(addCommas(parseFloat(discount)));
	$('#input_text_discount').val(discount);

	if(vat_type == 'ex'){
		$('#text_not_include_vat').text(addCommas(0));
		$('#input_text_not_include_vat').text(0);
		var vat = parseFloat( $('#select_check_vat').val() );
		var cal_vat = (total_discount * vat / 100 );

		$('#text_vat').text(addCommas(cal_vat));
		$('#input_text_vat').val(cal_vat);
		if($('#check_tax').prop("checked") == true){
			var select_check_tax = parseFloat($('#select_check_tax').val());
			var total_tax = (total_discount * select_check_tax / 100);
			var total_discount_tax_vat = total_discount - total_tax + cal_vat;
			var total_discount_vat = total_discount+cal_vat;

			$('#total_tax').text(addCommas(total_tax));
			$('#input_total_tax').val(total_tax);

			$('#net_total_vat').text(addCommas(total_discount_tax_vat));
			$('#input_net_total_vat').val(total_discount_tax_vat);

			$('#text-discount-total').text(addCommas(total_discount_vat));
			$('#input_text_discount_total').val(total_discount_vat);
		}
	}else{
		// จำนวนเงินรวม
		$('#text-discount-total').text(addCommas(total_discount));
		$('#input_text_discount_total').val(total_discount);

		var vat = parseFloat( $('#select_check_vat').val() );
		var cal_vat = (total_discount / parseFloat((100+vat)/100) );
		$('#text_not_include_vat').text(addCommas(cal_vat));
		$('#input_text_not_include_vat').val(cal_vat);

		var text_vat = cal_vat*parseFloat((vat)/100);
		$('#text_vat').text(addCommas(text_vat));
		$('#input_text_vat').val(text_vat);

		if($('#check_tax').prop("checked") == true){
			var select_check_tax = parseFloat($('#select_check_tax').val());
			var total_tax = cal_vat*select_check_tax/100;
			var total_tax_discount = total_discount - (cal_vat*select_check_tax/100);
			// var total_tax = ((total_discount-cal_vat) * select_check_tax / 100);
			$('#total_tax').text(addCommas(total_tax));
			$('#input_total_tax').val(total_tax);

			$('#net_total_vat').text(addCommas(total_tax_discount));//(total - total_tax + cal_vat);
			$('#input_net_total_vat').val(total_tax_discount);
			// $('#sum_bill').text(total_discount - (cal_vat*3/100));
			// // console.log(total+'_'+total_tax+'_'+cal_vat);
		}
	}
	// $.each('table#list-order  > tbody ', function(index, val) {
	// 	var no 		= $(this).find('.text-no').val();
	// 	var price 	= $(this).find('.text-price').val();
	// 	total = parseFloat(no) * parseFloat(price);
	// 	$('#sum_bill').text(total);
	// })
}

$(document).on('click',"input[type^='text']",function(e){
	var ele = $(this); 
	var val = $(this).val();
	ele.attr('placeholder',val);
	ele.val('');

});
$(function(e){
	var ele;
	var val;
	$("input[type^='text']").click(function(e){
		ele = $(this);
		val = $(this).val();
		ele.attr('placeholder',val);
	}).blur(function(e){
		val = ele.val();
		if(val==''){
			ele.val(ele.attr('placeholder'));
	}
	});

	// $('.select2-tag').select2({
	//   tags: true,
	//   width: 'resolve'
	// });
});