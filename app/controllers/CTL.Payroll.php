<?php
include_once 'app/models/MOD.Payroll.php';

class Payroll extends MODPayroll
{
	 function checkPayrollDetails($PayrollID,$EmployeeID)
	 {
		 return $this->getPayrollDetailsInfoByMasterID($PayrollID,$EmployeeID);
		 
	}
 
	 
		
}
?>