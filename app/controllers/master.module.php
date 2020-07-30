<?php
if (!isset($_SESSION)) {session_start();}
include_once '../models/MOD.VoucherMaster.php';

 $Handle= new MODVoucherMaster();
 $searchcontent='';
 $Type=$_POST['Type'];
  if ($Type=='CheckPermission'){
	  $MasterID=$_POST['MasterID'];
	  $PageID=$_POST['PageID'];
	  $sql="SELECT PageID,MasterID,IsActive from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1";
 //echo $sql;
	$getinfo=$Handle->runQuery($sql);
	if(count($getinfo,0)==1)
	{
		echo "1";
	}
	else
	{
		//header('Refresh:0;URL=index.php');
		echo "0";
	}
	  
  }
  
   if ($Type=='CheckActionPermission'){
	  $MasterID=$_POST['MasterID'];
	  $Page=$_POST['Page'];
	  $sql="SELECT * from pages where Identity ='$Page' and IsActive=1 order by LinkName";
   //echo $sql;
	$getinfo=$Handle->runQuery($sql);
	if(count($getinfo,0)==1)
	{
		$PageID=$getinfo[0]['id'];
		  $sql="SELECT PageID,MasterID,IsActive from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1";
	// echo $sql;
		$getinfo1=$Handle->runQuery($sql);
		// echo count($getinfo1,0);
		if(count($getinfo1,0)==1)
		{
			echo '1';
		}
		else
		{
			//header('Refresh:0;URL=index.php');
			echo '0';
		}
	}
	else
	{
		//header('Refresh:0;URL=index.php');
		echo '0';
	}
	  
  } 
  if ($Type=='CheckPagePermission'){
	  $MasterID=$_POST['MasterID'];
	  $Page=$_POST['Page'];
	  $sql="SELECT * from pages where Identity ='$Page' and IsActive=1 order by LinkName";
  //echo $sql;
	$getinfo=$Handle->runQuery($sql);
	if(count($getinfo,0)==1)
	{
		$PageID=$getinfo[0]['ID'];
		  $sql="SELECT PageID,MasterID,IsActive from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1";
	//echo $sql;
		$getinfo1=$Handle->runQuery($sql);
		if(count($getinfo1,0)==1)
		{
			echo "1";
		}
		else
		{
			//header('Refresh:0;URL=index.php');
			echo "0";
		}
	}
		else
		{
			//header('Refresh:0;URL=index.php');
			echo "0";
		}
	  
  }
 if ($Type=='permission'){
	  $MasterID=$_POST['MasterID'];
$sql="SELECT * from pages where IsActive=1 order by Type,LinkName";
//echo $sql;
	$getinfo=$Handle->runQuery($sql);
	?>
	<table class="table">
    <tr>
    	<th>Module</th><th>Type</th><th>Permission</th>
    </tr>
      <?php
        
		//$getinfo=$Handle->MasterDB_MasterTypeID(36);
		for($x=0; $x < count($getinfo,0); $x++)
		{
			?>
    			<tr>
                <td><div id="btnaction"><?php CheckUserModule($getinfo[$x]["ID"],$MasterID); ?></div></td>
                	<td><?php echo $getinfo[$x]["LinkName"];?></td>
                    <td><?php echo $getinfo[$x]["Type"];?></td>
                    
                </tr>
            <?php
		}
		?>
 	</table>
    <?php 
	}

if ($Type=='activate'){
		  $MasterID=$_POST['MasterID'];
  		  $PageID=$_POST['PageID'];
		  $sql="SELECT ID from user_pages Where PageID=$PageID and MasterID=$MasterID";
		  $getinfoS=$Handle->runQuery($sql);
		  if(count($getinfoS,0)>0)
		  {
		$sql="UPDATE user_pages set IsActive=1 where PageID=$PageID and MasterID=$MasterID";	  
		}
		  else
		  {
		  $sql="Insert INTO user_pages (PageID,MasterID,IsActive) values($PageID,$MasterID,1)";
		  }
		 // echo $sql;
		  $getinfoF=$Handle->insertQuery($sql);
	 }

if ($Type=='revoke'){
		  $MasterID=$_POST['MasterID'];
  		  $PageID=$_POST['PageID'];
		  $sql="UPDATE user_pages set IsActive=0 where PageID=$PageID and MasterID=$MasterID";
		 // echo $sql;
		  $getinfoF=$Handle->insertQuery($sql);
	 }
  ?>
   
    <?php
	function CheckUserModule($PageID,$MasterID)
	{
		$Handle = new DBController();
		$sql="SELECT * from user_pages where PageID=$PageID and MasterID=$MasterID and IsActive=1 ";
		$getinfoF=$Handle->runQuery($sql);
		if(count($getinfoF,0)==0)
		{
			?>
            <a id="activate" class="btn btn-success" onClick="ActivatePage(this,<?php echo $PageID; ?>,<?php echo $MasterID; ?>)">Activate</a>
		<?php
			}
		else
		{
		?>
            <a id="rovoke"   class="btn " onClick="Revoke(this,<?php echo $PageID; ?>,<?php echo $MasterID; ?>)">Revoke</a>
		<?php	
			}
		}
	?>