<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/MOD.VoucherMaster.php';
//include_once '../models/MOD.Users.php';
//echo "BLANK";
//require_once("app/includes/dbase.php");
//$db_handle = new DBController();
$Handle= new MODVoucherMaster();
//$Users_handle= new MODUsers();
//Begining of voucher master
$ID='0';

$RefVoucherID='0';
$AssignmentID='0';
$VoucherNo='';
$VoucherCategoryID='0';
$VoucherTypeID='0';
$VoucherDate='';
$TestDate='';
$ActiveDate='';
$TargetDate='';
$DocumentNo='';
$InventoryNature='';
$IsEffectInventoryValue='';
$AccountsNature='';
$IsEffectLedgerValue='';
$PayrollNature='';
$IsEffectPayrollValue='';
$VoucherNature='';
$IsOptional='';
$Note='';
$Signatory='';
$IsMfgJournal='';
$HasItem='';
$IsClosed='';
$IsSaved='';
$IsDelete='';
$IsCancelled='';
$CancelledBy='';
$CancelTime='';
$CancelNote='';
$OfficeID='0';
$MacID='0';
$FiscalYearID='0';
$CalenderYearID='0';
$MonthID='0';
$DateID='0';
$CompanyID='0';
$AppRegistrationID='0';
$CreateOfficeID='0';
$ModifyOfficeID='0';
$ModifyMacID='0';
$CreatedBy='';
$ModifiedBy='';
$ModifyTime='';
$CreateTime='';
$PriceLevelID='0';
$DrCr='';
$ShowDiscount='';
$TaxablePeritem='';
$EmployeeID='0';
$CPID='0';
$CartID='0';
$CartDetailsID='0';
$IsVerified='';
$VerifiedBy='';
$VerifiedTime='';
$VerifyNote='';
$DebitAccountID='0';
$CreditAccountID='0';
$BillingAddressID='0';
$ShippingAddressID='0';
$PDID='0';
$PatientID='0';
$DoctorID='0';
$AccountID='0';
$HasCreditNote='';
$HasDebitNote='';
//End of Vouchermaster
//Begining of voucherdetails
$ID='0';
$VoucherDetailsID='0';
$EntryIndex='';
$transactionid='0';
$VoucherID='0';
$ActivityAccountID='0';
$InventoryAccountID='0';
$AccountID='0';
$SubAccountID='0';
$Debit='';
$Credit='';
$PaymentReceiptTypeID='0';
$CalculationMethodID='0';
$AttendanceTypeID='0';
$VoucherNature='';
$Note='';
$InstrumentID='0';
$TaxAccountID='0';
$TaxClassID='0';
$TaxTypeID='0';
$TaxRate='';
$TaxableAmount='';
$ServiceChargeAccountID='0';
$ServiceChargeRate='';
$ServiceChargableAmount='';
$DiscountAccountID='0';
$DiscountID='0';
$DiscountRate='';
$DiscountValue='';
$HasItem='';
$CostCategoryID='0';
$CostCentreID='0';
$GodownID='0';
$IsClosed='';
$IsSaved='';
$IsDelete='';
$CustomerID='0';
$BillingName='';
$BillingAddressID='0';
$SalesTaxNo='';
$DeliveryDetailsID='0';
$PaymentMode='';
$IsCancelled='';
$AdjustMethodID='0';
$CancelledBy='';
$CancelTime='';
$CancelNote='';
$EntryPointID='0';
$MacID='0';
$CreateEntryPointID='0';
$ModifyEntryPointID='0';
$ModifyMacID='0';
$CreatedBy='';
$ModifiedBy='';
$ModifyTime='';
$CreateTime='';
$PriceLevelID='0';
$DesignationID='0';
$Grade='';
$Percentage='';
$DrCr='';
$HasParent='';
$HasChild='';
$ParentControlID='0';
$ChildControlID='0';
$ControlID='0';
$SourceGodownID='0';
$DestinationGodownID='0';
$SourceOfficeID='0';
$DestinationOfficeID='0';
//End of VoucherDetails

//Begining of cart
$ID='0';
$OfficeID='0';
$Createdby='';
$CreateTime='';
$ModifyBy='';
$ModifyTime='';
$TransactionID='0';
$CartDate='';
$InventoryNature='';
$EffectInventoryValue='';
$VoucherID='0';
$VoucherDetailsID='0';
//End of cart
//Begining of cartdetails
$ID='0';
$CartID='0';
$TestDate='';
$ReportDate='';
$CollectionCenterID='0';
$LabID='0';
$TransactionID='0';
$BillingQuantity='';
$ActualQuantity='';
$PrimaryRate='';
$SecondaryRate='';
$DiscountPercentage='';
$PrimaryDiscountRate='';
$SecondaryDiscountRate='';
$Amount='';
$CreatedBy='0';
$CreateTime='';
$ModifyBy='0';
$ModifyTime='';
$EntryIndex='';
$DocumentNo='';
$VoucherID='0';
$ItemID='0';
$ItemGroupID='0';
$ItemCategoryID='0';
$PrimaryUnitID='';
$SecondaryUnitID='';
$IsCancelled='';
$CancellationRequestBy='0';
$CancellationRequestTime='';
$CancellationConfirmBy='0';
$CancellationConfirmTime='';

//End of cartdetails
$ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
$CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s");
 /* $insert_data= array(
	'Name' => $this->sql_escape($Name),
	
	);*/
	
//	VoucherMasterInitialize
$VoucherMasterID=$_REQUEST['ID'];
$ID=$_REQUEST['ID'];

if($VoucherMasterID==0){
		$MasterID=$Handle->VoucherMasterInsert($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCr, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote);
	}
	else
		{
	$MasterID=$Handle->VoucherMasterUpdate($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCr, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote);	
	}
	
	 
