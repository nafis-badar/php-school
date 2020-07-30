<?php
include_once 'app/models/dbase.php';

class MODMenu extends DBController
{
	 function getAllData()
	 {
		  
		$Sql="SELECT * FROM pages where IsMenu=1 and IsSubMenu=0  order by sort";
		$GetMenu = $this->runQuery($Sql);/* WHERE MasterTypeID=1");*/
		return $GetMenu;
		 }
}