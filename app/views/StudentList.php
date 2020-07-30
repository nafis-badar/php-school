 <?php
if (!isset($_SESSION)) {session_start();}
require_once("../controllers/CTL.Accounts.php");
$Handle = new Accounts();
$SearchStr=$_REQUEST['SearchStr'];
?>

  <table style="width:100%;" class="table">
  <tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>App. No.</th><th>Name</th>	<th>Class</th>	<th>Sec</th><th>Roll</th>	<th style="text-align:right;">...</th>
  </tr>
<?php
$getinfo = $Handle->getStudentIndex($SearchStr);
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
<?php   
$MasterGroupID =$getinfo[$x]['MasterGroupID'];
$getMasterinfo = $Handle->getMasterinfo($MasterGroupID);
?>
  <tr>
  	<td><?php echo $getinfo[$x]["CODE"]; ?></td>
    <td><?php echo $getinfo[$x]["Name"]; ?></td>
    <td><?php //echo $Handle->getMasterName($getinfo[$x]["MID"]); ?></td>
    <td><?php //echo $Handle->getMasterName($getinfo[$x]["MasterGroupID"]); ?></td>
    <td></td>
    <td style="text-align:right;"><span class="btn btn-primary" onClick="redirectBypagewithIDValue('student',1,<?php echo $getinfo[$x]["ID"]; ?>)">Open</span></td>
  </tr>

<?php

} 
 
?>
 </table>