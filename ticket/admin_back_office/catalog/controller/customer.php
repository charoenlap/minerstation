<?php
	class CustomerController extends Controller{
		public function index(){
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				$data = array();
				// $data['deposit'] = $this->model('finance')->getDeposit()['deposit'];
				$data['customer'] = $this->model('user')->listUser();
				$this->view('customer/index',$data);
			}else{
				redirect('home/login');
			}
		}
		// public function edit(){
		// 	$id_admin = $this->getSession('id_admin');
		// 	if($id_admin){
		// 		$this->view('customer/edit');
		// 	}
		// }
		public function del(){
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				$id = decrypt(get('id'));
				$data['customer'] = $this->model('user')->delUser($id);
			}
		}
	}  
?>