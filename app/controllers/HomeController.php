<?php 

/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends SecureController{
	/**
     * Index Action
     * @return View
     */
	function index(){
		if(strtolower(USER_ROLE) == 'instructor'){
			$this->render_view("home/instructor.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'student'){
			$this->render_view("home/student.php" , null , "main_layout.php");
		}
		else{
			$this->render_view("home/index.php" , null , "main_layout.php");
		}
	}
}
