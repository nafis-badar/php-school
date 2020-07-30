<?php
if (!isset($_SESSION)) {session_start();	}
if(isset($_SESSION['loginid'])==0){header('Refresh:0;URL=index.php?p=login');}

date_default_timezone_set('Asia/Kolkata');
require_once("app/controllers/class.master.php");
$Handle = new MasterClass();
$db_handle = new DBController();
?>
 
<div class="workspace">
    <div class="displayhead">User Role
        <span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
            <i class="fa fa-circle" aria-hidden="true"></i> Menu
        </span>
        
        
    
    </div>
    <div class="panel-body" id="accordion1">
 
<a href="javascript:void(0);" class="toggle-sidebar">
 <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
 <?php
//$sql="SELECT ID,Name,CODE from tbl_master where MasterTypeID=27 order by Name";
//$getinfo=$db_handle->runQuery($sql);
?>
Employee: 
<select name="MasterID" id="MasterID" class="input-control" onChange="GetPermissionInfo();" style="width:300px;">
 <?php
        
		 $getinfo=$Handle->MasterDB_MasterTypeID(27);
		for($x=0; $x < count($getinfo,0); $x++)
		{
			?>
<option value="<?php echo $getinfo[$x]["ID"];?>"><?php echo $getinfo[$x]["Name"].'/'.$getinfo[$x]["CODE"]; ?></option>
 <?php
		}
		?>
</select> 
<a class="btn btn-success" id="Check"  onClick="GetPermissionInfo();">Search</a>
</div>
<div id="SearchResult">..........</div>
<div>
<script>
GetPermissionInfo();
 
function GetPermissionInfo()
{
	var MasterID=document.getElementById("MasterID").value;
	var pg='app/controllers/ManageMaster.php';
	 // alert("A");
		var Type='permission';
	 	$.post(pg,{Type:Type,MasterID:MasterID},function(data){
			document.getElementById("SearchResult").innerHTML=data;
			//document.getElementById("error").innerHTML=data;  
		// document.getElementById("TestID").focus();
		 //document.getElementById("TestID").accessKey;
	});		 
}
function ActivatePage(e,PageID,MasterID)
{
	//alert(e.id);
	//var MasterID=document.getElementById("MasterID").value;
	var pg='app/controllers/ManageMaster.php';
	 // alert("A");
		var Type='activate';
	 	$.post(pg,{Type:Type,MasterID:MasterID,PageID:PageID},function(data){
			//document.getElementById("SearchResult").innerHTML=data;
			//alert(data);
			 GetPermissionInfo();
			//document.getElementById("error").innerHTML=data;  
		// document.getElementById("TestID").focus();
		 //document.getElementById("TestID").accessKey;
	});		 
}
function Revoke(e,PageID,MasterID)
{
	//var MasterID=document.getElementById("MasterID").value;
	var pg='app/controllers/ManageMaster.php';
	 // alert("A");
		var Type='revoke';
	 	$.post(pg,{Type:Type,MasterID:MasterID,PageID:PageID},function(data){
			//document.getElementById("SearchResult").innerHTML=data;
			GetPermissionInfo();
			//document.getElementById("error").innerHTML=data;  
		// document.getElementById("TestID").focus();
		 //document.getElementById("TestID").accessKey;
	});		 
}

</script>
</div>
</div> 