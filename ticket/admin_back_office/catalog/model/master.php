<?php 
	class MasterModel extends db {
		public function listCategory($data=array()){
			// $date = "2021-10-01";
			// $result = array();
			// $path_json = PATH_JSON.'/getCategory.json';
			// if(!isset($data['db'])){
				$sql = "SELECT * FROM b_category WHERE `status`=0 AND sub_category = 0";
				$category = $this->query($sql)->rows;

				foreach($category as $val){
					// $sub = array();

					// $sql_ratio = "SELECT *,b_type.type AS name FROM b_ratio LEFT JOIN b_type ON b_ratio.id_type = b_type.id WHERE id_category = '".$val['id']."' ";
					// 	$ratio = $this->query($sql_ratio)->rows;

					// $sql_sub = "SELECT * FROM b_category WHERE `status`=0 AND sub_category = '".$val['id']."'";
					// $category_sub = $this->query($sql_sub)->rows;
					// $result_cate_sub = array();
					// foreach($category_sub as $cs){
					// 	$sql_sub_in = "SELECT * FROM b_category_type 
					// 	LEFT JOIN b_type ON b_category_type.id_type = b_type.id 
					// 	WHERE `status`=0 
					// 	AND id_category = '".$cs['id']."' 
					// 	ORDER BY b_category_type.`order` ASC";
					// 	$type_sub = $this->query($sql_sub_in)->rows;
					// 	$result_cate_sub[] = array(
					// 		'name' => $cs['name'],
					// 		'type' => $type_sub
					// 	);
					// }
					// $type = array();
					// $sql_sub = "SELECT * FROM b_category_type 
					// LEFT JOIN b_type ON b_category_type.id_type = b_type.id 
					// LEFT JOIN (SELECT * FROM b_result WHERE `date` = '".$date."') result ON result.id_cate_type = b_category_type.id 
					// WHERE `status`=0 
					// AND id_category = '".$val['id']."' 
					// ORDER BY b_category_type.`order` ASC";
					// $type = $this->query($sql_sub)->rows;

					$result[] = array(
						'id' 	=> $val['id'],
						'name' 	=> $val['name'],
						'flag' 	=> $val['flag'],
						// 'sub'	=> $result_cate_sub,
					// 	'type'	=> $type,
					// 	'ratio' => $ratio
					);
				}
				// echo "<pre>";
				// var_dump($result);exit();
				// $fp = fopen($path_json, 'w');
				// fwrite($fp, json_encode($result));
				// fclose($fp);
			// }else{
			// 	$result = json_decode(file_get_contents($path_json), true);
			// }
			return $result;
		}
		public function getCategory($id_category=0,$date=''){
			if($date==''){
				$date = date('Y-m-d');
			}
			$result = array();
			$path_json = PATH_JSON.'/getCategory.json';
			if(!isset($data['db'])){
				$id_category = (int)$id_category;
				$sql = "SELECT * FROM b_category WHERE `status`=0 AND sub_category = 0 AND id = ".$id_category;
				$val = $this->query($sql)->row;

					$sub = array();

					$sql_ratio = "SELECT *,b_type.type AS name,b_ratio.id AS id FROM b_ratio LEFT JOIN b_type ON b_ratio.id_type = b_type.id WHERE id_category = '".$id_category."' ";
						$ratio = $this->query($sql_ratio)->rows;

					$sql_sub = "SELECT * FROM b_category WHERE `status`=0 AND sub_category = '".$id_category."'";
					$category_sub = $this->query($sql_sub)->rows;
					$result_cate_sub = array();
					foreach($category_sub as $cs){

						$sql_sub_in = "SELECT *,b_category_type.id AS id FROM b_category_type 
						LEFT JOIN b_type ON b_category_type.id_type = b_type.id 
						LEFT JOIN (SELECT * FROM b_result WHERE `date` = '".$date."') result ON result.id_cate_type = b_category_type.id 
						WHERE `status`=0 
						AND id_category = '".$cs['id']."' 
						ORDER BY b_category_type.`order` ASC";
						$type_sub = $this->query($sql_sub_in)->rows;
						// var_dump($type_sub);exit();
						$result_cate_sub[] = array(
							'id_type' => $cs['id'],
							'name' => $cs['name'],
							'type_sub' => $type_sub
						);
					}
					$type = array();
					$sql_sub = "SELECT *, b_category_type.id AS id FROM b_category_type 
					LEFT JOIN b_type ON b_category_type.id_type = b_type.id 
					LEFT JOIN (SELECT * FROM b_result WHERE `date` = '".$date."') result ON result.id_cate_type = b_category_type.id 
					WHERE `status`=0 
					AND id_category = '".$id_category."' 
					ORDER BY b_category_type.`order` ASC";
					$type = $this->query($sql_sub)->rows;

					$result = array(
						'status'=> 'success',
						'desc'	=> 'ค้นหาสำเร็จ',
						'id' 	=> $id_category,
						'name' 	=> $val['name'],
						'flag' 	=> $val['flag'],
						'sub'	=> $result_cate_sub,
						'type'	=> $type,
						'ratio' => $ratio
					);
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
		public function listType(){
			$result = array();
			$result = $this->query("SELECT * FROM b_type")->rows;
			return $result;
		}
		public function addRatio($data=array(),$id_category=0){
			$result = array();
			$query = $this->query('DELETE FROM b_ratio WHERE id_category='.(int)$id_category);
			foreach($data as $key => $val){

				$arr = array(
					'id_type'=> $key,
					'id_category' => $id_category,
					'price'=>$val
				);
				$this->insert('ratio',$arr);
			}
		}
		public function addType($data=array(),$date=''){
			if($date){
				$result = array();
				foreach($data as $key => $val){
					$query = $this->query("DELETE FROM b_result WHERE `date`= '".$date."' AND id_cate_type='".(int)$key."'");
					$arr = array(
						'id_cate_type'=> $key,
						'date' => $date,
						'result'=>$val
					);
					$this->insert('result',$arr);
				}
			}
		}
	}
?>