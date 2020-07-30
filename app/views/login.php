<?php
 if (isset($_SESSION['id']))
				{ ?>
            
              <script>
			  //  alert("<?php echo 'SESSIONLOGINID:'.isset($_SESSION['id']);?>");
			   redirectBypage('userpage');

</script>

<?php
				}
				
else
{
?>

<!--<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
-->
<?php
/*header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

*/ 
?>
<script>
 // alert("<?php echo 'SESSIONLOGINID:'.isset($_SESSION['id']);?>");
</script>
<style>
 
  .btn
  {
   outline:0;
   border:none;
   border-top:none;
   border-bottom:none;
   border-left:none;
   border-right:none;
   box-shadow:inset 2px -3px rgba(0,0,0,0.15);
  }
  .btn:focus
  {
   outline:0;
   -webkit-outline:0;
   -moz-outline:0;
  }

  .form-signin {
    max-width: 280px;
    padding: 15px;

    margin: 0 auto;
      margin-top:10px;
  }
  .form-signin .form-signin-heading, .form-signin {
    margin-bottom: 10px;
  }
  .form-signin .form-control {
    position: relative;
    font-size: 12px;
    height: auto;
    padding: 12px;
   padding-left:15px;
  }

  .form-signin input[type="text"] {
    margin-bottom: 5px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-color:#FF4700;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-color: #FF4700;

  }
  .form-signin-heading {
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 2px rgba(0,0,0,0.5);
  }
  .form-control
  {background-color:rgba(67,141,255,1.00)!important;}
</style>
 
 <script>

 </script>

 

        <div style="    background-color:rgba(245,245,245,0.59);   opacity:1;  margin: auto;
    width: 350px;padding: 10px;   padding-top:2%;padding-bottom:2%; margin-top:2%; text-align:center; box-shadow: 0px 0px 32px 6px rgba(0,0,0,1);">
<a class="" href="index.html" style="margin-bottom:5px; margin-right:5px;">
                  <!--h3><img src="app/img/logo.png" alt="" title="#slider-direction-2" /><span>OK</span> TEST</h3-->
                </a>
            <div class="  " style="width:100%; margin: auto; " >
             <h2 class="text-center login-title" style="font-size:24px; border-bottom::2px solid #FF6E00;  background:rgba(0,78,160,1.00); color:rgba(255,255,255,1.00);">Log in</h2>
             <div style="padding:1px; margin-right:1px;">
                <form class="form-signin" autocomplete="off" id="myForm" name="myForm" style=" padding-left:2px;">
                 <div class="form-group" style="padding-bottom:0px;">
                 <label class="control-label" for="uid"  >	</label>
				<input class="form-control" type="text" placeholder="ID " style="color:#FFF; text-transform:uppercase ;  "  name="uid" id="uid" autocomplete="on" required autofocus tabindex="1" size="9" maxlength="9">
                </div>
				<div class="form-group" style="padding-top:15px;">
                <label class="control-label" for="pwd" style="padding-bottom:5px;">	</label>
				<input type="password" class="form-control" placeholder="Password" style="color:#fff;"
                name="pwd" id="pwd"  autocomplete="off" required tabindex="2" readonly  onfocus="this.removeAttribute('readonly');"></div>
                <a class=" btn   btn-lg"  href="#" style="color:#FFFFFF;"  onclick="checklogin();">Log In</a>
  
                </form>
                </div>
            </div>
			<div id="key" style="background-color:rgba(176,136,136,1.00);"></div>
 
        </div>
    
 

<?php 

 
 
 } ?>
 

 
					<div id="error"></div>
					<div class="logresult">...</div>
