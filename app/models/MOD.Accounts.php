<?php
require_once 'MOD.Master.php';

class MODAccounts extends MODMaster
{
	function getAcGroupIndex()
	{
		$getinfo = $this->runQuery("SELECT * FROM tbl_master where mastertypeid=6 and MasterGroupID<>101 order by  Name"); 
		return $getinfo;
	}
	function getLedgerIndex()
	{
		$getinfo = $this->runQuery("SELECT * FROM tbl_master where mastertypeid=7 and MasterGroupID<>101 order by  Name"); 
		return $getinfo;
	}
	function getSupplierIndex()
	{
		$getinfo = $this->runQuery("SELECT * FROM tbl_master where mastertypeid=7 and MasterGroupID<>101 and MID=132 order by  Name"); 
		return $getinfo;
	}
	function getCustomerIndex()
	{
		$getinfo = $this->runQuery("SELECT * FROM tbl_master where mastertypeid=7 and MasterGroupID<>101 and MID=131 order by  Name"); 
		return $getinfo;
	}
	function getStudentIndex($Str='')
	{
		$sql="SELECT * FROM tbl_master where mastertypeid=42 ";
		if($Str=='')
		{
		$sql.=" order by  Name";
		}
		else
		{
			$sql.=" and (Name like '%$Str%' or CODE like '%$Str%' ) order by  Name";
		}
		//echo $sql;
		$getinfo = $this->runQuery($sql); 
		return $getinfo;
	}
	
//$Handle->runQuery("SELECT * FROM tbl_master where mastertypeid=6 and MasterGroupID<>101 and ID=$ID order by MasterGroupID,Name");

	function getMasterinfo($ID)
	{
		$getinfo = $this->runQuery("SELECT * FROM tbl_master where ID=$ID  order by Name"); 
		return $getinfo;
	}
	function getMasterName($ID)
	{
		$getinfo = $this->runQuery("SELECT Name FROM tbl_master where ID=$ID"); 
		if(count($getinfo,0)==1)
		return $getinfo[0]['Name'];
	}
	function MasterGroupinfo()
	{
		$getinfo = $this->runQuery("SELECT ID,Name FROM tbl_master where MasterTypeID=6 and (IsMasterGroup=1)");
		return $getinfo;
		}
	function getMasterGroupID($ID)
	{
		$getinfo = $this->runQuery("SELECT MasterGroupID FROM tbl_master where ID=$ID"); 
		//echo $getinfo[0]['MasterGroupID'];
		if(count($getinfo,0)==1)
		{
			return $getinfo[0]['MasterGroupID'];
		}
		else
		{
			return 101;
		}
	}
	function getDrCr($ID)
	{
		$getinfo = $this->runQuery("SELECT DrCr FROM tbl_master where ID=$ID"); 
		//echo $getinfo[0]['MasterGroupID'];
		if(count($getinfo,0)==1)
		{
		return $getinfo[0]['DrCr'];
		}
		else
		{
		return 0;
		}
	}
	private function SupplierTypeID()
	{
		$MasterTypeID=7;	
		return $MasterTypeID;
	}
	
	function SupplierDetails($ID)
	{
		$sql="SELECT m.ID, m.MID, m.CODE, m.MembershipID, m.Name, m.Alias, m.PrintName, m.Description, m.MasterTypeID, m.DrCr, m.Debit, m.Credit, m.IsMaster, m.IsMasterGroup, m.CostCategoryID, m.MasterGroupID, m.DesignationID, m.PersonOrganisationID, m.AllocateRevenueItems, m.AllocateNonRevenueItems, m.AccountID, m.IsActive, m.IsBehaveAsSubLedger, m.IsAffectGrossProfit, m.SORT, m.CreditPeriod, m.CreditLimit, m.MaintainBillByBill, m.TaxClassID, m.TaxTypeID, m.Percentage, m.IsCalculative, m.OpeningBalance, m.ClosingBalance, m.Asset, m.Liabilities, m.Expense, m.Income, m.NetDebitCreditBalanceForReporting, m.UseForCalculation, m.AllocationMethodID, m.CreatedBy, m.ModifiedBy, m.CreateTime, m.ModifyTime, m.PDID, m.Nominee, m.Relation, m.NomineeAge, m.NomineeDOB, m.NomineeContact, m.NomineeAddressID, m.OperationArea, m.OfficeID, m.DocumentNo, m.RegisterDate, m.ImageID, m.IsSystemConfigured, m.IsHidden, m.PriceLevelID, m.AttendanceTypeID, m.DepartmentID, m.DoctorID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate, p.ContactNo, p.TEL, p.Website, p.Email, p.State, p.Country, p.PAN, p.CIN, p.TAN, p.VAT, p.CST, p.TIN, p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->SupplierTypeID() ." and m.ID=$ID limit 1";
		// echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
	}
	private function CustomerTypeID()
	{
		$MasterTypeID=7;	
		return $MasterTypeID;
	}
	function CustomerDetails($ID)
	{
		$sql="SELECT m.ID, m.MID, m.CODE, m.MembershipID, m.Name, m.Alias, m.PrintName, m.Description, m.MasterTypeID, m.DrCr, m.Debit, m.Credit, m.IsMaster, m.IsMasterGroup, m.CostCategoryID, m.MasterGroupID, m.DesignationID, m.PersonOrganisationID, m.AllocateRevenueItems, m.AllocateNonRevenueItems, m.AccountID, m.IsActive, m.IsBehaveAsSubLedger, m.IsAffectGrossProfit, m.SORT, m.CreditPeriod, m.CreditLimit, m.MaintainBillByBill, m.TaxClassID, m.TaxTypeID, m.Percentage, m.IsCalculative, m.OpeningBalance, m.ClosingBalance, m.Asset, m.Liabilities, m.Expense, m.Income, m.NetDebitCreditBalanceForReporting, m.UseForCalculation, m.AllocationMethodID, m.CreatedBy, m.ModifiedBy, m.CreateTime, m.ModifyTime, m.PDID, m.Nominee, m.Relation, m.NomineeAge, m.NomineeDOB, m.NomineeContact, m.NomineeAddressID, m.OperationArea, m.OfficeID, m.DocumentNo, m.RegisterDate, m.ImageID, m.IsSystemConfigured, m.IsHidden, m.PriceLevelID, m.AttendanceTypeID, m.DepartmentID, m.DoctorID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate, p.ContactNo, p.TEL, p.Website, p.Email, p.State, p.Country, p.PAN, p.CIN, p.TAN, p.VAT, p.CST, p.TIN, p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->CustomerTypeID() ." and m.ID=$ID limit 1";
		// echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
	}	
	private function StudentTypeID()
	{
		$MasterTypeID=42;	
		return $MasterTypeID;
	}	
	function StudentDetails($ID)
	{
		$sql="SELECT m.ID, m.MID, m.CODE, m.MembershipID, m.Name, m.Alias, m.PrintName, m.Description, m.MasterTypeID, m.DrCr, m.Debit, m.Credit, m.IsMaster, m.IsMasterGroup, m.CostCategoryID, m.MasterGroupID, m.DesignationID, m.PersonOrganisationID, m.AllocateRevenueItems, m.AllocateNonRevenueItems, m.AccountID, m.IsActive, m.IsBehaveAsSubLedger, m.IsAffectGrossProfit, m.SORT, m.CreditPeriod, m.CreditLimit, m.MaintainBillByBill, m.TaxClassID, m.TaxTypeID, m.Percentage, m.IsCalculative, m.OpeningBalance, m.ClosingBalance, m.Asset, m.Liabilities, m.Expense, m.Income, m.NetDebitCreditBalanceForReporting, m.UseForCalculation, m.AllocationMethodID, m.CreatedBy, m.ModifiedBy, m.CreateTime, m.ModifyTime, m.PDID, m.Nominee, m.Relation, m.NomineeAge, m.NomineeDOB, m.NomineeContact, m.NomineeAddressID, m.OperationArea, m.OfficeID, m.DocumentNo, m.RegisterDate, m.ImageID, m.IsSystemConfigured, m.IsHidden, m.PriceLevelID, m.AttendanceTypeID, m.DepartmentID, m.DoctorID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate, p.Gender, p.Nationality, p.DOB, p.GurdianName, p.GurdianRelation, p.ContactNo, p.TEL, p.Website, p.Email, p.State, p.Country, p.PAN, p.CIN, p.TAN, p.VAT, p.CST, p.TIN, p.GST,p.AadhaarNo, p.Religion, p.FatherName, p.FatherEducation, p.FatherOccupation, p.MotherName, p.MotherEducation, p.MotherOccupation, p.Dependents, p.GurdianOccupation, p.PreviousSchool, p.PreviousClass, p.ReasonOfLeaving, p.BirthMark, p.AnyDisease, p.DiseasePeriod, p.Disease, p.DiseasePrecaution, p.AdmissionClass, p.AdmissionAge, p.AdmissionDate  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.MasterTypeID=". $this->StudentTypeID() ." and m.ID=$ID limit 1";
		 // echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
	}	
}
?>