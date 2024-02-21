<?php
namespace MyForum\lib;
require_once('conf.php');
require_once('lang.php');
/**
 * Base class for all Pages
 */
abstract class HomePage extends TemplateRenderer {

	protected $name;

	//override!
	abstract protected function body();
	abstract protected function init();
	
	protected static function host() {
		return conf()['protocol'] . '://' . conf()['host'];
	}
	

	function __construct(string $name) {
		$this->name=$name;
	}

	protected function head(){
		if(session_status() !== PHP_SESSION_ACTIVE) session_start();
		return $this->render('home.php', 'header', array(
			'TITLE' => $this->name, 
			'host' => $this->host(),
			'person' => isset($_SESSION['loggedin']) ? t('ADMIN') : t('LOGIN'))
		);
	}

	protected function tail(){
		return $this->render('home.php', 'footer');
	}

	public function display(){
		
		$msg = $this->init();
		echo $this->head();
		echo $msg;
		echo $this->body();
		echo $this->tail();
	}
}
?>