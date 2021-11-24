<?php 
	class MasterModel extends db {
		public function getDateLastedResult(){
			return $this->query("SELECT * FROM b_result ORDER BY date ASC limit 0,1")->row['date'];
		}
		public function getPackage($id){
			return $this->query("SELECT * FROM b_package WHERE id_category = ".(int)$id)->rows;
		}
		public function getBank(){
			return $this->query("SELECT * FROM b_bank")->rows;
		}
		public function getCategory($data=array()){
			$date = (isset($data['date'])?$data['date']:date('Y-m-d'));
			$result = array();
			$path_json = PATH_JSON.'/getCategory.json';
			if(!isset($data['db'])){
				$sql = "SELECT * FROM b_category WHERE `status`=0 AND sub_category = 0 ORDER BY `order_by` ASC";
				$category = $this->query($sql)->rows;
				$last_date = '';
				foreach($category as $val){
					$sub = array();
					$sql_last_date = "SELECT * FROM b_result WHERE id_cate_type = '".$val['id']."' ORDER BY date ASC limit 0,1";
					$query_last_date = $this->query($sql_last_date);
					if($query_last_date->num_rows){
						$last_date = $query_last_date->row['date'];
					}

					$sql_sub = "SELECT * FROM b_category WHERE `status`=0 AND sub_category = '".$val['id']."'";
					$category_sub = $this->query($sql_sub)->rows;
					$result_cate_sub = array();
					foreach($category_sub as $cs){
						$sql_sub_in = "SELECT * FROM b_category_type 
						LEFT JOIN b_type ON b_category_type.id_type = b_type.id 
						LEFT JOIN (SELECT * FROM b_result WHERE `date` = '".$date."') result ON result.id_cate_type = b_category_type.id 
						WHERE `status`=0 
						AND id_category = '".$cs['id']."' 
						ORDER BY b_category_type.`order` ASC";
						$type_sub = $this->query($sql_sub_in)->rows;
						$result_cate_sub[] = array(
							'id' 	=> $cs['id'],
							'name' 	=> $cs['name'],
							'flag' 	=> $cs['flag'],
							'name' 	=> $cs['name'],
							'type' 	=> $type_sub
						);
					}
					$type = array();
					$sql_sub = "SELECT * FROM b_category_type 
					LEFT JOIN b_type ON b_category_type.id_type = b_type.id 
					LEFT JOIN (SELECT * FROM b_result WHERE `date` = '".$date."') result ON result.id_cate_type = b_category_type.id 
					WHERE `status`=0 
					AND id_category = '".$val['id']."' 
					ORDER BY b_category_type.`order` ASC";
					$type = $this->query($sql_sub)->rows;

					$result[] = array(
						'id' 			=> $val['id'],
						'name' 			=> $val['name'],
						'flag' 			=> $val['flag'],
						'sub'			=> $result_cate_sub,
						'type'			=> $type,
						'date_close' 	=> $val['date_close'],
						'column' 		=> $val['column'],
						'last_date' 	=> $last_date
					);
				}
				// echo "<pre>";
				// var_dump($result);exit();
				$fp = fopen($path_json, 'w');
				fwrite($fp, json_encode($result));
				fclose($fp);
			}else{
				$result = json_decode(file_get_contents($path_json), true);
			}
			return $result;
		}
		public function getCategoryDetail($id){
			$result = array();
			$sql = "SELECT * FROM b_category WHERE `status`=0 AND id = ".(int)$id;
			$result = $this->query($sql)->row;
			return $result;
		}
	}
?>