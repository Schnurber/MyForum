<?php
namespace MyForum\lib;
require_once('conf.php');
/** 
 *  Capabilities for 
 *	database communication
 */
trait DataBase{
	private static $connection=null;
	
	private static function connect(){
		$conf=conf();
		$conn=$conf['driver'].':host='.$conf['host'].';dbname='.$conf['database'];
		self::$connection = self::$connection ?: new \PDO($conn, $conf['user'], $conf['pass']);
	}
	
	public static function query(string $sql, array $vars = null){
		$arr=null;
		try {
			self::connect();
			$stmt = self::$connection->prepare($sql);
			$stmt->execute($vars);
			$arr = $stmt->fetchAll();
		} catch (\PDOException $e) {
			error_log( 'Database Error: ' . $e->getMessage());
		}
		return $arr;
	}
	
}
?>