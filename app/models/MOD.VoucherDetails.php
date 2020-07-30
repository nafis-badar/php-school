<?php
require_once 'dbase.php';

class MODVoucherDetails extends DBController
{
	public $UserName = null;
	function VoucherDetailsByID($ID)
	{
		$sql="select ID,Address from tbl_address where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
	function getVoucherDetails($Address)
	{
		$sql="select * from tbl_vouchermaster where Address='$Address' ";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
	function VoucherDetailsExist($ID, $EntryIndex, $transactionid, $VoucherID, $ActivityAccountID, $InventoryAccountID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDelete, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID)
	{
		$result=0;
		$getInfo= $this->getVoucherDetails($Address);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['ID'];	
		}
		else
		{
		$result=$this->VoucherDetailsInsert($ID, $EntryIndex, $transactionid, $VoucherID, $ActivityAccountID, $InventoryAccountID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDelete, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID);
		}
		return $result;
	}
		
	function VoucherDetailsUpdate($ID, $EntryIndex, $transactionid, $VoucherID, $ActivityAccountID, $InventoryAccountID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDelete, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID)
	{
		//$Address=$this->sql_escape($Address);
	 $sql="Update tbl_voucherdetails set 
		EntryIndex= '$EntryIndex', 
		transactionid= '$transactionid', 
		VoucherID= '$VoucherID', 
		ActivityAccountID= '$ActivityAccountID', 
		InventoryAccountID= '$InventoryAccountID', 
		AccountID= '$AccountID', 
		SubAccountID= '$SubAccountID', 
		Debit= '$Debit', 
		Credit= '$Credit', 
		PaymentReceiptTypeID= '$PaymentReceiptTypeID', 
		CalculationMethodID= '$CalculationMethodID', 
		AttendanceTypeID= '$AttendanceTypeID', 
		VoucherNature= '$VoucherNature', 
		Note= '$Note', 
		InstrumentID= '$InstrumentID', 
		TaxAccountID= '$TaxAccountID', 
		TaxClassID= '$TaxClassID', 
		TaxTypeID= '$TaxTypeID', 
		TaxRate= '$TaxRate', 
		TaxableAmount= '$TaxableAmount', 
		ServiceChargeAccountID= '$ServiceChargeAccountID', 
		ServiceChargeRate= '$ServiceChargeRate', 
		ServiceChargableAmount= '$ServiceChargableAmount', 
		DiscountAccountID= '$DiscountAccountID', 
		DiscountID= '$DiscountID', 
		DiscountRate= '$DiscountRate', 
		DiscountValue= '$DiscountValue', 
		HasItem= '$HasItem', 
		CostCategoryID= '$CostCategoryID', 
		CostCentreID= '$CostCentreID', 
		GodownID= '$GodownID', 
		IsClosed= '$IsClosed', 
		IsSaved= '$IsSaved', 
		IsDelete= '$IsDelete', 
		CustomerID= '$CustomerID', 
		BillingName= '$BillingName', 
		BillingAddressID= '$BillingAddressID', 
		SalesTaxNo= '$SalesTaxNo', 
		DeliveryDetailsID= '$DeliveryDetailsID', 
		PaymentMode= '$PaymentMode', 
		IsCancelled= '$IsCancelled', 
		AdjustMethodID= '$AdjustMethodID', 
		CancelledBy= '$CancelledBy', 
		CancelTime= '$CancelTime', 
		CancelNote= '$CancelNote', 
		EntryPointID= '$EntryPointID', 
		MacID= '$MacID', 
		CreateEntryPointID= '$CreateEntryPointID', 
		ModifyEntryPointID= '$ModifyEntryPointID', 
		ModifyMacID= '$ModifyMacID', 
		CreatedBy= '$CreatedBy', 
		ModifiedBy= '$ModifiedBy', 
		ModifyTime= '$ModifyTime', 
		CreateTime= '$CreateTime', 
		PriceLevelID= '$PriceLevelID', 
		DesignationID= '$DesignationID', 
		Grade= '$Grade', 
		Percentage= '$Percentage', 
		DrCr= '$DrCr', 
		HasParent= '$HasParent', 
		HasChild= '$HasChild', 
		ParentControlID= '$ParentControlID', 
		ChildControlID= '$ChildControlID', 
		ControlID= '$ControlID', 
		SourceGodownID= '$SourceGodownID', 
		DestinationGodownID= '$DestinationGodownID', 
		SourceOfficeID= '$SourceOfficeID', 
		DestinationOfficeID= '$DestinationOfficeID'
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
	function VoucherDetailsInsert($ID, $EntryIndex, $transactionid, $VoucherID, $ActivityAccountID, $InventoryAccountID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDelete, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID)
	{
		$sql="INSERT INTO tbl_voucherdetails(ID, EntryIndex, transactionid, VoucherID, ActivityAccountID, InventoryAccountID, AccountID, SubAccountID, Debit, Credit, PaymentReceiptTypeID, CalculationMethodID, AttendanceTypeID, VoucherNature, Note, InstrumentID, TaxAccountID, TaxClassID, TaxTypeID, TaxRate, TaxableAmount, ServiceChargeAccountID, ServiceChargeRate, ServiceChargableAmount, DiscountAccountID, DiscountID, DiscountRate, DiscountValue, HasItem, CostCategoryID, CostCentreID, GodownID, IsClosed, IsSaved, IsDelete, CustomerID, BillingName, BillingAddressID, SalesTaxNo, DeliveryDetailsID, PaymentMode, IsCancelled, AdjustMethodID, CancelledBy, CancelTime, CancelNote, EntryPointID, MacID, CreateEntryPointID, ModifyEntryPointID, ModifyMacID, CreatedBy, ModifiedBy, ModifyTime, CreateTime, PriceLevelID, DesignationID, Grade, Percentage, DrCr, HasParent, HasChild, ParentControlID, ChildControlID, ControlID, SourceGodownID, DestinationGodownID, SourceOfficeID, DestinationOfficeID) 
		values( '$ID', '$EntryIndex', '$transactionid', '$VoucherID', '$ActivityAccountID', '$InventoryAccountID', '$AccountID', '$SubAccountID', '$Debit', '$Credit', '$PaymentReceiptTypeID', '$CalculationMethodID', '$AttendanceTypeID', '$VoucherNature', '$Note', '$InstrumentID', '$TaxAccountID', '$TaxClassID', '$TaxTypeID', '$TaxRate', '$TaxableAmount', '$ServiceChargeAccountID', '$ServiceChargeRate', '$ServiceChargableAmount', '$DiscountAccountID', '$DiscountID', '$DiscountRate', '$DiscountValue', '$HasItem', '$CostCategoryID', '$CostCentreID', '$GodownID', '$IsClosed', '$IsSaved', '$IsDelete', '$CustomerID', '$BillingName', '$BillingAddressID', '$SalesTaxNo', '$DeliveryDetailsID', '$PaymentMode', '$IsCancelled', '$AdjustMethodID', '$CancelledBy', '$CancelTime', '$CancelNote', '$EntryPointID', '$MacID', '$CreateEntryPointID', '$ModifyEntryPointID', '$ModifyMacID', '$CreatedBy', '$ModifiedBy', '$ModifyTime', '$CreateTime', '$PriceLevelID', '$DesignationID', '$Grade', '$Percentage', '$DrCr', '$HasParent', '$HasChild', '$ParentControlID', '$ChildControlID', '$ControlID', '$SourceGodownID', '$DestinationGodownID', '$SourceOfficeID', '$DestinationOfficeID)";
		echo $sql;
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
}
?>