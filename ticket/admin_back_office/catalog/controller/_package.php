<?php  
	class packageController extends Controller{
		public function home(){
			$package = $this->model('package');
			$data['list_package'] = $package->listPackage();
			$this->view('package/home',$data);
		}
		public function add(){
			$this->view('package/add');
		}
		public function edit(){
			$this->view('package/edit');
		}
	}
?>