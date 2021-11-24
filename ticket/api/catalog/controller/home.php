<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
	    	$data_select = array(
	    		'shop' => trim(get('shop'))
	    	);
	    	$data['shop'] 		= $this->model('shop')->findShop($data_select);
			$data['idCompany'] 	= $data['shop']['detail']['id_company'];
			$data['title']		= $data['shop']['detail']['company_name'];
			$layoutId		 	= $data['shop']['detail']['company_layout'];
			
			if($layoutId == "1"){
				$data['style'] 	= array(
					"p/assets/css/themeTwo.css",
				);
			}
			$data['script'] = array(
				"p/assets/js/main.js",
			);
	    	$this->view('home',$data);
	    }

	}
?>