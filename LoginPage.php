<?php
namespace MyForum;
/**
 * Login page to enter the administrator name and password
 */
final class LoginPage extends lib\HomePage {
    use lib\DataBase;

	/*
	 * Evaluate when reloading
	 */
	protected function init(){
		session_start();
		if (isset($_SESSION['loggedin'])) $this->redir();

		if (isset($_POST["user"]) && isset($_POST["pass"])){//Login?
			$user=trim($_POST["user"]);
			$pass= hash('sha256', trim($_POST["pass"]).lib\salt());//With Salt
			if ($user=='' || $pass=='') return;
			$admins=lib\admins();
			if ($admins[$user] == $pass){//OK
				error_log($user." ".$pass);
				$_SESSION['loggedin']=$user;
				$this->redir();
			}
		}
	}
	/*
	 * Redirect
	 */
	 protected function redir(){
	 	header("Location: admin.html") ;
	 }

	/*
	 * Output
	 */
	protected function body(){
		return $this->render('login.php', 'login');
	}
}
?>
