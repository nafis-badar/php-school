<?php
//$document_root = $_SERVER['DOCUMENT_ROOT'];
//echo ("'".MOD_PATH.'MOD.VoucherMaster.php'."'");
//include_once ('MOD.VoucherMaster.php');
 
  include_once 'MOD.VoucherMaster.php';
 // checkNum(2);
  //If the exception is thrown, this text will not be shown
 // echo 'If you see this, the number is 1 or below';
 
 
class VoucherMaster extends MODVoucherMaster
{
function CreateVoucherSession($VoucherID,$VoucherTypeID)
{
	$ID='0';
	$VoucherID=$VoucherID;
	$VoucherTypeID=$VoucherTypeID;
	$IsClosed='0';
	


	$UserID=$_SESSION['UserID'];
	$CloseTime= date("Y-m-d H:i:s");
	$ModifyTime=date("Y-m-d H:i:s"); 
	$ModifiedBy=$_SESSION['UserID'];
	$CreatedBy= $_SESSION['UserID'];
	$CreateTime= date("Y-m-d H:i:s");
	$SessionID=$this->InsertVoucherSession($ID, $UserID, $VoucherTypeID, $VoucherID, $IsClosed, $CreateTime, $CloseTime);
	return $SessionID;
}
function GetVoucherSession($VoucherTypeID)
{
		$ID='0';
		$VoucherID='0';
		$VoucherTypeID=$VoucherTypeID;
		$IsClosed='0';
		$UserID=$_SESSION['UserID'];
		$CloseTime= date("Y-m-d H:i:s");
		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		$SessionID=$this->QueryVoucherSessionID($ID, $UserID, $VoucherTypeID, $VoucherID, $IsClosed, $CreateTime, $CloseTime);
		return $SessionID;
}	
function getVoucherIDFromSession($SessionID)
{
	/*$ID='0';
	$VoucherID='0';
	$VoucherTypeID=$VoucherTypeID;
	$IsClosed='0';
	$UserID=$_SESSION['UserID'];
	$CloseTime= date("Y-m-d H:i:s");
	$ModifyTime=date("Y-m-d H:i:s"); 
	$ModifiedBy=$_SESSION['UserID'];
	$CreatedBy= $_SESSION['UserID'];
	$CreateTime= date("Y-m-d H:i:s");*/
	$VoucherID=$this->QueryVoucherIDFromSession($SessionID);
	return $VoucherID;
}
function getWhichEntry($VoucherID)
{
  $WhichEntry=$this->QueryWhichEntry($VoucherID);
  return $WhichEntry;
}
		
function setWhichEntry($VoucherID,$WhichEntry)
{
$WhichEntry=$this->UpdateWhichEntry($VoucherID,$WhichEntry);
return $WhichEntry;
}
function GetAccountName($AccountID)
{
	return $this->QueryAccountName($AccountID);	
}
		
function CreateCart()
{
	$ID='0';
	$OfficeID='0';
	$CreatedBy='';
	$CreateTime='';
	$ModifyBy='';
	$ModifyTime='';
	$TransactionID='0';
	$CartDate='';
	$InventoryNature='0';
	$EffectInventoryValue='0';
	$VoucherID='0';
	$VoucherDetailsID='0';
	
	$CartDate=date("Y-m-d"); 
	$ModifyTime=date("Y-m-d H:i:s"); 
	$ModifiedBy=$_SESSION['UserID'];
	$CreatedBy= $_SESSION['UserID'];
	$CreateTime= date("Y-m-d H:i:s");

	$CartID=$this->CartInsert($ID, $OfficeID, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime, $TransactionID, $CartDate, $InventoryNature, $EffectInventoryValue, $VoucherID, $VoucherDetailsID);
	return $CartID;

	}
function CreateVoucherMaster($VoucherTypeID_V,$VoucherCategoryID_V,$CartID_V)
{
		$ID='0';

$RefVoucherID='0';
$AssignmentID='0';
$VoucherNo='';
$VoucherCategoryID='0';
$VoucherTypeID='0';
$VoucherDate='';
$TestDate='';
$ActiveDate='';
$TargetDate='';
$DocumentNo='';
$InventoryNature='0';
$IsEffectInventoryValue='0';
$AccountsNature='0';
$IsEffectLedgerValue='0';
$PayrollNature='0';
$IsEffectPayrollValue='0';
$VoucherNature='0';
$IsOptional='0';
$Note='';
$Signatory='';
$IsMfgJournal='0';
$HasItem='0';
$IsClosed='0';
$IsSaved='0';
$IsDelete='0';
$IsCancelled='0';
$CancelledBy='0';
$CancelTime='';
$CancelNote='';
$OfficeID='0';
$MacID='0';
$FiscalYearID='0';
$CalenderYearID='0';
$MonthID='0';
$DateID='0';
$CompanyID='0';
$AppRegistrationID='0';
$CreateOfficeID='0';
$ModifyOfficeID='0';
$ModifyMacID='0';
$CreatedBy='0';
$ModifiedBy='0';
$ModifyTime='';
$CreateTime='';
$PriceLevelID='0';
$DrCr='0';
$ShowDiscount='0';
$TaxablePeritem='0';
$EmployeeID='0';
$CPID='0';
$CartID='0';
$CartDetailsID='0';
$IsVerified='0';
$VerifiedBy='0';
$VerifiedTime='';
$VerifyNote='';
$DebitAccountID='0';
$CreditAccountID='0';
$BillingAddressID='0';
$ShippingAddressID='0';
$PDID='0';
$PatientID='0';
$DoctorID='0';
$AccountID='0';
$HasCreditNote='0';
$HasDebitNote='0';
$WhichEntry='1';
$ItemBatchCheckID='1';
$ItemPriceTypeID=0;

//ID, VoucherType, Alias, Name, PrintName, OptionalPrintName, CreatedBy, CreateModifyTime, Description, MID, IsMaster, ClassName, ReportClassName, VoucherCategoryID, IsManufacturingJournal, LedgerHead, GroupHead, ProcedureTypeID, AccountsNature, IsEffectLedgerValue, InventoryNature, IsEffectInventoryValue, PayrollNature, IsEffectPayrollValue, IsOptional, RefVoucherTypeID, TrackDownInventory
$VoucherTypeInfo=$this->VoucherType($VoucherTypeID_V);
//print_r($VoucherTypeInfo);
$Alias='NEW';
if(count($VoucherTypeInfo,0)>0)
{
$IsMfgJournal=$VoucherTypeInfo[0]['IsManufacturingJournal'];
$InventoryNature=$VoucherTypeInfo[0]['InventoryNature'];
$IsEffectInventoryValue=$VoucherTypeInfo[0]['IsEffectInventoryValue'];
$AccountsNature=$VoucherTypeInfo[0]['AccountsNature'];
$IsEffectLedgerValue=$VoucherTypeInfo[0]['IsEffectLedgerValue'];
$PayrollNature=$VoucherTypeInfo[0]['PayrollNature'];
$IsEffectPayrollValue=$VoucherTypeInfo[0]['IsEffectPayrollValue'];
$VoucherNature=$VoucherTypeInfo[0]['VoucherNature'];
$IsOptional=$VoucherTypeInfo[0]['IsOptional'];
$Alias=$VoucherTypeInfo[0]['Alias'];
$ItemBatchCheckID=$VoucherTypeInfo[0]['ItemBatchCheckID'];
$ItemPriceTypeID=$VoucherTypeInfo[0]['ItemPriceTypeID'];
}
//echo $InventoryNature;
$VoucherDate=date("Y-m-d");
$VoucherTypeID=$VoucherTypeID_V;
$NO=$this->GetVoucherNo($VoucherTypeID,$VoucherDate);
$VoucherNo=$NO;
$DocumentNo=$Alias.$NO.'-NEW[ DRAFT ]';
$VoucherCategoryID=$VoucherCategoryID_V;
$CartID=$CartID_V;

		$ModifyTime=date("Y-m-d H:i:s"); 
		$ModifiedBy=$_SESSION['UserID'];
		$CreatedBy= $_SESSION['UserID'];
		$CreateTime= date("Y-m-d H:i:s");
		
		$VoucherID=$this->VoucherMasterInsert($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCr, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote,$WhichEntry,$ItemBatchCheckID,$ItemPriceTypeID);
		return $VoucherID;
		}
	
function getVoucherMaster($VoucherID)
{
		//echo $VoucherID;
		$VoucherMasterInfo=$this->QueryVoucherMaster($VoucherID);
		return $VoucherMasterInfo;
		}

/*function getVoucherNo($VoucherID)
{
	return 'Temp'.$VoucherID;
}*/
function getVoucherDate($VoucherID)
{
	return date("d-m-Y");

	}
function	getCartID($VoucherID){
		$CartID =$this->QueryCartID($VoucherID);
		if ($CartID==0){
			
			}
		else
		{
			return $CartID;
			}
	 }
function  GetCartDetails($CartID)
		 {
			 return $this->QueryCartDetails($CartID);
			 
			 }
			 
function  	 GetAccountDetails($VoucherID,$AccountTypeID){
		return $this->QueryAdditionalAccounts($VoucherID,$AccountTypeID);
		 	 
	 }
function GetAccountsNature($VoucherTypeID)
{
	return $this->QueryAccountsNature($VoucherTypeID);
	}
function GetVoucherType($VoucherTypeID)
{
	return $this->QueryVoucherType($VoucherTypeID);
}

function GetTVTID($VoucherTypeID)
{
	// echo $VoucherTypeID;
	return $this->QueryTVTID($VoucherTypeID);
	//echo $ab;
	//return $ab;
}
function GetInventoryVoucherTypeID($VoucherTypeID)
{
	return $this->QueryInventoryVoucherTypeID($VoucherTypeID);
}
function GetReturnVoucherTypeID($VoucherTypeID)
{
	return $this->QueryReturnVoucherTypeID($VoucherTypeID);
}
function EntryPanel_Product($MODE,$a,$SL_NO,$ID,$CartID)
{
	 //$handle= new Purchase();
$CartDetailsID=$ID;
$EntryIndex='';
//$CartID='0';
$TestDate='';
$ReportDate='';
$CollectionCenterID='0';
$LabID='0';
$TransactionID='0';
$VoucherID='0';
$DocumentNo='';
$ItemID='0';
$ItemGroupID='0';
$ItemCategoryID='0';
$PrimaryUnitID='0';
$SecondaryUnitID='0';

$MRP=0;
$ItemCost='0';
$Price='0';
$BillingQuantity='1';
$ActualQuantity='1';
$PrimaryRate='0';
$SecondaryRate='0';
$DiscountPercentage='0';
$PrimaryDiscountRate='0';
$SecondaryDiscountRate='0';

$CGSTPercentage=0;
$SGSTPercentage=0;
$CGST=0;
$SGST=0;
$Amount='0';
$CreatedBy='0';
$CreateTime='';
$ModifyBy='0';
$ModifyTime='';
$IsCancelled='';
$CancellationRequestBy='0';
$CancellationRequestTime='';
$CancellationConfirmBy='0';
$CancellationConfirmTime='';
$IsDeleted='0';
$IsEditable='0';

$DisplayQuantity='1';
$DisplayItemCost='0.00';
$DisplayMRP='0.00';
$UnitAlias='';
if ($CartDetailsID>0)
{
	$CartDetails=$this->QueryCartDetailsByID($CartDetailsID);
	$CartDetailsID=$CartDetails[0]['ID'];
	$EntryIndex=$CartDetails[0]['EntryIndex'];
	$CartID=$CartDetails[0]['CartID'];
	$TestDate=$CartDetails[0]['TestDate'];
	$ReportDate=$CartDetails[0]['ReportDate'];
	$CollectionCenterID=$CartDetails[0]['CollectionCenterID'];
	$LabID=$CartDetails[0]['LabID'];
	$TransactionID=$CartDetails[0]['TransactionID'];
	$VoucherID=$CartDetails[0]['VoucherID'];
	$DocumentNo=$CartDetails[0]['DocumentNo'];
	$ItemID=$CartDetails[0]['ItemID'];
	$ItemGroupID=$CartDetails[0]['ItemGroupID'];
	$ItemCategoryID=$CartDetails[0]['ItemCategoryID'];
	$PrimaryUnitID=$CartDetails[0]['PrimaryUnitID'];
	$SecondaryUnitID=$CartDetails[0]['SecondaryUnitID'];
	$MRP=$CartDetails[0]['MRP'];
	$ItemCost=$CartDetails[0]['ItemCost'];
	$Price=$CartDetails[0]['Price'];
	$BillingQuantity=$CartDetails[0]['BillingQuantity'];
	$ActualQuantity=$CartDetails[0]['ActualQuantity'];
	$PrimaryRate=$CartDetails[0]['PrimaryRate'];
	$SecondaryRate=$CartDetails[0]['SecondaryRate'];
	$DiscountPercentage=$CartDetails[0]['DiscountPercentage'];
	$PrimaryDiscountRate=$CartDetails[0]['PrimaryDiscountRate'];
	$SecondaryDiscountRate=$CartDetails[0]['SecondaryDiscountRate'];
	$CGSTPercentage=$CartDetails[0]['CGSTPercentage'];
	$SGSTPercentage=$CartDetails[0]['SGSTPercentage'];
	$CGST=$CartDetails[0]['CGST'];
	$SGST=$CartDetails[0]['SGST'];
 
	$Amount=$CartDetails[0]['Amount'];
	$CreatedBy=$CartDetails[0]['CreatedBy'];
	$CreateTime=$CartDetails[0]['CreateTime'];
	$ModifyBy=$CartDetails[0]['ModifyBy'];
	$ModifyTime=$CartDetails[0]['ModifyTime'];
	$IsCancelled=$CartDetails[0]['IsCancelled'];
	$CancellationRequestBy=$CartDetails[0]['CancellationRequestBy'];
	$CancellationRequestTime=$CartDetails[0]['CancellationRequestTime'];
	$CancellationConfirmBy=$CartDetails[0]['CancellationConfirmBy'];
	$CancellationConfirmTime=$CartDetails[0]['CancellationConfirmTime'];
	$IsDeleted=$CartDetails[0]['IsDeleted'];
	$IsEditable=$CartDetails[0]['IsEditable'];

	$UnitAlias=$this->QueryUnitAliasByID($PrimaryUnitID);
	echo $PrimaryUnitID;
	$DisplayMRP=$MRP;
	$DisplayQuantity=$BillingQuantity;
	$DisplayItemCost=$ItemCost;
	/*
	$DisplayMRP=$MRP.'/'.$UnitAlias;
	$DisplayQuantity=$BillingQuantity.'/'.$UnitAlias;
	$DisplayItemCost=$ItemCost.'/'.$UnitAlias;*/
	}
 	?>
    
    	 <tr style="padding:1px;">
            <td style="border-right:3px double rgba(215,106,108,1.00);border-left:3px solid rgba(235,106,108,1.00); ">
                <span class="" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset;">
                <?php //echo ($a+1); ?>
      			</span>
                <input type ="hidden" name="CartDetailsID" id="CartDetailsID" value="<?php echo $CartDetailsID;?>" >
            </td>
             
            <td style="">
				<div  style=" padding:0px 3px; text-align:left " >
                    <select name="ItemID" id="ItemID" class="form-control" ><!--  -->
                            <option style="text-align:center;"  value="0" 
							<?php  if($ItemID==0) echo 'selected= "selected"'; ?>  >Select Item</option>
                            <?php
							$sql="select ID,Name from tbl_item ";
							if($CartDetailsID==0)
							{
                            $sql.=" where ID not in(Select ItemID from tbl_cartdetails where CartID='$CartID' and BillingQuantity<>0 and IsDeleted=0) ";
							}
							else
							{
							$sql.=" where ID not in(Select ItemID from tbl_cartdetails where CartID='$CartID' and ID<>$CartDetailsID  and BillingQuantity<>0 and IsDeleted=0) ";	
							}
                             $result=$this->runQuery($sql);
                            for($i=0; $i<count($result,0); $i++)
                            {
                                $names[]=$result[$i]["Name"];
                                $id[]=$result[$i]["ID"];
                            ?>
                                <option style="text-align:center;" 
                                <?php  if($ItemID==$result[$i]['ID']) echo 'selected= "selected"'; ?> 
                                 value="<?php echo $result[$i]["ID"]?>"><?php echo $result[$i]["Name"]; ?></option>
                             
                            <?php 
                            }
                            ?>
                    </select>
                    <input type ="hidden" name="PrimaryUnitID" id="PrimaryUnitID" value="<?php echo $PrimaryUnitID;?>" >
                    <input type ="hidden" name="SecondaryUnitID" id="SecondaryUnitID" value="<?php echo $SecondaryUnitID;?>" >
				</div>
            </td>
            <td>
            <?php echo "A".$UnitAlias;?>
            </td>
        	<td style="">
            <div    style=" padding:0px 3px; text-align:left " > 
            <input type="hidden"    id="U" value=""> 
                	<input type="hidden"  onKeyPress="return isNumberKey(event)"  class="form-control" id="BillingQuantity"
                     value="<?php echo $BillingQuantity;?>"  
                    	style="text-align:center;" 
                       onChange	="calculate_item();" onKeyUp="ChangeDisplayQuantity(this.value);"  onBlur="ShowDisplayQuantity();"> 
                        
                            <input type="text"  class="form-control" id="DisplayQuantity" value="<?php echo $DisplayQuantity;?>" style="text-align:center;"   
                            onFocus="HideDisplayQuantity();">
                            
                       <input type="hidden"  id="ActualQuantity" value="<?php echo $ActualQuantity;?>">
                </div> 
            </td>
              <td style="">
                <div    style=" padding:0px 3px; text-align:left; display:inline; " >  
                	<input type="hidden" onKeyPress="return isNumberKey(event)" class="form-control rs" id="MRP" value="<?php echo $MRP;?>"   
                            onChange="calculate_item();" onKeyUp="ChangeDisplayMRP(this.value);" onBlur="ShowDisplayMRP();">  
                            
                     <input type="text"  class="form-control rs" id="DisplayMRP" value="<?php echo $DisplayMRP;?>" style="text-align:right;"   
                             onFocus="HideDisplayItemCost();">
                            
                </div>
       		</td>
            <td style="">
                <div    style=" padding:0px 3px; text-align:left; display:inline; " >  
                	<input type="hidden" onKeyPress="return isNumberKey(event)" class="form-control rs" id="ItemCost" value="<?php echo $ItemCost;?>"   
                            onChange="calculate_item();" onKeyUp="ChangeDisplayItemCost(this.value);" onBlur="ShowDisplayItemCost();">  
                            
                     <input type="text"  class="form-control rs" id="DisplayItemCost" value="<?php echo $DisplayItemCost;?>" style="text-align:right;"   
                             onFocus="HideDisplayItemCost();">
                          <input type="hidden" id="Price" value="<?php echo $Price;?>">  
                </div>
       		</td>
            
            <td style="">
            	<div    style=" padding:0px 3px; text-align:left " >  
                	<input type="text" onKeyPress="return isNumberKey(event)"  class="form-control rs" id="DiscountPercentage" value="<?php echo $DiscountPercentage;?>"   
                           onChange="calculate_item();" onKeyUp="calculate_item();">
                     <input type="hidden" id="PrimaryDiscountRate" value="<?php echo $PrimaryDiscountRate;?>"> 
                      <input type="hidden" id="SecondaryDiscountRate" value="<?php echo $SecondaryDiscountRate;?>"> 
                </div>
            </td>
             <td style="">
            	<div    style=" padding:0px 3px; text-align:left " >  
                	<input type="text" onKeyPress="return isNumberKey(event)"  class="form-control rs" id="CGSTPercentage" value="<?php echo $CGSTPercentage;?>"   
                           onChange="calculate_item();" onKeyUp="calculate_item();">
                      
                </div>
            </td>
            <td style="">
            	<div    style=" padding:0px 3px; text-align:left " >  
                	<input type="text" onKeyPress="return isNumberKey(event)"  class="form-control rs" id="CGSTPercentage" value="<?php echo $CGSTPercentage;?>"   
                           onChange="calculate_item();" onKeyUp="calculate_item();">
                     
                </div>
            </td>
            <td style=" ">
            <div    style=" padding:0px 3px; " >  
                	<input type="text"  class="form-control rs" id="Amount" value="<?php echo $Amount;?>" style="text-align:right; background-color:rgba(255,255,255,1.00); cursor:text;" onChange="calculate_item();" onKeyUp="calculate_item();" onKeyPress="AddToCartDetails(<?php echo $CartDetailsID; ?>,event);" readonly>
                </div>
        		
        	</td>
            <td style="text-align:center;border-left:3px double rgba(235,106,108,1.00); ">
            <!--span onClick="AddToCartDetailsbyclick(<?php echo $CartDetailsID; ?>);" class="glyphicon glyphicon-ok-circle  btn btn-primary"  
                style="color:rgba(4,98,21,1.00); font-size:16px; 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:2px 25px;"></span-->
                <!--button onClick="AddToCartDetails(<?php echo $CartDetailsID; ?>,event);" class="btn btn-success" id="ItemEntryConfirm" 
                style=" visibility:hidden;  width:98%; 
                border:1px outset rgba(22,200,255,1.00); border-radius:0px; padding:4px 20px; text-align:center;">
                Item <i class="fa fa-arrow-right"></i> <strong> Entry</strong></button-->
                
                <!--button onClick="setWhichEntry(3);" class="btn " id="ItemEntryDone" 
                style=" visibility:hidden;  width:98%; 
                border:1px outset rgba(22,200,255,1.00); border-radius:0px; padding:4px 20px; text-align:center;">
                Item <i class="fa fa-arrow-right"></i> <strong> Accounts</strong></button-->
            </td>
   </tr>
   <!--tr id="BatchEntry">
   		<td style="border-right:3px double rgba(215,106,108,1.00);border-left:3px solid rgba(235,106,108,1.00); ">
                <span class="" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset;">
                <?php  echo 'BE'; ?>
      			</span>
                <input type ="hidden" name="CartDetailsID" id="CartDetailsID" value="<?php echo $CartDetailsID;?>" >
            </td>
   </tr-->
   
<?php 
}
 
function ShowPanel_Product($VoucherID,$CartID,$MODE,$a,$SL_NO,$CartDetailsID,$ItemID,$BillingQuantity,$ActualQuantity,$PrimaryUnitID,$SecondaryUnitID,$MRP,$PrimaryRate,$SecondaryRate,$DiscountPercentage,$PrimaryDiscountRate,$SecondaryDiscountRate,$CGSTPercentage,$SGSTPercentage,$CGST,$SGST,$Amount,$IsDeleted,$IsEditable)
{
	echo $Amount;
	$sql="SELECT * from tbl_itembatch where CartDetailsID='$CartDetailsID'";
	// echo $Amount;
	$GetItemBatchInfo= $this->runQuery($sql);
	$BatchCount=count($GetItemBatchInfo,0);
	//$Unit=$Handle->GetUnitByID($UnitID);
     //echo $BatchCount;
	 
	?>
    
    	<tr style=" font-size:12px; font-weight:bold; border:3px outset rgba(151,148,148,0.24);">
            <td rowspan="<?php echo ($BatchCount+1);?>" style=" border:none; border-right:3px double rgba(215,106,108,1.00); padding:1px 0px 0px 1px; text-align:center;">
                <span class="" style="color:rgba(0,78,236,1.00); font-weight:bold;  ">
                	<?php  echo $a; ?>
      			</span>
            </td>
            <td style="padding-top:1px;">
           		<div style=" text-align:left; cursor:pointer; color:rgba(19,66,216,1.00);"  id="divaccount">
                    <a href="javascript:void(0)" class="btn btn-link" style=" color:rgba(13,120,248,1.00)!important; padding-left:3px; padding-top:3px; text-align:left; font-weight:bold; " 
                    onClick="EnableItemEditMODE(<?php echo  $ItemID; ?>,<?php echo  $CartID; ?>,<?php echo  $CartDetailsID; ?>);">
                    <?php 
                    //$accid=$AccountID;
					$sql="SELECT ID,Name FROM tbl_item where id=$ItemID limit 1";
                    $getiteminfo = $this->runQuery($sql);
                    echo   $getiteminfo[0]["Name"] ; 
                    //echo $sql;
                    ?>
                	</a>
                    <!--div style="padding-left:20px; z-index:0; height:1px; visibility:hidden;">
                        <table style="width:100%; font-size:10px; padding-left:20px;">
                            <tr>
                                <td style="width:10%;">Batch No.</td><td style="width:15%;">
                                <?php echo "Batch No"; ?></td>
                                <td colspan="2" rowspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Mfg. Date</td><td><?php echo "Mfg Date"; ?></td>
                            </tr>
                            <tr>
                                <td>Exp.</td><td><?php echo "Exp Date"; ?></td>
                            </tr>
                        </table>
            		</div-->
                </div>
                
            </td>
            <td style="padding-top:1px; text-align:center;">
              <?php
                            $sql="select ID,Name Name from tbl_unit where ID=$SecondaryUnitID";
                           // echo $sql;
                            $result=$this->runQuery($sql);
                             
                               $Unit= $result[0]["Name"];
                                $id[]=$result[0]["ID"];
								echo $Unit;
                            ?>
            </td>
        	<td style="padding-top:1px; text-align:center;">
            <div class="qty"    style=" " ><?php echo $BillingQuantity; ?></div> 
            </td>
             <td style="padding-top:1px; text-align:right;"><?php echo $MRP;?></td>
            <td style="padding-top:1px; text-align:right;">
                <div   class="rs"  style="  text-align:right;" >  
                	 <?php echo sprintf("%0.2f", $PrimaryRate ); ?>
                </div>
       		</td>
            <td style="padding-top:1px;">
            	<div   class="rs"  style=" padding:5px 3px; text-align:right; " >  
                	<?php echo sprintf("%0.2f", $DiscountPercentage);  ?><span style="font-size:12px;">&nbsp;</span>
                </div>
            </td>
              <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            	<div   class="rs"  style="   text-align:right; " >  
                	<?php echo sprintf("%0.2f", $CGSTPercentage);  ?><span style="font-size:12px;">&nbsp;</span>
                </div>
            </td>
            <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            	<div   class="rs"  style="   text-align:right; " >  
                	<?php echo sprintf("%0.2f", $SGSTPercentage);  ?><span style="font-size:12px;">&nbsp;</span>
                </div>
            </td>
            <td style="padding-top:1px; padding-right:3px; ">
            <div    class="rs" style=" padding:5px px 0px 0px;text-align:right; font-weight:bold;" >  
                	<?php echo sprintf("%0.2f", $Amount); ?> 
                </div>
        		
        	</td>
            <td rowspan="<?php echo ($BatchCount+1);?>" 
            style="   padding:1px; padding-left:10px; text-align:center; border-left:3px double rgba(215,106,108,1.00);">
            <!--span class="btn btn-primary glyphicon glyphicon-edit" 
            style="color:rgba(255,101,21,1.00);  border-radius:5px;  font-size:16px!important; padding:2px 25px; "
                onClick="EnableItemEditMODE(<?php echo  $ItemID; ?>,<?php echo  $CartID; ?>,<?php echo  $CartDetailsID; ?>);"></span-->
                <!--span class="btn btn-primary glyphicon glyphicon-remove-circle"  
                style="color:rgba(54,68,96,1.00);   border-radius:5px;  font-size:16px!important; padding:2px 20px;"
                onClick="RemoveItemEntry(<?php echo  $CartDetailsID; ?>);"></span-->
            </td>
    	</tr>
        <?php
        	 for($b=0;$b<$BatchCount;$b++)
			{
				?>
                <tr style="background-color:rgba(245,232,200,0.60); font-size:10px; border:1px solid rgba(224,207,171,0.50);">
                <td style="padding-left:20px; margin-left:20px;  ">
                 <div style="width:100%; margin-left:10%;">
                 <div  style="width:150px;  display:inline-block;"><strong>Storage:</strong>
				 <?php echo $this->QueryAccountName($GetItemBatchInfo[$b]['StorageID']);?></div>
                <div  style="width:80px;  display:inline-block;"><strong>BATCH:</strong> <?php echo $GetItemBatchInfo[$b]['BatchNo'];?></div>
                <span  style="width:70px;  display:inline-block;"><strong>Mfg.:</strong><?php echo $GetItemBatchInfo[$b]['MfgDate'];?></span>
                <span  style="width:70px;  display:inline-block;"><strong>Exp.:</strong><?php echo $GetItemBatchInfo[$b]['ExpDate'];?></span>
                 </div>
                 </td>
                 <td style="text-align:center;"><?php echo  $Unit;?></td>
                <td style="text-align:center;"><?php echo $GetItemBatchInfo[$b]['Quantity'];?></td>
                <td style="text-align:right;"><?php echo $GetItemBatchInfo[$b]['MRP'];?></td>
                
                <td style="text-align:right;"><?php echo number_format((float)$GetItemBatchInfo[$b]['Rate'], 2, '.', '');?></td>
                 <td style="text-align:right;">
				 <?php echo number_format((float)$GetItemBatchInfo[$b]['DiscountPercentage'], 2, '.', '');?></td>
                 <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            	<div   class="rs"  style="   text-align:right; " >  
                <?php echo number_format((float)$GetItemBatchInfo[$b]['CGSTPercentage'], 2, '.', '');?>
                	 
                </div>
            </td>
            <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            	<div   class="rs"  style="   text-align:right; " >  
                	<?php echo number_format((float)$GetItemBatchInfo[$b]['SGSTPercentage'], 2, '.', '');?>
                    <span style="font-size:12px;">&nbsp;</span>
                </div>
            </td>
                <td style="text-align:right; padding-right:5px;"><?php echo number_format((float)$GetItemBatchInfo[$b]['Amount'], 2, '.', '');?></td>
                </tr>
			<?php
				
			} 
		
		?>
        
	 
<?php 
}
function editpanel_product($MODE,$a,$SL_NO,$CartDetailsID,$ItemID,$BillingQuantity,$ActualQuantity,$PrimaryUnitID,$SecondaryUnitID,$PrimaryRate,$SecondaryRate,$DiscountPercentage,$PrimaryDiscountRate,$SecondaryDiscountRate,$Amount,$IsDeleted,$IsEditable)
{
	 
	?>
     <td style="border-right:3px double rgba(215,106,108,1.00); ">
                <span class="" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset;">
                <?php echo ($a+1); ?>
      			</span>
            </td>
             
            <td style="">
				<div  style=" padding:3px 3px; text-align:left " >
                    <select name="ItemID" id="ItemID" class="form-control"><!--  -->
                            <option style="text-align:center;"  value="0" selected="Selected"  >Select Item</option>
                            <?php
                            $sql="select ID,Name from tbl_item ";
                             $result=$this->runQuery($sql);
                            for($i=0; $i<count($result,0); $i++)
                            {
                                $names[]=$result[$i]["Name"];
                                $id[]=$result[$i]["ID"];
                            ?>
                                <option style="text-align:center;" 
                                <?php  if($ItemID==$result[$i]['ID']) echo 'selected= "selected"'; ?> 
                                 value="<?php echo $result[$i]["ID"]?>"><?php echo $result[$i]["Name"]; ?></option>
                             
                            <?php 
                            }
                            ?>
                    </select>
                    <input type ="hidden" name="UnitID" id="UnitID" value="<?php echo $PrimaryUnitID; ?>" >
				</div>
            </td>
        	<td style="">
            <div    style=" padding:3px 3px; text-align:left " > 
            <input type="hidden"    id="U" value=""> 
                	<input type="hidden"  onKeyPress="return isNumberKey(event)"  class="form-control" id="BillingQuantity" 
                    value="<?php echo $BillingQuantity;?>"  
                    	style="text-align:center;" 
                       onChange	="calculate_item();" onKeyUp="ChangeDisplayQuantity(this.value);"  onBlur="ShowDisplayQuantity();"> 
                        
                            <input type="text"  class="form-control" id="DisplayQuantity" value="1" style="text-align:center;"   
                            onFocus="HideDisplayQuantity();">
                            
                       <input type="hidden"  id="ActualQuantity" value="<?php echo $ActualQuantity;?>">
                </div> 
            </td>
             
            <td style="">
                <div    style=" padding:3px 3px; text-align:left; display:inline; " >  
                	<input type="hidden" onKeyPress="return isNumberKey(event)" class="form-control rs" id="ItemCost" value="<?php echo $PrimaryRate?>"   
                            onChange="calculate_item();" onKeyUp="ChangeDisplayItemCost(this.value);" onBlur="ShowDisplayItemCost();">
                              
                     <input type="text"  class="form-control rs" id="DisplayItemCost" value="0.00" style="text-align:right;"   
                             onFocus="HideDisplayItemCost();">
                          <input type="hidden" id="Price" value="<?php echo $SecondaryRate;?>">  
                </div>
       		</td>
            
            <td style="">
            	<div    style=" padding:3px 3px; text-align:left " >  
                	<input type="text" onKeyPress="return isNumberKey(event)"  class="form-control rs" id="DiscountPercentage" value="<?php echo $DiscountPercentage;?>"   
                           onChange="calculate_item();" onKeyUp="calculate_item();">
                     <input type="hidden" id="PrimaryDiscountRate" value="<?php echo $PrimaryDiscountRate;?>"> 
                      <input type="hidden" id="SecondaryDiscountRate" value="<?php echo $SecondaryDiscountRate;?>"> 
                </div>
            </td>
             
            <td style=" ">
            <div    style=" padding:3px 3px; " >  
                	<input type="text"  class="form-control rs" id="Amount" value="<?php echo $Amount; ?>" style="text-align:right;"
                    onChange="calculate_item();" onKeyUp="calculate_item();" onKeyPress="AddToCartDetails(<?php echo $CartDetailsID; ?>,event);" readonly>
                </div>
        		
        	</td>
            <td style="text-align:center; ">
            <span onClick="AddToCartDetailsbyclick(<?php echo $CartDetailsID; ?>);" class="glyphicon glyphicon-ok-circle  btn btn-primary"  
                style="color:rgba(4,98,21,1.00); font-size:16px; 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:7px 25px;"></span>
                
                <span onClick="setWhichEntry(3);" class="fa fa-ban btn btn-primary"  
                style="color:rgba(255,0,0,1.00); font-size:22px; 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:7px 25px;"></span>
            </td>
<?php 
}
function EntryPanelAccounts($VoucherID,$VoucherTypeID,$MODE,$a,$SL_NO,$ID,$ItemTotal,$CurrentTotal,$IsTaxable=0,$TaxableAmount=0,$DrCr=0,$AccountID=0,$VAmount=0,$Percentage=0,$AccountTypeID=0,$CalculationMethodID=0,$IsDeleted=0,$IsEditable=0)
{
 $Amount=$VAmount;
/* if($DrAmount!=0){$Amount=$DrAmount;}
 if($CrAmount!=0){$Amount=$CrAmount;}*/
 $RateType='hidden';
 $RateReadOnly=0;
 $AmountType='hidden';
 $AmountReadOnly=0;
 if($CalculationMethodID==1){}
 if($CalculationMethodID==2){}
 if($CalculationMethodID==3){$RateReadOnly=1;$RateType='text';$AmountType='text';$AmountReadOnly=1;}
 if($CalculationMethodID==4){$RateType='text';$AmountType='text';$AmountReadOnly=1;}
 if($CalculationMethodID==5){$RateType='hidden';$AmountType='text';}
 if($CalculationMethodID==6){$RateType='text';$AmountType='text';$AmountReadOnly=1;}
 if($CalculationMethodID==7){$RateType='text';$AmountType='text';$AmountReadOnly=1;}
 if($CalculationMethodID==8){$RateType='text';$AmountType='text';$AmountReadOnly=1;}
	?>
     <tr>
    
        	<td style="  text-align:center; 
                                padding:10px 0px; border-right:3px double rgba(235,106,108,1.00);border-left:3px solid rgba(235,106,108,1.00);">
                <span class="" style="background:rgba(12,20,58,0.69); ">
                <?php //echo ($a+1); ?>
      			</span>
            <input type="hidden" id="AdditionalItemTotal" name="AdditionalItemTotal" value="<?php echo $ItemTotal;?>">
            <input type="hidden" id="AdditionalCurrentTotal" name="AdditionalCurrentTotal" value="<?php echo $CurrentTotal;?>">
            <input type="hidden" id="CalculationMethodID" value="<?php echo $CalculationMethodID;?>" >
        <input type="hidden" id="AccountTypeID" value="<?php echo $AccountTypeID;?>" >
            <input type="hidden" id="TaxableAmount" name="TaxableAmount" value="<?php echo $TaxableAmount;?>">
            <input type="hidden" id="IsTaxable" name="IsTaxable" value="<?php echo $IsTaxable;?>">
            </td>
            <td style="padding-left:5px;"  >
                  <select name="AccountID" id="AccountID" class="form-control" ><!--  -->
                            <option style="text-align:left;"  value="0" selected="Selected"  >Select Account Ledger</option>
                            <?php
                            $sql="Select s.AcID ID,s.Name from (
SELECT va.ID, va.AccountTypeID, va.DrCr, va.CalculationMethodID, va.Percentage, va.AcGroupID, va.AccountID, va.IsPermanent, va.VoucherTypeID, va.IsEditable, va.IsDeleted,m.Name,m.ID AcID,m.MID FROM tbl_voucheraccount va
left outer join tbl_master m on m.MID=va.AcGroupID
where va.VoucherTypeID=$VoucherTypeID and ( va.AccountTypeID=3 or va.AccountTypeID=4) and va.AcGroupID!=0
union All
SELECT va.ID, va.AccountTypeID, va.DrCr, va.CalculationMethodID, va.Percentage, va.AcGroupID, va.AccountID, va.IsPermanent, va.VoucherTypeID, va.IsEditable, va.IsDeleted,m.Name,m.ID AcID,m.MID FROM tbl_voucheraccount va
left outer join tbl_master m on m.ID=va.AccountID
where va.VoucherTypeID=$VoucherTypeID and ( va.AccountTypeID=3 or va.AccountTypeID=4) and va.AccountID!=0) s 
 where s.AcID not in(Select AccountID from tbl_voucherdetails where VoucherID='$VoucherID' and ID<>$ID) and s.IsDeleted=0 order by s.AcID";
                             $result=$this->runQuery($sql);
                            for($i=0; $i<count($result,0); $i++)
                            {
                                $names[]=$result[$i]["Name"];
                                $id[]=$result[$i]["ID"];
                            ?>
           <option style="text-align:left;"  value="<?php echo $result[$i]["ID"]?>" 
		   <?php if($AccountID==$result[$i]["ID"]){ echo "selected='Selected'";}?> ><?php echo $result[$i]["Name"]; ?></option>
                             
                            <?php 
                            }
                            ?>
                    </select>
                    
       		</td>
            
          <td style=" text-align:right;">&nbsp;
				
            </td>
            <td style=" text-align:right;">
            <div   style="  ">
            
              <input type="<?php echo $RateType;?>"  class="form-control  rs" id="rate" value="<?php echo $Percentage;?>"   
                    style=" position:relative; text-align:right;  cursor:text;" 
                    <?php if ($RateReadOnly==1){echo 'readonly';}?>
onKeyUp="CalculateAccountRate(this.value,<?php echo $CurrentTotal;?>,<?php echo $TaxableAmount;?>);">
            </div>
				
            </td>
            <td style="  text-align:right;"><div style="   text-align:right; " >
            <?php //echo $DrCr;?>
                    <select style=" width:30px; min-width:50px; border:0px; 
                    color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none; 
   -moz-appearance: none;   appearance: none;  background-image:none!important;  padding: 5px;" 
                    name="DrCr" id="DrCr" class=""   tabindex="-1" >
                    	<option value="0" <?php if($DrCr==0){ echo "selected='Selected'";}?> >   </option>
                        <option value="1" <?php if($DrCr==1){ echo "selected='Selected'";}?>> + </option>
                        <option value="-1" <?php if($DrCr==-1){ echo "selected='Selected'";}?>> - </option>
                    </select> 
                    
				</div>
                </td>
            <td style=" ">
            <div   style="  ">  
                	<input type="<?php echo $AmountType;?>"  class="form-control  rs" id="Amount" value="<?php echo sprintf("%0.2f", $Amount); ?>"   <?php if ($AmountReadOnly==1){echo 'readonly';}?>
                    style=" position:relative; text-align:right;  cursor:text;" 
                    onKeyPress="addtopurchase(<?php echo $ID; ?>,<?php echo $SL_NO; ?>,event);"> 
			</div>
            </td>
            <td style=" text-align:center; border-left:3px double rgba(215,106,108,1.00);">
        		<!--span class=" btn btn-primary glyphicon glyphicon-ok-circle"  onClick="addtopurchase_onclick(<?php echo ($SL_NO+1); ?>,event);"
                style="color:rgba(46,112,19,1.00);  font-size:16px;  padding:1px 5px;"></span-->
                <!--span onClick="setWhichEntry(4);" class="btn btn-primary"  
                style="color:rgba(38,41,51,1.00); font-size:14px; 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:2px 20px;"><strong>Narration</strong>Entry</span-->
        	</td>
     
 </tr>
 <script>
 //document.getElementById("AccountID").focus();
 </script>
<?php 
}
function showpanel_accounts($MODE,$a,$SL_NO,$DrCr,$AccountID,$Percentage,$VAmount,$IsDeleted,$IsEditable,$VoucherDetailsID,$AccountsNature)
{
	 
	?>
	 <tr>
            <td style="border-right:3px double rgba(215,106,108,1.00); " >
                <span  style="color:rgba(90,90,90,1.00); ">
                	<?php //echo $a; ?>
      			</span>
            </td>
             
            <td style="text-align:left; padding:5px 5px 5px 5px;">
            	<div style=" padding-left:7px; text-align:left!important; "  onClick="enableAccountsEditMODE(<?php echo $VoucherDetailsID; ?>);">
                    <a href="javascript:void(0)" class="btn btn-link" style="color:rgba(13,120,248,1.00)!important; font-weight:bold;">
                        <?php 
                        $accid=$AccountID;
                        $getaccountinfo = $this->runQuery("SELECT Name FROM tbl_master where id=$accid limit 1");
                        if ($DrCr==1)
                        {
                            echo  $getaccountinfo[0]["Name"]; 
                        } 
                        else if ($DrCr==-1)
                        {
                            echo  $getaccountinfo[0]["Name"]; 
                        } 
                        ?>
                 </a>
                </div>
            </td>
            <td  style="padding:5px 5px 5px 0px; color:rgba(147,147,147,1.00);">
             
                   
            </td>
             
             <td   style="text-align:right; padding:5px 5px 5px 0px; color:rgba(38,38,38,1.00); font-weight:bold;"><?php echo $Percentage;?>%</td>
            <td    style="padding:10px 0px 10px 0px; color:rgba(147,147,147,1.00); text-align:right;">
                <?php   
                        if ($DrCr==1)
                        {
                            echo '[ + ]'; 
                        }
                        else if ($DrCr==-1)
                        {
                            echo '<label style=" color:rgba(220,100,0,1.00);">[ - ]</label>'; 
                        } 
                        ?>
          </td>
            <td  >
            <div style="text-align:right;   color:rgba(38,38,38,1.00);  font-weight:bold; padding-right:5px;">
              <?php
                    if ($DrCr==1)
                    {
                        echo  '<div style="">'.sprintf("%0.2f", $VAmount).' </div>'; 
                    }
                    else if ($DrCr==-1)
                    {
                        echo  '<div  style="color:rgba(220,100,0,1.00);">('.sprintf("%0.2f", $VAmount).') </div>'; 
                    }
                    ?> 
            </div>
            
            </td>
            <td  style=" text-align:center;border-left:3px double rgba(215,106,108,1.00); ">
           <!-- <span class="btn btn-primary glyphicon glyphicon-edit" style="color:rgba(4,112,0,1.00); font-size:16px;  padding:2px 25px;"
                onClick="enableAccountsEditMODE(<?php echo $VoucherDetailsID; ?>);"></span>
             <span class="btn btn-primary glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); font-size:16px; padding:2px 20px;"
                onClick="removeentry(<?php echo $SL_NO; ?>);"></span>-->
          </td>
 </tr>
        <?php
}
function editpanel_accounts($MODE,$a,$SL_NO,$DrCr,$AccountID,$DrAmount,$CrAmount,$IsDeleted,$IsEditable)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
    <table class="mytable">
    	<tr>
        	<td style="width:5%;">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) inset; float:left;">
           			<?php echo $a; ?>
				</span>
            </td>
            <td style="width:5%;">
            	<div style="   text-align:left; " >
                	<select style=" float:left; width:100%; padding:0px; min-width:50px; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); font-size:14px;" 
                    name="DebitCredit"  id="DebitCredit" class="input-sm" onChange="getDrCr();" onBlur="getDrCr();" autofocus >
						<option value="1" <?php if($DrCr==1) echo "selected='selected'"; ?> >Dr</option>
                        <option value="-1" <?php if($DrCr==-1) echo "selected='selected'"; ?>>Cr</option>
					</select> 
				</div>
            </td>
            <td style="width:50%;">
	            <div    style=" padding-left:10px; text-align:left "  id="divaccount">
                	<div id="SearchFieldContainer" style="z-index:1000;">
                        <div  id="SearchForm">
                            <div id="wrapjsuggest" style="">
                               <?php 
                                    $getaccountinfo = $db_handle->runQuery("SELECT * FROM tbl_master where id=$AccountID limit 1");
                                ?>
                                <input type="text" name="name"   id="SearchBox" class="jsuggest" 
                                onKeyUp="suggestme(this.value,event)" onfocusout="activate(event);" onKeyPress="activate(event);" 
                                value="<?php  echo $getaccountinfo[0]["Name"]; ?>" style="width:250px;  text-transform: uppercase;" autofocus autocomplete="off"/>
                                <span style="font-size:20px;">
                                    <span class="btn btn-lg glyphicon glyphicon-plus " style="color:rgba(255,211,61,1.00);"></span>	
                                    <span class="btn btn-lg glyphicon glyphicon-pushpin" style="color:rgba(17,176,25,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-remove" style="color:rgba(255,97,53,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-search" style="color:rgba(47,158,228,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-exclamation-sign" style="color:rgba(193,193,193,1.00);"></span>
                                </span>
                                <div id="suggestme"  style="z-index:1000;">
                                    <div id="suggestmeList" style="height:0px;style="z-index:1000;""> &nbsp; </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="AccountID" value="<?php  echo $getaccountinfo[0]["ID"]; ?>">
                        <!--input type="button" name="Search" Value="Search" class="mainbutton"/-->	
                    </div>
                </div>
			</td>
			<td style="width:15%;">
            	<div   style="padding-right:20px;  ">  
					<input type="text"  class="input-sm  col-lg-12" id="DrAmount" value="<?php echo $DrAmount;  ?>"  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00);" 
                    onKeyPress="editpurchase(<?php echo ($SL_NO); ?>,event);">
				</div>
            </td>
            <td style="width:15%;">
				<div   style="padding-right:20px;" >  
					<input type="text" class="input-sm col-lg-12" id="CrAmount" value="<?php echo  $CrAmount;  ?>" 
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="editpurchase(<?php echo ($SL_NO); ?>,event);">
                </div>
            </td>
            <td style="width:10%; ">
                <span class="glyphicon glyphicon-ok-circle"  
                style="color:rgba(121,255,116,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"></span>
        	</td>
    	</tr>
	</table>
    <script>
		getDrCr();
	</script>
<?php 
}
function entrypanel_narration($MODE,$a,$SL_NO)
{
	?>
    <table class="mytable">
    	<tr>
        <td colspan="8">
        <textarea>
        
        </textarea>
        </td>
        </tr>
    	
	</table>
<?php 
}
function showpanel($MODE,$a,$SL_NO,$DrCr,$AccountID,$DrAmount,$CrAmount)
{
	?>
	 <table class="mytable">
     	<tr>
            <td style="width:5%;     " >
              <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) inset;"><?php echo  $a; ?></span>
            </td>
            <td style="width:5%;     " >
                <span style=" padding-left:10px; text-align:left;" >
                    <label>
                        <?php   
                        if ($DrCr==1)
                        {
                            echo 'DR'; 
                        }
                        else if ($DrCr==-1)
                        {
                            echo '<label style=" color:rgba(250,250,250,0.7);">CR</label>'; 
                        } 
                        ?>
                     </label> 
                </span>
            </td>
            <td style="width:50%;     " >
                <span  style=" padding-left:40px; text-align:left " >
                    <?php 
                    $accid=$AccountID;
                    $getaccountinfo = $Handle->runQuery("SELECT Name FROM tbl_master where id=$accid limit 1");
                    if ($DrCr==1)
                    {
                        echo  '<label  style=" ">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    else if ($DrCr==-1)
                    {
                        echo  '<label  style=" padding-left:20px; color:rgba(250,250,250,0.7);">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    ?>
                </span>
            </td>
            <td  style="text-align:right; padding:10px 5px 10px 0px; color:rgba(38,38,38,1.00); font-size:16px; font-weight:bold;">
                <span class="  pull-right " style="padding-right:40px;" >
                   <?php
                    if ($DrCr==1)
                    {
                        echo  '<div>'.sprintf("%0.2f", $DrAmount).'</div>'; 
                    }
                    else if ($DrCr==-1)
                    {
                        echo  '<div  style="color:transparent;">'.sprintf("%0.2f", $DrAmount).'</div>'; 
                    }
                    ?>
                </span>    
            </td>
            <td style="width:15%; ">
                <span class="  pull-right " style="padding-right:40px;  color:rgba(250,250,250,0.7);" >
                    <?php
                    if ($DrCr==1)
                    {
                        echo  '<div style="color:transparent;">'.sprintf("%0.2f", $CrAmount).'</div>'; 
                    }
                    else if ($DrCr==-1)
                    {
                        echo  '<div >'.sprintf("%0.2f", $CrAmount).'</div>'; 
                    }
                    ?>
                </span> 
            </td>
            <td style="width:10%; ">
                <span class="btn glyphicon glyphicon-edit" style="color:rgba(195,255,116,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onClick="enableEditMODE(<?php echo $SL_NO; ?>);"></span>
                <span class="btn glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onClick="removeentry(<?php echo $SL_NO; ?>);"></span>
            </td>
		</tr>
	</table>
        <?php
}
function entrypanel($MODE,$a,$SL_NO)
{
	//require_once("app/includes/dbase.php");
	$db_handle = new VoucherMaster();
	?>
    <table class="mytable">
    	<tr>
        
        	<td style="width:5%; border-right:1px  ridge rgba(215,106,108,1.00);">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset; float:left;">
                <?php echo ($a+1); ?>
      			</span>
            </td>
            <td style="width:5%;">
				<div style="   text-align:left; " >
                    <select style=" float:left; width:100%; padding:0px; min-width:50px; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); font-size:14px;" 
                    name="DebitCredit" id="DebitCredit" class="input-sm" 
                    onChange="getDrCr();" onBlur="getDrCr();" autofocus >
                        <option value="1" >Dr</option>
                        <option value="-1" >Cr</option>
                    </select> 
				</div>
            </td>
            <td style="width:50%;">
                <div    style=" padding-left:10px; text-align:left "  id="divaccount">
                    <div id="SearchFieldContainer" style="z-index:1000;">
                        <div  id="SearchForm">
                            <div id="wrapjsuggest" style="">
                                <input type="text" name="name" autocomplete="off"  id="SearchBox" class="jsuggest" 
                                onKeyUp="suggestme(this.value,"purchaseaccount",event)" onfocusout="activate(event);" onKeyPress="activate(event);" 
                                value="<?php //echo $name; ?>" style="width:250px;"/>
                                <span style="font-size:20px;">
                                    <span class="btn btn-lg glyphicon glyphicon-plus " style="color:rgba(255,211,61,1.00);"></span>	
                                    <span class="btn btn-lg glyphicon glyphicon-pushpin" style="color:rgba(17,176,25,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-remove" style="color:rgba(255,97,53,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-search" style="color:rgba(47,158,228,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-exclamation-sign" style="color:rgba(193,193,193,1.00);"></span>
                                </span>
                                <div id="suggestme"  style="z-index:1000;">
                                	<div id="suggestmeList" style="height:0px;style="z-index:1000;""> &nbsp; </div>
                            	</div>
                            </div>
                        </div>
                        <input type="hidden" id="AccountID">
                        <!--input type="button" name="Search" Value="Search" class="mainbutton"/-->	
                    </div>
                </div>
       		</td>
            <td style="width:15%;">
            	<div   style="padding-right:20px;  ">  
                	<input type="text"  class="input-sm  col-lg-12" id="DrAmount" value=""   
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00);
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00);" 
                    onKeyPress="addtopurchase(<?php echo ($SL_NO+1); ?>,event);">
                </div>
            </td>
            <td style="width:15%;">
            	<div   style="padding-right:20px;" >  
                	<input type="text" class="input-sm col-lg-12" id="CrAmount"  value=""  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="addtopurchase(<?php echo ($SL_NO+1); ?>,event);">
                </div>
            </td>
            <td style="width:10%; ">
        		<span class="glyphicon glyphicon-ok-circle"  
                style="color:rgba(121,255,116,1.00); 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"></span>
        	</td>
    	</tr>
	</table>
<?php 
}
function editpanel($MODE,$a,$SL_NO,$DrCr,$AccountID,$DrAmount,$CrAmount,$IsDeleted,$IsEditable)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
    <table class="mytable">
    	<tr>
        	<td style="width:5%;">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) inset; float:left;">
           			<?php echo $a; ?>
				</span>
            </td>
            <td style="width:5%;">
            	<div style="   text-align:left; " >
                	<select style=" float:left; width:100%; padding:0px; min-width:50px; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); font-size:14px;" 
                    name="DebitCredit"  id="DebitCredit" class="input-sm" onChange="getDrCr();" onBlur="getDrCr();" autofocus >
						<option value="1" <?php if($DrCr==1) echo "selected='selected'"; ?> >Dr</option>
                        <option value="-1" <?php if($DrCr==-1) echo "selected='selected'"; ?>>Cr</option>
					</select> 
				</div>
            </td>
            <td style="width:50%;">
	            <div    style=" padding-left:10px; text-align:left "  id="divaccount">
                	<div id="SearchFieldContainer" style="z-index:1000;">
                        <div  id="SearchForm">
                            <div id="wrapjsuggest" style="">
                               <?php 
                                    $getaccountinfo = $db_handle->runQuery("SELECT * FROM tbl_master where id=$AccountID limit 1");
                                ?>
                                <input type="text" name="name" autocomplete="off"  id="SearchBox" class="jsuggest" 
                                onKeyUp="suggestme(this.value,event)" onfocusout="activate(event);" onKeyPress="activate(event);" 
                                value="<?php  echo $getaccountinfo[0]["Name"]; ?>" style="width:250px;"/>
                                <span style="font-size:20px;">
                                    <span class="btn btn-lg glyphicon glyphicon-plus " style="color:rgba(255,211,61,1.00);"></span>	
                                    <span class="btn btn-lg glyphicon glyphicon-pushpin" style="color:rgba(17,176,25,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-remove" style="color:rgba(255,97,53,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-search" style="color:rgba(47,158,228,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-exclamation-sign" style="color:rgba(193,193,193,1.00);"></span>
                                </span>
                                <div id="suggestme"  style="z-index:1000;">
                                    <div id="suggestmeList" style="height:0px;style="z-index:1000;""> &nbsp; </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="AccountID" value="<?php  echo $getaccountinfo[0]["ID"]; ?>">
                        <!--input type="button" name="Search" Value="Search" class="mainbutton"/-->	
                    </div>
                </div>
			</td>
			<td style="width:15%;">
            	<div   style="padding-right:20px;  ">  
					<input type="text"  class="input-sm  col-lg-12" id="DrAmount" value="<?php echo $DrAmount;  ?>"  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00);" 
                    onKeyPress="editpurchase(<?php echo ($SL_NO); ?>,event);">
				</div>
            </td>
            <td style="width:15%;">
				<div   style="padding-right:20px;" >  
					<input type="text" class="input-sm col-lg-12" id="CrAmount" value="<?php echo  $CrAmount;  ?>" 
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="editpurchase(<?php echo ($SL_NO); ?>,event);">
                </div>
            </td>
            <td style="width:10%; ">
                <span class="glyphicon glyphicon-ok-circle"  
                style="color:rgba(121,255,116,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"></span>
        	</td>
    	</tr>
	</table>
    <script>
		getDrCr();
	</script>
<?php 
}
		
}
?>