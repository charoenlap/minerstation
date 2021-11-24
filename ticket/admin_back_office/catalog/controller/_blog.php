<?php  
	class blogController extends Controller{
		public function home(){
			$this->view('blog/home');
		}
		public function add(){
			$this->view('blog/add');
		}
		public function edit(){
			$this->view('blog/edit');
		}
	}
?>