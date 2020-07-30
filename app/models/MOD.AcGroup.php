<?php
require_once 'dbase.php';

class MODAccounts extends DBController
{
 function getAcGrouprIndex()
	{
		//echo "Ledger Module";
		$getinfo = $this->runQuery("SELECT * FROM tbl_master where mastertypeid=6 and MasterGroupID<>101 order by MasterGroupID,Name"); 
		return $getinfo;
		}
function getMasterinfo($MasterGroupID)
	{
		//echo "Ledger Module";
		$getinfo = $this->runQuery("SELECT * FROM tbl_master where ID=$MasterGroupID  order by Name"); 
		return $getinfo;
		}
}
