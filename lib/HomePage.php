<?php
namespace MyForum\lib;

abstract class HomePage extends TemplateRenderer {

	protected string $name;

	//Ueberschreiben
	abstract protected function body();
	abstract protected function init();

	function __construct(string $name) {
		$this->name=$name;
	}

	protected function head(){
		return $this->render('home.php', 'header', array('title' => $this->name));
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