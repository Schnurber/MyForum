<?php 
namespace MyForum;
require_once('lib/lang.php');
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
	case 'submissons':	$p=new SubmissionsPage('POSTS');	break;
	case 'admin':	$p=new AdminPage('ADMIN');	break;
	case 'login':	$p=new LoginPage('LOGIN');	break;
	default:	$p=new NotFoundPage('NOTFOUND');
}	
}else {
	$p=new OverviewPage('OVERVIEW');
}
$p->display();
?>