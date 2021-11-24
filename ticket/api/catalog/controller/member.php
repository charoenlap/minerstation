<?php 
	class MemberController extends Controller {
	    public function login() {
			$data = array();
			// PATH_MODEL_CATALOG
			// ROOT_PATH_CATALOG
			$user = $this->model('user',ROOT_PATH_CATALOG);
			$data = array(
				'user_email' 	=> post('user_email'),
				'user_password' => post('user_password'),
				'id_user_fb' 	=> post('id_user_fb')
			);
			$result = $user->login($data);
	    	$this->json($result);
	    }

	}
?>