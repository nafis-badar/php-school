<?php
require_once 'dbase.php';

class MODUsers extends DBController
{
	
	function UserName($ID)
	{
		$sql="Select Name From tbl_master where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function UserPassword($ID)
	{
		$sql="Select Password From tbl_master where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Password'] ;
	}
	function UserIDByMasterID($ID)
	{
		$sql="Select ID From tbl_users where MasterID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['ID'] ;
	}
	function UserDetails($ID)
	{
		$sql="SELECT m.ID,m.MID, m.Name, m.IsMaster,m.DepartmentID, m.Alias,m.CODE, m.PDID, p.TagLine, p.AddressID,m.RegisterDate, m.RegisterDate InCorporationDate, p.ContactNo, p.TEL, p.Website, p.Email, p.State, p.Country, p.PAN, p.CIN, p.TAN, p.VAT, p.CST, p.TIN, p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ." and m.ID=$ID limit 1";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
		function UserReport()
		{
			$sql="SELECT m.ID, m.Name,m.CODE,m.DepartmentID, m.Alias, m.PDID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate,p.ContactNo, p.TEL,p.Website,p.Email,p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ."";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
		function UserInsert()
		{
			$sql="SELECT m.ID, m.Name,m.CODE,m.DepartmentID, m.Alias, m.PDID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate,p.ContactNo, p.TEL,p.Website,p.Email,p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ."";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
		function UserUpdate()
		{
			$sql="SELECT m.ID, m.Name,m.CODE,m.DepartmentID, m.Alias, m.PDID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate,p.ContactNo, p.TEL,p.Website,p.Email,p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ."";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
}
?>
