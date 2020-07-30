<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/MOD.Employee.php';
//echo "BLANK";
//require_once("app/includes/dbase.php");
//$db_handle = new DBController();
$Handle= new MODCompany();
$Table="tbl_address";
if($Table=="tbl_address")
{
	//ADDRESS
$ID= '0'; 
$AddressID= '0'; 
$AddressLine1= ''; 
$AddressLine2= ''; 
$LANDMARK= ''; 
$VILL= ''; 
$PO= ''; 
$DIST= ''; 
$PIN= ''; 
$State= ''; 
$StateID= '33'; 
$Country= ''; 
$CountryID= '91'; 
$ContactPerson= ''; 
$ContactNo= ''; 
$Email= ''; 
$WebSite= ''; 
$Address= ''; 
$MacID= '0'; 
$CreatedBy= ''; 
$CreateTime= ''; 
$OldID= '0'; 
// END OF ADDRESS INITIALISING
if(!$ID=0)
{
	$TableData=$Handle->getTableData($Table,$ID);
	$ID= $_REQUEST[0]["ID"]; 
}
	}
