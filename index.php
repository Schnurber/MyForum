<?php 
namespace MyForum;

/**
 * Autoload php files
 */

spl_autoload_register(function ($className) {
$fileName = dirname(__DIR__) .'/'.str_replace("\\", "/", $className).".php";
 
	if (file_exists($fileName)) {
		require_once $fileName;
	}
});

/**
 * Dispatcher: Selects the individual pages according to the parameter p 
 */
if (isset($_GET['p'])){
switch ($_GET['p']) {
	case 'submissons':	$p=new SubmissionsPage('Posts');	break;
	case 'admin':	$p=new AdminPage('Administrator');	break;
	case 'login':	$p=new LoginPage('Login');	break;
	default:	$p=new OverviewPage('Overview');
}	
}else {
	$p=new OverviewPage('Overview');
}
$p->display();
?>