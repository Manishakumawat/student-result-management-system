<?php
require_once("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'prof' :
		$content    = 'teacherprof.php';		
		break;

	case 'record' :
		$content    = 'instructorsubj.php';		
		break;

	case 'class' :
		$content    = 'instclass.php';		
		break;
    case 'view' :
		$content    = 'view.php';		
		break;
	case 'grade' :
	$content    = 'grades.php';		
	break;
	case 'assign' :
	$content    = 'assignSubj.php';		
	break;
	case 'class' :
	$content    = 'class.php';		
	break;
	case 'grade' :
	$content    = 'grades.php';		
	break;
	

	default :
		$content    = 'home.php';		
}
require_once '../../theme/templates.php';
?>


  