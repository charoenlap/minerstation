<?php 
	class PackageModel extends db {
		public function listPackage($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT * FROM com_package 
			ORDER by id_package DESC";
			$result_package = $this->query($sql);
			if($result_package->num_rows > 0){
				$result = $result_package->rows;
			}
			return $result;
		}
	}
?>