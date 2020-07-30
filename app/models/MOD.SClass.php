<?php
require_once 'MOD.Master.php';
class MODSClass extends MODMaster
{
	 //private $MasterTypeID=4;
	private function MasterTypeID()
	{
	$MasterTypeID=44;	
	return $MasterTypeID;
		}
	function SClassName($ID)
	{
		$sql="Select Name From tbl_master where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	
	function SClassDetails($ID)
	{
		$sql="SELECT m.ID,m.MID,m.MasterGroupID, m.MembershipID,m.PrintName,m.Description,m.MasterTypeID,m.DrCr, m.Name, m.IsMaster,m.DepartmentID, m.Alias,m.CODE,m.Capacity,m.ClassTeacherID, m.PDID, p.TagLine, p.AddressID,m.RegisterDate, m.RegisterDate InCorporationDate, p.ContactNo, p.TEL, p.Website, p.Email, p.State, p.Country, p.PAN, p.CIN, p.TAN, p.VAT, p.CST, p.TIN, p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ." and m.ID=$ID limit 1";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		
		return $getInfo ;
		}
function SClassReport($MID=0) 
		{
		//	$sql="SELECT m.ID, m.Name,m.CODE,m.DepartmentID, m.Alias, m.PDID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate,p.ContactNo, p.TEL,p.Website,p.Email,p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->MasterTypeID() ."";
		//echo $this->MasterTypeID();
		$sql="SELECT m.ID,m.MID,m.MasterGroupID, m.Name,m.CODE,m.DepartmentID, m.Alias,m.Capacity,m.ClassTeacherID, m.PDID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate,p.ContactNo, p.TEL,p.Website,p.Email,p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MID=$MID and m.MasterTypeID=". $this->MasterTypeID() ."";
		 //  echo $sql;
		$getInfo= $this->runQuery($sql);
		//echo count($getInfo,0);
		return $getInfo ;
		}
			
}
?>
