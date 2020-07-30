<?php
require_once("app/includes/functions.php");
//echo "Checking 1";
// directory separator depending on operating system
defined("DS") 	|| define("DS", DIRECTORY_SEPARATOR);
//define('SITE_NAME','wish');
define('SITE_TITLE','School Management');

// directory separator depending on operating system
if ($_SERVER['HTTP_HOST']=="127.0.0.1" || $_SERVER['HTTP_HOST']=="localhost")
{
	defined("SITE_NAME") 	|| define("SITE_NAME", "http://".$_SERVER['HTTP_HOST']."/sms/");
	defined("SITE_URL") 	|| define("SITE_URL", "http://".$_SERVER['HTTP_HOST']."/sms/");
	define('APP_URL','http://'.$_SERVER['HTTP_HOST'].'/sms/app/');
	//echo SITE_URL;
}
elseif ($_SERVER['HTTP_HOST']=="192.168.43.45" )
{
	defined("SITE_NAME") 	|| define("SITE_NAME", "http://192.168.43.45/patho/");
	defined("SITE_URL") 	|| define("SITE_URL", "http://192.168.43.45/patho/");
	define('APP_URL','http://192.168.43.45/patho/app/');
	//echo SITE_URL;
}
elseif ($_SERVER['HTTP_HOST']=="192.168.0.103" )
{
	defined("SITE_NAME") 	|| define("SITE_NAME", "http://192.168.0.103/patho/");
	defined("SITE_URL") 	|| define("SITE_URL", "http://192.168.0.103/patho/");
	define('APP_URL','http://192.168.0.103/patho/app/');
	//echo SITE_URL;
}
else
{
	defined("SITE_NAME") 	||  define("SITE_NAME",  "http://".$_SERVER['HTTP_HOST']."/");
	defined("SITE_URL") 	|| define("SITE_URL", "http://www.patho.skylinefincom.com");
	define('APP_URL',"http://".$_SERVER['HTTP_HOST']."/app/");
	//echo SITE_NAME;
	//|| define("SITE_NAME", "http://www.coredev.in/");
//	|| define("SITE_NAME", "http://adt.coredev.in/");
	//	|| define("SITE_NAME", "http://adt.binaryexistence.in/");
	//||  define("SITE_NAME",  "http://"+$_SERVER['HTTP_HOST']+"/");

}
		// root path
defined("PUBLIC_DIR") 	|| define("PUBLIC_DIR", "/../public/");
defined("APP_DIR") 		|| define("APP_DIR", "/../");
// root path
defined("ROOT_PATH") 	|| define("ROOT_PATH", realpath(dirname(__FILE__)));
//echo dirname(__FILE__);
//echo SITE_NAME ;
// template folder
defined("LIB_DIR") 		|| define("LIB_DIR", "libs");
defined("TEMPLATE_DIR") || define("TEMPLATE_DIR", "templates");
defined("CSS_DIR") 		|| define("CSS_DIR", "css");
defined("CSS_PATH") 	|| define("CSS_PATH", APP_URL.LIB_DIR."/".CSS_DIR);
defined("IMAGES_DIR") 	|| define("IMAGES_DIR", 'images');
defined("IMAGES_PATH") 	|| define("IMAGES_PATH", APP_URL.LIB_DIR."/".IMAGES_DIR."/");
//echo IMAGES_PATH;
defined("JS_DIR") 		|| define("JS_DIR", 'js');
defined("JS_PATH") 		|| define("JS_PATH", APP_URL.LIB_DIR."/".JS_DIR);
// includes folder
defined("VIEW_DIR") 	|| define("VIEW_DIR", "views");
defined("VIEW_PATH") 	|| define("VIEW_PATH",  APP_URL.VIEW_DIR);

defined("INC_DIR") 		|| define("INC_DIR", "includes");
defined("INC_PATH") 	|| define("INC_PATH",  APP_URL.INC_DIR."/");
//echo INC_DIR;
defined("CTLS_DIR") 	|| define("CTLS_DIR", 'controllers');
defined("CTLS_PATH") 	|| define("CTLS_PATH", APP_URL.CTLS_DIR."/");

defined("MOD_DIR") 		|| define("MOD_DIR", 'models');
defined("MOD_PATH") 	|| define("MOD_PATH", APP_URL.MOD_DIR."/");

 //echo realpath(INC_PATH);
// add all above directories to the include_path
 //echo ROOT_PATH.DS.APP_DIR.DS.VIEW_DIR ;

 //realpath fucntion will varify the actual path if exist or not
//echo realpath(ROOT_PATH.DS.APP_DIR.DS.VIEW_DIR );
set_include_path(	implode(PATH_SEPARATOR,array(
					realpath(ROOT_PATH.DS.VIEW_DIR),
					realpath(ROOT_PATH.DS.MOD_DIR),
					realpath(ROOT_PATH.DS.INC_DIR),
					realpath(ROOT_PATH.DS.TEMPLATE_DIR),
					realpath(ROOT_PATH.DS.CTLS_DIR),
					realpath(ROOT_PATH.DS.LIB_DIR.DS.IMAGES_DIR),
					realpath(ROOT_PATH.DS.LIB_DIR.DS.CSS_DIR),
					realpath(ROOT_PATH.DS.LIB_DIR.DS.JS_DIR),
					get_include_path()
				)));
$function_handle = new Functions();

//require_once("includes/functions.php");
//echo "<br>";
//echo ROOT_PATH;
?>
