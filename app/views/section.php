<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Section.php");
$Handle = new Section();
$MasterTypeID=45;
$MID=1;
?>

<div class="workspace">
  <div class="displayhead">Section<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveClass();" > <i class="fa fa-check-circle-o" aria-hidden="true"></i> Save </span> <span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" > <i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span> </div>
  <div class="panel-body" id="accordion1"> 

    <!--form class="form-horizontal" name="myform" id ="myform"   style="padding:15px;"-->
    
    <?php
$x=0;
$ID=0;
$ID=$_REQUEST['ID'];
$MID=$MID;
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
$DepartmentID=0;
$AddressID=0;
$Address='';
$State='';
$Country='';
$ContactNo='';
$TEL='';
$Email='';
$InCorporationDate=date("Y-m-d");
if($ID!=0)
{
	//$sql="SELECT * FROM tbl_master where mastertypeid=6 and MasterGroupID<>101 and ID=$ID order by MasterGroupID,Name";
	//echo $sql;
$getinfo = $Handle->StorageDetails($ID);
/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		$PDID=$getinfo[$x]["PDID"];
		$MID=$getinfo[$x]["MID"];
		$IsMaster=$getinfo[$x]["IsMaster"];
		$AddressID=$getinfo[$x]["AddressID"];
		$Name=$getinfo[$x]["Name"];
		$CODE=$getinfo[$x]["CODE"];
		$InCorporationDate=$getinfo[$x]["RegisterDate"]; 
		
		$State=$getinfo[$x]["State"];
		$Country=$getinfo[$x]["Country"];
		$ContactNo=$getinfo[$x]["ContactNo"];
		$TEL=$getinfo[$x]["TEL"];
		$Email=$getinfo[$x]["Email"];
		$DepartmentID=$getinfo[$x]["DepartmentID"];
		//echo $AddressID;
		if($AddressID!=0)
		{
		$getAddress = $Handle->AddressByID($getinfo[$x]['AddressID']);
 		$Address=$getAddress[0]['Address'];
		}
		else
		{
			$Address=''; 
			}
	}
}
       ?>
    
    <!--img class="blur-bgimage" src='images/header.jpg'--> 
    <span>
    <div id="Report"></div>
    <div class="con-hr">
      <input type="hidden" id="MasterTypeID" value="<?php echo $MasterTypeID; ?>">
       <input type="hidden" id="RegDate" name="RegDate"   value="<?php echo $InCorporationDate; ?>">
    <input type="hidden"  id="ID" name="ID" value="<?php echo $ID; ?>">
    <input type="hidden" id="PDID" name="PDID" value="<?php echo $PDID; ?>">
     
    <input type="hidden"  id="DepartmentID" name="DepartmentID" value="<?php echo $DepartmentID; ?>">
    
    <input type="hidden" name="address" id="address" value="">
      <input type="hidden" id="AddressID" name="AddressID" value="<?php echo $AddressID; ?>">
      <input type="hidden" name="LocalAddressID" id="LocalAddressID" value="1">
      <input type="hidden" name="IsMaster" id="IsMaster" value="<?php echo $IsMaster; ?>">
      <input type="hidden" name="PersonOrganisationID" id="PersonOrganisationID" value="0">
      <input type="hidden" name="AllocateRevenueItems" id="AllocateRevenueItems" value="0">
      <input type="hidden" name="AllocateNonRevenueItems" id="AllocateNonRevenueItems" value="0">
      
      <input type="hidden" name="Address" id="Address" value="<?php echo $Address; ?>">
      <input type="hidden" name="State" id="State" value="<?php echo $State; ?>">
      <input type="hidden" name="Country" id="Country" value="<?php echo $Country; ?>">
      <input type="hidden" name="ContactNo" id="ContactNo" value="<?php echo $ContactNo; ?>">
      <input type="hidden" name="Email" id="Email" value="<?php echo $Email; ?>">
     
    </div>
    <div class="form-group">
      <label class="control-label" for="Name">Name:</label>
      <div class="">
        
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name" value="<?php echo $Name; ?>">
      </div>
    </div>
    <div class="form-group">
  <label class="control-label" for="CODE">Label:</label>
  <div class="">
  <input type="text" class="form-control" id="CODE" name="CODE" placeholder="Enter CODE." value="<?php echo $CODE; ?>"> 
</div></div>
        <div class="form-group ">
      <label for="MID" class="control-label"  >Under:</label>
      <div class="">
        <select name="MID" id="MID" class="form-control" onChange="GetNature(this.value);">
          <option value="">Please select...</option>
          <?php
$getitemgroupinfo = $Handle->runQuery("SELECT ID,Name FROM tbl_master where MasterTypeID=4  order by Name");
$GroupID=$MID;
for ($ig = 0; $ig < count($getitemgroupinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getitemgroupinfo[$ig]['ID'];?>" <?php if($GroupID==$getitemgroupinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemgroupinfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    
    <!--div class="form-group">
  <label class="control-label" for="Address">Address:</label>
  <div class="">
   <textarea class="form-control " placeholder="Enter Address" id="Address"  name="Address" rows="3" >
  <?php echo ltrim($Address); ?></textarea>  
</div></div>

<div class="form-group"> 
  <label class="control-label" for="State">State:</label>
  <div class="">
  <input type="text" class="form-control" id="State"  name="State" placeholder="Enter State" value="<?php echo $State; ?>"> 
</div></div>

 <div class="form-group"> 
  <label class="control-label" for="Country" >Country:</label>
  <div class="">
  <input type="text" class="form-control" id="Country"  name="Country" placeholder="Enter Country" value="<?php echo $Country; ?>">
  <input type="hidden" class="form-control" id="tel" name="tel"  placeholder="Enter Telephone no" value="<?php echo $TEL; ?>">  
</div></div>
  
<div class="form-group">
  <label class="control-label" for="ContactNo">Mobile:</label>
  <div class="">
  <input type="text" class="form-control" id="ContactNo"  name="ContactNo" placeholder="Enter Mobile no" value="<?php echo $ContactNo; ?>"> 
</div></div>
  
 <div class="form-group">
 <label class="control-label" for="Email">Email:</label>
  <div class="">
 <input type="text" class="form-control" id="Email"  name="Email"  placeholder="Enter Email" value="<?php echo $Email; ?>"> 
</div></div-->

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
    
    <!--div class="form-group ">
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
    </div-->

      <span >
      <!--label for="MasterGroupID" class="control-label"  >Nature of Group</label-->
      <span class="" id="MasterGroupID_Display">
        
      </span>
    </span>
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
 GetNature(<?php echo $MID; ?>);
function GetNature(ID)
{
	var pg="app/controllers/Accounts.php";
	var Type="GetNature";
	//  alert(ID);
	$.post(pg,{Type:Type,ID:ID},function(data){
		document.getElementById("MasterGroupID_Display").innerHTML=data;
		document.getElementById("MasterGroup").type="hidden";
		});
}
function SaveCustomer0()
{
	var pg="app/controllers/Accounts.php";
	var Type="SaveCustomer";
	var ID=document.getElementById("ID").value;
	var MasterTypeID = document.getElementById("MasterTypeID").value;
	var Name=document.getElementById("Name").value;
	 
	var MID = document.getElementById("MID").value;
	var MasterGroupID = document.getElementById("MasterGroupID").value;
	var DrCr = document.getElementById("DrCr").value;
	//alert(DrCr);
	$.post(pg,{Type:Type,MasterTypeID:MasterTypeID,ID:ID,Name:Name,MID,MID,MasterGroupID:MasterGroupID,DrCr:DrCr},function(data){
		
		document.getElementById("Report").innerHTML=data;
		});
}
 function SaveStorage()
 {
	 	var pg='app/controllers/Save.Storage.php';
		 
	 var Type='SaveStorage';
	 var Name = $("#Name").val();
	 var MID = $("#MID").val();
	 var PDID = $("#PDID").val();
	  var CODE = $("#CODE").val();
	 var AddressID = $("#AddressID").val();
	 var ContactNo = $("#ContactNo").val();
	 var Address = $("#Address").val();
	 var RegDate = $("#RegDate").val();
	 var Email = $("#Email").val();
	 var State = $("#State").val();
	 var DepartmentID = $("#DepartmentID").val();
	 var Country = $("#Country").val();
	  var IsMaster = $("#IsMaster").val();
	 //alert(MID);
	 var ID = $("#ID").val();
		 
	var MasterTypeID = document.getElementById("MasterTypeID").value;
	   
	var MasterGroupID = document.getElementById("MasterGroupID").value;
	 
	var DrCr = document.getElementById("DrCr").value;
	
                $.post( pg, 
				{Type:Type,MasterTypeID:MasterTypeID,CODE:CODE,  ID:ID, MID:MID, PDID:PDID, Name:Name, AddressID:AddressID, ContactNo: ContactNo, Address: Address, RegDate: RegDate, Email: Email, State: State, Country:Country, IsMaster:IsMaster,MasterGroupID:MasterGroupID,DrCr:DrCr,DepartmentID:DepartmentID})
                    .done(function( data ) {
						//alert(DrCr);
						document.getElementById("Report").innerHTML=data;
                        //$("#message").html(data);
					  window.location.reload();
						document.getElementById("Name").focus();
						 /*if(data==0)
							 {
								 redirectBypagewithIDValue('error',PageID,MasterID);
								 }*/
                    });
            //    e.preventDefault();
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