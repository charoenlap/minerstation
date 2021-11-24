<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array(); 
	    	$id_admin = $this->getSession('id_admin');
	    	if($id_admin){
	    		$data['widthdraw'] = $this->model('dashboard')->getTotalWidthDraw();
	    		$data['deposit'] = $this->model('dashboard')->getTotalDeposit();
	    		$data['bill'] = $this->model('dashboard')->getTotalBill();
	    		$data['customer'] = $this->model('dashboard')->getTotalCustomer();
	    		$data['bill_complete'] = $this->model('dashboard')->getTotalBill(array('status'=>1));
	    		$data['bill_uncomplete'] = $this->model('dashboard')->getTotalBill(array('status'=>0));

				$data['date_start'] = date('Y-m-d');
	    		$data['date_end'] = date('Y-m-d');
	    		$this->view('home',$data);
	    	}else{
	    	 	redirect('home/login');
	    	}
	    }
	    public function login(){
	    	$data = array();
	    	if(method_post()){
	    		$admin = $this->model('admin');
	    		$data_login = array(
	    			'admin_user'		=> post('user'),
					'admin_password'	=> post('password'),
	    		);
	    		$result_login = $admin->login($data_login);
	    		if($result_login['result']=='success'){
	    			$this->setSession('id_admin',$result_login['detail']['id_admin']);
	    			redirect('home');
	    		}else{
	    			redirect('home/login&result=fail');
	    		}
	    	}
	    	$data['action'] = route('home/login');
	    	$this->render('login',$data);
	    }
	    public function logout(){
	    	$this->rmSession('id_admin');
	    	redirect('home/login');
	    }
	}
?>