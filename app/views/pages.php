<?php
if (!isset($_SESSION)) {session_start();}
require_once("app/models/dbase.php");
$db_handle = new DBController();

?>
<div class="workspace">
<div class="displayhead">Menu & Pages
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('employee',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>
</div>
<div class="panel-body" id="accordion1">
 <table class="table" style="font-size:12px;">
 <?php
 $ID=0;
$LinkName='';
$Content='';
$Identity='';
$type='';
$IsMenu=0;
$CODE='';
$Icon='';
$MID=0;
$OnClick='';
$Href='';
$IsActive=0;
$HasSubMenu=0;
$IsSubMenu=0;
$SORT=0;
?>
  
 
 <?php
 $sql="SELECT * from pages";
$getinfo=$db_handle->runQuery($sql);
 for($i=0;$i<count($getinfo,0);$i++)
 {
 ?>
 <tr>
  
 <td><label class="control-label" for="ID">ID</label>
 <input type="text" class="form-control" id="ID<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['ID']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);" readonly></td>
 
 <td><label class="control-label" for="LinkName">LinkName</label>
 <input type="text" class="form-control" id="LinkName<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['LinkName']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
 
 <td><label class="control-label" for="Content">Content</label>
 <input type="text" class="form-control"  id="Content<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['Content']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
 
 <td><label class="control-label" for="Identity">Identity</label>
 <input type="text" class="form-control"  id="Identity<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['Identity']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
 
 </tr>
 <tr>
 
 <td><label class="control-label" for="type">type</label><br>
 <select class="" style="width:100%;" name="type<?php echo $getinfo[$i]['ID']; ?>" id="type<?php echo $getinfo[$i]['ID']; ?>" 
 onChange="SavePages(<?php echo $getinfo[$i]['ID']; ?>);">
 <option value="page" <?php if($getinfo[$i]['Type']=='page'){echo 'selected="selected"';} ?>>Page</option>
 <option value="action" <?php if($getinfo[$i]['Type']=='action'){echo 'selected="selected"';} ?>>Action</option>
 <option value="head" <?php if($getinfo[$i]['Type']=='head'){echo 'selected="selected"';} ?>>Menu Head</option>
 </select></td>
 <!--input type="text" class="form-control"  id="type<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['Type']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"-->
 
 <td><label class="control-label" for="IsMenu">IsMenu</label>
 <select class="" style="width:100%;" name="IsMenu<?php echo $getinfo[$i]['ID']; ?>" id="IsMenu<?php echo $getinfo[$i]['ID']; ?>" 
 onChange="SavePages(<?php echo $getinfo[$i]['ID']; ?>);">
 <option value="0" <?php if($getinfo[$i]['IsMenu']==0){echo 'selected="selected"';} ?>>No</option>
 <option value="1" <?php if($getinfo[$i]['IsMenu']==1){echo 'selected="selected"';} ?>>Yes</option>

 </select>
  </td>
 
 <td> <label class="control-label" for="CODE">CODE</label>
 <input type="text" class="form-control"  id="CODE<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['CODE']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
 
 <td> <label class="control-label" for="Icon">Icon</label>
 <input type="text" class="form-control" id="Icon<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['Icon']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
  
 </tr>
 <tr>
   <td><label class="control-label" for="MID">MID</label>
   <select style="width:100%;" id="MID<?php echo $getinfo[$i]['ID']; ?>"  name="MID<?php echo $getinfo[$i]['ID']; ?>"  
 onChange="SavePages(<?php echo $getinfo[$i]['ID']; ?>);">
   <option value="0" <?php if($getinfo[$i]['MID']==0){echo 'selected="selected"';} ?>>Select</option>
   <?php
    $sql="SELECT ID,LinkName from pages where HasSubMenu=1 and IsActive=1 ";
$getMenuinfo=$db_handle->runQuery($sql);
 for($im=0;$im<count($getMenuinfo,0);$im++)
 {
  ?>
  <option value="<?php echo $getMenuinfo[$im]['ID']; ?>" <?php if($getinfo[$i]['MID']==$getMenuinfo[$im]['ID']){echo 'selected="selected"';} ?>><?php echo $getMenuinfo[$im]['LinkName']; ?></option>
  <?php } ?>
  
     </select>
 </td>
 
 <td><label class="control-label" for="OnClick">OnClick</label>
 <input type="text" class="form-control"  id="OnClick<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['OnClick']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
 
 <td><label class="control-label" for="Href">Href</label>
 <input type="text" class="form-control"  id="Href<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['Href']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
 
 <td><label class="control-label" for="IsActive">IsActive</label>
 <select class="" style="width:100%;" name="IsActive<?php echo $getinfo[$i]['ID']; ?>" id="IsActive<?php echo $getinfo[$i]['ID']; ?>" 
 onChange="SavePages(<?php echo $getinfo[$i]['ID']; ?>);">
 <option value="0" <?php if($getinfo[$i]['IsActive']==0){echo 'selected="selected"';} ?>>No</option>
 <option value="1" <?php if($getinfo[$i]['IsActive']==1){echo 'selected="selected"';} ?>>Yes</option>

 </select>
 
 </tr>
 
 <tr style="border-bottom:2px solid rgba(25,51,67,1.00);">
  
 
 
  <td><label class="control-label" for="HasSubMenu">HasSubMenu</label>
  <select class="" style="width:100%;" name="HasSubMenu<?php echo $getinfo[$i]['ID']; ?>" id="HasSubMenu<?php echo $getinfo[$i]['ID']; ?>" 
 onChange="SavePages(<?php echo $getinfo[$i]['ID']; ?>);">
 <option value="0" <?php if($getinfo[$i]['HasSubMenu']==0){echo 'selected="selected"';} ?>>No</option>
 <option value="1" <?php if($getinfo[$i]['HasSubMenu']==1){echo 'selected="selected"';} ?>>Yes</option>
</select>
 </td>
 <td><label class="control-label" for="IsSubMenu">IsSubMenu</label>
   <select class="" style="width:100%;" name="IsSubMenu<?php echo $getinfo[$i]['ID']; ?>" id="IsSubMenu<?php echo $getinfo[$i]['ID']; ?>" 
 onChange="SavePages(<?php echo $getinfo[$i]['ID']; ?>);">
 <option value="0" <?php if($getinfo[$i]['IsSubMenu']==0){echo 'selected="selected"';} ?>>No</option>
 <option value="1" <?php if($getinfo[$i]['IsSubMenu']==1){echo 'selected="selected"';} ?>>Yes</option>
</select>
 </td>
 <td><label class="control-label" for="SORT">SORT</label>
 <input type="text" class="form-control"  id="SORT<?php echo $getinfo[$i]['ID']; ?>" value="<?php echo $getinfo[$i]['SORT']; ?>" onKeyUp="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"></td>
  
 <td><span class="btn " onClick="SavePages(<?php echo $getinfo[$i]['ID']; ?>);"> SAVE</span></td>
 </tr>
 <tr>
 <td colspan="4" id="result<?php echo $getinfo[$i]['ID']; ?>"></td>
 </tr>
  <?php
 }
 ?>
 </table>
 </div>
 </div>
 <script>
 function SavePages(ID)
 {
	 var i=ID.toString();
	 //alert(i);
	//var PID=$('ID'.concat(i)).val();
	
//	var LinkName=$("LinkName" + String(ID)).val();
	var LinkName=document.getElementById("LinkName".concat(i)).value;
	//document.getElementById(concat("LinkName"+String(ID))).value;
	var Content=document.getElementById("Content".concat(i)).value;
	//alert(Content);
	var Identity=document.getElementById("Identity".concat(i)).value;
	var Type=document.getElementById("type".concat(i)).value;
	var IsMenu=document.getElementById("IsMenu".concat(i)).value;
	var CODE=document.getElementById("CODE".concat(i)).value;
	var Icon=document.getElementById("Icon".concat(i)).value;
	var MID=document.getElementById("MID".concat(i)).value;
	var OnClick=document.getElementById("OnClick".concat(i)).value;
	var Href=document.getElementById("Href".concat(i)).value;
	var IsActive=document.getElementById("IsActive".concat(i)).value;
	var HasSubMenu=document.getElementById("HasSubMenu".concat(i)).value;
	var IsSubMenu=document.getElementById("IsSubMenu".concat(i)).value;
	var SORT =document.getElementById("SORT".concat(i)).value;
	 var pg="app/views/SavePages.php";
	 $.post(pg,{ID:ID, LinkName:LinkName, Content:Content, Identity:Identity, Type:Type, IsMenu:IsMenu, CODE:CODE, Icon:Icon, MID:MID, OnClick:OnClick, Href:Href, IsActive:IsActive, HasSubMenu:HasSubMenu, IsSubMenu:IsSubMenu, SORT:SORT},function(data){
		 document.getElementById("result".concat(i)).innerHTML=data;
		 });
	 }
 </script>