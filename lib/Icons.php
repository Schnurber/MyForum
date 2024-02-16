<?php
namespace MyForum\lib;
trait Icons {
    public static function icon(string $what){
        switch ($what) {
            case 'envelope': include("icons/envelope-fill.svg"); break;
            case 'thread': include("icons/inbox-fill.svg"); break;
            case 'share': include("icons/box-arrow-in-right.svg"); break;
            case 'pen': include("icons/vector-pen.svg"); break;
        }
	}
}
?>