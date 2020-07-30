<?php
if (!isset($_SESSION)) {session_start();}

require_once("CTL.Payroll.php");

 $Handle = new Payroll();

//$ID=$_REQUEST['ID'];
//echo $ID;
//$MasterID=$_REQUEST['ID'];
 $MasterID=$_SESSION['MasterID'];
//$MasterID=0;
$File='';
$Folder='';
$InCorporationDate=date("Y-m-d"); 
$Address='';
$State='';
$Country='';
$ContactNo='';
$TEL='';
$Email='';
$DepartmentID=0;
//ID, PayrollID, MasterID, File, Folder, CreatedBy, CreateTime, ModifiedBy, ModifyTime
$PayrollPeriodID=0;
$PayrollNo='';
$PayrollDate=date("Y-m-d"); 
$FromDate=date("Y-m-d"); 
$ToDate=date("Y-m-d"); 
//ID, PayrollNo, PayrollPeriodID, PayrollDate, CreatedBy, CreateTime, ModifiedBy, ModifyTime
/*if($ID>0)
{
	//$getParollMasterInfo=$Handle->PayrollMasterInfo($ID);	
	//$PayrollNo=$getParollMasterInfo[0]['PayrollNo'];
	//$PayrollDate=$getParollMasterInfo[0]['PayrollDate'];
	//$PayrollPeriodID=$getParollMasterInfo[0]['PayrollPeriodID'];
	
}*/

?>

<div class="workspace">
<div class="displayhead">Payroll Information
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveEmployee();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>
<div id="message"></div>
</div>
<div class="panel-body" id="accordion1">
<!--input type="hidden" id="PayrollID" value="<?php echo $PayrollID;?>"-->
 <table class="table">
 <!--tr>
 	<th style="width:20%">Payroll:</th><th style="width:30%"><?php echo $PayrollNo?></th><th style="width:20%">Date : </th><th style="width:30%"><?php echo $PayrollDate?></th>
 </tr>
 <tr>
 	<th>Payroll for the Period of : </th>
    <th  >
    <?php //echo $PayrollPeriodID;?>
    <select style="width:100%; border:0px!important;-webkit-appearance: none;
appearance: none;" name="PayrollPeriodID" id="PayrollPeriodID" disabled>
    <?php
    $getPayrollPeriodInfo=$Handle->PayrollPeriodReport($PayrollPeriodID);
	for($p=0;$p<count($getPayrollPeriodInfo,0);$p++)
	{
	?>
        <option value="<?php echo $getPayrollPeriodInfo[$p]['ID'];?>" 
		<?php if($PayrollPeriodID==$getPayrollPeriodInfo[$p]['ID']){echo 'selected="selected"';} ?>>
		<?php echo $getPayrollPeriodInfo[$p]['Name'].' ('.$getPayrollPeriodInfo[$p]['FromDate'].' To '.$getPayrollPeriodInfo[$p]['ToDate']. ')';?></option>
        <?php
	}
		?>
        </select>
    </th>
 </tr-->   
  <tr>
  <th></th>
  <th></th>
 <th>Employee : </th>
 <th>
<!--  onChange="//getEmployeeSelf(this.value);"-->
 <select style="width:100%; border:0px!important;-webkit-appearance: none; appearance: none;" 
 name="MasterID" id="MasterID" disabled>
 <option value="0">ALL</option>
    <?php
    $getEmployeeList=$Handle->EmployeeList();
	for($p=0;$p<count($getEmployeeList,0);$p++)
	{
	?>
        <option value="<?php echo $getEmployeeList[$p]['ID'];?>"  
        <?php if($MasterID==$getEmployeeList[$p]['ID']){echo 'selected="selected"';} ?>>
		<?php echo $getEmployeeList[$p]['Name'].' ('.$getEmployeeList[$p]['CODE'].')';?></option>
        <?php
	}
		?>
        </select>
 </th>
  </tr>
 
 <tr>
 <td colspan="4">
 <div id="SerachResult">
 </div>
 </td>
 </tr>
 </table>
 <div id="popup_conten"></div>
<script>
getEmployeeSelf(<?php echo $MasterID; ?>);
function getEmployeeSelf(MasterID)
{
	
	// alert(MasterID);
	 	var Type='GetEmployeeSelf';
	var pg='app/controllers/Payroll.php'; 
		//var BookingID=val01;
		$.post(pg,{Type:Type,ID:MasterID},function(data){
			//alert(data);
			document.getElementById("SerachResult").innerHTML=data});
}
function PDFUpload()
{
	//openModal();
	var Type='PDFUpload';
		var pg='app/views/popup.php'; 
		//var BookingID=val01;
		$.post(pg,{Type:Type},function(data){
			//alert(data);
			document.getElementById("popup_conten").innerHTML=data});
}
</script>
 <script>
$(document).ready(function() {
   $("#fupForm").on('submit', function(e){
	//   $('input[type="file"]').change(function(){
        //e.preventDefault();
		alert();
		var loc = window.location.href;
var fileNamePart = loc.substr(loc.lastIndexOf('/') + 1);
alert(loc+" * "+fileNamePart);
        $.ajax({
            type: 'POST',
            url: 'app/views/upload_file.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == 'ok'){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form Uploaded successfully.</span>');
                }else{
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#fupForm').css("opacity",".1");
                $(".submitBtn").removeAttr("disabled");
            }
        });
     /*   $('input[type="file"]').change(function(){
			$("#preview").html('');
		$("#preview").html('<img src="app/views/loader.gif" alt="Uploading...."/>');
		$("#image_upload_form").ajaxForm({target: '#preview'}).submit();
            alert("A file has been selected.");
        });*/
   
	// $("#photo").live('change', function() {
		/* $('input[type="file"]').change(function(){
		alert();
		$("#preview").html('');
		$("#preview").html('<img src="app/views/loader.gif" alt="Uploading...."/>');
		$('#image_upload_form').ajaxForm({target: '#preview'}).submit();*/
	}); 
});
</script>
 <!--script type="text/javascript" src="app/libs/js/Employee.js"></script>
<script>
$(document).ready(function() {
   $("#fupForm").on('submit', function(e){

        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'app/views/upload_file.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == 'ok'){
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form Uploaded successfully.</span>');
                }else{
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#fupForm').css("opacity",".1");
                $(".submitBtn").removeAttr("disabled");
            }
        });
     
	}); 
});
</script-->
    </div>
</div>
