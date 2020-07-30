 <?php
if (!isset($_SESSION)) {session_start();}
 
//echo getcwd();
 
// echo getcwd();
include_once '../controllers/CTL.Accounts.php';

date_default_timezone_set('Asia/Kolkata');
$Handle = new Accounts();
$StudentID=$_REQUEST['ID'];
//echo $StudentID; 

 $sql="Select * from tbl_master where ID=1";
 $CompanyInfo=$Handle->runQuery($sql);
  $CompanyName=$CompanyInfo[0]['Name'];
   $CompanyPDID=$CompanyInfo[0]['PDID'];
   $CompanyAddress='20/1 west, Captepara Road, Authpur, North 24 Parganas';
 $sql="Select * from tbl_master where ID=$StudentID";
 $StudentInfo=$Handle->runQuery($sql);
  $StudentName=$StudentInfo[0]['Name'];
  $StudentPDID=$StudentInfo[0]['PDID'];
  
  $sql="Select * from tbl_pd where ID=$StudentPDID";
  $StudentPDInfo=$Handle->runQuery($sql);
  $AdmissionDate=$StudentPDInfo[0]['AdmissionDate'];
  
  $StudentAdmission=$StudentInfo[0]['CODE'];
  
 $sql="Select * from tbl_studentclass where StudentID=$StudentID and IsAdmission=1;";
 $StudentFeesInfo=$Handle->runQuery($sql);
 
 $AcademicYear=$StudentFeesInfo[0]['AcademicYear'];
 $ClassID=$StudentFeesInfo[0]['ClassID'];
  $SecID=$StudentFeesInfo[0]['SecID'];
   $IsAdmission=$StudentFeesInfo[0]['IsAdmission'];
    $Amount=$StudentFeesInfo[0]['Amount'];
	 $RollNo=$StudentFeesInfo[0]['RollNo'];
	 
	 $sql="Select * from tbl_master where ID=$ClassID";
 $ClassInfo=$Handle->runQuery($sql);
 	 $sql="Select * from tbl_master where ID=$SecID";
 $SecInfo=$Handle->runQuery($sql);
 $Class=$ClassInfo[0]['Name'];
 $Sec=$SecInfo[0]['Name'];
?>
<style>
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
.header, .header-space,
.footer, .footer-space {
  height: 100px;
}
.header {
  position: fixed;
  top: 0;
  height:50px;
}
.footer {
  position: fixed;
  bottom: 0;
}
</style>


  <page size="A5">
  
<div class="workspace" style="background-color:rgba(245,247,217,0.10); ">
<div class="displayhead" style="text-align:center;margin-top:50px; ">
 

</div>
 
<div class="panel-body" style="padding:3px!important;">
<table style="width:100%; border:1px solid rgba(0,0,0,1.00); font-size:12px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align:center;">
 <tr>
 	<td rowspan="6" style="width:100px;"><img src="images/logo.jpg" alt="" width="70"></td>
    <td style="font-size:20px; font-weight:bold;"><?php echo $CompanyName; ?></td><td  style="width:100px;"></td>
 </tr>
  <tr>
 	 <td><?php echo $CompanyAddress; ?></td><td></td>
  </tr>
  <tr>
 	 <td><div style="text-decoration:underline; font-weight:bold;"> Admmission Receipt</div></td><td></td>
  </tr>
   <tr style="text-align:left">
 	 <td  style="padding:10px;">Student Name: <?php echo $StudentName; ?></td><td></td>
  </tr>
  
   <tr style="text-align:left">
 	 <td><span style="padding:10px">Class: <?php echo $Class; ?></span> <span style="padding:10px">Sec:<?php echo $Sec; ?></span> <span style="padding:10px">RollNo: <?php echo $RollNo; ?></span></td><td></td>
  </tr>
  <tr>
 	<td></td><td></td><td></td>
  </tr>
   <tr style="border:1px solid rgba(0,0,0,1.00); text-align:left;">
 	<th colspan="2" style="padding:5px 20px;">Particulars</th><th style="text-align:right; padding-right:20px;">Amount</td>
  </tr>
   
  <tr>
 	<td colspan="3" style="border-bottom:2px solid rgba(0,0,0,1.00);"> </td>
  </tr>
  <tr style="vertical-align:top;">
 	<td colspan="2" style="padding:5px 20px; text-align:left;">Admission Fees</td> 
    <td style="text-align:right; padding-right:20px; height:120px;"><?php echo sprintf("%0.2f",$Amount); ?></td>
  </tr>
  <tr>
 	<td colspan="3" style="border-bottom:2px solid rgba(0,0,0,1.00);"> </td>
  </tr>
  <tr style="vertical-align:top; font-weight:bold; border-top:2px solid rgba(0,0,0,1.00);">
  	<td></td><td style="text-align:right;">Total:</td><td style="text-align:right; padding-right:20px;"><?php echo sprintf("%0.2f",$Amount); ?></td>
  </tr>
</table>
 
 </div>

 <div>
  
 	</div>
    <!--input name="startDate" id="startDate" class="date-picker" /-->
   
<script>

function CalculateBatchItem()
{
	var Quantity=document.getElementById("BatchQuantity").value;
	var Rate=document.getElementById("BatchRate").value;
	var Amount=Quantity*Rate;
	document.getElementById("BatchAmount").value=Amount;
}
function TakeBatchAction(e)
{		var abc=document.getElementById("BatchNo").value;
	if(abc.length>0)
	{
		document.getElementById("MfgDate").disabled=false;	
		document.getElementById("ExpDate").disabled=false;	
		document.getElementById("BatchQuantity").disabled=false;	
		document.getElementById("BatchRate").disabled=false;	
		document.getElementById("BatchAmount").disabled=false;	
	}
	else
	{
		document.getElementById("MfgDate").disabled=true;	
		document.getElementById("ExpDate").disabled=true;	
		document.getElementById("BatchQuantity").disabled=true;	
		document.getElementById("BatchRate").disabled=true;	
		document.getElementById("BatchAmount").disabled=true;	
	}
	if(e.which == 13) 
	{
		if(abc.length==0)
		{
		 	location.reload();
		}
	}
	else if(e.which == 27)
	{
		location.reload();
	}
			
}
 
// select2:opening

/*$('#AccountID').on('select2:select', function (e) {
	//alert();
	var AccountID= e.params.data.id;
	
	var VoucherTypeID=document.getElementById("VoucherTypeID").value;
	var pg="app/controllers/VoucherMaster.php";
	var Type="GetCalculationMethod";
		
		$.post(pg,{Type:Type,AccountID:AccountID, VoucherTypeID:VoucherTypeID},function(data){
			//alert(data);
			var CalculationMethodID=data;
			var ItemTotal=document.getElementById("AdditionalItemTotal").value;
			var CurrentTotal=document.getElementById("AdditionalCurrentTotal").value;
			if(CalculationMethodID==1)
			{	//Item Total
				document.getElementById("Amount").value=ItemTotal;
			}
			else if(CalculationMethodID==2)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
			else if(CalculationMethodID==3)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
			else if(CalculationMethodID==4)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
			else if(CalculationMethodID==5)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
			else if(CalculationMethodID==6)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
			else if(CalculationMethodID==7)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
			
			
			
			// document.getElementById("err").innerHTML=data;
		});
	});*/
 
/*$(window).bind('beforeunload', function(e) { 
   // return "Unloading this page may lose data. What do you want to do...";
    e.preventDefault();
});*/
function SaveNote(e)
{
	if(e.which==13)
	{
		e.preventDefault();
		var Note	=document.getElementById("Note").value;
		//alert(Note);
		var Type="SaveNote";
		var pg="app/controllers/VoucherMaster.php";
		var VoucherID=document.getElementById("VoucherID").value;
		if (VoucherID!=0 && InventoryAccountID!=0 && ActivityAccountID!=0)
		{
			 
		$.post(pg,{Type:Type,VoucherID:VoucherID, Note:Note},function(data){
			 // document.getElementById("err").innerHTML=data;
			//location.reload();
			setWhichEntry(1);
			});
		}
	}

}
function GetBatchDetails(BatchNo,ItemID)
{
//	var BatchNo = e.params.data.id;
	// alert(BatchNo);
	//var BatchNo = document.getElementById("BatchNo").value;
	if(BatchNo==0)
	{
		SetBatchPanel('','',0,0);
		return;
	}
	//alert(ItemID);
	var pg ="app/models/MOD.Ajax.php";
	var qtype="getItemBatchInfo";
//	url: pg,data: "acode="+AccountID+"&vtid="+VoucherTypeID+"&qtype="+qtype,
//	url: pg,data: "acode="+ID+"&qtype="+qtype,
//				data: "acode="+AccountID+"&vtid="+VoucherTypeID+"&qtype="+qtype,
//alert("acode="+AccountID+"&vtid="+VoucherTypeID+"&qtype="+qtype);
	$.ajax(
			{
				$type: "POST",
				url: pg,
				data: "acode="+BatchNo+"&itid="+ItemID+"&qtype="+qtype,
				dataType: "json",
				success: function(msg,string,jqXHR)
				{
					 //alert(msg.CNT);
					if (msg.CNT>0)
					{
						//console.error(msg.CNT);
						//$("#Amount").val(0);
						var MfgDate=msg.MfgDate;
						var ExpDate=msg.ExpDate;
						var Amount=msg.Amount;
						var Quantity=msg.Quantity;
						SetBatchPanel(MfgDate,ExpDate,Amount,Quantity);
						/*$("#AcGroupID").val(msg.AcGroupID);
						$("#AccountID").val(msg.AccountID);
						calculate_item();*/
					}
				},
				error: function (msg,string,jqXHR){
					 
					   document.getElementById("AccountPanel").innerHTML="Error during processing";
				 
				}
			});
	
}
function SetBatchPanel(MfgDate,ExpDate,Amount,Quantity)
{
	document.getElementById("MfgDate").value=MfgDate;
	document.getElementById("ExpDate").value=ExpDate;		
	document.getElementById("BatchQuantity").value=Quantity;
	document.getElementById("BatchRate").disabled=false;				
	document.getElementById("BatchQuantity").disabled=false;		
	 document.getElementById("BatchAmount").disabled=false
	
	CalculateBatchItem();	
}
function Popup_BatchEntry(ItemID,CartID,CartDetailsID,ItemBatchCheckID,ItemPriceTypeID)		
{
	 
	openModal();
	document.getElementsByClassName("w3-modal-content")[0].style.minHeight="50%";
	document.getElementsByClassName("w3-modal-content")[0].style.setProperty("width", "600", "important");
	document.getElementsByClassName("w3-modal-content")[0].style.setProperty("margin-top", "150", "important");
	Popup_fillup(ItemID,CartID,CartDetailsID,ItemBatchCheckID,ItemPriceTypeID);
}
function Popup_fillup(ItemID,CartID,CartDetailsID,ItemBatchCheckID,ItemPriceTypeID)
{
var pg='app/controllers/VoucherMaster.php';
	var Type='ItemBatchEntry';
	//alert(CartDetailsID);
	/*var ItemID=document.getElementById("ItemID").value;
	var CartID=document.getElementById("CartID").value;
	var CartDetailsID=document.getElementById("CartDetailsID").value;*/
	var pm={Type:Type,ItemID:ItemID,CartID:CartID,CartDetailsID:CartDetailsID,ItemBatchCheckID:ItemBatchCheckID,ItemPriceTypeID:ItemPriceTypeID};
	$.post(pg,pm,function(data)
	{
		//alert(Type);
		document.getElementById("popup_content").innerHTML=data;
		document.getElementById("BatchNo").focus();
		
	});
}
function ItemBatchSave(e)
{
	//alert(e.which);
	if(e.which == 13) 
	{
		var Amount=document.getElementById("BatchAmount").value;
		//alert(Amount);
		if (Amount==0)
		{
			location.reload();
			return;
		}
		
		
		//alert(CartDetailsID);
		var BatchID=document.getElementById("BatchID").value;
		var CartID=document.getElementById("CartID").value;
		 var ItemID=document.getElementById("BatchItemID").value;
		var CartDetailsID=document.getElementById("BatchCartDetailsID").value;
		var InventoryNature=document.getElementById("InventoryNature").value;
		var IsEffectInventoryValue=document.getElementById("IsEffectInventoryValue").value;
		var ItemBatchCheckID=parseInt(document.getElementById('ItemBatchCheckID').value);
	var ItemPriceTypeID=parseInt(document.getElementById('ItemPriceTypeID').value);
		var BatchNo=document.getElementById("BatchNo").value;
		//var BatchDate=document.getElementById("BatchDate").value;
		var ExpDate=document.getElementById("ExpDate").value;
		var MfgDate=document.getElementById("MfgDate").value;
		var ItemCost=document.getElementById("BatchItemCost").value;
		var Price=document.getElementById("BatchPrice").value;
		var Quantity=document.getElementById("BatchQuantity").value;
		var Rate=document.getElementById("BatchRate").value
		var UnitID=document.getElementById("BatchUnitID").value;
		var pg='app/controllers/VoucherMaster.php';
		var Type='ItemBatchSave';
		//alert(Type);
		var pm={Type:Type,ItemID:ItemID,CartID:CartID,CartDetailsID:CartDetailsID,InventoryNature:InventoryNature,IsEffectInventoryValue:IsEffectInventoryValue,BatchID:BatchID, BatchNo:BatchNo,ExpDate:ExpDate,MfgDate:MfgDate,ItemCost:ItemCost,Price:Price,Quantity:Quantity,Rate:Rate,UnitID:UnitID,Amount:Amount};
		$.post(pg,pm,function(data)
		{
			//console.log(data);
			 // alert(data);
			 try{
			document.getElementById("CartDetailsID").value=data;	 
				 }
			 catch
			{
			
			}
			
			//alert(ItemID+" "+CartID+" "+data+" "+ItemBatchCheckID+" "+ItemPriceTypeID);
			Popup_fillup(ItemID,CartID,data,ItemBatchCheckID,ItemPriceTypeID);
			//document.getElementById("popup_content").innerHTML=data;
			document.getElementById("BatchNo").focus();
		});
	}
}
 
function getItemInfo(ID,CartID=0,CartDetailsID=0)
{
	// alert(ID);
	var ItemBatchCheckID=parseInt(document.getElementById('ItemBatchCheckID').value);
	var ItemPriceTypeID=parseInt(document.getElementById('ItemPriceTypeID').value);
	if(ID==0)
	{
		$("#UnitID").val(0);
		$("#DisplayQuantity").val("0");
		$("#DisplayItemCost").val("0.00");
		$("#U").val("");
		$("#ItemCost").val("0.00");
		
	 calculate_item()
		//alert("I AM DONE");
	}
	else
	{	
	 //alert(ID);
	var ItemID=ID;
		var IsMaintainBatch=0;
		var pg="app/controllers/VoucherMaster.php";
		var Type="IsItemMaintainBatch";
		$.post(pg,{Type:Type,ItemID:ItemID},function(data){
		  //console.log(data);
		 // alert(data);
		 	IsMaintainBatch=data;
			if(ItemBatchCheckID!=0 && IsMaintainBatch==1)
			{
				//alert(ItemBatchCheckID);
				//alert("BATCH MAINTAIN POPUP REQUIRED...");
				
				Popup_BatchEntry(ItemID,CartID,CartDetailsID,ItemBatchCheckID,ItemPriceTypeID);
			}
			else
			{
				var pg ="app/models/MOD.Ajax.php";
				var qtype="getItemInfo";
				$.ajax(
				{
					$type: "POST",
					url: pg,data: "acode="+ID+"&qtype="+qtype,
					dataType: "json",
					success: function(msg,string,jqXHR)
					{
						//alert(msg.Name);
						if (msg.CNT>0)
						{
							$("#UnitID").val(msg.UnitID);
							$("#DisplayQuantity").val("1 "+msg.Unit);
							$("#DisplayItemCost").val(msg.ItemCost+"/"+msg.Unit);
							$("#U").val(msg.Unit);
							//alert(msg.ItemCost);
							$("#ItemCost").val(msg.ItemCost);
							calculate_item();
						}
					},
					error: function (msg,string,jqXHR){
						document.getElementById("err").innerHTML=msg+string+jqXHR;
						//$("#PrimaryRate").val(0);
						//	$("#PrimaryUnitID").val(0);
						//$("#SecondaryRate").val(0);
						//$("#SecondaryUnitID").val(0);
						//calculate_item();
						//document.getElementById('UnitID').innerHTML=msg+" - "+string+" - "+jqXHR;
						//app_info("CustomerCode: "+ acode + " rejected...");
						//alert();
					}
				});
				
			}
		});
	}
}
function CalculateAccountRate(Percentage,CurrentTotal,TaxableAmount)
{
	
	var AccountTypeID=$("#AccountTypeID").val();
	var CalculationMethodID= $("#CalculationMethodID").val();
	var IsTaxable= $("#IsTaxable").val();
	//alert(TaxableAmount);alert(Percentage);alert(CurrentTotal);
	if(CalculationMethodID==1)
	{	//Item Total
		document.getElementById("Amount").value=ItemTotal;
	}
	else if(CalculationMethodID==2)
	{//CurrentTotal
		document.getElementById("Amount").value=CurrentTotal;
	}
	else if(CalculationMethodID==3)
	{//CurrentTotal
		document.getElementById("rate").type="text";
		document.getElementById("rate").readOnly=true;
		var Amount=(TaxableAmount*Percentage)/100;
		document.getElementById("Amount").value=Amount.toFixed(2);
		document.getElementById("Amount").readOnly=true;
		
	}
	else if(CalculationMethodID==4)
	{//CurrentTotal
		var Amount=(TaxableAmount*Percentage)/100;
		document.getElementById("Amount").value=Amount.toFixed(2);
	}
	else if(CalculationMethodID==5)
	{//CurrentTotal
		document.getElementById("Amount").value=CurrentTotal;
		document.getElementById("rate").value=100;
		document.getElementById("rate").type="hidden";
	}
	else if(CalculationMethodID==6)
	{//CurrentTotal
		var Amount=(CurrentTotal*Percentage)/100;
		document.getElementById("Amount").value=Amount.toFixed(2);
	}
	else if(CalculationMethodID==7)
	{//CurrentTotal
		document.getElementById("Amount").value=CurrentTotal;
	}
}

function SetAccountPanel(AccountTypeID,CalculationMethodID,AccountTypeID,IsTaxable,DrCr,Percentage)
{
	
			var ItemTotal=document.getElementById("AdditionalItemTotal").value;
			var CurrentTotal=document.getElementById("AdditionalCurrentTotal").value;
			var TaxableAmount=document.getElementById("TaxableAmount").value;
			//var IsTaxable=document.getElementById("IsTaxable").value;
			document.getElementById("CalculationMethodID").value=CalculationMethodID;
			document.getElementById("rate").value=Percentage;
			document.getElementById("rate").readOnly=false;
			document.getElementById("DrCr").value=DrCr;
			document.getElementById("Amount").type="text";
			document.getElementById("AccountTypeID").value=AccountTypeID;
			$('#DrCr').select2().trigger('change');
			//alert(DrCr);
			document.getElementById("Amount").readOnly=false;
			if(CalculationMethodID==1)
			{	//Item Total
				document.getElementById("Amount").value=ItemTotal;
			}
			else if(CalculationMethodID==2)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
			else if(CalculationMethodID==3)
			{//CurrentTotal
				
				
				document.getElementById("rate").type="text";
				document.getElementById("rate").readOnly=true;
				var Amount=(TaxableAmount*Percentage)/100;
				document.getElementById("Amount").value=Amount.toFixed(2);
				document.getElementById("Amount").readOnly=true;
				
			}
			else if(CalculationMethodID==4)
			{//CurrentTotal
				document.getElementById("Amount").value=0;
				document.getElementById("Amount").readOnly=true;
				document.getElementById("rate").value=Percentage;
				document.getElementById("rate").type="text";
			}
			else if(CalculationMethodID==5)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
				document.getElementById("rate").type="hidden";
			}
			else if(CalculationMethodID==6)
			{//CurrentTotal
				document.getElementById("rate").type="text";
				document.getElementById("Amount").value=0;
				document.getElementById("Amount").type="text";
				document.getElementById("Amount").readOnly=true;
			}
			else if(CalculationMethodID==7)
			{//CurrentTotal
				document.getElementById("Amount").value=CurrentTotal;
			}
}
 
function setWhichEntry(WhichEntry)
{
	 
	
		var pg="app/controllers/VoucherMaster.php";
		var Type="WhichEntry";
		var VoucherID=document.getElementById("VoucherID").value;
		var InventoryAccountID=document.getElementById("InventoryAccountID").value;
		var ActivityAccountID=document.getElementById("ActivityAccountID").value;
		var AccountsNature=-1;
		 	
		//alert(crAmount);
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		if (VoucherID!=0 && InventoryAccountID!=0 && ActivityAccountID!=0)
		{
			 // alert(WhichEntry);
		$.post(pg,{Type:Type,WhichEntry:WhichEntry,VoucherID:VoucherID, ActivityAccountID:ActivityAccountID, InventoryAccountID:InventoryAccountID, AccountsNature:AccountsNature},function(data){
			// document.getElementById("err").innerHTML=data;
			location.reload();
			});
		}
 
}
function setWhichEntryNoReload(WhichEntry)
{
	 
	
		var pg="app/controllers/VoucherMaster.php";
		var Type="WhichEntry";
		var VoucherID=document.getElementById("VoucherID").value;
		var InventoryAccountID=document.getElementById("InventoryAccountID").value;
		var ActivityAccountID=document.getElementById("ActivityAccountID").value;
		var AccountsNature=-1;
		 	
		//alert(crAmount);
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		if (VoucherID!=0 && InventoryAccountID!=0 && ActivityAccountID!=0)
		{
			 // alert(WhichEntry);
		$.post(pg,{Type:Type,WhichEntry:WhichEntry,VoucherID:VoucherID, ActivityAccountID:ActivityAccountID, InventoryAccountID:InventoryAccountID, AccountsNature:AccountsNature},function(data){
			// document.getElementById("err").innerHTML=data;
			//location.reload();
			});
		}
 
}
function EnableItemEditMODE(ItemID,CartID,CartDetailsID)	
{
	
	var ItemBatchCheckID=parseInt(document.getElementById('ItemBatchCheckID').value);
	var ItemPriceTypeID=parseInt(document.getElementById('ItemPriceTypeID').value);
	
	
	if(ItemBatchCheckID>0)
	{
		// alert(ItemBatchCheckID);
		getItemInfo(ItemID,CartID,CartDetailsID);
		//return;
	}
	else
	{
		var pg="app/controllers/VoucherMaster.php";
		var Type="EnableItemEditMODE";
		$.post(pg,{Type:Type, CartDetailsID:CartDetailsID},
				function(data){
					location.reload();
					document.getElementById("ItemID").focus();
		});
	}
}
function RemoveItemEntry(CartDetailsID)	
{
	var pg="app/controllers/VoucherMaster.php";
		var Type="RemoveItemEntry";
		 
		$.post(pg,{Type:Type, CartDetailsID:CartDetailsID},
		function(data){
			location.reload();
			});
	}
function enableAccountsEditMODE(VoucherDetailsID)
{
	var pg="app/controllers/VoucherMaster.php";
		var Type="EnableAccountsEditMODE";
		 
		$.post(pg,{Type:Type, VoucherDetailsID:VoucherDetailsID},
		function(data){
			location.reload();
			});
}
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    //if (charCode > 31 && (charCode < 48 || charCode > 57))
	if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
        return false;
    return true;
}
function ShowDisplayItemCost()
{document.getElementById("DisplayItemCost").type="text";
	document.getElementById("ItemCost").type="hidden";
 }
function HideDisplayItemCost()
{document.getElementById("ItemCost").type="text";
	document.getElementById("DisplayItemCost").type="hidden";
$("#ItemCost").focus();
$("#ItemCost").select();
 	}
function ChangeDisplayItemCost(val0)
{ document.getElementById("DisplayItemCost").value=document.getElementById("ItemCost").value+"/"+document.getElementById("U").value;
	calculate_item();
}
function ShowDisplayQuantity()
{document.getElementById("DisplayQuantity").type="text";
	document.getElementById("BillingQuantity").type="hidden";
 }
function HideDisplayQuantity()
{
	document.getElementById("BillingQuantity").type="text";
	document.getElementById("DisplayQuantity").type="hidden";
$("#BillingQuantity").focus();
$("#BillingQuantity").select();
 	}
function ChangeDisplayQuantity(val0)
{ document.getElementById("DisplayQuantity").value=document.getElementById("BillingQuantity").value+" "+document.getElementById("U").value;
	calculate_item();
}
function AddToCartDetails(val0,event)
{
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
        //alert ("The Unicode character code is: " + chCode);
		if(chCode == 13){
		//alert ("The Unicode character code is: " + chCode);
 		//var val0;
		 AddToCartDetailsbyclick(val0);
		 $("#ItemID").focus();
		}
}
function SaveMainAccountEntry()
{
	var pg="app/controllers/VoucherMaster.php";
		var Type="UpdateMainAccountEntry";
		var VoucherID=document.getElementById("VoucherID").value;
		
		var InventoryAccountID=document.getElementById("InventoryAccountID").value;
		var ActivityAccountID=document.getElementById("ActivityAccountID").value;
		var AccountsNature=document.getElementById("AccountsNature").value;;
		 	//alert();
		//alert(crAmount);
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		if (VoucherID!=0 && InventoryAccountID!=0 && ActivityAccountID!=0)
		{
			// alert(Type);
		$.post(pg,{Type:Type,VoucherID:VoucherID, ActivityAccountID:ActivityAccountID, InventoryAccountID:InventoryAccountID, AccountsNature:AccountsNature},function(data){
			//document.getElementById("err").innerHTML=data;
			redirectBypagewithIDValue('<?php echo $page;?>',<?php echo $VoucherTypeID;?>,<?php echo $VoucherID?>);
			//location.reload();
			});
		}
}
function AddToCartDetailsbyclick(val0)
{
	
		
		 
 		//var val0;
		ID=val0;
		var EntryIndex=val0+1;
		//var DrCr=$("#DebitCredit").val();
		var CartID=$("#CartID").val();
		var ItemID=$("#ItemID").val();
		//	alert(AccountID);
		var BillingQuantity= $("#BillingQuantity").val();
		var ActualQuantity= $("#ActualQuantity").val();
		var PrimaryUnitID= $("#PrimaryUnitID").val();
		var SecondaryUnitID= $("#SecondaryUnitID").val();
		var ItemCost= $("#ItemCost").val();
		var Price= $("#Price").val();
		var PrimaryRate= $("#ItemCost").val();
		var SecondaryRate= $("#ItemCost").val();
		var DiscountPercentage= $("#DiscountPercentage").val();
		var PrimaryDiscountRate= $("#PrimaryDiscountRate").val();
		var SecondaryDiscountRate= $("#SecondaryDiscountRate").val();
		var IsEditable=0;
		var IsDeleted=0;
		//crAmount=perseFloat(crAmount);
		var pg="app/controllers/SaveItem.php";
		// alert ("The Unicode character code is: " + pg);
		
		var Amount= $("#Amount").val();
		if(ItemID==0 && Amount==0)
		{
			setWhichEntry(3);
			}
			else
			{
		$.post(pg,{ID:ID, EntryIndex:EntryIndex, CartID:CartID, ItemID:ItemID,ItemCost:ItemCost,Price:Price, BillingQuantity:BillingQuantity, ActualQuantity:ActualQuantity, PrimaryUnitID:PrimaryUnitID, SecondaryUnitID:SecondaryUnitID, PrimaryRate:PrimaryRate, SecondaryRate:SecondaryRate, DiscountPercentage:DiscountPercentage, PrimaryDiscountRate:PrimaryDiscountRate, SecondaryDiscountRate:SecondaryDiscountRate, Amount:Amount, IsEditable:IsEditable, IsDeleted:IsDeleted},
		function(data){
			//newentrypanelonclick();
			//$("#DebitCredit"+(val0+1)).focus();
			 // document.getElementById("err").innerHTML=data;
			//alert(data);
			//redirectBypage('purchase');
			SaveMainAccountEntry();
			// $("#err").html(data);
			// redirectBypagewithIDValue('po<?php echo $page;?>',<?php echo $VoucherTypeID;?>,<?php echo $VoucherID?>);
			  
			});
			}
	}
function additemtopurchasecart(val0,event){
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
        //alert ("The Unicode character code is: " + chCode);
		if(chCode == 13){
		//alert ("The Unicode character code is: " + chCode);
 		//var val0;
		var ID=val0;
		//var DrCr=$("#DebitCredit").val();
		
		var ItemID=$("#ItemID").val();
		//	alert(AccountID);
		var BillingQuantity= $("#BillingQuantity").val();
		var ActualQuantity= $("#ActualQuantity").val();
		var PrimaryUnitID= $("#UnitID").val();
		var SecondaryUnitID= $("#UnitID").val();
		var PrimaryRate= $("#ItemCost").val();
		var SecondaryRate= $("#Price").val();
		var DiscountPercentage= $("#DiscountPercentage").val();
		var PrimaryDiscountRate= $("#PrimaryDiscountRate").val();
		var SecondaryDiscountRate= $("#SecondaryDiscountRate").val();
		var IsEditable=0;
		var IsDeleted=0;
		//crAmount=perseFloat(crAmount);
		
		var Amount= $("#Amount").val();
		//alert(Amount);
		//crAmount=perseFloat(crAmount);
		var pg="modules/sess.purchase_item.add.php";
		//alert(crAmount);
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		$.post(pg,{ID:ID, ItemID:ItemID, BillingQuantity:BillingQuantity, ActualQuantity:ActualQuantity, PrimaryUnitID:PrimaryUnitID, SecondaryUnitID:SecondaryUnitID, PrimaryRate:PrimaryRate, SecondaryRate:SecondaryRate, DiscountPercentage:DiscountPercentage, PrimaryDiscountRate:PrimaryDiscountRate, SecondaryDiscountRate:SecondaryDiscountRate, Amount:Amount, IsEditable:IsEditable, IsDeleted:IsDeleted},
		function(data){
			//newentrypanelonclick();
			//$("#DebitCredit"+(val0+1)).focus();
			 
			//alert(data);
			redirectBypage('purchase');
			 $("#res").html(data);
			});
	}}
function calculate_item()
 {
	// alert();
	 var ActualQuantity=$("#ActualQuantity").val();
	 //alert(ActualQuantity);
	 var BillingQuantity=$("#BillingQuantity").val();
	 //alert(ActualQuantity);
	 var UnitID=$("#UnitID").val();
	// var SecondaryUnitID=$("#SecondaryUnitID").val();
	 var ItemCost=$("#ItemCost").val();
	 var Price=$("#Price").val();
	 var DiscountPercentage=parseFloat($("#DiscountPercentage").val());
	 var PrimaryDiscountRate=parseFloat($("#PrimaryDiscountRate").val());
	 var SecondaryDiscountRate=parseFloat($("#SecondaryDiscountRate").val());
	 //var Amount=$("#Amount").val();
	SecondaryDiscountRate=parseFloat(ItemCost)-(parseFloat(ItemCost)*parseFloat(DiscountPercentage)/100);
	 var Amount=parseFloat(SecondaryDiscountRate)*parseFloat(BillingQuantity);
	  //document.getElementById("res").innerHTML=Amount;
	 //alert(Amount);
	 //document.getElementById("Amount").value=Amount;
	 
	 $("#Amount").val(Amount);
}


function getDrCr(VoucherTypeID)
{
	$("#DrAmount").val(0);
	$("#CrAmount").val=0;
	var drAmount=document.getElementById("DrAmount").value;
	var crAmount=document.getElementById("CrAmount").value;
	var getvalue=document.getElementById("DebitCredit").value;
	document.getElementById("DrAmount").disabled=false;
	document.getElementById("CrAmount").disabled=false;
	document.getElementById("DrAmount").style.visibility="visible";
	document.getElementById("CrAmount").style.visibility="hidden";
	if (getvalue==1)
	{
		document.getElementById("DrAmount").disabled=false;
		document.getElementById("DrAmount").style.visibility="visible";
		document.getElementById("CrAmount").disabled=true;
		document.getElementById("CrAmount").style.visibility="hidden";
	}
	else if (getvalue==-1)
	{
			document.getElementById("DrAmount").disabled=true;
			document.getElementById("CrAmount").disabled=false;	
			document.getElementById("DrAmount").style.visibility="hidden";
			document.getElementById("CrAmount").style.visibility="visible";
	}
	DrCrValue=getvalue;
	loadDrCrAccount(VoucherTypeID,DrCrValue);
}
function loadDrCrAccount(VoucherTypeID,DrCr)
	{
		var pg="load_Accounts.php";
		var tp="AC_HEAD";
		$.post(pg,{tp:tp,DrCr:DrCr,VoucherTypeID:VoucherTypeID},function(data){		$("#AccountID").html(data);		});
	}
function	getCalcMethod_Backup(VoucherTypeID,AccountID,Balance )
	{
		var pg="load_Accounts.php";
		var tp="CALC_METHOD";
		var DrCr=$("#DebitCredit").val();;
		$("#DrAmount").val(0);
		$("#CrAmount").val(0);
	$.post(pg,{tp:tp,DrCr:DrCr,AccountID:AccountID,VoucherTypeID:VoucherTypeID},function(data){
		$("#CalcMethodID").val(data);
		// Display Panel right after get the CalcMethodID
		DisplayCalcMethod(data,DrCr,AccountID,VoucherTypeID,Balance);
		//ShowCartAccounts(CartTypeID);
	});
	}
function getCalcMethod(VoucherTypeID,AccountID,Balance)
{
	 var pg ="modules/ajax.sql.php";
 var qtype="CALC_METHOD";
		var DrCr=$("#DebitCredit").val();
	var Balance=$("#balance").val();
		$("#DrAmount").val(0);
		$("#CrAmount").val(0);
 			$.ajax({
						$type: "POST",
						url: pg,data: "acode="+AccountID+"&qtype="+qtype+"&DrCr="+DrCr+"&VoucherTypeID="+VoucherTypeID+"&AccountID="+AccountID,
						dataType: "json",
						success: function(msg,string,jqXHR)
							{
								if (msg.CNT>0)
								{
									$("#CalcMethodID").val(msg.CalcMethodID);
									$("#CalcPercentage").val(msg.Percentage);	
									DisplayCalcMethod(msg.CalcMethodID,DrCr,AccountID,VoucherTypeID,Balance);
								}
								else
								{
									//BalString='NO BALANCE';
								}
							}
							,
						error: function (msg,string,jqXHR) {
							console.error(this.props.url,  err.toString())
							//alert(msg+string+jqXHR);
						}
					});
		
		} 
	
function DisplayCalcMethod(CalcMethodID,DrCr,AccountID,VoucherTypeID,Balance)
	{
		document.getElementById("DrAmount").readOnly = false;
		document.getElementById("CrAmount").readOnly = false;
		//alert(CalcMethodID);
		var pg="display.CalcMethod.php";
		if (CalcMethodID==1)
		{
			var item_total=$("#SubTotal").val();
			if (DrCr==1)
			{
				$("#DrAmount").val(item_total);
				document.getElementById("DrAmount").readOnly = "readonly";
			}
			else(DrCr==-1)
			{
				$("#CrAmount").val(item_total);
				document.getElementById("CrAmount").readOnly = true;
			}
		}
		else if (CalcMethodID==2)
		{
			//alert(Balance);
			var current_total=Balance;
			if (DrCr==1)
			{
				$("#DrAmount").val(current_total);
			}
			else(DrCr==-1)
			{
				$("#CrAmount").val(current_total);
			}
		}
		else if (CalcMethodID==3)
		{
			//alert(Balance);
			var current_total=Balance;
			if (DrCr==1)
			{
				$("#DrAmount").val(current_total);
			}
			else(DrCr==-1)
			{
				$("#CrAmount").val(current_total);
			}
		}
		else
		{
			$.post(pg,{CalcMethodID:CalcMethodID,DrCr:DrCr,AccountID:AccountID,VoucherTypeID:VoucherTypeID},function(data){$("#Panel_CalcMethod").html(data);});
		}
		//ShowCartAccounts(CartTypeID);
	
		
	}
function ShowCart(CartTypeID)
	{
		//alert(CartTypeID);
		var pg="display.cart.php";
	$.post(pg,{CartTypeID:CartTypeID,ShowType:'CART'},function(data){
		//alert(data);
		$("#CartPanel").html(data);
		ShowCartAccounts(CartTypeID);
		ShowAccountPosting(0,<?php echo $VoucherTypeID; ?>,0,0);
	});
	}
function ShowCartAccounts(CartTypeID)
	{
		
		var pg="display.cart.php";
		//alert(pg);
	$.post(pg,{CartTypeID:CartTypeID,ShowType:'CART_ACCOUNTS'},function(data){
		 //alert(<?php echo $VoucherTypeID; ?>);
		$("#SUBTOTAL_AccountPanel").html(data);
		$("#SubTotal_D").html('SubTotal:   '+data);
		$("#SubTotal").val(data);
		UpdateAccountPosting(CartTypeID,data,<?php echo $VoucherTypeID; ?>)
		
	});
	}
function ShowAccountsTotal(CartTypeID)
	{
		//journal_poCartTypeID);
		var pg="display.cart.php";
	$.post(pg,{CartTypeID:CartTypeID,ShowType:'CART_ACCOUNTS'},function(data){$("#GRANDTOTAL_AccountPanel").html(data);});
	}
function UpdateAccountPosting(CartTypeID,SubTotal,VoucherTypeID)	
	{
			var pg="modules/sess.journal.po.update.php";
		//alert(SubTotal);
	$.post(pg,{CartTypeID:CartTypeID,SubTotal:SubTotal,VoucherTypeID:VoucherTypeID},
		   function(data){alert(data);});
		
	}
function getPDDetails(LedgerID)
	{
		
		//var pg="display.cart.php";
		//$.post(pg,{CartTypeID:CartTypeID,ShowType:'CART_ACCOUNTS'},function(data){$("#GRANDTOTAL_AccountPanel").html(data);});
	 
				
				var pg ="modules/ajax.sql.php";
				
				// journal_poacode);
				var qtype="getPDDetailsBy_LedgerID";
				var AccountID=LedgerID;
		//journal_poLedgerID);
				//journal_poItemID);
				//var mastertypeid=32;
				//alert(qtype);
				//$.post(pg,{qtype:qtype,acode:acode,mastertypeid:mastertypeid},function(data){alert(data);});
				$.ajax({
						$type: "POST",
						url: pg,data: "acode="+AccountID+"&qtype="+qtype,
						dataType: "json",
						success: function(msg,string,jqXHR)
							{
								//alert(msg+" - "+string+" - "+jqXHR);
								//ani();
								//alert(msg.CNT);
								//alert(msg.SQL);
								//document.getElementById("B").innerHTML=msg.CNT;
								//alert(UnitID);
								if (msg.CNT>0)
								{
									//ID, PDID, Name, BillingAddressID, BillingAddress, ShippingAddressID, ShippingAddress, ContactNo, PAN, VAT, BankName, BankBranch, AccountNo, BANKCODE, BankAccountType
									//alert(AccountID);
									$("#PDID").val(msg.PDID);
									$("#BillingAddressID").val(msg.BillingAddressID);
									$("#ShippingAddressID").val(msg.ShippingAddressID);
									$("#BillingAddress").html( msg.BillingAddress);
									$("#ShippingAddress").html(  msg.ShippingAddress);
									$("#PAN").html('PAN: '+ msg.PAN);
									$("#VAT").html('VAT: '+ msg.VAT);
									$("#ContactNo").html('MOB: '+ msg.ContactNo);
									$("#Bank").html('<div><span style="font-size:14px;">'+ msg.BankName+'</span>, '+msg.BankBranch +' </div><div> Account No. :'+msg.AccountNo+' ('+ msg.BankAccountType+') </div><div>'+msg.BANKCODE+'</div>');
									getAccountBalance(AccountID);
									 
									$("#PriceLevelID").val(msg.PriceLevelID);
									 
									}
							}
							,
						error: function (msg,string,jqXHR) {
							alert(msg+string);
							//$("#PrimaryRate").val(0);
							//	$("#PrimaryUnitID").val(0);
								//$("#SecondaryRate").val(0);
								//$("#SecondaryUnitID").val(0);
								//calculate_item();
							//document.getElementById('UnitID').innerHTML=msg+" - "+string+" - "+jqXHR;
							//app_info("CustomerCode: "+ acode + " rejected...");
							//alert();
						}
							
					});
		
	} 

function getAccountBalance(LedgerID)
	{
	var pg ="modules/ajax.sql.php";
			var qtype="getBalanceBy_LedgerID";
				var AccountID=LedgerID;
				$.ajax({
						$type: "POST",
						url: pg,data: "acode="+AccountID+"&qtype="+qtype,
						dataType: "json",
						success: function(msg,string,jqXHR)
							{
								var Bal=0;
								var BalString='';
								if (msg.CNT>0)
								{
							
									Bal=msg.BALANCE;
									if (Bal>0)
										{
										BalString=Bal+' DR ';
										}
										else{
										BalString=Bal+' CR ';
										}		 
								}
								else
								{
									BalString='NO BALANCE';
								}
								$("#Balance").html(BalString);
							}
							,
						error: function (msg,string,jqXHR) {
							alert(msg+print(string));

						}
					});
		} 
	
function addtojournal(val0,event)
{
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
	// alert ("The Unicode character code is: " + chCode);
	if(chCode == 13)
	{
		var id=val0;
		var DrCr=$("#DebitCredit").val();
		var AccountID=$("#AccountID").val();
		var drAmount= $("#DrAmount").val();
		var crAmount= $("#CrAmount").val();
		var pg="modules/sess.journal.add.php";
		var param={id:id,DrCr:DrCr,AccountID:AccountID,drAmount:drAmount,crAmount:crAmount};
		$.post(pg,param,function(data){redirectBypage('journal');});
	}
}
 function addtopurchase(val0,SLNO,event)
 {
	 var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
	// alert ("The Unicode character code is: " + chCode);
	if(chCode == 13)
	{
		//var AccountTypeID=3;
		var VoucherID=$("#VoucherID").val();
	 	var ID=val0;
		var DrCr=$("#DrCr").val();
		var AccountID=$("#AccountID").val();
		var AccountTypeID=$("#AccountTypeID").val();
		var AccountsNature=$("#AccountsNature").val();
		var Amount= $("#Amount").val();
	var CalculationMethodID= $("#CalculationMethodID").val();
	var Percentage=$("#rate").val();
//alert(Percentage);
	var SubTotal= $("#ItemTotal").val();
	var CurrentTotal= $("#AdditionalCurrentTotal").val();
	var TaxableAmount=$("#TaxableAmount").val();
	var IsTaxable=$("#IsTaxable").val();
		var pg="app/controllers/VoucherMaster.php";
		var Type ="AdditionalEntry";
		var param={VoucherID:VoucherID,SLNO:SLNO,VoucherDetailsID:ID, Type:Type,AccountTypeID:AccountTypeID,AccountsNature:AccountsNature, DrCr:DrCr, AccountID:AccountID, Amount:Amount,CalculationMethodID:CalculationMethodID,TaxableAmount:TaxableAmount, IsTaxable:IsTaxable,  Percentage:Percentage, SubTotal:SubTotal, CurrentTotal:CurrentTotal};
		$.post(pg,param,function(data){
			
			// alert(data);
			//document.getElementById("err").innerHTML=data;
			location.reload();
			//alert(data);
			//UpdateAccountPosting(0,data,VoucherTypeID);
			//ShowAccountPosting(0,VoucherTypeID);
		});
	}
	 }
function addtoPOjournal(val0,VoucherTypeID)
{
	alert("ADDTOPOJOURNAL:");
		var id=val0;
		var DrCr=$("#DrCr").val();
		var AccountID=$("#AccountID").val();
		
		var drAmount= $("#Amount").val();
		var crAmount= $("#CrAmount").val();
	var CalcMethodID= $("#CalcMethodID").val();
	var CalcPercentage= $("#CalcPercentage").val();

	var SubTotal= $("#SubTotal").val();
	var CurrentTotal= $("#CurrentTotal").val();
		var pg="modules/sess.journal.po.add.php";
		var param={id:id, DrCr:DrCr, AccountID:AccountID, drAmount:drAmount, crAmount:crAmount, CalcMethodID:CalcMethodID, CalcPercentage:CalcPercentage, SubTotal:SubTotal, CurrentTotal:CurrentTotal};
		$.post(pg,param,function(data){
			UpdateAccountPosting(0,data,VoucherTypeID);
			//ShowAccountPosting(0,VoucherTypeID);
		});
 
}
function addtoPOjournal_Event(val0,event,VoucherTypeID)
{
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
	 
	if(chCode == 13)
	{
	//	alert("ABC");
		addtoPOjournal(val0,VoucherTypeID);
		/*var id=val0;
		var DrCr=$("#DebitCredit").val();
		var AccountID=$("#AccountID").val();
		var drAmount= $("#DrAmount").val();
		var crAmount= $("#CrAmount").val();
		var CalcMethodID= $("#CalcMethodID").val();
	var CalcPercentage= $("#CalcPercentage").val();
	var SubTotal= $("#SubTotal").val();
		
	var CurrentTotal= $("#CurrentTotal").val();
		var pg="modules/sess.journal.po.add.php";
		var param={id:id, DrCr:DrCr, AccountID:AccountID, drAmount:drAmount, crAmount:crAmount, CalcMethodID:CalcMethodID, CalcPercentage:CalcPercentage, SubTotal:SubTotal, CurrentTotal:CurrentTotal};
		$.post(pg,param,function(data){
			ShowAccountPosting(0,VoucherTypeID);
			 
		});*/
					
	}
	else
		{
		return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));
		}
}
	
function ShowAccountPosting(val01,VoucherTypeID,SubTotal=0,Quantity=0)
	{
		var pg="po.account.php";
		
		SubTotal=$("#SubTotal").val();
		//alert(SubTotal);
		var param={id:0,Mode:val01,VoucherTypeID:VoucherTypeID,SubTotal:SubTotal,Quatity:Quantity};
		$.post(pg,param,function(data){
		//	alert(data);
			$("#AccountPanel").html(data);
		});
	}
	function add_itemtocart(EntryType,CartTypeID,ProductID,UnitID,ItemCost,Price,Quantity)
{
	 alert("add_itemtocart");
	var ItemID=ProductID;
	if(ItemID==0)
	{
		//WhichEntry('main_accounts');
		return;
	}
	//	alert(AccountID);
	
	var DOM_ActualQuantity="#ActualQuantity"+ProductID;
	var DOM_AMOUNT="#Amount"+ProductID;
	Quantity=$(DOM_ActualQuantity).val();
	if (Quantity==0)
		{
			alert("You need to remove this item from queue");
			return;
		}
	var BillingQuantity= Quantity;
	var ActualQuantity= Quantity;
	var PrimaryUnitID= UnitID;
	var SecondaryUnitID= UnitID;
	var PrimaryRate= ItemCost;
	var SecondaryRate=  Price ;
	var DiscountPercentage= 0;
	var PrimaryDiscountRate=0;
	var SecondaryDiscountRate= 0;
	var IsEditable=0;
	var IsDeleted=0;
	//crAmount=perseFloat(crAmount);

	var Amount= Price;
	//alert(Amount);
	//crAmount=perseFloat(crAmount);
	var pg="modules/sess.cartdetails.add.php";
	//alert(crAmount);
	//alert("uid:  " + uid + "   pwd:  " + pwd);
	$.post(pg,{EntryType:EntryType,CartTypeID:CartTypeID, ItemID:ItemID, BillingQuantity:BillingQuantity, ActualQuantity:ActualQuantity, PrimaryUnitID:PrimaryUnitID, SecondaryUnitID:SecondaryUnitID, PrimaryRate:PrimaryRate, SecondaryRate:SecondaryRate, DiscountPercentage:DiscountPercentage, PrimaryDiscountRate:PrimaryDiscountRate, SecondaryDiscountRate:SecondaryDiscountRate, Amount:Amount, IsEditable:IsEditable, IsDeleted:IsDeleted},

	function(data)
	{
		//alert(data);
		ShowCart(CartTypeID); 
		//$(DOM_AMOUNT).html('Rs. '+Number(PrimaryRate*Quantity).toFixed(2));
		//Call_CartByItem(ItemID,CartTypeID);
	 
		// Call_CartHead();
		
		
		//newentrypanelonclick();
		//$("#DebitCredit"+(val0+1)).focus();

		//alert(data);
		//redirectBypagewithIDValue('po<?php echo $page;?>',Mode,VoucherID);
		 
		 //$("#res").html(data);
	});
}
function savevoucher()
{
	
	
	var pg="app/controllers/VoucherMaster.php";
		var Type="CloseVoucherSession";
		var VoucherID=document.getElementById("VoucherID").value;
		var VoucherTypeID=document.getElementById("VoucherTypeID").value;
		var InventoryAccountID=document.getElementById("InventoryAccountID").value;
		var ActivityAccountID=document.getElementById("ActivityAccountID").value;
		var AccountsNature=-1;
		// 	alert();
		//alert(crAmount);
		//alert("uid:  " + uid + "   pwd:  " + pwd);
		if (VoucherID!=0 && InventoryAccountID!=0 && ActivityAccountID!=0)
		{
			//alert(WhichEntry);
		$.post(pg,{Type:Type,VoucherID:VoucherID,VoucherTypeID:VoucherTypeID, ActivityAccountID:ActivityAccountID, InventoryAccountID:InventoryAccountID, AccountsNature:AccountsNature},function(data){
			//document.getElementById("err").innerHTML=data;
			redirectBypagewithIDValue('index<?php echo $page;?>',<?php echo $VoucherTypeID;?>,<?php echo $VoucherID;?>);
			//location.reload();
			});
		}
}
function PaymentReceipt(VoucherID)
{
	alert(VoucherID);	
}
	function printMoneyReceipt(str,str1)
{
//	var ID=document.getElementById("ReportMasterID").value;
	  var win = window.open( "app/views/print/print.moneyreceipt.php?BID="+str , "_blank");
   win.focus();
}
</script>
</div>
<div class="footer">...</div>
</page>
