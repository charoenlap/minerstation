<?php 
	class DashboardController extends Controller {
	    public function index() {
	    	$data = array();
	    	
 	    	$this->view('dashboard/dashboard',$data);
	    }
	}
?>