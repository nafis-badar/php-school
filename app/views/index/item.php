 <?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Item.php");
 
  $item_handle = new Item();

		?>
<style>
        .table
		{
			font-size:12px;
			font-weight:bolder;
			color:rgba(0,0,0,1.00);
			}
		 
			.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 4px;
			}
</style>
<div class="workspace">
<div class="displayhead">Item Index
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onclick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-circle" aria-hidden="true"></i> Menu
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right" onClick="redirectBypagewithIDValue('item',0,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>

</div>
 

  <div class="panel-body"  >

 
<table style="width:100%;" class="table"  >
 
<tr style="border-bottom:2px double rgba(111,111,111,0.70);">

<th><strong>Name</strong></th>
<th><strong>SKU</strong></th>
<th><strong>Price(Purchase)</strong></th>
<th><strong>Price(Sales)</strong></th>
<th><strong>Action</strong></th>		
</tr>
 
<?php
 
 $sql="select * from tbl_item order by Name";
 $getinfo = $item_handle->runQuery($sql);
 
	for ($x = 0; $x < count($getinfo,0); $x++) 		
		{	
			//echo $getinfo[$x]['Alias'];
?>
<tr >	
<td> <?php echo $getinfo[$x]['Name']; ?> </td>
<td><?php echo $getinfo[$x]['SKU']; ?></td>

<td style="text-align:right; padding:20px width=20"><?php echo 'Rs. '. $getinfo[$x]['ItemCost'].'.00'; ?></td>
<td style="text-align:right; padding:20px width=20"><?php echo 'Rs. '. $getinfo[$x]['Price'].'.00'; ?></td>
 <td style="text-align:right;"><span class="btn-link" style="cursor:pointer;" onClick="redirectBypagewithIDValue('item',1,<?php echo $getinfo[$x]["ID"]; ?>)">Config</span></td>
</tr>
 
 <?php	
	}?>
 
</table>
 
              </div>
              </div>
 
