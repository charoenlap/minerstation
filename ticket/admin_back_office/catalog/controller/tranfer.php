<?php  
	class TranferController extends Controller{
		public function index(){
			$data = array();
			$this->view('tranfer/index',$data);
		}
	}
?>