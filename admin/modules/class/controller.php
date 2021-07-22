<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;
	case 'updatetime' :
	doupdatetime();
	break;


}

function doupdatetime(){
	if (isset($_POST['savecourse'])){
	

	if ($_POST['subjcode'] == "" OR $_POST['subjdesc'] == "" OR $_POST['unit'] == "") {
		message("All field is required!","error");
		redirect('index.php');
	}else{
		

		$instClass = new InstructorClasses();
		$Subjectid		= $_GET['id'];
		$subjcode   	= $_POST['subjcode'];
		$day 			= $_POST['day'];
		//$rm 			= $_POST['rmname'];
		$time 			= $_POST['time'];
		$ay 			= $_POST['sy'];
		


			// $instClass->SUBJ_ID			 = $Subjectid;
			// $instClass->CLASS_CODE		 = $subjcode;
			// $instClass->INST_ID 		 = $INST_ID;		
			$instClass->ROOM 			 = $_POST['rmname'];
			$instClass->SECTION 		 = $_POST['section'];
			$instClass->DAY 		 	 = $day;
			$instClass->C_TIME 		 	 = $time;
 			$instClass->update($_GET['classId']);
			message($subjcode. " has updated successfully!", "info");
			redirect('index.php');
			 
			
		}	 

		
	}
}

function doInsert(){
		
	if (isset($_POST['savecourse'])){

	if ($_POST['coursename'] == "" OR $_POST['coursedesc'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$course = new Course();
		$coursename   	= $_POST['coursename'];
		$courselevel   	= $_POST['level'];
		$coursemajor   	= $_POST['major'];
		$coursedesc 	= $_POST['coursedesc'];
		$coursedept		= $_POST['dept'];
		$res = $course->find_all_course($coursename, $courselevel, $coursemajor);
				
		if ($res >=1) {
			message("Course name already exist!","error");
			check_message();
		}else{
			$course->COURSE_NAME = $coursename;
			$course->COURSE_LEVEL = $courselevel;
			$course->COURSE_MAJOR = $coursemajor;
			$course->COURSE_DESC = $coursedesc;
			$course->DEPT_ID = $coursedept;	
			 $istrue = $course->create(); 
			 if ($istrue == 1){
			 	
			 	message("New [". $coursename ."] course created successfully!","success");
			 	redirect('index.php');
			 }
		}	 

		
	}
}
}
function doEdit(){
	$courseid = $_GET['id'];
	$singledept = new Course();
	$object = $singledept->single_course($courseid);


	if (isset($_POST['savecourse'])){

		if ($_POST['coursename'] == "" OR $_POST['coursedesc'] == "") {
			
			message("All field is required!", "error");

		}else{
			$course = new Course();
			$courseid		= $_GET['id'];
			$coursename   	= $_POST['coursename'];
			$courselevel   	= $_POST['level'];
			$coursemajor   	= $_POST['major'];
			$coursedesc 	= $_POST['coursedesc'];
			$coursedept		= $_POST['dept'];
					
			$course->COURSE_NAME = $coursename;
			$course->COURSE_LEVEL = $courselevel;
			$course->COURSE_MAJOR = $coursemajor;
			$course->COURSE_DESC = $coursedesc;
			$course->DEPT_ID 	 = $coursedept;	
			$course->update($courseid);
			

			message($coursename. " has updated successfully!", "info");
			redirect('index.php');

		}
	}
		
}

function doDelete(){
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$Course = new Course();
		$Course->delete($id[$i]);
	}
	message("Course(s) already Deleted!","info");
	redirect('index.php');
}
?>