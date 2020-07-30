<?php
if (!isset($_SESSION)) {session_start();}
if(isset($_SESSION['loginid'])==0){header('Refresh:0;URL=index.php?p=login');}
 $db_handle = new DBController();

class MasterClass{

	/*private $host = DB_HOST;
	private $user = DB_USERNAME;
	private $password = DB_PASSWORD;
	private $database = DB_NAME;
*/


	function MasterDB() {
		$db_handle = new DBController();
		$sql="Select * from tbl_master";
		$PatientArray=$db_handle->runQuery($sql);
		return $PatientArray;
	}
	
	function MasterDB_MasterTypeID($MasterTypeID) {
		$db_handle = new DBController();
		$sql='';
		if($MasterTypeID==39)
		{
		$sql="Select ID,Name,SKU,Price from tbl_item ";
		 
		}
		else
		{
			$sql="Select ID, MID, CODE, Name  from tbl_master where MasterTypeID=$MasterTypeID  order by Name";
		
		}
		
			$PatientArray=$db_handle->runQuery($sql);
		return $PatientArray;
		 //echo $sql;
		
	}
 function Temp_TestCartDB() {
		$db_handle = new DBController();
		$sql="Select * from tbl_cartdetails_temp where CreatedBy=".$_SESSION['UserID']."";
		$CartArray=$db_handle->runQuery($sql);
		return $CartArray;
	}

//	public function runQuery($query) {
		
 
//Execute your SQL query.
//mysql_query("SELECT id, name FROM users LIMIT 5");
 
//Record the end time after the query has finished running.

		//global $queryTime;
//		global $conndb;
//		$started = microtime(true);
//		$result = mysqli_query($conndb,$query);
//		
//		while($row=mysqli_fetch_assoc($result)) {
//			$resultset[] = $row;
//		}
//				$end = microtime(true);
//		$duration = $end - $started;
//		//$hours = (int)($duration/60/60);
//		//$minutes = (int)($duration/60)-$hours*60;
////		 $queryTime = number_format($difference, 10);
//		 $queryTime = $duration;
//		//echo $queryTime; 
//		if(!empty($resultset))
//			return $resultset;
//			
//	
//	
// 
////Calculate the difference in microseconds.
//
// 
////Format the time so that it only shows 10 decimal places.
//
//	}
//	function insertQuery($query) {
//		global $conndb;
//		$result = mysqli_query($conndb,$query);
//		if(!$result)
//		{
//			return 0;
//			}else{
//							return mysqli_insert_id($conndb);
//				}
//	}
//
//	function numRows($query) {
//		global $conndb;
//		$result  = mysqli_query($conndb,$query);
//		$rowcount = mysqli_num_rows($result);
//		return $rowcount;
//	}
function Permission($PageID,$MasterID) {
		$db_handle = new DBController();
		$sql="Select ID from user_page where MasterID=$MasterID and PageID=$PageID and IsActive=1";
		$UserArray=$db_handle->runQuery($sql);
		if(count($UserArray,0)==0)
		return 0;
		else
		return 1;
	}
}
 
?>
