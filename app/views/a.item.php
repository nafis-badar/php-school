<?php
	//require_once("app/includes/dbase.php");
	//$db_handle = new DBController();
class ProductD
{
	function __construct() 
	{
		require_once("app/models/dbase.php");
	}
	
function GetUnitID($ItemID)
{
	$UnitID=0;
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	$sql="select ID, Name,UnitID from tbl_item where ID=$ItemID";
	$QResult= $db_handle->runQuery($sql); 
	if ($sizeof($QResult)>0)
	{
	return $QResult[0]["UnitID"];
	}
}	
	
function EntryPanel_PurchaseMaster($sl_no, $VoucherNo, $VoucherID, $VoucherDate, $TargetDate, $VoucherTypeID, $VoucherCategoryID, $DebitAccountID, $CreditAccountID)
{
	$Mode=1;
	$DocumentNo='';
	?>
	<table style=" width: 99.5%; border:1px solid rgba(164,164,164,1.00); font-size: 10px; font-stretch: expanded;">
	 <tr style="">
		<th style="width: 50px;padding-left: 5px;">PO:</th><th class="btn btn-info" style="width: 100px;">Pending</th>
		 <th style="width: 50px; text-align: right; padding-right: 2px;">DOC NO.:</th>
		 <th><input type="text" name="VoucherNo" id="VoucherNo" value="<?php echo $VoucherNo; ?>" class="item_input" style="width:200px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);">
			</th>
		<th style="width: 70px; text-align: right; padding-right: 4px;">PO DATE:</th><th><input type="text" id="VoucherDate" value="<?php echo $VoucherDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);">
		</th>
		<th style="width: 120px; text-align: right; padding-right: 4px;">EXP DLV DATE:</th><th><input type="text" id="TargetDate" value="<?php echo $TargetDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);"></th>
	 </tr>
	 <!--tr>
	 	 <th style="width: 50px;padding-left: 5px;">GRN:</th><th class="btn btn-info" style="width: 100px;">Pending</th>
	 	 <th style="width: 50px; text-align: right; padding-right: 2px;">DOC NO.:</th>
	 	 <th><input type="text" name="VoucherNo" id="VoucherNo" value="<?php echo $VoucherNo; ?>" class="item_input" style="width:200px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);">
			</th>
	 	 <th style="width: 120px; text-align: right; padding-right: 4px;">GRN DATE:</th><th><input type="text" id="TargetDate" value="<?php echo $TargetDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);"></th>
	 	 <th style="width: 120px; text-align: right; padding-right: 4px;">DLV DATE:</th><th><input type="text" id="TargetDate" value="<?php echo $TargetDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);"></th>
	 </tr>
	 <tr>
	 	 <th style="width: 50px;padding-left: 5px;">PI:</th><th class="btn btn-info" style="width: 100px;">Pending</th>
	 	 <th style="width: 50px; text-align: right; padding-right: 2px;">DOC NO.:</th>
	 	 <th><input type="text" name="VoucherNo" id="VoucherNo" value="<?php echo $VoucherNo; ?>" class="item_input" style="width:200px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);">
			</th>
	 	 <th style="width: 120px; text-align: right; padding-right: 4px;">PI DATE:</th><th><input type="text" id="TargetDate" value="<?php echo $TargetDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);"></th>
	 	 <th style="width: 120px; text-align: right; padding-right: 4px;">EXP PMT DATE:</th><th><input type="text" id="TargetDate" value="<?php echo $TargetDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);"></th>
	 </tr>
	 <tr>
	 	 <th style="width: 50px;padding-left: 5px;">PMT:</th><th class="btn btn-info" style="width: 100px;">Pending</th>
		 <th style="width: 50px; text-align: right; padding-right: 2px;">DOC NO.:</th>
		 <th><input type="text" name="VoucherNo" id="VoucherNo" value="<?php echo $VoucherNo; ?>" class="item_input" style="width:200px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);">
			</th>
		 <th style="width: 120px; text-align: right; padding-right: 4px;">PMT DATE:</th><th><input type="text" id="TargetDate" value="<?php echo $TargetDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);"></th>
		 <th style="width: 120px; text-align: right; padding-right: 4px;">CLR DATE:</th><th><input type="text" id="TargetDate" value="<?php echo $TargetDate; ?>" class="item_input" style="width:100px;padding-left:3px; border: none; border-bottom: 1px solid rgba(71,180,249,0.66);"></th>
	 </tr-->
	  <tr>
	  	<th colspan="8" >
	  		
	  		.***
	  	</th>
	  	
	  </tr>
		 <tr  style="vertical-align: top;  margin: 10px;">
			 

			<th  style="vertical-align: top; padding: 2px 2px;" colspan="2"> 
			<input type="hidden" id="VoucherID"  value="<?php echo $VoucherID; ?>" >
				<input type="hidden" id="Mode"  value="<?php echo $Mode; ?>" >
				<input type="hidden" id="DocumentNo" value="<?php echo $DocumentNo; ?>">
				<input type="hidden" id="BillingAddressID" value="<?php echo $BillingAddressID; ?>">
				<input type="hidden" id="ShippingAddressID" value="<?php echo $ShippingAddressID; ?>">
				<input type="hidden" id="PDID" value="<?php echo $PDID; ?>">
				<div style="padding-top:1px;">
				 <div>  <span class="note"> Select your supplier: </span></div>
				 <div style="padding: 0px 0px 3px 25px;"> 
					<select class="chosen-select" id="ActivityAccountID" name="ActivityAccountID" onChange="getPDDetails(this.value);"  onKeyPress="getPDDetails(this.value);"  style="width:250px;
					padding:3px;">
						<?php
						$sql="select ID,Name from tbl_master where MID=132";
						//echo $sql;
						$result=mysql_query($sql)  or die(mysql_error());
						while($row=mysql_fetch_array($result))
						{
						?>
							<option style=" background-color: rgba(13,118,185,0.23);"
							 <?php if ($row["ID"]==$DebitAccountID){ echo 'selected'; }?> value="<?php echo $row["ID"]?>">
							 
							 <?php echo $row["Name"]; ?>
							 
							 </option>
						<?php 
						}
						?>
					  </select>
					  </div>
				</div>
				<div id="accountdetails" style="z-index:-1; vertical-align: top;">
						<!--div class="note">
							PAN/VAT/MOB : <span></span>
						</div-->
						<div    style="text-align: left;" class="note white" >BAL: <span id="Balance">0</span></div>
						 <div style="text-align: left;" class="note white" id="PAN">PAN: </div>
						 <div style="text-align: left;" class="note white" id="VAT">VAT: </div>
						 <div style="text-align: left;" class="note white" id="ContactNo">MOB: </div>
					</div>
			 </th>
			  
			
			 <th colspan="2" style="vertical-align: top; text-align: left;border-left:1px solid rgba(203,203,203,0.85); border-bottom-right-radius: 5px;">
				<div id="ActivityAccount_DETAILS_PANEL">
					<div id="accountdetails" style="z-index:-1; vertical-align: top;">
						 
						<div >
							 <span class="note"> Bank Info : </span>
						</div>
						<div style="text-align: left;" class="note white" id="Bank">...</div>
					</div>
				</div>
			</th>
			<th colspan="2" style="vertical-align: top; text-align: left;border-left:1px solid rgba(203,203,203,0.85); border-bottom-right-radius: 5px;">
				<div ><span class="note"> Billing Address : <span class="glyphicon glyphicon-info-sign"></span></span></div>
				<div class="note white" id="BillingAddress">....</div>
			</th>
			<th colspan="2" style="vertical-align: top; text-align: left;border-left:1px solid rgba(203,203,203,0.85); border-bottom-right-radius: 5px;">
			<div style="width: 300px;"><span class="note"> Shipping Address : <span class="glyphicon glyphicon-info-sign"></span></span></div>
			<div class="note white" id="ShippingAddress">....</div>
			</th>
		</tr>
	 
		<tr>
			
			 <th colspan="3"  style="vertical-align: top; padding: 2px 2px;">
			 <div style="padding-top: 1px;">
				 <div  style="margin: 8px 0px 3px 2px;"> 
				 <span class="note  red"> Price Level : </span>
					 <div style="margin-left: 25px;">
						 <select class="chosen-select" id="PriceLevelID" name="PriceLevelID" onChange="getPDDetails(this.value);"  onKeyPress="getPDDetails(this.value);"  style="width:200px;
							padding:5px;">
							<option>Not applicable</option>
						</select>
					</div>
			 	</div>
				 
							
				</div>

			 </th>
			 <th colspan="5">
			 	
			 </th>
		</tr>
 	</table>
<?php
}
	
function EntryPanel_Product($mode,$a,$sl_no)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
	<div id="B">
		<table class="mytable" style="padding:0px;">
   		<?php
	  		if ($a==0){
		?>
			<tr>
				<td style="width:5%;  border-right:1px solid rgba(142,154,175,1.00);    " >#</td>
				<td style="width:35%;  border-right:1px solid rgba(142,154,175,1.00);      " >PARTICULARS</td>
				<td style="width:10%;   border-right:1px solid rgba(142,154,175,1.00);     " >Quantity</td>
				<td style="width:10%;   border-right:1px solid rgba(142,154,175,1.00);     " >Unit</td>
				<td style="width:10%;   border-right:1px solid rgba(142,154,175,1.00);     " >Rate</td>
				<td style="width:10%;   border-right:1px solid rgba(142,154,175,1.00);     " >Discount % </td>
				<td style="width:10%;    border-right:1px solid rgba(142,154,175,1.00);    " >Total</td>
				<td style="width:10%;     " >Action</td>
			</tr>
		<?php
	  		}
	  	?>
    		<tr style="background-color:rgba(187,187,187,0.26);">
				<td style="border-right:1px  solid rgba(215,106,108,1.00); padding:0px 0px 0px 10px; vertical-align: top;"><span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset; float:left;"> <?php echo ($a+1); ?> </span></td>
				<td style="width:35%;padding:0px 0px 0px 10px;">
       				<div    style=" padding:0px 3px; text-align:left;"  id="divaccount">
						<select  name="ItemID" id="ItemID"  style="width:80%;" onChange="setUnit(this.value);" >
							<option  value="0">_End</option>
							<?php
								$sql="select ID, Name from tbl_item ";
								$row=$db_handle->runQuery($sql);
								for ($i=0; $i<sizeof($row); $i++)
								{
							?>
							<option value="<?php echo $row[$i]["ID"]?>"><?php echo $row[$i]["Name"]; ?></option>
							<?php
								}
							?>
						</select>
      				</div>
      			</td>
				<td style="width:10%; vertical-align:top; text-align:left;">
       				<input type="text"  class="item_input" id="quantity_billing" value="1"  style="text-align:center;" onChange	="calculate_item();" onKeyUp="calculate_item();"   >
        			<input type="hidden"  id="quantity_actual" name="quantity_actual">
        		</td>
      			<td style="width:10%; vertical-align:top;padding:0px 0px 0px 10px;">
      				<select name="unit_secondary" id="unit_secondary" onChange="setByUnit(this.value);">
        				<option  value="0">_Not Applicable</option>
        				<?php
                            $sql="select ID, Name from tbl_unit ";
                            $row=$db_handle->runQuery($sql);
							for ($i=0; $i<sizeof($row); $i++)
							{
						?>
        				<option value="<?php echo $row[$i]["ID"]?>"><?php echo $row[$i]["Name"]; ?></option>
        				<?php
							}
						?>
      				</select>
        			<input type ="hidden" name="unit_primary" id="unit_primary" >
        		</td>
      			<td style="vertical-align:top;padding:0px 0px 0px 10px;">
                	<input type="text"  class="item_input rs" id="rate_secondary" value="0.00"   
                            onChange="calculate_item();" onKeyUp="calculate_item();"  >
        			<input type="hidden" id="rate_primary" value="0.00">
        		</td>
      			<td style=" vertical-align:top;padding:0px 0px 0px 10px;">
                    <input type="text"  class="item_input rs" id="discount_percentage" value="0.00"   
                           onChange="calculate_item();" onKeyUp="calculate_item();"  >
					<input type="hidden"  id="discounted_rate_primary" value="0.00">
					<input type="hidden"  id="discounted_rate_secondary" value="0.00">
				</td>
				<td style=" vertical-align:top; padding:0px 0px 0px 10px;">
                	<input type="text"  class="item_input rs" id="amount" value="0.00" 
                    onChange="calculate_item();" onKeyPress="additemtopurchasecart_key(<?php echo $sl_no; ?>,event);" readonly  >
                </td>
      			<td style=" vertical-align:top; padding-left:5px; ">
      				<a  onclick="additemtopurchasecart(<?php echo $sl_no; ?>);" class="btn " style="text-align:center"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a>
      			</td>
    		</tr>
    		<tr style="background-color:rgba(187,187,187,0.26);">
      			<td style="width:5%; border-right:1px  solid rgba(215,106,108,1.00); padding:0px 0px 0px 10px;">&nbsp;</td>
      			<td colspan="6" style="width:30%;padding:0px 0px 0px 10px;">
					<div style="  z-index:0;">
						<table style="width:100%; font-size:10px;">
						  <tr style="border:1px solid rgba(0,0,0,1.00); background-color:rgba(247,225,184,1.00);">
							<!--<td style="width:5%; text-align:center; padding:10px 0px; border-left:1px solid rgba(189,189,189,1.00);">#</td>-->
							<td style="width:12%;   border-left:1px solid rgba(189,189,189,1.00);">Batch No.</td>
							<td style="width:9%;" >Mfg. Date: </td>
							<td style="width:9%;" >Exp. Date: </td>
							<td style="width:10%; text-align:center; border-left:1px solid rgba(189,189,189,1.00);">Quantity</td>
							<td style="width:10%; text-align:center; border-left:1px solid rgba(189,189,189,1.00);">Unit</td>
							<td style="width:10%; text-align:right;  border-left:1px solid rgba(189,189,189,1.00);">Rate</td>
							<td style="width:10%; text-align:right;  border-left:1px solid rgba(189,189,189,1.00);">Disc. %</td>
							<td style="width:10%; text-align:right;  border-left:1px solid rgba(189,189,189,1.00);">Amount</td>
							<td style="width:15%; text-align:center; border-left:1px solid rgba(189,189,189,1.00);">#</td>
						  </tr>
						  <tr>
							<td style="width:12%; padding-left:3px;"><input type="text" style="" tabindex="2"></td>
							<td style="width:9%; padding-left:3px;"><input type="text" tabindex="4"></td>
							<td style="width:9%; padding-left:3px;"><input type="text" tabindex="3"></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td></td>
							<td></td>
						  </tr>
						</table>
					</div>
      			</td>
      			<td style="width:15%; vertical-align:top; padding-left:5px; ">&nbsp;</td>
    		</tr>
		</table>
	</div>
<?php 
}
	
function showpanel_product($mode, $a,$sl_no,$itemid, $quantity_billing,$quantity_actual, $unit_primary,$unit_secondary,$rate_primary, $rate_secondary, $discount_percentage, $discounted_rate_primary, $discounted_rate_secondary, $amount, $isdeleted, $iseditable)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
    <table class="mytable" style="padding:0px;">
    	<tr style="background-color:rgba(254,254,254,1.00);  border-right:1px solid rgba(142,154,175,1.00); ">
            <td style="width:5%; border-right:1px solid rgba(215,106,108,1.00); padding:7px 0px 0px 10px;">
                <span class="badge" style="background:rgba(134,243,82,0.71); color:rgba(90,90,90,1.00); border:1px rgba(244,244,244,0.89) outset; ">
                	<?php echo $a; ?>
      			</span>
            </td>
            <td style="width:30%; padding-top:7px;  border-right:1px solid rgba(142,154,175,1.00); ">
           		<div style=" padding:3px; text-align:left;"  id="divaccount">
                    <span  style=" padding-left:5px; padding-top:10px; text-align:left " >
                    <?php 
                    //$accid=$accountid;
					$sql="SELECT ID,Name FROM tbl_item where id=$itemid limit 1";
					//echo $sql;
                    $getiteminfo = $db_handle->runQuery($sql);
                    echo   $getiteminfo[0]["Name"] ; 
                    //echo $sql;
                    ?>
                	</span>
                    <div style="padding-left:20px; z-index:0; height:1px; visibility:hidden;">
                        <table style="width:100%; font-size:10px; padding-left:20px;">
                            <tr>
                                <td style="width:30%;">Batch No.: <?php echo "Batch No"; ?> </td>
                          </tr>
                            <tr>
                                <td>Mfg. Date</td><td><?php echo "Mfg Date"; ?></td>
                            </tr>
                            <tr>
                                <td>Exp.</td><td><?php echo "Exp Date"; ?></td>
                            </tr>
                        </table>
            		</div >
                </div>
                
            </td>
        	<td style="width:10%;padding-top:7px;  border-right:1px solid rgba(142,154,175,1.00); ">
            <div class="qty"    style=" padding:5px 3px; text-align:center; " >  
            <?php echo $quantity_billing;
			
			 ?>
                	 
                       
                </div> 
            </td>
            <td style="width:10%;padding-top:7px;  border-right:1px solid rgba(142,154,175,1.00); ">
				<div class="qty"  style=" padding:5px 3px; text-align:left " >
                     
                            <?php
                            
						    $sql="select ID, Name from tbl_unit where ID=$unit_secondary";
                           
                            $result=mysql_query($sql)  or die(mysql_error());
                             $row=mysql_fetch_array($result);
                             
                               echo $row["Name"];
                                $id[]=$row["ID"];
                            ?>
                       
                     
				</div>
            </td>
            <td style="width:10%;padding-top:7px;  border-right:1px solid rgba(142,154,175,1.00); ">
                <div   class="rs"  style=" padding:5px 3px;" >  
                	 <?php echo sprintf("%0.2f", $rate_secondary ); ?>
                </div>
       		</td>
            <td style="width:10%;padding-top:7px;  border-right:1px solid rgba(142,154,175,1.00); ">
            	<div   class="rs"  style=" padding:5px 3px;  " >  
                	<?php echo sprintf("%0.2f", $discount_percentage);  ?><span style="font-size:12px;">&nbsp;%</span>
                </div>
            </td>
             
            <td style="width:10%;padding-top:7px;   border-right:1px solid rgba(142,154,175,1.00); ">
            <div    class="rs" style=" padding:5px 18px 0px 0px;" >  
                	<?php echo sprintf("%0.2f", $amount); ?>
                </div>
        		
        	</td>
            <td style="width:15%; padding:7px 10px 10px 10px;">
            <span class="btn glyphicon glyphicon-edit" style="color:rgba(33,119,11,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:7px 10px;"
                onclick="enableeditmode(<?php echo $sl_no; ?>);"></span>
                <span class="btn glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:7px 10px;"
                onclick="remove_cart_entry(<?php echo $sl_no; ?>);"></span>
            </td>
    	</tr>
        
	</table>
<?php 
}

function editpanel_product($mode, $a,$sl_no,$itemid,$quantity_billing, $quantity_actual,$unit_primary, $unit_secondary,$rate_primary, $rate_secondary, $discount_percentage, $discounted_rate_primary, $discounted_rate_secondary, $amount, $isdeleted, $iseditable)
	{
		//echo	$VoucherID."PAGLA HOYE GECHE";
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
<script>
  $("#ItemID").bind("keydown chage", function(){
    var box = $(this);
	//alert(box.val());
    //setTimeout(function() {        alert(box);    }, 0);
});
 

 
</script>
<div id="B"></div>
    <table class="mytable" style="padding:0px;">
    	<tr style="background-color:rgba(187,187,187,0.26);">
            <td style="width:5%; border-right:1px  solid rgba(215,106,108,1.00); padding:0px 0px 0px 10px;">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset; float:left;">
                <?php echo ($a); ?>
      			</span>
            </td>
            <td style="width:30%;padding:0px 0px 0px 10px;">
           		<div    style=" padding:0px 3px; text-align:left;"  id="divaccount">
                     
 
                    <select  name="ItemID" id="ItemID"  style="width:80%;" onChange="setUnit(this.value);" > 
                    <option  value="0">_End</option>
                    
                            <?php
                            $sql="select ID, Name from tbl_item ";
							$row=$db_handle->runQuery($sql);
							
							for ($i=0; $i<sizeof($row); $i++)
							{
								?>
							<option value="<?php echo $row[$i]["ID"]?>" 
                                 <?php if($row[$i]["ID"]==$itemid) echo 'selected="selected"'; ?>><?php echo $row[$i]["Name"]; ?></option>	
                            <?php
								}
								?>
                           
                    </select>
                 
                </div>
                
            </td>
        	<td style="width:10%; vertical-align:top; text-align:left;">
              
                	<input type="text"  class="item_input" id="quantity_billing" value="<?php echo $quantity_billing; ?>"  style="text-align:center;" onChange	="calculate_item();" onKeyUp="calculate_item();"   >
                       <input type="hidden"  id="quantity_actual" name="quantity_actual" value="<?php echo $quantity_actual; ?>">
                
            </td>
            <td style="width:10%; vertical-align:top;padding:0px 0px 0px 10px;">
				 
                    <select name="unit_secondary" id="unit_secondary" onChange="setByUnit(this.value);">
                            <option  value="0">_Not Applicable</option>
                            <?php
                            $sql="select ID, Name from tbl_unit ";
                            $row=$db_handle->runQuery($sql);
							
							for ($i=0; $i<sizeof($row); $i++)
							{
								?>
							<option value="<?php echo $row[$i]["ID"]?>" 
                                 <?php if($row[$i]["ID"]==$unit_secondary) echo 'selected="selected"'; ?>><?php echo $row[$i]["Name"]; ?></option>	
                            <?php
								}
								?>
                    </select>
                    <input type ="hidden" name="unit_primary" id="unit_primary" value="<?php echo $unit_primary; ?>" >
				 
            </td>
            <td style="width:10%; vertical-align:top;padding:0px 0px 0px 10px;">
                 
                	<input type="text"  class="item_input rs" id="rate_secondary" value="<?php echo $rate_secondary; ?>"  
                            onChange="calculate_item();" onKeyUp="calculate_item();"  >
                    <input type="hidden" id="rate_primary" value="<?php echo $rate_primary; ?>">
               
       		</td>
            <td style="width:10%; vertical-align:top;padding:0px 0px 0px 10px;">
            	 
                	<input type="text"  class="item_input rs" id="discount_percentage"  value="<?php echo $discount_percentage; ?>"  
                           onChange="calculate_item();" onKeyUp="calculate_item();"  >
                    <input type="hidden"  id="discounted_rate_primary"   value="<?php echo $discounted_rate_primary; ?>">
                    <input type="hidden"  id="discounted_rate_secondary"  value="<?php echo $discounted_rate_secondary; ?>">
                
            </td>
             
            <td style="width:10%; vertical-align:top; padding:0px 0px 0px 10px;">
         
                	<input type="text"  class="item_input rs" id="amount"  value="<?php echo $amount; ?>" 
                    onChange="calculate_item();" onKeyPress="editpurchasecart_key(<?php echo $sl_no; ?>,event);" readonly  >
             	
        	</td>
            <td style="width:15%; vertical-align:top; padding-left:5px; ">
            <a  onclick="editpurchasecart(<?php echo $sl_no; ?>);" class="btn " style="text-align:center"><span class="glyphicon glyphicon-shopping-cart"></span>Update cart</a>
            </td>
    	</tr>
    	<tr style="background-color:rgba(187,187,187,0.26);">
    	  <td style="width:5%; border-right:1px  solid rgba(215,106,108,1.00); padding:0px 0px 0px 10px;">&nbsp;</td>
    	  <td colspan="6" style="width:30%;padding:0px 0px 0px 10px;">
          
          
                    <div style="  z-index:0;">
                        <table style="width:100%; font-size:10px;">
                        <tr style="border:1px solid rgba(0,0,0,1.00); background-color:rgba(247,225,184,1.00);">
            <!--<td style="width:5%; text-align:center; padding:10px 0px; border-left:1px solid rgba(189,189,189,1.00);">#</td>-->
            <td style="width:12%;   border-left:1px solid rgba(189,189,189,1.00);">Batch No.</td>
            <td style="width:9%;" >Mfg. Date: </td>
            <td style="width:9%;" >Exp. Date: </td>
            <td style="width:10%; text-align:center; border-left:1px solid rgba(189,189,189,1.00);">Quantity</td>
            <td style="width:10%; text-align:center; border-left:1px solid rgba(189,189,189,1.00);">Unit</td>
            <td style="width:10%; text-align:right;  border-left:1px solid rgba(189,189,189,1.00);">Rate</td>
            <td style="width:10%; text-align:right;  border-left:1px solid rgba(189,189,189,1.00);">Disc. %</td>
            <td style="width:10%; text-align:right;  border-left:1px solid rgba(189,189,189,1.00);">Amount</td>
            <td style="width:15%; text-align:center; border-left:1px solid rgba(189,189,189,1.00);">#</td>
        </tr> 
                            <tr>
                                <td style="width:12%; padding-left:3px;"><input type="text" style="" tabindex="2"></td>
                                <td style="width:9%; padding-left:3px;"><input type="text" tabindex="4"></td>
                                <td style="width:9%; padding-left:3px;"><input type="text" tabindex="3"></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td> 
                                 
                                <td></td>
                                 <td></td>
                            </tr>
                          
                        </table>
            		</div>
          </td>
    	  <td style="width:15%; vertical-align:top; padding-left:5px; ">&nbsp;</td>
  	  </tr>
    </table>
<?php 
}


 
function showpanel_accounts($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
	 <table class="mytable" style="width:100%;">
     	<tr>
            <!--td style="width:5%;     " >
              <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) inset;"><?php echo  $a; ?></span>
            </td>
            <td style="width:5%;     " >
                <span style=" padding-left:10px; text-align:left;" >
                    <label>
                       
                     </label> 
                </span>
            </td-->
            <td width="39%"  style="text-align:left; padding:10px 5px 10px 120px;">
            	<div style=" padding-left:7px; text-align:left " >
                    
                        <?php 
                        $accid=$accountid;
                        $getaccountinfo = $db_handle->runQuery("SELECT Name FROM tbl_master where id=$accid limit 1");
                        if ($drcr==1)
                        {
                            echo  '<label  >'.$getaccountinfo[0]["Name"].' </label> '; 
                        } 
                        else if ($drcr==-1)
                        {
                            echo  '<label >'.$getaccountinfo[0]["Name"].' </label> '; 
                        } 
                        ?>
                 
                </div>
            </td>
            <td width="9%" style="padding:10px 5px 10px 0px; color:rgba(147,147,147,1.00);">
             
                   
            </td>
             
             <td width="22%"    style="text-align:right; padding:10px 5px 10px 0px; color:rgba(38,38,38,1.00); font-size:16px; font-weight:bold;">&nbsp;</td>
            <td width="4%"   style="padding:10px 0px 10px 0px; color:rgba(147,147,147,1.00);">
                <!--?php   
                        if ($drcr==1)
                        {
                            echo '[ + ]'; 
                        }
                        else if ($drcr==-1)
                        {
                            echo '<label style=" color:rgba(220,100,0,1.00);">[ - ]</label>'; 
                        } 
                        ?-->
          </td>
            <td width="11%">
            <div style="text-align:right;   color:rgba(38,38,38,1.00); font-size:16px; font-weight:bold; padding-right:5px;">
              <?php
                    if ($drcr==1)
                    {
                        echo  '<div style="padding-right:7px;">'.sprintf("%0.2f", $dramount).'</div>'; 
                    }
                    else if ($drcr==-1)
                    {
                        echo  '<div  style="color:rgba(220,100,0,1.00);">('.sprintf("%0.2f", $cramount).')</div>'; 
                    }
                    ?>
            </div>
            
            </td>
            <td  style="width:15%; padding-left:10px; ">INR 
            <span class="btn glyphicon glyphicon-edit" style="color:rgba(195,255,116,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onclick="enableeditmode(<?php echo $sl_no; ?>);"></span>
                <span class="btn glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onclick="removeentry(<?php echo $sl_no; ?>);"></span>
          </td>
		</tr>
	</table>
        <?php
}
	

function EntryPanel_Accounts($mode,$a,$sl_no)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
    <table   style="width:300px; background-color: rgba(213,235,215,0.70); " >
    	<tr>
        <td style="width:30px;  text-align:left;"><div style="   text-align:left; " >
                    <select style=" width:30px; padding:0px; min-width:50px; border:0px; 
                    background-color:rgba(255,255,255,1.00); color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none;" 
                    name="DebitCredit" id="DebitCredit" class="input-sm" 
                    onChange="getDrCr();" onBlur="getDrCr();" autofocus tabindex="-1" >

                        <option value="1" >Dr</option>
                        <option value="-1">Cr</option>
                    </select> 
				</div></td>
        <td style="width:250px;;">
                <div    style=" text-align:left "  id="divaccount">
                     <span style="padding-left:3px;">
                                    <select id="main_accounts" style="width:200px; padding:5px; border-radius:3px;  border-top :1pa solid rgba(130,130,130,1.00) !important; font-size: 12px;"   >
                                      <option value="0" >Select Ledger</option>
                                      <?php
                                        $sql="select ID,Name from tbl_master where MID=125";
                                        echo $sql;
                                        $result=mysql_query($sql)  or die(mysql_error());
                                        while($row=mysql_fetch_array($result))
                                        {
                                         
                                        ?>
                                      <option value="<?php echo $row["ID"]; ?>"  ><?php echo $row["Name"]; ?></option>
                                      <?php 
                                        }
                                        ?>
                                    </select>
                                  </span>
                </div>
       		</td>
          
            <td style="  text-align:right;"><div   style="  ">
              <input type="text"  class=" " id="rate" value=""   
                    style=" position:relative;width:50px ;" 
                    onKeyPress="addtopurchase(<?php echo ($sl_no+1); ?>,event);">
            </div>
				
            </td>
           
            <td style="width:100px;">
            <div   style="  ">  
                	<input type="text"    id="Amount" value=""   
                    style=" position:relative;" 
                    onKeyPress="addtopurchase(<?php echo ($sl_no+1); ?>,event);">
			</div>
            </td>
            <td style="width:15%; padding-left:10px; ">INR
        		<span class="glyphicon glyphicon-ok-circle"  onclick="addtopurchase_onclick(<?php echo ($sl_no+1); ?>,event);"
                style="color:rgba(46,112,19,1.00); background-color:rgba(255,255,255,1.00); 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"></span>
        	</td>
    	</tr>
	</table>
<?php 
}
function editpanel_accounts($mode,$a, $sl_no, $drcr, $accountid, $dramount, $cramount, $isdeleted, $iseditable)
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
						<option value="1" <?php if($drcr==1) echo "selected='selected'"; ?> >Dr</option>
                        <option value="-1" <?php if($drcr==-1) echo "selected='selected'"; ?>>Cr</option>
					</select> 
				</div>
            </td>
            <td style="width:50%;">
	            <div    style=" padding-left:10px; text-align:left "  id="divaccount">
                	<div id="SearchFieldContainer" style="z-index:1000;">
                        <div  id="SearchForm">
                            <div id="wrapjsuggest" style="">
                               <?php 
                                    $getaccountinfo = $db_handle->runQuery("SELECT * FROM tbl_master where id=$accountid limit 1");
                                ?>
                                <input type="text" name="name"   id="SearchBox" class="jsuggest" 
                                onkeyup="suggestme(this.value,event)" onfocusout="activate(event);" onKeyPress="activate(event);" 
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
					<input type="text"  class="input-sm  col-lg-12" id="DrAmount" value="<?php echo $dramount;  ?>"  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00);" 
                    onKeyPress="editpurchase(<?php echo ($sl_no); ?>,event);">
				</div>
            </td>
            <td style="width:15%;">
				<div   style="padding-right:20px;" >  
					<input type="text" class="input-sm col-lg-12" id="CrAmount" value="<?php echo  $cramount;  ?>" 
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="editpurchase(<?php echo ($sl_no); ?>,event);">
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
	//$sl_no=sizeof($_SESSION['journal_item']);

function entrypanel_narration($mode,$a,$sl_no)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
    <table class="mytable">
    	<tr>
        <td colspan="8">
         
        </td>
        </tr>
    	
	</table>
<?php 
}
	
}

?>
