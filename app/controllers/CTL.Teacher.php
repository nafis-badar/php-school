<?php
//include_once 'app/controllers/CTL.Employee.php';
include_once 'app/models/MOD.Teacher.php';
class Teacher extends MODTeacher
{
	 
	function	SubmitedData($data)
	{
$ID=$_REQUEST['ID'];
$PDID=$_REQUEST['PDID'];	
 $Name=$_REQUEST['Name'];
 $AddressID=$_REQUEST['AddressID'];
 $ContactNo=$_REQUEST['ContactNo'];
 $MAP=$_REQUEST['Address'];
 $DOJ=$_REQUEST['regdate'];
 $Email=$_REQUEST['email'];
 $Website=$_REQUEST['website'];
 $Country=$_REQUEST['country'];
 $ModifyTime=date("Y-m-d H:i:s"); 
 $ModifiedBy=$_SESSION['UserID'];
// $Description=$_REQUEST['Operation'];
 $TagLine=$_REQUEST['tagline'];
 $State=$_REQUEST['state'];
 $PAN=$_REQUEST['pan'];
 $GST=$_REQUEST['GST'];
 $CIN=$_REQUEST['CIN'];
 $TAN=$_REQUEST['TAN'];
 $VAT=$_REQUEST['VAT'];
 $CST=$_REQUEST['CST'];
 $TIN=$_REQUEST['TIN'];
 //echo $this->sql_escape($_POST['name']);
 $insert_data= array(
	'Name' => $this->sql_escape($_POST['name']));
	return "Success";
		}
		
}
?>