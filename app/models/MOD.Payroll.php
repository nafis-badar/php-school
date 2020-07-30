<?php
require_once 'MOD.Master.php';
class MODPayroll extends MODMaster
{
	//private $MasterTypeID=27;
	private function MasterTypeID()
	{
	$MasterTypeID=27;	
	return $MasterTypeID;
		}
	function PayrollPeriodName($ID)
	{
		$sql="Select Name From tbl_payrollperiod where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function PayrollPeriodDetails($ID)
	{
		$sql="SELECT * from tbl_payrollperiod where ID=$ID limit 1";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
function PayrollPeriodReport()
		{
			$sql="SELECT * from tbl_payrollperiod order by FromDate Desc";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
function PayrollPeriodInsert( $ID, $Name, $FromDate, $ToDate, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
{
	$sql="INSERT INTO tbl_payrollperiod( Name, FromDate, ToDate, CreatedBy, CreateTime, ModifiedBy, ModifyTime) 
		    values('$Name', " . ($FromDate==NULL ? "NULL" : "'$FromDate'") . ", " . ($ToDate==NULL ? "NULL" : "'$ToDate'") . ", '$CreatedBy',  '$CreateTime', '$ModifiedBy','$ModifyTime')
		 ";
		   echo $sql;
		 $result = $this->insertQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $result;
	}
function PayrollInsert($ID, $PayrollNo, $PayrollPeriodID, $PayrollDate, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
{
	$sql="INSERT INTO tbl_payrollmaster( PayrollNo,PayrollPeriodID, PayrollDate, CreatedBy, CreateTime, ModifiedBy, ModifyTime) 
		    values('$PayrollNo',$PayrollPeriodID, " . ($PayrollDate==NULL ? "NULL" : "'$PayrollDate'") . ", '$CreatedBy',  '$CreateTime', '$ModifiedBy','$ModifyTime')
		 ";
		  // echo $sql;
		 $result = $this->insertQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $result;
	}	
	
function PayrollPeriodUpdate( $ID, $Name, $FromDate, $ToDate, $CreatedBy, $CreateTime, $ModifiedBy, $ModifyTime)
{
	 $sql="Update tbl_payrollperiod set
			Name= '$Name', 
			ModifiedBy= '$ModifiedBy', 
			ModifyTime= '$ModifyTime', 
			FromDate= " . ($FromDate==NULL ? "NULL" : "'$FromDate'") . ",  
			ToDate= " . ($ToDate==NULL ? "NULL" : "'$ToDate'") . " 
			where ID=$ID ";
	//	     echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
function	PayrollExist($PayrollPeriodID)
{
	$sql="SELECT ID from tbl_payrollmaster where PayrollPeriodID=$PayrollPeriodID";
	 $result = $this->runQuery($sql);
	 //echo
	 return count($result,0);
	}
function PayrollReport()
		{
			$sql="SELECT * from tbl_payrollmaster order by PayrollDate Desc";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}	
function CountPayrollDetails	($ID)
{
	$sql="SELECT * from tbl_payrolldetails where PayrollID=$ID";
  //echo $sql;
$getInfo= $this->runQuery($sql);
return count($getInfo,0) ;
}
		function getFile($PayrollDetailsID)
		{
			$sql="SELECT File from tbl_payrolldetails where  ID=$PayrollDetailsID";
		  //echo $sql;
		$getInfo= $this->runQuery($sql);
		if(count($getInfo,0)>0)
			if($getInfo[0]['File']==1)
			return $PayrollDetailsID.'.pdf' ;
			else
			return 'NULL' ;
		else
		return 'NULL' ;
			}
		function PayrollNo($ID)
	{
		$sql="Select PayrollNo Name From tbl_payrollmaster where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
		function PayrollDate($ID)
	{
		$sql="Select PayrollDate Name From tbl_payrollmaster where ID=$ID";
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['Name'] ;
	}
	function PayrollMasterInfo($ID)
	{
		$sql="SELECT * from tbl_payrollmaster where ID=$ID limit 1";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}		
	function PayrollDetailsInfo($ID)
	{
		$sql="SELECT * from tbl_payrolldetails where PayrollID=$ID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
		function getPayrollDetailsInfoByMasterID($ID,$MasterID)
	{
		$sql="SELECT ID from tbl_payrolldetails where PayrollID=$ID and MasterID=$MasterID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		if(count($getInfo,0)>0)
			return $getInfo[0]['ID'] ;
		else
		return 0 ;
		}
		function InsertIntoPayrollDetails($ID,$MasterID)
		{
			$ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
 $CreatedBy= $_SESSION['UserID'];
$CreateTime= date("Y-m-d H:i:s");
$File=str_pad($ID,5,"0").str_pad($MasterID,5,"0").'.pdf';
			$sql="INSERT INTO tbl_payrolldetails(PayrollID, MasterID, File, Folder, CreatedBy, CreateTime, ModifiedBy, ModifyTime)
		 values('$ID','$MasterID', '0', 'testupload','$CreatedBy', '$CreateTime', '$ModifiedBy', '$ModifyTime')";
					
					 $result = $this->insertQuery($sql);
		 //echo "<p>Successfully Saved</p>";
		 return $result;
			}
			function	UpdateFileStatus($PayrollDetailsID)
		{$ModifyTime=date("Y-m-d H:i:s"); 
$ModifiedBy=$_SESSION['UserID'];
			$sql="UPDATE tbl_payrolldetails set File=1, ModifiedBy='$ModifiedBy', ModifyTime='$ModifyTime' where ID=$PayrollDetailsID";
			//echo $sql;
			$result = $this->updateQuery($sql);
			return $result;
			}
	function EmployeeList()
	{
		$sql="SELECT * from tbl_master where MasterTypeID=27";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
		function EmployeeListByID($ID)
	{
		$sql="SELECT * from tbl_master where MasterTypeID=27 and ID=$ID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
}
?>
