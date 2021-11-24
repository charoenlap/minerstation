<?php 
	class CompanyModel extends db {
		public function listCompany($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT * FROM com_company 
			ORDER by id_company DESC";
			$result_company = $this->query($sql);
			if($result_company->num_rows > 0){
				$result = $result_company->rows;
			}
			return $result;
		}
	}
?>