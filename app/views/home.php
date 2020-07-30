<?php
if (!isset($_SESSION)) {session_start();}
//require_once("app/includes/dbase.php");
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL && ~E_NOTICE);
?>
  <script>
			// alert(6);
    //        redirectBypage('userpage');
            </script>
            <?php
if(isset($_SESSION['id']))
{
			?>
            <script>
			// alert(8);
            redirectBypage('userpage');
            </script>
            <?php
}
else
{
?>
             <script>
			    function redirectBypage(val01)
{
	//alert(val01);
	var http = location.protocol;
	var slashes = http.concat("//");
	var host = slashes.concat(window.location.hostname);
	var pathname=host.concat(window.location.pathname);
	var redirectlocation=pathname.concat("?p="+val01);
   //alert(redirectlocation);
	window.location=redirectlocation;
	
}
           redirectBypage('login');
            </script>



<?php
}
?>
