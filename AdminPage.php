<?php 
namespace MyForum;//Test hallo neue Version 2

final class AdminPage extends lib\HomePage {
	use lib\DataBase;

	/*
	 * Beim Neuladen auswerten
	 */
	protected function init(){
		session_start();
		$rows=self::query("select * from tbl_threads");
		$toDelete=[];//Leer
		foreach ($rows as $row){
			$id=$row['id'];
			if (isset($_POST["del$id"])){//Eintrag Loeschen
			error_log("ID:".$id);
				array_push($toDelete,$id);
			}
		}
		//Alle raus
		foreach ($toDelete as $id) {
			self::query("delete from tbl_threads where ID = :id", array(':id' => $id));
			//self::query("delete from tbl_beitraege where thread_ID = :id", array(':id' => $id));
			/* Uebberfluessig weil: 
			ALTER TABLE `tbl_beitraege`
  				ADD CONSTRAINT `tbl_beitraege_ibfk_1` FOREIGN KEY (`thread_ID`) REFERENCES `tbl_threads` (`id`) 
  						ON DELETE CASCADE ON UPDATE CASCADE;
  			*/
		}
		
		if (isset($_POST["newthread"])) { //Neuer Eintrag
			$val=trim($_POST["newthread"]);
			if ($val!="") {
				self::query("insert into tbl_threads values (NULL, :val)", array(':val' => $val));
			}
		}
	}

	/*
	 * Ausgabe
	 */
	protected function body(){
		$ret='';
		if (!isset($_SESSION['loggedin'])) {
			die ($this->render('admin.php', 'admin_die'));
			//die ("<div id='meldung'>Bitte anmelden!</div>");
		}
		$ret .= $this->render('admin.php', 'admin_subnav');
		
		$rows=self::query("select * from tbl_threads");
		$ret .= $this->render('admin.php', 'table_head');
		foreach ($rows as $row) {
			$ret .= $this->render('admin.php', 'table_row', array('title' => $row['name'], 'name' => 'del'.$row['id'], 'id' => $row['id']));
		}
		$ret .= $this->render('admin.php', 'table_end');
		return $ret;
	}
}
?>
