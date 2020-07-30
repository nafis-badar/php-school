<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
include_once '../models/MOD.Payroll.php';
 
//echo "BLANK";
//require_once("app/includes/dbase.php");
//$db_handle = new DBController();
$Handle= new MODPayroll();

$PayrollPeriodID=$_REQUEST['PayrollPeriodID'];
$PayrollMasterID=$_REQUEST['PayrollMasterID'];
$MasterID=$_REQUEST['MasterID'];

 
if ($MasterID!=0)
{
	
	//$getinfo = $Handle->PayrollDetailsInfo($ID);

	for ($x = 0; $x < count($getEmployeeList,0); $x++) 
	{
		$PayrollDetailsID=$Handle->checkPayrollDetails($ID,$getEmployeeList[$x]["ID"]);
		
		$File=$Handle->getFile($ID,$getEmployeeList[$x]["ID"]) ;
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
               onClick="redirectBypagewithIDValue('pdfupload',<?php echo $PayrollDetailsID; ?>,<?php echo $getEmployeeList[$x]["ID"]; ?>
			   );">Upload</div> 
 
  </td>
             <?php
			}
			else
			{
				?>
            <td>
            
            <a href="<?php echo $File; ?>"><i class="fa fa-file-pdf-o fa-5" aria-hidden="true"></i></a></td>
            <?php 
			}
			?>
        </tr>
		 
		 <?php
	} 
}
?>
       

 </table>