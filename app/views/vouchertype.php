 <?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.VoucherType.php");
$Handle = new VoucherType();
$x=0;
$ID=0;
$ID=$_REQUEST['ID'];
?>
<div class="workspace">
<div class="displayhead">Voucher Type
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>

<span name="Configure" style="margin-right:5px;" onClick="<?php 
if ($ID==0){?>alert('Nothing Found');<?php }else{?>redirectBypagewithIDValue('vouchertypeadditional',1,<?php echo $ID; ?>);<?php } ?>" class="btn btn-primary pull-right" >
<i class="fa fa-suitcase" aria-hidden="true"></i> 
More
</span>

<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('vouchertype',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveVoucherType();" > <i class="fa fa-check-circle-o" aria-hidden="true"></i> Save </span> 
</div>
 

  <div class="panel-body" id="accordion1">
  
 
 
<?php

	 
		$VoucherType='';
		$Alias='';
		$Name= '';
		$PrintName= '';
		$OptionalPrintName= '';
		$PrintName= '';
		$Description= '';
		$MasterTypeID=0;
		$MID= 0;
		$IsMaster=0;
		$ClassName='';
		$ReportClassName='';
		$VoucherCategoryID=0;
		$IsManufacturingJournal=0;
		$LedgerHead=0;
		$GroupHead=0;
		$ProcedureTypeID=0;
		$AccountsNature=0;
		$IsEffectLedgerValue=0;
		$InventoryNature=0;
		$IsEffectInventoryValue=0;
		$PayrollNature=0;
		$IsEffectPayrollValue=0;
		$IsOptional=0;
		$RefVoucherTypeID=0;
		$TrackDownInventory= 0;
		 $VoucherNature= 0;
		 $ItemBatchCheckID=0;
		 $ItemPriceTypeID=0;
		 $CartTypeID=0;

if($ID!=0)
{
$getinfo = $Handle->runQuery("SELECT * FROM tbl_vouchertype where ID=$ID ");/* WHERE MasterTypeID=1");*/
 //print_r($getinfo);
	//ID, VoucherType, Alias, Name, PrintName, OptionalPrintName, CreatedBy, ModifyTime, Description, MID, IsMaster, ClassName, ReportClassName, VoucherCategoryID, IsManufacturingJournal, LedgerHead, GroupHead, ProcedureTypeID, AccountsNature, IsEffectLedgerValue, InventoryNature, IsEffectInventoryValue, PayrollNature, IsEffectPayrollValue, IsOptional, RefVoucherTypeID, TrackDownInventory
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		$VoucherType=$getinfo[$x]["VoucherType"];
		$Alias=$getinfo[$x]["Alias"];
		$Name=$getinfo[$x]["Name"];
		$PrintName=$getinfo[$x]["PrintName"];
		$OptionalPrintName=$getinfo[$x]["OptionalPrintName"];
		$PrintName=$getinfo[$x]["PrintName"];
		$Description=$getinfo[$x]["Description"];
		$MID=$getinfo[$x]["MID"];
		$IsMaster=$getinfo[$x]["IsMaster"];
		$ClassName=$getinfo[$x]["ClassName"];
		$ReportClassName=$getinfo[$x]["ReportClassName"];
		$VoucherCategoryID=$getinfo[$x]["VoucherCategoryID"];
		$IsManufacturingJournal=$getinfo[$x]["IsManufacturingJournal"];
		$LedgerHead=$getinfo[$x]["LedgerHead"];
		$GroupHead=$getinfo[$x]["GroupHead"];
		$ProcedureTypeID=$getinfo[$x]["ProcedureTypeID"];
		$AccountsNature=$getinfo[$x]["AccountsNature"];
		$IsEffectLedgerValue=$getinfo[$x]["IsEffectLedgerValue"];
		$InventoryNature=$getinfo[$x]["InventoryNature"];
		$IsEffectInventoryValue=$getinfo[$x]["IsEffectInventoryValue"];
		$PayrollNature=$getinfo[$x]["PayrollNature"];
		$IsEffectPayrollValue=$getinfo[$x]["IsEffectPayrollValue"];
		$IsOptional=$getinfo[$x]["IsOptional"];
		$RefVoucherTypeID=$getinfo[$x]["RefVoucherTypeID"];
		$TrackDownInventory=$getinfo[$x]["TrackDownInventory"];
		$VoucherNature=$getinfo[$x]["VoucherNature"];
		 $ItemBatchCheckID=$getinfo[$x]["ItemBatchCheckID"];
		 $ItemPriceTypeID=$getinfo[$x]["ItemPriceTypeID"];
		 $CartTypeID=$getinfo[$x]["CartTypeID"];
		 

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
<div class="col-lg-12">
<div class="form-group col-lg-4">
<label class="control-label" for="Name">Name: </label>
<input type="text" class="form-control" name="Name" id="Name" placeholder=" Name" value="<?php echo $Name; ?>" onKeyUp="setChanges(this.value);">

<input type="hidden" name="ID" id="ID" value="<?php echo $ID; ?>">
</div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">
      Alias: </label>
 </span><input type="text" class="form-control" name="Alias"  id="Alias" placeholder=" Alias" value="<?php echo $Alias; ?>"></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">PrintName: </label>
 <input type="text" class="form-control" name="PrintName"  id="PrintName" placeholder="PrintName" value="<?php echo $PrintName; ?>"></div> 
</div>
<div class="col-lg-12">
<div class="form-group col-lg-4">
      <label class="control-label" for="Name">PrintName[Optional]: </label>

      <input type="text" class="form-control"  name="OptionalPrintName" id="OptionalPrintName" placeholder="Optional Print Name" value="<?php echo $OptionalPrintName; ?>"></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">Description: </label>

      
      <input type="text" class="form-control"  name="Description" id="Description" placeholder="Description" value="<?php echo $Description; ?>"></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">Group: </label>

<select name="MID" id="MID" class="form-control">
				<!--option value="">Please select...</option-->
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_vouchergroup");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($MID==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></div> 
</div>
<div class="col-lg-12">
<div class="form-group col-lg-4">
      <label class="control-label" for="Name">Category: </label>

<select name="VoucherCategoryID" id="VoucherCategoryID" class="form-control">
				<option value="0">Please select...</option>
<?php
$VoucherCategoryIDinfo = $Handle->runQuery("SELECT * FROM tbl_vouchercategory");
//echo $ItemCategoryID;

for ($ig = 0; $ig < count($VoucherCategoryIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $VoucherCategoryIDinfo[$ig]['ID'];?>" <?php if($VoucherCategoryID==$VoucherCategoryIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $VoucherCategoryIDinfo[$ig]['VoucherCategory'];?></option>
	<?php } ?>
		</select></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">IsMaster ? </label>

		<select name="IsMaster" id="IsMaster" class="form-control">
            <option value="1"  <?php if($IsMaster=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($IsMaster=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">IsManufacturingJournal ? </label>

		<select name="IsManufacturingJournal" id="IsManufacturingJournal" class="form-control">
            <option value="1"  <?php if($IsManufacturingJournal=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($IsManufacturingJournal=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select></div> 
</div>
<div class="col-lg-12">
<div class="form-group col-lg-4">
      <label class="control-label" for="Name">IsOptional ? </label>

<select name="IsOptional" id="IsOptional" class="form-control">
	<option value="1"  <?php if($IsOptional=="1") echo 'selected= "selected"'; ?>>YES</option>
	<option value="0"  <?php if($IsOptional=="0") echo 'selected= "selected"'; ?>>NO</option>
</select>

	<input type="hidden" id="RefVoucherTypeID" name="RefVoucherTypeID" value="<?php echo $RefVoucherTypeID; ?>">
	<input type="hidden" id="TrackDownInventory" name="TrackDownInventory" value="<?php echo $TrackDownInventory; ?>"></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">AccountsNature ? </label>

		<select name="AccountsNature" id="AccountsNature" class="form-control">
            <option value="1"  <?php if($AccountsNature=="1") echo 'selected= "selected"'; ?>>Debit</option>
            <option value="-1"  <?php if($AccountsNature=="-1") echo 'selected= "selected"'; ?>>Credit</option>
		</select></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">IsEffectLedgerValue ? </label>

		<select name="IsEffectLedgerValue" id="IsEffectLedgerValue" class="form-control">
            <option value="1"  <?php if($IsEffectLedgerValue=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($IsEffectLedgerValue=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select></div> 
</div>
<div class="col-lg-12">
<div class="form-group col-lg-4">
      <label class="control-label" for="Name">InventoryNature ? </label>

		<select name="InventoryNature" id="InventoryNature" class="form-control">
            <option value="1"  <?php if($InventoryNature=="1") echo 'selected= "selected"'; ?>>In</option>
            <option value="-1"  <?php if($InventoryNature=="-1") echo 'selected= "selected"'; ?>>Out</option>
		</select></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">IsEffectInventoryValue ? </label>

<select name="IsEffectInventoryValue" id="IsEffectInventoryValue" class="form-control">
	<option value="1"  <?php if($IsEffectInventoryValue=="1") echo 'selected= "selected"'; ?>>YES</option>
	<option value="0"  <?php if($IsEffectInventoryValue=="0") echo 'selected= "selected"'; ?>>NO</option>
</select></div> 

<div class="form-group col-lg-4">
      <label class="control-label" for="Name">PayrollNature ? </label>

		<select name="PayrollNature" id="PayrollNature" class="form-control">
            <option value="1"  <?php if($PayrollNature=="1") echo 'selected= "selected"'; ?>>Asset</option>
            <option value="-1"  <?php if($PayrollNature=="-1") echo 'selected= "selected"'; ?>>Liability</option>
		</select> 
</div>
</div>
<div class="col-lg-12">
<div class="form-group col-lg-4">
      <label class="control-label" for="Name">IsEffectPayrollValue ? </label>

<select name="IsEffectPayrollValue" id="IsEffectPayrollValue" class="form-control">
	<option value="1"  <?php if($IsEffectPayrollValue=="1") echo 'selected= "selected"'; ?>>YES</option>
	<option value="0"  <?php if($IsEffectPayrollValue=="0") echo 'selected= "selected"'; ?>>NO</option>
</select> 
</div>
<div class="form-group col-lg-4">
      <label class="control-label" for="ItemBatchCheckID">ItemBatchChecking ? </label>

<select name="ItemBatchCheckID" id="ItemBatchCheckID" class="form-control">
<option value="0">Please select...</option>

<?php
$ItemBatchCheckInfo = $Handle->runQuery("SELECT * FROM tbl_itembatchcheck");
//echo $ItemCategoryID;

for ($ig = 0; $ig < count($ItemBatchCheckInfo,0); $ig++) {
       ?>
 <option value="<?php echo $ItemBatchCheckInfo[$ig]['ID'];?>" <?php if($ItemBatchCheckID==$ItemBatchCheckInfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $ItemBatchCheckInfo[$ig]['Name'];?></option>
	<?php } ?>
		</select>
</div>
<div class="form-group col-lg-4">
      <label class="control-label" for="Name">PriceType: </label>

<select name="ItemPriceTypeID" id="ItemPriceTypeID" class="form-control">
				<option value="0">Please select...</option>
<?php
$ItemPriceTypeInfo = $Handle->runQuery("SELECT * FROM tbl_itempricetype");
//echo $ItemCategoryID;

for ($ig = 0; $ig < count($ItemPriceTypeInfo,0); $ig++) {
       ?>
 <option value="<?php echo $ItemPriceTypeInfo[$ig]['ID'];?>" <?php if($ItemPriceTypeID==$ItemPriceTypeInfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $ItemPriceTypeInfo[$ig]['PriceType'];?></option>
	<?php } ?>
		</select></div>
</div>
<div class="col-lg-12">        
        <div class="form-group col-lg-4">
      <label class="control-label" for="CartTypeID">CartType: </label>

<select name="CartTypeID" id="CartTypeID" class="form-control">
				<option value="0">Please select...</option>
<?php
$ItemCartTypeInfo = $Handle->runQuery("SELECT * FROM tbl_carttype");
//echo $ItemCategoryID;

for ($ig = 0; $ig < count($ItemCartTypeInfo,0); $ig++) {
       ?>
 <option value="<?php echo $ItemCartTypeInfo[$ig]['ID'];?>" <?php if($CartTypeID==$ItemCartTypeInfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $ItemCartTypeInfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></div>
<input type="hidden" id="VoucherNature" name="VoucherNature" value="<?php echo $VoucherNature;?>">
  </div>

     </div>
     </div>
<div id="err"></div>


<script>
function SaveVoucherType()
{
	var pg="app/controllers/vouchertype.php";
	var Type="SaveVoucherType";

	var ID=document.getElementById("ID").value;
	
	var VoucherType = document.getElementById("Name").value;
	var Alias = document.getElementById("Alias").value;
	var Name=document.getElementById("Name").value;
	var PrintName=document.getElementById("PrintName").value;
	var OptionalPrintName=document.getElementById("OptionalPrintName").value;
	var Description=document.getElementById("Description").value;
	var MID = document.getElementById("MID").value;
 var VoucherCategoryID=document.getElementById("VoucherCategoryID").value;
	 var IsManufacturingJournal=document.getElementById("IsManufacturingJournal").value;
	
	var AccountsNature = document.getElementById("AccountsNature").value;
	var IsEffectLedgerValue = document.getElementById("IsEffectLedgerValue").value;
	var InventoryNature=document.getElementById("InventoryNature").value;
	var IsEffectInventoryValue=document.getElementById("IsEffectInventoryValue").value;
	var PayrollNature=document.getElementById("PayrollNature").value;
		
	var IsEffectPayrollValue=document.getElementById("IsEffectPayrollValue").value;
	var IsOptional=document.getElementById("IsOptional").value;

	var ItemBatchCheckID=document.getElementById("ItemBatchCheckID").value;
	var ItemPriceTypeID=document.getElementById("ItemPriceTypeID").value;
	var CartTypeID=document.getElementById("CartTypeID").value;
	  //alert(CartTypeID);
	var param={Type:Type,ID:ID, VoucherType:VoucherType, Alias:Alias, Name:Name, PrintName:PrintName, OptionalPrintName:OptionalPrintName, Description:Description, MID:MID,  VoucherCategoryID:VoucherCategoryID, IsManufacturingJournal:IsManufacturingJournal, AccountsNature:AccountsNature, IsEffectLedgerValue:IsEffectLedgerValue, InventoryNature:InventoryNature, IsEffectInventoryValue:IsEffectInventoryValue, PayrollNature:PayrollNature, IsEffectPayrollValue:IsEffectPayrollValue, IsOptional:IsOptional, ItemBatchCheckID:ItemBatchCheckID, ItemPriceTypeID:ItemPriceTypeID, CartTypeID:CartTypeID};
	//alert(param);
	$.post(pg,param,function(data){
		// alert(data);
		location.reload();
		//document.getElementById("err").innerHTML=data;
		});
}
</script> 