<?php
require_once 'MOD.Master.php';
class MODCompany extends MODMaster
{
	function CompanyName()
	{
		$sql="Select Name From tbl_master where ID=1";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function CompanyDetails()
	{
		$sql="SELECT m.ID, p.Name, m.Alias, m.PDID, p.TagLine, p.AddressID, 
		m.RegisterDate , p.DOB, p.DOJ InCorporationDate, p.ContactNo, p.TEL,p.Website,p.Email, 
		p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  
		FROM tbl_master m 
		left outer join tbl_pd p on p.ID=m.PDID 
		where m.MasterTypeID=1 limit 1";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
	/*function fetchCompanyName($id) {
	global $Company_Name;
	if(!empty($id)) {
		$sql="SELECT name FROM tbl_company
			WHERE id = ";
			$sql .= sql_escape($id);
			$sql .=" LIMIT 1";
			
			$row = fetchOne($sql);
		}
		return !empty($row) ? $row['name'] : null;

	}	*/
}

/*	  function insert($table_name, $data)
	{
		$string="INSERT INTO ".$table_name." (";
		$string .=implode(",", array_keys($data)) . ') VALUES (';
		$string .= "'" . implode("','", array_values($data)) . "')";
		
		$ID= $this->insertQuery($string);
		return $ID;
		}*/
?>
