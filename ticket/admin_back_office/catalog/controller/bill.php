<?php  
	class BillController extends Controller{
		public function index(){
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				$data = array();
				// $data['category'] = $this->model('master')->listCategory();
				// $data['deposit'] = $this->model('finance')->getDeposit()['deposit'];
				$data['lotto'] = $this->model('finance')->getLotto();
				$this->view('bill/index',$data);
			}else{
				redirect('home/login');
			}
		}
		public function getBill(){
			$result = array();
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				if(method_post()){
					$id_bill = decrypt(post('id_bill'));
					$result_bill = $this->model('finance')->getLottoDetail($id_bill);
					$result = array(
						'status' => 'success',
						'desc'	=> '',
						'result_bill' => $result_bill,
						'post'	=> $_POST,
						'id_bill' => $id_bill
					);
				}else{
					$result = array(
						'status' => 'failed',
						'desc'	=> 'Method not allow'
					);
				}
			}else{
				$result = array(
					'status' => 'failed',
					'desc'	=> 'กรุณาเข้าสู่ระบบใหม่อีกครั้ง'
				);
			}
			echo json_encode($result);
		}
	}
?>