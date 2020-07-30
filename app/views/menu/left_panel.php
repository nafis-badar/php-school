<?php
if (!isset($_SESSION)) {session_start();}

require_once("dbase.php");

$db_handle = new DBController();
$SqlMenu="SELECT * FROM pages where IsMenu=1 and IsSubMenu=0  order by sort";
$GetMenu = $db_handle->runQuery($SqlMenu);/* WHERE MasterTypeID=1");*/
/*echo sizeof($getcompanyinfo,1)."<br>";
echo sizeof($getcompanyinfo,0)."<br>";
echo count($getcompanyinfo,1)."<br>";
echo count($getcompanyinfo,0)."<br>";
echo $getcompanyinfo[0]["Name"];*/

?>
 <div id="leftpanel" class="col-xs-6 col-sm-3 sidebar-offcanvas" style="z-index:1000; padding-left:10px;" role="navigation">
 
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>ACCOUNTS</b></li>
                <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                 <?php
for ($x = 0; $x < count($GetMenu,0); $x++) {
       ?>
       <?php 
       if($GetMenu[$x]["IsMenu"]==1 && $GetMenu[$x]["IsSubMenu"]==0 &&  $GetMenu[$x]["HasSubMenu"]==0 )
	   {
	    ?>
                <li class="list-group-item"><a href="#" onClick="<?php echo $GetMenu[$x]["OnClick"]; ?>"><i class="<?php echo $GetMenu[$x]["Icon"]; ?> "></i><?php echo $GetMenu[$x]["LinkName"]; ?> </a></li>
        <?php 
		}
		
		 if($GetMenu[$x]["IsMenu"]==1 && $GetMenu[$x]["IsSubMenu"]==0 &&  $GetMenu[$x]["HasSubMenu"]==1 )
	   {
	    ?>
                <li>
                  <a href="#demo<?php echo $GetMenu[$x]["id"];?>" class="list-group-item " data-toggle="collapse"> <i class="<?php echo $GetMenu[$x]["Icon"]; ?> "></i><?php echo $GetMenu[$x]["LinkName"]; ?>  <span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo<?php echo $GetMenu[$x]["id"];?>">
         <?php     
		 $db_handle = new DBController();
		 	$SqlSubMenu="SELECT * FROM pages where IsMenu=1 and IsSubMenu=1 and MID=".$GetMenu[$x]["id"]  ." order by sort";
			//echo $SqlSubMenu;
			$GetSubMenu = $db_handle->runQuery($SqlSubMenu);
			//$y = 0;
		     for ($y = 0; $y < count($GetSubMenu,0); $y++)
			 {
       ?>
       <?php 
       if($GetSubMenu[$y]["IsMenu"]==1 && $GetSubMenu[$y]["IsSubMenu"]==1 &&  $GetSubMenu[$y]["HasSubMenu"]==0 )
	   {
	    ?>
       <a style="padding-left:35px; background-color:rgba(204,204,204,0.7);" href="#" onclick="<?php echo $GetSubMenu[$y]["OnClick"]; ?>" class="list-group-item" data-toggle="">
       <i class="<?php echo $GetSubMenu[$y]["Icon"]; ?> "></i><?php echo $GetSubMenu[$y]["LinkName"]; ?>  </a>
        <?php 
		}
		if($GetSubMenu[$y]["IsMenu"]==1 && $GetSubMenu[$y]["IsSubMenu"]==1 &&  $GetSubMenu[$y]["HasSubMenu"]==1 )
		{
			?>
            <a  style="padding-left:35px; background-color:rgba(204,204,204,0.4);" href="#SubMenu<?php echo $GetSubMenu[$y]["id"]; ?>" class="list-group-item" data-toggle="collapse"><?php echo $GetSubMenu[$y]["LinkName"]; ?> <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <div class="collapse list-group-submenu" id="SubMenu<?php echo $GetSubMenu[$y]["id"]; ?>">
                       <?php     
		 $db_handle = new DBController();
		 	$SqlUnderSubMenu="SELECT * FROM pages where IsMenu=1 and IsSubMenu=1 and MID=".$GetSubMenu[$y]["id"]  ." order by sort";
			// echo $SqlUnderSubMenu;
			$GetUnderSubMenu = $db_handle->runQuery($SqlUnderSubMenu);
			//$y = 0;
		     for ($z = 0; $z < count($GetUnderSubMenu,0); $z++)
			 {
				 ?>
                  <a  style="padding-left:50px; background-color:rgba(204,204,204,0.2);" href="javascript:;" class="list-group-item" onclick="<?php echo $GetUnderSubMenu[$z]["OnClick"]; ?>" >
                  <i class="<?php echo $GetUnderSubMenu[$z]["Icon"]; ?>"></i>
				  <?php echo $GetUnderSubMenu[$z]["LinkName"]; ?></a>
                 
                 <?php
			 }
			 ?>
			</div>
            <?php
			 
			}
		?>
        <?php 
			 }//End of Sub manu loop
			 ?>
              </div>
                </li>
             <?php
		}//End of if
		 ?>  
        
<?php 
}//End of manu loop

?> 
              
 
               
                <li class="list-group-item">
                <a href=" <?php echo APP_URL; ?>views/redirect.php?action=logout" onClick="javascript:void();"   >
        <i class="glyphicon glyphicon-lock"></i><?php echo 'Signout'; ?> <span><!--img  style="width:20px; height:20px;" src=<?php echo IMAGES_PATH."key.png"; ?> alt="" --> </span>
        </a>
                <!--a href="login.html" ><i class="glyphicon glyphicon-lock"></i>Login</a--></li>
                 
              </ul>
          </div>