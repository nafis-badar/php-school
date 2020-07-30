 <?php
if (!isset($_SESSION)) {session_start();}
require_once("../models/MOD.Accounts.php");
$Handle = new MODAccounts();

$Type=$_REQUEST['Type'];
 //echo $Type;
if ($Type=='GetItemInfo')
{
	$ID=$_REQUEST['ID'];
	//echo $ID.'<br>';
	if($ID==0)
	{
	
	}
	else
	{
	$DrCr=$Handle->getDrCr($ID);
	echo $DrCr;
		
		}
}