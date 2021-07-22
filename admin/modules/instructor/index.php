<?php
require_once("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;

	case 'add' :
		$content    = 'add.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;
    case 'view' :
		$content    = 'view.php';		
		break;
	case 'instSubj' :
	$content    = 'instSubj.php';		
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
		$content    = 'list.php';		
}
require_once '../../theme/templates.php';
?>


  
