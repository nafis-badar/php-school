<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/MOD.Payroll.php';
 
//echo "BLANK";
//require_once("app/includes/dbase.php");
//$db_handle = new DBController();
$Handle= new MODPayroll();
 

// ID, Name, FromDate, ToDate, CreatedBy, CreateTime, ModifiedBy, ModifyTime
$Type=$_REQUEST['Type'];
if($Type=='CreatePayroll')
{
$PayrollPeriodID=$_REQUEST['PayrollPeriodID'];
$PayrollNo='PR'.$Handle->PayrollPeriodName($PayrollPeriodID);
//echo $PayrollNo;
$PayrollDate=date("Y-m-d"); 

$ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
$CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s"); 
 /* $insert_data= array(
	'Name' => $this->sql_escape($Name),
	
	);*/
 
		$ID=$Handle->PayrollInsert($ID, $PayrollNo, $PayrollPeriodID, $PayrollDate, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime);
		
		echo $ID;
	}	
 
