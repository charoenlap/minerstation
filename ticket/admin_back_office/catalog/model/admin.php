<?php 
	class AdminModel extends db {
		public function login($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$admin_user		= $this->escape($data['admin_user']);
			$admin_password	= $this->escape($data['admin_password']);
			$sql = "SELECT * FROM com_admin WHERE admin_user ='".$admin_user."' AND admin_password=MD5('".$admin_password."') AND admin_status=1";
			$result_login = $this->query($sql);
			// echo $result_login->sql;
			if($result_login->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'detail'	=> $result_login->row
				);
			}
			return $result;
		}
	}
?>