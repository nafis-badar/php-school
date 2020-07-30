<?php
include_once 'app/models/MOD.VoucherType.php';

class VoucherType extends MODVoucherType
{
	
		function getVoucherAccountHead($VoucherTypeID){
		$Info=$this->QueryVoucherAccount($VoucherTypeID);
		return $Info;
		}
		function getVoucherAccountEditable($VoucherTypeID){
		$Info=$this->QueryVoucherAccountEditable($VoucherTypeID);
		return $Info;
		}
		
		function getAccountType($ID){
			$Info=$this->QueryAccountType($ID);
		return $Info;
			}
		function getCalculationMethod($ID){
			$Info=$this->QueryCalculationMethod($ID);
		return $Info;
			}
		function getAccountsName($ID){
			$Info=$this->QueryAccountName($ID);
		return $Info;
			}
			function getDrCrBoolean($Value){
				if($Value==1)
					return 'Dr';
				else
					return 'Cr';
			}
			function getIsPermanentBoolean($Value){
				if($Value==1)
					return 'Yes';
				else
					return 'No';
			}
		
	}
?>