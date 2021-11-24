<?php 
	class PaymentModel extends db {
		public function listPayment($data = array()){
			$result = array(
				'result' => 'fail'
			);
			$sql = "SELECT * FROM com_payment 
			LEFT JOIN com_company ON com_payment.id_company = com_company.id_company
			LEFT JOIN com_package ON com_payment.id_package = com_package.id_package
			ORDER by id_payment DESC";
			$result_payment = $this->query($sql);
			if($result_payment->num_rows > 0){
				$result = $result_payment->rows;
			}
			return $result;
		}
		public function updatePayment($data=array()){
			$result = array();
			$payment_status = (int)$data['payment_status'];
			$id_payment = (int)$data['id_payment'];
			$sql = "UPDATE com_payment SET payment_status = '".$payment_status."' WHERE id_payment = '".$id_payment."'";
			$result = $this->query($sql);

			// อนุมัติแบคเกจ
			$sql_package_payment = "SELECT * FROM com_payment WHERE id_payment = '".$id_payment."'";
			$result_package_payment = $this->query($sql_package_payment);
			if($result_package_payment->num_rows >0){
				$month = $result_package_payment->row['payment_month'];
				$date_now = date('Y-m-d H:i:s');
				$time = strtotime($date_now);
				$date_expired = date("Y-m-d", strtotime("+".$month." month", $time));
				$data_package = array(
					'id_package' 	=> $result_package_payment->row['id_package'],
					'id_company' 	=> $result_package_payment->row['id_company'],
					'id_user'	 	=> $result_package_payment->row['id_user'],
					'date_start' 	=> $date_now,
					'date_expired'	=> $date_expired,
					'status_approve'=> 1,
					'date_create'	=> $date_now
				);
				$result_insert = $this->insert('user_take_package',$data_package);
			}
			return $result;
		}
	}
?>