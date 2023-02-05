<?php
/**
 * Page Access Control
 * @category  RBAC Helper
 */
defined('ROOT') or exit('No direct script access allowed');
class ACL
{
	

	/**
	 * Array of user roles and page access 
	 * Use "*" to grant all access right to particular user role
	 * @var array
	 */
	public static $role_pages = array(
			'administrator' =>
						array(
							'attendancedb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'cwmarks' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'practiclesdb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'studentdb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'subjectsdb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'userinfo' => array('list','view','add','edit', 'editfield','delete','import_data','accountedit','accountview'),
							'lecschedules' => array('list','view','add','edit', 'editfield','delete'),
							'cwprog' => array('list','view','add','edit', 'editfield','delete'),
							'staffdb' => array('list','view','add','edit', 'editfield','delete'),
							'examresultsbip' => array('list','view','add','edit', 'editfield','delete'),
							'examresultsgip' => array('list','view','add','edit', 'editfield','delete'),
							'examresultssip' => array('list','view','add','edit', 'editfield','delete'),
							'pracschedules' => array('list','view','add','edit', 'editfield','delete'),
							'cwcorrection' => array('list','view','add','edit', 'editfield','delete'),
							'users_logs' => array('list','view','add','edit', 'editfield','delete'),
							'users' => array('list','view','add','edit', 'editfield','delete'),
							'noticeboard' => array('list','view','add','edit', 'editfield','delete'),
							'app_logs' => array('list','view')
						),
		
			'user' =>
						array(
							'attendancedb' => array('list','view'),
							'cwmarks' => array('list','view'),
							'userinfo' => array('accountedit','accountview')
						),
		
			'student' =>
						array(
							'attendancedb' => array('list','view'),
							'cwmarks' => array('list','view'),
							'practiclesdb' => array('list','view'),
							'userinfo' => array('accountedit','accountview'),
							'lecschedules' => array('list','view'),
							'cwprog' => array('list','view'),
							'examresultsbip' => array('list','view'),
							'examresultsgip' => array('list','view'),
							'examresultssip' => array('list','view'),
							'pracschedules' => array('list','view'),
							'cwcorrection' => array('list','view'),
							'users_logs' => array('list','view'),
							'users' => array('list','view'),
							'noticeboard' => array('list','view')
						),
		
			'instructor' =>
						array(
							'attendancedb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'cwmarks' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'practiclesdb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'studentdb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'subjectsdb' => array('list','view','add','edit', 'editfield','delete','import_data'),
							'userinfo' => array('list','view','accountedit','accountview','add','edit', 'editfield','delete','import_data'),
							'lecschedules' => array('list','view','add','edit', 'editfield','delete'),
							'cwprog' => array('list','view','add','edit', 'editfield','delete'),
							'staffdb' => array('list','view','add','edit', 'editfield','delete'),
							'examresultsbip' => array('list','view','add','edit', 'editfield','delete'),
							'examresultsgip' => array('list','view','add','edit', 'editfield','delete'),
							'examresultssip' => array('list','view','add','edit', 'editfield','delete')
						)
		);

	/**
	 * Current user role name
	 * @var string
	 */
	public static $user_role = null;

	/**
	 * pages to Exclude From Access Validation Check
	 * @var array
	 */
	public static $exclude_page_check = array("", "index", "home", "account", "info", "masterdetail");

	/**
	 * Init page properties
	 */
	public function __construct()
	{	
		if(!empty(USER_ROLE)){
			self::$user_role = USER_ROLE;
		}
	}

	/**
	 * Check page path against user role permissions
	 * if user has access return AUTHORIZED
	 * if user has NO access return UNAUTHORIZED
	 * if user has NO role return NO_ROLE
	 * @return string
	 */
	public static function GetPageAccess($path)
	{
		$rp = self::$role_pages;
		if ($rp == "*") {
			return AUTHORIZED; // Grant access to any user
		} else {
			$path = strtolower(trim($path, '/'));

			$arr_path = explode("/", $path);
			$page = strtolower($arr_path[0]);

			//If user is accessing excluded access contrl pages
			if (in_array($page, self::$exclude_page_check)) {
				return AUTHORIZED;
			}

			$user_role = strtolower(USER_ROLE); // Get user defined role from session value
			if (array_key_exists($user_role, $rp)) {
				$action = (!empty($arr_path[1]) ? $arr_path[1] : "list");
				if ($action == "index") {
					$action = "list";
				}
				//Check if user have access to all pages or user have access to all page actions
				if ($rp[$user_role] == "*" || (!empty($rp[$user_role][$page]) && $rp[$user_role][$page] == "*")) {
					return AUTHORIZED;
				} else {
					if (!empty($rp[$user_role][$page]) && in_array($action, $rp[$user_role][$page])) {
						return AUTHORIZED;
					}
				}
				return FORBIDDEN;
			} else {
				//User does not have any role.
				return NOROLE;
			}
		}
	}

	/**
	 * Check if user role has access to a page
	 * @return Bool
	 */
	public static function is_allowed($path)
	{
		return (self::GetPageAccess($path) == AUTHORIZED);
	}

}
