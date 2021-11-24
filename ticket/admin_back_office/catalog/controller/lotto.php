<?php  
	class LottoController extends Controller{
		public function index(){
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				$data = array();
				$data['category'] = $this->model('master')->listCategory();
				// $data['deposit'] = $this->model('finance')->getDeposit()['deposit'];
				$this->view('lotto/index',$data);
			}else{
				redirect('home/login');
			}
		}
		public function categoryDetail(){
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				$id_category = (int)decrypt(get('id_category'));
				$data = array();
				$data['category'] 	= $this->model('master')->getCategory($id_category);
				$data['listType']	= $this->model('master')->listType();
				$data['id_category']= get('id_category');
				// $data['deposit'] = $this->model('finance')->getDeposit()['deposit'];
				$this->view('lotto/detail',$data);
			}else{
				redirect('home/login');
			}
		}
		public function getResultRatio(){
			$result = array(
				'status' => 'failed',
				'desc'	=> ''
			);
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				$id_category 	= (int)decrypt(post('id_category'));
				$date 			= post('date');
				$result = $this->model('master')->getCategory($id_category,$date);
			}else{
				$result = array(
					'status' => 'failed',
					'desc'	=> 'กรุณาเข้าสู่ระบบใหม่อีกครั้ง'
				);
			}
			echo json_encode($result);
		}
		public function submitLotto(){
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				if(method_post()){
					$result_text_type = '';
					$id_category = (int)decrypt(get('id_category'));
					$date = post('date');
					$ratio = post('ratio');
					$result_ratio = $this->model('master')->addRatio($ratio,$id_category);
					if(!empty($date)){
						$result = post('result');
						$result_type = $this->model('master')->addType($result,$date);
						$result_text_type = 'เพิ่มเรียบร้อย';
					}else{
						$result_text_type = 'ไม่มีวันที่';
					}
					$result = array(
						'status' 		=> 'success',
						'desc'			=> $result_text_type,
						'post'			=> $_POST,
						'id_category'	=>$id_category
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