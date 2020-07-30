<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.ItemGroup.php");
$ItemGroup_handle = new ItemGroup();
?>
 <div class="workspace">
<div class="displayhead">Item Group 
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveItemGroup();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
 
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> 
Back
</span>
</div>
 

  <div class="panel-body" id="accordion1">
   <div id="info" style="background-color:rgba(185,185,185,1.00); color:rgba(255,103,0,1.00);"></div>
 <?php
$x=0;
$ID=0;
$ID=$_REQUEST['ID'];
$MID=0;
$Name='';
$Alias='';
$Description='';
$ImagePath=0;
$Image=0;
$CreatedBy=0;
$ModifyTime='';


if($ID!=0)
{
$getinfo = $ItemGroup_handle->runQuery("SELECT * FROM tbl_itemgroup where ID=$ID ");/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		$MID=$getinfo[$x]["MID"];
		$Name=$getinfo[$x]["Name"];
		$Alias=$getinfo[$x]["Alias"];
		$Description=$getinfo[$x]["Description"];
		$ImagePath=$getinfo[$x]["ImagePath"];
		$Image=$getinfo[$x]["Image"];
		//$CreatedBy=$getinfo[$x]["CreatedBy"];
		//$ModifyTime=$getinfo[$x]["ModifyTime"];
	}
}
       ?>
  <style>
  .mytable td
  {padding:5px;
  }
  </style>
  <script>
  function setChanges(val01)
  {
	$("#Alias").val(val01);  
	//	$("#PrintName").val(val01);  
	  }
  </script>
<table class="mytable" width="100%" border="2" style="width:100%; color:rgba(0,0,0,1.00);">
 
<tr>
<td >Name:
<input type="text" class="form-control input-sm" name="Name" id="Name" placeholder="Group Name" value="<?php echo $Name; ?>" onKeyUp="setChanges(this.value);">

  <input type="hidden" name="ID" id="ID" value="<?php echo $ID; ?>"></td>
<td>Alias: <input type="text" class="form-control input-sm" name="Alias"  id="Alias" placeholder="Item Group Alias" value="<?php echo $Alias; ?>"></td>
<td>Master Group:
  <select name="MID" id="MID" class="form-control input-sm">
				<!--option value="">Please select...</option-->
<?php
$getitemgroupinfo = $ItemGroup_handle->runQuery("SELECT * FROM tbl_itemgroup");
//echo $ItemGroupID;

for ($ig = 0; $ig < count($getitemgroupinfo,0); $ig++) {
       ?>
 <option value="<?php echo $getitemgroupinfo[$ig]['ID'];?>" <?php if($MID==$getitemgroupinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemgroupinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select>
</td>
<td>Description:
<textarea class="form-control input-sm" name="Description"  id="Description" placeholder="Description" ><?php echo $Description; ?></textarea>
</td>
</tr>
 
</table>
      </div>
      </div>

<script>
function SaveItemGroup() {
	
	var Name=document.getElementById("Name").value;
	var ID=document.getElementById("ID").value;
	var MID=document.getElementById("MID").value;
	var Alias=document.getElementById("Alias").value;
	var Description=document.getElementById("Description").value;
	
var Type='SaveItemGroup';	
	 
	var fd={Type:Type,ID:ID,Name:Name,MID:MID,Alias:Alias,Description:Description};
	//fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID};
	//alert(resultelementid);
    var pg='app/controllers/ManageMaster.php';
	$.post(pg,fd,function(data){
		document.getElementById("info").innerHTML=data;
		//alert(data);
		 redirectBypagewithIDValue('indexitemgroup',0,0);
		});
}
 
</script>
  