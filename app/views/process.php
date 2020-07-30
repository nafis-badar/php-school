<?php 
if (!isset($_SESSION)) {session_start();}
require_once("app/models/dbase.php");
//error_reporting(E_ALL && ~E_NOTICE);
global $conndb;
mysql_select_db(DB_NAME,$conndb);
 
$names=array();
?>
<?php
if(isset($_POST['name']))
{
$name=$_POST['name'];
//echo $name;
if(isset($_POST['searchfor']))
{
$searchfor=$_POST['searchfor'];
 $sql='';
// echo $searchfor;
if ($searchfor=='product')
{
	global $sql;
$sql="select ID,Name from tbl_item where name  LIKE '%$name%' LIMIT 10 ";	
}
elseif ($searchfor=='journalaccount')
{
		global $sql;
$sql="select ID,Name from tbl_master where mastertypeid=7 and name  LIKE '%$name%' LIMIT 10 ";	
}
elseif ($searchfor=='supplieraccount')
{
		global $sql;
$sql="select ID,Name from tbl_master where mastertypeid=7 and name  LIKE '%$name%' LIMIT 10 ";	
}
elseif ($searchfor=='purchaseaccount')
{
		global $sql;
$sql="select ID,Name from tbl_master where mastertypeid=7 and name  LIKE '%$name%' LIMIT 10 ";	
}
elseif ($searchfor=='paybleaccounts')
{
		global $sql;
$sql="select ID,Name from tbl_master where  name  LIKE '%$name%' LIMIT 10 ";	
}


$namelength=strlen($name);
$formatname='<span style=\'font-weight:bold; color:#ff2211; text-decoration:underline;\'>'.strtoupper($name).'</span>';
//echo $sql;
$result=mysql_query($sql)  or die(mysql_error());
echo"<ul class='searchsugg' style='z-index:1001;' >";
while($row=mysql_fetch_array($result))
{
	$names[]=$row["Name"];
	$id[]=$row["ID"];
	echo '<li id=\''.addslashes($row["ID"]).'\' onClick="fillSearch(\''.addslashes($row["Name"]).'\',\''.addslashes($row["ID"]).'\');">'.
	str_replace(strtoupper($name),$formatname,strtoupper($row["Name"])).'</li>';
	
}
if(empty($names))
{
echo '<li  ><br/><a style="cursor:pointer;"  >No result<a/></li>';
}

echo"</ul>";
}
}
?>
