<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.News.php");
?>
 
 
 
<div class="workspace">
<div class="displayhead">News Index


<!--span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('payroll',0,0);" >
	<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span-->

<!--span style=""  name="Operation"   class="btn btn-primary pull-right"  
onClick="redirectBypagewithIDValue('indexpayrollperiod',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Payroll Period
</span-->
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('news',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> New
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>

</div>
 

  <div class="panel-body" id="accordion1">
 
   <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>Date</th><th>News</th> 	<th style="text-align:right;">...</th>
  </tr>
 <?php
 $Handle = new News();
	$getinfo = $Handle->NewsReport();
 /* WHERE MasterTypeID=1");*/
/*echo sizeof($getcompanyinfo,1)."<br>";
echo sizeof($getcompanyinfo,0)."<br>";
echo count($getcompanyinfo,1)."<br>";
echo count($getcompanyinfo,0)."<br>";
echo $getcompanyinfo[0]["Name"];*/

for ($x = 0; $x < count($getinfo,0); $x++) {
	
   
       ?>
       
       <tr>
  	<td><?php echo $getinfo[$x]["NewsDate"]; ?></td>
     <td style="font-weight:bold;"><?php echo $getinfo[$x]["HeadLine"]; ?></td>
     <td style="text-align:right;"><span class="btn " onClick="redirectBypagewithIDValue('news',1,<?php echo $getinfo[$x]["ID"]; ?>)">Open</span></td>
  </tr>
      
<?php
} 
?>
  </table>
             
  
    </div> 
</div>
 

 
 
