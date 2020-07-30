 <?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.VoucherMaster.php");
 
  $Handle = new VoucherMaster();
$VoucherTypeID=0;
if (isset($_GET['mode']))
 {	
 	$MODE = $_GET['mode'];
	$VoucherTypeID=$MODE;
 }
 $page='';
if (isset($_GET['p']))
 {	
 	$page = $_GET['p'];
}
$VoucherType=$Handle->GetVoucherType($VoucherTypeID);
$SessionID=$Handle->GetVoucherSession($VoucherTypeID);
$SessionVoucherID=$Handle->getVoucherIDFromSession($SessionID);
 ?>
 <div class="workspace" style="background-color:rgba(238,255,224,0.20);">
<div class="displayhead" ><?php echo $VoucherType;?> Index
<span style="margin-right:5px; border:0px;"  name="Operation"   class="btn btn-primary pull-right "onClick="redirectBypagewithIDValue('journal',<?php echo $VoucherTypeID;?>,0);" >
	
<i class="glyphicon glyphicon-book   " aria-hidden="true"></i> New</span>
<span style="margin-right:5px; border:0px;"  name="Operation"   class="btn btn-primary pull-right"  onClick="redirectBypagewithIDValue('menu',0,0);" >
	<i class="fa fa-list" aria-hidden="true"></i> Menu
</span>


</div>
 
<div class="panel-body" id="accordion1">
 
<script>
/*$(document).ready(function(){
    $('table').dataTable({
		 "paging":   true,
        "ordering": true,
        "info":     true
		});
	
});*/
</script>


        <div class="responsive">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
 
         
        <thead>
        <tr>
         <th style="width:5%">#Date</th>
         <th style="width:10%;">Purchase No</th>
         <th style="width:5%">Count</th><th style="width:60%; text-align:right;">Total Amount</th> <th  style="width:5%; text-align:center;"><i class="glyphicon glyphicon-align-center"></i></th> <th style="width:15%; text-align:center;" colspan="3">Status</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
         <th style="width:5%"> </th>
         <th style="width:10%;"> </th>
         <th style="width:5%">Count</th><th style="width:60%; text-align:right;"> </th> <th  style="width:5%; text-align:center;"><i class="glyphicon glyphicon-align-center"></i></th> <th style="width:15%; text-align:center;" colspan="3">OK</th>
        </tr>
        </tfoot>
        <tbody>
    
        
<?php
//$searchcontent=$_POST['searchcontent'];
$searchcontent='';
$user=$_SESSION['UserID'];
//$limit=$_POST['limit'];
//$offset=$_POST['offset'];
$limit=10;
$offset=10;

//$exsql=" limit $limit offset $offset";
$exsql="";
$sql="";
if ($searchcontent==''){
		$sql="select  vm.ID, vm.VoucherDate, vm.VoucherNo from  tbl_vouchermaster vm 
		where vm.VoucherTypeID=$VoucherTypeID  group by vm.ID,vm.VoucherNo,vm.VoucherDate ORDER BY vm.ID DESC ";	
	}
	else{
		$sql="select   vm.ID,vm.VoucherDate, vm.VoucherNo, sum(V.Debit) TotalAmount,count(V.transactionid) TotalEntry  from  tbl_vouchermaster vm left outer join tbl_voucherdetails V on vm.ID=V.VoucherID where V.Debit<>0 and vm.VoucherTypeID=$VoucherTypeID and (vm.VoucherNo like '%$searchcontent%' or vm.VoucherDate like '%$searchcontent%')    group by T.ID ORDER BY T.ID DESC";
		}
	 
	//mysql_select_db(DB_NAME,$conndb);


//$sql=$sql.$exsql;
//echo $sql;

	$query= $Handle->runQuery($sql);
	$numrows= count($query,0);
 	//$numrows=mysqli_num_rows($query);
	if ($numrows>0){
//$row = mysql_fetch_array($query);

	?>

        <!--tr style="border-bottom:groove; border-top:inset;">
        <div style="position: fixed;">
        <th style="width:100px;;">
        	<a href="#" id="previous" onClick="searchtransactioncontent(32,33,<?php echo $limit; ?>,<?php if (($offset-$limit)<=0){ echo 0;} else{echo $offset-$limit;} ?>);"><span class="glyphicon glyphicon-triangle-left" style="display:block;  border:1px solid #0A509A; padding:5px; text-align:center;">Previous</span></a></th>
        <th colspan="4">
        
        <div style="padding:5px;">
        Page: 
        <?php
        $numofpage=intval($numrows/$limit)+1;
		//echo $numofpage;
		for ($i=0; $i<$numofpage; $i++){
			$page="n".($i+1);
			?>
            <a id="<?php echo $page;?>" style="height:10px; width:15px; margin:2px; padding:5px; color:#FFB600; background-color:#1B0102; border-radius:5px; cursor:pointer; border:1px solid #555;" onClick="clearformat('<?php echo $page;?>'); searchtransactioncontent(32,33,<?php echo $limit;?>,<?php echo $i*$limit; ?>);"><?php echo ($i+1);?></a>
			<?php
            }
		?>
 

        
        </div></th>
        <th style="width:100px;">
        <?php //echo "NUM OF ROW: ".$numrows."<br>LIMIT: ".$limit."<br> OFFSET: ".$offset."<br>".$sql."<br>"; ?>
 
        <a href="#" id="next" onClick="searchtransactioncontent(32,33,<?php echo $limit; ?>,
		   
        <?php if ($offset<$numrows-$limit)
					{ echo  $offset+$limit ;} 
					else
					{echo $offset;}
					 ?> );"><span class="glyphicon glyphicon-triangle-left" style="display:block; border:1px solid #0A509A; padding:5px; text-align:center;">Next</span></a></th>
        <th>    <div style="color:#000; font-size:12px; text-align:right;">
          
                      No. of Records: 
            <select class="noofrecord" style="width:60px; font-size:12px; padding:5px;" onChange="searchtransactioncontent(32,33,2,0);">
            <option value="10" <?php if($limit==10) {echo "selected='selected'";} ?>>10</option>
            <option value="25" <?php if ($limit==25) {echo "selected='selected'";}?>>25</option>
            <option  value="50" <?php if ($limit==50) {echo "selected='selected'";}?>>50</option>
            <option  value="100" <?php if ($limit==100) {echo "selected=selected";}?>>100</option>
            </select> /page
             </div></th>
        </div>
        
        </tr-->
       
            <?php 
            $cnt=1;
        foreach($query as $row)	{
            ?>
                <tr style="background-color:rgba(233,232,232,0.16);">
                <td><?php $time = strtotime($row['VoucherDate']);
					$newformat = date('M d',$time);
					echo $newformat ; ?></td>
                <td> <?php echo $row['VoucherNo']; ?> </td>
                <td style=" text-align:center;"></td>
                <td style="text-align:right;"><?php echo $Handle->GetCartAmountByVoucherID($row['ID']); ?> INR</td>
                
                 
                
                <td  colspan="3">
                
               <span class="glyphicon glyphicon-eye-open btn btn-link" 
               onClick="redirectBypagewithIDValue('journal',<?php echo $VoucherTypeID;?>,<?php echo $row['ID'];?>);" ></span>
                <!--div id="pm<?php echo $row['ID']; ?>">
              <button class="btn btn-link" onClick="return transactionReceipt(<?php echo $row['ID'];?>);">Transaction Receipt</button>
              <?php
			  $IsClosed=$row['IsClosed'];
				if ($IsClosed==0){?>
				<!--button class="btn btn-link" onClick="CloseTheTransaction(<?php echo $row['ID']; ?>)">PAY NOW</button></div>
                <div id="errPayment" style="color:#DF3B3D;">
					<?php }
					else{?>
						<button class="btn btn-link" onClick="getviewtransaction(<?php echo $row['ID']; ?>);">Acknowledge</button>
						<?php }
			  ?>
              
                </div-->
                </td>
                   <td style="text-align:center;">
                 <?php if($SessionVoucherID==$row['ID']){echo "Open";} ?>
                 </td>
                     

                      
                  
                </tr>
                <?php 
				//echo $cnt;
                $cnt = $cnt+1;
        }
 
} 
     else
{
	echo "<tr><td colspan='8' style='color:rgba(250,150,0,0.9);'>NOTHING FOUND ......</td></tr>";
	}  
?>
</tbody>
  <!--  <tfoot>
          <!--tr style="border-bottom:groove; border-top:inset;">
        <div style="position: fixed;">
        <th style="width:100px;;">
        	<a href="#" id="previous" onClick="searchtransactioncontent(32,33,<?php echo $limit; ?>,<?php if (($offset-$limit)<=0){ echo 0;} else{echo $offset-$limit;} ?>);"><span class="glyphicon glyphicon-triangle-left" style="display:block;  border:1px solid #0A509A; padding:5px; text-align:center;">Previous</span></a></th>
        <th colspan="4">
        
        <div style="padding:5px;">
        Page: 
        <?php
        $numofpage=intval($numrows/$limit)+1;
		//echo $numofpage;
		for ($i=0; $i<$numofpage; $i++){
			$page="n".($i+1);
			?>
            <a id="<?php echo $page;?>" style="height:10px; width:15px; margin:2px; padding:5px; color:#FFB600; background-color:#1B0102; border-radius:5px; cursor:pointer; border:1px solid #555;" onClick="clearformat('<?php echo $page;?>'); searchtransactioncontent(32,33,<?php echo $limit;?>,<?php echo $i*$limit; ?>);"><?php echo ($i+1);?></a>
			<?php
            }
		?>
 

        
        </div></th>
        <th style="width:100px;">
        <?php //echo "NUM OF ROW: ".$numrows."<br>LIMIT: ".$limit."<br> OFFSET: ".$offset."<br>".$sql."<br>"; ?>
 
        <a href="#" id="next" onClick="searchtransactioncontent(32,33,<?php echo $limit; ?>,
		   
        <?php if ($offset<$numrows-$limit)
					{ echo  $offset+$limit ;} 
					else
					{echo $offset;}
					 ?> );"><span class="glyphicon glyphicon-triangle-left" style="display:block; border:1px solid #0A509A; padding:5px; text-align:center;">Next</span></a></th>
        <th>    <div style="color:#000; font-size:12px; text-align:right;">
          
                      No. of Records: 
            <select class="noofrecord" style="width:60px; font-size:12px; padding:5px;" onChange="searchtransactioncontent(32,33,2,0);">
            <option value="10" <?php if($limit==10) {echo "selected='selected'";} ?>>10</option>
            <option value="25" <?php if ($limit==25) {echo "selected='selected'";}?>>25</option>
            <option  value="50" <?php if ($limit==50) {echo "selected='selected'";}?>>50</option>
            <option  value="100" <?php if ($limit==100) {echo "selected=selected";}?>>100</option>
            </select> /page
             </div></th>
        </div>
        
        </tr-->
         </tfoot>  
        </table>  

</div>          
    <?php
?>
<script>
function clearformat(val01){
var vl= val01;
document.getElementById(vl).style.fontSize="16px";
document.getElementById(vl).style.border="3px solid $f00";
function CloseTheTransaction(val01){
		var pg="transaction_close.php";
	var id=val01;
	$.post(pg,{id:id},function(data){$("#pm"+val01).html(data)});
	}
}
function paymentmode(val01){
	var pg="transaction_instrument.php";
	var id=val01;
	$.post(pg,{id:id},function(data){$("#pm"+val01).html(data)});
	
}
function paymentconfirm(val01){

	var pg="sql/transaction.sql_1.php";
	var qtype="ReceiptAgainstApplication";
	var domid='InstrumentTypeID'.concat(val01);
	//alert(domid);
	var InstrumentTypeID=document.getElementById(domid).value;
	var InstrumentNo=document.getElementById('instrumentno'.concat(val01)).value;
	 $.post(pg,{qtype:qtype,TransactionID:val01,InstrumentTypeID:InstrumentTypeID,InstrumentNo:InstrumentNo},function(data){
		 alert(data);
		 if (parseInt(data)==1)	 {$("#pm".concat(val01)).html('<a href="#" onClick="getviewtransaction('+val01+');">Acknowledge</a>');	 }
		 if (parseInt(data)==0)	 {$("#errPayment").html(data);}
			});
	}
function transactionReceipt(str)
{
window.open("modules/transactionreceipt.php?id="+str, "myWindow", "status = 1, height = 700, width = 1100, resizable = 0");
}
</script>