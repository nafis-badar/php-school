<?php
require_once 'dbase.php';
class MODNews extends DBController
{
	//private $MasterTypeID=27;
	 
	function HeadLine($ID)
	{
		$sql="Select HeadLine Name From tbl_news where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function HighLights($ID)
	{
		$sql="Select HighLights Name From tbl_news where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function News($ID)
	{
		$sql="Select News Name From tbl_news where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function NewsDate($ID)
	{
		$sql="Select NewsDate Name From tbl_news where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function NewsDetails($ID)
	{
		$sql="Select *  From tbl_news where ID=$ID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
function NewsReport()
		{
			$sql="Select *  From tbl_news order by ID desc ";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
		
		function NewsUpdate($ID, $HeadLine, $HighLights, $News, $NewsDate,  $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		 $sql="Update tbl_news set
	 HeadLine='$HeadLine', HighLights='$HighLights', News='$News', ModifiedBy='$ModifiedBy', ModifyTime='$ModifyTime' where ID='$ID'";
	 	   //  echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	function NewsInsert($ID, $HeadLine, $HighLights, $News, $NewsDate,  $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		 $sql="INSERT INTO tbl_news(HeadLine, HighLights, News, NewsDate, CreatedBy, CreateTime, ModifiedBy, ModifyTime) 
		    values( '$HeadLine', '$HighLights', '$News', '$NewsDate',  '$CreatedBy', '$CreateTime', '$ModifiedBy', '$ModifyTime') ";
		//   echo $sql;
		 $result = $this->insertQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $result;
	}
			
}
?>
