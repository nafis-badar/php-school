 <?php
if (!isset($_SESSION)) {session_start();}
include_once '../models/MOD.VoucherMaster.php';
//echo getcwd();
//chdir("..");
//echo getcwd();
// include_once ('../models/MOD.Accounts.php');
//echo getcwd();

// $document_root = $_APP_URL;
 //echo "root: $document_root";
//include_once ('../controllers/CTL.VoucherMaster.php');
$Handle= new MODVoucherMaster();

$Type=$_REQUEST['Type'];
if ($Type=='WhichEntry')
{
	
	$WhichEntry=$_REQUEST['WhichEntry'];
	//  echo "What Is Going On???".$WhichEntry;
	$VoucherID=$_REQUEST['VoucherID'];
	$InventoryAccountID=$_REQUEST['InventoryAccountID'];
	$ActivityAccountID=$_REQUEST['ActivityAccountID'];
	$AccountsNature=$_REQUEST['AccountsNature'];
	$DrCr=1;
	$CalculationMethodID= 1;
	$Percentage=100;
	$IsTaxable=1;
	$Amount=0;
	if($AccountsNature==-1)
	{
		$WhichEntry=$Handle->UpdateWhichEntry($VoucherID,$WhichEntry);
		if ($WhichEntry==2)
		{
			$InventoryAccountDetailsID=$Handle->getVoucherDetailsID($VoucherID,1);// here 1 means  AccountType=InventoryAccount 
			if ($InventoryAccountDetailsID==0)
			{
			 	$InventoryAccountEntry=CreateVoucherDetails($VoucherID,1,$InventoryAccountDetailsID,1,$InventoryAccountID,$Amount,0,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
				//$VoucherID_v,$EntryIndex_v,$VoucherDetailsID_v,$AccountTypeID_v,$AccountID_v,$Debit_v,$Credit_v,$DrCr_v,$CalculationMethodID_v,$Percentage_v,$IsTaxable_v
			}
			else
			{
				$InventoryAccountEntry=UpdateVoucherDetails($VoucherID,1,$InventoryAccountDetailsID,1,$InventoryAccountID,$Amount,0,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
			}
			
			$ActivityAccountInfo=$Handle->CheckLedgerForGroup($ActivityAccountID);
			$AccountID=0;
			if($ActivityAccountInfo[0]['IsBehaveAsSubLedger']==1)
			{
				$AccountID=$ActivityAccountInfo[0]['ID'];
			}
			else
			{
				$AccountID	=$ActivityAccountID;
			}
			$ActivityAccountDetailsID=$Handle->getVoucherDetailsID($VoucherID,2);
			if ($ActivityAccountDetailsID==0)
			{
				
				$ActivityAccountEntry=CreateVoucherDetails($VoucherID,2,$ActivityAccountDetailsID,2,$AccountID,0,$Amount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
			}
			else
			{
				$ActivityAccountEntry=UpdateVoucherDetails($VoucherID,2,$ActivityAccountDetailsID,2,$AccountID,0,$Amount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
			}
			 	
		}
	}
	
}
else if($Type=="SaveNote")
{
	
 
	$VoucherID=$_REQUEST['VoucherID'];
	$Note=$_REQUEST['Note'];
	 $SaveNote=$Handle->UpdateNote($Note,$VoucherID);
	
}
else if($Type=="MainEntry")
{
	$VoucherID=$_REQUEST['VoucherID'];
	$ActivityAccountID=$_REQUEST['ActivityAccountID'];
	$InventoryAccountID=$_REQUEST['InventoryAccountID'];
	$AccountsNature=$_REQUEST['AccountsNature'];
	$DrCr=1;
	$CalculationMethodID= 1;
	$Percentage=100;
	$IsTaxable=1;
	$Amount=$Handle->GetCartAmountByVoucherID($VoucherID);
	echo $Amount;
	$InventoryAccountDetailsID=$Handle->getVoucherDetailsID($VoucherID,1);// here 1 means  AccountType=InventoryAccount 
			if ($InventoryAccountDetailsID==0)
			{
			 	$InventoryAccountEntry=CreateVoucherDetails($VoucherID,1,$InventoryAccountDetailsID,1,$InventoryAccountID,$Amount,0,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
			}
			else
			{
				$InventoryAccountEntry=UpdateVoucherDetails($VoucherID,1,$InventoryAccountDetailsID,1,$InventoryAccountID,$Amount,0,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
			}
			
			$ActivityAccountInfo=$Handle->CheckLedgerForGroup($ActivityAccountID);
			$AccountID=0;
			if($ActivityAccountInfo[0]['IsBehaveAsSubLedger']==1)
			{
				$AccountID=$ActivityAccountInfo[0]['ID'];
			}
			else
			{
				$AccountID	=$ActivityAccountID;
			}
			$ActivityAccountDetailsID=$Handle->getVoucherDetailsID($VoucherID,2);
			if ($ActivityAccountDetailsID==0)
			{
				
				$ActivityAccountEntry=CreateVoucherDetails($VoucherID,2,$ActivityAccountDetailsID,2,$AccountID,0,$Amount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
			}
			else
			{
			$ActivityAccountEntry=UpdateVoucherDetails($VoucherID,2,$ActivityAccountDetailsID,2,$AccountID,0,$Amount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
			}
	
}
else if($Type=="SetActivityAccountID")
{
	$VoucherID=$_REQUEST['VoucherID'];
	$ActivityAccountID=$_REQUEST['ActivityAccountID'];
	$abc=$Handle->SetActivityAccountID($VoucherID,$ActivityAccountID);
	//echo $abc;
}
else if($Type=="AdditionalEntry")
{
	
	$VoucherID=$_REQUEST['VoucherID'];
	$VoucherDetailsID=$_REQUEST['VoucherDetailsID'];
	$EntryIndex=$_REQUEST['SLNO'];
	$AccountTypeID=$_REQUEST['AccountTypeID'];
	$DrCr=$_REQUEST['DrCr'];
	$AccountID=$_REQUEST['AccountID'];
	$Amount= $_REQUEST['Amount'];
	$DrAmount= 0;
	$CrAmount= 0;
	$AccountsNature=$_REQUEST['AccountsNature'];
	if($AccountsNature==1)
	{
		if($DrCr==1){$CrAmount= $Amount;}
		if($DrCr==-1){$DrAmount= $Amount;}
	}
	if($AccountsNature==-1)
	{
		if($DrCr==1){$DrAmount= $Amount;}
		if($DrCr==-1){$CrAmount= $Amount;}
	}
	$CalculationMethodID= $_REQUEST['CalculationMethodID'];
	$Percentage= $_REQUEST['Percentage'];

	$SubTotal= $_REQUEST['SubTotal'];
	$CurrentTotal= $_REQUEST['CurrentTotal'];
	$IsTaxable= $_REQUEST['IsTaxable'];
	$TaxableAmount= $_REQUEST['TaxableAmount'];
	if($VoucherDetailsID==0)
	{
	$AdditionalAccountEntry=CreateVoucherDetails($VoucherID,$EntryIndex,$VoucherDetailsID,$AccountTypeID,$AccountID,$DrAmount,$CrAmount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
	}
	else
	{
	$AdditionalAccountEntry=UpdateVoucherDetails($VoucherID,$EntryIndex,$VoucherDetailsID,$AccountTypeID,$AccountID,$DrAmount,$CrAmount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
	}
	 UpdateFullVoucherDetails($VoucherID);
	
}
else if($Type=="SaveVoucherAccount")	
{
	$ID=$_REQUEST['ID'];;
$AccountTypeID=$_REQUEST['AccountTypeID'];
$DrCr=$_REQUEST['DrCr'];
$CalculationMethodID=$_REQUEST['CalculationMethodID'];
$Percentage=$_REQUEST['Percentage'];
$AcGroupID=$_REQUEST['AcGroupID'];
$AccountID=$_REQUEST['AccountID'];
$IsPermanent=$_REQUEST['IsPermanent'];
$VoucherTypeID=$_REQUEST['VoucherTypeID'];
 
	$abc=$Handle->SaveVoucherAccount($ID, $AccountTypeID, $DrCr, $CalculationMethodID, $Percentage, $AcGroupID, $AccountID, $IsPermanent, $VoucherTypeID);
	return abc;
}
else if ($Type=='EnableItemEditMODE')
{
	
	$CartDetailsID=$_REQUEST['CartDetailsID'];
	$WhichEntry=$Handle->EnableItemEditMODE($CartDetailsID);
	//  echo "What Is Going On???".$WhichEntry;
	 
}	
else if ($Type=='RemoveItemEntry')
{
	
	$CartDetailsID=$_REQUEST['CartDetailsID'];
	$WhichEntry=$Handle->RemoveItemEntry($CartDetailsID);
	//  echo "What Is Going On???".$WhichEntry;
	 
}
else if ($Type=='EnableAccountsEditMODE')
{
	
	$VoucherDetailsID=$_REQUEST['VoucherDetailsID'];
	$WhichEntry=$Handle->EnableAccountsEditMODE($VoucherDetailsID);
	//  echo "What Is Going On???".$WhichEntry;
	 
}
else if ($Type=='CloseVoucherSession')
{
	$VoucherID=$_REQUEST['VoucherID'];
	$VoucherTypeID=$_REQUEST['VoucherTypeID'];
		$UserID= $_SESSION['UserID'];
		$CloseTime= date("Y-m-d H:i:s");
		
	
	$CloseVoucherSession=$Handle->CloseVoucherSession($UserID, $VoucherTypeID, $VoucherID, $CloseTime);
	}
else if($Type=='GetCalculationMethod')
{
	$AccountID=$_REQUEST['AccountID'];
	$VoucherTypeID=$_REQUEST['VoucherTypeID'];
	$GetCalculationMethod=$Handle->QueryCalculationMethod($AccountID,$VoucherTypeID);
	echo $GetCalculationMethod;
}
else if($Type=='IsItemMaintainBatch')
{
	$ItemID=$_REQUEST['ItemID'];
	$GetMaintainBatch=$Handle->QueryMaintainBatch($ItemID);
	echo $GetMaintainBatch;
}
else if($Type=='UpdateMainAccountEntry')
{
	$VoucherID=$_REQUEST['VoucherID'];
	UpdateFullVoucherDetails($VoucherID);	
}
else if($Type=='ItemBatchEntry')
{
	$ItemID=$_REQUEST['ItemID'];
	$CartID=$_REQUEST['CartID'];
	$CartTypeID=$_REQUEST['CartTypeID'];
	$CartDetailsID=$_REQUEST['CartDetailsID'];
	$ItemBatchCheckID=$_REQUEST['ItemBatchCheckID'];
	$ItemPriceTypeID=$_REQUEST['ItemPriceTypeID'];
	$StorageID=0;
	$BatchID=0;
	$TaxClassID=0;
	$Name='';$Unit='';$UnitID=0;$Rate=0;$MRP=0;$ItemCost=0;$Price=0;$Amount=0;
	$BatchNo=''; $MfgDate=''; $ExpDate=''; $Quantity=0;
	 $TaxClassID=0;$DiscountPercentage=0;$CGSTPercentage=0;$SGSTPercentage=0;
	 $CGST=0;$SGST=0;
	$ItemDetails=$Handle->ItemDetailsByID($ItemID);
	if($ItemDetails>0){
		$Name=$ItemDetails[0]['Name'];
		$MRP=$ItemDetails[0]['MRP'];
		$ItemCost=$ItemDetails[0]['ItemCost'];
		$Price=$ItemDetails[0]['Price'];
		$UnitID=$ItemDetails[0]['UnitID'];
		$StorageID=$ItemDetails[0]['StorageID'];
		//print_r($ItemDetails);
		if($CartTypeID==1)
		{	
		$TaxClassID=$ItemDetails[0]['PurchaseTaxClassID'];
		}
		elseif($CartTypeID==2)
		{	
		$TaxClassID=$ItemDetails[0]['SalesTaxClassID'];
		}
		else
		{
			$TaxClassID=$ItemDetails[0]['PurchaseTaxClassID'];
		}
		// $DiscountPercentage=0;
		 $CGSTPercentage=$ItemDetails[0]['CGSTPercentage'];
		 $SGSTPercentage=$ItemDetails[0]['SGSTPercentage'];
		//$MRP=$ItemDetails[0]['MRP'];
	}
	if($ItemPriceTypeID=1){$Rate=$ItemCost;}
	elseif($ItemPriceTypeID=2){$Rate=$Price;}
	elseif($ItemPriceTypeID=3){$Rate=$MRP;}
	 $Unit=$Handle->GetUnitByID($UnitID);
	 
	?>
    <table class="table" style="width:100%; text-align:center; font-size:12px; position:relative;">

        <tr>
        <td colspan="7" style="text-align:left; padding:2px 10px; font-size:18px;">Item : <?php echo $Name; ?>
       </td>
        
        </tr>
        <tr  style="background-color:rgba(211,211,211,1.00); color:rgba(31,31,31,1.00); font-weight:bold;">
        <td>Storage</td>
        <td>Batch No</td>
        <td>Mfg. Date</td>
        <td>Exp. Date</td>
        <td>Package</td>
        <td>Quantity</td><td>MRP</td><td>Rate</td>
        <td>Disc.</td>
        <td>CGST</td>
        <td>SGST</td>
        <td>Amount</td> 
        </tr>
        
        <?php
		$CNT=0;
        if($CartDetailsID!=0)
        {
            $GetItemBatchInfo=$Handle->GetItemBatchInfo($CartDetailsID);
			//echo  $GetItemBatchInfo ;
			$CNT=count($GetItemBatchInfo,0);
			for($i=0;$i<count($GetItemBatchInfo,0);$i++)
			{
				?>
                <tr>
                <td><?php echo $Handle->QueryAccountName($GetItemBatchInfo[$i]['StorageID']);?></td>
                <td><?php echo $GetItemBatchInfo[$i]['BatchNo'];?></td>
                <td><?php echo $GetItemBatchInfo[$i]['MfgDate'];?></td>
                <td><?php echo $GetItemBatchInfo[$i]['ExpDate'];?></td>
                <td>
				  <?php  
				  $SecondaryUnitID=$GetItemBatchInfo[$i]['UnitID'];
                            $sql="select ID,Name Name from tbl_unit where ID=$SecondaryUnitID";
                           // echo $sql;
                            $result=$Handle->runQuery($sql);
                             
                               $Unit= $result[0]["Name"];
                                $id[]=$result[0]["ID"];
								echo $Unit;
                            ?>
				</td>
                <td><?php echo $GetItemBatchInfo[$i]['Quantity'];?></td>
                <td><?php echo number_format((float)$GetItemBatchInfo[$i]['MRP'], 2, '.', '');?></td>
                <td><?php echo number_format((float)$GetItemBatchInfo[$i]['Rate'], 2, '.', '');?></td>
                <td><?php echo number_format((float)$GetItemBatchInfo[$i]['DiscountPercentage'], 2, '.', '');?></td>
                <td><?php echo number_format((float)$GetItemBatchInfo[$i]['CGSTPercentage'], 2, '.', '');?></td>
                <td><?php echo number_format((float)$GetItemBatchInfo[$i]['SGSTPercentage'], 2, '.', '');?></td>
                <td><?php echo number_format((float)$GetItemBatchInfo[$i]['Amount'], 2, '.', '');?></td>
                </tr>
			<?php	
			}
        }
        ?>
        <tr>
        <input type="hidden" id="BatchID" value="<?php echo $BatchID;?>">
        <input type="hidden" id="BatchItemID" value="<?php echo $ItemID;?>">
        <input type="hidden" id="BatchCartDetailsID" value="<?php echo $CartDetailsID;?>">
        <input type="hidden"  id="BatchTaxClassID"  value="<?php echo $TaxClassID;?>">
                         <td>
            <select name="BatchStorageID" id="BatchStorageID" class=" input-sm">
				<option value="0">Please select...</option>
<?php
$getStorageInfo = $Handle->runQuery("SELECT * FROM tbl_master where MasterTypeID=4");
 
for ($iu = 0; $iu < count($getStorageInfo ,0); $iu++) {
       ?>
      
 <option value="<?php echo $getStorageInfo[$iu]['ID'];?>" <?php if($StorageID==$getStorageInfo[$iu]['ID']) echo 'selected= "selected"'; ?>><?php echo $getStorageInfo[$iu]['Name'];?></option>
	<?php } ?>
		</select>
            </td>
        	<?php
        	if($ItemBatchCheckID==1)//Purchase
			{
				?>

            
        <td> 
        <input type="text" id="BatchNo" style="width:100px;" value="<?php echo $BatchNo;?>" onKeyUp="TakeBatchAction(event);";>
         </td>
            <td><input type="text" disabled onBlur="validatemonth(this);" class="monthPicker" id="MfgDate"  style="width:80px;"value="<?php echo $MfgDate;?>"></td>
            <td><input type="text" disabled onBlur="validatemonth(this);" class="monthPicker" id="ExpDate"  style="width:80px;"value="<?php echo $ExpDate;?>"></td>
           
                <?php
			}
			if($ItemBatchCheckID==2)//Sales
			{
				$BatchDetails=$Handle->GetBatchDetailsForOut($ItemID,$CartDetailsID);	
				?>
             <td colspan="3" style="border:1px solid rgba(0,0,0,1.00)!imporatnt;text-align:left;">
                <select name="BatchNo" id="BatchNo" class=""  style="text-align:left;"
                onChange="GetBatchDetails(this.value,<?php echo $ItemID;?>,this.options[this.selectedIndex].parentNode.value);"  >
                  <option   value="0" <?php  if($BatchNo==0) echo 'selected= "selected"'; ?>  >Select Item</option>
                <?php
				$Storage_ID=0;
					for($i=0;$i<count($BatchDetails,0);$i++)
					{
						if($Storage_ID!=$BatchDetails[$i]['StorageID'])
						{
							
							?>
                            <optgroup value=<?php echo $BatchDetails[$i]['StorageID'];?> label="<?php echo $Handle->QueryAccountName($BatchDetails[$i]['StorageID']); ?>">
                            <?php
						}
						?>
                        
					<option value="<?php echo $BatchDetails[$i]['BatchNo']; ?>">
						 
                        
                        <strong>Batch: </strong><?php echo $BatchDetails[$i]['BatchNo']; ?>&emsp;&emsp;
                        <strong>Mfg: </strong><?php echo $BatchDetails[$i]['MfgDate']; ?>&emsp;
                        <strong>Exp: </strong><?php echo $BatchDetails[$i]['ExpDate']; ?>&emsp;
                        <strong>Qty: </strong><?php echo $BatchDetails[$i]['Quantity']; ?>
                     
                    </option>
                    <?php
                    if($Storage_ID!=$BatchDetails[$i]['StorageID'])
						{
							$Storage_ID=$BatchDetails[$i]['StorageID'];
						?>
                    </optgroup>	
                    <?php
						}
						
					}
				?>
                
                </select>
               
               
                <input type="hidden" class="monthPicker" id="MfgDate" value="<?php echo $MfgDate;?>">
                <input type="hidden" class="monthPicker" id="ExpDate" value="<?php echo $ExpDate;?>"></td>
           
                <?php
			}	?>
            
         <!-- UNIT-->    
            <td> 
             <?php  
				 
                            $sql="select ID,Name Name from tbl_unit where ID=$UnitID";
                           // echo $sql;
                            $result=$Handle->runQuery($sql);
                             
                               $Unit= $result[0]["Name"];
                                $id[]=$result[0]["ID"];
								echo $Unit;
                            ?>
            <input type="hidden" id="BatchUnitID" value="<?php echo $UnitID;?>">
            </td>
            <td><input type="text" disabled id="BatchQuantity"  style="width:30px;" value="<?php echo $Quantity;?>" onKeyUp="CalculateBatchItem();">
             
            </td>
          <td>
            <input type="text" disabled id="BatchMRP"  style="width:50px; text-align:right;" value="<?php echo $MRP;?>" onKeyUp="CalculateBatchItem();"></td>
            <td>
            
            <input type="hidden"   id="BatchItemCost"  style="width:50px;" value="<?php echo $ItemCost;?>" >
            <input type="hidden"   id="BatchPrice"  style="width:50px;" value="<?php echo $Price;?>">
            <input type="hidden"   id="BatchCGST"  style="width:50px;" value="<?php echo $CGST;?>">
            <input type="hidden"   id="BatchSGST"  style="width:50px;" value="<?php echo $SGST;?>">
            <input type="text" disabled id="BatchRate"  style="width:50px; text-align:right;" value="<?php echo $Rate;?>" onKeyUp="CalculateBatchItem();"></td>
             <td>
            <input type="text" disabled id="BatchDiscountPercentage"  style="width:50px; text-align:right;" value="<?php echo $DiscountPercentage;?>" onKeyUp="CalculateBatchItem();"></td>
             <td>
            <input type="text" disabled id="BatchCGSTPercentage"  style="width:50px; text-align:right;" value="<?php echo $CGSTPercentage;?>" onKeyUp="CalculateBatchItem();"></td>
             <td>
            <input type="text" disabled id="BatchSGSTPercentage"  style="width:50px; text-align:right;" value="<?php echo $SGSTPercentage;?>" onKeyUp="CalculateBatchItem();"></td>
            
            <td><input type="text"  id="BatchAmount" value="<?php echo $Amount;?>" style=" text-align:right; width:80px;" onKeyPress="ItemBatchSave(event);" readonly></td>
        </tr>
        <?php
		$CartDetails=$Handle->QueryCartDetailsByID($CartDetailsID);
		?>
		<tr style="background-color:rgba(224,224,224,1.00); border:1px solid rgba(103,103,103,1.00)">
        <td colspan="2"></td>
			<td colspan="3">COUNT:<?php echo $CNT;?> </td>
            <td><?php echo $CartDetails[0]['BillingQuantity'];?></td>
            <td><!--?php echo number_format((float)$CartDetails[0]['PrimaryRate'], 2, '.', '').'/'.$Unit;?--></td>
             <td colspan="2">
            
            </td>
           <td>
            
            </td>
            <td>
            
            </td>
            <td><?php echo number_format((float)$CartDetails[0]['Amount'], 2, '.', '');?></td>
		</tr>
        <?php
            //echo BatchEntrypanel_Product($ItemID,$CartID,$CartDetailsID);
        ?>
	</table>
	<?php
}
else if($Type=='HasBatch')
{
	$CartDetailsID=$_REQUEST['CartDetailsID'];
	echo $Handle->HasBatch();
}
else if($Type=='ItemBatchSave')
{
$BatchID='0';
$CartID='0';
$CartDetailsID='0';
$InventoryNature='0';
$IsEffectInventoryValue='0';
$BatchNo='';
$BatchDate='';
$ExpDate='';
$MfgDate='';
$MRP='0';
$ItemCost='0';
$Price='0';
$Quantity='0';
$UnitID='0';
$Amount='0';
$CreatedBy='0';
$ModifedBy='0';
$CreateTime='';
$ModifyTime='';
$StorageID='0';
$DiscountPercentage='0';
$TaxClassID='0';
$CGSTPercentage='0';
$SGSTPercentage='0';
$CGST='0';
$SGST='0';

 
		$CartID='0';
		$ItemID='0';
		$TestDate='';
		$ReportDate='';
		$CollectionCenterID='0';
		$LabID='0';
		$TransactionID='0';
		$BillingQuantity='0';
		$ActualQuantity='0';
		$PrimaryRate='0';
		$SecondaryRate='0';
		$DiscountPercentage='0';
		$PrimaryDiscountRate='0';
		$SecondaryDiscountRate='0';
		$Amount='0';
		$CreatedBy='0';
		$CreateTime='';
		$ModifyBy='0';
		$ModifyTime='';
		$EntryIndex='0';
		$DocumentNo='';
		$VoucherID='0';
		$ItemID='0';
		$ItemGroupID='0';
		$ItemCategoryID='0';
		$PrimaryUnitID='0';
		$SecondaryUnitID='0';
		$IsCancelled='0';
		$CancellationRequestBy='0';
		$CancellationRequestTime='';
		$CancellationConfirmBy='0';
		$CancellationConfirmTime='';
		$IsDeleted='0';
		$IsEditable='0';
		
	$ItemID=$_REQUEST['ItemID'];
	$StorageID=$_REQUEST['StorageID'];
	$BatchID=$_REQUEST['BatchID'];
	$CartID=$_REQUEST['CartID'];
	$CartDetailsID=$_REQUEST['CartDetailsID'];
	$InventoryNature=$_REQUEST['InventoryNature'];
	$IsEffectInventoryValue=$_REQUEST['IsEffectInventoryValue'];
	
	$BatchNo=$_REQUEST['BatchNo'];
	 $BatchDate=date("Y-m-d"); 
	$ExpDate=$_REQUEST['ExpDate'];
	$MfgDate=$_REQUEST['MfgDate'];
	$MRP=$_REQUEST['MRP'];
	$ItemCost=$_REQUEST['ItemCost'];
	$Price=$_REQUEST['Price'];
	$Rate=$_REQUEST['Rate'];
	$Quantity=$_REQUEST['Quantity'];
	$UnitID=$_REQUEST['UnitID'];
	$Amount=$_REQUEST['Amount'];
	$DiscountPercentage=$_REQUEST['DiscountPercentage'];
	$TaxClassID=$_REQUEST['TaxClassID'];
	$CGSTPercentage=$_REQUEST['CGSTPercentage'];
	$SGSTPercentage=$_REQUEST['SGSTPercentage'];
	$CGST=$_REQUEST['CGST'];
	$SGST=$_REQUEST['SGST'];
	//$GodownID='1';
	//ID, ItemID, CartID, CartDetailsID, InventoryNature, IsEffectInventoryValue, BatchNo, BatchDate, ExpDate, MfgDate, ItemCost, Price, Rate, Quantity, UnitID, Amount, CreatedBy, ModifedBy, CreateTime, ModifyTime, GodownID
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
	if($CartDetailsID==0)
	{
		

/*$VoucherID=$VoucherID_v;
 $EntryIndex=$EntryIndex_v;
$AccountTypeID=$AccountTypeID_v;
$AccountID=$AccountID_v;
$Debit=$Debit_v;
$Credit=$Credit_v;*/
	/*$ID=$_REQUEST['ID'];
	$CartID=$_REQUEST['CartID'];
	$ItemID=$_REQUEST['ItemID'];*/
	$EntryIndex=1;
	//	alert(accountid);
	$BillingQuantity= $Quantity;
	$ActualQuantity= $Quantity;
	$PrimaryUnitID= $UnitID;
	$SecondaryUnitID= $UnitID;
	$ItemCost= $ItemCost;
	$Price= $Price;
	$PrimaryRate= $Rate;
	$SecondaryRate= $Rate;
	/*$DiscountPercentage= $_REQUEST['DiscountPercentage'];
	$PrimaryDiscountRate= $_REQUEST['PrimaryDiscountRate'];
	$SecondaryDiscountRate= $_REQUEST['SecondaryDiscountRate'];
	$Amount= $_REQUEST['Amount'];*/
	$IsEditable=0;
	$IsDeleted=0;
//$Handle->VoucherType($VoucherTypeID);
 //$ID=$Handle->IsItemAlreadyExist($ItemID,$CartID);
		$CartDetailsID=$Handle->CartDetailsInsert($CartDetailsID, $EntryIndex, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $VoucherID, $DocumentNo, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $MRP,$ItemCost, $Price, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime, $IsDeleted, $IsEditable,$TaxClassID,$CGSTPercentage, $SGSTPercentage,$CGST,$SGST)	;
	}		
	if($BatchID==0)
	{
	$BatchID=$Handle->BatchInsert($BatchID,$StorageID, $ItemID, $CartID, $CartDetailsID, $InventoryNature, $IsEffectInventoryValue, $BatchNo, $BatchDate, $ExpDate, $MfgDate,$MRP, $ItemCost, $Price, $Rate,$DiscountPercentage, $Quantity, $UnitID, $Amount, $CreatedBy, $ModifedBy, $CreateTime, $ModifyTime,$TaxClassID,$CGSTPercentage, $SGSTPercentage,$CGST,$SGST );
	}
	else
	{
		$BatchID=$Handle->BatchUpdate($BatchID,$StorageID, $ItemID, $CartID, $CartDetailsID, $InventoryNature, $IsEffectInventoryValue, $BatchNo, $BatchDate, $ExpDate, $MfgDate, $MRP, $ItemCost, $Price, $Rate,$DiscountPercentage, $Quantity, $UnitID, $Amount, $CreatedBy, $ModifedBy, $CreateTime, $ModifyTime,$TaxClassID,$CGSTPercentage, $SGSTPercentage,$CGST,$SGST );
	}
	
	UpdateCartDetailsByBatchValue($CartDetailsID,$CartID);
	echo $CartDetailsID;
}
else if($Type=='AddPayment')
{
	$RefVoucherTypeID=$_REQUEST['RefVoucherTypeID'];
	$RefVoucherID=$_REQUEST['RefVoucherID'];
	$VoucherID=$_REQUEST['VoucherID'];
	$InventoryAccountID=$_REQUEST['InventoryAccountID'];
	$ActivityAccountID=$_REQUEST['ActivityAccountID'];
	$AccountsNature=$_REQUEST['AccountsNature'];
  
	//ID, ItemID, CartID, CartDetailsID, InventoryNature, IsEffectInventoryValue, BatchNo, BatchDate, ExpDate, MfgDate, ItemCost, Price, Rate, Quantity, UnitID, Amount, CreatedBy, ModifedBy, CreateTime, ModifyTime, GodownID
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
	if($CartDetailsID==0)
	{
		

/*$VoucherID=$VoucherID_v;
 $EntryIndex=$EntryIndex_v;
$AccountTypeID=$AccountTypeID_v;
$AccountID=$AccountID_v;
$Debit=$Debit_v;
$Credit=$Credit_v;*/
	/*$ID=$_REQUEST['ID'];
	$CartID=$_REQUEST['CartID'];
	$ItemID=$_REQUEST['ItemID'];*/
	$EntryIndex=1;
	//	alert(accountid);
	$BillingQuantity= $Quantity;
	$ActualQuantity= $Quantity;
	$PrimaryUnitID= $UnitID;
	$SecondaryUnitID= $UnitID;
	$ItemCost= $ItemCost;
	$Price= $Price;
	$PrimaryRate= $Rate;
	$SecondaryRate= $Rate;
	/*$DiscountPercentage= $_REQUEST['DiscountPercentage'];
	$PrimaryDiscountRate= $_REQUEST['PrimaryDiscountRate'];
	$SecondaryDiscountRate= $_REQUEST['SecondaryDiscountRate'];
	$Amount= $_REQUEST['Amount'];*/
	$IsEditable=0;
	$IsDeleted=0;
//$Handle->VoucherType($VoucherTypeID);
 //$ID=$Handle->IsItemAlreadyExist($ItemID,$CartID);
		$CartDetailsID=$Handle->CartDetailsInsert($CartDetailsID, $EntryIndex, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $VoucherID, $DocumentNo, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $ItemCost, $Price, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime, $IsDeleted, $IsEditable)	;
	}		
	if($BatchID==0)
	{
	$BatchID=$Handle->BatchInsert($BatchID, $StorageID,$ItemID, $CartID, $CartDetailsID, $InventoryNature, $IsEffectInventoryValue, $BatchNo, $BatchDate, $ExpDate, $MfgDate, $ItemCost, $Price, $Rate, $Quantity, $UnitID, $Amount, $CreatedBy, $ModifedBy, $CreateTime, $ModifyTime, $StorageID);
	}
	else
	{
		$BatchID=$Handle->BatchUpdate($BatchID,$StorageID, $ItemID, $CartID, $CartDetailsID, $InventoryNature, $IsEffectInventoryValue, $BatchNo, $BatchDate, $ExpDate, $MfgDate, $ItemCost, $Price, $Rate, $Quantity, $UnitID, $Amount, $CreatedBy, $ModifedBy, $CreateTime, $ModifyTime, $StorageID);
	}
	
	UpdateCartDetailsByBatchValue($CartDetailsID,$CartID);
	echo $CartDetailsID;
}

function UpdateCartDetailsByBatchValue($CartDetailsID,$CartID)
{
	$Handle= new MODVoucherMaster();
	$VoucherID=$Handle->GetVoucherIDByCartID($CartID);
	$GetBatchTotalInfo=$Handle->GetItemBatchTotal($CartDetailsID);
	$CNT=$GetBatchTotalInfo[0]['CNT'];
	$Quantity=$GetBatchTotalInfo[0]['Quantity'];
	$MRP=$GetBatchTotalInfo[0]['MRP'];
	$ItemCost=$GetBatchTotalInfo[0]['ItemCost'];
	$Price=$GetBatchTotalInfo[0]['Price'];
	$GetBatchInfo=$Handle->GetItemBatchDetails($CartDetailsID);

	$TaxClassID=$GetBatchInfo[0]['TaxClassID'];
	
	$DiscountPercentage=$GetBatchInfo[0]['DiscountPercentage'];
	$CGSTPercentage=$GetBatchInfo[0]['CGSTPercentage'];
	$SGSTPercentage=$GetBatchInfo[0]['SGSTPercentage'];
	$Rate=$GetBatchTotalInfo[0]['Rate'];
	$Amount	=$GetBatchTotalInfo[0]['Amount'];
	$getID=$Handle->UpdateCartDetailsByBatch($CartDetailsID,$CNT, $Quantity, $ItemCost, $MRP,$Price, $Rate, $Amount, $TaxClassID, $DiscountPercentage,$CGSTPercentage,$SGSTPercentage);
	UpdateFullVoucherDetails($VoucherID);
}
function BatchEntrypanel_Product($ItemID,$CartID,$CartDetailsID)
{
	$str= _
	?>
    <td><input type="text" id="BatchNo"></td>
	<td><input type="text" id="MfgDate"></td>
    <td><input type="text" id="ExpDate"></td>
    <td><input type="text" id="BatchQuantity"></td>
    <td><input type="text" id="BatchRate"></td>
    <td><input type="text" id="BatchAmount"></td>
    <?php ;
	return $str;
}
function UpdateFullVoucherDetails($VoucherID)
{
	$Handle= new MODVoucherMaster();
	$VoucherMaster=$Handle->QueryVoucherMaster($VoucherID);
	$AccountsNature=$VoucherMaster[0]['AccountsNature'];
	$CartID=$VoucherMaster[0]['CartID'];
	$CartAmount=$Handle->GetCartAmountByCartID($CartID);
	$VoucherTypeID=$VoucherMaster[0]['VoucherTypeID'];
	$VoucherDetails=$Handle->GetVoucherDetailsByVoucherIDOrderEntryIndex($VoucherID);
	$InvoiceAmount=$CartAmount;
	$CurrentTotal=$CartAmount;
	$TaxableAmount=$CartAmount;
	$ActivityVoucherDetailsID=0;
	$ActivityEntryIndex=0;
	$ActivityAccountTypeID=0;
	$ActivityAccountID=0;
	$ActivityDrAmount=0;$ActivityCrAmount=0;$ActivityDrCr=-1;$ActivityCalculationMethodID=0;$ActivityPercentage=0;$ActivityIsTaxable=0;
	for($i=0;$i<count($VoucherDetails,0);$i++)
	{
		$DrAmount=0;
		$CrAmount=0;	
		$VoucherDetailsID=	$VoucherDetails[$i]['ID'];
		$AccountTypeID=	$VoucherDetails[$i]['AccountTypeID'];
		$Amount=$VoucherDetails[$i]['Debit']+$VoucherDetails[$i]['Credit'];
		$EntryIndex=	$VoucherDetails[$i]['EntryIndex'];
		$DrCr=	$VoucherDetails[$i]['DrCr'];
		$AccountID=$VoucherDetails[$i]['AccountID'];
		$Percentage=$VoucherDetails[$i]['Percentage'];
		$CalculationMethodID=$VoucherDetails[$i]['CalculationMethodID'];
		$IsTaxable=$VoucherDetails[$i]['IsTaxable'];
		if($AccountTypeID==1)
		{
			if($AccountsNature==1)
			{
				if($DrCr==1){$CrAmount= $CartAmount;}
				if($DrCr==-1){$DrAmount= $CartAmount;}
			}
			if($AccountsNature==-1)
			{
				if($DrCr==1){$DrAmount= $CartAmount;}
				if($DrCr==-1){$CrAmount= $CartAmount;}
			}
			 
			$DrCr=1;
		$Update=UpdateVoucherDetails($VoucherID,$EntryIndex,$VoucherDetailsID,$AccountTypeID,$AccountID,$DrAmount,$CrAmount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
		}
		if($AccountTypeID==2)
		{
			$ActivityVoucherDetailsID=$VoucherDetailsID;
			$ActivityEntryIndex=$EntryIndex;
			$ActivityAccountTypeID=$AccountTypeID;
			$ActivityAccountID=$AccountID;
			$ActivityDrCr=-1;
			$ActivityCalculationMethodID=$CalculationMethodID;
			$ActivityPercentage=$Percentage;
			$ActivityIsTaxable=0;
		}
		
		if($AccountTypeID==3 or $AccountTypeID==4)
		{
			if($CalculationMethodID==3 or $CalculationMethodID==4)
			{
				$Amount=($TaxableAmount*$Percentage/100);
			}
			elseif($CalculationMethodID==5)
			{
				
			}
			elseif($CalculationMethodID==6)
			{
				$Amount=($CurrentTotal*$Percentage/100);
			}
			if($AccountsNature==1)
			{
				if($DrCr==1){$CrAmount= $Amount;}
				if($DrCr==-1){$DrAmount= $Amount;}
			}
			if($AccountsNature==-1)
			{
				if($DrCr==1){$DrAmount= $Amount;}
				if($DrCr==-1){$CrAmount= $Amount;}
			}
			if($DrCr==1){$CurrentTotal=$CurrentTotal+$Amount;}
			if($DrCr==-1){$CurrentTotal=$CurrentTotal-$Amount;}
			$Update=UpdateVoucherDetails($VoucherID,$EntryIndex,$VoucherDetailsID,$AccountTypeID,$AccountID,$DrAmount,$CrAmount,$DrCr,$CalculationMethodID,$Percentage,$IsTaxable);
		}
	}
	$DrAmount=0;	
	$CrAmount=0;
	
	if($AccountsNature==1)
			{
				if($ActivityDrCr==1){$CrAmount= $CurrentTotal;}
				if($ActivityDrCr==-1){$DrAmount= $CurrentTotal;}
			}
			if($AccountsNature==-1)
			{
				if($ActivityDrCr==1){$DrAmount= $CurrentTotal;}
				if($ActivityDrCr==-1){$CrAmount= $CurrentTotal;}
			}
	 
	$Update=UpdateVoucherDetails($VoucherID,$ActivityEntryIndex,$ActivityVoucherDetailsID,$ActivityAccountTypeID,$ActivityAccountID,$DrAmount,$CrAmount,$ActivityDrCr,$ActivityCalculationMethodID,$ActivityPercentage,$ActivityIsTaxable);
}
 	function CreateVoucherDetails($VoucherID_v,$EntryIndex_v,$VoucherDetailsID_v,$AccountTypeID_v,$AccountID_v,$Debit_v,$Credit_v,$DrCr_v,$CalculationMethodID_v,$Percentage_v,$IsTaxable_v)
	{
		$Handle= new MODVoucherMaster();
		$ID='0';
$EntryIndex='';
$transactionid='0';
$VoucherID='0';
$AccountTypeID='0';
$AccountID='0';
$SubAccountID='0';
$Debit='0';
$Credit='0';
$PaymentReceiptTypeID='0';
$CalculationMethodID='0';
$AttendanceTypeID='0';
$VoucherNature='0';
$Note='';
$InstrumentID='0';
$TaxAccountID='0';
$TaxClassID='0';
$TaxTypeID='0';
$TaxRate='0';
$IsTaxable='0';
$TaxableAmount='0';
$ServiceChargeAccountID='0';
$ServiceChargeRate='0';
$ServiceChargableAmount='0';
$DiscountAccountID='0';
$DiscountID='0';
$DiscountRate='0';
$DiscountValue='0';
$HasItem='0';
$CostCategoryID='0';
$CostCentreID='0';
$GodownID='0';
$IsClosed='0';
$IsSaved='0';
$IsDeleted='0';
$IsEditable='0';
$CustomerID='0';
$BillingName='';
$BillingAddressID='0';
$SalesTaxNo='';
$DeliveryDetailsID='0';
$PaymentMode='0';
$IsCancelled='0';
$AdjustMethodID='0';
$CancelledBy='0';
$CancelTime='';
$CancelNote='';
$EntryPointID='0';
$MacID='0';
$CreateEntryPointID='0';
$ModifyEntryPointID='0';
$ModifyMacID='0';
$CreatedBy='0';
$ModifiedBy='0';
$ModifyTime='';
$CreateTime='';
$PriceLevelID='0';
$DesignationID='0';
$Grade='0';
$Percentage='0';
$DrCr='0';
$HasParent='0';
$HasChild='0';
$ParentControlID='0';
$ChildControlID='0';
$ControlID='0';
$SourceGodownID='0';
$DestinationGodownID='0';
$SourceOfficeID='0';
$DestinationOfficeID='0';

 $VoucherID=$VoucherID_v;
 $EntryIndex=$EntryIndex_v;
$AccountTypeID=$AccountTypeID_v;
$AccountID=$AccountID_v;
$Debit=$Debit_v;
$Credit=$Credit_v;
$DrCr=$DrCr_v;
$CalculationMethodID=$CalculationMethodID_v;
$Percentage=$Percentage_v;
$IsTaxable=$IsTaxable_v;
//$Handle->VoucherType($VoucherTypeID);
 
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		
		$VoucherDetailsID=$Handle->VoucherDetailsInsert($ID, $EntryIndex, $transactionid, $VoucherID, $AccountTypeID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $IsTaxable,$TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDeleted, $IsEditable, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID);
		return $VoucherDetailsID;
		}
	 
	function UpdateVoucherDetails( $VoucherID_v,$EntryIndex_v,$VoucherDetailsID_v,$AccountTypeID_v,$AccountID_v,$Debit_v,$Credit_v,$DrCr_v,$CalculationMethodID_v,$Percentage_v,$IsTaxable_v)
	{
		$Handle= new MODVoucherMaster();
		$ID='0';
$EntryIndex='';
$transactionid='0';
$VoucherID='0';
$AccountTypeID='0';
$AccountID='0';
$SubAccountID='0';
$Debit='0';
$Credit='0';
$PaymentReceiptTypeID='0';
$CalculationMethodID='0';
$AttendanceTypeID='0';
$VoucherNature='0';
$Note='';
$InstrumentID='0';
$TaxAccountID='0';
$TaxClassID='0';
$TaxTypeID='0';
$TaxRate='0';
$IsTaxable='0';
$TaxableAmount='0';
$ServiceChargeAccountID='0';
$ServiceChargeRate='0';
$ServiceChargableAmount='0';
$DiscountAccountID='0';
$DiscountID='0';
$DiscountRate='0';
$DiscountValue='0';
$HasItem='0';
$CostCategoryID='0';
$CostCentreID='0';
$GodownID='0';
$IsClosed='0';
$IsSaved='0';
$IsDeleted='0';
$IsEditable='0';
$CustomerID='0';
$BillingName='';
$BillingAddressID='0';
$SalesTaxNo='';
$DeliveryDetailsID='0';
$PaymentMode='0';
$IsCancelled='0';
$AdjustMethodID='0';
$CancelledBy='0';
$CancelTime='';
$CancelNote='';
$EntryPointID='0';
$MacID='0';
$CreateEntryPointID='0';
$ModifyEntryPointID='0';
$ModifyMacID='0';
$CreatedBy='0';
$ModifiedBy='0';
$ModifyTime='';
$CreateTime='';
$PriceLevelID='0';
$DesignationID='0';
$Grade='0';
$Percentage='0';
$DrCr='0';
$HasParent='0';
$HasChild='0';
$ParentControlID='0';
$ChildControlID='0';
$ControlID='0';
$SourceGodownID='0';
$DestinationGodownID='0';
$SourceOfficeID='0';
$DestinationOfficeID='0';



$ID=$VoucherDetailsID_v;
 $VoucherID=$VoucherID_v;
 $EntryIndex=$EntryIndex_v;
$AccountTypeID=$AccountTypeID_v;
$AccountID=$AccountID_v;
$Debit=$Debit_v;
$Credit=$Credit_v;
$DrCr=$DrCr_v;
$CalculationMethodID=$CalculationMethodID_v;
$Percentage=$Percentage_v;
$IsTaxable=$IsTaxable_v;
$IsEditable=0;
//$Handle->VoucherType($VoucherTypeID);
 
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		
		$VoucherDetailsID=$Handle->VoucherDetailsUpdate($ID, $EntryIndex, $transactionid, $VoucherID, $AccountTypeID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate,$IsTaxable, $TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDeleted, $IsEditable, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID);
		return $VoucherDetailsID;
		}
	 
	
?>