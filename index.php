<?php
require_once("includes/initialize.php");
$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="Home";	
		$content='home.php';		
		break;
	case '2' :
	    $title="Profile";	
		$content ='profile.php';
		break;
	case '3' :
	    $title="Record";	
		$content = 'record.php';		
		break;

	case '4' :
	    $title="subject";	
 		$content ='studentsubject.php';		
		break;
				
     case '5' :
	    $title="Room Rates";	
		$content='rates.php';
		break;	

	case '7' :
	    $title="Location";	
		$content ='sitemap.php';
		break;
	default :
	    $title="Home";	
		$content ='home.php';		
}

require_once 'theme/templates.php';
?>
