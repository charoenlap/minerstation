<?php 
	class CustomerModel extends db {
		public function listCustomer($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT * FROM com_customer 
			ORDER by id_customer DESC";
			$result_customer = $this->query($sql);
			if($result_customer->num_rows > 0){
				$result = $result_customer->rows;
			}
			return $result;
		}
	}
?>