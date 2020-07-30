<?php
if (!isset($_SESSION)) {session_start();}

require_once("CTL.Employee.php");

 $employee_handle = new Employee();

$ID=$_REQUEST['ID'];
//echo $ID;
$PDID=0;
$MID=1;
$IsMaster=0;
$AddressID=0;
$Name='';
$CODE='';
$InCorporationDate=date("Y-m-d"); 
$Address='';
$State='';
$Country='';
$ContactNo='';
$TEL='';
$Email='';
$DepartmentID=0;
?>
 
<div class="workspace">
<div class="displayhead">Employee Information
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveEmployee();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>
<div id="message"></div>
</div>
<div class="panel-body" id="accordion1">

<?php
if ($ID!=0)
{
	
	$getinfo = $employee_handle->EmployeeDetails($ID);

	for ($x = 0; $x < count($getinfo,0); $x++) 
	{
		//$ID=$_REQUEST['ID'];
		//echo $ID;
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
		$getAddress = $employee_handle->AddressByID($getinfo[$x]['AddressID']);
 		$Address=$getAddress[0]['Address'];
		}
		else
		{
			$Address=''; 
			}
			//echo $Address;
	} 
}
?>
       
 
 <div class="form-group">
  
 <?php //echo $Name; ?> 
<input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>">
<input type="hidden" id="PDID" name="PDID" value="<?php echo $PDID; ?>">
<input type="hidden" id="AddressID" name="AddressID" value="<?php echo $AddressID; ?>">
  </div> 
   <div class="form-group">
  <label class="control-label" for="Name">Name:</label>
   <div class="">
  <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name" value="<?php echo $Name; ?>"> 
 
  
</div> </div> 
<div class="form-group">
  <label class="control-label" for="CODE">CODE:</label>
   <div class="">
  <input type="text" class="form-control" id="CODE" name="CODE" placeholder="Enter CODE" value="<?php echo $CODE; ?>"> 
 
  
</div> </div> 
  <div class="form-group">
  <label class="control-label" for="RegDate">Joining Date:</label>
  <div class="">
  <input type="date" class="form-control" id="RegDate" name="RegDate"  placeholder="Enter Registration Date" value="<?php echo $InCorporationDate; ?>"> 
</div></div>

<div class="form-group">
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
</div></div>

 <div class="form-group">
 <label class="control-label" for="IsMaster" style="font-weight:bold;">Employee Type:</label>
  <div class="">
  <select class="form-control" id="IsMaster"  name="IsMaster" style="font-size:22px!important; height:auto!important;" onBlur="SetMasterInfo(this.value);">
  	<option value="0" <?php if($IsMaster==0){echo 'selected="selected"';} ?>>Paid Employee</option>
  </select>
 </div> </div> 
 
 <div class="form-group">
  <label class="control-label" for="DepartmentID" style="font-weight:bold;">Department:</label>
  <div class="">
  <select class="form-control" id="DepartmentID"  name="DepartmentID" style="font-size:22px!important; height:auto!important;">
  <?php
  $sql="SELECT ID,Name from tbl_master where MasterTypeID=26 order by Name";
  //echo $sql;
  $getOffice=$employee_handle->runQuery($sql);
  for ($i=0; $i<sizeof($getOffice); $i++)
  {
  ?>
  <option value="<?php echo $getOffice[$i]['ID']; ?>" <?php if($DepartmentID==$getOffice[$i]['ID']){echo 'selected="selected"';} ?>><?php echo $getOffice[$i]['Name']; ?></option>
  <?php } ?>
  </select>
 
 
</div></div>
 <div class="form-group">
 
  <label class="control-label" for="MID" style="font-weight:bold;">Under:</label>
  <div class="">
  <select class="form-control" id="MID"  name="MID" style="font-size:22px!important; height:auto!important;">
  <?php
  $sql="SELECT ID,Name from tbl_master where MasterTypeID=1 or MasterTypeID=27 order by MasterTypeID=1 desc,Name";
  //echo $sql;
  $getOffice=$employee_handle->runQuery($sql);
  for ($i=0; $i<sizeof($getOffice); $i++)
  {
  ?>
  <option value="<?php echo $getOffice[$i]['ID']; ?>" <?php if($MID==$getOffice[$i]['ID']){echo 'selected="selected"';} ?>><?php echo $getOffice[$i]['Name']; ?></option>
  <?php } ?>
  </select></div>
  
  </div>


   </div>
 <script type="text/javascript" src="app/libs/js/Employee.js"></script>
    </div>

