<?php
if (!isset($_SESSION)) {session_start();}
require_once("app/models/dbase.php");
$db_handle = new DBController();

?>
<div style="padding:30px ; margin:auto; font-size:24px; color:rgba(191,191,191,1.00); text-align:center; font-weight:bold; font-style:oblique;">
YOU DON'T HAVE SUFFICIENT PERMISSION TO ACCESS THIS PAGE
</div>