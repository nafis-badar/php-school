<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Payroll.php");
?>
 
 
 
<div class="workspace">
<div class="displayhead">Payroll Period Index
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('payrollperiod',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> Create Period</span>

<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>

</div>
 

  <div class="panel-body" id="accordion1">
 
   <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>Name</th>	<th>FromDate</th>	<th>ToDate</th>	<th style="text-align:right;">...</th>
  </tr>
 <?php
 $Handle = new Payroll();
	$getinfo = $Handle->PayrollPeriodReport();
 /* WHERE MasterTypeID=1");*/
/*echo sizeof($getcompanyinfo,1)."<br>";
echo sizeof($getcompanyinfo,0)."<br>";
echo count($getcompanyinfo,1)."<br>";
echo count($getcompanyinfo,0)."<br>";
echo $getcompanyinfo[0]["Name"];*/

for ($x = 0; $x < count($getinfo,0); $x++) {
	
  
       ?>
       
       <tr>
  	 <td><?php echo $getinfo[$x]["Name"]; ?></td>
     <td><?php echo $getinfo[$x]["FromDate"]; ?></td>	
     <td><?php echo $getinfo[$x]["ToDate"]; ?></td>
     <td style="text-align:right;">
     
	<?php
    if($Handle->PayrollExist($getinfo[$x]["ID"])>0)
	{
		?>
        <span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right " onClick="redirectBypagewithIDValue('payroll',1,<?php echo $getinfo[$x]["ID"]; ?>);" >		
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> Open Payroll</span>
        <?php
	}
	else
	{
	?>
    <span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right" 
    onClick="CreatePayroll(<?php echo $getinfo[$x]["ID"]; ?>);" >		
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> Create Payroll</span>
 <?php
	}
	?>
     <span class="btn btn-primary" 
     onClick="redirectBypagewithIDValue('payrollperiod',1,<?php echo $getinfo[$x]["ID"]; ?>)">Edit Period</span>
    
     </td>
  </tr>
      
<?php
} 
?>
  </table>
 <script type="text/javascript" src="app/libs/js/Payroll.js"></script>
 
    </div> 
</div>
 

 
 
