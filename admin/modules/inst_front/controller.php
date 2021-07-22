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

	case 'assign':
	doassignsubj();
	break;

	case 'delsubj':
	doDelsubj();
	break;
	case 'grade':
	savegrade();
	break;
	}
function savegrade(){
	if (isset($_POST['savegrades'])){

	if ($_POST['finalave']>=75 AND $_POST['finalave']<=100){
		$remarks = "Passed";
	}else{
		$remarks= "Failed";
	}

			$instClass = New InstructorClasses();
			$cur = $instClass->single_class($_GET['classId']);


		$grade = new Grades();
		$grade->INST_ID 	= $cur->INST_ID;
		$grade->FIRST 		= $_POST['first'];
		$grade->SECOND 		= $_POST['second'];
		$grade->THIRD 		= $_POST['third'];
		$grade->FOURTH 		= $_POST['fourth'];
		$grade->AVE	  	= $_POST['finalave'];
		$grade->REMARKS 	= $remarks;
		$grade->update($_GET['gradeId']);		 
 		message("Grade successfully updated!");
		redirect("index.php?view=class&id=".$_GET['classId']."&instructorId=".$_GET['instructorId']."");
	}
}
function doDelsubj(){
	$INST_ID=$_POST['INST_ID'];
	@$id=$_POST['selector'];
	$key = count($id);

		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){
		 
				$intructorClass = new InstructorClasses();
				$intructorClass->delete($id[$i]);
			}
					message("Faculty subject(s) already Deleted!","info");
					redirect('index.php?view=instSubj&instructorId='.$INST_ID.'');
		}else{
			message("Select your subject(s) first, if you want to delete it!","error");
			redirect('index.php?view=instSubj&instructorId='.$INST_ID.'');
		}
}
function doassignsubj(){
global $mydb;
$instructorId = $_GET['instructorId'];

$subjectId = $_POST['selector'];
$subjId = count($subjectId);

if (!$subjectId==''){
// echo $selector , $selector;
for ($i=0; $i<$subjId; $i++){
	$mydb->setQuery("SELECT  * 
					FROM  `subject` s 
					WHERE  SUBJ_ID='{$subjectId[$i]}'");
	$cur = $mydb->loadResultlist();
	foreach ($cur as  $result) {

 		$class = New InstructorClasses();
		$class->CLASS_CODE		=	$result->SUBJ_CODE;
		$class->SUBJ_ID			=	$result->SUBJ_ID;
		$class->INST_ID			=	$instructorId;
		$class->AY				=	$result->AY;
		$class->DAY				=	'NONE';
		$class->C_TIME			=	'NONE';
		$class->IDNO			=	'NONE';		
		$class->create();
 

	}
	message("Faculty Load(s) already Added!","info");
	redirect('index.php?view=instSubj&instructorId='.$instructorId.'');
} 
}else{
	message("Select first the subject(s) you want to Add!","error");
	redirect('index.php?view=assign&instructorId='.$instructorId.'');
}
}	
function doInsert(){
		
if (isset($_POST['savefaculty'])){

	if ($_POST['name'] == "" OR $_POST['address'] == "" OR $_POST['email'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$inst = new Instructor();
		$name   		= $_POST['name'];
		$address	 	= $_POST['address'];
		$Gender			= $_POST['Gender'];
		$civilstats 	= $_POST['civilstats'];
		$specialization = $_POST['specialization'];
		$email 			= $_POST['email'];
		$empStats 		= $_POST['empStats'];	

		$user = new User();
		$acc_name		= $_POST['name'];
		$acc_username   = $_POST['username'];
		$acc_password 	= $_POST['pass'];
		$acc_type 		= 'Teacher';
		$resuser = $user->find_all_user($acc_name);
		
		
		if ($resuser >=1) {
			message("Account name already exist!", "error");
			redirect('index.php');
		}else{


		$res = $inst->find_all_instructor($name);
				
			if ($res >=1) {
				message("Instructor name already exist!","error");
				check_message();
			}else{

				$inst->INST_FULLNAME		 = $name;
				$inst->INST_ADDRESS 		 = $address;
				$inst->INST_SEX 			 = $Gender;
				
				$inst->INST_STATUS 			 = $civilstats;
				$inst->SPECIALIZATION 		 = $specialization;
				$inst->INST_EMAIL 			 = $email;
				$inst->EMPLOYMENT_STATUS	 = $empStats;

				
				$user->ACCOUNT_NAME = $name;
				$user->ACCOUNT_USERNAME = $email;
				$user->ACCOUNT_PASSWORD = sha1($acc_password);
				$user->ACCOUNT_TYPE = $acc_type;
				
				 $istrue = $user->create(); 
				 if ($istrue == 1){
				 	//message("New [". $acc_name ."] created successfully!", "success");
				 	//redirect('index.php');
				 	
				 }
			}
			$istrueee = $inst->create(); 
			 if ($istrueee == 1){
			 	
			 	message("New Instructor created successfully!","success");
			 	redirect('index.php');
			 }else{

				message("No Instructor created!","error");
			 	redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$instid = $_GET['id'];
	if (isset($_POST['savefaculty'])){

	if ($_POST['name'] == "" OR $_POST['address'] == "" OR $_POST['email'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$inst = new Instructor();
		$name   		= $_POST['name'];
		$address	 	= $_POST['address'];
		$Gender			= $_POST['Gender'];
		$civilstats 	= $_POST['civilstats'];
		$specialization = $_POST['specialization'];
		$email 			= $_POST['email'];
		$empStats 		= $_POST['empStats'];	

			$inst->INST_FULLNAME		 = $name;
			$inst->INST_ADDRESS 		 = $address;
			$inst->INST_SEX 			 = $Gender;
			$inst->INST_STATUS 			 = $civilstats;
			$inst->SPECIALIZATION 		 = $specialization;
			$inst->INST_EMAIL 			 = $email;
			$inst->EMPLOYMENT_STATUS	 = $empStats;
			$inst->update($instid);
			 	
			 	message($name."has been updated successfully!","success");
			 	redirect('index.php');
		}	 

	
}

		
}

function doDelete(){
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$inst = new Instructor();
		$inst->delete($id[$i]);
	}

			message("Faculty name(s) already Deleted!","info");
			redirect('index.php');
}

?>