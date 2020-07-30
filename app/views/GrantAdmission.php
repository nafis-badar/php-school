<?php
if (!isset($_SESSION)) {session_start();}
require_once("../controllers/CTL.Accounts.php");
$Handle = new Accounts();
$MasterTypeID=42;
$MID=1;
$ID=0;
$ID=$_REQUEST['ID'];
$AcademicYear=0;
		$StudentID=$_REQUEST['ID'];
		$ClassID=0;
		$SecID=0;
		$RollNo=0;
		$IsAdmission=1;
		$IsCurrent=1;
		$Amount=0;
		$VoucherID=0;
?>
  <div id ="QryResult"></div>
<table class="table" style="font-size:12px;">
<caption style="font-size:20px;">Admission</caption>
	<tr>
    	<th>Academic Year</th><th>Class</th><th>Section</th><th>Roll No</th><th>Admission Charge</th><th>...</th>
    </tr>
     <tr>
    <td>
    <input type="hidden" class="form-control" id="StudentID" name="StudentID"  value="<?php echo $ID; ?>">
     <select name="AcademicYear" id="AcademicYear" class="form-control" >
          <option value="0">Please select...</option>
          <?php
$getAcademicYearinfo = $Handle->runQuery("SELECT AcademicYear, FromDate, ToDate, IsCurrent FROM tbl_academicyear  order by AcademicYear");
 
for ($ig = 0; $ig < count($getAcademicYearinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getAcademicYearinfo[$ig]['AcademicYear'];?>" <?php if($AcademicYear==$getAcademicYearinfo[$ig]['AcademicYear']) echo 'selected= "selected"'; ?>><?php echo $getAcademicYearinfo[$ig]['AcademicYear'];?></option>
          <?php } ?>
        </select>
    </td>
    <td>
     <select name="ClassID" id="ClassID" class="form-control" >
          <option value="0">Please select...</option>
          <?php
$getClassinfo = $Handle->runQuery("SELECT ID,Name FROM tbl_master where MasterTypeID=44 and MID=0  order by Name");
 
for ($ig = 0; $ig < count($getClassinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getClassinfo[$ig]['ID'];?>" <?php if($ClassID==$getClassinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getClassinfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
    </td>
    <td>
     <select name="SecID" id="SecID" class="form-control" >
          <option value="0">Please select...</option>
          <?php
$getSecinfo = $Handle->runQuery("SELECT ID,Name FROM tbl_master where MasterTypeID=44 and MID!=0  order by Name");
 
for ($ig = 0; $ig < count($getSecinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getSecinfo[$ig]['ID'];?>" <?php if($SecID==$getSecinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getSecinfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
    </td>
    <td>
    <input type="text" class="form-control" id="RollNo" name="RollNo" placeholder="Enter Roll No." value="<?php echo $RollNo; ?>">
    </td> 
    <td><input type="text" class="form-control" id="Amount" name="Amount" placeholder="Enter Amount" value="<?php echo $Amount; ?>">
     
    </td>
    <td>
    	<div class="btn " onClick="SetAdmission(<?php echo $ID; ?>);">Grant Admission</div>
    </td>
    </tr>
    <?php
	$sql="Select sc.AcademicYear, sc.StudentID, sc.ClassID, sc.SecID, sc.RollNo,sc.IsAdmission,sc.Amount,sc.VoucherID,
			ay.IsCurrent 
	 from tbl_studentclass sc 
	left outer join tbl_academicyear ay on ay.AcademicYear=sc.AcademicYear 
	where StudentID=$ID and IsAdmission=1 order by AcademicYear Desc";
	//echo $sql;
    $getAcademicInfo = $Handle->runQuery($sql);
 
	for ($i = 0; $i < count($getAcademicInfo,0); $i++) {
		$AcademicYear=$getAcademicInfo[$i]['AcademicYear'];
		$StudentID=$getAcademicInfo[$i]['StudentID'];
		$ClassID=$getAcademicInfo[$i]['ClassID'];
		$SecID=$getAcademicInfo[$i]['SecID'];
		$RollNo=$getAcademicInfo[$i]['RollNo'];
		$IsCurrent=$getAcademicInfo[$i]['IsCurrent'];
		$IsAdmission=$getAcademicInfo[$i]['IsAdmission'];
		 
		$Amount=$getAcademicInfo[$i]['Amount'];
		$VoucherID=$getAcademicInfo[$i]['VoucherID'];
		if($IsCurrent==0 || $IsCurrent==1)
		{
			?>
            <tr>
            	<td><?php echo $AcademicYear;?><?php if($IsAdmission==1){echo ' [Admission]';}?></td>
                <td><?php echo $Handle->getMasterName($ClassID);?></td>
                <td><?php echo $Handle->getMasterName($SecID);?></td>
                <td><?php echo $RollNo;?></td>
                <td><?php echo $Amount;?></td>
                <td><div class="btn btn-primary" onClick="printAdmissionReceipt(<?php echo $StudentID;?>);">Print Receipt</div></td>
            </tr>
            <?php
		}
		else
		{
			?>
            <tr>
    <td>
     <select name="AcademicYear" id="AcademicYear" class="form-control" >
          <option value="0">Please select...</option>
          <?php
$getAcademicYearinfo = $Handle->runQuery("SELECT AcademicYear, FromDate, ToDate, IsCurrent FROM tbl_academicyear  order by AcademicYear");
 
for ($ig = 0; $ig < count($getAcademicYearinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getAcademicYearinfo[$ig]['AcademicYear'];?>" <?php if($AcademicYear==$getAcademicYearinfo[$ig]['AcademicYear']) echo 'selected= "selected"'; ?>><?php echo $getAcademicYearinfo[$ig]['AcademicYear'];?></option>
          <?php } ?>
        </select>
    </td>
    <td>
     <select name="ClassID" id="ClassID" class="form-control" >
          <option value="0">Please select...</option>
          <?php
$getClassinfo = $Handle->runQuery("SELECT ID,Name FROM tbl_master where MasterTypeID=44 and MID=0  order by Name");
 
for ($ig = 0; $ig < count($getClassinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getClassinfo[$ig]['ID'];?>" <?php if($ClassID==$getClassinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getClassinfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
    </td>
    <td>
     <select name="SecID" id="SecID" class="form-control" >
          <option value="0">Please select...</option>
          <?php
$getSecinfo = $Handle->runQuery("SELECT ID,Name FROM tbl_master where MasterTypeID=44 and MID!=0  order by Name");
 
for ($ig = 0; $ig < count($getSecinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getSecinfo[$ig]['ID'];?>" <?php if($SecID==$getSecinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getSecinfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
    </td>
    <td>
    <input type="text" class="form-control" id="RollNo" name="RollNo" placeholder="Enter Roll No." value="<?php echo $RollNo; ?>">
    </td>
    <td>
    	<div class="btn ">Confirm</div>
    </td>
    </tr>
              <?php
		}
	}
	 
	?>
    
</table>
