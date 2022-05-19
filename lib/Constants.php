<?php
namespace MyForum\lib;
require_once('conf.php');

trait Constants {
    public static function path() {
        $conf=conf();
		return $conf['path'];
	}
}
?>