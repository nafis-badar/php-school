<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Accounts.php");
$Handle = new Accounts();
$MasterTypeID=6;
?>

<div class="workspace">
  <div class="displayhead">Account Group <span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveAcGroup();" > <i class="fa fa-check-circle-o" aria-hidden="true"></i> Save </span> 
  <span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" > <i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span> </div>
  <div class="panel-body" id="accordion1"> 

    <!--form class="form-horizontal" name="myform" id ="myform"   style="padding:15px;"-->
    
    <?php
$x=0;
$ID=0;
$ID=$_REQUEST['ID'];
$MID=0;
$CODE='';
$MembershipID=0;
$Name='';
$Alias='';
$PrintName='';
$Description='';
$MasterTypeID=$MasterTypeID;
$DrCr=0;
$Debit=0;
$Credit=0;
$IsMaster=0;
$IsMasterGroup=0;
$CostCategoryID=0;
$MasterGroupID=0;
$DesignationID=0;
$PersonOrganisationID=0;
$AllocateRevenueItems=0;
$AllocateNonRevenueItems=0;
$AccountID=0;
$IsActive=0;
$IsBehaveAsSubLedger=0;
$IsAffectGrossProfit=0;
$SORT=0;
$CreditPeriod=0;
$CreditLimit=0;
$MaintainBillByBill=0;
$TaxClassID=0;
$TaxTypeID=0;
$Percentage=100;
$IsCalculative=0;
$OpeningBalance=0;
$ClosingBalance=0;
$Asset=0;
$Liabilities=0;
$Expense=0;
$Income=0;
$NetDebitCreditBalanceForReporting=0;
$UseForCalculation=0;
$AllocationMethodID=0;
$CreatedBy=1;
$ModifiedBy=1;
$CreateTime='';
$ModifyTime='';
$PDID='';
$Nominee='';
$Relation='';
$NomineeAge=0;
$NomineeDOB='';
$NomineeContact='';
$NomineeAddressID=0;
$OperationArea='';
$OfficeID;
$DocumentNo='';
$RegisterDate='';
$ImageID=0;

if($ID!=0)
{
	//$sql="SELECT * FROM tbl_master where mastertypeid=6 and MasterGroupID<>101 and ID=$ID order by MasterGroupID,Name";
	//echo $sql;
$getinfo = $Handle->getMasterinfo($ID);
/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		$MID=$getinfo[$x]["MID"];
		$CODE=$getinfo[$x]["CODE"];
		$MembershipID=$getinfo[$x]["MembershipID"];
		$Name=$getinfo[$x]["Name"];
		//echo $Name;
		$Alias=$getinfo[$x]["Alias"];
		$PrintName=$getinfo[$x]["PrintName"];
		$Description=$getinfo[$x]["Description"];
		$MasterTypeID=$getinfo[$x]["MasterTypeID"];
		$DrCr=$getinfo[$x]["DrCr"];
		$Debit=$getinfo[$x]["Debit"];
		$Credit=$getinfo[$x]["Credit"];
		$IsMaster=$getinfo[$x]["IsMaster"];
		$IsMasterGroup=$getinfo[$x]["IsMasterGroup"];
		$CostCategoryID=$getinfo[$x]["CostCategoryID"];
		$MasterGroupID=$getinfo[$x]["MasterGroupID"];
		$DesignationID=$getinfo[$x]["DesignationID"];
		$PersonOrganisationID=$getinfo[$x]["PersonOrganisationID"];
		$AllocateRevenueItems=$getinfo[$x]["AllocateRevenueItems"];
		$AllocateNonRevenueItems=$getinfo[$x]["AllocateNonRevenueItems"];
		$AccountID=$getinfo[$x]["AccountID"];
		$IsActive=$getinfo[$x]["IsActive"];
		$IsBehaveAsSubLedger=$getinfo[$x]["IsBehaveAsSubLedger"];
		$IsAffectGrossProfit=$getinfo[$x]["IsAffectGrossProfit"];
		$SORT=$getinfo[$x]["SORT"];
		$CreditPeriod=$getinfo[$x]["CreditPeriod"];
		$CreditLimit=$getinfo[$x]["CreditLimit"];
		$MaintainBillByBill=$getinfo[$x]["MaintainBillByBill"];
		$TaxClassID=$getinfo[$x]["TaxClassID"];
		$TaxTypeID=$getinfo[$x]["TaxTypeID"];
		$Percentage=$getinfo[$x]["Percentage"];
		$IsCalculative=$getinfo[$x]["IsCalculative"];
		$OpeningBalance=$getinfo[$x]["OpeningBalance"];
		$ClosingBalance=$getinfo[$x]["ClosingBalance"];
		$Asset=$getinfo[$x]["Asset"];
		$Liabilities=$getinfo[$x]["Liabilities"];
		$Expense=$getinfo[$x]["Expense"];
		$Income=$getinfo[$x]["Income"];
		$NetDebitCreditBalanceForReporting=$getinfo[$x]["NetDebitCreditBalanceForReporting"];
		$UseForCalculation=$getinfo[$x]["UseForCalculation"];
		$AllocationMethodID=$getinfo[$x]["AllocationMethodID"];
		$CreatedBy=$getinfo[$x]["CreatedBy"];
		$ModifiedBy=$getinfo[$x]["ModifiedBy"];
		$CreateTime=$getinfo[$x]["CreateTime"];
		$ModifyTime=$getinfo[$x]["ModifyTime"];
		$PDID=$getinfo[$x]["PDID"];
		$Nominee=$getinfo[$x]["Nominee"];
		$Relation=$getinfo[$x]["Relation"];
		$NomineeAge=$getinfo[$x]["NomineeAge"];
		$NomineeDOB=$getinfo[$x]["NomineeDOB"];
		$NomineeContact=$getinfo[$x]["NomineeContact"];
		$NomineeAddressID=$getinfo[$x]["NomineeAddressID"];
		$OperationArea=$getinfo[$x]["OperationArea"];
		$OfficeID=$getinfo[$x]["OfficeID"];
		$DocumentNo=$getinfo[$x]["DocumentNo"];
		$RegisterDate=$getinfo[$x]["RegisterDate"];
		$ImageID=$getinfo[$x]["ImageID"];

	}
}
       ?>
    
    <!--img class="blur-bgimage" src='images/header.jpg'--> 
    <span>
    <div id="Report"></div>
    <div class="con-hr">
      <input type="hidden" id="MasterTypeID" value="<?php echo $MasterTypeID; ?>">
    <input type="hidden"  id="ID" name="ID" value="<?php echo $ID; ?>">
    <input type="hidden" name="address" id="address" value="">
      <input type="hidden" name="AddressID" id="AddressID" value="1">
      <input type="hidden" name="LocalAddressID" id="LocalAddressID" value="1">
      <input type="hidden" name="IsMaster" id="IsMaster" value="0">
      <input type="hidden" name="PersonOrganisationID" id="PersonOrganisationID" value="0">
      <input type="hidden" name="AllocateRevenueItems" id="AllocateRevenueItems" value="0">
      <input type="hidden" name="AllocateNonRevenueItems" id="AllocateNonRevenueItems" value="0">
    </div>
    <div class="form-group">
      <label class="control-label" for="Name">Name:</label>
      <div class="">
        
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name" value="<?php echo $Name; ?>">
      </div>
    </div>
    
    <!--div class="form-group">
  <label class="control-label" for="Alias">Alias:</label>
  <div class="">
  <input type="text" class="form-control" id="Alias" name="Alias" placeholder="Enter alias" value="<?php echo $Alias; ?>"> 
</div></div>

     <div class="form-group">
  <label class="control-label" for="CODE">Account No.:</label>
  <div class="">
  <input type="text" class="form-control" id="CODE" name="CODE" placeholder="Enter Account No." value="<?php echo $CODE; ?>"> 
</div></div-->
    
    <div class="form-group ">
      <label for="MID" class="control-label"  >Under:</label>
      <div class="">
        <select name="MID" id="MID" class="form-control" onChange="GetNature(this.value);">
          <option value="">Please select...</option>
          <?php
$getitemgroupinfo = $Handle->runQuery("SELECT ID,Name FROM tbl_master where mastertypeid=6 and (ismastergroup=0 or ismaster=1) order by Name");
$GroupID=$MID;
for ($ig = 0; $ig < count($getitemgroupinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getitemgroupinfo[$ig]['ID'];?>" <?php if($GroupID==$getitemgroupinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemgroupinfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
      </div>
    </div>

    <div class="form-group" >
      <label for="MasterGroupID" class="control-label"  >Nature of Group</label>
      <div class="" id="MasterGroupID_Display">
        
      </div>
    </div>
    <!--div class="form-group ">
      <label for="IsAffectGrossProfit" class="control-label"  >IsAffectGrossProfit ?</label>
      <div class="">
        <select name="IsAffectGrossProfit" id="IsAffectGrossProfit" class="form-control">
          <option value="1"  <?php if($IsAffectGrossProfit=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($IsAffectGrossProfit=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="IsBehaveAsSubLedger" class="control-label"  >Group Behave as Sub-Ledger ?</label>
      <div class="">
        <select name="IsBehaveAsSubLedger" id="IsBehaveAsSubLedger" class="form-control">
          <option value="1" <?php if($IsBehaveAsSubLedger=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($IsBehaveAsSubLedger=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="NetDebitCreditBalanceForReporting" class="control-label"  >Net Debit/Credit balance for reporting ?</label>
      <div class="">
        <select name="NetDebitCreditBalanceForReporting" id="NetDebitCreditBalanceForReporting" class="form-control">
          <option value="1" <?php if($NetDebitCreditBalanceForReporting=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($NetDebitCreditBalanceForReporting=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="UseForCalculation" class="control-label"  >Used For Calculation [Tax & Discounts] [for Sales Invoice entry] ?</label>
      <div class="">
        <select name="UseForCalculation" id="UseForCalculation" class="form-control">
          <option value="1"  <?php if($UseForCalculation=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($UseForCalculation=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="AllocationMethodID" class="control-label"  >Method to Allocate when used in Purchase Invoice ?</label>
      <div class="">
        <select name="AllocationMethodID" id="AllocationMethodID" class="form-control">
          <option value="1"  <?php if($AllocationMethodID=="0") echo 'selected= "selected"'; ?>>NOT APPLICABLE</option>
          <option value="0"  <?php if($AllocationMethodID=="1") echo 'selected= "selected"'; ?>>APPROPRIATE BY QTY</option>
          <option value="0"  <?php if($AllocationMethodID=="2") echo 'selected= "selected"'; ?>>APPROPRIATE BY VALUE</option>
          <option value="0"  <?php if($AllocationMethodID=="3") echo 'selected= "selected"'; ?>>NO APPRICIATION</option>
        </select>
      </div>
    </div-->
    <!--div class="form-group ">
	<label for="Description" class="control-label"  >Description</label>
	<div class="">
		<textarea  name="Description" id="Description" class="form-control" style="height:150px;"><?php echo $Description; ?></textarea>
        
</div>
</div--> 
    
    </span>
    
  </div>
</div>

<!--script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script--> 
<script>
 GetNature(<?php echo $ID; ?>);
function GetNature(ID)
{
	var pg="app/controllers/Accounts.php";
	var Type="GetNature";
	 
	$.post(pg,{Type:Type,ID:ID},function(data){
		document.getElementById("MasterGroupID_Display").innerHTML=data;
		});
}
function SaveAcGroup()
{
	var pg="app/controllers/Accounts.php";
	var Type="SaveAcGroup";
	var ID=document.getElementById("ID").value;
	var MasterTypeID = document.getElementById("MasterTypeID").value;
	var Name=document.getElementById("Name").value;
	//alert(Name);
	var MID = document.getElementById("MID").value;
	var MasterGroupID = document.getElementById("MasterGroupID").value;
	var DrCr = document.getElementById("DrCr").value;
	//alert(DrCr);
	$.post(pg,{Type:Type,MasterTypeID:MasterTypeID,ID:ID,Name:Name,MID,MID,MasterGroupID:MasterGroupID,DrCr:DrCr},function(data){
		//alert(data);
		document.getElementById("Report").innerHTML=data;
		});
}
function getDrCr()
{
	var pg="app/controllers/Accounts.php";
	var Type="DrCr";
	var MasterGroupID = document.getElementById("MasterGroupID").value;
	 //alert(MasterGroupID);
	$.post(pg,{Type:Type,MasterGroupID:MasterGroupID},function(data){
		document.getElementById("DrCr").value=data;
		});
	}
function saveitem(val01,val02,val03) {
	//val01=row or GUI GENERATE ID WE CAN CALL VIEW_ID
	//val02=ITEM_ID
	//val03=what to save (1= id,name,alias,partno,_desc     
						//2=Item or Product Group and Category
						//3= UNIT, ALTERNATE UNIT, STANDARD COST, STANDARD PRICE, COSTING METHOD, PRICING METHOD
						//4= IsFinishGoods,IsRawMaterial, IsUnfinishGoods, IsFinancialItem, IsStockItem, Is Non Stock Item, IsNegetiveSalesAllow, IsSalesAsNewManufacture, IsPurchaseAsConsumed, IsRejectionAsScrap
	//e.preventDefault();
 // console.log(42);
 var resultelementid='saveresult'+val01;
 	
  	 var formname='myform'+val01;
	//alert(val01);
	//alert(formname);
	var Name=document.getElementById("name"+val01).value;
	//alert(name);
	var id=document.getElementById("id"+val01).value;
	//alert(id);
	
	
	var alias=document.getElementById("alias"+val01).value;
	
		var code=document.getElementById("code"+val01).value;
		var c = document.getElementById("group"+val01);
		var MID=c.options[c.selectedIndex].value;
		
		var d = document.getElementById("MasterGroupID"+val01);
		var MasterGroupID=d.options[d.selectedIndex].value;
		
		var e = document.getElementById("IsAffectGrossProfit"+val01);
		var IsAffectGrossProfit=e.options[e.selectedIndex].value;
		 
	 	var f = document.getElementById("IsBehaveAsSubLedger"+val01);
		 
	 	var IsBehaveAsSubLedger=f.options[f.selectedIndex].value;
		 
		/*/ var g = document.getElementById("DrCr"+val01);
		var DrCr=g.options[g.selectedIndex].value;*/
		var DrCr=1;
		
		 var h = document.getElementById("NetDebitCreditBalanceForReporting"+val01);
		var NetDebitCreditBalanceForReporting=h.options[h.selectedIndex].value;
		
		 var i = document.getElementById("UseForCalculation"+val01);
		var UseForCalculation=i.options[i.selectedIndex].value;
		
		 var j = document.getElementById("AllocationMethodID"+val01);
		var AllocationMethodID=j.options[j.selectedIndex].value;
		var IsMaster=0;
		var IsMasterGroup=0;
		var desc=document.getElementById("desc"+val01).value;
		
			//var _desc=document.getElementById(formname).elements["_desc"+val01].value;
		//	alert(name+id+alias+code+j);
	// alert(name+id+alias+code+j);
	 $("#"+resultelementid).empty();
	//   var myform = document.getElementById(formname);
	var fd ='';
	//alert(IsBehaveAsSubledger, IsAffectGrossProfit, DrCr, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, IsMaster, IsMasterGroup);
	if (val03==1)
	//ID, MID, MasterGroupID, Name, Alias, CODE,MID:MID,MasterGroupID:MasterGroupID, IsBehaveAsSubledger, IsAffectGrossProfit, DrCr, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, IsMaster, IsMasterGroup, CreatedBy, ModifiedBy, Createtime, ModifyTime
	//alert(desc);
	fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID,IsBehaveAsSubLedger:IsBehaveAsSubLedger, IsAffectGrossProfit:IsAffectGrossProfit, DrCr:DrCr, NetDebitCreditBalanceForReporting:NetDebitCreditBalanceForReporting, UseForCalculation:UseForCalculation, AllocationMethodID:AllocationMethodID, IsMaster:IsMaster, IsMasterGroup:IsMasterGroup,desc:desc};
	//fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID};
	//alert(resultelementid);
     var pg='modules/sql/sql.acledger.php';
	$.post(pg,fd,function(data){$("#"+resultelementid).html(data)});
/*	$.ajax({
            type: 'POST',
            url: 'modules/sql.item.php',
            data: fd,
            success: function (dataofconfirm) {
				      alert(dataofconfirm);
            }
          });*/

 
}
</script> 