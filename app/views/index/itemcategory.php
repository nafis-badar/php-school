<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.ItemCategory.php");
?>
 
 
<div class="workspace">
<div class="displayhead">Item Category Index
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onclick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('itemcategory',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>

</div>
 

  <div class="panel-body" id="accordion1">
    
 
<?php
$ItemCategory_handle = new ItemCategory();
$getinfo = $ItemCategory_handle->runQuery("SELECT * FROM tbl_itemcategory");/* WHERE MasterTypeID=1");*/
/*echo sizeof($getcompanyinfo,1)."<br>";
echo sizeof($getcompanyinfo,0)."<br>";
echo count($getcompanyinfo,1)."<br>";
echo count($getcompanyinfo,0)."<br>";
echo $getcompanyinfo[0]["Name"];*/

for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
   <div class="panel panel-default">
    <div class="panel-heading">
      <a href="#" onClick="redirectBypagewithIDValue('itemcategory',1,<?php echo $getinfo[$x]["ID"]; ?>)">
      	<div class="panel-title"><?php echo $getinfo[$x]["Name"]; ?></div></a>
    </div>
    <div id="<?php echo "collapseOne".($x+1);?>" class="panel-collapse collapse " >
      <div class="panel-body" style="text-align:left;">
	
 
      </div>
    </div>
  </div>
<?php

} 
 
?>
</div>
</div>

