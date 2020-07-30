 <?php
if (!isset($_SESSION)) {session_start();}
require_once("../models/MOD.Payroll.php");
$Handle = new MODPayroll();
$Type=$_REQUEST['Type'];
 //echo $Type;
if ($Type=='GetEmployee')
{
	//$MasterGroupID=101;
	$ID=$_REQUEST['ID'];
	$PayrollID=$_REQUEST['PayrollID'];
	//$PayrollDetailsID=0;
	// echo $ID.'<br>';
	if($ID==0)
	$getEmployeeList=$Handle->EmployeeList();
	else
	$getEmployeeList=$Handle->EmployeeListByID($ID);
	
	
?>
<!--pre>
<?php //print_r($getEmployeeList);
//echo count($getEmployeeList,0);
 ?>
</pre-->
<table class="table">
<tr>
  	<th style="width:20%">Employee CODE</th><th style="width:30%">Employee Name</th><th style="width:20%">Department</th><th style="width:30%">Details</th>
 </tr>
<?php
for ($x = 0; $x < count($getEmployeeList,0); $x++) 
	{
		$PayrollDetailsID=$Handle->getPayrollDetailsInfoByMasterID($PayrollID,$getEmployeeList[$x]["ID"]);
		//echo $PayrollDetailsID;
		if($PayrollDetailsID==0)
		$PayrollDetailsID=$Handle->InsertIntoPayrollDetails($PayrollID,$getEmployeeList[$x]["ID"]);
		
		$File=$Handle->getFile($PayrollDetailsID) ;
		?>
        <tr>
        	<td><?php echo $Handle->MasterCodeByID($getEmployeeList[$x]["ID"]);?></td>
            <td><?php echo $Handle->MasterNameByID($getEmployeeList[$x]["ID"]);?></td>
            <td><?php echo $Handle->MasterDepartmentByID($getEmployeeList[$x]["ID"]);?></td>
            <?php
            if($File=='NULL')
			{
				?>
                <td>
               <div class="btn btn-primary" 
               onClick="redirectBypagewithIDValue('pdfupload',<?php echo $PayrollID; ?>,<?php echo $PayrollDetailsID; ?>);">Upload</div> 
 
  </td>
             <?php
			}
			else
			{
				?>
            <td>
            
            <a href="<?php echo 'app/views/testupload/'.$PayrollDetailsID.'.pdf'; ?>" target="_blank"><i class="fa fa-file-pdf-o fa-5" aria-hidden="true"></i></a></td>
            <?php 
			}
			?>
        </tr>
		 
		 <?php
	} 
	
?>
<table>
<?php	 
	
}
elseif ($Type=='GetEmployeeSelf')
{
	//$MasterGroupID=101;
	$MasterID=$_REQUEST['ID'];
	//$PayrollID=$_REQUEST['PayrollID'];
	//$PayrollDetailsID=0;
	// echo $ID.'<br>';
	 
	$getPayrollMasterList=$Handle->PayrollReport();
	 
	
	
?>
<!--pre>
<?php //print_r($getEmployeeList);
//echo count($getEmployeeList,0);
 ?>
</pre-->
<table class="table">
<tr>
  	<th style="width:20%">Payroll</th><th style="width:20%">Date</th><th style="width:30%">Period</th><th style="width:30%">Details</th>
 </tr>
<?php
for ($x = 0; $x < count($getPayrollMasterList,0); $x++) 
	{
		$PayrollDetailsID=$Handle->getPayrollDetailsInfoByMasterID($getPayrollMasterList[$x]['ID'],$MasterID);
		//echo $PayrollDetailsID;
		if($PayrollDetailsID!=0)
		{
		//$PayrollDetailsID=$Handle->InsertIntoPayrollDetails($PayrollID,$getEmployeeList[$x]["ID"]);
		
		$File=$Handle->getFile($PayrollDetailsID) ;
		//$PayrollMaster=$Handle->PayrollMasterInfo($getPayrollMasterList[$x]["PayrollID"]);
		?>
        <tr>
        	<td><?php echo $getPayrollMasterList[$x]['PayrollNo'];?></td>
            <td><?php echo $getPayrollMasterList[$x]['PayrollDate'];?></td>
            <td><?php $PayrollPeriodInfo=$Handle->PayrollPeriodDetails($getPayrollMasterList[$x]['PayrollPeriodID']);
				echo $PayrollPeriodInfo[0]['FromDate'].' TO '.$PayrollPeriodInfo[0]['ToDate'];
			?></td>
            <!--td><?php //echo $Handle->MasterDepartmentByID($getPayrollMasterList[$x]["ID"]);?></td-->
            <?php
            if($File=='NULL')
			{
				?>
                <td>
               No Details Found
 
  				</td>
             <?php
			}
			else
			{
				?>
            <td>
            
            <a href="<?php echo 'app/views/testupload/'.$PayrollDetailsID.'.pdf'; ?>" target="_blank"><i class="fa fa-file-pdf-o fa-5" aria-hidden="true"></i></a></td>
            <?php 
			}
			?>
        </tr>
		 
		 <?php
		}
	} 
	
?>
<table>
<?php	 
	
}