<?php
if (file_exists('app/models/MOD.Accounts.php')) {
      //      echo "The file $file_pointer exists";
include_once 'app/models/MOD.Accounts.php';
 }
 elseif (file_exists('../models/MOD.Accounts.php')) {
include_once '../models/MOD.Accounts.php';
        }
//include_once 'app/models/MOD.Accounts.php';

class Accounts extends MODAccounts
{
	
	}
?>