  <?php
if (!isset($_SESSION)) {session_start();}
include_once 'app/controllers/CTL.VoucherMaster.php';
 date_default_timezone_set('Asia/Kolkata');
  $Handle = new VoucherMaster();
  $RefVoucherID=0;
  $RefVoucherTypeID=0;
  
$ItemBatchCheckID=0;
$ItemPriceTypeID=0;
 $SL_NO=0; $ID= 0; $MODE=0 ; $ENTRY_STATE=0 ; 
 $VoucherNo='';
 $DocumentNo='';
$VoucherDate='';
$VoucherTypeID=0;
$VoucherCategoryID=4;
$InventoryAccountID=0;
$ActivityAccountID=0;
$DrHeadAccount=0;
$CrHeadAccount=0;

$CartID=0;
$InventoryNature='0';
$IsEffectInventoryValue='0';
$AccountsNature='0';
$IsEffectLedgerValue='0';
$PayrollNature='0';
$IsEffectPayrollValue='0';
$VoucherNature='0';
$IsOptional='0';
$Note='';
$AccountID=0;
$ItemTotal=0;
$InvoiceTotal=0;
$CurrentTotal=0;
  if (isset($_GET['mode']))
 {	
 	$MODE = $_GET['mode'];
	$RefVoucherTypeID=$MODE;
 }
else{	$MODE =0;}
if (isset($_GET['ID']))
 {	$RefVoucherID = $_GET['ID'];}
else{	$RefVoucherID =0;}
$page='';
if (isset($_GET['p']))
 {	
 	$page = $_GET['p'];
}
$WhichEntry=1;
$LoadingStatus=0;
 
$VoucherTypeID=$Handle->GetTVTID($RefVoucherTypeID);
 //echo $VoucherTypeID;
$VoucherType=$Handle->GetVoucherType($VoucherTypeID);
//$SessionID=$Handle->GetVoucherSession($VoucherTypeID);
$VoucherID=$ID;
//echo $VoucherTypeID.'/';
//echo $SessionID.'/';
 if($RefVoucherID>0)	
{
	$CartID=$Handle->getCartID($RefVoucherID);
	//	echo $CartID.'/';
	$VoucherMasterInfo=$Handle->getVoucherMaster($RefVoucherID);
		//print_r($VoucherMasterInfo);
		if(count($VoucherMasterInfo,0)>0)
		{
			$VoucherNo=$VoucherMasterInfo[0]['VoucherNo'];
			$DocumentNo=$VoucherMasterInfo[0]['DocumentNo'];
			$VoucherTypeID=$VoucherMasterInfo[0]['VoucherTypeID'];
			$VoucherDate=$VoucherMasterInfo[0]['VoucherDate'];
			$WhichEntry=$VoucherMasterInfo[0]['WhichEntry'];
			
			$InventoryNature=$VoucherMasterInfo[0]['InventoryNature'];
			$IsEffectInventoryValue=$VoucherMasterInfo[0]['IsEffectInventoryValue'];
			$AccountsNature=$VoucherMasterInfo[0]['AccountsNature'];
			$IsEffectLedgerValue=$VoucherMasterInfo[0]['IsEffectLedgerValue'];
			$PayrollNature=$VoucherMasterInfo[0]['PayrollNature'];
			$IsEffectPayrollValue=$VoucherMasterInfo[0]['IsEffectPayrollValue'];
			$VoucherNature=$VoucherMasterInfo[0]['VoucherNature'];
			$IsOptional=$VoucherMasterInfo[0]['IsOptional'];
			$AccountID=$VoucherMasterInfo[0]['AccountID'];
			$ItemBatchCheckID=$VoucherMasterInfo[0]['ItemBatchCheckID'];
			$ItemPriceTypeID=$VoucherMasterInfo[0]['ItemPriceTypeID'];
			$Note=$VoucherMasterInfo[0]['Note'];
		}
		$InventoryAccountID=$Handle->GetInventoryAccountID($VoucherID,1);
		 // echo $InventoryAccountID;
		$ActivityAccountID=$Handle->GetActivityAccountID($VoucherID);
		$ActivityAccountID=$AccountID;
		//echo $ActivityAccountID.'/';
}
	
 
 
  ?>
  
   <div class="workspace" style="background-color:rgba(245,247,217,0.10);">
<div class="displayhead"><?php echo $VoucherType;?>
<span style="margin-right:5px; border:0px;" name="Operation"   class="btn btn-primary pull-right "onClick="savevoucher();" >
<i class="fa fa-rupee  " aria-hidden="true"></i> ADD PAYMENT</span>
<span style="margin-right:5px; border:0px;" name="Operation" class="btn btn-primary pull-right "onClick="addpayment();" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> Save & Close</span>
<span style="border:0px;margin-right:5px;" class="btn btn-primary pull-right" onClick="setWhichEntry(2);"><i class="fa fa-plus" aria-hidden="true"></i> More Item</span>
 
<span  style="border:0px;"  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-list" aria-hidden="true"></i> Menu
</span>
<span>
<input id="RefVoucherID" type="hidden" value="<?php echo $RefVoucherID; ?>">
<input id="RefVoucherTypeID" type="hidden" value="<?php echo $RefVoucherTypeID; ?>">
<input id="VoucherCategoryID" type="hidden" value="<?php echo $VoucherCategoryID; ?>">
<input id="WhichEntry" type="hidden" value="<?php echo $WhichEntry; ?>">
<input id="CartID" type="hidden" value="<?php echo $CartID; ?>">


<input id="InventoryNature" type="hidden" value="<?php echo $InventoryNature; ?>">
<input id="IsEffectInventoryValue" type="hidden" value="<?php echo $IsEffectInventoryValue; ?>">
<input id="AccountsNature" type="hidden" value="<?php echo $AccountsNature; ?>">
<input id="IsEffectLedgerValue" type="hidden" value="<?php echo $IsEffectLedgerValue; ?>">
<input id="PayrollNature" type="hidden" value="<?php echo $PayrollNature; ?>">
<input id="IsEffectPayrollValue" type="hidden" value="<?php echo $IsEffectPayrollValue; ?>">
<input id="VoucherNature" type="hidden" value="<?php echo $VoucherNature; ?>">
<input id="IsOptional" type="hidden" value="<?php echo $IsOptional; ?>">
<input id="ItemBatchCheckID" type="hidden" value="<?php echo $ItemBatchCheckID; ?>">
<input id="ItemPriceTypeID" type="hidden" value="<?php echo $ItemPriceTypeID; ?>">
<input id="InventoryAccountID" type="hidden" value="<?php echo $InventoryAccountID; ?>">
 <input id="ActivityAccountID" type="hidden" value="<?php echo $ActivityAccountID; ?>">
                                       
</span>

</div>

<div class="panel-body" style="padding:3px!important;">
   
   
 
  
 
 </div>
  <?php
if($CartID!=0)	
{ ?>
	<div id="itemEntrypanel">
 	<table   width="100%" style="font-size:12px;">
        <tr style="border-bottom:1px solid rgba(0,0,108,1.00);font-size:11px; color:rgba(5,103,1,1.00);  border-top:2px solid rgba(0,0,108,1.00);">
            <th style="width:5%; text-align:center; 
            padding:10px 0px;">#</th>
            <th style="width:45%;padding:3px 3px; ">Particulars</th>
            <th style="width:10%; text-align:center; ;">&nbsp;</th>
             
            <th style="width:10%; text-align:right; ">&nbsp;</th>
            <th style="width:10%; text-align:right; ">&nbsp;</th>
            <th style="width:15%; padding:3px 3px;text-align:right; ">Amount (INR)</th>
            <th style="width:5%; text-align:center; ">#</th>
        </tr>    
        <!--tr style="padding:1px;"-->
         <?php		
			$CNT=0;
			$narration="";
			$savebtn="";
			$MODE=1;
			
			$item_total2=0;
			/*
			$MODE defined as :
			0 as unsaved add Mode;
			*/
			//echo sizeof($_SESSION['purchase_item']);
			$EditMode=0;
			
			$getCartDetails=$Handle->GetCartDetails($CartID);
			if(count($getCartDetails,0)>0)
			{
				foreach($getCartDetails as $item)
				{
				$CNT=$CNT+1;?>
				<div id="panel<?php echo $item["EntryIndex"]; ?>" 
				style="background-color:rgba(255,255,255,1.00);">
					<?php
					$MODE=$MODE;
					$CartID=$item["CartID"];
					$CartDetailsID=$item["ID"];
					$SL_NO=$item["EntryIndex"];
					$ItemID=$item["ItemID"];
					$BillingQuantity=$item["BillingQuantity"];
					$ActualQuantity=$item["ActualQuantity"];
					$PrimaryUnitID=$item["PrimaryUnitID"];
					$SecondaryUnitID=$item["SecondaryUnitID"];
					$PrimaryRate=$item["PrimaryRate"];
					$SecondaryRate=$item["SecondaryRate"];
					$DiscountPercentage=$item["DiscountPercentage"];
					$PrimaryDiscountRate=$item["PrimaryDiscountRate"];
					$SecondaryDiscountRate=$item["SecondaryDiscountRate"];
					$Amount=$item["Amount"];
					$IsDeleted=$item["IsCancelled"];
					$IsEditable=$item["IsEditable"];
					if ($IsEditable==0)
					{
						
				//	 	$Handle->ShowPanel_Product($VoucherID,$CartID,$MODE,$CNT,$SL_NO,$CartDetailsID,$ItemID,$BillingQuantity,$ActualQuantity,$PrimaryUnitID,$SecondaryUnitID,$PrimaryRate,$SecondaryRate,$DiscountPercentage,$PrimaryDiscountRate,$SecondaryDiscountRate,$Amount,$IsDeleted,$IsEditable);
					}
					elseif ($IsEditable==1)
					{
						if ($EditMode==0)
						{
							$EditMode=1;
					//		$Handle->EntryPanel_Product($MODE,$CNT,$SL_NO,$CartDetailsID,$CartID);
						}
						else
						{
				//		 	$Handle->ShowPanel_Product($VoucherID,$CartID,$MODE,$CNT,$SL_NO,$CartDetailsID,$ItemID,$BillingQuantity,$ActualQuantity,$PrimaryUnitID,$SecondaryUnitID,$PrimaryRate,$SecondaryRate,$DiscountPercentage,$PrimaryDiscountRate,$SecondaryDiscountRate,$Amount,$IsDeleted,$IsEditable);
						}
						
					}
					
					?>
				</div>
				
				<?php
				$ItemTotal += $item["Amount"];	
				}
			
			  
			//$item_total2 += ($item["Amount"]*$item["Amount"]);
			}//end of loop
			if ($EditMode==0)
			{
				$EditMode=1;
				?>
				<div id="epanel">
				<?php 
					if ($WhichEntry==2)
					{
					//	$Handle->EntryPanel_Product($MODE,$CNT,$SL_NO,0,$CartID);
					}
				?>
				</div>
				<?php
			}
			?>
        <!--/tr-->
               
		</table>
	</div>
<?php
}
?>
<div id="AccountPanel"  style="    vertical-align: top;">
	<table      width="100%" style="font-size:12px; ">
    	<tr style="font-size:1px; color:rgba(5,103,1,1.00);height:0px; ">
            <th style="width:5%;  border-right:3px double rgba(215,106,108,1.00);"></th>
            <th style="width:45%;"></th>
            <th style="width:10%; text-align:center; ;"> </th>
             
            <th style="width:10%; text-align:center; "></th>
            <th style="width:10%; text-align:center; "> </th>
            <th style="width:15%;  "></th>
            <th style="width:5%; text-align:center; "></th>
        </tr>    
        <?php		
		$CNT=0;
		$drtotal=0;
		$crtotal=0;
		$narration="";
		$SL_NO=2;
		//$savebtn="<a href='#' onClick='savejournal();' class='btn btn-danger'>POST NOW</a>";
		$MODE=1;
		/*
		$MODE defined as :
		0 as unsaved add MODE;
		*/
		//echo sizeof($_SESSION['voucher_details']);
		$EDITMODE=0;
		$IsTaxable=0;
		$InvoiceTotal+=$ItemTotal;
		$TaxableAmount=$ItemTotal;
		$getAccountDetails=$Handle->GetAccountDetails($VoucherID,3);
		//print_r($getAccountDetails);
		if(count($getAccountDetails,0)>0)
		{
			foreach ($getAccountDetails as $item)
			{
				$CNT=$CNT+1;?>
				<div id="panel<?php echo $item["EntryIndex"]; ?>" >
				<?php
				$MODE=$MODE;
				$VoucherDetailsID=$item["ID"];
				//echo 'VD'.$VoucherDetailsID.'/VD';
				$SL_NO=$item["EntryIndex"];
				$DrCr=$item["DrCr"];
				$AccountID=$item["AccountID"];
				$Percentage=$item["Percentage"];
				$AccountTypeID=$item["AccountTypeID"];
				$CalculationMethodID=$item["CalculationMethodID"];
				$DrAmount=sprintf("%0.2f", $item["Debit"]);
				$CrAmount=sprintf("%0.2f", $item["Credit"]);
				$IsTaxable=$item["IsTaxable"];
				$IsDeleted=$item["IsDeleted"];
				$IsEditable=$item["IsEditable"];
				$VAmount=$DrAmount+$CrAmount;
				if($DrCr==1)
				{
					if($IsTaxable==1)
					{
						$TaxableAmount+=$VAmount;
					}
					$InvoiceTotal +=$VAmount;}
				elseif($DrCr==-1){
					if($IsTaxable==1)
					{
						$TaxableAmount+=$VAmount;
					}
					$InvoiceTotal -=$VAmount;
				}
				$CurrentTotal =$InvoiceTotal;
				
				if ($IsEditable==0)
				{
					if ($SL_NO!=1)
					{
				//		$Handle->showpanel_accounts($MODE,$CNT,$SL_NO,$DrCr,$AccountID,$Percentage,$VAmount,$IsDeleted,$IsEditable,$VoucherDetailsID,$AccountsNature);
					}
				}
				elseif ($IsEditable==1)
				{
					if ($EDITMODE==0)
					{
						$EDITMODE=1;
						//$Handle->editpanel($MODE,$CNT,$SL_NO,$DrCr,$AccountID,$DrAmount,$CrAmount,$IsDeleted,$IsEditable);
						//IsEditable=1 
						//Edit Mode
					//	$Handle->EntryPanelAccounts($VoucherID,$VoucherTypeID,$MODE,$CNT,$SL_NO,$VoucherDetailsID,$ItemTotal,$InvoiceTotal,$IsTaxable,$TaxableAmount,$DrCr,$AccountID,$VAmount,$Percentage,$AccountTypeID,$CalculationMethodID,$IsDeleted,$IsEditable);
						//	$MODE,$a,$SL_NO,$ID,$ItemTotal,$CurrentTotal, $IsTaxable=0, $TaxableAmount=0, $DrCr=0, $AccountID=0, $DrAmount=0, $CrAmount=0,$Percentage=0,$AccountTypeID=0,$CalculationMethodID=0,$IsDeleted=0,$IsEditable=0		
					}
					else
					{
						if ($SL_NO!=1)
						{
				//			$Handle->showpanel_accounts($MODE,$CNT,$SL_NO,$DrCr,$AccountID,$Percentage,$VAmount,$IsDeleted,$IsEditable,$VoucherDetailsID,$AccountsNature);
							//$MODE, $a, $SL_NO, $DrCr, $AccountID, $Percentage, $DrAmount, $CrAmount, $IsDeleted, $IsEditable, $VoucherDetailsID					
						}
					}
				}
				?>
				</div>
				<?php
			}
		}
		if ($EDITMODE==0)
		{
			$EDITMODE=1;
			?>
			<div id="epanel">
			<?php 
			if ($WhichEntry=="3")
			{
				//echo $EDITMODE;
				//AddMode
				//$Handle->EntryPanelAccounts($VoucherID,$VoucherTypeID,$MODE,$CNT,$SL_NO+1,0,$ItemTotal,$InvoiceTotal,$IsTaxable,$TaxableAmount);
			}
			?>
			</div>
			<?php
		}
		?>
		<tr  style="text-align:right; font-weight:bold; border-top:2px solid rgba(120,120,120,1.00); color:rgba(0,48,162,1.00);">
            <td style="border-right:3px double rgba(215,106,108,1.00); "></td>
            <td colspan=3 style="text-align:left;">
             <div  >
        <div  ><label   class="" style="text-align:right; font-size:16px;"  > AGAINST 
          
          VNO.     /    RNO     /     DT:
          <?php echo $VoucherNo." / ".$DocumentNo." / ".$VoucherDate; ?>
           </label> 
        </div>
    <div  >
          <label for="VoucherNo" class="" style="text-align:right; font-size:16px;"  >
          Payment To/ Receipt From : <?php echo $Handle->getAccountName($ActivityAccountID);?></label> 
           
           
        </div>
    </div>
            </td>
            <td ></td><td style="text-align:right; padding-right:3px;">
			<input type="text" id="AccountsTotal" style="text-align:right;  border:none;" onKeyPress="AccountsTotalConfirm(event);" readonly value="<?php echo sprintf("%0.2f",$InvoiceTotal); ?>">
			 </td><td style="border-left:3px double rgba(215,106,108,1.00);"> </td>
        </tr>   
<?php    
$CurrentDue=$InvoiceTotal;  
if ($InvoiceTotal>0)
{
	?>
    <tr>
    <td style="border-right:3px double rgba(215,106,108,1.00); "></td>
    <td colspan="5"><div   style="width:100%; height:70px; vertical-align:middle; font-size:24px;">NO PAYMENT YET</div></td>
    <td style="border-left:3px double rgba(215,106,108,1.00);"> </td>
    </tr>
    <?php
}
echo $VoucherID; 
   $Handle->EntryPanelAccounts($VoucherID,$VoucherTypeID,$MODE,$CNT,$SL_NO+1,0,$ItemTotal,$InvoiceTotal,$IsTaxable,$TaxableAmount);       

?>
<tr>
<td style="border-right:3px double rgba(215,106,108,1.00); "></td>
            <td colspan=4 style="text-align:right;">
 CURRENT DUE : </td>
 <td style="text-align:right; padding-right:3px;">
			<input type="text" id="AccountsTotal" style="text-align:right;  border:none;" onKeyPress="AccountsTotalConfirm(event);" readonly value="<?php echo sprintf("%0.2f",$InvoiceTotal); ?>">
			 </td><td style="border-left:3px double rgba(215,106,108,1.00);"> </td>
</tr>
	</table>
	</div>
    
 <script>
function addpayment()
{
	var RefVoucherTypeID=document.getElementById("RefVoucherTypeID").value;
	var RefVoucherID=document.getElementById("RefVoucherID").value;
	 
		var pg="app/controllers/VoucherMaster.php";
		var Type="AddPayment";
		var VoucherID=document.getElementById("VoucherID").value;
		var InventoryAccountID=document.getElementById("InventoryAccountID").value;
		var ActivityAccountID=document.getElementById("ActivityAccountID").value;
		var AccountsNature=document.getElementById("AccountsNature").value;;
		if (VoucherID==0 && ActivityAccountID!=0)
		{
			 // alert(WhichEntry);
		$.post(pg,{Type:Type,RefVoucherTypeID:RefVoucherTypeID,RefVoucherID:RefVoucherID,VoucherID:VoucherID, ActivityAccountID:ActivityAccountID, InventoryAccountID:InventoryAccountID, AccountsNature:AccountsNature},function(data){
			// document.getElementById("err").innerHTML=data;
			//location.reload();
		});
		}
}
 
 </script>
</div>