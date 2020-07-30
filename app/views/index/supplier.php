 <?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Accounts.php");
$Handle = new Accounts();
?>
<div class="workspace">
<div class="displayhead">Supplier Index
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('supplier',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>

</div>
  <div class="panel-body" id="accordion1">
  
    <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>CODE</th><th>Name</th>	<th>Group</th>	<th>Under</th>	<th style="text-align:right;">...</th>
  </tr>
<?php
$getinfo = $Handle->getSupplierIndex();
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
<?php   
$MasterGroupID =$getinfo[$x]['MasterGroupID'];
$getMasterinfo = $Handle->getMasterinfo($MasterGroupID);
?>
  <tr>
  	<td><?php echo $getinfo[$x]["CODE"]; ?></td>
    <td><?php echo $getinfo[$x]["Name"]; ?></td>
    <td><?php echo $Handle->getMasterName($getinfo[$x]["MID"]); ?></td>
    <td><?php echo $Handle->getMasterName($getinfo[$x]["MasterGroupID"]); ?></td>
    <td style="text-align:right;"><span class="btn btn-primary" onClick="redirectBypagewithIDValue('supplier',1,<?php echo $getinfo[$x]["ID"]; ?>)">Open</span></td>
  </tr>

<?php

} 
 
?>
 </table>
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
						//4= IsFinishGoods,IsRawMaterial, IsUnfinishGoods, IsFinancialItem, IsStockItem, Is Non Stock Item, IsNegetiveSalesAllow, IsSalesAsNewManufacture, IsPurchaseAsConsumed, IsRejectionAsScrap
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
	if (val03==1)
	//ID, MID, MasterGroupID, Name, Alias, CODE,MID:MID,MasterGroupID:MasterGroupID, IsBehaveAsSubledger, IsAffectGrossProfit, DrCr, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, IsMaster, IsMasterGroup, CreatedBy, ModifiedBy, Createtime, ModifyTime
	//alert(desc);
	fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID,IsBehaveAsSubLedger:IsBehaveAsSubLedger, IsAffectGrossProfit:IsAffectGrossProfit, DrCr:DrCr, NetDebitCreditBalanceForReporting:NetDebitCreditBalanceForReporting, UseForCalculation:UseForCalculation, AllocationMethodID:AllocationMethodID, IsMaster:IsMaster, IsMasterGroup:IsMasterGroup,desc:desc};
	//fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID};
	//alert(resultelementid);
     var pg='modules/sql/sql.acledger.php';
	$.post(pg,fd,function(data){$("#"+resultelementid).html(data)});
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

