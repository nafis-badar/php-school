<?php
if (!isset($_SESSION)) {session_start();}

require_once("CTL.Item.php");

 $item_handle = new Item();
 $x=0;
$ID=0;
$ID=$_REQUEST['ID'];
$Name='';
$Alias='';
$HSN='';
$PrintName='';
$SKU='';
$UPC='';
$ModelNo='';
$PartNo='';
$Description='';
$ItemCategoryID=0;
$ItemGroupID=0;
$UnitID=0;
$ItemCost=0;
$Price=0;
$CreatedBy=0;
$ModifyTime='';
$TaxRate=0;
$ServiceCharge=0;
$IsFinancialItem=0;
$IsFinishGoods=0;
$IsRawMaterial=0;
$IsUnFinishGoods=0;
$IsDeleted=0;
$CostingMethodID=0;
$PricingMethodID=0;
$IsStockItem=0;
$IsNonStockItem=0;
$IsNegetiveSalesAllow=0;
$IsSalesAsNewManufacture=0;
$IsPurchaseAsConsumed=0;
$IsRejectionAsScrap=0;
$Unit02ID=0;
$Unit01Value=1;
$Unit02Value=1;
$Quantity=0;
$MaintainBatch=0;
$MaintainSerial=0;
$ImagePath='';
$Image='';
$VoucherTypeID=0;
$minsalequantity=0;
$totalquantity=0;
$StorageID=0;
$PurchaseTaxClassID=0;
$SalesTaxClassID=0;
$CGSTPercentage=0;
$SGSTPercentage=0;
$IGSTPercentage=0;
 ?>
<div class="workspace">
<div class="displayhead">Item Information
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveItem();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
<span name="Configure" style="margin-right:5px;" onClick="<?php 
if ($ID==0){?>alert('Nothing Found');<?php }else{?>getproduct01(<?php echo $ID; ?>,1);<?php } ?>" class="btn btn-primary pull-right" >
<i class="fa fa-suitcase" aria-hidden="true"></i> 
More
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> 
Back
</span>


</div>
<div class="panel-body" id="accordion1">
 
 <div id="info" style="background-color:rgba(185,185,185,1.00); color:rgba(255,103,0,1.00);"></div>
<?php

if($ID!=0)
{
$getinfo = $item_handle->ItemDetails($ID);
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		$Name=$getinfo[$x]["Name"];
		$Alias=$getinfo[$x]["Alias"];
		$PrintName=$getinfo[$x]["PrintName"];
		$HSN=$getinfo[$x]["HSN"];
		$SKU=$getinfo[$x]["SKU"];
		$UPC=$getinfo[$x]["UPC"];
		$ModelNo=$getinfo[$x]["ModelNo"];
		$PartNo=$getinfo[$x]["PartNo"];
		$Description=$getinfo[$x]["Description"];
		$ItemCategoryID=$getinfo[$x]["ItemCategoryID"];
		$ItemGroupID=$getinfo[$x]["ItemGroupID"];
		$UnitID=$getinfo[$x]["UnitID"];
		$MRP=$getinfo[$x]["MRP"];
		$ItemCost=$getinfo[$x]["ItemCost"];
		$Price=$getinfo[$x]["Price"];
		$CreatedBy=$getinfo[$x]["CreatedBy"];
		$ModifyTime=$getinfo[$x]["ModifyTime"];
		$TaxRate=$getinfo[$x]["TaxRate"];
		$ServiceCharge=$getinfo[$x]["ServiceCharge"];
		$IsFinancialItem=$getinfo[$x]["IsFinancialItem"];
		$IsFinishGoods=$getinfo[$x]["IsFinishGoods"];
		$IsRawMaterial=$getinfo[$x]["IsRawMaterial"];
		$IsUnFinishGoods=$getinfo[$x]["IsUnFinishGoods"];
		$IsDeleted=$getinfo[$x]["IsDeleted"];
		$CostingMethodID=$getinfo[$x]["CostingMethodID"];
		$PricingMethodID=$getinfo[$x]["PricingMethodID"];
		$IsStockItem=$getinfo[$x]["IsStockItem"];
		$IsNonStockItem=$getinfo[$x]["IsNonStockItem"];
		$IsNegetiveSalesAllow=$getinfo[$x]["IsNegetiveSalesAllow"];
		$IsSalesAsNewManufacture=$getinfo[$x]["IsSalesAsNewManufacture"];
		$IsPurchaseAsConsumed=$getinfo[$x]["IsPurchaseAsConsumed"];
		$IsRejectionAsScrap=$getinfo[$x]["IsRejectionAsScrap"];
		$Unit02ID=$getinfo[$x]["Unit02ID"];
		$Unit01Value=$getinfo[$x]["Unit01Value"];
		$Unit02Value=$getinfo[$x]["Unit02Value"];
		$Quantity=$getinfo[$x]["Quantity"];
		$MaintainBatch=$getinfo[$x]["MaintainBatch"];
		$MaintainSerial=$getinfo[$x]["MaintainSerial"];
		$ImagePath=$getinfo[$x]["ImagePath"];
		$Image=$getinfo[$x]["Image"];
		$VoucherTypeID=$getinfo[$x]["VoucherTypeID"];
		$minsalequantity=$getinfo[$x]["minsalequantity"];
		$totalquantity=$getinfo[$x]["totalquantity"];
$totalquantity=$getinfo[$x]["totalquantity"];
$StorageID=$getinfo[$x]["StorageID"];
$RecorderPoint=$getinfo[$x]["RecorderPoint"];

$PurchaseTaxClassID=$getinfo[$x]["PurchaseTaxClassID"];
$SalesTaxClassID=$getinfo[$x]["SalesTaxClassID"];
$CGSTPercentage=$getinfo[$x]["CGSTPercentage"];
$SGSTPercentage=$getinfo[$x]["SGSTPercentage"];
$IGSTPercentage=$getinfo[$x]["IGSTPercentage"];
 

	}
}
       ?>

 
  
  <script>
  function setChanges(val01)
  {
	$("#Alias").val(val01);  
		$("#PrintName").val(val01);  
	  }
  </script>
  <div  class="col-lg-12" style="border:2px solid rgba(148,181,160,1.00); border-radius:3px; margin-bottom:5px;">
  <div class="col-lg-12">
<div class="col-lg-4 col-md-3">
<label class="control-label" for="Name">Name:</label>
<input type="text" class="form-control input-sm" name="Name" id="Name" placeholder="Product Name" value="<?php echo $Name; ?>" onKeyUp="setChanges(this.value);">


  <input type="hidden" name="ID" id="ID" value="<?php echo $ID; ?>">
  <input type="hidden" name="Alias"  id="Alias" value="<?php echo $Alias; ?>">
  <input type="hidden" name="PrintName"  id="PrintName" value="<?php echo $PrintName; ?>">
  <input type="hidden" name="ModelNo"  id="ModelNo" value="<?php echo $ModelNo; ?>">
  <input type="hidden" name="PartNo"  id="PartNo" value="<?php echo $PartNo; ?>">
  <input type="hidden" name="UPC"  id="UPC" value="<?php echo $UPC; ?>">
  <input type="hidden" name="MRP"  id="MRP" value="<?php echo $MRP; ?>">
  <input type="hidden" name="RecorderPoint"  id="RecorderPoint" value="<?php echo $RecorderPoint; ?>">
  </div>
 
<!--div class="form-group"><label class="control-label" for="SKU">SKU:</label>
<input type="text" class="form-control input-sm"  name="SKU" id="SKU" placeholder="Enter partno" value="<?php echo $SKU; ?>"> 
</div-->

<div class="col-lg-4 col-md-3"><label class="control-label" for="HSN">HSN:</label>
<input type="text" class="form-control input-sm"  name="HSN" id="HSN" placeholder="Enter HSN" value="<?php echo $HSN; ?>"> 
</div>
 
<div class="col-lg-4 col-md-3"><label class="control-label" for="ItemGroupID">Group:</label>
<select name="ItemGroupID" id="ItemGroupID" class="form-control input-sm">
<?php
$getitemgroupinfo = $item_handle->runQuery("SELECT * FROM tbl_itemgroup");
for ($ig = 0; $ig < count($getitemgroupinfo,0); $ig++) {
       ?>
 <option value="<?php echo $getitemgroupinfo[$ig]['ID'];?>" <?php if($ItemGroupID==$getitemgroupinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemgroupinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select>
</div>
</div>
<div  class="col-lg-12">
<div class="col-lg-4 col-md-3">
<label class="control-label" for="ItemCategoryID">Category:</label>
<select name="ItemCategoryID" id="ItemCategoryID" class="form-control input-sm">
				<option value="0">Please select...</option>
<?php
$getitemcategoryinfo = $item_handle->runQuery("SELECT * FROM tbl_itemcategory");
//echo $ItemCategoryID;

for ($ig = 0; $ig < count($getitemcategoryinfo,0); $ig++) {
       ?>
 <option value="<?php echo $getitemcategoryinfo[$ig]['ID'];?>" <?php if($ItemCategoryID==$getitemcategoryinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemcategoryinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select>
</div>

<div class="col-lg-4 col-md-3"><label class="control-label" for="UnitID">Measuring Unit: </label>
<select name="UnitID" id="UnitID" class="form-control input-sm">
				<option value="0">Please select...</option>
<?php
$getunitinfo = $item_handle->runQuery("SELECT * FROM tbl_unit");
 
for ($iu = 0; $iu < count($getunitinfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getunitinfo[$iu]['ID'];?>" <?php if($UnitID==$getunitinfo[$iu]['ID']) echo 'selected= "selected"'; ?>><?php echo $getunitinfo[$iu]['Name'];?></option>
	<?php } ?>
		</select>
<input type="hidden" name="Unit01Value" id="Unit01Value" value="<?php echo $Unit01Value; ?>"> 
</div>

<div class="col-lg-4 col-md-3"><label class="control-label" for="ItemCost">Price (Purchase): </label>

<input type="text" class="form-control input-sm" name="ItemCost" id="ItemCost" placeholder="Enter ItemCost" value="<?php echo $ItemCost; ?>"> 
</div>
</div>
<div class="col-lg-12">
<div class="col-lg-4 col-md-3"><label class="control-label" for="Price">
Price (Sales) : </label><input type="text" class="form-control input-sm" name="Price" id="Price" placeholder="Enter price" value="<?php echo $Price; ?>"> 
</div>

<div class="col-lg-4 col-md-3"><label class="control-label" for="MaintainBatch">Maintain Batch? </label>
<select name="MaintainBatch" id="MaintainBatch" class="form-control input-sm">
				 
<?php
$getMaintainBatchinfo = $item_handle->runQuery("SELECT * FROM tbl_boolean where BooleanType=2");
 
for ($iu = 0; $iu < count($getMaintainBatchinfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getMaintainBatchinfo[$iu]['Value'];?>" <?php if($MaintainBatch==$getMaintainBatchinfo[$iu]['Value']) echo 'selected= "selected"'; ?>><?php echo $getMaintainBatchinfo[$iu]['Text'];?></option>
	<?php } ?>
		</select>
<input type="hidden" name="Unit01Value" id="Unit01Value" value="<?php echo $Unit01Value; ?>"> 
</div>
<div class="col-lg-4 col-md-3"><label class="control-label" for="StorageID">Default Storage </label>
<select name="StorageID" id="StorageID" class="form-control input-sm">
				<option value="0">Please select...</option>
<?php
$getStorageInfo = $item_handle->runQuery("SELECT * FROM tbl_master where MasterTypeID=4");
 
for ($iu = 0; $iu < count($getStorageInfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getStorageInfo[$iu]['ID'];?>" <?php if($StorageID==$getStorageInfo[$iu]['ID']) echo 'selected= "selected"'; ?>><?php echo $getStorageInfo[$iu]['Name'];?></option>
	<?php } ?>
		</select>

</div>
</div>
</div>	
<div class="col-lg-12" style="border:2px solid rgba(148,181,160,1.00); border-radius:3px;">
<p for="">Tax Settings</p>
<div class="col-md-6"><label class="control-label" for="PurchaseTaxClassID">Purchase Tax</label>
<select name="PurchaseTaxClassID" id="PurchaseTaxClassID" class="form-control input-sm">
				<option value="0">Please select...</option>
<?php
$getPurTaxClsInfo = $item_handle->runQuery("SELECT * FROM tbl_taxclass where IsDeleted=0 and IsPurchaseTax=1");
 
for ($iu = 0; $iu < count($getPurTaxClsInfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getPurTaxClsInfo[$iu]['ID'];?>" <?php if($PurchaseTaxClassID==$getPurTaxClsInfo[$iu]['ID']) echo 'selected= "selected"'; ?>><?php echo $getPurTaxClsInfo[$iu]['Name'];?></option>
	<?php } ?>
		</select>

</div>
<div class="col-md-6"><label class="control-label" for="SalesTaxClassID">Sales Tax</label>
<select name="SalesTaxClassID" id="SalesTaxClassID" class="form-control input-sm">
				<option value="0">Please select...</option>
<?php
$getSlsTaxClsInfo = $item_handle->runQuery("SELECT * FROM tbl_taxclass where IsDeleted=0 and IsSalesTax=1");
 
for ($iu = 0; $iu < count($getSlsTaxClsInfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getSlsTaxClsInfo[$iu]['ID'];?>" <?php if($SalesTaxClassID==$getSlsTaxClsInfo[$iu]['ID']) echo 'selected= "selected"'; ?>><?php echo $getSlsTaxClsInfo[$iu]['Name'];?></option>
	<?php } ?>
		</select>

</div>
<div class="col-lg-4 col-md-3"><label class="control-label" for="CGSTPercentage">
CGST(%) : </label><input type="text" class="form-control input-sm" name="CGSTPercentage" id="CGSTPercentage" placeholder="Enter CGSTPercentage" value="<?php echo $CGSTPercentage; ?>"> 
</div>
<div class="col-lg-4 col-md-3"><label class="control-label" for="SGSTPercentage">
SGST(%) : </label><input type="text" class="form-control input-sm" name="SGSTPercentage" id="SGSTPercentage" placeholder="Enter SGSTPercentage" value="<?php echo $SGSTPercentage; ?>"> 
</div>
<div class="col-lg-4 col-md-3"><label class="control-label" for="IGSTPercentage">
IGST(%) </label><input type="text" class="form-control input-sm" name="IGSTPercentage" id="IGSTPercentage" placeholder="Enter IGSTPercentage" value="<?php echo $IGSTPercentage; ?>"> 
</div>
</div>

<!--td>
Costing Method:
<select name="CostingMethodID" id="CostingMethodID" class="form-control input-sm">
				<option value="0">Please select...</option>
<?php
$getcosthead = $item_handle->runQuery("SELECT * FROM tbl_valuationmethods where IsCosting=1");
//$CostingMethodID=$CostingMethodID;
for ($ch = 0; $ch < count($getcosthead ,0); $ch++) {
       ?>
 <option value="<?php echo $getcosthead[$ch]['ID'];?>" <?php if($CostingMethodID==$getcosthead[$ch]['ID']) echo 'selected= "selected"'; ?>><?php echo $getcosthead[$ch]['ValuationMethods'];?></option>
	<?php } ?>
		</select> 
</td>
<td>
Pricing Method:
<select name="PricingMethodID" id="PricingMethodID" class="form-control input-sm">
				<option value="0">Please select...</option>
<?php
$getpricinghead = $item_handle->runQuery("SELECT * FROM tbl_valuationmethods where IsPricing=1");
//$PricingMethodID=$PricingMethodID;
for ($ph = 0; $ph < count($getpricinghead  ,0); $ph++) {
       ?>
 <option value="<?php echo $getpricinghead [$ph]['ID'];?>" <?php if($PricingMethodID==$getpricinghead[$ph]['ID']) echo 'selected= "selected"'; ?>><?php echo $getpricinghead [$ph]['ValuationMethods'];?></option>
	<?php } ?>
		</select> 

</td-->
 
  
 
   
    </div>

 
      </div>
 <script>
function SaveItem() {
	var Name=document.getElementById("Name").value;
	var ID=document.getElementById("ID").value;
	var HSN=document.getElementById("HSN").value;
	var ItemGroupID=document.getElementById("ItemGroupID").value;
	var ItemCategoryID=document.getElementById("ItemCategoryID").value;
	var UnitID=document.getElementById("UnitID").value;
	 var MRP=document.getElementById("MRP").value;
	var ItemCost=document.getElementById("ItemCost").value;
	var Price=document.getElementById("Price").value;
	var MaintainBatch=document.getElementById("MaintainBatch").value;
	var StorageID=document.getElementById("StorageID").value;
	var RecorderPoint=document.getElementById("RecorderPoint").value;
	var PurchaseTaxClassID=document.getElementById("PurchaseTaxClassID").value;
	var SalesTaxClassID=document.getElementById("SalesTaxClassID").value;
	var CGSTPercentage=document.getElementById("CGSTPercentage").value;
	var SGSTPercentage=document.getElementById("SGSTPercentage").value;
	var IGSTPercentage=document.getElementById("IGSTPercentage").value;
var Type='SaveItem';	
	 
	var fd={Type:Type,ID:ID,Name:Name,HSN:HSN,ItemGroupID:ItemGroupID,ItemCategoryID:ItemCategoryID,UnitID:UnitID,ItemCost:ItemCost,Price:Price,MaintainBatch:MaintainBatch, StorageID:StorageID,MRP:MRP,RecorderPoint:RecorderPoint,PurchaseTaxClassID:PurchaseTaxClassID,SalesTaxClassID:SalesTaxClassID,CGSTPercentage:CGSTPercentage,SGSTPercentage:SGSTPercentage,IGSTPercentage:IGSTPercentage};
	//fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID};
	//alert(resultelementid);
    var pg='app/controllers/ManageMaster.php';
	$.post(pg,fd,function(data){
		document.getElementById("info").innerHTML=data;
		//alert(data);
		 redirectBypagewithIDValue('indexitem',0,0);
		});
}
 
</script> 