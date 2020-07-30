<?php
	//require_once("app/models/dbase.php");
	//$db_handle = new DBController();
class AccountD
{
	function __construct() 
	{
		require_once("app/models/dbase.php");
	}
	
function GetUnitID($ItemID)
{
	$UnitID=0;
	require_once("app/models/dbase.php");
	$db_handle = new DBController();
	$sql="select ID, Name,UnitID from tbl_item where ID=$ItemID";
	$QResult= $db_handle->runQuery($sql); 
	if (sizeof($QResult)>0)
	{
	return $QResult[0]["UnitID"];
	}
}	
	


function EntryPanel($mode,$a,$sl_no,$VoucherTypeID,$SubTotal,$balance)
{
	require_once("app/models/dbase.php");
	$db_handle = new DBController();
	$DrCr=1;
	?>
    <table style=" width: 100%; border-left:  1px solid rgba(134,134,134,1.00);"  >
    	<tr>
        
        	<td style="width:7%; text-align: left; ">
               <input type="hidden" id="balance" name="balance" value="<?php echo $balance; ?>">
                <span class="note" style="">
                <?php echo ($a+1); ?>
      			</span>
            </td>
            <td style="width:8%;  ">
				<div style="text-align:left; " >
                    <select style=" width:95%; padding:0px 1px; 
                     color:rgba(50,50,50,1.00); font-size:12px;  border: none; border-bottom:  :1pa solid rgba(130,130,130,1.00) !important;" 
                    name="DebitCredit" id="DebitCredit" class="input-sm" 
                    onChange="getDrCr(<?php echo $VoucherTypeID;?>);" onBlur="getDrCr(<?php echo $VoucherTypeID;?>);" >
                        <option value="1" >Dr</option>
                        <option value="-1" >Cr</option>
                    </select> 
				</div>
            </td>
            <td style="width:40%; padding-left: 5px; ">
                <div    style="  text-align:left "  id="divaccount">
                 <select id="AccountID" name="AccountID" 
                                     style="width:95%; padding:5px; border: none; border-bottom:  :1pa solid rgba(130,130,130,1.00) !important; font-size: 12px;"
                                     onChange="getCalcMethod(<?php echo $VoucherTypeID;?>,this.value,<?php echo $balance; ?>);" 
                                     onBlur="getCalcMethod(<?php echo $VoucherTypeID;?>,this.value,<?php echo $balance; ?>);"  
                                     >
                  <?php
				 $this->LoadAcPanelByDrCr($VoucherTypeID,1);
					?>
               </select>
                </div>
       		</td>
           
            <td style="width:15%; border-right: 1px solid rgba(144,144,144,1.00);">
            	<div   style="padding-right:2px;  ">  
                	<input type="text"  class="input-sm  col-lg-12" id="DrAmount" name="DrAmount" pattern="[0-9]" value=""   
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.16); color:rgba(30,30,30,1.00);
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00);" 
                    onKeyPress="addtoPOjournal_Event(<?php echo ($sl_no+1); ?>,event,<?php echo $VoucherTypeID;?>);">
                </div>
            </td>
            <td style="width:15%;  border-right: 1px solid rgba(144,144,144,1.00);">
            	<div   style="padding-right:2px;" >  
                	<input type="text" class="input-sm col-lg-12" id="CrAmount" name="CrAmount"  pattern="[0-9]" value=""  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.16); color:rgba(30,30,30,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="addtoPOjournal_Event(<?php echo ($sl_no+1); ?>,event,<?php echo $VoucherTypeID;?>);">
                </div>
            </td>
            <td style="width:15%; ">
        		<span class="glyphicon glyphicon-ok"  onclick="addtoPOjournal(<?php echo ($sl_no+1); ?>,<?php echo $VoucherTypeID;?>);"
                style="color:rgba(15,89,220,1.00); cursor: pointer; 
                padding:5px;"></span>
                
        	</td>
    	</tr>
    	<tr>
    		<td colspan="6">
    		<!--input type="text" id="SubTotal" name="SubTotal"  value="<?php echo $balance; ?>"-->
    			<input type="text" id="CalcMethodID" name="CalcMethodID"  >
    			<input type="text" id="CalcPercentage" name="CalcPercentage"  >
    			<input type="text" id="CurrentTotal" name="CurrentTotal" value="<?php echo $balance; ?>">
    			<div  id="Panel_CalcMethod" name="Panel_CalcMethod">AD</div>
    		</td>
    		
    	</tr>
	</table>
<?php 
}
	function GetCalcMethodID($VoucherTypeID,$DrCr,$AccountID)
	{
		//GetCalcMethodID
		//echo $DrCr;
			$CalcMethodID=0;
	require_once("app/models/dbase.php");
	$db_handle = new DBController();
	$sql="Select CalcMethodID from tbl_voucheraccounthead where  AccountID=$AccountID   and VoucherTypeID=$VoucherTypeID and DrCr=$DrCr";
		// echo $sql;
	$QResult= $db_handle->runQuery($sql); 
	if (sizeof($QResult)>0)
	{
	return $QResult[0]["CalcMethodID"];
	}
	else
	{
		//return 0;
		$MID=$this->GetAccountID($AccountID);
		//echo $AccountID;
		$this->GetCalcMethodID_GroupID($VoucherTypeID,$DrCr, $MID);
	}
}	
	function GetCalcMethodID_GroupID($VoucherTypeID,$DrCr,$MID)
	{
		
		
		//	$CalcMethodID=0;
	require_once("app/models/dbase.php");
	$db_handle = new DBController();
	$sql="Select CalcMethodID from tbl_voucheraccounthead where  AcGroupID=$MID  and VoucherTypeID=$VoucherTypeID and DrCr=$DrCr";
	//	 echo $sql;
	$QResult= $db_handle->runQuery($sql); 
	if (sizeof($QResult)>0)
	{
	echo $QResult[0]["CalcMethodID"];
	}
	 
	 
}
function GetAccountID($AccountID)
{
	require_once("app/models/dbase.php");
	$db_handle = new DBController();
	$sql="Select
					MID from tbl_master where ID=$AccountID";
	$QResult= $db_handle->runQuery($sql); 
	if (sizeof($QResult)>0)
	{
	return $QResult[0]["MID"];
	}
	 
}	
function LoadCalcMethodPanel($VoucherTypeID,$DrCr)
{
	echo "CALCMETHOD";
	//echo $this->LoadCalcMethodPanel($VoucherTypeID,$DrCr);
}

	
function LoadAcPanelByDrCr($VoucherTypeID,$DrCr)
	{
		?>
		  
                                      <option value="0" >Select Ledger</option>
                                      <?php
                                       // $sql="select ID,Name from tbl_master where MID=125";
	$sql="select  m.ID,m.Name,m.mastertypeid from tbl_master m 
	where m.mastertypeid in(6,7,32,34) and 
	(m.ID in (select AccountID from tbl_voucheraccounthead where VoucherTypeID=$VoucherTypeID and DrCr=$DrCr) or m.MID in (select AcGroupID from tbl_voucheraccount where VoucherTypeID=$VoucherTypeID and DrCr=$DrCr))";
		//$sql="SELECT ";
                                        echo $sql;
                                        $result=mysql_query($sql)  or die(mysql_error());
                                        while($row=mysql_fetch_array($result))
                                        {
                                         
                                        ?>
                                      <option value="<?php echo $row["ID"]; ?>"  ><?php echo $row["Name"]; ?></option>
                                      <?php 
                                        }
                                    
	}

function ShowPanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount,$isdeleted,$iseditable,$SubTotal,$balance,$CalcMethodID)
{
	require_once("app/models/dbase.php");
	$db_handle = new DBController();
	?>
	 <table class="mytable " style=" width: 100%; border-left:  1px solid rgba(134,134,134,1.00);" >
     	<tr>
           <td style="width:7%; text-align: left; ">
                <input type="hidden" id="balance<?php echo $a; ?>" name="balance<?php echo $a; ?>" value="<?php echo $balance; ?>">
                <span class="note" style="">
                <?php echo $a; ?>
      			</span>
            </td> 
            <td style="width:8%; vertical-align: top; padding-top: 10px; text-align: left;  " >
                <span   style="    text-align:left;" >
                     
                        <?php   
                        if ($drcr==1)
                        {
                            echo '<label class="note " style=" color:rgba(50,50,50,1.00);">DR</label>'; 
                        }
                        else if ($drcr==-1)
                        {
                            echo '<label class="note yellow" style=" color:rgba(50,50,50,1.00);">CR</label>'; 
                        } 
                        ?>
                     
                </span>
            </td>
            <td style="width:40%;"  >
               <div style="  ">
                <span  style="text-align:left; font-size: 10px; " >
                    <?php 
                    $accid=$accountid;
                    $getaccountinfo = $db_handle->runQuery("SELECT * FROM tbl_master where id=$accid limit 1");
                    if ($drcr==1)
                    {
                        echo  '<label  style=" ">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    else if ($drcr==-1)
                    {
                        echo  '<label  style=" padding-left:5px; color:rgba(50,50,50,1.00);">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    ?>
                </span>
                
                </div>
            </td>
            <td style="width:15%; padding-right: 3px; border-right: 1px solid rgba(122,120,120,1.00); ">
                <span style=" color:rgba(50,50,50,1.00); text-align: right;" >
                   <?php
                    if ($drcr==1)
                    {
                        echo  '<div>'.sprintf("%0.2f", $dramount).'</div>'; 
                    }
                    else if ($drcr==-1)
                    {
                        echo  '<div  style="color:transparent;">'.sprintf("%0.2f", $dramount).'</div>'; 
                    }
                    ?>
                </span>    
            </td>
            <td style="width:15%;  padding-right: 3px; border-right: 1px solid rgba(122,120,120,1.00);">
                <span  style=" color:rgba(50,50,50,1.00); text-align: right;" >
                    <?php
                    if ($drcr==1)
                    {
                        echo  '<div style="color:transparent;">'.sprintf("%0.2f", $cramount).'</div>'; 
                    }
                    else if ($drcr==-1)
                    {
                        echo  '<div >'.sprintf("%0.2f", $cramount).'</div>'; 
                    }
                    ?>
                </span> 
            </td>
            <td style="width:15%;">
               <div style="display: inline;">
                <span class="glyphicon glyphicon-pencil" style="color:rgba(240,174,32,1.00);   padding:5px; "
                onclick="enableeditmode(<?php echo $sl_no; ?>);"></span>
                               
                <span class="glyphicon glyphicon-remove"  style="color:rgba(200,0,0,1.00);   padding:5px;"
                onclick="removeentry(<?php echo $sl_no; ?>);"></span>
                </div>
            </td>
		</tr>
	</table>
        <?php
}
 
	
}

?>
