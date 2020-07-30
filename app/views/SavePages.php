<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/dbase.php';
//echo "BLANK";
//require_once("app/includes/dbase.php");
//$db_handle = new DBController();
$Handle= new DBController();
$ID=$_REQUEST['ID'];
$LinkName=$_REQUEST['LinkName'];
$Content=$_REQUEST['Content'];
$Identity=$_REQUEST['Identity'];
$Type=$_REQUEST['Type'];
$IsMenu=$_REQUEST['IsMenu'];
$CODE=str_replace("'","\'",$_REQUEST['CODE']);
$Icon=$_REQUEST['Icon'];
$MID=$_REQUEST['MID'];
$OnClick=str_replace("'","\'",$_REQUEST['OnClick']);
$Href=$_REQUEST['Href'];
$IsActive=$_REQUEST['IsActive'];
$HasSubMenu=$_REQUEST['HasSubMenu'];
$IsSubMenu=$_REQUEST['IsSubMenu'];
$SORT=$_REQUEST['SORT'];
$Table="pages";
$sql="UPDATE pages set 
LinkName='$LinkName', Content='$Content', Identity='$Identity', Type='$Type', IsMenu='$IsMenu', CODE='$CODE', Icon='$Icon', MID='$MID', OnClick='$OnClick', Href='$Href', IsActive='$IsActive', HasSubMenu='$HasSubMenu', IsSubMenu='$IsSubMenu', SORT='$SORT' 
where ID='$ID'";
//echo $sql;
$d=$Handle->insertQuery($sql);
?>