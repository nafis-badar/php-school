<?php
if (!isset($_SESSION)) {session_start();}
require_once("dbase.php");
?>
 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<div >
<div >VoucherType</div>

<div >
  
  <?php
$db_handle = new DBController();
$getinfo = $db_handle->runQuery("SELECT * FROM tbl_VoucherType");/* WHERE MasterTypeID=1");*/
 
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
  <div>
    <div  style="padding: 10px; border : 1px solid rgba(143,143,143,0.58);" >
      <a  href="#"   onClick="redirectBypagewithIDValue('vouchertype',1,<?php echo $getinfo[$x]["ID"]; ?>)">
      	<div ><?php echo $getinfo[$x]["VoucherType"]; ?></div></a>
    </div>
    
  </div>
<?php

} 
 
?>
</div>
</div>
 
