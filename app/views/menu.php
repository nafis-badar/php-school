<?php 
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Menu.php");
$Handle = new Menu();
 
$GetMenu = $Handle->getMenuDetails();/* WHERE MasterTypeID=1");*/
 

?>
 <div id="leftpanel" class="" style="" role="navigation">
 
            <ul class="list-group panel" style="list-style:none;">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>BIZ ACCOUNTS</b></li>
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
                  <a href="#demo<?php echo $GetMenu[$x]["ID"];?>" class="list-group-item " data-toggle="collapse"> <i class="<?php echo $GetMenu[$x]["Icon"]; ?> "></i><?php echo $GetMenu[$x]["LinkName"]; ?>  <span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo<?php echo $GetMenu[$x]["ID"];?>">
         <?php     
		 $db_handle = new DBController();
		 	$SqlSubMenu="SELECT * FROM pages where IsMenu=1 and IsSubMenu=1 and MID=".$GetMenu[$x]["ID"]  ." order by sort";
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
            <a  style="padding-left:35px; background-color:rgba(204,204,204,0.4);" href="#SubMenu<?php echo $GetSubMenu[$y]["ID"]; ?>" class="list-group-item" data-toggle="collapse"><?php echo $GetSubMenu[$y]["LinkName"]; ?> <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <div class="collapse list-group-submenu" id="SubMenu<?php echo $GetSubMenu[$y]["ID"]; ?>">
                       <?php     
		 $db_handle = new DBController();
		 	$SqlUnderSubMenu="SELECT * FROM pages where IsMenu=1 and IsSubMenu=1 and MID=".$GetSubMenu[$y]["ID"]  ." order by sort";
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