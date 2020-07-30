<?php
//$document_root = $_SERVER['DOCUMENT_ROOT'];
//echo ("'".MOD_PATH.'MOD.VoucherMaster.php'."'");
//include_once ('MOD.VoucherMaster.php');
 
include_once '../models/MOD.VoucherMaster.php';
// include_once 'CTL.VoucherMaster.php';
 class VoucherMasterPrint extends MODVoucherMaster
{
	function GetVoucherType($VoucherTypeID)
	{
		return $this->QueryVoucherType($VoucherTypeID);
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
	function  	 GetAccountDetails($VoucherID,$AccountTypeID){
		return $this->QueryAdditionalAccounts($VoucherID,$AccountTypeID);
		 	 
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
function showpanel_accounts($MODE,$a,$SL_NO,$DrCr,$AccountID,$Percentage,$VAmount,$IsDeleted,$IsEditable,$VoucherDetailsID,$AccountsNature)
{
	 
	?>
	 <tr>
            <td style="border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00); " >
                <span  style="color:rgba(90,90,90,1.00); ">
                	<?php //echo $a; ?>
      			</span>
            </td>
             
            <td colspan="2" style="text-align:left; border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);  ">
            	<div style=" text-align:right!important; "  onClick="enableAccountsEditMODE(<?php echo $VoucherDetailsID; ?>);">
                    <span   style=" font-weight:bold;">
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
                 </span>
                </div>
            </td>
           
             <td   style="text-align:right; padding:5px 5px 5px 0px; border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00); font-weight:bold;"><?php echo $Percentage;?>%</td>
            <td    style="padding:10px 0px 10px 0px; border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);text-align:right;">
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
            <td style="border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);" >
            <div style="text-align:right;    font-weight:bold; padding-right:5px;">
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
            <td  style=" text-align:center; border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00); ">
           <!-- <span class="btn btn-primary glyphicon glyphicon-edit" style="color:rgba(4,112,0,1.00); font-size:16px;  padding:2px 25px;"
                onClick="enableAccountsEditMODE(<?php echo $VoucherDetailsID; ?>);"></span>
             <span class="btn btn-primary glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); font-size:16px; padding:2px 20px;"
                onClick="removeentry(<?php echo $SL_NO; ?>);"></span>-->
          </td>
 </tr>
        <?php
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
	 function getVoucherMaster($VoucherID)
{
		//echo $VoucherID;
		$VoucherMasterInfo=$this->QueryVoucherMaster($VoucherID);
		return $VoucherMasterInfo;
		}
		function  GetCartDetails($CartID)
		 {
			 return $this->QueryCartDetails($CartID);
			 
			 }
function ShowPanel_Product($VoucherID,$CartID,$MODE,$a,$SL_NO,$CartDetailsID,$ItemID,$BillingQuantity,$ActualQuantity,$PrimaryUnitID,$SecondaryUnitID,$MRP,$PrimaryRate,$SecondaryRate,$DiscountPercentage,$PrimaryDiscountRate,$SecondaryDiscountRate,$CGSTPercentage,$SGSTPercentage,$Amount,$IsDeleted,$IsEditable)
{
	$sql="SELECT * from tbl_itembatch where CartDetailsID='$CartDetailsID'";
	 //echo $sql;
	$GetItemBatchInfo= $this->runQuery($sql);
	$BatchCount=count($GetItemBatchInfo,0);
	//$Unit=$Handle->GetUnitByID($UnitID);
     //echo $BatchCount;
	 
	?>
    
    	<tr   style=" font-size:12px; font-weight:bold; vertical-align:top;">
            <td   rowspan="<?php echo ($BatchCount+1);?>" style=" vertical-align:top; 
            border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);   padding:1px 0px 0px 1px; text-align:center;">
                <span class=" font-weight:bold;  ">
                	<?php  echo $a; ?>
      			</span>
            </td>
            <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            <div class="qty"    style=" text-align:center; " > 
            <?php
                            $sql="select ID,Name Name from tbl_unit where ID=$SecondaryUnitID";
                           // echo $sql;
                            $result=$this->runQuery($sql);
                             
                               $Unit= $result[0]["Name"];
                                $id[]=$result[0]["ID"];
                            ?>
                        
            <?php echo $BillingQuantity; ?>
                	 
                       
                </div> 
            </td>
            <td style=" border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);  ">
           		<div style=" text-align:left; "  id="divaccount">
                    <span href="" class="btn btn-link" style=" padding-left:3px; padding-top:3px; text-align:left; font-weight:bold; " 
                    onClick="EnableItemEditMODE(<?php echo  $ItemID; ?>,<?php echo  $CartID; ?>,<?php echo  $CartDetailsID; ?>);">
                    <?php 
                    //$accid=$AccountID;
					$sql="SELECT ID,Name FROM tbl_item where id=$ItemID limit 1";
                    $getiteminfo = $this->runQuery($sql);
                    echo   $getiteminfo[0]["Name"] ; 
                    //echo $sql;
                    ?>
                	</span>
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
        	<td><?php echo $Unit;?></td>
             <td><?php echo $MRP;?></td>
            <td style="padding-top:1px; border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
                <div   class="rs"  style="  text-align:right;" >  
                	 <?php echo sprintf("%0.2f", $PrimaryRate ); ?>
                </div>
       		</td>
            <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            	<div   class="rs"  style="   text-align:right; " >  
                	<?php echo sprintf("%0.2f", $DiscountPercentage);  ?><span style="font-size:12px;">&nbsp;%</span>
                </div>
            </td>
             <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            	<div   class="rs"  style="   text-align:right; " >  
                	<?php echo sprintf("%0.2f", $CGSTPercentage);  ?><span style="font-size:12px;">&nbsp;%</span>
                </div>
            </td>
            <td style="padding-top:1px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);">
            	<div   class="rs"  style="   text-align:right; " >  
                	<?php echo sprintf("%0.2f", $SGSTPercentage);  ?><span style="font-size:12px;">&nbsp;%</span>
                </div>
            </td>
            <td style="padding-top:1px; padding-right:3px;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00); ">
            <div    class="rs" style=" padding:0px 0px 0px 0px;text-align:right; font-weight:bold;" >  
                	<?php echo sprintf("%0.2f", $Amount); ?> 
                </div>
        		
        	</td>
            <td rowspan="<?php echo ($BatchCount+1);?>" 
            style="   padding:1px; padding-left:10px; text-align:center; border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00); ">
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
                <tr style=" font-size:10px;">
                <td style="text-align:center;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);"><?php echo $GetItemBatchInfo[$b]['Quantity'];?></td>
                <td style="padding-left:20px; border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00); ">
                 <div style="width:100%; margin-left:2%;">
                <div  style="width:80px;  display:inline-block;"><strong>BATCH:</strong> <?php echo $GetItemBatchInfo[$b]['BatchNo'];?></div>
                <span  style="width:70px;  display:inline-block;"><strong>Mfg.:</strong><?php echo $GetItemBatchInfo[$b]['MfgDate'];?></span>
                <span  style="width:70px;  display:inline-block;"><strong>Exp.:</strong><?php echo $GetItemBatchInfo[$b]['ExpDate'];?></span>
                 </div>
                 </td>
                 <td><?php echo $Unit;?></td>
                
                <td style="text-align:right;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);"><?php echo number_format((float)$GetItemBatchInfo[$b]['Rate'], 2, '.', '');?></td>
                <td style="border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00);"></td>
                <td style="text-align:right;border-width:0px 1px; border-style:solid; border-color:rgba(0,0,0,1.00); padding-right:5px;"><?php echo number_format((float)$GetItemBatchInfo[$b]['Amount'], 2, '.', '');?></td>
                </tr>
			<?php
				
			} 
		
		?>
        
	 
<?php 
}
}
?>