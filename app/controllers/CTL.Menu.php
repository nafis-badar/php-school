<?php
include_once 'app/models/MOD.Menu.php';

class Menu extends MODMenu
{
	 function getMenuDetails()
	 {
		$getInfo= $this->getAllData();
		return $getInfo;
		 }
}