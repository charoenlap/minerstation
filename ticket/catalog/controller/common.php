<?php 
	class CommonController extends Controller {
	    public function header($data=array()) {
	    	$data['link_result'] = route('result');
	    	$data['link_contact'] = route('contact');
	    	$data['link_home'] = route('home');

	    	$data['link_login'] = '';
			$data['link_register'] = '';
			$data['link_forgot'] = '';
			$data['link_dashboard'] = ''; 
			$data['link_deposit'] = ''; 
			$data['link_password'] = ''; 
			$data['link_logout'] = ''; 
	    	$id = $this->getSession('id');
    		$email = $this->getSession('email');
    		if(!empty($id) and !empty($email)){
    			$data['link_dashboard'] = route('member/dashboard'); 
				$data['link_deposit'] = route('member/deposit'); 
				$data['link_widthdraw'] = route('member/widthdraw'); 
				$data['link_password'] = route('member/password'); 
				$data['link_logout'] = route('member/logout'); 
				$data['link_finance'] = route('member/finance'); 
				$data['link_ticket'] = route('member/ticket'); 
    		}else{
    			$data['link_login'] = route('login');
				$data['link_register'] = route('register');
				$data['link_forgot'] = route('forgot');
				
    		}
			$data['link_result'] = route('result'); 
			$data['link_help'] = route('help'); 
	    	$this->render('common/header',$data);
	    }
	    public function footer($data=array()){
	    	$data['link_result'] = route('result');
	    	$data['link_contact'] = route('contact');
	    	$data['link_home'] = route('home');

	    	$data['link_login'] = '';
			$data['link_register'] = '';
			$data['link_forgot'] = '';
			$data['link_dashboard'] = ''; 
			$data['link_deposit'] = ''; 
			$data['link_password'] = ''; 
			$data['link_logout'] = ''; 

			$data['link_condition'] = route('information/condition');
			$data['link_rule'] 		= route('information/rule');
	    	$id = $this->getSession('id');
    		$email = $this->getSession('email');
    		if(!empty($id) and !empty($email)){
    			$data['link_dashboard'] = route('member/dashboard'); 
				$data['link_deposit'] = route('member/deposit'); 
				$data['link_password'] = route('member/password'); 
				$data['link_logout'] = route('member/logout'); 
    		}else{
    			$data['link_login'] = route('login');
				$data['link_register'] = route('register');
				$data['link_forgot'] = route('forgot');
				
    		}
			$data['link_result'] = route('result'); 
			$data['link_help'] = route('help'); 
	    	$this->render('common/footer',$data);
	    }
	}
?>