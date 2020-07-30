

<div class="workspace">
<div class="displayhead">
<img src="app/views/images/logo.jpg" alt="" height="80">
DASHBOARD
<!--span style=""  name="Operation"   class="btn  pull-right"  onclick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span-->
 <?php
          if(isset($_SESSION['id']))
{
	?>
<a style="margin-right:5px;"  name="Operation"   class="btn  pull-right " href=" <?php echo APP_URL; ?>views/redirect.php?action=logout" onClick="javascript:void();"  >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i>  Signout<span> </span>  </a>
<?php } else{?>
Signin
<?php } ?>
</div>
 
 
                   
           
  <div class="row row-offcanvas ">
					<?php
                    if(isset($_SESSION['id'])){
					 
                    //include_once("menu.php");
					include_once("SchoolDashboard.php");
					//include_once("StoreDisplay.php");
                    }
                    ?>
</div>
    
</div>                