$(function(e){
	$('#register').addClass('active');
});
$(document).on('click','#btn-view-password',function(e){
	var ele = $('#user_password');
	console.log('a');
	if(ele.attr('type')=="password"){
		ele.attr('type','text');
	}else{
		ele.attr('type','password');
	}
	e.preventDefault();
}); 