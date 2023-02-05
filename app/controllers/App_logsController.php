<?php 
/**
 * App_logs Page Controller
 * @category  Controller
 */
class App_logsController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "app_logs";
	}
}
