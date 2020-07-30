<?php
//include "app/models/pass.txt";
//include_once "app/includes/password.php";
date_default_timezone_set('Asia/Kolkata');

 $PasswordHandle = new PassController();
// $pass=;
//echo "DBASE.PHP RUN<br>";
//echo pass();
$pass="Random01";
$dbUser="smsUser";
 defined("DB_HOST") 	|| define("DB_HOST", "localhost");
// database name
 defined("DB_NAME") 	|| define("DB_NAME", "sms");
// user name
 defined("DB_USERNAME") 	|| define("DB_USERNAME", $dbUser);

// password
//echo "passd: ".$pass." EndPassD<br>";
 //defined("DB_PASSWORD") 	|| define("DB_PASSWORD",$pass);
// echo DB_HOST.DB_USERNAME.DB_PASSWORD.DB_NAME;
//	echo "DBASE.PHP RUN 2<br>";

$filename="app/models/key";
    	if (file_exists($filename))
		{	$key=	date ("dmYHis", filectime($filename));	$file =  file_get_contents($filename) ;
    		//$pass= $PasswordHandle->decryptthis($file,$key);
			
			//echo $pass;
			$conndb = mysqli_connect("localhost",$dbUser,$pass,"sms") 	or die("Connection failed: " . mysqli_connect_error());
				if (mysqli_connect_errno()) 
				{
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
				}
		
		}
		else
		{
			
			//echo getcwd();
			$filename="../models/key";
			//echo $filename;
			//echo file_exists($filename);
			//echo "IT IS HERE";
			if (file_exists($filename))
			{	$key=	date ("dmYHis", filectime($filename));	$file =  file_get_contents($filename) ;
    			//$pass= $PasswordHandle->decryptthis($file,$key);
				//echo $pass;
			$conndb = mysqli_connect("localhost",$dbUser,$pass,"sms") 	or die("Connection failed: " . mysqli_connect_error());
				if (mysqli_connect_errno()) 
				{
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
				}
			}
			else
			{
				$filename="../../models/key";
				if (file_exists($filename))
			{	$key=	date ("dmYHis", filectime($filename));	$file =  file_get_contents($filename) ;
    			//$pass= $PasswordHandle->decryptthis($file,$key);
				//echo $pass;
			$conndb = mysqli_connect("localhost",$dbUser,$pass,"sms") 	or die("Connection failed: " . mysqli_connect_error());
				if (mysqli_connect_errno()) 
				{
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
				}
			}	
			}
		}
$loginstatus=0;
class PassController
{

    function decryptthis($data,$key){$encryption_key=base64_decode($key);list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);return openssl_decrypt($encrypted_data,'aes-256-cbc',$encryption_key,0,$iv);}
}
class DBController   {

	//private $host = DB_HOST;
	//private $user = DB_USERNAME;
	// private $password = DB_PASSWORD;
	//private $database = DB_NAME;

	/*function __construct() {
		 //echo "XYZ";
		// echo $this->host;
		/*$conn = $this->connectDB();
		if(!empty($conn)) {
//echo "connection_established";
			//$this->selectDB($conn);
		}
	}*/

	function connectDB() {
		//$pass="sam@007";
		 //$pass=$this->passk();
		// $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
 
	public function runQuery($query) {
//Execute your SQL query.
//mysql_query("SELECT id, name FROM users LIMIT 5");
//Record the end time after the query has finished running.
		global $queryTime;
		global $conndb;
		$started = microtime(true);
		$result = mysqli_query($conndb,$query);
		 
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		//print_r($resultset[]);
				$end = microtime(true);
		$duration = $end - $started;
		//$hours = (int)($duration/60/60);
		//$minutes = (int)($duration/60)-$hours*60;
//		 $queryTime = number_format($difference, 10);
		 $queryTime = $duration;
		//echo $queryTime; 
		if(!empty($resultset))
			return $resultset;
			
	
	
 
//Calculate the difference in microseconds.

 
//Format the time so that it only shows 10 decimal places.

	}
	function insertQuery($query) {
		global $conndb;
		$result = mysqli_query($conndb,$query);
		if(!$result)
		{
			return 0;
			}else{
							return mysqli_insert_id($conndb);
				}
	}
	function updateQuery($query) {
		global $conndb;
		$result = mysqli_query($conndb,$query);
		if(!$result)
		{
			return 0;
			}else{
							return mysqli_insert_id($conndb);
				}
	}
	function numRows($query) {
		global $conndb;
		$result  = mysqli_query($conndb,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
	// prepare for sql interaction
function sql_escape($value){
	global $conndb;
	//echo $value;
	if(PHP_VERSION < 6) {
		$value=get_magic_quotes_gpc() ? stripslashes($value) : trim($value);
		}
		if(function_exists("mysqli_real_escape_string")) {
			$value=mysqli_real_escape_string($conndb,$value);
			} else{
				$value=mysqli_escape_string($conndb,$value);
				}
				return $value;
	}

// populate single record
function fetchOne($sql){
	global $conndb;
	//mysql_select_db(DB_NAME,$conndb);
	$rs=mysqli_query($conndb,$sql) or die("Database query error.<br />".mysqli_error($conndb));
	$total=mysqli_num_rows($rs);
	if($total>0){
		$out=mysqli_fetch_assoc($rs);
		}
		mysqli_free_result($rs);
		return !empty($out) ? $out : null;
	}

// execute sql statement

function executeSql($sql){
	/*global $conndb;
	mysql_select_db(DB_NAME,$conndb);
	$rs= mysql_query($sql,$conndb) or die("Database query error.<br />".mysql_error());
	return !rs ? false : true;*/
	}

// push Content into layout
function pushLayout($cont){
	include_once("header.php");
	//echo "fafaf";
	//echo ROOT_PATH;
//	echo $cont;
	echo $cont;
	include_once("footer.php");
	}
function LoadLayout($page){
	//echo $page;
	/* if ($page='login.php')
	{
		include_once("app/views/header.php");
	include_once("app/views/".$page);	
	 include_once("app/views/footer.php");
		}
		else
		{ */
	include_once("app/views/header.php");
	//echo "fafaf";
	//echo ROOT_PATH;
	//echo 'page : '. $page;
	include_once("app/views/".$page);
	//echo 'page : '. $page;
	//echo 'ABC'.PUBLIC_FOLDER;
	include_once("app/views/footer.php");
	// }
	}
// render page
function render(){
	global $p;
	global $s;
	global $m;
	//echo $p;
	$row= $this->fetchPage($p);
	//echo $row['Content'];
	//echo $row['Type'];
	if(!empty($row))
	{
		$Content=$row['Content'];
				//echo "abc".$Content;
		//echo $row['Type'];
		if( $row['Type']=='page'){
			//echo $Content;
				$this->LoadLayout($Content);
			} elseif( $row['Type']=='cont')
			{
				//echo "A";
				$this->pushLayout($Content);
			}
	}
	else {
						//echo "B";
			echo $this->getMod(1);
			}
	}

// get page record
function fetchPage($Identity) {
	$sql ="SELECT * FROM pages
			WHERE Identity='";
	$sql .= $this->sql_escape($Identity);
	$sql .= "' LIMIT 1";
	$row = $this->fetchOne($sql);
	//echo $sql ;
	return !empty($row) ? $row : null;
	}
// get Content of the module
function getMod($id,$Content=null) {
	global $p;
	global $s;
	global $required;
	$module = $this->fetchModuleFile($id);
	$module_path = MOD_DIR.DS.$module;
	//echo $module;
	//echo $module_path;
	if(is_file($module_path)) {
		ob_start();
		require_once($module_path);
		return ob_get_clean();
		}
	}

// fetch the name of the module
function fetchModuleFile($id) {
	if(!empty($id)) {
		$sql="SELECT file FROM modules
			WHERE id = ";
			$sql .= $this->sql_escape($id);
			$sql .=" LIMIT 1";
			echo $sql;
			$row = $this->fetchOne($sql);
		}
		return !empty($row) ? $row['file'] : null;
	}

function getTableData($TableName,$ID) {	
	if(!empty($id)) {
		$sql="SELECT * FROM ".$TableName."
			WHERE ID = ";
			$sql .= sql_escape($id);
			$sql .=" LIMIT 1";
			//echo $sql;
			$resultset=$this->runQuery($sql);
			if(!empty($resultset))
			return $resultset;
	}
}

// fetch company information for firstpage & Other
function fetchCompanyName($id) {
	global $Company_Name;
	if(!empty($id)) {
		$sql="SELECT name FROM tbl_company
			WHERE id = ";
			$sql .= sql_escape($id);
			$sql .=" LIMIT 1";
			//echo $sql;
			$row = fetchOne($sql);
		}
		return !empty($row) ? $row['name'] : null;
//		$Company_Name=$row['name'];
		//echo $Company_Name;
	}
}
?>
