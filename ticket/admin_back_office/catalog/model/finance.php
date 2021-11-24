<?php 
	class FinanceModel extends db {
		public function getDeposit($data = array()){
			$result = array(
				'result' => 'failed'
			);
			$sql = "SELECT *,b_transection.id AS id,b_transection.date_create AS date_create FROM b_transection LEFT JOIN b_user ON b_transection.id_user = b_user.id WHERE `type` = 0 ORDER BY `b_transection`.`status` ASC, b_transection.date_create ASC";
			$result_deposit = $this->query($sql);
			if($result_deposit->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'deposit'	=> $result_deposit->rows
				);
			}
			return $result;
		}
		public function addDeposit($data=array()){
			$id_transection = (int)$data['id_transection'];
			
			$sql_check_transection = "SELECT * FROM b_transection WHERE id = ".$id_transection." AND status=0";
			$query_check_transection = $this->query($sql_check_transection);
			if($query_check_transection->num_rows > 0){
				$sql = "UPDATE b_transection SET `status` = '1' , date_modify = '".date('Y-m-d H:i:s')."' WHERE id = '".$id_transection."'";
				$query = $this->query($sql);
				$id_user = $query_check_transection->row['id_user'];
				$balance = $query_check_transection->row['amount'];

				$sql = "UPDATE b_user SET balance = balance + ".$balance." WHERE id = '".$id_user."'";
				$query = $this->query($sql);

				$result = array(
					'result' 			=> 'success',
					'desc'				=> '',
					'balance' 			=> $balance,
					'id'				=> $id_user,
					'id_transection'	=> $id_transection
				);
			}else{
				$result = array(
					'result' 	=> 'failed',
					'desc'		=>	'Transection fail'
				);
			}
			return $result;
		}
		public function getWidthdraw($data = array()){
			$result = array(
				'result' => 'failed'
			);
			$sql = "SELECT *,b_transection.id AS id,b_transection.date_create AS date_create FROM b_transection LEFT JOIN b_user ON b_transection.id_user = b_user.id WHERE `type` = 1 ORDER BY `b_transection`.`status` ASC, b_transection.date_create ASC";
			$result_widthdraw = $this->query($sql);
			if($result_widthdraw->num_rows > 0){
				$result = array(
					'result' 	=> 'success',
					'widthdraw'	=> $result_widthdraw->rows
				);
			}
			return $result;
		}
		public function addWidthdraw($data=array()){
			$id_transection = (int)$data['id_transection'];
			
			$sql_check_transection = "SELECT * FROM b_transection WHERE id = ".$id_transection." AND status=0";
			$query_check_transection = $this->query($sql_check_transection);
			if($query_check_transection->num_rows > 0){
				$sql = "UPDATE b_transection SET `status` = '1' , date_modify = '".date('Y-m-d H:i:s')."' WHERE id = '".$id_transection."'";
				$query = $this->query($sql);
				$id_user = $query_check_transection->row['id_user'];
				$balance = $query_check_transection->row['amount'];

				$sql = "UPDATE b_user SET balance = balance - ".$balance." WHERE id = '".$id_user."'";
				$query = $this->query($sql);

				$result = array(
					'result' 			=> 'success',
					'desc'				=> '',
					'balance' 			=> $balance,
					'id'				=> $id_user,
					'id_transection'	=> $id_transection
				);
			}else{
				$result = array(
					'result' 	=> 'failed',
					'desc'		=>	'Transection fail'
				);
			}
			return $result;
		}
		public function getLotto(){
			$result = array();
			$sql = "SELECT *,b_lotto_bill.id AS id,b_lotto_bill.date_create AS date_create,b_category.name as category_name,b_lotto_bill.status AS status FROM b_lotto_bill 
						LEFT JOIN b_category ON b_lotto_bill.id_category = b_category.id
						LEFT JOIN b_user ON b_lotto_bill.id_user = b_user.id 
						ORDER BY b_lotto_bill.date_create DESC";
			$result = $this->query($sql)->rows;
			return $result;
		}
		public function getLottoDetail($id=0){
			$result = array();
			$sql = "SELECT * FROM b_lotto WHERE id_bill = '".(int)$id."'
						ORDER BY b_lotto.date_create DESC";
			$result = $this->query($sql)->rows;
			return $result;
		}
	}
?>