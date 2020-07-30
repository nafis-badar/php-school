<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Department.php");
 
  $department_handle = new Department();
  
$ID=$_REQUEST['ID'];
//echo $ID;
$PDID=0;
$MID=1;
$IsMaster=1;
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

?>
  
<div class="workspace">
<div class="displayhead">Department Information
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onclick="SaveDepartment();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>

</div>
<div class="panel-body" id="accordion1">


<?php
if ($ID!=0)
{
	
	$getinfo = $department_handle->DepartmentDetails($ID);
	for ($x = 0; $x < count($getinfo,0); $x++) 
	{
		//$ID=$_REQUEST['ID'];
		//echo $ID;
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
		//echo $AddressID;
		if($AddressID!=0)
		{
		$getAddress = $department_handle->AddressByID($getinfo[$x]['AddressID']);
 		$Address=$getAddress[0]['Address'];
		}
		else
		{
			$Address=''; 
			}
	} 
}
?>
 
 
 

   <div class="form-group">
   <input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>">
<input type="hidden" id="PDID" name="PDID" value="<?php echo $PDID; ?>">
<input type="hidden" id="AddressID" name="AddressID" value="<?php echo $AddressID; ?>">
<input type="hidden" id="Address"  name="Address" value="<?php echo $Address; ?>">
<input type="hidden" id="State"  name="State" value="<?php echo $State; ?>"> 
<input type="hidden" id="Country"  name="Country" value="<?php echo $Country; ?>"> 
  <label class="control-label" for="Name">Name:</label>
   <div class="">
  <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name" value="<?php echo $Name; ?>"> 
 
  
</div> </div> 
<div class="form-group">
  <label class="control-label" for="name">CODE:</label>
   <div class="">
  <input type="text" class="form-control" id="CODE" name="CODE" placeholder="Enter Name" value="<?php echo $CODE; ?>"> 
 
  
</div> </div> 
  <div class="form-group">
  <label class="control-label" for="RegDate">Start Date:</label>
  <div class="">
  <input type="date" class="form-control" id="RegDate" name="RegDate"  placeholder="Enter Registration Date" value="<?php echo $InCorporationDate; ?>"> 
</div></div>
 
 
<div class="form-group  ">
  <label class="control-label" for="mob">Mobile:</label>
  <div class="">
  <input type="text" class="form-control" id="ContactNo"  name="ContactNo" placeholder="Enter Mobile no" value="<?php echo $ContactNo; ?>"> 
	</div>
</div>
  
 <div class="form-group  ">
 
  <label class="control-label" for="email">Email:</label>
  <div class="">
  <input type="text" class="form-control" id="email"  name="email"  placeholder="Enter email" value="<?php echo $Email; ?>"> 
 
</div></div>
 <div class="form-group  ">
 
  <label class="control-label" for="IsMaster" style="font-weight:bold;">TYPE:</label>
  <div class="">
 
  <select class="form-control" id="IsMaster"  name="IsMaster" style="font-size:22px!important; height:auto!important;" onBlur="SetMasterInfo(this.value);">
  
  <option value="1" <?php if($IsMaster==1){echo 'selected="selected"';} ?>>Master Department</option>
  <option value="0" <?php if($IsMaster==0){echo 'selected="selected"';} ?>>Sub Department</option>
  </select>
 
 
  
</div> </div> 
 <div class="form-group  ">
 
  <label class="control-label" for="MID" style="font-weight:bold;">Controlled By:</label>
  <div class="">
 
  <select class="form-control" id="MID"  name="MID" style="font-size:22px!important; height:auto!important;">
   
  <?php
  $sql="SELECT ID,Name from tbl_master where MasterTypeID=1 or MasterTypeID=4 or MasterTypeID=18 or MasterTypeID=35 order by MasterTypeID=1 desc,Name";
  echo $sql;
  $getOffice=$db_handle->runQuery($sql);
  for ($i=0; $i<sizeof($getOffice); $i++)
  {
  ?>
  <option value="<?php echo $getOffice[$i]['ID']; ?>" <?php if($MID==$getOffice[$i]['ID']){echo 'selected="selected"';} ?>><?php echo $getOffice[$i]['Name']; ?></option>
  <?php } ?>
  </select>
 
 
</div></div>
  
 
    
      <!--div style="text-align:right;"><a class="btn btn-black btn-block">Update</a></div--> 

      </div>

 </div>
 