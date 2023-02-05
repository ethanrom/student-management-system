<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * attendancedb_stuindex_option_list Model Action
     * @return array
     */
	function attendancedb_stuindex_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stuindex AS value,stuindex AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * attendancedb_subcode_option_list Model Action
     * @return array
     */
	function attendancedb_subcode_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subname AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwmarks_practicle_option_list Model Action
     * @return array
     */
	function cwmarks_practicle_option_list($lookup_subcode){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT practicle AS value,practicle AS label FROM practiclesdb WHERE subcode= ?" ;
		$queryparams = array($lookup_subcode);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwmarks_subcode_option_list Model Action
     * @return array
     */
	function cwmarks_subcode_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subcode AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwmarks_stuindex_option_list Model Action
     * @return array
     */
	function cwmarks_stuindex_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stuindex AS value,stuindex AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * practiclesdb_subcode_option_list Model Action
     * @return array
     */
	function practiclesdb_subcode_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subname AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * userinfo_username_option_list Model Action
     * @return array
     */
	function userinfo_username_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stuname AS value,stuname AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * userinfo_stuindex_option_list Model Action
     * @return array
     */
	function userinfo_stuindex_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stuindex AS value,stuindex AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * userinfo_stucat_option_list Model Action
     * @return array
     */
	function userinfo_stucat_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stucat AS value,stucat AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * userinfo_username_value_exist Model Action
     * @return array
     */
	function userinfo_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("userinfo");
		return $exist;
	}

	/**
     * userinfo_useremail_value_exist Model Action
     * @return array
     */
	function userinfo_useremail_value_exist($val){
		$db = $this->GetModel();
		$db->where("useremail", $val);
		$exist = $db->has("userinfo");
		return $exist;
	}

	/**
     * lecschedules_subcode_option_list Model Action
     * @return array
     */
	function lecschedules_subcode_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subname AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwprog_stuindex_option_list Model Action
     * @return array
     */
	function cwprog_stuindex_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stuindex AS value,stuindex AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwprog_subcode_option_list Model Action
     * @return array
     */
	function cwprog_subcode_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subcode AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwprog_comptage_default_value Model Action
     * @return Value
     */
	function cwprog_comptage_default_value(){
		$db = $this->GetModel();
		$sqltext = "SELECT  COUNT(c.cwmark) AS count_of_cwmark FROM cwmarks AS c,   cwprog AS c2 WHERE  (c2.subcode  =c.subcode )";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * examresultsbip_stuindex_option_list Model Action
     * @return array
     */
	function examresultsbip_stuindex_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stuindex AS value,stuindex AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * examresultsbip_subcode_option_list Model Action
     * @return array
     */
	function examresultsbip_subcode_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subname AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pracschedules_subcode_option_list Model Action
     * @return array
     */
	function pracschedules_subcode_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subcode AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pracschedules_practicle_option_list Model Action
     * @return array
     */
	function pracschedules_practicle_option_list($lookup_subcode){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT practicle AS value,practicle AS label FROM practiclesdb WHERE subcode= ?"  ;
		$queryparams = array($lookup_subcode);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwcorrection_stuindex_option_list Model Action
     * @return array
     */
	function cwcorrection_stuindex_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT stuindex AS value,stuindex AS label FROM studentdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * cwcorrection_practicle_option_list Model Action
     * @return array
     */
	function cwcorrection_practicle_option_list($search_text = null){
		$arr = array();
		if(!empty($search_text)){
			$db = $this->GetModel();
			$sqltext = "SELECT  DISTINCT practicle AS value,practicle AS label FROM practiclesdb WHERE practicle LIKE ? LIMIT 0,10" ;
			$queryparams = array("%$search_text%");
			$arr = $db->rawQuery($sqltext, $queryparams);
		}
		return $arr;
	}

	/**
     * users_logs_value1_option_list Model Action
     * @return array
     */
	function users_logs_value1_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT subcode AS value,subname AS label FROM subjectsdb";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * users_logs_fingerprint_id_option_list Model Action
     * @return array
     */
	function users_logs_fingerprint_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT stuindex AS value , stuname AS label FROM studentdb ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * users_fingerprint_id_default_value Model Action
     * @return Value
     */
	function users_fingerprint_id_default_value(){
		$db = $this->GetModel();
		$sqltext = "SELECT  MAX(u.fingerprint_id +1) AS max_of_fingerprint_id FROM users AS u";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totalstaff Model Action
     * @return Value
     */
	function getcount_totalstaff(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM staffdb";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_totalstudents Model Action
     * @return Value
     */
	function getcount_totalstudents(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM studentdb";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_subjects Model Action
     * @return Value
     */
	function getcount_subjects(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM subjectsdb";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_practicles Model Action
     * @return Value
     */
	function getcount_practicles(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM practiclesdb";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
	* linechart_attendanceoverview Model Action
	* @return array
	*/
	function linechart_attendanceoverview(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  ul.checkindate, COUNT(ul.fingerprint_id) AS count_of_fingerprint_id FROM users_logs AS ul WHERE  (ul.checkindate  >= DATE(NOW()) - INTERVAL 2 DAY ) GROUP BY ul.checkindate";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'count_of_fingerprint_id');
		$dataset_labels =  array_column($dataset1, 'checkindate');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* linechart_todaysattendance Model Action
	* @return array
	*/
	function linechart_todaysattendance(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  ul.value1, ul.fingerprint_id FROM users_logs AS ul WHERE  (ul.checkindate  = CURDATE() ) GROUP BY ul.value1";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'fingerprint_id');
		$dataset_labels =  array_column($dataset1, 'value1');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
     * getcount_g1e3 Model Action
     * @return Value
     */
	function getcount_g1e3(){
		$db = $this->GetModel();
		$sqltext = "SELECT  COUNT(c.id) AS count_of_id FROM cwmarks AS c WHERE  (c.subcode  LIKE '%G1E3%' )";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_g2e5 Model Action
     * @return Value
     */
	function getcount_g2e5(){
		$db = $this->GetModel();
		$sqltext = "SELECT  COUNT(c.id) AS count_of_id FROM cwmarks AS c WHERE  (c.subcode  LIKE '%G2E5%' )";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_g1e4 Model Action
     * @return Value
     */
	function getcount_g1e4(){
		$db = $this->GetModel();
		$sqltext = "SELECT  COUNT(c.id) AS count_of_id FROM cwmarks AS c WHERE  (c.subcode  LIKE '%G1E4%' )";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_practicles_2 Model Action
     * @return Value
     */
	function getcount_practicles_2(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pracschedules WHERE week(sheddate) = week(now()) and (stugroup  LIKE '%X%' )"  ;
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_correctionsubmissions Model Action
     * @return Value
     */
	function getcount_correctionsubmissions(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM cwcorrection WHERE week(submdate) = week(now())";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_lectures Model Action
     * @return Value
     */
	function getcount_lectures(){
		$db = $this->GetModel();
		$sqltext = "SELECT  COUNT(l.id) AS count_of_id FROM lecschedules AS l WHERE  (week(l.sheddate)  =week(now()) ) AND (l.stucat  LIKE '%EE%' )";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
