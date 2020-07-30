 <?php
if (!isset($_SESSION)) {session_start();}
require_once("../models/MOD.Accounts.php");
$Handle = new MODAccounts();

$Type=$_REQUEST['Type'];
 //echo $Type;
if ($Type=='GetNature')
{
	//$MasterGroupID=101;
	$ID=$_REQUEST['ID'];
	//echo $ID.'<br>';
	if($ID==0)
	$MasterGroupID=101;
	else
	$MasterGroupID=$Handle->getMasterGroupID($ID);
	
	$DrCr=$Handle->getDrCr($MasterGroupID);
	
	if($MasterGroupID==101)
	{
	 	?>
        <input type="hidden" id="DrCr" name="DrCr" value="<?php echo $DrCr; ?>">
    <select name="MasterGroupID" id="MasterGroupID"  class="form-control" onChange="getDrCr();">
	<option value="0">Please select...</option>
          <?php
	$getMasterGroupinfo = $Handle->MasterGroupinfo();
 	for ($ic = 0; $ic < count($getMasterGroupinfo ,0); $ic++) 
		{?>
			<option 
			  value="<?php echo $getMasterGroupinfo[$ic]['ID'];?>" <?php if($MasterGroupID==$getMasterGroupinfo[$ic]['ID']) echo 'selected= "selected"'; ?>><?php echo $getMasterGroupinfo[$ic]['Name'];?></option>
			  <?php
		}
		?>
        </select>
        <?php
	}
	else
	{
	
	?>
     <input type="hidden" id="DrCr" name="DrCr" value="<?php echo $DrCr; ?>">
    <input type="hidden"  name="MasterGroupID" id="MasterGroupID"  class="form-control" 
    value="<?php echo $MasterGroupID; ?>" >
    <input type="text"  name="MasterGroup" id="MasterGroup"  class="form-control" 
    value="<?php echo $Handle->getMasterName($MasterGroupID); ?>" readonly >
    
	 <?php
	}
	
}
elseif ($Type=='DrCr')
{
$ID=$_REQUEST['MasterGroupID'];
$DrCr=$Handle->getDrCr($ID);
echo $DrCr;
}
elseif ($Type=='SaveAcGroup')
{
// tbl_Master
//echo "AAA";
$ID='0';
$MasterID= '0'; 
$MID= '0'; 
$CODE= ''; 
$MembershipID= '0'; 
$Name= ''; 
$Alias= ''; 
$PrintName= ''; 
$Description= ''; 
$MasterTypeID= '0'; 
$DrCr= '0'; 
$Debit= '0'; 
$Credit= '0'; 
$IsMaster= '0'; 
$IsMasterGroup= '0'; 
$CostCategoryID= '0'; 
$MasterGroupID= '0'; 
$DesignationID= '0'; 
$PersonOrganisationID= '0'; 
$AllocateRevenueItems= '0'; 
$AllocateNonRevenueItems= '0'; 
$AccountID= '0'; 
$IsActive= '0'; 
$IsBehaveAsSubLedger= '0'; 
$IsAffectGrossProfit= '0'; 
$SORT= '0'; 
$CreditPeriod= '0'; 
$CreditLimit= '0'; 
$MaintainBillByBill= '0'; 
$TaxClassID= '0'; 
$TaxTypeID= '0'; 
$Percentage= '0'; 
$IsCalculative= '0'; 
$OpeningBalance= '0'; 
$ClosingBalance= '0'; 
$Asset= '0'; 
$Liabilities= '0'; 
$Expense= '0'; 
$Income= '0'; 
$NetDebitCreditBalanceForReporting= '0'; 
$UseForCalculation= '0'; 
$AllocationMethodID= '0'; 
 $ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
 $CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s"); ; 
$PDID= '0'; 
$Nominee= ''; 
$Relation= ''; 
$NomineeAge= ''; 
$NomineeDOB= ''; 
$NomineeContact= ''; 
$NomineeAddressID= '0'; 
$OperationArea= ''; 
$OfficeID= '0'; 
$DocumentNo= ''; 
$RegisterDate= ''; 
$ImageID= '0'; 
$IsSystemConfigured= '0'; 
$IsHidden= '0'; 
$PriceLevelID= '0'; 
$AttendanceTypeID= '0'; 
$DepartmentID= '0'; 
$DoctorID= '0'; 
// All tbl_Master coloum initialized as Default
	$ID=$_REQUEST['ID'];
	$MasterID=$_REQUEST['ID'];
	$MasterTypeID=$_REQUEST['MasterTypeID'];
	
	$Name=$_REQUEST['Name'];
	$MID = $_REQUEST['MID'];
	$MasterGroupID = $_REQUEST['MasterGroupID'];
	$DrCr = $_REQUEST['DrCr'];
//	echo $MasterID;
	if($MasterID==0){
		$MasterID=$Handle->MasterInsert($MasterID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID, $AttendanceTypeID, $DepartmentID, $DoctorID);
	}
	else
		{
	$MasterID=$Handle->MasterUpdate($MasterID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID, $AttendanceTypeID, $DepartmentID, $DoctorID);	
	}
	
}

elseif ($Type=='SaveLedger')
{
// tbl_Master
$ID='0';
$MasterID= '0'; 
$MID= '0'; 
$CODE= ''; 
$MembershipID= '0'; 
$Name= ''; 
$Alias= ''; 
$PrintName= ''; 
$Description= ''; 
$MasterTypeID= '0'; 
$DrCr= '0'; 
$Debit= '0'; 
$Credit= '0'; 
$IsMaster= '0'; 
$IsMasterGroup= '0'; 
$CostCategoryID= '0'; 
$MasterGroupID= '0'; 
$DesignationID= '0'; 
$PersonOrganisationID= '0'; 
$AllocateRevenueItems= '0'; 
$AllocateNonRevenueItems= '0'; 
$AccountID= '0'; 
$IsActive= '0'; 
$IsBehaveAsSubLedger= '0'; 
$IsAffectGrossProfit= '0'; 
$SORT= '0'; 
$CreditPeriod= '0'; 
$CreditLimit= '0'; 
$MaintainBillByBill= '0'; 
$TaxClassID= '0'; 
$TaxTypeID= '0'; 
$Percentage= '0'; 
$IsCalculative= '0'; 
$OpeningBalance= '0'; 
$ClosingBalance= '0'; 
$Asset= '0'; 
$Liabilities= '0'; 
$Expense= '0'; 
$Income= '0'; 
$NetDebitCreditBalanceForReporting= '0'; 
$UseForCalculation= '0'; 
$AllocationMethodID= '0'; 
 $ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
 $CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s"); ; 
$PDID= '0'; 
$Nominee= ''; 
$Relation= ''; 
$NomineeAge= ''; 
$NomineeDOB= ''; 
$NomineeContact= ''; 
$NomineeAddressID= '0'; 
$OperationArea= ''; 
$OfficeID= '0'; 
$DocumentNo= ''; 
$RegisterDate= ''; 
$ImageID= '0'; 
$IsSystemConfigured= '0'; 
$IsHidden= '0'; 
$PriceLevelID= '0'; 
$AttendanceTypeID= '0'; 
$DepartmentID= '0'; 
$DoctorID= '0'; 
// All tbl_Master coloum initialized as Default
	$ID=$_REQUEST['ID'];
	$MasterID=$_REQUEST['ID'];
	$MasterTypeID=$_REQUEST['MasterTypeID'];
	
	$Name=$_REQUEST['Name'];
	$MID = $_REQUEST['MID'];
	$MasterGroupID = $_REQUEST['MasterGroupID'];
	$DrCr = $_REQUEST['DrCr'];
	// echo $DrCr;
	if($MasterID==0){
		$MasterID=$Handle->MasterInsert($MasterID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID, $AttendanceTypeID, $DepartmentID, $DoctorID);
	}
	else
		{
	$MasterID=$Handle->MasterUpdate($MasterID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID, $AttendanceTypeID, $DepartmentID, $DoctorID);	
	}
}
?>