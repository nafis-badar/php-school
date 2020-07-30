<?php
include_once 'app/models/MOD.Purchase.php';

class Purchase extends MODPurchase
{
	 
	function showpanel_product($mode,$a,$sl_no,$itemid,$quantity_billing,$quantity_actual,$unit_primary,$unit_secondary,$rate_primary,$rate_secondary,$discount_percentage,$discounted_rate_primary,$discounted_rate_secondary,$amount,$isdeleted,$iseditable)
{
	 
	?>
    <table class="mytable" style="padding:0px;">
    	<tr style="background-color:rgba(254,254,254,1.00);">
            <td style="width:5%; border-right:1px solid rgba(215,106,108,1.00); padding:7px 0px 0px 10px;">
                <span class="badge" style="background:rgba(134,243,82,0.71); color:rgba(90,90,90,1.00); border:1px rgba(244,244,244,0.89) outset; ">
                	<?php echo $a; ?>
      			</span>
            </td>
            <td style="width:40.45%; padding-top:7px;">
           		<div style=" padding:3px; text-align:left;"  id="divaccount">
                    <span  style=" padding-left:5px; padding-top:10px; text-align:left " >
                    <?php 
                    //$accid=$accountid;
					$sql="SELECT ID,Name FROM tbl_item where id=$itemid limit 1";
                    $getiteminfo = $purchase_handle->runQuery($sql);
                    echo   $getiteminfo[0]["Name"] ; 
                    //echo $sql;
                    ?>
                	</span>
                    <div style="padding-left:20px; z-index:0; height:1px; visibility:hidden;">
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
            		</div >
                </div>
                
            </td>
        	<td style="width:8%;padding-top:7px;">
            <div class="qty"    style=" padding:5px 3px; text-align:center; " >  
            <?php echo $quantity_billing; ?>
                	 
                       
                </div> 
            </td>
            <td style="width:7%;padding-top:7px;">
				<div class="qty"  style=" padding:5px 3px; text-align:left " >
                     
                            <?php
                            $sql="select ID,Unit Name from tbl_unit where ID=$unit_secondary";
                           // echo $sql;
                            $result=$purchase_handle->runQuery($sql);
                             
                               echo $result[0]["Name"];
                                $id[]=$result[0]["ID"];
                            ?>
                       
                     
				</div>
            </td>
            <td style="width:7%;padding-top:7px;">
                <div   class="rs"  style=" padding:5px 3px;" >  
                	 <?php echo sprintf("%0.2f", $rate_secondary ); ?>
                </div>
       		</td>
            <td style="width:7%;padding-top:7px;">
            	<div   class="rs"  style=" padding:5px 3px;  " >  
                	<?php echo sprintf("%0.2f", $discount_percentage);  ?><span style="font-size:12px;">&nbsp;%</span>
                </div>
            </td>
             
            <td style="width:11%;padding-top:7px; ">
            <div    class="rs" style=" padding:5px 18px 0px 0px;" >  
                	<?php echo sprintf("%0.2f", $amount); ?>
                </div>
        		
        	</td>
            <td style="width:15%; padding:7px 10px 10px 10px;">
            <span class="btn glyphicon glyphicon-edit" style="color:rgba(33,119,11,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:7px 10px;"
                onclick="enableeditmode(<?php echo $sl_no; ?>);"></span>
                <span class="btn glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:7px 10px;"
                onclick="removeentry(<?php echo $sl_no; ?>);"></span>
            </td>
    	</tr>
        
	</table>
<?php 
}
function editpanel_product($mode,$a,$sl_no,$itemid,$quantity_billing,$quantity_actual,$unit_primary,$unit_secondary,$rate_primary,$rate_secondary,$discount_percentage,$discounted_rate_primary,$discounted_rate_secondary,$amount,$isdeleted,$iseditable)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
    <table class="mytable" style="padding:0px;">
    	<tr style="background-color:rgba(187,187,187,0.26);">
            <td style="width:5%; border-right:1px  solid rgba(215,106,108,1.00);">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset; float:left;">
                <?php echo ($a+1); ?>
      			</span>
            </td>
            <td style="width:50.45%;">
           		<div    style=" padding:0px 3px; text-align:left;"  id="divaccount">
                    <div id="SearchFieldContainer_item" style="z-index:1000; position:relative; ">
                        <div  id="SearchForm_item" style="padding-top:0px !important;">
                            <div id="wrapjsuggest_item" style="">
                             <?php 
                                    $getiteminfo = $db_handle->runQuery("SELECT ID,Name FROM tbl_item where id=$itemid limit 1");
                                ?>
                                <input type="text" name="name"   id="SearchBox_item" class="jsuggest" 
                                onkeyup="suggestme_item(this.value,'product',event)" onfocusout="activate('product',event);" onKeyPress="activate('product',event);" 
                                value="<?php echo $getiteminfo[0]["Name"]; ?>" style="width:250px;  text-transform: uppercase;" autofocus autocomplete="off"/>
                                <!--span style="font-size:20px;">
                                    <span class="btn btn-lg glyphicon glyphicon-plus " style="color:rgba(255,211,61,1.00);"></span>	
                                    <span class="btn btn-lg glyphicon glyphicon-pushpin" style="color:rgba(17,176,25,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-remove" style="color:rgba(255,97,53,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-search" style="color:rgba(47,158,228,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-exclamation-sign" style="color:rgba(193,193,193,1.00);"></span>
                                </span-->
                                <div id="suggestme_item"  style="z-index:1000;">
                                	<div id="suggestmeList_item" style="height:0px;style="z-index:1000;""> &nbsp; </div>
                            	</div>
                            </div>
                        </div>
                        <input type="hidden" id="ItemID" value="<?php echo $itemid; ?>">
                        <!--input type="button" name="Search" Value="Search" class="mainbutton"/-->	
                    </div>
                    <div style="padding-left:20px; z-index:0;">
                        <table style="width:100%; font-size:10px; padding-left:20px;">
                            <tr>
                                <td style="width:10%;">Batch No.</td><td style="width:15%;"><input type="text" style=""></td>
                                <td colspan="2" rowspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Mfg. Date</td><td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Exp.</td><td><input type="text"></td>
                            </tr>
                        </table>
            		</div>
                </div>
                
            </td>
        	<td style="width:8%;">
            <div    style=" padding:3px 3px; text-align:left " >  
                	<input type="text"  class="item_input" id="quantity_billing" value="<?php echo $quantity_billing; ?>"  
                    	style="text-align:center;" 
                       onChange	="calculate_item();" onKeyUp="calculate_item();">
                       <input type="hidden"  id="quantity_actual" value="<?php echo $quantity_actual; ?>">
                </div> 
            </td>
            <td style="width:7%;">
				<div  style=" padding:3px 3px; text-align:left " >
                    <select name="unit_secondary" id="unit_secondary" class="item_input qty" value="<?php echo $unit_secondary; ?>" >
                            <option style="text-align:center;"  value="0">?</option>
                            <?php
                            $sql="select ID,Unit Name from tbl_unit ";
                            echo $sql;
                            $result=mysql_query($sql)  or die(mysql_error());
                            while($row=mysql_fetch_array($result))
                            {
                                $names[]=$row["Name"];
                                $id[]=$row["ID"];
                            ?>
                                <option style="text-align:center;"  value="<?php echo $row["ID"]?>"
                                 <?php if($row["ID"]==$unit_secondary) echo 'selected="selected"'; ?>
                                ><?php echo $row["Name"]; ?></option>
                             
                            <?php 
                            }
                            ?>
                    </select>
                    <input type ="hidden" name="unit_primary" id="unit_primary" value="<?php echo $unit_primary; ?>" >
				</div>
            </td>
            <td style="width:7%;">
                <div    style=" padding:3px 3px; text-align:left " >  
                	<input type="text"  class="item_input rs" id="rate_secondary"  value="<?php echo number_format($rate_secondary,2); ?>"  
                            onChange="calculate_item();" onKeyUp="calculate_item();">
                    <input type="hidden" id="rate_primary"  value="<?php echo $rate_primary; ?>">
                </div>
       		</td>
            <td style="width:7%;">
            	<div    style=" padding:3px 3px; text-align:left " >  
                	<input type="text"  class="item_input rs" id="discount_percentage" value="<?php echo number_format($discount_percentage,2) ; ?>"   
                           onChange="calculate_item();" onKeyUp="calculate_item();">
                    <input type="hidden"  id="discounted_rate_primary" value="<?php echo $discounted_rate_primary; ?>">
                    <input type="hidden"  id="discounted_rate_secondary" value="<?php echo $discounted_rate_secondary; ?>">
                </div>
            </td>
             
            <td style="width:11%; ">
            <div    style=" padding:3px 3px; " >  
                	<input type="text"  class="item_input rs" id="amount" value="<?php echo number_format($amount,2); ?>" 
                    onChange="calculate_item();" onKeyUp="calculate_item();" onKeyPress="editpurchasecart(<?php echo $sl_no; ?>,event);" readonly>
                </div>
        		
        	</td>
            <td style="width:5%; ">
            <span class="glyphicon glyphicon-ok-circle"  
                style="color:rgba(121,255,116,1.00); 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"></span>
            </td>
    	</tr>
        
	</table>
<?php 
}
function entrypanel_accounts($mode,$a,$sl_no)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
	?>
    <table class="mytable" style="width:100%;" >
    	<tr>
        
        	<!--td style="width:5%; border-right:1px  ridge rgba(215,106,108,1.00);">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset; float:left;">
                <?php echo ($a+1); ?>
      			</span>
            </td-->
            <!--td style="width:5%;">
				<div style="   text-align:left; " >
                    <select style=" float:left; width:100%; padding:0px; min-width:50px; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); font-size:14px;" 
                    name="DebitCredit" id="DebitCredit" class="input-sm" 
                    onChange="getDrCr();" onBlur="getDrCr();" autofocus >
                        <option value="1" >Dr</option>
                        <option value="-1" selected="selected" >Cr</option>
                    </select> 
				</div>
            </td-->
            <td style="width:39%;">
                <div    style=" padding-left:120px; text-align:left "  id="divaccount">
                    <div id="SearchFieldContainer" style="z-index:1000;">
                        <div  id="SearchForm">
                            <div id="wrapjsuggest" style="">
                                <input type="text" name="name"  id="SearchBox" class="jsuggest" 
                                onkeyup="suggestme(this.value,'purchaseaccount',event)" onfocusout="activate(event);" onKeyPress="activate(event);" 
                                value="<?php //echo $name; ?>" style="width:250px;  text-transform: uppercase;" autofocus autocomplete="off"/>
                                <!--span style="font-size:20px;">
                                    <span class="btn btn-lg glyphicon glyphicon-plus " style="color:rgba(255,211,61,1.00);"></span>	
                                    <span class="btn btn-lg glyphicon glyphicon-pushpin" style="color:rgba(17,176,25,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-remove" style="color:rgba(255,97,53,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-search" style="color:rgba(47,158,228,1.00);"></span>
                                    <span class="btn btn-lg glyphicon glyphicon-exclamation-sign" style="color:rgba(193,193,193,0.50);"></span>
                                </span-->
                                <div id="suggestme"  style="z-index:1000;">
                                	<div id="suggestmeList" style="height:0px;z-index:1000;"> &nbsp; </div>
                            	</div>
                            </div>
                        </div>
                        <input type="hidden" id="AccountID">
                        <!--input type="button" name="Search" Value="Search" class="mainbutton"/-->	
                    </div>
                </div>
       		</td>
            <td style="width:9%;">&nbsp;</td>
          <td style="width:11%; padding:10px; text-align:right;">&nbsp;
				
            </td>
            <td style="width:11%; padding:10px; text-align:right;"><div   style="  ">
              <input type="text"  class="input-sm  rs" id="rate" value=""   
                    style=" position:relative;" 
                    onKeyPress="addtopurchase(<?php echo ($sl_no+1); ?>,event);">
            </div>
				
            </td>
            <td style="width:4%;  text-align:left;"><div style="   text-align:left; " >
                    <select style=" width:30px; padding:0px; min-width:50px; border:0px; 
                    background-color:rgba(255,255,255,1.00); color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none;" 
                    name="DebitCredit" id="DebitCredit" class="input-sm" 
                    onChange="getDrCr();" onBlur="getDrCr();" autofocus tabindex="-1" >
                        <option value="1" >[ + ]</option>
                        <option value="-1">[ - ]</option>
                    </select> 
				</div></td>
            <td style="width:11%;">
            <div   style="  ">  
                	<input type="text"  class="input-sm  rs" id="Amount" value=""   
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
function editpanel_accounts($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount,$isdeleted,$iseditable)
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
function entrypanel_narration($mode,$a,$sl_no)
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
function showpanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount)
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
                        if ($drcr==1)
                        {
                            echo 'DR'; 
                        }
                        else if ($drcr==-1)
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
                    $accid=$accountid;
                    $getaccountinfo = $purchase_handle->runQuery("SELECT Name FROM tbl_master where id=$accid limit 1");
                    if ($drcr==1)
                    {
                        echo  '<label  style=" ">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    else if ($drcr==-1)
                    {
                        echo  '<label  style=" padding-left:20px; color:rgba(250,250,250,0.7);">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    ?>
                </span>
            </td>
            <td  style="text-align:right; padding:10px 5px 10px 0px; color:rgba(38,38,38,1.00); font-size:16px; font-weight:bold;">
                <span class="  pull-right " style="padding-right:40px;" >
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
            <td style="width:15%; ">
                <span class="  pull-right " style="padding-right:40px;  color:rgba(250,250,250,0.7);" >
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
            <td style="width:10%; ">
                <span class="btn glyphicon glyphicon-edit" style="color:rgba(195,255,116,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onclick="enableeditmode(<?php echo $sl_no; ?>);"></span>
                <span class="btn glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onclick="removeentry(<?php echo $sl_no; ?>);"></span>
            </td>
		</tr>
	</table>
        <?php
}
function entrypanel($mode,$a,$sl_no)
{
	require_once("app/includes/dbase.php");
	$db_handle = new DBController();
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
                                onkeyup="suggestme(this.value,"purchaseaccount",event)" onfocusout="activate(event);" onKeyPress="activate(event);" 
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
                    onKeyPress="addtopurchase(<?php echo ($sl_no+1); ?>,event);">
                </div>
            </td>
            <td style="width:15%;">
            	<div   style="padding-right:20px;" >  
                	<input type="text" class="input-sm col-lg-12" id="CrAmount"  value=""  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="addtopurchase(<?php echo ($sl_no+1); ?>,event);">
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
function editpanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount,$isdeleted,$iseditable)
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
                                <input type="text" name="name" autocomplete="off"  id="SearchBox" class="jsuggest" 
                                onkeyup="suggestme(this.value,event)" onfocusout="activate(event);" onKeyPress="activate(event);" 
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
		
}
?>