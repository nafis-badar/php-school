<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Teacher.php");
?>
 
 
 
<div class="workspace">
<div class="displayhead">Teacher's Record
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onclick="redirectBypagewithIDValue('menu',0,0);" >
	 DASHBOARD
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('teacher',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>

</div>
 

  <div class="panel-body" id="accordion1">
 
   <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>CODE</th><th>Name</th>	<th>Location</th>	<th>Department</th>	<th style="text-align:right;">...</th>
  </tr>
 <?php
 $Handle = new Teacher();
	$getinfo = $Handle->TeacherReport();
 /* WHERE MasterTypeID=1");*/
/*echo sizeof($getcompanyinfo,1)."<br>";
echo sizeof($getcompanyinfo,0)."<br>";
echo count($getcompanyinfo,1)."<br>";
echo count($getcompanyinfo,0)."<br>";
echo $getcompanyinfo[0]["Name"];*/

for ($x = 0; $x < count($getinfo,0); $x++) {
	
  $getaddress = $Handle->AddressByID($getinfo[$x]['AddressID']);
       ?>
       
       <tr>
  	<td><?php echo $getinfo[$x]["CODE"]; ?></td><td><?php echo $getinfo[$x]["Name"]; ?></td><td><?php echo $getaddress[0]["Address"]; ?>		</td>	<td><?php 	$getMaster=	$Handle->MasterByID($getinfo[$x]['DepartmentID']);
	echo $getMaster[0]['Name'];
	 ?></td><td style="text-align:right;"><span class="btn btn-primary" onClick="redirectBypagewithIDValue('teacher',1,<?php echo $getinfo[$x]["ID"]; ?>)">Open</span></td>
  </tr>
      
<?php
} 
?>
  </table>
             
  
    </div> 
</div>
 

 
 
