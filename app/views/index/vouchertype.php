 <?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.VoucherType.php");
$Handle = new VoucherType();
?>
<div class="workspace">
<div class="displayhead">Voucher Type Index
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('vouchertype',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> 
Back
</span>
</div>
 

  <div class="panel-body" id="accordion1">
   <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>CODE</th><th>Name</th>	<th>Type</th>	<th>Nature</th>	<th style="text-align:right;">...</th>
  </tr>
<?php

$getinfo = $Handle->getVoucherTypeIndex();
 
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
  <tr>
  	<td><?php echo $getinfo[$x]["Alias"]; ?></td>
    <td><?php echo $getinfo[$x]["Name"]; ?></td>
    <td><?php echo $Handle->getVoucherName($getinfo[$x]["MID"]); ?></td>
    <td> </td>
    <td style="text-align:right;"><span class="btn btn-primary" onClick="redirectBypagewithIDValue('vouchertype',1,<?php echo $getinfo[$x]["ID"]; ?>)">Open</span></td>
  </tr>
 
<?php

} 
 
?>
</table>
</div>
</div>

