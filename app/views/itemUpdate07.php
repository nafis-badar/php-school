<?php
if (!isset($_SESSION)) {session_start();}
require_once("../includes/dbase.php");

$db_handle = new DBController();

include_once("productbom.cartreload.php");

?>
      <div class="panel-body" style="text-align:left;">
      <div class="" style="padding:0px 0px 0px 0px; ">
 
 </div>
      <div id="saveresult" style="border:2px; background-color:#FFB09E; text-align:center; border-color:#2B468F; border-radius:20px; height:auto">
       </div>
<!--form class="form-horizontal" name="myform" id ="myform"   style="padding:15px;"-->
<!--form class="form-horizontal" name="myform" id ="myform" method="post" role="form" action="modules/ledger.sql.php" style="padding:15px"-->
<form class="form-horizontal" name="myform" id ="myform" method="post" role="form" action="../models/modules/productbom.cart.php" style="padding:15px">
<?php
$x=0;
$MasterItemID=0;
//$ID=$_REQUEST['ID'];
$MasterItemID=$_REQUEST['ID'];
$MasterItemQuantity=1;
$MasterItemUnitID=0;
$MasterItemCost=0;
$Name='';
/*$Alias='';
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
$totalquantity=0;*/

if($MasterItemID!=0)
{
$getinfo = $db_handle->runQuery("SELECT * FROM tbl_item where ID=$MasterItemID ");/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$MasterItemID=$getinfo[$x]["ID"];
		$MasterItemQuantity=1;
		$MasterItemUnitID=$getinfo[$x]["UnitID"];
		$MasterItemCost=$getinfo[$x]["ItemCost"];
		//$ID=$getinfo[$x]["ID"];
		$Name=$getinfo[$x]["Name"];
		/*$Alias=$getinfo[$x]["Alias"];
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
		$totalquantity=$getinfo[$x]["totalquantity"];*/


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
   <td colspan="8"><div class="displayhead"><?php echo $Name; ?> : BOM</div></td>
   </tr>
       <tr>
   <td colspan="8"><div>BOM reffer as "Bill of Materials" can be use to produce "New Finish Product" for your inventory, it is also use as Packing & Re-packing of Material i.e. term as self made "Product" / "Package" often distribute with "Batch".</div></td>
   </tr>
 <tr>
 <td style="width:30%;">Item</td> 
 <td style="width:10%;"></td>
 <td style="width:10%;">Quantity</td>
 <td style="width:10%;">Unit</td>
 <td style="width:10%;">Item Cost/Unit</td>
  <td style="width:10%;">Total Cost</td> 
 <td style="width:10%;">Status</td>
 <td style="width:10%;">Action</td>
 </tr>
 <tr>
 <td colspan="8" style="padding:0px;">
 	<div id="EntryPad">
    	<table class="mytable" width="100%" style="width:100%; color:rgba(0,0,0,1.00); border:none !important;">
            <tr>
                 <td style="width:30%;">
                 
                 <input type="hidden" id="MasterItemID" name="MasterItemID" value="<?php echo $MasterItemID; ?>">
                 <input type="hidden" id="MasterItemQuantity" name="MasterItemQuantity" value="<?php echo $MasterItemQuantity; ?>">
                 <input type="hidden" id="MasterItemUnitID" name="MasterItemUnitID" value="<?php echo $MasterItemUnitID; ?>">
                 <input type="hidden" id="MasterItemCost" name="MasterItemCost" value="<?php echo $MasterItemCost; ?>">
                 
                 <input type="hidden" id="BOMID" name="BOMID" value="<?php echo $BOMID; ?>">
                 <input type="hidden" id="BOMDetailsID" name="BOMDetailsID" value="<?php echo $BOMDetailsID; ?>">
                 <select name="ItemID" id="ItemID" class="form-control input-sm">
<?php
$getmaterialinfo = $db_handle->runQuery("SELECT * FROM tbl_item where IsRawMaterial=1 or IsUnFinishGoods=1");
// echo $getaccountinfo [0]['Unit'];
 
for ($iu = 0; $iu < count($getmaterialinfo  ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getmaterialinfo [$iu]['ID'];?>" ><?php echo $getmaterialinfo [$iu]['Name'];?></option>
	<?php } ?>
		</select></td>
        <td style="width:10%;"></td>
         <td style="width:10%;"><input type="text" class="form-control input-sm" name="Quantity" id="Quantity" value="0"> </td>
         <td style="width:10%;">
<select name="UnitID" id="UnitID" class="form-control input-sm">
<?php
$getroundinginfo = $db_handle->runQuery("SELECT ID,Name,Alias FROM tbl_Unit ");
// echo $getaccountinfo [0]['Unit'];
for ($iu = 0; $iu < count($getroundinginfo  ,0); $iu++) {
       ?>
 <option value="<?php echo $getroundinginfo [$iu]['ID'];?>" ><?php echo $getroundinginfo [$iu]['Alias'];?></option>
	<?php } ?>
</select> 
</td>
<td style="width:10%;">
<input type="text" class="form-control input-sm" name="ItemCost" id="ItemCost" placeholder="Enter ItemCost" value="0"> 
</td>
<td style="width:10%;">
<input type="text" class="form-control input-sm" name="TotalCost" id="TotalCost" placeholder="TotalCost" value="0"> 
</td>
<td style="width:10%;">Not Saved</td>
 <td style="width:10%;">
 <input  type="button" name="OperationItemBOMADD" value="ADD" 
 onClick="addtocart_bom();"
 class="btn btn-black btn-block" style="padding:5px;  width:50px;border-radius:0px; box-shadow:5px 5px rgba(110,110,110,0.69); "></td>
            </tr>
        </table>
    </div>
    
 </td>
 </tr>

<?php
foreach ($_SESSION["cart_bom"] as $bomitem){
{
	$BOMID=$bomitem["ID"];
	foreach ($_SESSION["cart_bomDETAILS"] as $bomdetailsitem)
	{
		?>
	<td style="width:30%;"><?php
	$getiteminfo01 = $db_handle->runQuery("SELECT * FROM tbl_item where ID=".$bomdetailsitem['ItemID']."");
	echo $getiteminfo01[0]['Name'];
$getunitinfo01 = $db_handle->runQuery("SELECT * FROM tbl_unit where ID=".$bomdetailsitem['UnitID']."");
 //echo $getaccountsinfo01[0]['Name'];
// $getRoundingMethodinfo01 = $db_handle->runQuery("SELECT * FROM tbl_roundingmethod where ID=".$getinfo01[$z]['RoundingMethodID']."");
// echo $getRoundingMethodinfo01[0]['Name'];
?>
	</td>
    <td></td>
    </td>
    <td><?php echo $bomdetailsitem['Quantity']; ?></td>
    <td><?php echo $getunitinfo01[0]['Name']; ?></td>
    <td><?php echo $bomdetailsitem['ItemCost']; ?></td>
    <td><?php echo $bomdetailsitem['TotalCost']; ?></td>
     <td><?php echo '[Secondary]'; ?></td>
    <td><a href="#" onClick="getitemaccounts01(<?php echo $ID; ?>,10);" style="font-size:14px;">Edit</a></td>
    </tr>
    <?php	
	}
}
	?>
 
<?php
}
?>
<tr>
<td>

<?php
print_r( $_SESSION['cart_bomDETAILS']);
?>

 
</td>

 
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

<td style="float:right;"><input  type="submit" name="Operation" value="Save All Changes" class="btn btn-black btn-block" style="padding:20px;  width:250px;border-radius:0px; box-shadow:5px 5px rgba(110,110,110,0.69); " onclick="BOMTOCART();"></td>
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
 <script>
 function addtocart_bom(){
	var pg ="modules/cart.bom.class.php";
		var MasterItemID=$("#MasterItemID").val();
		var MasterQuantity=$("#MasterQuantity").val();
		var MasterUnitID=$("#MasterUnitID").val();
		var MasterItemCost=$("#MasterItemCost").val();
		
		var BOMID=$("#BOMID").val();
		var BOMDetailsID=$("#BOMDetailsID").val();
		var ItemID=$("#ItemID").val();
		var Quantity=$("#Quantity").val();
		var UnitID=$("#UnitID").val();
		var ItemCost=$("#ItemCost").val();
		var TotalCost=$("#TotalCost").val();
		
		var entryid=$("#entryid").val();
		var entryindex=$("#entryindex").val();
		if (MasterItemID==0 || MasterQuantity==0 || MasterUnitID==0 || MasterItemCost<=0 || ItemID==0 || Quantity==0 || UnitID==0 || ItemCost<=0  ){
			alert ("INPUT ERROR FOUND! \n PLEASE CHECK YOUR INPUT(S)");
			exit;
			}
		
		//alert(customerid);
			//	alert(itemid);
		$.post(pg,{MasterItemID:MasterItemID,MasterQuantity:MasterQuantity,MasterUnitID:MasterUnitID,MasterItemCost:MasterItemCost,ItemID:ItemID,Quantity:Quantity,UnitID:UnitID,ItemCost:ItemCost,TotalCost:TotalCost},function(data){
			clear_entry();
			showcart_transaction(0);});
		
		//
		
		document.getElementById("itemid").focus();
	}
 function BOMTOCART()
 {
	 	var pg ="modules/cart_to_bom.php";
 	var Type="insert";
	var ItemID=document.getElementById("ItemID").innerHTML;
	var BOMID=document.getElementById("BOMID").value;
	//alert(VoucherDate);
	//var ActiveDate=0;
	//var TargetDate=0;
	//var DocumentNo=document.getElementById("formno").value;
//alert(pg) ;
aniopen();
	$.post(pg,{ItemID:ItemID,BOMID:BOMID},function(data){
		getproduct01(<?php echo $ID; ?>,6);
		//$("#transactioncart").html(data);
		});
	aniclose();
	//	$.post(pg,{transactionid:transactionid},function(data){$("#transactioncart").val(data)});
//alert(data);
	 }
 </script>