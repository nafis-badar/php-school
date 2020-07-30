<?php
if (!isset($_SESSION)) {session_start();}
require_once("../includes/dbase.php");
$db_handle = new DBController();
?>
 
 
<link href="../models/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../models/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="../models/css/style.css" rel="stylesheet" type="text/css">
 
      <div class="panel-body" style="text-align:left;">
      <div class="" style="padding:0px 0px 0px 0px; ">
 
 </div>
      <div id="saveresult" style="border:2px; background-color:#FFB09E; text-align:center; border-color:#2B468F; border-radius:20px; height:auto">
       </div>
<!--form class="form-horizontal" name="myform" id ="myform"   style="padding:15px;"-->
<!--form class="form-horizontal" name="myform" id ="myform" method="post" role="form" action="modules/ledger.sql.php" style="padding:15px"-->
<form class="form-horizontal" name="myform" id ="myform" method="post" role="form" action="../models/modules/product.sql.php" style="padding:15px">
BACD
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
   <td colspan="6"><div class="displayhead"><?php echo $Name; ?> : UNIT Configuration</div></td>
   </tr>
 <tr>
 <td>Unit</td><td>Unit Ratio</td><td>Standard Cost</td><td>Standard Price</td><td>Type</td><td>Action</td>
 </tr>
<tr>
 <td>
<?php
//echo "SELECT * FROM tbl_unit where ID=$UnitID";
$getunitinfo = $db_handle->runQuery("SELECT * FROM tbl_unit where ID=$UnitID");
echo $getunitinfo[0]['Unit'];
?>
</td>
<td><?php echo $Unit01Value; ?></td>
<td><?php echo $ItemCost; ?></td>
<td><?php echo $Price; ?></td>
<td><?php echo '[Default]'; ?></td>
<td></td>
</tr>

<?php
//echo "SELECT * FROM tbl_itemunit where ItemID=$ID ";
$getinfo01 = $db_handle->runQuery("SELECT * FROM tbl_itemunit where ItemID=$ID ");/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($z = 0; $z < count($getinfo01,0); $z++)
{
	?>
<tr>
 <td><?php
$getunitinfo01 = $db_handle->runQuery("SELECT * FROM tbl_unit where ID=".$getinfo01[$z]['UnitID']."");
 echo $getunitinfo01[0]['Unit'];
?>
</td>
<td><?php echo $getinfo01[$z]['UnitRatio']; ?></td>
<td><?php echo $getinfo01[$z]['ItemCost']; ?></td>
<td><?php echo $getinfo01[$z]['Price']; ?></td>
<td><?php echo '[Secondary]'; ?></td>
<td><a href="#" onClick="getproduct01(<?php echo $ID; ?>,10);">Edit</a></td>
</tr>
<?php
}
?>
<tr>

 <td>
 <input type="hidden" id="ItemID" name="ItemID" value="<?php echo $ID; ?>">
<select name="UnitID" id="UnitID" class="form-control input-sm">
				<option value="">Please select...</option>
<?php
$getunitinfo = $db_handle->runQuery("SELECT * FROM tbl_unit where ID<>$UnitID");
 echo $getunitinfo[0]['Unit'];
 
for ($iu = 0; $iu < count($getunitinfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getunitinfo[$iu]['ID'];?>" ><?php echo $getunitinfo[$iu]['Unit'];?></option>
	<?php } ?>
		</select> 
</td>
<td><input type="text" class="form-control input-sm" name="UnitRatio" id="UnitRatio" value="0"> </td>
<td>
<input type="text" class="form-control input-sm" name="ItemCost" id="ItemCost" placeholder="Enter ItemCost" value="0"> 

</td>
<td>
<input type="text" class="form-control input-sm" name="Price" id="Price" placeholder="Enter price" value="0"> 
</td>
 <td>
 <input  type="submit" name="Operation" value="SET" class="btn btn-black btn-block" style="padding:5px;  width:50px;border-radius:0px; box-shadow:5px 5px rgba(110,110,110,0.69); "></td>
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

   <div>
   
   <?php
   include_once "../menu4.product.php";
   ?>
   
     </div>
      </div>




<!--script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script-->
<script>
function saveitem(val01,val02,val03) {
	//val01=row or GUI GENERATE ID WE CAN CALL VIEW_ID
	//val02=ITEM_ID
	//val03=what to save (1= id,name,alias,partno,_desc     
						//2=Item or Product Group and Category
						//3= UNIT, ALTERNATE UNIT, STANDARD COST, STANDARD PRICE, COSTING METHOD, PRICING METHOD
						//4= IsFinishGoods,IsRawMaterial, IsUnfinishGoods, IsFinancialItem, IsStockItem, Is Non Stock Item, IsNegetiveSalesAllow, IsSalesAsNewManufacture, IsAsConsumed, IsRejectionAsScrap
	//e.preventDefault();
 // console.log(42);
 var resultelementid='saveresult'+val01;
 	
  	 var formname='myform'+val01;
	//alert(val01);
	//alert(formname);
	var name=document.getElementById("name"+val01).value;
	//alert(name);
	var id=document.getElementById("id"+val01).value;
	//alert(id);
	
	
	var alias=document.getElementById("alias"+val01).value;
	
		var code=document.getElementById("code"+val01).value;
		var c = document.getElementById("group"+val01);
		var MID=c.options[c.selectedIndex].value;
		
		var d = document.getElementById("MasterGroupID"+val01);
		var MasterGroupID=d.options[d.selectedIndex].value;
		
		var e = document.getElementById("IsAffectGrossProfit"+val01);
		var IsAffectGrossProfit=e.options[e.selectedIndex].value;
		 
	 	var f = document.getElementById("IsBehaveAsSubLedger"+val01);
		 
	 	var IsBehaveAsSubLedger=f.options[f.selectedIndex].value;
		 
		/*/ var g = document.getElementById("DrCr"+val01);
		var DrCr=g.options[g.selectedIndex].value;*/
		var DrCr=1;
		
		 var h = document.getElementById("NetDebitCreditBalanceForReporting"+val01);
		var NetDebitCreditBalanceForReporting=h.options[h.selectedIndex].value;
		
		 var i = document.getElementById("UseForCalculation"+val01);
		var UseForCalculation=i.options[i.selectedIndex].value;
		
		 var j = document.getElementById("AllocationMethodID"+val01);
		var AllocationMethodID=j.options[j.selectedIndex].value;
		var IsMaster=0;
		var IsMasterGroup=0;
		var desc=document.getElementById("desc"+val01).value;
		
			//var _desc=document.getElementById(formname).elements["_desc"+val01].value;
		//	alert(name+id+alias+code+j);
	// alert(name+id+alias+code+j);
	 $("#"+resultelementid).empty();
	//   var myform = document.getElementById(formname);
	var fd ='';
	//alert(IsBehaveAsSubledger, IsAffectGrossProfit, DrCr, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, IsMaster, IsMasterGroup);
	if (val03==1){
	//ID, MID, MasterGroupID, Name, Alias, CODE,MID:MID,MasterGroupID:MasterGroupID, IsBehaveAsSubledger, IsAffectGrossProfit, DrCr, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, IsMaster, IsMasterGroup, CreatedBy, ModifiedBy, Createtime, ModifyTime
	//alert(desc);
	fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID,IsBehaveAsSubLedger:IsBehaveAsSubLedger, IsAffectGrossProfit:IsAffectGrossProfit, DrCr:DrCr, NetDebitCreditBalanceForReporting:NetDebitCreditBalanceForReporting, UseForCalculation:UseForCalculation, AllocationMethodID:AllocationMethodID, IsMaster:IsMaster, IsMasterGroup:IsMasterGroup,desc:desc};
	//fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID};
	//alert(resultelementid);
    var pg='modules/sql/sql.acledger.php';
	$.post(pg,fd,function(data){$("#"+resultelementid).html(data)});
	}
/*	$.ajax({
            type: 'POST',
            url: 'modules/sql.item.php',
            data: fd,
            success: function (dataofconfirm) {
				      alert(dataofconfirm);
            }
          });*/

 
}
</script> 