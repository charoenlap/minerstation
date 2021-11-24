<?php  
	class SystemController extends Controller{
		public function index(){
			$data = array();
			$this->view('system/index',$data);
		}
	}
?>