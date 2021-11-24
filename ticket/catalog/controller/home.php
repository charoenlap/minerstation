<?php 
	class HomeController extends Controller {
	    public function index() {
	    	$data = array();
	    	
	    	$style = array(
	    		'assets/home.css'
	    	);
	    	$data['style'] 	= $style;
	    	$data['title'] = "LotRich";
	    	$data['descreption'] = "";
	    	
 	    	$this->view('home',$data); 
	    }
	}
?>