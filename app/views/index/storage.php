 <?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Storage.php");
$StorageHandle = new Storage();
?>
<div class="workspace">
<div class="displayhead">Storage Index
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('storage',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>

</div>
  <div class="panel-body" id="accordion1">
  
    <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>Name</th>	<th>Label</th><th>Under</th>	 	<th style="text-align:right;">...</th>
  </tr>
<?php
$getinfo = $StorageHandle->StorageReport();
 //echo count($getinfo,0);
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
<?php   
//$MasterGroupID =$getinfo[$x]['MasterGroupID'];
//$getMasterinfo = $StorageHandle->getMasterinfo($MasterGroupID);
?>
  <tr>
  <td><?php echo $getinfo[$x]["Name"]; ?></td>
  	<td><?php echo $getinfo[$x]["CODE"]; ?></td>
    
    <td><?php  echo $StorageHandle->StorageName($getinfo[$x]["MID"]); ?></td>
     
    <td style="text-align:right;"><span class="btn btn-primary" onClick="redirectBypagewithIDValue('storage',1,<?php echo $getinfo[$x]["ID"]; ?>)">Config</span></td>
  </tr>

<?php

} 
 
?>
 </table>
</div>
</div>


<!--script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script-->
 

