<?php 
	class ShopModel extends db {
		public function findShop($data=array()){
			$result = array();
			$shop = trim((isset($data['shop'])?$data['shop']:''));
			if(!empty($shop)){
				$query = $this->query("SELECT * FROM com_company WHERE company_url = '".$shop."'");
				$result['detail'] = $query->row;
				$id_company = $result['detail']['id_company'];

				$product = $this->query("SELECT * FROM com_product WHERE id_company = '".$id_company."'");
				$result['product'] = $product->rows;
			}
			return $result;
		}
		public function getTheme($id){
			$result = array();
			$query 	= $this->query("SELECT * FROM com_company WHERE id_company =".$id);
			$result = $query->row;
			if($result['company_layout'] == "0"){
				$result = "theme";
			}elseif($result['company_layout'] == "1"){
				$result = "themeTwo";
			}
			return $result;
		}
	}
?>