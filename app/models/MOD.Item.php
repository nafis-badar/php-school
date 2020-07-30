<?php
require_once 'dbase.php';

class MODItem extends DBController
{
	function ItemByID($ID)
	{
		$sql="select ID,Name from tbl_item where ID=$ID";
		  //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	function getItem($Item)
	{
		$sql="select * from tbl_item where Item='$Item' ";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	function ItemDetails($ID)
	{
		$sql="select * from tbl_item where ID=$ID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
	function ItemExist($ItemID, $ItemLine1, $ItemLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Item, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		$result=0;
		$getInfo= $this->getItem($Item);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['ID'];	
		}
		else
		{
		$result=$this->ItemInsert($ItemID, $ItemLine1, $ItemLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Item, $MacID, $CreatedBy, $CreateTime, $OldID);
		}
		return $result;
	}
		
	function ItemUpdate($ID, $Name, $Alias,$HSN,  $PrintName, $SKU, $UPC, $ModelNo, $PartNo, $Description, $ItemCategoryID, $ItemGroupID, $UnitID, $MRP, $ItemCost, $Price, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime, $TaxRate, $ServiceCharge, $IsFinancialItem, $IsFinishGoods, $IsRawMaterial, $IsUnFinishGoods, $IsDeleted, $CostingMethodID, $PricingMethodID, $IsStockItem, $IsNonStockItem, $IsNegetiveSalesAllow, $IsSalesAsNewManufacture, $IsPurchaseAsConsumed, $IsRejectionAsScrap, $Unit02ID, $Unit01Value, $Unit02Value, $Quantity, $MaintainBatch, $MaintainSerial, $ImagePath, $Image, $VoucherTypeID, $minsalequantity, $totalquantity, $RecorderPoint, $IsPackage, $InsiderID, $ReportingTypeID, $IsSpecimenRequired, $RangeValue, $HasMethod, $ReportingInGroup, $MethodDescription, $DepartmentID, $Duration, $IsInHouseTest, $Specimen,$StorageID, $PurchaseTaxClassID,$SalesTaxClassID,$CGSTPercentage,$SGSTPercentage,$IGSTPercentage)
	{
		//$Item=$this->sql_escape($Item);
		 $sql="Update tbl_item set 
		  Name='$Name', Alias='$Alias',HSN='$HSN', PrintName='$PrintName', SKU='$SKU', UPC='$UPC', ModelNo='$ModelNo', PartNo='$PartNo', Description='$Description', ItemCategoryID='$ItemCategoryID', ItemGroupID='$ItemGroupID', UnitID='$UnitID', MRP='$Price', ItemCost='$ItemCost', Price='$Price', ModifiedBy='$ModifiedBy', ModifyTime='$ModifyTime', TaxRate='$TaxRate', ServiceCharge='$ServiceCharge', IsFinancialItem='$IsFinancialItem', IsFinishGoods='$IsFinishGoods', IsRawMaterial='$IsRawMaterial', IsUnFinishGoods='$IsUnFinishGoods', IsDeleted='$IsDeleted', CostingMethodID='$CostingMethodID', PricingMethodID='$PricingMethodID', IsStockItem='$IsStockItem', IsNonStockItem='$IsNonStockItem', IsNegetiveSalesAllow='$IsNegetiveSalesAllow', IsSalesAsNewManufacture='$IsSalesAsNewManufacture', IsPurchaseAsConsumed='$IsPurchaseAsConsumed', IsRejectionAsScrap='$IsRejectionAsScrap', Unit02ID='$Unit02ID', Unit01Value='$Unit01Value', Unit02Value='$Unit02Value', Quantity='$Quantity', MaintainBatch='$MaintainBatch', MaintainSerial='$MaintainSerial', ImagePath='$ImagePath', Image='$Image', VoucherTypeID='$VoucherTypeID', minsalequantity='$minsalequantity', totalquantity='$totalquantity', RecorderPoint='$RecorderPoint', IsPackage='$IsPackage', InsiderID='$InsiderID', ReportingTypeID='$ReportingTypeID', IsSpecimenRequired='$IsSpecimenRequired', RangeValue='$RangeValue', HasMethod='$HasMethod', ReportingInGroup='$ReportingInGroup', MethodDescription='$MethodDescription', DepartmentID='$DepartmentID', Duration='$Duration', IsInHouseTest='$IsInHouseTest', Specimen ='$Specimen', StorageID='$StorageID', PurchaseTaxClassID='$PurchaseTaxClassID',SalesTaxClassID='$SalesTaxClassID', CGSTPercentage='$CGSTPercentage', SGSTPercentage='$SGSTPercentage', IGSTPercentage='$IGSTPercentage'  where ID=$ID";
		//   echo $sql;
		 $result = $this->insertQuery($sql);
		 echo "Successfully Saved";
		 return $ID;
	}
	
	function ItemInsert($ID, $Name, $Alias,$HSN, $PrintName, $SKU, $UPC, $ModelNo, $PartNo, $Description, $ItemCategoryID, $ItemGroupID, $UnitID, $MRP, $ItemCost, $Price, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime, $TaxRate, $ServiceCharge, $IsFinancialItem, $IsFinishGoods, $IsRawMaterial, $IsUnFinishGoods, $IsDeleted, $CostingMethodID, $PricingMethodID, $IsStockItem, $IsNonStockItem, $IsNegetiveSalesAllow, $IsSalesAsNewManufacture, $IsPurchaseAsConsumed, $IsRejectionAsScrap, $Unit02ID, $Unit01Value, $Unit02Value, $Quantity, $MaintainBatch, $MaintainSerial, $ImagePath, $Image, $VoucherTypeID, $minsalequantity, $totalquantity, $RecorderPoint, $IsPackage, $InsiderID, $ReportingTypeID, $IsSpecimenRequired, $RangeValue, $HasMethod, $ReportingInGroup, $MethodDescription, $DepartmentID, $Duration, $IsInHouseTest, $Specimen,$StorageID, $PurchaseTaxClassID,$SalesTaxClassID,$CGSTPercentage,$SGSTPercentage,$IGSTPercentage)
	{
		$sql="INSERT INTO tbl_item(Name, Alias,HSN, PrintName, SKU, UPC, ModelNo, PartNo, Description, ItemCategoryID, ItemGroupID, UnitID, MRP, ItemCost, Price, CreatedBy, CreateTime, ModifiedBy, ModifyTime, TaxRate, ServiceCharge, IsFinancialItem, IsFinishGoods, IsRawMaterial, IsUnFinishGoods, IsDeleted, CostingMethodID, PricingMethodID, IsStockItem, IsNonStockItem, IsNegetiveSalesAllow, IsSalesAsNewManufacture, IsPurchaseAsConsumed, IsRejectionAsScrap, Unit02ID, Unit01Value, Unit02Value, Quantity, MaintainBatch, MaintainSerial, ImagePath, Image, VoucherTypeID, minsalequantity, totalquantity, RecorderPoint, IsPackage, InsiderID, ReportingTypeID, IsSpecimenRequired, RangeValue, HasMethod, ReportingInGroup, MethodDescription, DepartmentID, Duration, IsInHouseTest, Specimen, StorageID) 
		values( '$Name', '$Alias','$HSN', '$PrintName', '$SKU', '$UPC', '$ModelNo', '$PartNo', '$Description', '$ItemCategoryID', '$ItemGroupID', '$UnitID', '$MRP', '$ItemCost', '$Price', '$CreatedBy', '$CreateTime', '$ModifiedBy', '$ModifyTime', '$TaxRate', '$ServiceCharge', '$IsFinancialItem', '$IsFinishGoods', '$IsRawMaterial', '$IsUnFinishGoods', '$IsDeleted', '$CostingMethodID', '$PricingMethodID', '$IsStockItem', '$IsNonStockItem', '$IsNegetiveSalesAllow', '$IsSalesAsNewManufacture', '$IsPurchaseAsConsumed', '$IsRejectionAsScrap', '$Unit02ID', '$Unit01Value', '$Unit02Value', '$Quantity', '$MaintainBatch', '$MaintainSerial', '$ImagePath', '$Image', '$VoucherTypeID', '$minsalequantity', '$totalquantity', '$RecorderPoint', '$IsPackage', '$InsiderID', '$ReportingTypeID', '$IsSpecimenRequired', '$RangeValue', '$HasMethod', '$ReportingInGroup', '$MethodDescription', '$DepartmentID', '$Duration', '$IsInHouseTest', '$Specimen', '$StorageID', '$PurchaseTaxClassID', '$SalesTaxClassID', '$CGSTPercentage', '$SGSTPercentage', '$IGSTPercentage')";
		$getID= $this->insertQuery($sql);
		echo "Successfully Saved";
		return $getID;
	}
function ItemGroupInsert($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		$sql="INSERT INTO tbl_itemgroup(MID, Name, Alias, Description, ImagePath, Image, CreatedBy, CreateTime, ModifiedBy, ModifyTime) 
		values('$MID', '$Name', '$Alias', '$Description', '$ImagePath', '$Image', '$CreatedBy', '$CreateTime', '$ModifiedBy', '$ModifyTime')";
		//    echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "Successfully Saved";
		 return $ID;
}
function ItemGroupUpdate($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		$sql="Update tbl_itemgroup set 
		MID='$MID',
Name='$Name',
Alias='$Alias',
Description='$Description',
ImagePath='$ImagePath',
Image='$Image',
ModifiedBy='$ModifiedBy',
ModifyTime='$ModifyTime'
where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "Successfully Saved";
		 return $ID;
}

function ItemCategoryInsert($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		$sql="INSERT INTO tbl_itemcategory(MID, Name, Alias, Description, ImagePath, Image, CreatedBy, CreateTime, ModifiedBy, ModifyTime) 
		values('$MID', '$Name', '$Alias', '$Description', '$ImagePath', '$Image', '$CreatedBy', '$CreateTime', '$ModifiedBy', '$ModifyTime')";
		  // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "Successfully Saved";
		 return $ID;
}
function ItemCategoryUpdate($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		$sql="Update tbl_itemcategory set 
		MID='$MID',
Name='$Name',
Alias='$Alias',
Description='$Description',
ImagePath='$ImagePath',
Image='$Image',
ModifiedBy='$ModifiedBy',
ModifyTime='$ModifyTime'
where ID=$ID";
		  // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "Successfully Saved";
		 return $ID;
}
function UnitInsert($ID, $Name, $Alias, $Description, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		$sql="INSERT INTO tbl_unit(Name, Alias, Description, CreatedBy, CreateTime, ModifiedBy, ModifyTime,UnitTypeID) 
		values('$Name', '$Alias', '$Description','$CreatedBy', '$CreateTime', '$ModifiedBy', '$ModifyTime',1)";
		  //  echo $sql;
		 $result = $this->updateQuery($sql);
		// echo "Successfully Saved";
		 return $ID;
}
function UnitUpdate($ID, $Name, $Alias, $Description, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
	{
		$sql="Update tbl_unit set 
		Name='$Name',
Alias='$Alias',
Description='$Description',
ModifiedBy='$ModifiedBy',
ModifyTime='$ModifyTime',
UnitTypeID=1 
where ID=$ID";
		  //  echo $sql;
		 $result = $this->updateQuery($sql);
		// echo "Successfully Saved";
		 return $ID;
}
function getUnitByID($ID)
{
	$sql="select ID,Name from tbl_unit where ID=$ID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	 
	}
}
?>