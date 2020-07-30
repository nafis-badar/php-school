<?php
require_once 'MOD.VoucherMaster.php';

class MODPurchase extends MODVoucherMaster
{
	public $UserName = null;
	function VoucherByID($ID)
	{
		$sql="select ID,Address from tbl_address where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
	function getPurchase($Address)
	{
		$sql="select * from tbl_vouchermaster where Address='$Address' ";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
	function PurchaseExist($AddressID, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		$result=0;
		$getInfo= $this->getPurchase($Address);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['ID'];	
		}
		else
		{
		$result=$this->AddressInsert($AddressID, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID);
		}
		return $result;
	}
		
	function PurchaseUpdate($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCr, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_vouchermaster set 
		RefVoucherID= '$RefVoucherID', 
		AssignmentID= '$AssignmentID', 
		VoucherNo= '$VoucherNo', 
		VoucherCategoryID= '$VoucherCategoryID', 
		VoucherTypeID= '$VoucherTypeID', 
		VoucherDate= '$VoucherDate', 
		TestDate= '$TestDate', 
		ActiveDate= '$ActiveDate', 
		TargetDate= '$TargetDate', 
		DocumentNo= '$DocumentNo', 
		InventoryNature= '$InventoryNature', 
		IsEffectInventoryValue= '$IsEffectInventoryValue', 
		AccountsNature= '$AccountsNature', 
		IsEffectLedgerValue= '$IsEffectLedgerValue', 
		PayrollNature= '$PayrollNature', 
		IsEffectPayrollValue= '$IsEffectPayrollValue', 
		VoucherNature= '$VoucherNature', 
		IsOptional= '$IsOptional', 
		Note= '$Note', 
		Signatory= '$Signatory', 
		IsMfgJournal= '$IsMfgJournal', 
		HasItem= '$HasItem', 
		IsClosed= '$IsClosed', 
		IsSaved= '$IsSaved', 
		IsDelete= '$IsDelete', 
		IsCancelled= '$IsCancelled', 
		CancelledBy= '$CancelledBy', 
		CancelTime= '$CancelTime', 
		CancelNote= '$CancelNote', 
		OfficeID= '$OfficeID', 
		MacID= '$MacID', 
		FiscalYearID= '$FiscalYearID', 
		CalenderYearID= '$CalenderYearID', 
		MonthID= '$MonthID', 
		DateID= '$DateID', 
		CompanyID= '$CompanyID', 
		AppRegistrationID= '$AppRegistrationID', 
		CreateOfficeID= '$CreateOfficeID', 
		ModifyOfficeID= '$ModifyOfficeID', 
		ModifyMacID= '$ModifyMacID', 
		CreatedBy= '$CreatedBy', 
		ModifiedBy= '$ModifiedBy', 
		ModifyTime= '$ModifyTime', 
		CreateTime= '$CreateTime', 
		PriceLevelID= '$PriceLevelID', 
		DrCr= '$DrCr', 
		ShowDiscount= '$ShowDiscount', 
		TaxablePeritem= '$TaxablePeritem', 
		EmployeeID= '$EmployeeID', 
		CPID= '$CPID', 
		CartID= '$CartID', 
		CartDetailsID= '$CartDetailsID', 
		IsVerified= '$IsVerified', 
		VerifiedBy= '$VerifiedBy', 
		VerifiedTime= '$VerifiedTime', 
		VerifyNote= '$VerifyNote', 
		DebitAccountID= '$DebitAccountID', 
		CreditAccountID= '$CreditAccountID', 
		BillingAddressID= '$BillingAddressID', 
		ShippingAddressID= '$ShippingAddressID', 
		PDID= '$PDID', 
		PatientID= '$PatientID', 
		DoctorID= '$DoctorID', 
		AccountID= '$AccountID', 
		HasCreditNote= '$HasCreditNote', 
		HasDebitNote= '$HasDebitNote' 
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
	function PurchaseInsert($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCr, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote)
	{
		$sql="INSERT INTO tbl_vouchermaster( RefVoucherID, AssignmentID, VoucherNo, VoucherCategoryID, VoucherTypeID, VoucherDate, TestDate, ActiveDate, TargetDate, DocumentNo, InventoryNature, IsEffectInventoryValue, AccountsNature, IsEffectLedgerValue, PayrollNature, IsEffectPayrollValue, VoucherNature, IsOptional, Note, Signatory, IsMfgJournal, HasItem, IsClosed, IsSaved, IsDelete, IsCancelled, CancelledBy, CancelTime, CancelNote, OfficeID, MacID, FiscalYearID, CalenderYearID, MonthID, DateID, CompanyID, AppRegistrationID, CreateOfficeID, ModifyOfficeID, ModifyMacID, CreatedBy, ModifiedBy, ModifyTime, CreateTime, PriceLevelID, DrCr, ShowDiscount, TaxablePeritem, EmployeeID, CPID, CartID, CartDetailsID, IsVerified, VerifiedBy, VerifiedTime, VerifyNote, DebitAccountID, CreditAccountID, BillingAddressID, ShippingAddressID, PDID, PatientID, DoctorID, AccountID, HasCreditNote, HasDebitNote) 
		values( '$RefVoucherID', '$AssignmentID', '$VoucherNo', '$VoucherCategoryID', '$VoucherTypeID', '$VoucherDate', '$TestDate', '$ActiveDate', '$TargetDate', '$DocumentNo', '$InventoryNature', '$IsEffectInventoryValue', '$AccountsNature', '$IsEffectLedgerValue', '$PayrollNature', '$IsEffectPayrollValue', '$VoucherNature', '$IsOptional', '$Note', '$Signatory', '$IsMfgJournal', '$HasItem', '$IsClosed', '$IsSaved', '$IsDelete', '$IsCancelled', '$CancelledBy', '$CancelTime', '$CancelNote', '$OfficeID', '$MacID', '$FiscalYearID', '$CalenderYearID', '$MonthID', '$DateID', '$CompanyID', '$AppRegistrationID', '$CreateOfficeID', '$ModifyOfficeID', '$ModifyMacID', '$CreatedBy', '$ModifiedBy', '$ModifyTime', '$CreateTime', '$PriceLevelID', '$DrCr', '$ShowDiscount', '$TaxablePeritem', '$EmployeeID', '$CPID', '$CartID', '$CartDetailsID', '$IsVerified', '$VerifiedBy', '$VerifiedTime', '$VerifyNote', '$DebitAccountID', '$CreditAccountID', '$BillingAddressID', '$ShippingAddressID', '$PDID', '$PatientID', '$DoctorID', '$AccountID', '$HasCreditNote', '$HasDebitNote)";
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
}
?>