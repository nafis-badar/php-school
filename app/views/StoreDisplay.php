<style>
.PanelHead
{
	background-color:rgba(22,96,173,1.00);
	color:rgba(255,255,255,1.00);
	padding:10px;
	font-size:14px;
	text-align:center;
	-webkit-filter: blur(0.5px);
	border:2px solid rgba(223,223,223,1.00);
	box-shadow:5px 5px 5px rgba(73,70,70,1.00);
	
	}
	div.book
	{
		background-image:url(app/views/images/book.jpeg); height:150px; width:92px; color:rgba(255,255,255,1.00); font-size:14px; font-weight:bold; vertical-align:middle;  text-align:center;display:inline-block; margin:5px;
		padding:7px; padding-top:30px;  cursor:pointer;border: 2px solid white;
		transition: all 5s; 
                transition-timing-function: cubic-bezier(0.3, 0.7, 1.0, 0.1);  overflow:hidden;
		}
		div.book:hover
		{
			color:rgba(49,255,181,1.00);
			box-shadow:5px 5px 5px rgba(0,0,0,1.00);
			border: 2px solid white;
			zoom:101%;
			}
			div.box:focus{
    
}
</style>
<div class="col-lg-12">
<div class="col-lg-3" style="background-image:url(app/views/images/store.jpg); background-size:cover; min-height:500px;">
<div class="PanelHead" >Storage</div>
<div>
<?php require_once("CTL.Storage.php");
$StorageHandle = new Storage();
?>
   <table style="width:100%;" class="table">
  <!--tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>Name</th>	<th>Label</th><th>Under</th>	 	<th style="text-align:right;">...</th>
  </tr-->
<?php
$getinfo = $StorageHandle->StorageReport();
 //echo count($getinfo,0);
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
<?php   
//$MasterGroupID =$getinfo[$x]['MasterGroupID'];
//$getMasterinfo = $StorageHandle->getMasterinfo($MasterGroupID);
?>
<div onClick="redirectBypagewithIDValue('storage',1,<?php echo $getinfo[$x]["ID"]; ?>)"
  style="background-color:rgba(235,235,235,0.78); color:rgba(50,50,50,1.00); padding:3px; cursor:pointer;
  margin:5px; border:2px solid rgba(245,245,245,0.79);
  font-size:14px; font-weight:bold;"
  ><?php echo $getinfo[$x]["Name"]; ?>
  
  <div style="padding-left:5px; color:rgba(122,122,122,1.00); font-size:12px;">Under:<?php  echo $StorageHandle->StorageName($getinfo[$x]["MID"]); ?></div>
  </div>
  <tr>
  <!--td onClick="redirectBypagewithIDValue('storage',1,<?php echo $getinfo[$x]["ID"]; ?>)"
  style="background-color:rgba(235,235,235,0.48); color:rgba(120,120,120,1.00); padding:3px; cursor:pointer;"
  ><?php echo $getinfo[$x]["Name"]; ?></td>
  	<td><?php echo $getinfo[$x]["CODE"]; ?></td>
    
    <td></td>
     
    <td style="text-align:right;"><span class="btn btn-primary" onClick="redirectBypagewithIDValue('storage',1,<?php echo $getinfo[$x]["ID"]; ?>)">Config</span></td-->
  </tr>

<?php

} 
 
?>
 </table>
</div>
</div>

<div class="col-lg-6" style="background-image:url(app/views/images/medicine.jpg);background-size:cover; min-height:500px;">
<div class="PanelHead" >Desk</div>
<div style="height:160px; background-color:rgba(82,36,20,0.19);  margin:15px;">
<div class="book" onClick="redirectBypagewithIDValue('po',16,0);">
Sale Invoice (Credit)
</div>
<div  class="book"  onClick="redirectBypagewithIDValue('po',29,0);">
Sale Invoice (Cash)
</div>

<div  class="book" onClick="redirectBypagewithIDValue('stockregister',0,0);">
Stock Book
</div>
<div  class="book" onClick="redirectBypagewithIDValue('stockregister',0,0);">
Cash Book
</div>
<div  class="book" onClick="redirectBypagewithIDValue('indexpo',16,0);">
Sales Register
</div>
</div>

<div style="height:160px; background-color:rgba(82,36,20,0.19);  margin:15px;">
 <div  class="book" onClick="redirectBypagewithIDValue('indexsupplier',0,0);">
Purchase Order Register
</div>
 <div  class="book" onClick="redirectBypagewithIDValue('indexsupplier',0,0);">
Purchase Register
</div>
 <div  class="book" onClick="redirectBypagewithIDValue('indexsupplier',0,0);">
Supplier Register
</div>
</div>
 </div>
<div class="col-lg-3" style="background-image:url(app/views/images/accounts.jpg); background-size:cover; min-height:500px;">
<div class="PanelHead" >Accounts</div>
<div>
<?php 
include_once("menu.php");
?>
</div>
</div>
</div>