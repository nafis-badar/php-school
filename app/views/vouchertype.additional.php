 <?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.VoucherType.php");
$Handle = new VoucherType();
$x=0;
$ID=0;
$ID=$_REQUEST['ID'];
		$VoucherType='';
		$Alias='';
		$Name= '';
		$PrintName= '';
		$OptionalPrintName= '';
		$PrintName= '';
		$Description= '';
		$MasterTypeID=0;
		$MID= 0;
		$IsMaster=0;
		$ClassName='';
		$ReportClassName='';
		$VoucherCategoryID=0;
		$IsManufacturingJournal=0;
		$LedgerHead=0;
		$GroupHead=0;
		$ProcedureTypeID=0;
		$AccountsNature=0;
		$IsEffectLedgerValue=0;
		$InventoryNature=0;
		$IsEffectInventoryValue=0;
		$PayrollNature=0;
		$IsEffectPayrollValue=0;
		$IsOptional=0;
		$RefVoucherTypeID=0;
		$TrackDownInventory= 0;
		
		$AcGroupID='0';
		 

if($ID!=0)
{
$getinfo = $Handle->runQuery("SELECT * FROM tbl_vouchertype where ID=$ID ");/* WHERE MasterTypeID=1");*/
 //print_r($getinfo);
	//ID, VoucherType, Alias, Name, PrintName, OptionalPrintName, CreatedBy, ModifyTime, Description, MID, IsMaster, ClassName, ReportClassName, VoucherCategoryID, IsManufacturingJournal, LedgerHead, GroupHead, ProcedureTypeID, AccountsNature, IsEffectLedgerValue, InventoryNature, IsEffectInventoryValue, PayrollNature, IsEffectPayrollValue, IsOptional, RefVoucherTypeID, TrackDownInventory
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$VoucherTypeID=$getinfo[$x]["ID"];
		$VoucherType=$getinfo[$x]["VoucherType"];
		$Alias=$getinfo[$x]["Alias"];
		$Name=$getinfo[$x]["Name"];
		$PrintName=$getinfo[$x]["PrintName"];
		$OptionalPrintName=$getinfo[$x]["OptionalPrintName"];
		$PrintName=$getinfo[$x]["PrintName"];
		$Description=$getinfo[$x]["Description"];
		$MID=$getinfo[$x]["MID"];
		$IsMaster=$getinfo[$x]["IsMaster"];
		$ClassName=$getinfo[$x]["ClassName"];
		$ReportClassName=$getinfo[$x]["ReportClassName"];
		$VoucherCategoryID=$getinfo[$x]["VoucherCategoryID"];
		$IsManufacturingJournal=$getinfo[$x]["IsManufacturingJournal"];
		$LedgerHead=$getinfo[$x]["LedgerHead"];
		$GroupHead=$getinfo[$x]["GroupHead"];
		$ProcedureTypeID=$getinfo[$x]["ProcedureTypeID"];
		$AccountsNature=$getinfo[$x]["AccountsNature"];
		$IsEffectLedgerValue=$getinfo[$x]["IsEffectLedgerValue"];
		$InventoryNature=$getinfo[$x]["InventoryNature"];
		$IsEffectInventoryValue=$getinfo[$x]["IsEffectInventoryValue"];
		$PayrollNature=$getinfo[$x]["PayrollNature"];
		$IsEffectPayrollValue=$getinfo[$x]["IsEffectPayrollValue"];
		$IsOptional=$getinfo[$x]["IsOptional"];
		$RefVoucherTypeID=$getinfo[$x]["RefVoucherTypeID"];
		$TrackDownInventory=$getinfo[$x]["TrackDownInventory"];
		 

	}
}
       ?>
 <div class="workspace">
<div class="displayhead"><?php echo $VoucherType; ?> Entry Template
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> 
Back
</span>

</div>
 

  <div class="panel-body" >
 

<div class="form-group">
 

<input type="hidden" name="ID" id="ID" value="<?php echo $ID; ?>">
</div> 
 
 
<div class="form-group">

<table width="100%" style="font-size:14px;" class="table">
    <tr>
		<th>Type:</th><th>DrCr</th>  <th>Calculation Method</th><th>IsTaxable</th><th>Percentage</th><th>Group</th>	<th>Ledger</th><th> IsPermanent</th> <th>SAVE</th>
    </tr>
 
<?php 
$VoucherTypeID=$ID=$_REQUEST['ID'];
$ID='0';
$AccountTypeID='0';
$DrCr='0';
$CalculationMethodID='0';
$Percentage='0';
$AcGroupID='0';
$AccountID='0';
$IsPermanent='0';
$getVoucherAccount=$Handle->getVoucherAccountHead($VoucherTypeID);

$getVoucherAccountEditable=$Handle->getVoucherAccountEditable($VoucherTypeID);
 
for($i=0; $i<count($getVoucherAccount,0); $i++)
{
	$VoucherTypeID=$getVoucherAccount[$i]['VoucherTypeID'];
$ID=$getVoucherAccount[$i]['ID'];
$AccountTypeID=$getVoucherAccount[$i]['AccountTypeID'];
$DrCr=$getVoucherAccount[$i]['DrCr'];
$CalculationMethodID=$getVoucherAccount[$i]['CalculationMethodID'];
$Percentage=$getVoucherAccount[$i]['Percentage'];
$AcGroupID=$getVoucherAccount[$i]['AcGroupID'];
$AccountID=$getVoucherAccount[$i]['AccountID'];
$IsPermanent=$getVoucherAccount[$i]['IsPermanent'];
$IsEditable=$getVoucherAccount[$i]['IsEditable'];
$IsDeleted=$getVoucherAccount[$i]['IsDeleted'];
$IsTaxable=$getVoucherAccount[$i]['IsTaxable'];
	?>
<?php
	if($i==0 and count($getVoucherAccountEditable,0)==0)
	{?>
 <tr>
    	<td>
            <select name="AccountTypeID" id="AccountTypeID" class="form-control">
                        <option value="0">Please select...</option>
				<?php
                $MIDinfo = $Handle->runQuery("SELECT * FROM tbl_accounttype");
                //echo $ItemGroupID;
                
                for ($ig = 0; $ig < count($MIDinfo,0); $ig++) {
                       ?>
                 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($AccountTypeID==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
                 <?php echo $MIDinfo[$ig]['Name'];?></option>
                    <?php } ?>
             </select>
        </td>
        
     
        	<td style="  text-align:right;"><div style="   text-align:right; " >
                    <select style=" width:30px; min-width:50px; border:0px; 
                    color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none; 
   -moz-appearance: none;   appearance: none;  background-image:none!important;  padding: 5px;" 
                    name="DrCr" id="DrCr" class="form-control"   >
                        <option value="1" <?php if($DrCr==1) echo 'selected= "selected"'; ?>> Dr </option>
                        <option value="-1" <?php if($DrCr==-1) echo 'selected= "selected"'; ?>> Cr </option>
                    </select> 
				</div>
                </td>
                   <td>
                   <select name="CalculationMethodID" id="CalculationMethodID" class="form-control">
				 <option value="0">Please select...</option>
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_calculationmethod");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($CalculationMethodID==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select>
        </td>
        <td style="  text-align:right;"><div style="   text-align:right; " >
                    <select style=" width:30px; min-width:50px; border:0px; 
                    color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none; 
   -moz-appearance: none;   appearance: none;  background-image:none!important;  padding: 5px;" 
                    name="IsTaxable" id="IsTaxable" class="form-control"   >
                        <option value="1" <?php if($IsTaxable==1) echo 'selected= "selected"'; ?>> Yes </option>
                        <option value="0" <?php if($IsTaxable==0) echo 'selected= "selected"'; ?>> No </option>
                    </select> 
				</div>
                </td>
        <td>
        <input type="text" onKeyPress="return isNumberKey(event)"  class="form-control rs" id="Percentage" value="100">
        
        </td>
        <td><select name="AcGroupID" id="AcGroupID" class="form-control">
				 <option value="0">Please select...</option>
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_master where MasterTypeID=6");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) 
{
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($AcGroupID==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></td>
        
        <td><select name="AccountID" id="AccountID" class="form-control">
			 <option value="0">Please select...</option>
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_master where MasterTypeID=7");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) 
{
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($AccountID==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></td>
        
        <td style="  text-align:right;"><div style="   text-align:right; " >
                    <select style=" width:100px; min-width:100px; border:0px; 
                    color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none; 
   -moz-appearance: none;   appearance: none;  background-image:none!important;  padding: 5px;" 
                    name="IsPermanent" id="IsPermanent" class="form-control" >
                        <option value="1" <?php if($IsPermanent==-1) echo 'selected= "selected"'; ?>> Yes </option>
                        <option value="0" <?php if($IsPermanent==-0) echo 'selected= "selected"'; ?>> No </option>
                    </select> 
				</div>
                </td>
                <td>
                	<a href="" class="btn btn-primary" onClick="SaveVoucherAccount(0,<?php echo $VoucherTypeID; ?>);">SAVE</a>
                </td>
    </tr>
 <?php   
    }
	
	if($getVoucherAccount[$i]['IsEditable']==1)
	{?>
 <tr>
    	<td><select name="AccountTypeID" id="AccountTypeID" class="form-control">
			 <option value="0">Please select...</option>
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_accounttype");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($AccountTypeID==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></td>
        
     
        	<td style="  text-align:right;"><div style="   text-align:right; " >
                    <select style=" width:30px; min-width:50px; border:0px; 
                    color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none; 
   -moz-appearance: none;   appearance: none;  background-image:none!important;  padding: 5px;" 
                    name="DrCr" id="DrCr" class="form-control" 
                    onChange="getDrCr();" onBlur="getDrCr();" autofocus >
                         <option value="1" <?php if($DrCr==1) echo 'selected= "selected"'; ?>> + </option>
                        <option value="-1" <?php if($DrCr==-1) echo 'selected= "selected"'; ?>> - </option>
                    </select> 
				</div>
                </td>
                   <td>
                   <select name="CalculationMethodID" id="CalculationMethodID" class="form-control">
				 <option value="0">Please select...</option>
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_calculationmethod");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($getVoucherAccount[$i]['CalculationMethodID']==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select>
        </td>
         <td style="  text-align:right;"><div style="   text-align:right; " >
                    <select style=" width:30px; min-width:50px; border:0px; 
                    color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none; 
   -moz-appearance: none;   appearance: none;  background-image:none!important;  padding: 5px;" 
                    name="IsTaxable" id="IsTaxable" class="form-control"   >
                        <option value="1" <?php if($IsTaxable==1) echo 'selected= "selected"'; ?>> Yes </option>
                        <option value="0" <?php if($IsTaxable==0) echo 'selected= "selected"'; ?>> No </option>
                    </select> 
				</div>
                </td>
        <td>
        <input type="text" onKeyPress="return isNumberKey(event)"  class="form-control rs" id="Percentage" value="<?php echo $getVoucherAccount[$i]['Percentage']?>"   >
                     
        
        </td>
        <td><select name="AcGroupID" id="AcGroupID" class="form-control">
			 <option value="0">Please select...</option>
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_master where MasterTypeID=6");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($getVoucherAccount[$i]['AcGroupID']==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></td>
        
        <td><select name="AccountID" id="AccountID" class="form-control">
				 <option value="0">Please select...</option>
<?php
$MIDinfo = $Handle->runQuery("SELECT * FROM tbl_master where MasterTypeID=7");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($MIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $MIDinfo[$ig]['ID'];?>" <?php if($getVoucherAccount[$i]['AccountID']==$MIDinfo[$ig]['ID']) echo 'selected= "selected"'; ?>>
 <?php echo $MIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></td>
        
        <td style="  text-align:right;"><div style="   text-align:right; " >
                    <select style=" width:100px; min-width:100px; border:0px; 
                    color:rgba(22,22,22,1.00); font-size:14px; -webkit-appearance: none; 
   -moz-appearance: none;   appearance: none;  background-image:none!important;  padding: 5px;" 
                    name="IsPermanent" id="IsPermanent" class="form-control" 
                    onChange="getDrCr();" onBlur="getDrCr();" autofocus tabindex="-1" >
                        <option value="1" <?php  if($getVoucherAccount[$i]['IsPermanent']==1) echo 'selected= "selected"'; ?>> Yes </option>
                        <option value="0" <?php  if($getVoucherAccount[$i]['IsPermanent']==0) echo 'selected= "selected"'; ?>>  No </option>
                    </select> 
				</div>
                </td>
                <td>
                	<a href="" class="btn btn-primary" onClick="SaveVoucherAccount(<?php echo $getVoucherAccount[$i]['ID']; ?>,<?php echo $VoucherTypeID; ?>);">SAVE</a>
                </td>
    </tr>
 <?php	
	}
	elseif($getVoucherAccount[$i]['IsEditable']==0)
	{
	?>
	<tr>
    	<td><?php echo $Handle->getAccountType($getVoucherAccount[$i]['AccountTypeID']); ?></td>
        <td><?php echo $Handle->getDrCrBoolean($getVoucherAccount[$i]['DrCr']); ?></td>
        <td><?php echo $Handle->getCalculationMethod($getVoucherAccount[$i]['CalculationMethodID']); ?></td>
        <td style="text-align:right;"><?php echo $Handle->getIsPermanentBoolean($getVoucherAccount[$i]['IsTaxable']); ?></td>
        <td><?php echo $getVoucherAccount[$i]['Percentage']; ?></td>
        <td><?php echo $Handle->getAccountsName($getVoucherAccount[$i]['AcGroupID']); ?></td>
        <td><?php echo $Handle->getAccountsName($getVoucherAccount[$i]['AccountID']); ?></td>
        <td style="text-align:right;"><?php echo $Handle->getIsPermanentBoolean($getVoucherAccount[$i]['IsPermanent']); ?></td>
        <td>
        <a href="" class="btn btn-warning" onClick="setEditable(<?php echo $getVoucherAccount[$i]['ID']; ?>,<?php echo $VoucherTypeID; ?>);">Edit</a></td>
    </tr>
    <?php
	}
} ?>
</table>
</div>
 
     </div>
     </div>
<div id="Result"></div>


<script>
function setEditable(ID,VoucherTypeID)
{
	  var pg='app/controllers/vouchertype.php';
	  var Type="SetEditable";
	$.post(pg,{Type:Type,ID:ID,VoucherTypeID:VoucherTypeID},function(data){
		document.getElementById("Result").innerHTML=data;
		});
}
function SaveVoucherAccount(ID,VoucherTypeID)
{
	//ID, AccountTypeID, DrCr, CalculationMethodID, Percentage, AcGroupID, AccountID, IsPermanent, VoucherTypeID, IsEditable, IsDeleted
	//var IsDeleted=0;
	var AccountTypeID=document.getElementById("AccountTypeID").value;
	var DrCr=document.getElementById("DrCr").value;
	var CalculationMethodID=document.getElementById("CalculationMethodID").value;
	var Percentage=document.getElementById("Percentage").value;
	var AcGroupID=document.getElementById("AcGroupID").value;
	var AccountID=document.getElementById("AccountID").value;
	var IsPermanent=document.getElementById("IsPermanent").value;
	var IsTaxable=document.getElementById("IsTaxable").value;
	//var VoucherTypeID=document.getElementById("VoucherTypeID").value;
	var IsEditable=0;
	var IsDeleted=0;
	if (AccountTypeID==0)
	{
		var IsDeleted=1;
		}
	  var pg='app/controllers/vouchertype.php';
	  var Type="SaveVoucherAccount";
	  var fd={Type:Type, ID:ID, AccountTypeID:AccountTypeID, DrCr:DrCr, CalculationMethodID:CalculationMethodID, IsTaxable:IsTaxable, Percentage:Percentage, AcGroupID:AcGroupID, AccountID:AccountID, IsPermanent:IsPermanent, VoucherTypeID:VoucherTypeID, IsEditable:IsEditable, IsDeleted:IsDeleted};
	$.post(pg,fd,function(data){
		alert(data);
		$("#Result").html(data)});
	}

</script> 