<?php
if (!isset($_SESSION)) {session_start();}
require_once("../includes/dbase.php");
$db_handle = new DBController();
?>
      <div class="panel-body" style="text-align:left;">
      <div class="" style="padding:0px 0px 0px 0px; ">
 
 </div>
      <div id="saveresult" style="border:2px; background-color:#FFB09E; text-align:center; border-color:#2B468F; border-radius:20px; height:auto">
       </div>
<!--form class="form-horizontal" name="myform" id ="myform"   style="padding:15px;"-->
<!--form class="form-horizontal" name="myform" id ="myform" method="post" role="form" action="modules/ledger.sql.php" style="padding:15px"-->
<form class="form-horizontal" name="myform" id ="myform" method="post" role="form" action="../models/modules/product.sql.php" style="padding:15px">
<?php
$x=0;
$ID=0;
$ID=$_REQUEST['ID'];
$Name='';
$Alias='';
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
$ModifyTime=0;
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
$IsAsConsumed=0;
$IsRejectionAsScrap=0;
$Unit02ID=0;
$Unit01Value=0;
$Unit02Value=0;
$Quantity=0;
$MaintainBatch=0;
$MaintainSerial=0;
$ImagePath='';
$Image='';
$VoucherTypeID=0;
$minsalequantity=0;
$totalquantity=0;

if($ID!=0)
{
$getinfo = $db_handle->runQuery("SELECT * FROM tbl_item where ID=$ID ");/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		$Name=$getinfo[$x]["Name"];
		$Alias=$getinfo[$x]["Alias"];
		$PrintName=$getinfo[$x]["PrintName"];
		$SKU=$getinfo[$x]["SKU"];;
		$UPC=$getinfo[$x]["UPC"];;
		$ModelNo=$getinfo[$x]["ModelNo"];;
		$PartNo=$getinfo[$x]["PartNo"];
		$Description=$getinfo[$x]["Description"];
		$ItemCategoryID=$getinfo[$x]["ItemCategoryID"];
		$ItemGroupID=$getinfo[$x]["ItemGroupID"];
		$UnitID=$getinfo[$x]["UnitID"];
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
		$IsAsConsumed=$getinfo[$x]["IsAsConsumed"];
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


	}
}
       ?>

  <!--img class="blur-bgimage" src='images/header.jpg'-->
  <span>
  <style>
  .mytable td
  {padding:5px;
  border:1px solid rgba(168,144,58,1.00);
  }
  </style>
<table class="mytable" width="100%" border="2" style="width:100%; color:rgba(0,0,0,1.00);">
    <tr>
   <td colspan="7"><div class="displayhead"><?php echo $Name; ?> : Accounting(Sales//Inventory) Configuration</div></td>
   </tr>
 <tr>
 <td>Voucher</td> <td>Ledger Name</td><td>Percentage</td><td>Rounding Method</td><td>Rounding Limit</td><td>Type</td><td>Action</td>
 </tr>
 

<?php
//echo "SELECT * FROM tbl_itemunit where ItemID=$ID ";
$getinfo01 = $db_handle->runQuery("SELECT * FROM tbl_itemaccounts where ItemID=$ID ");/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($z = 0; $z < count($getinfo01,0); $z++)
{
	?>
<tr>
 <td><?php
$getvouchertypeinfo01 = $db_handle->runQuery("SELECT * FROM tbl_vouchertype where ID=".$getinfo01[$z]['VoucherTypeID']."");

$getaccountsinfo01 = $db_handle->runQuery("SELECT * FROM tbl_master where ID=".$getinfo01[$z]['AccountID']."");
 //echo $getaccountsinfo01[0]['Name'];
 $getRoundingMethodinfo01 = $db_handle->runQuery("SELECT * FROM tbl_roundingmethod where ID=".$getinfo01[$z]['RoundingMethodID']."");
// echo $getRoundingMethodinfo01[0]['Name'];
?>
</td>
<td><?php echo $getvouchertypeinfo01[$z]['Name']; ?></td>
<td><?php echo $getaccountsinfo01[$z]['Name']; ?></td>
<td><?php echo $getinfo01[$z]['Percentage']; ?></td>
<td><?php echo $getRoundingMethodinfo01[$z]['Name']; ?></td>
<td><?php echo $getinfo01[$z]['RoundingLimit']; ?></td>
<td><?php echo '[Secondary]'; ?></td>
<td><a href="#" onClick="getitemaccounts01(<?php echo $ID; ?>,10);">Edit</a></td>
</tr>
<?php
}
?>
<tr>
<td>
<input type="hidden" id="ItemID" name="ItemID" value="<?php echo $ID; ?>">
 
<select name="VoucherTypeID" id="VoucherTypeID" class="form-control input-sm">
			
<?php
$getvouchertypeinfo = $db_handle->runQuery("SELECT * FROM tbl_vouchertype where ID in (9,16)");
// echo $getaccountinfo [0]['Unit'];
 
for ($iu = 0; $iu < count($getvouchertypeinfo  ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getvouchertypeinfo [$iu]['ID'];?>" ><?php echo $getvouchertypeinfo [$iu]['Name'];?></option>
	<?php } ?>
		</select> 

</td>
 <td>
 
<select name="AccountID" id="AccountID" class="form-control input-sm">
			
<?php
$getaccountinfo = $db_handle->runQuery("SELECT * FROM tbl_master where MID in (125,126)");
// echo $getaccountinfo [0]['Unit'];
 
for ($iu = 0; $iu < count($getaccountinfo  ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getaccountinfo[$iu]['ID'];?>" ><?php echo $getaccountinfo[$iu]['Name'];?></option>
	<?php } ?>
		</select> 
</td>
<td><input type="text" class="form-control input-sm" name="Percentage" id="Percentage" value="0"> </td>
<td>
<select name="RoundingMethodID" id="RoundingMethodID" class="form-control input-sm">
				<option value="0">_ Not Applicable</option>
<?php
$getroundinginfo = $db_handle->runQuery("SELECT * FROM tbl_roundingmethod ");
// echo $getaccountinfo [0]['Unit'];
 
for ($iu = 0; $iu < count($getroundinginfo  ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getroundinginfo [$iu]['ID'];?>" ><?php echo $getroundinginfo [$iu]['Name'];?></option>
	<?php } ?>
		</select> 

</td>
<td>
<input type="text" class="form-control input-sm" name="RoundingLimit" id="RoundingLimit" placeholder="Enter Rounding Limit" value="0"> 
</td>
 <td>
 <input  type="submit" name="OperationItemAccountsADD" value="SET" class="btn btn-black btn-block" style="padding:5px;  width:50px;border-radius:0px; box-shadow:5px 5px rgba(110,110,110,0.69); "></td>
<td></td>
</tr>
</table>
   
    </span>    
    
<div>...</div>
<div class="form-group  ">
<div class="col-md-2"></div>
<div class="col-sm-6 col-md-7"  >
<table style="width:100%; border:0px solid rgba(0,0,0,1.00);">
<tr>
<td style="float:left; "><input type="button" name="back" value="Back" onClick="window.history.back();" class="btn   btn-black btn-block" style="padding:20px; width:250px; border-radius:0px;box-shadow:5px 5px rgba(110,110,110,0.69);  "></td>

<td style="float:right;"><input disabled type="submit" name="Operation" value="Update" class="btn btn-black btn-block" style="padding:20px;  width:250px;border-radius:0px; box-shadow:5px 5px rgba(110,110,110,0.69); "></td>
</tr>
</table>
<div class="col-md-3"></div>

 
</div>
</div>    
      
     </form>

   <div class="well">
   
   <?php
   include_once "../menu4.product.php";
   ?>
   
     </div>
      </div>
 