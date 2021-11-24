<?php  
	class paymentController extends Controller{
		public function home(){
			$payment = $this->model('payment');
			$data['list'] = $payment->listPayment();
			$this->view('payment/home',$data);
		}
		public function updateStatusPayment(){
			if(method_post()){
				$payment = $this->model('payment'); 
				$data_update = array(
					'id_payment' 		=> post('id_payment'),
					'payment_status'	=> post('payment_status')
				);
				$result = $payment->updatePayment($data_update);
				$this->json($result);
			}
		}
	}
?>