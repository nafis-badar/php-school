<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/MOD.Accounts.php';
include_once '../models/MOD.Users.php';
//echo "BLANK";
//require_once("app/includes/dbase.php");
//$db_handle = new DBController();
$handle= new MODAccounts();
$Users_handle= new MODUsers();

//ADDRESS

$AddressID= '0'; 
$HouseNo='';
$AddressLine1= ''; 
$AddressLine2= ''; 
$LANDMARK= ''; 
$VILL= ''; 
$PO= ''; 
$DIST= ''; 
$PIN= ''; 
$State= ''; 
$StateID= '33'; 
$Country= ''; 
$CountryID= '91'; 
$ContactPerson= ''; 
$ContactNo= ''; 
$Email= ''; 
$WebSite= ''; 
$Address= ''; 
$MacID= '0'; 
$CreatedBy= ''; 
$CreateTime= ''; 
$OldID= '0'; 
// END OF ADDRESS INITIALISING
//PD 
$PDID=0;
$Name= ''; 
$AddressID= '0'; 
$LocalAddressID= '0'; 
$GurdianName= ''; 
$GurdianRelation= ''; 
$SpouseName= ''; 
$ContactNo= ''; 
$PAN= ''; 
$VAT= ''; 
$DOB= ''; 
$Age= ''; 
$DOJ= ''; 
$Gender= ''; 
$Email= ''; 
$Website= ''; 
$EPFNo= ''; 
$ESINo= ''; 
$PassportNo= ''; 
$Country= ''; 
$AadhaarNo= ''; 
$Path= ''; 
$Image= ''; 
$ImageId= ''; 
$CreateTime= ''; 
$ModifyTime= ''; 
$CreatedBy= ''; 
$ModifiedBy= ''; 
$Description= ''; 
$BankName= ''; 
$BankBranch= ''; 
$AccountNo= ''; 
$BANKCODE= ''; 
$Occupation= ''; 
$Fax= ''; 
$VoterID= ''; 
$area_operation= ''; 
$BankAccountType= ''; 
$OLDID= '0'; 
$MaritalStatus= ''; 
$Education= ''; 
$Nationality= ''; 
$AnnualIncome= '0'; 
$TagLine= ''; 
$TEL= ''; 
$State= ''; 
$CIN= ''; 
$TAN= ''; 
$CST= ''; 
$TIN= ''; 
$GST= ''; 
$MAP= ''; 
$WhatsApp= ''; 
$DesignationID= '0'; 
$Religion= ''; 
$FatherName= ''; 
$FatherEducation= ''; 
$FatherOccupation= ''; 
$MotherName= ''; 
$MotherEducation= ''; 
$MotherOccupation= ''; 
$Dependents= '0'; 
$GurdianOccupation= ''; 
$PreviousSchool= ''; 
$PreviousClass= ''; 
$ReasonOfLeaving= ''; 
$BirthMark= ''; 
$AnyDisease= ''; 
$DiseasePeriod= '1'; 
$Disease= ''; 
$DiseasePrecaution= ''; 
$AdmissionClass= ''; 
$AdmissionAge= ''; 
$AdmissionDate= ''; 
 
// All tbl_PD coloumn initilized as blank

// tbl_Master
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
$CreatedBy= '0'; 
$ModifiedBy= '0'; 
$CreateTime= ''; 
$ModifyTime= ''; 
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
$MID=$_REQUEST['MID'];

$CODE=$_REQUEST['CODE'];
$MasterTypeID=$_REQUEST['MasterTypeID'];
$MasterGroupID=$_REQUEST['MasterGroupID'];
$DrCr=$_REQUEST['DrCr'];
$IsMaster=$_REQUEST['IsMaster'];
$PDID=$_REQUEST['PDID'];	
$Name=$_REQUEST['Name'];
$AddressID=$_REQUEST['AddressID'];
//$LocalAddressID=$_REQUEST['AddressID'];
$ContactNo=$_REQUEST['ContactNo'];
$Gender=$_REQUEST['Gender'];
$Religion=$_REQUEST['Religion'];
$AadhaarNo=$_REQUEST['AadhaarNo'];
$TEL='';
$Nationality= $_REQUEST['Nationality'];
$AnnualIncome= $_REQUEST['AnnualIncome'];
$Address=ltrim($_REQUEST['Address']);
$HouseNo=$_REQUEST['HouseNo'];
$AddressLine1= $_REQUEST['AddressLine1']; 
$AddressLine2= $_REQUEST['AddressLine2'];
$LANDMARK= ''; 
$VILL= ''; 
$PO= $_REQUEST['PO'];
$DIST= $_REQUEST['DIST']; 
$PIN= $_REQUEST['PIN']; 
$State= $_REQUEST['State'];
$StateID= '33'; 
$Country= $_REQUEST['Country'];
$CountryID= '91'; 
//echo $Address;
//$DOJ=$_REQUEST['RegDate'];
//$RegisterDate=$_REQUEST['RegDate'];
$Email='';//$_REQUEST['Email'];
$Website='';


// $Description=$_REQUEST['Operation'];
// $TagLine=$_REQUEST['TagLine'];
 $State=$_REQUEST['State'];
 $Country=$_REQUEST['Country'];
 //$DepartmentID= $_REQUEST['DepartmentID']; 
 $PAN='';
// $GST=$_REQUEST['GST'];
 $CIN='';
 $TAN='';
 $VAT='';
 $CST='';
 $TIN='';
 
// $Religion= $_REQUEST['Religion'];

$DOB= $_REQUEST['DOB'];
$FatherName= $_REQUEST['FatherName'];
$FatherEducation= $_REQUEST['FatherEducation'];
$FatherOccupation= $_REQUEST['FatherOccupation'];
$MotherName= $_REQUEST['MotherName'];
$MotherEducation= $_REQUEST['MotherEducation'];
$MotherOccupation= $_REQUEST['MotherOccupation'];
$Dependents= $_REQUEST['Dependents'];
$GurdianName= $_REQUEST['GurdianName'];
$GurdianRelation= $_REQUEST['GurdianRelation'];
$GurdianOccupation= $_REQUEST['GurdianOccupation'];
$PreviousSchool= $_REQUEST['PreviousSchool'];
$PreviousClass= $_REQUEST['PreviousClass'];
$ReasonOfLeaving= $_REQUEST['ReasonOfLeaving'];
$BirthMark= $_REQUEST['BirthMark'];
$AnyDisease= $_REQUEST['AnyDisease'];
$DiseasePeriod= $_REQUEST['DiseasePeriod'];
$Disease= $_REQUEST['Disease'];
$DiseasePrecaution= $_REQUEST['DiseasePrecaution'];
$AdmissionClass= $_REQUEST['AdmissionClass'];
$AdmissionAge= $_REQUEST['AdmissionAge'];
$AdmissionDate= $_REQUEST['AdmissionDate'];

$ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
 $CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s");
 /* $insert_data= array(
	'Name' => $this->sql_escape($Name),
	
	);*/
	if($AddressID==0){
		$AddressID=$handle->AddressExist($AddressID,$HouseNo, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID);
	}
	else{
		$AddressID=$handle->AddressUpdate($AddressID,$HouseNo, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID);
	} 
	
	if($PDID==0){
		$PDID=$handle->PDInsert($PDID, $Name, $AddressID, $LocalAddressID, $GurdianName, $GurdianRelation, $SpouseName, $ContactNo, $PAN, $VAT, $DOB, $Age, $DOJ, $Gender, $Email, $Website, $EPFNo, $ESINo, $PassportNo, $Country, $AadhaarNo, $Path, $Image, $ImageID, $CreateTime, $ModifyTime, $CreatedBy, $ModifiedBy, $Description, $BankName, $BankBranch, $AccountNo, $BANKCODE, $Occupation, $Fax, $VoterID, $area_operation, $BankAccountType, $OLDID, $MaritalStatus, $Education, $Nationality, $AnnualIncome, $TagLine, $TEL, $State, $CIN, $TAN, $CST, $TIN, $GST, $MAP, $WhatsApp, $DesignationID, $Religion, $FatherName, $FatherEducation, $FatherOccupation, $MotherName, $MotherEducation, $MotherOccupation, $Dependents, $GurdianOccupation, $PreviousSchool, $PreviousClass, $ReasonOfLeaving, $BirthMark, $AnyDisease, $DiseasePeriod, $Disease, $DiseasePrecaution, $AdmissionClass, $AdmissionAge, $AdmissionDate);
	}
	else
		{
	$PDID=$handle->PDUpdate($PDID, $Name, $AddressID, $LocalAddressID, $GurdianName, $GurdianRelation, $SpouseName, $ContactNo, $PAN, $VAT, $DOB, $Age, $DOJ, $Gender, $Email, $Website, $EPFNo, $ESINo, $PassportNo, $Country, $AadhaarNo, $Path, $Image, $ImageID , $CreateTime, $ModifyTime, $CreatedBy, $ModifiedBy, $Description, $BankName, $BankBranch, $AccountNo, $BANKCODE, $Occupation, $Fax, $VoterID, $area_operation, $BankAccountType, $OLDID, $MaritalStatus, $Education, $Nationality, $AnnualIncome, $TagLine, $TEL, $State, $CIN, $TAN, $CST, $TIN, $GST, $MAP, $WhatsApp, $DesignationID,  $Religion, $FatherName, $FatherEducation, $FatherOccupation, $MotherName, $MotherEducation, $MotherOccupation, $Dependents, $GurdianOccupation, $PreviousSchool, $PreviousClass, $ReasonOfLeaving, $BirthMark, $AnyDisease, $DiseasePeriod, $Disease, $DiseasePrecaution, $AdmissionClass, $AdmissionAge, $AdmissionDate);	
	}
	
if($MasterID==0){
		$MasterID=$handle->MasterInsert($MasterID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID, $AttendanceTypeID, $DepartmentID, $DoctorID);
	}
	else
		{
	$MasterID=$handle->MasterUpdate($MasterID, $MID, $CODE, $MembershipID, $Name, $Alias, $PrintName, $Description, $MasterTypeID, $DrCr, $Debit, $Credit, $IsMaster, $IsMasterGroup, $CostCategoryID, $MasterGroupID, $DesignationID, $PersonOrganisationID, $AllocateRevenueItems, $AllocateNonRevenueItems, $AccountID, $IsActive, $IsBehaveAsSubLedger, $IsAffectGrossProfit, $SORT, $CreditPeriod, $CreditLimit, $MaintainBillByBill, $TaxClassID, $TaxTypeID, $Percentage, $IsCalculative, $OpeningBalance, $ClosingBalance, $Asset, $Liabilities, $Expense, $Income, $NetDebitCreditBalanceForReporting, $UseForCalculation, $AllocationMethodID, $CreatedBy, $ModifiedBy, $CreateTime, $ModifyTime, $PDID, $Nominee, $Relation, $NomineeAge, $NomineeDOB, $NomineeContact, $NomineeAddressID, $OperationArea, $OfficeID, $DocumentNo, $RegisterDate, $ImageID, $IsSystemConfigured, $IsHidden, $PriceLevelID, $AttendanceTypeID, $DepartmentID, $DoctorID);	
	}
	
	//$Users_handle->UserExist($MasterID);
	 
