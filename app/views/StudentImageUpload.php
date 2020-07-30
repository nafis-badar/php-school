<?php
if (!isset($_SESSION)) {session_start();	}
if(isset($_SESSION['loginid'])==0){header('Refresh:0;URL=index.php?p=login');}
date_default_timezone_set('Asia/Kolkata');


$Type = 'PDFUpload';//$_REQUEST['Type'];

if($Type='PDFUpload')
{
		//$PayrollID=$_REQUEST['mode'];
	$StudentID=$_REQUEST['ID'];
?>


  <!--div id="FileUpload" class="w3-modal" style="display:block; z-index:1001;">
    <div class="w3-modal-content" id="popup_contents"-->
 <div class="workspace">
<div class="displayhead">FILE UPLOAD
<!--span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveEmployee();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span-->
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right " 
onClick="redirectBypagewithIDValue('student',1,<?php echo $StudentID; ?>);" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>
<div id="message"></div>
</div>
<div class="panel-body" id="accordion1">     
 
<p class="statusMsg"></p>
                           <div class="upload_container">
<br clear="all" />
<center>
<div style="width:350px" align="center">

      <form  id="fupForm" method="post" enctype="multipart/form-data" >
 <div class="upload_button">
  <input type="hidden" id="StudentID" name="StudentID" value="<?php echo $StudentID;?>">
<input type="file" name="file" id="file" onChange="validatePDF(e);" class="form-control"  required />
</div><br clear="all">
<input type="submit" name="submit" class="btn btn-danger submitBtn" value="SAVE"/>

</form>
 

<br clear="all" />
</div>  </center>
   </div>	
    <script language="JavaScript">
var formOK = false;

function validatePDF(event){
if(event.value != "") {
var regx = /^[a-zA-Z\s]+$/; 
if (regx.test(event.value) == false) {
 app.alert("The entered value needs to be a valid letters");
 event.rc = false;
}
}
}
</script>
 <script>
// $("#fupForm").serialize(),
$(document).ready(function() {
   $("#fupForm").on('submit', function(e){
	   e.preventDefault();
	        $.ajax({
            type: 'POST',
            url: 'app/views/StudentImageUploadProcess.php',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == " ok"){
					//UpdateFileStatus($("#PayrollDetailsID").val());
                     $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form Uploaded successfully.</span>');
					redirectBypagewithIDValue('student',1,<?php echo $StudentID; ?>);
                }
				else if(msg == "err1"){
					//UpdateFileStatus($("#PayrollDetailsID").val());
				 $('#fupForm')[0].reset();
				$('.statusMsg').html('<span style="font-size:18px;color:#34A853">Err1 Form Uploaded successfully.</span>');
                }
				else
				{
					//alert("A"+msg+"A");
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Err2 Some problem occurred, please try again.</span>');
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
   </div>
  </div>
    <!--/div>
  </div-->
<?php	
}
?>