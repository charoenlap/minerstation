<?php 
	class ApiController extends Controller {
	    public function girl_not_leave_2_day() {
	    	$data = array(
	    		'no'=>'',
	    		'nickname'=>'',
	    		'include'=>''
	    	);
	    	$data['title'] 		= "List girls leave work 2 days";
	    	$girls = $this->model('girl');
	    	$page = (isset($_GET['page'])?$_GET['page']:1);
	    	$data_search = array(
	    		'start' => ($page-1)*DEFAULT_LIMIT_PAGE,
	    		'end'	=> DEFAULT_LIMIT_PAGE
 	    	);
 	    	$data_search['type_view'] = 'not_work_time_2_day';
 	    	// $data_search['include'] = 2;
 	    	if(method_post()){
 	    		if(post('no')){
 	    			$data_search['no'] = post('no');
 	    			$data['no'] = post('no');
 	    		}
 	    		if(post('nickname')){
 	    			$data_search['nickname'] = post('nickname');
 	    			$data['nickname'] = post('nickname');
 	    		}
 	    		if(post('include')){
 	    			$data_search['include'] = post('include');
 	    			$data['include'] = post('include');
 	    		}
 	    		$data_search['start'] = 0;
 	    		$data_search['end'] = 50;
 	    		$list_detail = $girls->getList($data_search);
 	    		$data['paging'] = 0;
 	    	}else{
 	    		$list_detail = $girls->getList($data_search);
 	    		$data['paging'] = ceil($list_detail['total_girls']/DEFAULT_LIMIT_PAGE);
 	    	}
 	    	
	    	$data['list_girls'] = $list_detail['list_girls'];
	    	$data['total_girls'] = $list_detail['total_girls'];

	    	$setting = $this->model('setting');
			$setting_result = $setting->getSetting();
			$mailTo = $setting_result['setting_email_admin'];
			$msg = '';
			$msg .= 'Total girl not work 2 days : '.$data['total_girls'];

			$subject = 'Girl not work 2 days';
			
			sendmailSmtp($mailTo,$msg,$subject);

			// var_dump($data['list_girls']);
			// foreach($data['list_girls'] as $val){
			// 	$msg .= '
			// 	<p>No.'.$val['girls_no'].' '.$val['girls_nickname'].'</p>
			// 	<a href="'.MURL.'girl/profile&girls_id='.$val['girls_id'].'">Profile</a>';
			// }
	    	// $data['link_paging'] = route('girl/list_leave_2_day&page=');
	    	// $data['page'] = $page;
	    	// $data['link_profile'] = route('girl/profile&girls_id=');
	    	// $data['action'] = route('girl/list_leave_2_day');
 	    // 	$this->view('girl/list_leavework_2_day',$data);
	    }
	    public function girl_not_leave_2_day_thai() {
	    	$data = array(
	    		'no'=>'',
	    		'nickname'=>'',
	    		'include'=>''
	    	);
	    	$data['title'] 		= "List girls leave work 2 days";
	    	$girls = $this->model('girl');
	    	$page = (isset($_GET['page'])?$_GET['page']:1);
	    	$data_search = array(
	    		'start' => ($page-1)*DEFAULT_LIMIT_PAGE,
	    		'end'	=> DEFAULT_LIMIT_PAGE
 	    	);
 	    	$data_search['type_view'] = 'not_work_time_2_day';
 	    	// $data_search['include'] = 2;
 	    	if(method_post()){
 	    		if(post('no')){
 	    			$data_search['no'] = post('no');
 	    			$data['no'] = post('no');
 	    		}
 	    		if(post('nickname')){
 	    			$data_search['nickname'] = post('nickname');
 	    			$data['nickname'] = post('nickname');
 	    		}
 	    		if(post('include')){
 	    			$data_search['include'] = post('include');
 	    			$data['include'] = post('include');
 	    		}
 	    		$data_search['start'] = 0;
 	    		$data_search['end'] = 50;
 	    		$list_detail = $girls->getList($data_search);
 	    		$data['paging'] = 0;
 	    	}else{
 	    		$list_detail = $girls->getList($data_search);
 	    		$data['paging'] = ceil($list_detail['total_girls']/DEFAULT_LIMIT_PAGE);
 	    	}
 	    	
	    	$data['list_girls'] = $list_detail['list_girls'];
	    	$data['total_girls'] = $list_detail['total_girls'];

	    	$setting = $this->model('setting');
			$setting_result = $setting->getSetting();
			$mailTo = $setting_result['setting_email_admin'];
			$msg = '';
			$msg .= 'จำนวนรวมผู้หญิงที่ไม่เข้างาน 2 วัน: '.$data['total_girls'];

			// var_dump($data['list_girls']);
			// foreach($data['list_girls'] as $val){
			// 	$msg .= '
			// 	<p>No.'.$val['girls_no'].' '.$val['girls_nickname'].'</p>
			// 	<a href="'.MURL.'girl/profile&girls_id='.$val['girls_id'].'">Profile</a>';
			// }
			$subject = 'จำนวนผู้หญิงที่ไม่เข้างาน 2 วัน';
			
			sendmailSmtp($mailTo,$msg,$subject);
	    	// $data['link_paging'] = route('girl/list_leave_2_day&page=');
	    	// $data['page'] = $page;
	    	// $data['link_profile'] = route('girl/profile&girls_id=');
	    	// $data['action'] = route('girl/list_leave_2_day');
 	    // 	$this->view('girl/list_leavework_2_day',$data);
	    }
	    public function girl_holiday() {
	    	$date = date('Y-m-d');
	    	$girls = $this->model('girl');
	    	$result_girls_holiday = $girls->list_girls_holiday($date);
	    	
	    	$setting = $this->model('setting');
			$setting_result = $setting->getSetting();
			$mailTo = $setting_result['setting_email_admin'];
			$msg = '<p>'.$date.'</p>';
			$msg .= '<p>Total girls holiday: '.$result_girls_holiday->num_rows.'</p>';
			foreach($result_girls_holiday->rows as $val){
				$msg .= '<p>No. '.$val['girls_no'].' '.$val['girls_nickname'].'</p>';
	    	} 
			$subject = 'Girls holiday';
			
			sendmailSmtp($mailTo,$msg,$subject);
	    }
	}
?>