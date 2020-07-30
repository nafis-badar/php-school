 <?php
if (!isset($_SESSION)) {session_start();}
include_once '../models/MOD.Item.php';
//echo getcwd();
//chdir("..");
//echo getcwd();
// include_once ('../models/MOD.Accounts.php');
//echo getcwd();

// $document_root = $_APP_URL;
 //echo "root: $document_root";
//include_once (APP_DIR.'/controllers/CTL.VoucherMaster.php');

 

 $Handle= new MODItem();
 $searchcontent='';
$Type=$_REQUEST['Type'];
if ($Type=='SaveItem')
{
$ID='0';
$Name='';
$Alias='';
$PrintName='';
$HSN='';
$SKU='';
$UPC='';
$ModelNo='';
$PartNo='';
$Description='';
$ItemCategoryID='0';
$ItemGroupID='0';
$UnitID='0';
$MRP='0';
$ItemCost='0';
$Price='0';
$CreatedBy='0';
$CreateTime='';
$ModifiedBy='0';
$ModifyTime='';
$TaxRate='0';
$ServiceCharge='0';
$IsFinancialItem='0';
$IsFinishGoods='0';
$IsRawMaterial='0';
$IsUnFinishGoods='0';
$IsDeleted='0';
$CostingMethodID='0';
$PricingMethodID='0';
$IsStockItem='1';
$IsNonStockItem='0';
$IsNegetiveSalesAllow='0';
$IsSalesAsNewManufacture='0';
$IsPurchaseAsConsumed='0';
$IsRejectionAsScrap='0';
$Unit02ID='0';
$Unit01Value='0';
$Unit02Value='0';
$Quantity='0';
$MaintainBatch='0';
$MaintainSerial='0';
$ImagePath='';
$Image='';
$VoucherTypeID='0';
$minsalequantity='0';
$totalquantity='0';
$RecorderPoint='0';
$IsPackage='0';
$InsiderID='0';
$ReportingTypeID='0';
$IsSpecimenRequired='0';
$RangeValue='0';
$HasMethod='0';
$ReportingInGroup='0';
$MethodDescription='';
$DepartmentID='0';
$Duration='0';
$IsInHouseTest='0';
$Specimen='';
$StorageID='0';
$RecorderPoint='0';
$PurchaseTaxClassID='0';
$SalesTaxClassID='0';
$CGSTPercentage='0';
$SGSTPercentage='0';
$IGSTPercentage='0';


$ID=$_REQUEST['ID']; 
$Name=$_REQUEST['Name']; 
$HSN=$_REQUEST['HSN']; 
$ItemGroupID=$_REQUEST['ItemGroupID']; 
$ItemCategoryID=$_REQUEST['ItemCategoryID']; 
$UnitID=$_REQUEST['UnitID']; 
$MRP=$_REQUEST['MRP']; 
$ItemCost=$_REQUEST['ItemCost']; 
$Price=$_REQUEST['Price']; 
$MaintainBatch=$_REQUEST['MaintainBatch'];
$StorageID=$_REQUEST['StorageID'];
 
$RecorderPoint=$_REQUEST['RecorderPoint'];
$PurchaseTaxClassID=$_REQUEST['PurchaseTaxClassID'];
$SalesTaxClassID=$_REQUEST['SalesTaxClassID'];
$CGSTPercentage=$_REQUEST['CGSTPercentage'];
$SGSTPercentage=$_REQUEST['SGSTPercentage'];
$IGSTPercentage=$_REQUEST['IGSTPercentage'];
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		if($ID==0)
		{
		$SaveID=$Handle->ItemInsert($ID, $Name, $Alias,$HSN, $PrintName, $SKU, $UPC, $ModelNo, $PartNo, $Description, $ItemCategoryID, $ItemGroupID, $UnitID, $MRP,$ItemCost, $Price, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime, $TaxRate, $ServiceCharge, $IsFinancialItem, $IsFinishGoods, $IsRawMaterial, $IsUnFinishGoods, $IsDeleted, $CostingMethodID, $PricingMethodID, $IsStockItem, $IsNonStockItem, $IsNegetiveSalesAllow, $IsSalesAsNewManufacture, $IsPurchaseAsConsumed, $IsRejectionAsScrap, $Unit02ID, $Unit01Value, $Unit02Value, $Quantity, $MaintainBatch, $MaintainSerial, $ImagePath, $Image, $VoucherTypeID, $minsalequantity, $totalquantity, $RecorderPoint, $IsPackage, $InsiderID, $ReportingTypeID, $IsSpecimenRequired, $RangeValue, $HasMethod, $ReportingInGroup, $MethodDescription, $DepartmentID, $Duration, $IsInHouseTest, $Specimen,$StorageID, $PurchaseTaxClassID,$SalesTaxClassID,$CGSTPercentage,$SGSTPercentage,$IGSTPercentage);
		}
		else
		{
			$SaveID=$Handle->ItemUpdate($ID, $Name, $Alias,$HSN, $PrintName, $SKU, $UPC, $ModelNo, $PartNo, $Description, $ItemCategoryID, $ItemGroupID, $UnitID, $MRP,$ItemCost, $Price, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime, $TaxRate, $ServiceCharge, $IsFinancialItem, $IsFinishGoods, $IsRawMaterial, $IsUnFinishGoods, $IsDeleted, $CostingMethodID, $PricingMethodID, $IsStockItem, $IsNonStockItem, $IsNegetiveSalesAllow, $IsSalesAsNewManufacture, $IsPurchaseAsConsumed, $IsRejectionAsScrap, $Unit02ID, $Unit01Value, $Unit02Value, $Quantity, $MaintainBatch, $MaintainSerial, $ImagePath, $Image, $VoucherTypeID, $minsalequantity, $totalquantity, $RecorderPoint, $IsPackage, $InsiderID, $ReportingTypeID, $IsSpecimenRequired, $RangeValue, $HasMethod, $ReportingInGroup, $MethodDescription, $DepartmentID, $Duration, $IsInHouseTest, $Specimen,$StorageID, $PurchaseTaxClassID,$SalesTaxClassID,$CGSTPercentage,$SGSTPercentage,$IGSTPercentage);
		}
		
}
if ($Type=='Godown')
{
$ID='0';
$Name='';
$Alias='';
$PrintName='';
$SKU='';
$UPC='';
$ModelNo='';
$PartNo='';
$Description='';
$ItemCategoryID='0';
$ItemGroupID='0';
$UnitID='0';
$ItemCost='0';
$Price='0';
$CreatedBy='0';
$CreateTime='';
$ModifiedBy='0';
$ModifyTime='';
$TaxRate='0';
$ServiceCharge='0';
$IsFinancialItem='0';
$IsFinishGoods='0';
$IsRawMaterial='0';
$IsUnFinishGoods='0';
$IsDeleted='0';
$CostingMethodID='0';
$PricingMethodID='0';
$IsStockItem='1';
$IsNonStockItem='0';
$IsNegetiveSalesAllow='0';
$IsSalesAsNewManufacture='0';
$IsPurchaseAsConsumed='0';
$IsRejectionAsScrap='0';
$Unit02ID='0';
$Unit01Value='0';
$Unit02Value='0';
$Quantity='0';
$MaintainBatch='0';
$MaintainSerial='0';
$ImagePath='';
$Image='';
$VoucherTypeID='0';
$minsalequantity='0';
$totalquantity='0';
$RecorderPoint='0';
$IsPackage='0';
$InsiderID='0';
$ReportingTypeID='0';
$IsSpecimenRequired='0';
$RangeValue='0';
$HasMethod='0';
$ReportingInGroup='0';
$MethodDescription='';
$DepartmentID='0';
$Duration='0';
$IsInHouseTest='0';
$Specimen='';
$GodownID='0';
$_REQUEST['Type'];

$ID=$_REQUEST['ID']; 
$Name=$_REQUEST['Name']; 
$SKU=$_REQUEST['SKU']; 
$ItemGroupID=$_REQUEST['ItemGroupID']; 
$ItemCategoryID=$_REQUEST['ItemCategoryID']; 
$UnitID=$_REQUEST['UnitID']; 
$ItemCost=$_REQUEST['ItemCost']; 
$Price=$_REQUEST['Price']; 
$MaintainBatch=$_REQUEST['MaintainBatch'];
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		if($ID==0)
		{
		$SaveID=$Handle->ItemInsert($ID, $Name, $Alias, $PrintName, $SKU, $UPC, $ModelNo, $PartNo, $Description, $ItemCategoryID, $ItemGroupID, $UnitID, $ItemCost, $Price, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime, $TaxRate, $ServiceCharge, $IsFinancialItem, $IsFinishGoods, $IsRawMaterial, $IsUnFinishGoods, $IsDeleted, $CostingMethodID, $PricingMethodID, $IsStockItem, $IsNonStockItem, $IsNegetiveSalesAllow, $IsSalesAsNewManufacture, $IsPurchaseAsConsumed, $IsRejectionAsScrap, $Unit02ID, $Unit01Value, $Unit02Value, $Quantity, $MaintainBatch, $MaintainSerial, $ImagePath, $Image, $VoucherTypeID, $minsalequantity, $totalquantity, $RecorderPoint, $IsPackage, $InsiderID, $ReportingTypeID, $IsSpecimenRequired, $RangeValue, $HasMethod, $ReportingInGroup, $MethodDescription, $DepartmentID, $Duration, $IsInHouseTest, $Specimen,$GodownID);
		}
		else
		{
			$SaveID=$Handle->ItemUpdate($ID, $Name, $Alias, $PrintName, $SKU, $UPC, $ModelNo, $PartNo, $Description, $ItemCategoryID, $ItemGroupID, $UnitID, $ItemCost, $Price, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime, $TaxRate, $ServiceCharge, $IsFinancialItem, $IsFinishGoods, $IsRawMaterial, $IsUnFinishGoods, $IsDeleted, $CostingMethodID, $PricingMethodID, $IsStockItem, $IsNonStockItem, $IsNegetiveSalesAllow, $IsSalesAsNewManufacture, $IsPurchaseAsConsumed, $IsRejectionAsScrap, $Unit02ID, $Unit01Value, $Unit02Value, $Quantity, $MaintainBatch, $MaintainSerial, $ImagePath, $Image, $VoucherTypeID, $minsalequantity, $totalquantity, $RecorderPoint, $IsPackage, $InsiderID, $ReportingTypeID, $IsSpecimenRequired, $RangeValue, $HasMethod, $ReportingInGroup, $MethodDescription, $DepartmentID, $Duration, $IsInHouseTest, $Specimen,$GodownID);
		}
		
}
elseif ($Type=='SaveItemGroup')
{
$ID='0';
$Name='';
$Alias='';
$MID='0';
$Description='';
$ImagePath='';
$Image='';
 

$ID=$_REQUEST['ID']; 
$Name=$_REQUEST['Name']; 
$Alias=$_REQUEST['Alias']; 
$MID=$_REQUEST['MID']; 
$Description=$_REQUEST['Description']; 
 
 		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		if($ID==0)
		{
		$SaveID=$Handle->ItemGroupInsert($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
		}
		else
		{
			$SaveID=$Handle->ItemGroupUpdate($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
		}
		
}
elseif ($Type=='SaveItemCategory')
{
$ID='0';
$Name='';
$Alias='';
$MID='0';
$Description='';
$ImagePath='';
$Image='';
 

$ID=$_REQUEST['ID']; 
$Name=$_REQUEST['Name']; 
$Alias=$_REQUEST['Alias']; 
$MID=$_REQUEST['MID']; 
$Description=$_REQUEST['Description']; 
 
 		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		if($ID==0)
		{
		$SaveID=$Handle->ItemCategoryInsert($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
		}
		else
		{
			$SaveID=$Handle->ItemCategoryUpdate($ID, $MID, $Name, $Alias, $Description, $ImagePath, $Image, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
			//echo "ABC";
		}
}
elseif ($Type=='SaveUnit')
{
$ID='0';
$Name='';
$Alias='';
$Description='';
 

$ID=$_REQUEST['ID']; 
$Name=$_REQUEST['Name']; 
$Alias=$_REQUEST['Alias']; 
$Description=$_REQUEST['Description']; 
 
 		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		if($ID==0)
		{
		$SaveID=$Handle->UnitInsert($ID, $Name, $Alias, $Description,$CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
		}
		else
		{
			$SaveID=$Handle->UnitUpdate($ID, $Name, $Alias, $Description, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
			//echo "ABC";
		}
}
 elseif($Type=='GrantPromotion')
 {
	 $StudentID=$_REQUEST['StudentID'];
	  $AcademicYear=$_REQUEST['AcademicYear'];
	   $ClassID=$_REQUEST['ClassID'];
	    $SecID=$_REQUEST['SecID'];
		 $RollNo=$_REQUEST['RollNo'];
		  $Amount=$_REQUEST['Amount'];
		 $sql="select * from tbl_studentclass where  AcademicYear=$AcademicYear and StudentID=$StudentID";
		  $getinfoS=$Handle->runQuery($sql);
		  if(count($getinfoS,0)>0)
		  {
		$sql="UPDATE tbl_studentclass set StudentID=$StudentID,AcademicYear=$AcademicYear,ClassID=$ClassID,SecID=$SecID,RollNo='$RollNo', Amount=$Amount where  AcademicYear=$AcademicYear and StudentID=$StudentID";	  
		}
		  else
		  {
		  $sql="Insert INTO tbl_studentclass (AcademicYear, StudentID, ClassID, SecID, RollNo,Amount) values($AcademicYear, $StudentID, $ClassID, $SecID, $RollNo,$Amount)";
		  }
		  // echo $sql;
		  $getinfoF=$Handle->insertQuery($sql);
	 
	 }
	 elseif($Type=='GrantAdmission')
 {
	 $StudentID=$_REQUEST['StudentID'];
	  $AcademicYear=$_REQUEST['AcademicYear'];
	   $ClassID=$_REQUEST['ClassID'];
	    $SecID=$_REQUEST['SecID'];
		 $RollNo=$_REQUEST['RollNo'];
		 $IsAdmission=$_REQUEST['IsAdmission'];
		 $Amount=$_REQUEST['Amount'];
		 $sql="select * from tbl_studentclass where  AcademicYear=$AcademicYear and StudentID=$StudentID";
		  $getinfoS=$Handle->runQuery($sql);
		  if(count($getinfoS,0)>0)
		  {
			$sql="UPDATE tbl_studentclass set IsAdmission=0 where IsAdmission=1";
			$getinfoS=$Handle->insertQuery($sql);
		$sql="UPDATE tbl_studentclass set StudentID=$StudentID,AcademicYear=$AcademicYear,ClassID=$ClassID,SecID=$SecID,RollNo='$RollNo',IsAdmission='$IsAdmission',Amount='$Amount' where  AcademicYear=$AcademicYear and StudentID=$StudentID";	  
		}
		  else
		  {
		  $sql="Insert INTO tbl_studentclass (AcademicYear, StudentID, ClassID, SecID, RollNo,IsAdmission,Amount) values($AcademicYear, $StudentID, $ClassID, $SecID, $RollNo,$IsAdmission,$Amount)";
		  }
		  // echo $sql;
		  $getinfoF=$Handle->insertQuery($sql);
	 
	 }
 
 
  elseif ($Type=='CheckPermission'){
	  $MasterID=$_POST['MasterID'];
	  $PageID=$_POST['PageID'];
	  $sql="SELECT PageID,MasterID,IsActive from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1";
 //echo $sql;
	$getinfo=$Handle->runQuery($sql);
	if(count($getinfo,0)==1)
	{
		echo "1";
	}
	else
	{
		//header('Refresh:0;URL=index.php');
		echo "0";
	}
	  
  }
  
   elseif ($Type=='CheckActionPermission'){
	  $MasterID=$_POST['MasterID'];
	  $Page=$_POST['Page'];
	  $sql="SELECT * from pages where Identity ='$Page' and IsActive=1 order by LinkName";
   //echo $sql;
	$getinfo=$Handle->runQuery($sql);
	if(count($getinfo,0)==1)
	{
		$PageID=$getinfo[0]['id'];
		  $sql="SELECT PageID,MasterID,IsActive from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1";
	// echo $sql;
		$getinfo1=$Handle->runQuery($sql);
		// echo count($getinfo1,0);
		if(count($getinfo1,0)==1)
		{
			echo '1';
		}
		else
		{
			//header('Refresh:0;URL=index.php');
			echo '0';
		}
	}
	else
	{
		//header('Refresh:0;URL=index.php');
		echo '0';
	}
	  
  } 
  elseif ($Type=='CheckPagePermission'){
	  $MasterID=$_POST['MasterID'];
	  $Page=$_POST['Page'];
	  $sql="SELECT * from pages where Identity ='$Page' and IsActive=1 order by LinkName";
  //echo $sql;
	$getinfo=$Handle->runQuery($sql);
	if(count($getinfo,0)==1)
	{
		$PageID=$getinfo[0]['ID'];
		  $sql="SELECT PageID,MasterID,IsActive from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1";
	//echo $sql;
		$getinfo1=$Handle->runQuery($sql);
		if(count($getinfo1,0)==1)
		{
			echo "1";
		}
		else
		{
			//header('Refresh:0;URL=index.php');
			echo "0";
		}
	}
		else
		{
			//header('Refresh:0;URL=index.php');
			echo "0";
		}
	  
  }
 elseif ($Type=='permission'){
	  $MasterID=$_POST['MasterID'];
$sql="SELECT * from pages where IsActive=1 order by Type,LinkName";
//echo $sql;
	$getinfo=$Handle->runQuery($sql);
	?>
	<table class="table">
    <tr>
    	<th>Module</th><th>Type</th><th>Permission</th>
    </tr>
      <?php
        
		//$getinfo=$Handle->MasterDB_MasterTypeID(36);
		for($x=0; $x < count($getinfo,0); $x++)
		{
			?>
    			<tr>
                <td><div id="btnaction"><?php CheckUserModule($getinfo[$x]["ID"],$MasterID); ?></div></td>
                	<td><?php echo $getinfo[$x]["LinkName"];?></td>
                    <td><?php echo $getinfo[$x]["Type"];?></td>
                    
                </tr>
            <?php
		}
		?>
 	</table>
    <?php 
	}

elseif ($Type=='activate'){
		  $MasterID=$_POST['MasterID'];
  		  $PageID=$_POST['PageID'];
		  $sql="SELECT ID from user_pages Where PageID=$PageID and MasterID=$MasterID";
		  $getinfoS=$Handle->runQuery($sql);
		  if(count($getinfoS,0)>0)
		  {
		$sql="UPDATE user_pages set IsActive=1 where PageID=$PageID and MasterID=$MasterID";	  
		}
		  else
		  {
		  $sql="Insert INTO user_pages (PageID,MasterID,IsActive) values($PageID,$MasterID,1)";
		  }
		 // echo $sql;
		  $getinfoF=$Handle->insertQuery($sql);
	 }

elseif ($Type=='revoke'){
		  $MasterID=$_POST['MasterID'];
  		  $PageID=$_POST['PageID'];
		  $sql="UPDATE user_pages set IsActive=0 where PageID=$PageID and MasterID=$MasterID";
		 // echo $sql;
		  $getinfoF=$Handle->insertQuery($sql);
	 }
  ?>
   
    <?php
	function CheckUserModule($PageID,$MasterID)
	{
		$Handle = new MODItem();
		$sql="SELECT * from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1 ";
		$getinfoF=$Handle->runQuery($sql);
		if(count($getinfoF,0)==0)
		{
			?>
            <a id="activate" class="btn btn-success" onClick="ActivatePage(this,<?php echo $PageID; ?>,<?php echo $MasterID; ?>)">Activate</a>
		<?php
			}
		else
		{
		?>
            <a id="rovoke"   class="btn " onClick="Revoke(this,<?php echo $PageID; ?>,<?php echo $MasterID; ?>)">Revoke</a>
		<?php	
			}
		}
	?> 
	
?>