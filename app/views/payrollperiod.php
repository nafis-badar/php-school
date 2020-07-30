<?php
if (!isset($_SESSION)) {session_start();}

require_once("CTL.Payroll.php");

 $Handle = new Payroll();

$ID=$_REQUEST['ID'];
 
$Name='';
$CODE='';
$FromDate=date("Y-m-d"); 
$ToDate=date("Y-m-d"); 
 
?>
 
<div class="workspace">
<div class="displayhead">Payroll Period Settings
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SavePayrollPeriod();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>
<div id="message" style="font-size:12px;"></div>
</div>
<div class="panel-body" id="accordion1">

<?php
if ($ID!=0)
{
	
	$getinfo = $Handle->PayrollPeriodDetails($ID);

	for ($x = 0; $x < count($getinfo,0); $x++) 
	{
		//$ID=$_REQUEST['ID'];
		//echo $ID;
		//ID, Name, FromDate, ToDate, CreatedBy, CreateTime, ModifyBy, ModifyTime
		$ID=$getinfo[$x]["ID"];
		 
		$Name=$getinfo[$x]["Name"];
	 
		$FromDate=$getinfo[$x]["FromDate"]; 
		$ToDate=$getinfo[$x]["ToDate"]; 
		 
		//echo $AddressID;
		 
	} 
}
?>
       
 
 <div class="form-group">
  
 <?php //echo $Name; ?> 
<input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>">
 
  </div> 
   <div class="form-group col-md-4">
  <label class="control-label" for="Name">Name:</label>
   <div class="">
  <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name" value="<?php echo $Name; ?>"> 
 
  
</div> </div> 
 
  
 
 
  <div class="form-group col-md-4">
  <label class="control-label" for="FromDate">From Date:</label>
  <div class="">
  <input type="date" class="form-control" id="FromDate" name="FromDate"  placeholder="Enter Registration Date" value="<?php echo $FromDate; ?>"> 
</div></div>
<div class="form-group col-md-4">
  <label class="control-label" for="ToDate">ToDate :</label>
  <div class="">
  <input type="date" class="form-control" id="ToDate" name="ToDate"  placeholder="Enter To Date" value="<?php echo $ToDate; ?>"> 
</div></div>
 
 


   </div>
 <script type="text/javascript" src="app/libs/js/Payroll.js"></script>
    </div>

