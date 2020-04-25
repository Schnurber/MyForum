<?php 
namespace MyForum;


spl_autoload_register(function ($className) {
$fileName = dirname(__DIR__) .'/'.str_replace("\\", "/", $className).".php";
 
	if (file_exists($fileName)) {
		require_once $fileName;
	}
});

if (isset($_GET['p'])){
switch ($_GET['p']) {
	case 'submissons':	$p=new SubmissionsPage('Beitr&auml;ge');	break;
	case 'admin':	$p=new AdminPage('Administrator');	break;
	case 'login':	$p=new LoginPage('Login');	break;
	default:	$p=new OverviewPage('&Uuml;bersicht');
}	
}else {
	$p=new OverviewPage('&Uuml;bersicht');
}
$p->display();
?>