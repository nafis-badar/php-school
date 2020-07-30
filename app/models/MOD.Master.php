<?php
require_once 'MOD.PD.php';

class MODMaster extends MODPD
{
	//public $UserName = null;
	function MasterByID($ID)
	{
		$sql="select ID,Name from tbl_PD where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
		function MasterNameByID($ID)
	{
		$sql="select Name from tbl_master where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
		function MasterCodeByID($ID)
	{
		$sql="select CODE from tbl_master where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['CODE'] ;
	}
		function MasterDepartmentByID($ID)
	{
		$sql="select DepartmentID from tbl_master where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		
		return $this->MasterNameByID($getInfo[0]['DepartmentID']) ;
	}
	function MasterExist($Display)
	{
		$result=0;
		$sql="select ID,Display from tbl_address where Display='$Display'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		//echo sizeof($getInfo);
		if (sizeof($getInfo)>=1)
		{
			
			$result=$getInfo[0]['ID'];	
		}
		else
		{
		$sql="INSERT INTO tbl_address(Display) values('$Display')";
		$getID= $this->insertQuery($sql);
		//echo $sql;
		//echo $getID;
		$result=$getID;
		//echo $result;
		}
		return $result;
	}
		
	function MasterUpdate($ID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID=0, $AttendanceTypeID=0, $DepartmentID=0, $DoctorID=0,$Capacity=0, $ClassTeacherID=0)
	{
		 $sql="Update tbl_master set
	MID= '$MID', 
CODE= '$CODE', 
MembershipID= '$MembershipID', 
Name= '$Name', 
Alias= '$Alias', 
PrintName= '$PrintName', 
Description= '$Description', 
MasterTypeID= '$MasterTypeID', 
DrCr= '$DrCr', 
Debit= '$Debit', 
Credit= '$Credit', 
IsMaster= '$IsMaster', 
IsMasterGroup= '$IsMasterGroup', 
CostCategoryID= '$CostCategoryID', 
MasterGroupID= '$MasterGroupID', 
DesignationID= '$DesignationID', 
PersonOrganisationID= '$PersonOrganisationID', 
AllocateRevenueItems= '$AllocateRevenueItems', 
AllocateNonRevenueItems= '$AllocateNonRevenueItems', 
AccountID= '$AccountID', 
IsActive= '$IsActive', 
IsBehaveAsSubLedger= '$IsBehaveAsSubLedger', 
IsAffectGrossProfit= '$IsAffectGrossProfit', 
SORT= '$SORT', 
CreditPeriod= '$CreditPeriod', 
CreditLimit= '$CreditLimit', 
MaintainBillByBill= '$MaintainBillByBill', 
TaxClassID= '$TaxClassID', 
TaxTypeID= '$TaxTypeID', 
Percentage= '$Percentage', 
IsCalculative= '$IsCalculative', 
OpeningBalance= '$OpeningBalance', 
ClosingBalance= '$ClosingBalance', 
Asset= '$Asset', 
Liabilities= '$Liabilities', 
Expense= '$Expense', 
Income= '$Income', 
NetDebitCreditBalanceForReporting= '$NetDebitCreditBalanceForReporting', 
UseForCalculation= '$UseForCalculation', 
AllocationMethodID= '$AllocationMethodID', 
  
ModifiedBy= '$ModifiedBy', 
 
ModifyTime= '$ModifyTime', 
PDID= '$PDID', 
Nominee= '$Nominee', 
Relation= '$Relation', 
NomineeAge= '$NomineeAge', 
NomineeDOB= '$NomineeDOB', 
NomineeContact= '$NomineeContact', 
NomineeAddressID= '$NomineeAddressID', 
OperationArea= '$OperationArea', 
OfficeID= '$OfficeID', 
DocumentNo= '$DocumentNo', 
RegisterDate= " . ($RegisterDate==NULL ? "NULL" : "'$RegisterDate'") . ", 
ImageID= '$ImageID', 
IsSystemConfigured= '$IsSystemConfigured', 
IsHidden= '$IsHidden', 
PriceLevelID= '$PriceLevelID', 
AttendanceTypeID= '$AttendanceTypeID', 
DepartmentID= '$DepartmentID', 
DoctorID= '$DoctorID' ,
Capacity='$Capacity', ClassTeacherID= '$ClassTeacherID' 
where ID=$ID ";
	 	   //   echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	function MasterInsert($ID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID=0, $AttendanceTypeID=0, $DepartmentID=0, $DoctorID=0,$Capacity=0, $ClassTeacherID=0)
	{
		 $sql="INSERT INTO tbl_master(MID, CODE, MembershipID, Name, Alias, PrintName, Description, MasterTypeID, DrCr, Debit, Credit, IsMaster, IsMasterGroup, CostCategoryID, MasterGroupID, DesignationID, PersonOrganisationID, AllocateRevenueItems, AllocateNonRevenueItems, AccountID, IsActive, IsBehaveAsSubLedger, IsAffectGrossProfit, SORT, CreditPeriod, CreditLimit, MaintainBillByBill, TaxClassID, TaxTypeID, Percentage, IsCalculative, OpeningBalance, ClosingBalance, Asset, Liabilities, Expense, Income, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, CreatedBy, ModifiedBy, CreateTime, ModifyTime, PDID, Nominee, Relation, NomineeAge, NomineeDOB, NomineeContact, NomineeAddressID, OperationArea, OfficeID, DocumentNo, RegisterDate, ImageID, IsSystemConfigured, IsHidden, PriceLevelID, AttendanceTypeID, DepartmentID, DoctorID,Capacity,ClassTeacherID) 
		    values('$MID', '$CODE', '$MembershipID', '$Name', '$Alias', '$PrintName', '$Description', '$MasterTypeID', '$DrCr', '$Debit', '$Credit', '$IsMaster', '$IsMasterGroup', '$CostCategoryID', '$MasterGroupID', '$DesignationID', '$PersonOrganisationID', '$AllocateRevenueItems', '$AllocateNonRevenueItems', '$AccountID', '$IsActive', '$IsBehaveAsSubLedger', '$IsAffectGrossProfit', '$SORT', '$CreditPeriod', '$CreditLimit', '$MaintainBillByBill', '$TaxClassID', '$TaxTypeID', '$Percentage', '$IsCalculative', '$OpeningBalance', '$ClosingBalance', '$Asset', '$Liabilities', '$Expense', '$Income', '$NetDebitCreditBalanceForReporting', '$UseForCalculation', '$AllocationMethodID', '$CreatedBy', '$ModifiedBy', '$CreateTime', '$ModifyTime', '$PDID', '$Nominee', '$Relation', '$NomineeAge', '$NomineeDOB', '$NomineeContact', '$NomineeAddressID', '$OperationArea', '$OfficeID', '$DocumentNo', " . ($RegisterDate==NULL ? "NULL" : "'$RegisterDate'") . ",  '$ImageID', '$IsSystemConfigured', '$IsHidden', '$PriceLevelID', '$AttendanceTypeID', '$DepartmentID', '$DoctorID','$Capacity','$ClassTeacherID')
		 ";
		    //echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $result;
	}
}
?>