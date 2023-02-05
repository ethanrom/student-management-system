<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'users_logs', 
			'label' => 'Attendance', 
			'icon' => '<i class="fa fa-check-circle "></i>'
		),
		
		array(
			'path' => 'studentdb', 
			'label' => 'Stundents', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'staffdb', 
			'label' => 'Staff', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'subjectsdb', 
			'label' => 'Subjects', 
			'icon' => '<i class="fa fa-edit "></i>'
		),
		
		array(
			'path' => 'practiclesdb', 
			'label' => 'Practilces', 
			'icon' => '<i class="fa fa-edit "></i>'
		),
		
		array(
			'path' => 'userinfo', 
			'label' => 'Accounts', 
			'icon' => '<i class="fa fa-align-justify "></i>'
		),
		
		array(
			'path' => 'users_logs', 
			'label' => 'FingerPrint Record', 
			'icon' => '<i class="fa fa-hand-o-up "></i>'
		),
		
		array(
			'path' => 'users', 
			'label' => 'Manage Fingerprint IDs', 
			'icon' => '<i class="fa fa-cog "></i>'
		)
	);
		
			public static $navbartopleft = array(
		array(
			'path' => '', 
			'label' => 'Courseworks', 
			'icon' => '<i class="fa fa-search "></i>','submenu' => array(
		array(
			'path' => 'cwmarks', 
			'label' => 'Coursework Marks', 
			'icon' => ''
		),
		
		array(
			'path' => 'practiclesdb', 
			'label' => 'View Practicles', 
			'icon' => ''
		),
		
		array(
			'path' => 'cwcorrection', 
			'label' => 'Corrections', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => '', 
			'label' => 'Exam Results', 
			'icon' => '<i class="fa fa-graduation-cap "></i>','submenu' => array(
		array(
			'path' => 'examresultsbip', 
			'label' => 'BIP', 
			'icon' => ''
		),
		
		array(
			'path' => 'examresultsgip', 
			'label' => 'GIP', 
			'icon' => ''
		),
		
		array(
			'path' => 'examresultssip', 
			'label' => 'SIP', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => '', 
			'label' => 'Schedule', 
			'icon' => '<i class="fa fa-calendar "></i>','submenu' => array(
		array(
			'path' => 'lecschedules', 
			'label' => 'Lecture Schedule', 
			'icon' => '<i class="fa fa-graduation-cap "></i>'
		),
		
		array(
			'path' => 'pracschedules', 
			'label' => 'Practicle Schedule', 
			'icon' => '<i class="fa fa-industry "></i>'
		)
	)
		),
		
		array(
			'path' => 'noticeboard', 
			'label' => 'Notice Board', 
			'icon' => '<i class="fa fa-bell-o "></i>'
		)
	);
		
	
	
			public static $lecno = array(
		array(
			"value" => "01", 
			"label" => "01", 
		),
		array(
			"value" => "02", 
			"label" => "02", 
		),
		array(
			"value" => "03", 
			"label" => "03", 
		),
		array(
			"value" => "04", 
			"label" => "04", 
		),
		array(
			"value" => "05", 
			"label" => "05", 
		),
		array(
			"value" => "06", 
			"label" => "06", 
		),
		array(
			"value" => "07", 
			"label" => "07", 
		),
		array(
			"value" => "08", 
			"label" => "08", 
		),
		array(
			"value" => "09", 
			"label" => "09", 
		),
		array(
			"value" => "10", 
			"label" => "10", 
		),
		array(
			"value" => "11", 
			"label" => "11", 
		),
		array(
			"value" => "12", 
			"label" => "12", 
		),
		array(
			"value" => "13", 
			"label" => "13", 
		),
		array(
			"value" => "14", 
			"label" => "14", 
		),);
		
			public static $yesono = array(
		array(
			"value" => "Present", 
			"label" => "Present", 
		),
		array(
			"value" => "Absent", 
			"label" => "Absent", 
		),);
		
			public static $studpt = array(
		array(
			"value" => "Electrical", 
			"label" => "Electrical", 
		),
		array(
			"value" => "Civil", 
			"label" => "Civil", 
		),
		array(
			"value" => "Mechanical", 
			"label" => "Mechanical", 
		),);
		
			public static $stubatch = array(
		array(
			"value" => "2016", 
			"label" => "2016", 
		),
		array(
			"value" => "2017", 
			"label" => "2017", 
		),
		array(
			"value" => "2018", 
			"label" => "2018", 
		),
		array(
			"value" => "2019", 
			"label" => "2019", 
		),);
		
			public static $stucat = array(
		array(
			"value" => "EE", 
			"label" => "EE", 
		),
		array(
			"value" => "EP", 
			"label" => "EP", 
		),);
		
			public static $subyear = array(
		array(
			"value" => "BIP", 
			"label" => "BIP", 
		),
		array(
			"value" => "GIP", 
			"label" => "GIP", 
		),
		array(
			"value" => "SIP", 
			"label" => "SIP", 
		),);
		
			public static $userrole = array(
		array(
			"value" => "Administrator", 
			"label" => "Administrator", 
		),
		array(
			"value" => "User", 
			"label" => "User", 
		),
		array(
			"value" => "Student", 
			"label" => "Student", 
		),
		array(
			"value" => "Instructor", 
			"label" => "Instructor", 
		),);
		
			public static $staffrole = array(
		array(
			"value" => "Administration", 
			"label" => "Administration", 
		),
		array(
			"value" => "Lecturer", 
			"label" => "Lecturer", 
		),
		array(
			"value" => "Instructor", 
			"label" => "Instructor", 
		),
		array(
			"value" => "Other", 
			"label" => "Other", 
		),);
		
			public static $stugrade = array(
		array(
			"value" => "A", 
			"label" => "A", 
		),
		array(
			"value" => "B", 
			"label" => "B", 
		),
		array(
			"value" => "C", 
			"label" => "C", 
		),
		array(
			"value" => "F", 
			"label" => "F", 
		),);
		
			public static $fingerprint_select = array(
		array(
			"value" => "0", 
			"label" => "NO", 
		),
		array(
			"value" => "1", 
			"label" => "YES", 
		),);
		
}