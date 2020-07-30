<?php
//require_once("../models/dbase.php");
require_once 'app/models/dbase.php';

//echo "FUNCTION.PHP RUN<br>";
//require_once("config.php");
//convert url parameter to variables

//echo $p;
//$p="company";
//$Company_Name="??";
 $p="index";
 
  if(isset($_GET)) {
	foreach($_GET as $key =>$value){
		if(!empty($value)){
			${$key}=trim($value);
			}
		}
	}
	
class Functions extends DBController
{
 
 //private $p="index";
 function __construct()
 {
	  //echo "I Am Construct";
	 $this->render();

	 }


}
?>