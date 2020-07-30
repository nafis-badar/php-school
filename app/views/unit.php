<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Item.php");
$Handle = new Item();
?>
 <div class="workspace">
<div class="displayhead">Item Unit
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveUnit();" >
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
$Name='';
$Alias='';
$Description='';
$CreatedBy=0;
$ModifyTime=0;


if($ID!=0)
{
	
$getinfo = $Handle->runQuery("SELECT * FROM tbl_unit where ID=$ID ");/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		
		$Name=$getinfo[$x]["Name"];
		$Alias=$getinfo[$x]["Alias"];
		$Description=$getinfo[$x]["Description"];
		
		//$CreatedBy=$getinfo[$x]["CreatedBy"];
		//$ModifyTime=$getinfo[$x]["ModifyTime"];
	}
}
       ?>

 
<table class="mytable" width="100%" border="2" style="width:100%; color:rgba(0,0,0,1.00);">
<tr>
<td >Name: 
<input type="text" class="form-control" name="Name" id="Name" placeholder="Unit Name" value="<?php echo $Name; ?>" onKeyUp="setChanges(this.value);">

  <input type="hidden" name="ID" id="ID" value="<?php echo $ID; ?>"></td>
<td>Alias: <input type="text" class="form-control" name="Alias"  id="Alias" placeholder="Product Unit Alias" value="<?php echo $Alias; ?>"></td>

<td>Description:
<textarea class="form-control" name="Description"  id="Description" placeholder="Description" ><?php echo $Description; ?></textarea>
</td>
</tr>
 
</table>
 </div>
 </div>


  <script>
function SaveUnit() {
//ID, MID, Name, Alias, Description, CreatedBy, CreateTime, TaxRate, ServiceCharge, ImagePath, Image, ModifiedBy, ModifyTime	
	var Name=document.getElementById("Name").value;
	var ID=document.getElementById("ID").value;
	
	var Alias=document.getElementById("Alias").value;
	var Description=document.getElementById("Description").value;
	
var Type='SaveUnit';	
	 
	var fd={Type:Type,ID:ID,Name:Name,Alias:Alias,Description:Description};
	//alert(Description);
	//fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID};
	//alert(resultelementid);
    var pg='app/controllers/ManageMaster.php';
	$.post(pg,fd,function(data){
		document.getElementById("info").innerHTML=data;
		//alert(data);
		redirectBypagewithIDValue('indexunit',0,0);
		});
}
 
</script>