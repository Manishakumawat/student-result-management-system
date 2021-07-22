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
	case 'class' :
	$content    = 'class.php';		
	break;
	case 'time' :
	$content    = 'updatetime.php';		
	break;

	default :
		$content    = 'list.php';		
}

require_once '../../theme/templates.php';
?>


  
