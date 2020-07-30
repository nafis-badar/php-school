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
		padding:7px; padding-top:30px;  cursor:pointer;border: 2px solid rgba(147,147,147,1.00);
		transition: all 0.5s; 
                overflow:hidden;
				opacity:0.8;
				border-radius:5px;
		}
		div.book:hover
		{
			color:rgba(49,255,181,1.00);
			box-shadow:5px 5px 5px rgba(0,0,0,0.30);
			border: 2px solid white;
			 opacity:1;
			}
			div.box:focus{
    
}
</style>
<div class="col-lg-12">
<div class="col-lg-3" style="background-image:url(app/views/images/classroom.jpg); background-size:cover; min-height:500px;">
<div class="PanelHead" >Class 
<span class="glyphicon glyphicon-plus pull-right " style="cursor:pointer;" onClick="redirectBypagewithIDValue('sclass',44,0);"></span></div>
<div>
<?php require_once("CTL.SClass.php");
$SClassHandle = new SClass();
?>
   <table style="width:100%;" class="table">
  <!--tr style="border-bottom:2px double rgba(111,111,111,0.70);">
  	<th>Name</th>	<th>Label</th><th>Under</th>	 	<th style="text-align:right;">...</th>
  </tr-->
<?php
$getinfo = $SClassHandle->SClassReport();
 //echo count($getinfo,0);
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
<?php   
//$MasterGroupID =$getinfo[$x]['MasterGroupID'];
//$getMasterinfo = $SClassHandle->getMasterinfo($MasterGroupID);
?>
<div 
  style="background-color:rgba(235,235,235,0.78); color:rgba(50,50,50,1.00); padding:3px; cursor:pointer;
  margin:5px; border:2px solid rgba(245,245,245,0.79);
  font-size:14px; font-weight:bold;"
  ><span onClick="redirectBypagewithIDValue('sclass',1,<?php echo $getinfo[$x]["ID"]; ?>)">
  <?php echo $getinfo[$x]["Name"]; ?></span>
	  <?php
      $getSinfo = $SClassHandle->SClassReport($getinfo[$x]["ID"]);
        for ($s = 0; $s < count($getSinfo,0); $s++) {
           ?>
           <div style="margin:3px 7px;padding:5px; 
           border: 2px solid rgba(241,241,241,0.80); 
           border-radius:3px; color:rgba(77,77,77,1.00); font-size:11px; background-color:rgba(14,149,235,0.20);" onClick="redirectBypagewithIDValue('sclass',1,<?php echo $getSinfo[$s]["ID"]; ?>)">
           <?php  echo $SClassHandle->SClassName($getSinfo[$s]["ID"]); ?></div>
           <?php
        }
      ?>
  
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

<div class="col-lg-6" style="background-image:url(app/views/images/school1.jpg);background-size:cover; min-height:500px;">
<div class="PanelHead" >Desk</div>
<div style="height:160px; background-color:rgba(82,36,20,0.19);  margin:15px;">
<div class="book" onClick="redirectBypagewithIDValue('indexstudent',42,0);">
Student's Record
</div>
<div  class="book"  onClick="redirectBypagewithIDValue('student',42,0);">
New Student (Admission)
</div>

<!--div  class="book"  disabled onClick="redirectBypagewithIDValue('stockregister',0,0);">
Fees
</div>
<div  class="book"  disabled onClick="redirectBypagewithIDValue('stockregister',0,0);">
Expense Register
</div-->
<div  class="book" onClick="redirectBypagewithIDValue('indexteacher',43,0);">
Teacher's Record
</div>
</div>

<!--
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
-->
 </div>
<div class="col-lg-3" style="background-image:url(app/views/images/accounts.jpg); background-size:cover; min-height:500px;">
<div class="PanelHead" >Accounts &amp; Settings</div>
<div>
<?php 
//include_once("menu.php");
?>
</div>
</div>
</div>