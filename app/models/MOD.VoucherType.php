<?php
require_once 'dbase.php';

class MODVoucherType extends DBController
{
	//public $UserName = null;
		function getVoucherTypeIndex()
	{
		$getinfo = $this->runQuery("SELECT * FROM tbl_vouchertype  order by Name"); 
		return $getinfo;
	}
	
	function VoucherTypeByID($ID)
	{
		$sql="select ID,Name from tbl_vouchertype where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
		}
		 
		function getVoucherName($ID)
	{
		$getinfo = $this->runQuery("SELECT Name FROM tbl_vouchertype where ID=$ID"); 
		if(count($getinfo,0)==1)
		return $getinfo[0]['Name'];
	}
	
	
	function QueryVoucherAccount($ID)
	{
		$sql="select * from tbl_voucheraccount where VoucherTypeID='$ID' and IsDeleted=0 ";
		  // echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
		function QueryVoucherAccountEditable($ID)
	{
		$sql="select * from tbl_voucheraccount where VoucherTypeID='$ID' and IsEditable=1 ";
		  // echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
		function QueryAccountType($ID)
	{
		$sql="select Name from tbl_accounttype where ID='$ID' ";
		  // echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'];;
	}
		function QueryCalculationMethod($ID)
	{
		$sql="select Name from tbl_calculationmethod where ID='$ID' ";
		  // echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'];
	}
		function QueryAccountName($ID)
	{
		$sql="select Name from tbl_master where ID='$ID' ";
		  // echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'];
	}
		function InsertVoucherType($ID, $VoucherType, $Alias, $Name,$PrintName, $OptionalPrintName, $Description, $MID, $VoucherCategoryID, $IsManufacturingJournal, $AccountsNature, $IsEffectLedgerValue, $InventoryNature, $IsEffectInventoryValue, $PayrollNature, $IsEffectPayrollValue, $IsOptional, $ItemBatchCheckID, $ItemPriceTypeID, $CartTypeID)
	{
		$sql="INSERT INTO tbl_vouchertype(VoucherType, Alias, Name, PrintName, OptionalPrintName, Description, MID, VoucherCategoryID, IsManufacturingJournal, AccountsNature, IsEffectLedgerValue, InventoryNature, IsEffectInventoryValue, PayrollNature, IsEffectPayrollValue, IsOptional, ItemBatchCheckID, ItemPriceTypeID, CartTypeID) 
			values('$ID', '$VoucherType', '$Alias', '$Name', '$PrintName', '$OptionalPrintName', '$Description', '$MID', '$VoucherCategoryID', '$IsManufacturingJournal', '$AccountsNature', '$IsEffectLedgerValue', '$InventoryNature', '$IsEffectInventoryValue', '$PayrollNature', '$IsEffectPayrollValue', '$IsOptional', '$ItemBatchCheckID', '$ItemPriceTypeID, '$CartTypeID')";
		//   echo $sql;
		$Info= $this->insertQuery($sql);
		return $Info;
		}
	function UpdateVoucherType($ID, $VoucherType, $Alias, $Name,$PrintName, $OptionalPrintName, $Description, $MID, $VoucherCategoryID, $IsManufacturingJournal, $AccountsNature, $IsEffectLedgerValue, $InventoryNature, $IsEffectInventoryValue, $PayrollNature, $IsEffectPayrollValue, $IsOptional, $ItemBatchCheckID, $ItemPriceTypeID, $CartTypeID)
	{
		$sql="UPDATE tbl_vouchertype set 
		VoucherType='$VoucherType', Alias='$Alias', Name='$Name', PrintName='$PrintName', OptionalPrintName='$OptionalPrintName', Description='$Description', MID='$MID', VoucherCategoryID='$VoucherCategoryID', IsManufacturingJournal='$IsManufacturingJournal', AccountsNature='$AccountsNature', IsEffectLedgerValue='$IsEffectLedgerValue', InventoryNature='$InventoryNature', IsEffectInventoryValue='$IsEffectInventoryValue', PayrollNature='$PayrollNature', IsEffectPayrollValue='$IsEffectPayrollValue', IsOptional='$IsOptional', ItemBatchCheckID='$ItemBatchCheckID', ItemPriceTypeID='$ItemPriceTypeID', CartTypeID='$CartTypeID'  
		where ID=$ID";
		   echo $sql;
		$Info= $this->insertQuery($sql);
		return $Info;
		}
	function InsertVoucherAccount($ID, $AccountTypeID, $DrCr, $CalculationMethodID, $IsTaxable, $Percentage, $AcGroupID, $AccountID, $IsPermanent, $VoucherTypeID, $IsEditable, $IsDeleted)
	{
		$sql="INSERT INTO tbl_voucheraccount(AccountTypeID, DrCr, CalculationMethodID,IsTaxable, Percentage, AcGroupID, AccountID, IsPermanent, VoucherTypeID, IsEditable, IsDeleted) 
			values('$AccountTypeID', '$DrCr', '$CalculationMethodID','$IsTaxable', '$Percentage', '$AcGroupID', '$AccountID', '$IsPermanent', '$VoucherTypeID', '$IsEditable', '$IsDeleted')";
		//   echo $sql;
		$Info= $this->insertQuery($sql);
		return $Info;
		}
	function UpdateVoucherAccount($ID, $AccountTypeID, $DrCr, $CalculationMethodID,$IsTaxable, $Percentage, $AcGroupID, $AccountID, $IsPermanent, $VoucherTypeID, $IsEditable, $IsDeleted)
	{
		$sql="UPDATE tbl_voucheraccount set 
		AccountTypeID='$AccountTypeID', DrCr='$DrCr', CalculationMethodID='$CalculationMethodID',IsTaxable='$IsTaxable', Percentage='$Percentage', AcGroupID='$AcGroupID', AccountID='$AccountID', IsPermanent='$IsPermanent', VoucherTypeID='$VoucherTypeID', IsEditable='$IsEditable', IsDeleted='$IsDeleted'  
		where ID=$ID";
		 //  echo $sql;
		$Info= $this->insertQuery($sql);
		return $Info;
		}
	
}