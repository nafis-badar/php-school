<?php
if (!isset($_SESSION)) {session_start();	}
if(isset($_SESSION['loginid'])==0){header('Refresh:0;URL=index.php?p=login');}
date_default_timezone_set('Asia/Kolkata');
require_once("CTL.News.php");

 $Handle = new News();

$ID=$_REQUEST['ID'];
$NewsID=$_REQUEST['ID'];
 
$NewsDate=date("d-m-Y h:i:s a"); 
$HeadLine='';
$HighLights='';
$News='';
 
 
?>
 
<div class="workspace">
<div class="displayhead">News
<span style=""  name="Operation"   class="btn btn-primary pull-right"  onClick="SaveNews();" >
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span>
<div id="message" style="font-size:12px;"></div>
</div>
<div class="panel-body" id="accordion1">

<?php
if ($ID!=0)
{
	
	$getinfo = $Handle->NewsDetails($ID);

	for ($x = 0; $x < count($getinfo,0); $x++) 
	{
		//$ID=$_REQUEST['ID'];
		//echo $ID;
		//ID, HeadLine, HighLights, News, NewsDate, Image1, CreatedBy, CreateTime, ModifiedBy, ModifyTime
		$ID=$getinfo[$x]["ID"];
		$HeadLine=$getinfo[$x]["HeadLine"];
		$HighLights=$getinfo[$x]["HighLights"];
		$News=$getinfo[$x]["News"];
		 $NewsDate=date("d-m-Y h:i:s a",strtotime($getinfo[$x]["NewsDate"]));
		 
	} 
}
?>
       
 
 <div class="form-group">
  
 <?php //echo $Name; ?> 
<input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>">
 <label class="control-label" for="RegDate">Date: <b style="color:rgba(17,67,168,1.00);" ><?php echo $NewsDate; ?></b></label>
  </div> 
   <div class="form-group">
  <label class="control-label" for="HeadLine">HeadLine:</label>
   <div class="">
  <input type="text" class="form-control" id="HeadLine" name="HeadLine" placeholder="Enter HeadLine" value="<?php echo $HeadLine; ?>"> 
 
  
</div> </div> 
  
   

<div class="form-group">
  <label class="control-label" for="HighLights">HighLights:</label>
  <div class="">
   <textarea class="form-control " placeholder="Enter HighLights" id="HighLights"  name="HighLights" rows="5" >
  <?php echo ltrim($HighLights); ?></textarea>  
</div></div>
 
<div class="form-group">
  <label class="control-label" for="News">News:</label>
  <div class="">
   <textarea class="form-control " placeholder="Enter News" id="News"  name="News" rows="5" >
  <?php echo ltrim($News); ?></textarea>  
</div></div>
 
   </div>
 <script type="text/javascript" src="app/libs/js/News.js"></script>
    </div>

