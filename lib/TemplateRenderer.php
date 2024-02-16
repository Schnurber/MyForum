<?php
namespace MyForum\lib;

/**
 * Capabilities for rendering templates
 */
abstract class TemplateRenderer {
	use Icons;

	protected $section;
	protected $result;

	protected function render(string $path, string $section, array $vars=null) {
	
		ob_start();
		$begin = function($sec) {
			$this->begin($sec);
		};
		$end = function($sec) {
			$this->end($sec);
		};
		
		$this->section = $section;
		if ($vars != null) {
			extract($vars);
		}
		require($path);
		ob_end_clean();
		error_reporting(E_ALL);
		return $this->result;
	}

	protected function begin(string $section){
		if ($section == $this->section) {
			ob_clean();
			error_reporting(E_ALL);
		} else {
			error_reporting(0);
		}
	}

	protected function end(string $section){
		if ($section == $this->section) {
			$this->result = ob_get_contents();
		}
	}

}
?>