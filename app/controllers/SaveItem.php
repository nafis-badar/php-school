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
$CartID='0';
$TestDate='';
$ReportDate='';
$CollectionCenterID='0';
$LabID='0';
$TransactionID='0';
$BillingQuantity='0';
$ActualQuantity='0';
$PrimaryRate='0';
$SecondaryRate='0';
$DiscountPercentage='0';
$PrimaryDiscountRate='0';
$SecondaryDiscountRate='0';
$Amount='0';
$CreatedBy='0';
$CreateTime='';
$ModifyBy='0';
$ModifyTime='';
$EntryIndex='0';
$DocumentNo='';
$VoucherID='0';
$ItemID='0';
$ItemGroupID='0';
$ItemCategoryID='0';
$PrimaryUnitID='0';
$SecondaryUnitID='0';
$IsCancelled='0';
$CancellationRequestBy='0';
$CancellationRequestTime='';
$CancellationConfirmBy='0';
$CancellationConfirmTime='';
$IsDeleted='0';
$IsEditable='0';

/*$VoucherID=$VoucherID_v;
 $EntryIndex=$EntryIndex_v;
$AccountTypeID=$AccountTypeID_v;
$AccountID=$AccountID_v;
$Debit=$Debit_v;
$Credit=$Credit_v;*/
	$ID=$_REQUEST['ID'];
	$CartID=$_REQUEST['CartID'];
	$ItemID=$_REQUEST['ItemID'];
	$EntryIndex=$_REQUEST['EntryIndex'];;
	//	alert(accountid);
	$BillingQuantity= $_REQUEST['BillingQuantity'];
	$ActualQuantity= $_REQUEST['ActualQuantity'];
	$PrimaryUnitID= $_REQUEST['PrimaryUnitID'];
	$SecondaryUnitID= $_REQUEST['SecondaryUnitID'];
	$ItemCost= $_REQUEST['ItemCost'];
	$Price= $_REQUEST['Price'];
	$PrimaryRate= $_REQUEST['PrimaryRate'];
	$SecondaryRate= $_REQUEST['SecondaryRate'];
	$DiscountPercentage= $_REQUEST['DiscountPercentage'];
	$PrimaryDiscountRate= $_REQUEST['PrimaryDiscountRate'];
	$SecondaryDiscountRate= $_REQUEST['SecondaryDiscountRate'];
	$Amount= $_REQUEST['Amount'];
	$IsEditable=0;
	$IsDeleted=0;
//$Handle->VoucherType($VoucherTypeID);
 
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$ModifyBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
$ID=$Handle->IsItemAlreadyExist($ItemID,$CartID);
	
if ($ID==0)
{
	
		$CartDetailsID=$Handle->CartDetailsInsert($ID, $EntryIndex, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $VoucherID, $DocumentNo, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $ItemCost, $Price, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime, $IsDeleted, $IsEditable);
	
}
else
{
	$CartDetailsID=$Handle->CartDetailsUpdate($ID, $EntryIndex, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $VoucherID, $DocumentNo, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $ItemCost, $Price, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime, $IsDeleted, $IsEditable);

	}
 
echo $CartDetailsID;

?>