<?php
if (!isset($_SESSION)) {session_start();}
require_once("../includes/dbase.php");
?>
 
 
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
 
<div class="container">
<div class="displayhead">Product Information</div>
<div class="panel-group" id="accordion1">

<?php
$db_handle = new DBController();
$getinfo = $db_handle->runQuery("SELECT * FROM tbl_item");/* WHERE MasterTypeID=1");*/
/*echo sizeof($getcompanyinfo,1)."<br>";
echo sizeof($getcompanyinfo,0)."<br>";
echo count($getcompanyinfo,1)."<br>";
echo count($getcompanyinfo,0)."<br>";
echo $getcompanyinfo[0]["Name"];*/

for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
   <div class="panel panel-default">
    <div class="panel-heading">
      <a data-toggle="collapse" data-parent="#accordion1" href="<?php echo "#collapseOne".($x+1);?>"  >
      	<div class="pointer-left"></div><div class="panel-title"><?php echo $getinfo[$x]["Name"]; ?></div></a>
    </div>
    <div id="<?php echo "collapseOne".($x+1);?>" class="panel-collapse collapse " >
      <div class="panel-body" style="text-align:left;">
	
<form class="form-horizontal" name="myform" id ="myform" method="post" role="form" action="modules/customeradd.sql.php" style="padding:15px">
   <div class="form-group form-group-sm">
  <label class="col-sm-2 control-label" for="name">Item Name:</label>
  <div class="col-sm-10">
  <input type="text" class="form-control input-sm" id="name" placeholder="Enter Name" value="<?php echo $getinfo[$x]["Name"]; ?>"> 
</div></div>

     <div class="form-group form-group-sm">
  <label class="col-sm-2 control-label" for="alias">Alias:</label>
  <div class="col-sm-10">
  <input type="text" class="form-control input-sm" id="alias" placeholder="Enter Item alias" value="<?php echo $getinfo[$x]["Alias"]; ?>"> 
</div></div>

     <div class="form-group form-group-sm">
  <label class="col-sm-2 control-label" for="partno">Part No:</label>
  <div class="col-sm-10">
  <input type="text" class="form-control input-sm" id="partno" placeholder="Enter partno" value="<?php echo $getinfo[$x]["PartNo"]; ?>"> 
</div></div>

<div class="form-group form-group-sm ">
  <label class="col-sm-2 control-label" for="_desc">Description:</label>
  <div class="col-sm-10">
  <textarea class="form-control input-sm" placeholder="Enter Description" id="_desc"><?php  
echo $getinfo[$x]["_Desc"]; ?></textarea> 
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="itemgroup" class="col-sm-2 col-lg-2 control-label"  >Group</label>
	<div class="col-sm-10">
		<select name="itemgroup" id="itemgroup" class="form-control input-sm">
				<option value="">Please select...</option>
<?php
$getitemgroupinfo = $db_handle->runQuery("SELECT * FROM tbl_itemgroup");
$ItemGroupID=$getinfo[$x]["ItemGroupID"];
for ($ig = 0; $ig < count($getitemgroupinfo,0); $ig++) {
       ?>
 <option value="<?php echo $getitemgroupinfo[$ig]['ID'];?>" <?php if($ItemGroupID==$getitemgroupinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemgroupinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="itemcategory" class="col-sm-2 col-lg-2 control-label"  >Category</label>
	<div class="col-sm-10">
		<select name="itemcategory" id="itemcategory" class="form-control input-sm">
				<option value="">Please select...</option>
<?php
$getitemcategoryinfo = $db_handle->runQuery("SELECT * FROM tbl_itemcategory");
 $ItemCategoryID=$getinfo[$x]["ItemCategoryID"];
for ($ic = 0; $ic < count($getitemcategoryinfo ,0); $ic++) {
       ?>
 <option value="<?php echo $getitemcategoryinfo[$ic]['ID'];?>" <?php if($ItemCategoryID==$getitemcategoryinfo[$ic]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemcategoryinfo[$ic]['Name'];?></option>
	<?php } ?>
		</select> 
        
</div>
</div>

<div class="form-group form-group-sm ">
	<label for="unit" class="col-sm-2 col-lg-2 control-label"  >Unit</label>
	<div class="col-sm-10">
		<select name="unit" id="unit" class="form-control input-sm">
				<option value="">Please select...</option>
<?php
$getunitinfo = $db_handle->runQuery("SELECT * FROM tbl_unit");
 $unit=$getinfo[$x]["UnitID"];
for ($iu = 0; $iu < count($getunitinfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getunitinfo[$iu]['ID'];?>" <?php if($unit==$getunitinfo[$iu]['ID']) echo 'selected= "selected"'; ?>><?php echo $getunitinfo[$iu]['Unit'];?></option>
	<?php } ?>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="altunit" class="col-sm-2 col-lg-2 control-label"  >Alternative Unit</label>
	<div class="col-sm-10">
    
		<select name="altunit" id="altunit" class="form-control input-sm">
				<option value="" >Please select...</option>
<?php
//$getaltunitinfo = $db_handle->runQuery("SELECT * FROM tbl_unit");
$altunit=$getinfo[$x]["Unit02ID"];
for ($iau = 0; $iau < count($getunitinfo ,0); $iau++) {
       ?>
 <option value="<?php echo $getunitinfo[$iau]['ID'];?>" <?php if($altunit==$getunitinfo[$iau]['ID']) echo 'selected= "selected"'; ?>> <?php echo $getunitinfo[$iau]['Unit'];?> </option>
	<?php } ?>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm  "> 
  <label class="col-sm-2 col-lg-2 control-label" for="itemcost">Standard Cost:</label>
  <div class="col-sm-2 col-md-2">
  <input type="text" class="form-control input-sm" id="itemcost" placeholder="Enter itemcost" value="<?php echo $getinfo[$x]["ItemCost"]; ?>"> 
  </div> 
 </div>
 <div class="form-group form-group-sm  "> 
  <label class="col-sm-2 control-label" for="price"> Standard Price :</label>
  <div class="col-sm-2 col-md-2">
  <input type="text" class="form-control input-sm" id="price" placeholder="Enter price" value="<?php echo $getinfo[$x]["Price"]; ?>"> 
	</div>  
 </div>
 
 <div class="form-group form-group-sm ">
	<label for="costingmethod" class="col-sm-2 col-lg-2 control-label"  >Costing Method</label>
	<div class="col-sm-4">
		<select name="costingmethod" id="costingmethod" class="form-control input-sm">
				<option value="">Please select...</option>
<?php
$getcosthead = $db_handle->runQuery("SELECT * FROM tbl_valuationmethods where IsCosting=1");
$CostingMethodID=$getinfo[$x]["CostingMethodID"];
for ($ch = 0; $ch < count($getcosthead ,0); $ch++) {
       ?>
 <option value="<?php echo $getcosthead[$ch]['ID'];?>" <?php if($CostingMethodID==$getcosthead[$ch]['ID']) echo 'selected= "selected"'; ?>><?php echo $getcosthead[$ch]['ValuationMethods'];?></option>
	<?php } ?>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="pricingmethod" class="col-sm-2 col-lg-2 control-label"  >Pricing Method</label>
	<div class="col-sm-4">
		<select name="pricingmethod" id="pricingmethod" class="form-control input-sm">
				<option value="">Please select...</option>
<?php
$getpricinghead = $db_handle->runQuery("SELECT * FROM tbl_valuationmethods where IsPricing=1");
$PricingMethodID=$getinfo[$x]["PricingMethodID"];
for ($ph = 0; $ph < count($getpricinghead  ,0); $ph++) {
       ?>
 <option value="<?php echo $getpricinghead [$ph]['ID'];?>" <?php if($PricingMethodID==$getpricinghead[$ph]['ID']) echo 'selected= "selected"'; ?>><?php echo $getpricinghead [$ph]['ValuationMethods'];?></option>
	<?php } ?>
		</select> 
        
</div>
</div>
 
<div class="form-group form-group-sm ">
	<label for="IsFinishGoods" class="col-sm-2 col-lg-2 control-label"  >IsFinishGoods ?</label>
	<div class="col-sm-2">
		<select name="IsFinishGoods" id="IsFinishGoods" class="form-control input-sm">
            <option value="1" <?php if($getinfo[$x]["IsFinishGoods"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsFinishGoods"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsRawMaterial" class="col-sm-2 col-lg-2 control-label"  >IsRawMaterial ?</label>
	<div class="col-sm-2">
		<select name="IsRawMaterial" id="IsRawMaterial" class="form-control input-sm">
            <option value="1"  <?php if($getinfo[$x]["IsRawMaterial"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsRawMaterial"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsUnFinishGoods" class="col-sm-2 col-lg-2 control-label"  >IsUnFinishGoods ?</label>
	<div class="col-sm-2">
		<select name="IsUnFinishGoods" id="IsUnFinishGoods" class="form-control input-sm">
            <option value="1"  <?php if($getinfo[$x]["IsUnFinishGoods"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsUnFinishGoods"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsFinancialItem" class="col-sm-2 col-lg-2 control-label"  >IsFinancialItem ?</label>
	<div class="col-sm-2">
		<select name="IsFinancialItem" id="IsFinancialItem" class="form-control input-sm">
           <option value="1"  <?php if($getinfo[$x]["IsFinancialItem"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsFinancialItem"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsStockItem" class="col-sm-2 col-lg-2 control-label"  >IsStockItem ?</label>
	<div class="col-sm-2">
		<select name="IsStockItem" id="IsStockItem" class="form-control input-sm">
           <option value="1"  <?php if($getinfo[$x]["IsStockItem"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsStockItem"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsNonStockItem" class="col-sm-2 col-lg-2 control-label"  >IsNonStockItem ?</label>
	<div class="col-sm-2">
		<select name="IsNonStockItem" id="IsNonStockItem" class="form-control input-sm">
            <option value="1"  <?php if($getinfo[$x]["IsNonStockItem"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsNonStockItem"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>

<div class="form-group form-group-sm ">
	<label for="IsNegetiveSalesAllow" class="col-sm-2 col-lg-2 control-label"  >IsNegetiveSalesAllow ?</label>
	<div class="col-sm-2">
		<select name="IsNegetiveSalesAllow" id="IsNegetiveSalesAllow" class="form-control input-sm">
            <option value="1"  <?php if($getinfo[$x]["IsNegetiveSalesAllow"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsNegetiveSalesAllow"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsSalesAsNewManufacture" class="col-sm-2 col-lg-2 control-label"  >IsSalesAsNewManufacture ?</label>
	<div class="col-sm-2">
		<select name="IsSalesAsNewManufacture" id="IsSalesAsNewManufacture" class="form-control input-sm">
           <option value="1"  <?php if($getinfo[$x]["IsSalesAsNewManufacture"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsSalesAsNewManufacture"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsPurchaseAsConsumed" class="col-sm-2 col-lg-2 control-label"  >IsPurchaseAsConsumed ?</label>
	<div class="col-sm-2">
		<select name="IsPurchaseAsConsumed" id="IsPurchaseAsConsumed" class="form-control input-sm">
         <option value="1"  <?php if($getinfo[$x]["IsPurchaseAsConsumed"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsPurchaseAsConsumed"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
<div class="form-group form-group-sm ">
	<label for="IsRejectionAsScrap" class="col-sm-2 col-lg-2 control-label"  >IsRejectionAsScrap ?</label>
	<div class="col-sm-2">
		<select name="IsRejectionAsScrap" id="IsRejectionAsScrap" class="form-control input-sm">
         <option value="1"  <?php if($getinfo[$x]["IsRejectionAsScrap"]=="1") echo 'selected= "selected"'; ?>>YES</option>
            <option value="0"  <?php if($getinfo[$x]["IsRejectionAsScrap"]=="0") echo 'selected= "selected"'; ?>>NO</option>
		</select> 
        
</div>
</div>
    
      
     </form>
      <div style="text-align:right;"><a class="btn btn-black btn-block">Update</a></div> 
 
      </div>
    </div>
  </div>
<?php

} 
 
?>
</div>
</div>



<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
 
