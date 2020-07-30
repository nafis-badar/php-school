 <?php
if (!isset($_SESSION)) {session_start();}
include_once 'app/controllers/CTL.VoucherMaster.php';
 date_default_timezone_set('Asia/Kolkata');
  $Handle = new VoucherMaster();
 $FromDate=date("Y-m-d"); 
$ToDate=date("Y-m-d"); 
 ?>

<div class="workspace">
<div class="displayhead">Register
 
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>
<span style="margin-right:5px; border:0px;"  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-list" aria-hidden="true"></i> Menu
</span>
<div id="message"></div>
</div>
<div class="panel-body"  >
<div>
<table class="table table-striped" style="width:100%; font-size:12px;">
<tr>
<td colspan="4">Period</td> <td>Type</td><td>Accounts</td><td></td>
</tr>
<tr>
<td  colspan="4">From <input type="date" id="FromDate" value="<?php echo $FromDate;?>"> to 
<input type="date" id="ToDate" value=<?php echo $ToDate;?>></td>

<td>
<div class="form-group">
      <label class="control-label" for="Name">Category: </label>

<select name="VoucherTypeID" id="VoucherTypeID" class="form-control">
				<option value="0">Please select...</option>
<?php
$VoucherTypeIDinfo = $Handle->runQuery("SELECT * FROM tbl_vouchertype where Id in (9,16)");
//echo $ItemCategoryID;

for ($ig = 0; $ig < count($VoucherTypeIDinfo,0); $ig++) {
       ?>
 <option value="<?php echo $VoucherTypeIDinfo[$ig]['ID'];?>"  ><?php echo $VoucherTypeIDinfo[$ig]['Name'];?></option>
	<?php } ?>
		</select></div>
</td>
<td>
 
</td>
<td><a href="#" class="btn " onClick="ShowReport();">Check	</a></td>
</tr>

</table>
</div>
<div id="SearchResult">

</div>
</div>
<script>
function ShowReport(){
//var vl= val01;
var searchcontent='';
var VoucherTypeID=document.getElementById("VoucherTypeID").value;
if (VoucherTypeID==0){return;}
var FromDate=document.getElementById("FromDate").value;
var ToDate=document.getElementById("ToDate").value;
//alert(VoucherTypeID);
var Type="Register";
 var pg="app/views/register.sql.php";
	$.post(pg,{Type:Type, FromDate:FromDate,ToDate:ToDate,VoucherTypeID:VoucherTypeID, searchcontent:searchcontent},function(data){
		document.getElementById("SearchResult").innerHTML=data;
		});
 
}
</script>
</div>
 
 