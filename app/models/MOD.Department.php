<?php
require_once 'MOD.Master.php';
class MODDepartment extends MODMaster
{
	 
	private function MasterTypeID()
	{
	$MasterTypeID=26;	
	return $MasterTypeID;
		}
	function DepartmentName($ID)
	{
		$sql="Select Name From tbl_master where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function DepartmentDetails($ID)
	{
		$sql="SELECT m.ID,m.MID, m.Name, m.IsMaster,m.DepartmentID, m.Alias,m.CODE, m.PDID, p.TagLine, p.AddressID,m.RegisterDate, m.RegisterDate InCorporationDate, p.ContactNo, p.TEL, p.Website, p.Email, p.State, p.Country, p.PAN, p.CIN, p.TAN, p.VAT, p.CST, p.TIN, p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ." and m.ID=$ID limit 1";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
		function DepartmentReport()
		{
			$sql="SELECT m.ID, m.MID, m.Name,m.CODE, m.Alias, m.PDID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate,p.ContactNo, p.TEL,p.Website,p.Email,p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ."";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
			 
			}
}
?>
