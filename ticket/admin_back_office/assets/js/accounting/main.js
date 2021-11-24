$(document).on('click','.btn-delBill',function(e){
   var ele = $(this);
   var url = ele.attr('data-link');
   console.log(url);
   $.ajax({
      url: url,
      type: 'POST',
      // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
      data: {
         id: ele.attr('id')
      },
   })
   .done(function(html) {
      console.log(html); 
      ele.parents('tr').remove();
      window.location.reload();
      console.log("success");
   })
   .fail(function(a,b,c) {
     console.log(a);
     console.log(b);
     console.log(c);
      console.log("error");
   })
   .always(function() {
      console.log("complete");
   });
   e.preventDefault();
});
$(document).on('click','.btn-email',function(e){
  var email_txt_customer   = $(this).attr('data-customer');
  var email_txt_price      = $(this).attr('data-price');
  var email_txt_doc_no     = $(this).attr('data-doc-no');

  $('#email_txt_customer').text(email_txt_customer);
  $('#email_txt_price').text(email_txt_price);
  $('#email_txt_doc_no').text(email_txt_doc_no);
});
$(document).on('submit','#form-submit-email',function(e){
  var email_txt_doc_no = $('#email_txt_doc_no').text();
  var email = $('#txt_email').val();
  var type_bill = $('#type_bill').val();
  // console.log(type_bill);
  $('#btn-email').attr('aria-disabled','true');
  $('#btn-email').addClass('disabled');
  $('#btn-email').text('กรุณารอซักครู่...');
  if(email != ''){
    $.ajax({
      url: 'index.php?route=api/sendEmail',
      type: 'POST',
      dataType: 'json',
      data: {
        doc_no: email_txt_doc_no,
        type_bill: type_bill,
        email: email
      },
    })
    .done(function(json) {
      if(json.result=='success'){
        $('#emailModel').modal({backdrop: 'static', keyboard: false});
        $('#btn-email').attr('aria-disabled','false');
        $('#btn-email').removeClass('disabled');
        $('#emailModel').modal('toggle');
        $('#btn-email').text('ส่ง');
      }
      // console.log(html);
      console.log("success");
    })
    .fail(function(a,b,c) {
      console.log(a);
      console.log(b);
      console.log(c);
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  }
  e.preventDefault();
});