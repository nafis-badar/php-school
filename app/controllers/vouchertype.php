 <?php
if (!isset($_SESSION)) {session_start();}
include_once '../models/MOD.VoucherType.php';
//echo getcwd();
//chdir("..");
//echo getcwd();
// include_once ('../models/MOD.Accounts.php');
//echo getcwd();

// $document_root = $_APP_URL;
 //echo "root: $document_root";
//include_once (APP_DIR.'/controllers/CTL.VoucherMaster.php');

 

 $Handle= new MODVoucherType();
 
 $searchcontent='';
 $Type=$_POST['Type'];
 if ($Type=='SaveVoucherType')
 {
		$ID=$_POST['ID'];
		//ID:ID, VoucherType:VoucherType, Alias:Alias, Name:Name, PrintName:PrintName, OptionalPrintName:OptionalPrintName, Description:Description, MID:MID,  VoucherCategoryID:VoucherCategoryID, IsManufacturingJournal:IsManufacturingJournal, AccountsNature:AccountsNature, IsEffectLedgerValue:IsEffectLedgerValue, InventoryNature:InventoryNature, IsEffectInventoryValue:IsEffectInventoryValue, PayrollNature:PayrollNature, IsEffectPayrollValue:IsEffectPayrollValue, IsOptional:IsOptional, ItemBatchCheckID:ItemBatchCheckID, ItemPriceTypeID:ItemPriceTypeID, CartTypeID:CartTypeID
		$VoucherType=$_POST['VoucherType'];
	  $Alias=$_POST['Alias'];
	  $Name=$_POST['Name'];
	  $PrintName=$_POST['PrintName'];
	  $OptionalPrintName=$_POST['OptionalPrintName'];
	  $Description=$_POST['Description'];
	  $MID=$_POST['MID'];
	  $VoucherCategoryID=$_POST['VoucherCategoryID'];
	  $IsManufacturingJournal=$_POST['IsManufacturingJournal'];
	  $AccountsNature=$_POST['AccountsNature'];
	  $IsEffectLedgerValue=$_POST['IsEffectLedgerValue'];
	 $InventoryNature=$_POST['InventoryNature'];
	  $IsEffectInventoryValue=$_POST['IsEffectInventoryValue'];
	   $PayrollNature=$_POST['PayrollNature'];
	    $IsEffectPayrollValue=$_POST['IsEffectPayrollValue'];
		 $IsOptional=$_POST['IsOptional'];
		  $ItemBatchCheckID=$_POST['ItemBatchCheckID'];
		   $ItemPriceTypeID=$_POST['ItemPriceTypeID'];
		    $CartTypeID=$_POST['CartTypeID'];
		//	ID:ID, VoucherType:VoucherType, Alias:Alias, Name:Name, PrintName:PrintName, OptionalPrintName:OptionalPrintName, Description:Description, MID:MID,  VoucherCategoryID:VoucherCategoryID, IsManufacturingJournal:IsManufacturingJournal, AccountsNature:AccountsNature, IsEffectLedgerValue:IsEffectLedgerValue, InventoryNature:InventoryNature, IsEffectInventoryValue:IsEffectInventoryValue, PayrollNature:PayrollNature, IsEffectPayrollValue:IsEffectPayrollValue, IsOptional:IsOptional, ItemBatchCheckID:ItemBatchCheckID, ItemPriceTypeID:ItemPriceTypeID, CartTypeID:CartTypeID
	  if($ID==0)
	  {
	  $ReturnID=$Handle->InsertVoucherType($ID, $VoucherType, $Alias, $Name,$PrintName, $OptionalPrintName, $Description, $MID, $VoucherCategoryID, $IsManufacturingJournal, $AccountsNature, $IsEffectLedgerValue, $InventoryNature, $IsEffectInventoryValue, $PayrollNature, $IsEffectPayrollValue, $IsOptional, $ItemBatchCheckID, $ItemPriceTypeID, $CartTypeID);
	  }
	  else
	  {
		  $ReturnID=$Handle->UpdateVoucherType($ID, $VoucherType, $Alias, $Name,$PrintName, $OptionalPrintName, $Description, $MID, $VoucherCategoryID, $IsManufacturingJournal, $AccountsNature, $IsEffectLedgerValue, $InventoryNature, $IsEffectInventoryValue, $PayrollNature, $IsEffectPayrollValue, $IsOptional, $ItemBatchCheckID, $ItemPriceTypeID, $CartTypeID);
		  }
	  
	}
  if ($Type=='SetEditable'){
	  $VoucherTypeID=$_POST['VoucherTypeID'];
	  $ID=$_POST['ID'];
	   $sql="Update tbl_voucheraccount set IsEditable=0 where VoucherTypeID='$VoucherTypeID'";
	   $ID0=$Handle->insertQuery($sql);
	  $sql="Update tbl_voucheraccount set IsEditable=1 where VoucherTypeID='$VoucherTypeID' and ID='$ID' ";
//echo $sql;
$ID1=$Handle->insertQuery($sql);
  }
  
    if ($Type=='SaveVoucherAccount'){
		$VoucherTypeID=$_POST['VoucherTypeID'];
		$AccountTypeID=$_POST['AccountTypeID'];
	  $ID=$_POST['ID'];
	  $DrCr=$_POST['DrCr'];
	  $CalculationMethodID=$_POST['CalculationMethodID'];
	  $Percentage=$_POST['Percentage'];
	  $AcGroupID=$_POST['AcGroupID'];
	  $AccountID=$_POST['AccountID'];
	  $IsPermanent=$_POST['IsPermanent'];
	  $IsEditable=$_POST['IsEditable'];
	  $IsDeleted=$_POST['IsDeleted'];
	 $IsTaxable=$_POST['IsTaxable'];
	  if($ID==0)
	  {
	  $ReturnID=$Handle->InsertVoucherAccount($ID, $AccountTypeID, $DrCr, $CalculationMethodID,$IsTaxable, $Percentage, $AcGroupID, $AccountID, $IsPermanent, $VoucherTypeID, $IsEditable, $IsDeleted);
	  }
	  else
	  {
		  $ReturnID=$Handle->UpdateVoucherAccount($ID, $AccountTypeID, $DrCr, $CalculationMethodID,$IsTaxable, $Percentage, $AcGroupID, $AccountID, $IsPermanent, $VoucherTypeID, $IsEditable, $IsDeleted);
		  }
	  
	}
	
  
 ?>