 <?php
if (!isset($_SESSION)) {session_start();}
require_once("../models/MOD.VoucherType.php");
date_default_timezone_set('Asia/Kolkata');
//include_once '../models/MOD.VoucherMaster.php';

 $Handle= new MODVoucherType();
// $Handle= new VoucherMaster();
$VoucherTypeID= 0;
 $FromDate=date("Y-m-d"); 
$ToDate=date("Y-m-d"); 
if (isset($_REQUEST['FromDate']))
{	
	$FromDate = $_REQUEST['FromDate'];
}
if (isset($_REQUEST['ToDate']))
{	
	$ToDate = $_REQUEST['ToDate'];
}
 
//$VoucherType=$Handle->getVoucherName($VoucherTypeID);
$LastVoucherDate='';
$LastVoucherNo='';
//$SessionID=$Handle->GetVoucherSession($VoucherTypeID);
//$SessionVoucherID=$Handle->getVoucherIDFromSession($SessionID);
 ?>  
<div class="panel-body" id="accordion1">
<div style="font-size:18px; font-weight:bold; text-align:center;"><?php echo 'Stock Register'?></div>
<style>
.table>tbody>tr>td
{
padding:2px;	
border-top: 1px solid rgba(99,165,255,0.16);
	}
</style>
<table id="example" class="table " style="font-size:12px;" cellspacing="0" width="100%">
<?php
 	$sql="select i.ID ItemID,i.Name,u.Name Unit from tbl_item i
left outer join tbl_unit u on u.ID=i.UnitID
order by i.Name";
			
			//  echo $sql;
			?>
            <tr style="font-size:12px; font-weight:bold;  
        border-bottom:2px solid rgba(0,0,0,1.00);border-top:2px solid rgba(0,0,0,1.00);">
            <td>Item Details</td><td>Unit</td>
            <td style="text-align:center;">Op.Qty</td><td style="text-align:right;">Avg.Price</td><td style="text-align:right;">Op.Amt</td>
            <td style="text-align:center;">Purc.Qty</td><td style="text-align:right;">Avg.Price</td><td style="text-align:right;">Purc.Amt</td>
            <td style="text-align:center;">Sale Qty</td><td style="text-align:right;">Avg.Price</td><td style="text-align:right;">Sale Amt</td>
            <td style="text-align:center;">Cl.Qty</td><td style="text-align:right;">Avg.Price</td><td style="text-align:right;">Cl.Amt</td>
            </tr>
            <?php
	$ItemInfo=$Handle->runQuery($sql);
	 $TOpeningQuantity=0;
	 $TOpeningRate=0;
	 $TOpeningAmount=0;
	 $TPurchaseQuantity=0;
	 $TPurchaseRate=0;
	 $TPurchaseAmount=0;
	 $TSalesQuantity=0;
	 $TSalesRate=0;
	 $TSalesAmount=0;
	 
	 $TClosingQuantity=0;
	 
	 $TClosingAmount=0;
	 $TClosingRate=0;
	for($a=0;$a<count($ItemInfo,0); $a++)
	{
		$ItemID=$ItemInfo[$a]['ItemID'];
		
		$Item=$ItemInfo[$a]['Name'];
		$Unit=$ItemInfo[$a]['Unit'];
		
	//echo $Item;
		$sql="select cd.ItemID,i.Name,sum(cd.BillingQuantity) Quantity, avg(cd.PrimaryRate) Rate,sum(cd.Amount) Amount from tbl_vouchermaster vm
left outer join tbl_cartdetails cd on cd.CartID=vm.CartID
left outer join tbl_item i on i.ID=cd.ItemID
where vm.VoucherTypeID =24 and (vm.VoucherDate between '$FromDate' and '$ToDate')
  and cd.isDeleted=0 and cd.IsCancelled=0 and ItemID='$ItemID' group by cd.ItemID";
//echo   $sql;
		$CartInfo24= $Handle->runQuery($sql);
		$sql="select cd.ItemID,i.Name,sum(cd.BillingQuantity) Quantity, avg(cd.PrimaryRate) Rate,sum(cd.Amount) Amount from tbl_vouchermaster vm
left outer join tbl_cartdetails cd on cd.CartID=vm.CartID
left outer join tbl_item i on i.ID=cd.ItemID
where vm.VoucherTypeID =9 and vm.VoucherDate <'$FromDate'
  and cd.isDeleted=0 and cd.IsCancelled=0 and ItemID='$ItemID' group by cd.ItemID";
//echo   $sql;
		$CartInfoP9= $Handle->runQuery($sql);
		
				$sql="select cd.ItemID,i.Name,sum(cd.BillingQuantity) Quantity, avg(cd.PrimaryRate) Rate,sum(cd.Amount) Amount from tbl_vouchermaster vm
left outer join tbl_cartdetails cd on cd.CartID=vm.CartID
left outer join tbl_item i on i.ID=cd.ItemID
where vm.VoucherTypeID =16 and vm.VoucherDate <'$FromDate'
  and cd.isDeleted=0 and cd.IsCancelled=0 and ItemID='$ItemID' group by cd.ItemID";
//echo   $sql;
		$CartInfoP16= $Handle->runQuery($sql);
		
		$sql="select cd.ItemID,i.Name,sum(cd.BillingQuantity) Quantity, avg(cd.PrimaryRate) Rate,sum(cd.Amount) Amount from tbl_vouchermaster vm
left outer join tbl_cartdetails cd on cd.CartID=vm.CartID
left outer join tbl_item i on i.ID=cd.ItemID
where vm.VoucherTypeID =9 and (vm.VoucherDate between '$FromDate' and '$ToDate')
  and cd.isDeleted=0 and cd.IsCancelled=0 and ItemID='$ItemID' group by cd.ItemID";
//echo   $sql;
		$CartInfo9= $Handle->runQuery($sql);
		$sql="select cd.ItemID,i.Name,sum(cd.BillingQuantity) Quantity, avg(cd.PrimaryRate) Rate,sum(cd.Amount) Amount from tbl_vouchermaster vm
left outer join tbl_cartdetails cd on cd.CartID=vm.CartID
left outer join tbl_item i on i.ID=cd.ItemID
where vm.VoucherTypeID =16 and (vm.VoucherDate between '$FromDate' and '$ToDate')
  and cd.isDeleted=0 and cd.IsCancelled=0 and ItemID='$ItemID' group by cd.ItemID";
 //echo   $sql;
		$CartInfo16= $Handle->runQuery($sql);
	 $OpeningQuantity=$CartInfo24[0]['Quantity']+$CartInfoP9[0]['Quantity']-$CartInfoP16[0]['Quantity'];
	 $OpeningAmount=$CartInfo24[0]['Amount']+$CartInfoP9[0]['Amount']-$CartInfoP16[0]['Amount'];
	 $OpeningRate=0;
	 if($OpeningQuantity!=0)
	 {
	 $OpeningRate=$OpeningAmount/$OpeningQuantity;
	 }
	 
	 $PurchaseQuantity=$CartInfo9[0]['Quantity'];
	 $PurchaseRate=$CartInfo9[0]['Rate'];
	 $PurchaseAmount=$CartInfo9[0]['Amount'];
	 
	 $SalesQuantity=$CartInfo16[0]['Quantity'];
	 $SalesRate=$CartInfo16[0]['Rate'];
	 $SalesAmount=$CartInfo16[0]['Amount'];
	 
	 $ClosingQuantity=$OpeningQuantity+$PurchaseQuantity-$SalesQuantity;
	 $ClosingAmount=$OpeningAmount+$PurchaseAmount-$SalesAmount;
	 $ClosingRate=0;
	 if($ClosingQuantity!=0)
	 {
	 $ClosingRate=$ClosingAmount/$ClosingQuantity;
	 }
	 
	 
	 ?>
     
		<tr>
        <td><?php echo $Item;?></td>
        <td><?php echo $Unit;?></td>
        <td style="text-align:center;"><?php echo $OpeningQuantity;?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$OpeningRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$OpeningAmount);?></td>
        <td style="text-align:center;"><?php echo $PurchaseQuantity;?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$PurchaseRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$PurchaseAmount);?></td>
        <td style="text-align:center;"><?php echo $SalesQuantity;?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$SalesRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$SalesAmount);?></td>
        <td style="text-align:center;"><?php echo $ClosingQuantity;?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$ClosingRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$ClosingAmount);?></td>
        </tr>
	 
		<?php
		$TOpeningQuantity+=$OpeningQuantity;
	 $TOpeningRate+=$OpeningRate;
	 $TOpeningAmount+=$OpeningAmount;
	 $TPurchaseQuantity+=$PurchaseQuantity;
	 $TPurchaseRate+=$PurchaseRate;
	 $TPurchaseAmount+=$PurchaseAmount;
	 $TSalesQuantity+=$SalesQuantity;
	 $TSalesRate+=$SalesRate;
	 $TSalesAmount+=$SalesAmount;
	 $TClosingQuantity=+$ClosingQuantity;
	 $TClosingAmount+=$ClosingAmount;
	 $TClosingRate+=$ClosingRate;
	}
 ?>
 <tr style="font-size:12px; font-weight:bold;  
        border-bottom:2px solid rgba(0,0,0,1.00);border-top:2px solid rgba(0,0,0,1.00);">
        <td colspan="2" style="text-align:right;">Grand Total:</td>
        <td style="text-align:center;"><?php echo $TOpeningQuantity;?></td>
        <td style="text-align:right;"><?php //echo sprintf("%0.2f",$OpeningRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$TOpeningAmount);?></td>
        <td style="text-align:center;"><?php echo $TPurchaseQuantity;?></td>
        <td style="text-align:right;"><?php //echo sprintf("%0.2f",$PurchaseRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$TPurchaseAmount);?></td>
        <td style="text-align:center;"><?php echo $TSalesQuantity;?></td>
        <td style="text-align:right;"><?php //echo sprintf("%0.2f",$SalesRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$TSalesAmount);?></td>
        <td style="text-align:center;"><?php echo $TClosingQuantity;?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$ClosingRate);?></td>
        <td style="text-align:right;"><?php echo sprintf("%0.2f",$TClosingAmount);?></td>
        </tr>
 </table>

          
    <?php
?>
<script>
function clearformat(val01){
var vl= val01;
document.getElementById(vl).style.fontSize="16px";
document.getElementById(vl).style.border="3px solid $f00";
function CloseTheTransaction(val01){
		var pg="transaction_close.php";
	var id=val01;
	$.post(pg,{id:id},function(data){$("#pm"+val01).html(data)});
	}
}
function paymentmode(val01){
	var pg="transaction_instrument.php";
	var id=val01;
	$.post(pg,{id:id},function(data){$("#pm"+val01).html(data)});
	
}
function paymentconfirm(val01){

	var pg="sql/transaction.sql_1.php";
	var qtype="ReceiptAgainstApplication";
	var domid='InstrumentTypeID'.concat(val01);
	//alert(domid);
	var InstrumentTypeID=document.getElementById(domid).value;
	var InstrumentNo=document.getElementById('instrumentno'.concat(val01)).value;
	 $.post(pg,{qtype:qtype,TransactionID:val01,InstrumentTypeID:InstrumentTypeID,InstrumentNo:InstrumentNo},function(data){
		 alert(data);
		 if (parseInt(data)==1)	 {$("#pm".concat(val01)).html('<a href="#" onClick="getviewtransaction('+val01+');">Acknowledge</a>');	 }
		 if (parseInt(data)==0)	 {$("#errPayment").html(data);}
			});
	}
function transactionReceipt(str)
{
window.open("modules/transactionreceipt.php?id="+str, "myWindow", "status = 1, height = 700, width = 1100, resizable = 0");
}
</script>
</div>