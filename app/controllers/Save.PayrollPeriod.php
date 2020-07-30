<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/MOD.Payroll.php';
 
//echo "BLANK";
//require_once("app/includes/dbase.php");
//$db_handle = new DBController();
$Handle= new MODPayroll();
 

// ID, Name, FromDate, ToDate, CreatedBy, CreateTime, ModifiedBy, ModifyTime
$ID=$_REQUEST['ID'];
$Name=$_REQUEST['Name'];
$FromDate=$_REQUEST['FromDate'];
$ToDate=$_REQUEST['ToDate'];
  
 $ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
 $CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s"); ; 
 /* $insert_data= array(
	'Name' => $this->sql_escape($Name),
	
	);*/
 
	if($ID==0){
		$ID=$Handle->PayrollPeriodInsert( $ID, $Name, $FromDate, $ToDate, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
	}
	else
		{
	$ID=$Handle->PayrollPeriodUpdate( $ID, $Name, $FromDate, $ToDate, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);	
	}
	
 
