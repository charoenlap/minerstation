<?php  
	class companyController extends Controller{
		public function home(){
			$company = $this->model('company');
			$data['list_company'] = $company->listCompany();
			$this->view('company/home',$data);
		}
		public function edit(){
			$this->view('company/edit');
		}
	}
?>