<?php 
/**
 * Users_logs Page Controller
 * @category  Controller
 */
class Users_logsController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "users_logs";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("users_logs.id", 
			"users_logs.value1", 
			"users_logs.value2", 
			"users_logs.checkindate", 
			"users_logs.timein", 
			"users_logs.fingerprint_id", 
			"users.serialnumber AS users_serialnumber", 
			"users.username AS users_username");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				users_logs.id LIKE ? OR 
				users_logs.serialnumber LIKE ? OR 
				users_logs.username LIKE ? OR 
				users_logs.value1 LIKE ? OR 
				users_logs.value2 LIKE ? OR 
				users_logs.checkindate LIKE ? OR 
				users_logs.timein LIKE ? OR 
				users_logs.timeout LIKE ? OR 
				users_logs.fingerprint_id LIKE ? OR 
				users.id LIKE ? OR 
				users.serialnumber LIKE ? OR 
				users.username LIKE ? OR 
				users.gender LIKE ? OR 
				users.email LIKE ? OR 
				users.fingerprint_id LIKE ? OR 
				users.fingerprint_select LIKE ? OR 
				users.user_date LIKE ? OR 
				users.time_in LIKE ? OR 
				users.del_fingerid LIKE ? OR 
				users.add_fingerid LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "users_logs/search.php";
		}
		$db->join("users", "users_logs.fingerprint_id = users.fingerprint_id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("users_logs.id", ORDER_TYPE);
		}
		$allowed_roles = array ('administrator', 'user', 'instructor');
		if(!in_array(strtolower(USER_ROLE), $allowed_roles)){
		$db->where("users_logs.fingerprint_id", get_active_user('fingerprint_id') );
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->users_logs_checkindate)){
			$val = $request->users_logs_checkindate;
			$db->where("DATE(users_logs.checkindate)", $val , "=");
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		if(	!empty($records)){
			foreach($records as &$record){
				$record['checkindate'] = human_date($record['checkindate']);
			}
		}
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Users Logs";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("users_logs/list.php", $data); //render the full page
	}
	/**
     * View record detail 
	 * @param $rec_id (select record by table primary key) 
     * @param $value value (select record by value of field name(rec_id))
     * @return BaseView
     */
	function view($rec_id = null, $value = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = urldecode($rec_id);
		$tablename = $this->tablename;
		$fields = array("users_logs.id", 
			"users_logs.serialnumber", 
			"users_logs.value1", 
			"users_logs.value2", 
			"users_logs.checkindate", 
			"users_logs.timein", 
			"users_logs.fingerprint_id", 
			"users.serialnumber AS users_serialnumber", 
			"users.username AS users_username");
		$allowed_roles = array ('administrator', 'user', 'instructor');
		if(!in_array(strtolower(USER_ROLE), $allowed_roles)){
		$db->where("users_logs.fingerprint_id", get_active_user('fingerprint_id') );
		}
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("users_logs.id", $rec_id);; //select record based on primary key
		}
		$db->join("users", "users_logs.fingerprint_id = users.fingerprint_id", "INNER ");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['checkindate'] = human_date($record['checkindate']);
			$page_title = $this->view->page_title = "View  Users Logs";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("users_logs/view.php", $record);
	}
	/**
     * Insert new record to the database table
	 * @param $formdata array() from $_POST
     * @return BaseView
     */
	function add($formdata = null){
		if($formdata){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$request = $this->request;
			//fillable fields
			$fields = $this->fields = array("serialnumber","value1","value2","checkindate","timein","fingerprint_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'serialnumber' => 'required',
				'value1' => 'required',
				'value2' => 'required',
				'checkindate' => 'required',
				'timein' => 'required',
				'fingerprint_id' => 'required',
			);
			$this->sanitize_array = array(
				'serialnumber' => 'sanitize_string',
				'value1' => 'sanitize_string',
				'value2' => 'sanitize_string',
				'checkindate' => 'sanitize_string',
				'timein' => 'sanitize_string',
				'fingerprint_id' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("users_logs");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Users Logs";
		$this->render_view("users_logs/add.php");
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","serialnumber","value1","value2","checkindate","timein","fingerprint_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'serialnumber' => 'required',
				'value1' => 'required',
				'value2' => 'required',
				'checkindate' => 'required',
				'timein' => 'required',
				'fingerprint_id' => 'required',
			);
			$this->sanitize_array = array(
				'serialnumber' => 'sanitize_string',
				'value1' => 'sanitize_string',
				'value2' => 'sanitize_string',
				'checkindate' => 'sanitize_string',
				'timein' => 'sanitize_string',
				'fingerprint_id' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		$allowed_roles = array ('administrator', 'user', 'instructor');
		if(!in_array(strtolower(USER_ROLE), $allowed_roles)){
		$db->where("users_logs.fingerprint_id", get_active_user('fingerprint_id') );
		}
				$db->where("users_logs.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("users_logs");
				}
				else{
					if($db->getLastError()){
						$this->set_page_error();
					}
					elseif(!$numRows){
						//not an error, but no record was updated
						$page_error = "No record updated";
						$this->set_page_error($page_error);
						$this->set_flash_msg($page_error, "warning");
						return	$this->redirect("users_logs");
					}
				}
			}
		}
		$allowed_roles = array ('administrator', 'user', 'instructor');
		if(!in_array(strtolower(USER_ROLE), $allowed_roles)){
		$db->where("users_logs.fingerprint_id", get_active_user('fingerprint_id') );
		}
		$db->where("users_logs.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Users Logs";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("users_logs/edit.php", $data);
	}
	/**
     * Update single field
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function editfield($rec_id = null, $formdata = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		//editable fields
		$fields = $this->fields = array("id","serialnumber","value1","value2","checkindate","timein","fingerprint_id");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'serialnumber' => 'required',
				'value1' => 'required',
				'value2' => 'required',
				'checkindate' => 'required',
				'timein' => 'required',
				'fingerprint_id' => 'required',
			);
			$this->sanitize_array = array(
				'serialnumber' => 'sanitize_string',
				'value1' => 'sanitize_string',
				'value2' => 'sanitize_string',
				'checkindate' => 'sanitize_string',
				'timein' => 'sanitize_string',
				'fingerprint_id' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		$allowed_roles = array ('administrator', 'user', 'instructor');
		if(!in_array(strtolower(USER_ROLE), $allowed_roles)){
		$db->where("users_logs.fingerprint_id", get_active_user('fingerprint_id') );
		}
				$db->where("users_logs.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount();
				if($bool && $numRows){
					return render_json(
						array(
							'num_rows' =>$numRows,
							'rec_id' =>$rec_id,
						)
					);
				}
				else{
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					elseif(!$numRows){
						$page_error = "No record updated";
					}
					render_error($page_error);
				}
			}
			else{
				render_error($this->view->page_error);
			}
		}
		return null;
	}
	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
     * @return BaseView
     */
	function delete($rec_id = null){
		Csrf::cross_check();
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$this->rec_id = $rec_id;
		//form multiple delete, split record id separated by comma into array
		$arr_rec_id = array_map('trim', explode(",", $rec_id));
		$db->where("users_logs.id", $arr_rec_id, "in");
		$allowed_roles = array ('administrator', 'user', 'instructor');
		if(!in_array(strtolower(USER_ROLE), $allowed_roles)){
		$db->where("users_logs.fingerprint_id", get_active_user('fingerprint_id') );
		}
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("users_logs");
	}
}
