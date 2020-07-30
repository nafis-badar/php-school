 <?php
if (!isset($_SESSION)) {session_start();}
require_once("../models/MOD.Accounts.php");
$Handle = new MODAccounts();
$Type=$_REQUEST['Type'];
 //echo $Type;
if ($Type=='GetEmployee')
{
	//$MasterGroupID=101;
	$ID=$_REQUEST['ID'];
	//echo $ID.'<br>';
	if($ID==0)
	$MasterGroupID=101;
	else
	$MasterGroupID=$Handle->getMasterGroupID($ID);
	
	$DrCr=$Handle->getDrCr($MasterGroupID);
	
	if($MasterGroupID==101)
	{
	 	?>
        <input type="hidden" id="DrCr" name="DrCr" value="<?php echo $DrCr; ?>">
    <select name="MasterGroupID" id="MasterGroupID"  class="form-control" onChange="getDrCr();">
	<option value="0">Please select...</option>
          <?php
	$getMasterGroupinfo = $Handle->MasterGroupinfo();
 	for ($ic = 0; $ic < count($getMasterGroupinfo ,0); $ic++) 
		{?>
			<option 
			  value="<?php echo $getMasterGroupinfo[$ic]['ID'];?>" <?php if($MasterGroupID==$getMasterGroupinfo[$ic]['ID']) echo 'selected= "selected"'; ?>><?php echo $getMasterGroupinfo[$ic]['Name'];?></option>
			  <?php
		}
		?>
        </select>
        <?php
	}
	else
	{
	
	?>
     <input type="hidden" id="DrCr" name="DrCr" value="<?php echo $DrCr; ?>">
    <input type="hidden"  name="MasterGroupID" id="MasterGroupID"  class="form-control" 
    value="<?php echo $MasterGroupID; ?>" >
    <input type="text"  name="MasterGroup" id="MasterGroup"  class="form-control" 
    value="<?php echo $Handle->getMasterName($MasterGroupID); ?>" readonly >
    
	 <?php
	}
	
}