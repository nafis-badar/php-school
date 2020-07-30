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
if (isset($_REQUEST['VoucherTypeID']))
{	
	$VoucherTypeID= $_REQUEST['VoucherTypeID'];
}
 
$VoucherType=$Handle->getVoucherName($VoucherTypeID);
$LastVoucherDate='';
$LastVoucherNo='';
//$SessionID=$Handle->GetVoucherSession($VoucherTypeID);
//$SessionVoucherID=$Handle->getVoucherIDFromSession($SessionID);
 ?>  
<div class="panel-body" id="accordion1">
<div><?php echo $VoucherType.' Register'?></div>
<style>
.table>tbody>tr>td
{
padding:2px;	
border-top: 1px solid rgba(99,165,255,0.16);
	}
</style>
<table id="example" class="table " style="font-size:12px;" cellspacing="0" width="100%">
<?php
 	$sql="Select AccountID from tbl_vouchermaster 
			where VoucherTypeID='$VoucherTypeID' and 
			VoucherDate between '$FromDate' and '$ToDate' 
			Group By AccountID";
			// echo $sql;
	$AccountIDInfo=$Handle->runQuery($sql);
	for($a=0;$a<count($AccountIDInfo,0); $a++)
	{
		$AccountID=$AccountIDInfo[$a]['AccountID'];
		//$VoucherNo=$AccountIDInfo[$a]['VoucherNo'];
		
		$sql="Select Name from tbl_master where ID='$AccountID'";
		$AccountNameInfo= $Handle->runQuery($sql);
		$AccountName=$AccountNameInfo[0]['Name'];
		
		?>
        <tr>
        <td colspan="8" style="font-size:16px; text-align:center; "> Account : <?php echo $AccountName;?></td>
        </tr>
        <tr style="font-size:12px; text-align:center; font-weight:bold; 
        border-bottom:2px solid rgba(0,0,0,1.00);border-top:2px solid rgba(0,0,0,1.00);">
        	<td>Date</td><td>Vch No.</td> <td>Item Details</td><td style="text-align:center;">Qty.</td>
            <td style="text-align:center;">Unit</td>
            <td style="text-align:right;">Price</td>
            <td style="text-align:right;">Amount</td>
        </tr>
        <?php
		$TotalQuantity=0;
		$TotalAmount=0;
		$sql="Select VoucherDate,VoucherNo,CartID from tbl_vouchermaster 
				where VoucherTypeID='$VoucherTypeID' and AccountID='$AccountID' 
				order by VoucherDate,VoucherNo";
		$VoucherMasterInfo=$Handle->runQuery($sql);
		for($v=0;$v<count($VoucherMasterInfo,0);$v++)
		{
			$CartID=$VoucherMasterInfo[$v]['CartID'];
			$VoucherDate=$VoucherMasterInfo[$v]['VoucherDate'];
			$VoucherNo=$VoucherMasterInfo[$v]['VoucherNo'];
			$sql="Select * from tbl_cartdetails where CartID='$CartID' and IsDeleted=0 and isCancelled=0";
			$CartDetailsInfo=$Handle->runQuery($sql);
			
			
			for($cd=0;$cd<count($CartDetailsInfo,0);$cd++)
			{
				$Quantity=$CartDetailsInfo[$cd]['BillingQuantity'];
				$Rate=$CartDetailsInfo[$cd]['PrimaryRate'];
				$Amount=$CartDetailsInfo[$cd]['Amount'];
				$ItemID=$CartDetailsInfo[$cd]['ItemID'];
				$UnitID=$CartDetailsInfo[$cd]['PrimaryUnitID'];
				$sql="Select Name from tbl_item where ID='$ItemID'";
			$ItemInfo=$Handle->runQuery($sql);
			$Item=$ItemInfo[0]['Name'];
			$sql="Select Name from tbl_unit where ID='$UnitID'";
			$UnitInfo=$Handle->runQuery($sql);			
			$Unit=$UnitInfo[0]['Name'];
			
			$TotalAmount+=$Amount;
			$TotalQuantity+=$Quantity;
			$vchDate='';
			$vchNo='';
			if($LastVoucherDate==$VoucherDate)
			{
				$vchDate='';
			}
			else
			{
				$vchDate=$VoucherDate;	
			}
			if($LastVoucherNo==$VoucherNo)
			{
				$vchNo='';
			}
			else
			{
				$vchNo=$VoucherNo;	
			}
				?>
				
				<tr >
				<td><?php echo $vchDate; ?></td><td><?php echo $vchNo; ?></td><td><?php echo $Item; ?></td>
				<td style="text-align:center;"><?php echo $Quantity; ?></td><td><?php echo $Unit; ?></td><td style="text-align:right"><?php echo sprintf("%0.2f",$Rate); ?></td><td style="text-align:right;"><?php echo sprintf("%0.2f",$Amount); ?></td>
				</tr>
				<?php
					$LastVoucherDate=$VoucherDate;
					$LastVoucherNo=$VoucherNo;
				}
				$LastVoucherNo='';
				
		}
		?>
				
				<tr style="font-weight:bold; border-top:2px solid rgba(155,155,155,1.00);">
				<td> </td><td> </td><td> Total: </td>
				<td style="text-align:center;"><?php echo $TotalQuantity; ?></td><td> </td><td> </td><td style="text-align:right;"><?php echo sprintf("%0.2f",$TotalAmount); ?></td>
				</tr>
                <tr>
                <td colspan="8" style="height:50px;"></td>
                </tr>
				<?php
		
	}
 ?>
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