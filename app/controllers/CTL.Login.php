<?php
//ob_start();
if (!isset($_SESSION)) {session_start();}
error_reporting(E_ALL && ~E_NOTICE);
//require_once("../includes/functions.php");
 //echo defined(APP_DIR);
 // echo "abc";
  require_once("../models/dbase.php");
 //echo "xvz";
$db_handle = new DBController();
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$_SESSION['from_date']=$date;
$_SESSION['to_date']=$date;
//echo $date;
$uname=$_POST['uid'];
$pass=$_POST['pwd'];
//$usertypeid=0;
//$uname = mysql_real_escape_string($uname);
//$pass = mysql_real_escape_string($pass);
$sql= "Select * from users where password= '$pass' and username='$uname'   limit 1";
// echo $sql;
$result = $db_handle->runQuery($sql);

if (sizeof($result)>0)
{
	//$result=mysql_fetch_array($query);
	$_SESSION['name']=$result[0]["Name"];
	$u_id=$result[0]["ID"];
	// echo $u_id;
	//date_default_timezone_set('Australia/Melbourne');
	//$date = date('m/d/Y h:i:s a', time());
	$sql2="update users set LastLoginTime=current_timestamp(), IsLogIn='1' where id=$u_id" ;
	$logintime = $db_handle->insertQuery($sql2);
	// echo $sql2;

	$u_pwd=$result[0]["Password"];
	$u_name=$result[0]["Name"];
	$u_isactivated=$result[0]["IsActivated"];
	global $loginstatus;
	$loginstatus=1;
	$_SESSION['id']=$result[0]["ID"];
	$_SESSION['isactivated']=$result[0]["IsActivated"];
	//$_SESSION['islogin']=1;
	$_SESSION['loginid']=$result[0]["ID"];
	$_SESSION['UserID']=$result[0]["ID"];

	$_SESSION['logintypeid']=$result[0]["UserTypeID"];
	$_SESSION['usertypeid']=$result[0]["UserTypeID"];
	$_SESSION['loginstatus']=1;
	$_SESSION['name']=$result[0]["Name"];
	$_SESSION['MasterID']=$result[0]["MasterID"];
	$MasterID=$result[0]["MasterID"];
	//$_SESSION['branchid']=$result["branchid"];
	$_SESSION['memberid']=$result[0]["MasterID"];
	$_SESSION['masterid']=$result[0]["MasterID"];
	$_SESSION['OfficeID']=10001;
	echo "1";
	$sql1="Select m.ID,m.OfficeID,m.Name,o.Name Office from tbl_master m left outer join tbl_master o on o.ID=m.OfficeID where m.ID='$MasterID' limit 1";
 	$result1=$db_handle->runQuery($sql1);
    $rowcount1=sizeof(result1);
		if ($rowcount1>0)
			{
				//$result1=mysql_fetch_array($query1);
				$_SESSION['branchid']=$result1[0]["OfficeID"];
				$_SESSION['OfficeID']=$result1[0]["OfficeID"];
				$_SESSION['name']=$result1[0]["Name"];
				$_SESSION['office']=$result1[0]["Office"];
			}
}
else
{
	echo "0";
}


?>
