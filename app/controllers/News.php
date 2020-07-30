<?php
if (!isset($_SESSION)) {session_start();	}
if(isset($_SESSION['loginid'])==0){header('Refresh:0;URL=index.php?p=login');}
date_default_timezone_set('Asia/Kolkata');
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/MOD.News.php';
 
 
$handle= new MODNews();
 



// $Description=$_REQUEST['Operation'];
// $TagLine=$_REQUEST['TagLine'];
 $ID=$_REQUEST['ID'];
 $HeadLine=addslashes($_REQUEST['HeadLine']);
 
 $HighLights= addslashes($_REQUEST['HighLights']);
  $News= addslashes($_REQUEST['News']); 
 $NewsDate=date("Y-m-d H:i:s");  
 $ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
 $CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s"); ; 
 
	if($ID==0){
		$NewsID=$handle->NewsInsert($ID, $HeadLine, $HighLights, $News, $NewsDate,  $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
	}
	else
		{
	$NewsID=$handle->NewsUpdate($ID, $HeadLine, $HighLights, $News, $NewsDate,  $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);	
	}
 
	 
