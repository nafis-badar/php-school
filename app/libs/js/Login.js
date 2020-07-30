 function checklogin()
{
	//alert("ID LENGTH ERROR! ");
	
				var uid=$("#uid").val();

	if (uid.length<2) {
		alert("ID LENGTH ERROR! ");
		exit();
		}
	//$uid = mysql_real_escape_string($uid);
		var pwd=$("#pwd").val();
	//var pg ="modules/login.class.php";
	var pg = "app/controllers/CTL.Login.php";
	// alert(pg);
	//alert("uid:  " + uid + "   pwd:  " + pwd);
	$.post(pg,{uid:uid,pwd:pwd},function( data ) {
                  
	
		 document.getElementById("error").innerHTML=data;
		// alert(data);
		if (data==0)
		{
			//document.getElementById("logresult").innerHTML='Wrong Credintial';
		}
		else{
 //document.getElementById("logresult").innerHTML=data+<?php SITE_URL;?>;
 window.location.reload();
// window.location="<?php echo SITE_URL;?>";
				}	});	}