<?php  
	class WidthdrawController extends Controller{
		public function index(){
			$id_admin = $this->getSession('id_admin');
			if($id_admin){
				$data = array();
				$data['widthdraw'] = $this->model('finance')->getWidthdraw()['widthdraw'];
				$this->view('widthdraw/index',$data);
			}else{
				redirect('home/login');
			}
		}
		public function addWidthdraw(){
			$result = array(
				'status' => 'failed'
			);
			if(method_post()){
				$id_transection = decrypt(post('id_transection'));

				$arr = array(
					'id_transection'	=> $id_transection
				);
				$result_add_widthdraw = $this->model('finance')->addWidthdraw($arr);
				if($result_add_widthdraw['result']=="success"){
					$result = array(
						'status' 	=> 'success',
						'desc'		=> 'ระบบได้ทำการหักยอดเงินฝากของผู้ใช้งานที่แจ้งเข้ามาเรียบร้อยแล้ว'
					);
				}else{
					$result = array(
						'status' => 'failed',
						'desc' 	=> $result_add_widthdraw['desc']
					);
				}
			}
			echo json_encode($result);
		}
	}
?>