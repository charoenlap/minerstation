<?php 
	class DashboardModel extends db {
		public function getTotalWidthDraw($data = array()){
			$where = '';
			if(isset($data['date'])){
				$where .= " AND date_create >= '".$date."'";
			}
			$result = array();
			$sql = "SELECT SUM(amount) AS widthdraw FROM b_transection WHERE `type` = '1' AND `status`=1 ".$where;
			$result = (float)$this->query($sql)->row['widthdraw'];
			return $result;
		}
		public function getTotalDeposit($data = array()){
			$where = '';
			if(isset($data['date'])){
				$where .= " AND date_create >= '".$date."'";
			}
			$result = array();
			$sql = "SELECT SUM(amount) AS deposit FROM b_transection WHERE `type` = '0' AND `status`=1 ".$where;
			$result = (float)$this->query($sql)->row['deposit'];
			return $result;
		}
		public function getTotalBill($data = array()){
			$where = " WHERE id <> '' ";
			if(isset($data['date'])){
				$where .= " AND date_create >= '".$date."'";
			}
			if(isset($data['status'])){
				$where .= " AND `status` = '".$data['status']."'";
			}
			$result = array();
			$sql = "SELECT count(id) AS bill FROM b_lotto_bill ".$where;
			$result = (float)$this->query($sql)->row['bill'];
			return $result;
		}
		public function getTotalCustomer($data = array()){
			$where = " WHERE id <> '' ";
			if(isset($data['date'])){
				$where .= " AND date_create >= '".$date."'";
			}
			// if($data['status']){
				$where .= " AND `del` >= '0'";
			// }
			$result = array();
			$sql = "SELECT count(id) AS customer FROM b_user ".$where;
			$result = (float)$this->query($sql)->row['customer'];
			return $result;
		}
	}
?>