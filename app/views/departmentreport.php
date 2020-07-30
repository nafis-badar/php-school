<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Department.php");
?>
 
 
 
<div class="workspace">
<div class="displayhead">Department Index
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onclick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('department',0,0);" >
	
<i class="glyphicon glyphicon-book " aria-hidden="true"></i> New</span>

</div>
  <div class="panel-body" id="accordion1">
 
   <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>CODE</th><th>Name</th>	<th>Location</th>	<th>Department</th>	<th style="text-align:right;">...</th>
  </tr>
 <?php
$department_handle = new Department();
	$getinfo = $department_handle->DepartmentReport();
for ($x = 0; $x < count($getinfo,0); $x++) {
		
  $getaddress = $department_handle->AddressByID($getinfo[$x]['AddressID']);
       ?>
       
              <tr>
  	<td><?php echo $getinfo[$x]["CODE"]; ?></td><td><?php echo $getinfo[$x]["Name"]; ?></td><td><?php echo $getaddress[0]["Address"]; ?>		</td>	<td><?php 	echo $department_handle->DepartmentName($getinfo[$x]['MID']); ?>	</td><td style="text-align:right;"><span class="btn btn-primary" onClick="redirectBypagewithIDValue('department',1,<?php echo $getinfo[$x]["ID"]; ?>)">Open</span></td>
  </tr>
      
   
<?php
} 
?>
  </table>
                   
  
    </div> 
</div>
</div>

 
 
