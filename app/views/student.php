<?php
if (!isset($_SESSION)) {session_start();}
require_once("CTL.Accounts.php");
$Handle = new Accounts();
$MasterTypeID=42;
$MID=131;
$ID=0;
$ID=$_REQUEST['ID'];
?>
    <!--form class="form-horizontal" name="myform" id ="myform"   style="padding:15px;"-->
    
    <?php
$x=0;

$MID=$MID;
$CODE='';
$MembershipID=0;
$Name='';
$Alias='';
$PrintName='';
$Description='';
$MasterTypeID=$MasterTypeID;
$DrCr=0;
$Debit=0;
$Credit=0;
$IsMaster=0;
$IsMasterGroup=0;
$CostCategoryID=0;
$MasterGroupID=0;
$DesignationID=0;
$PersonOrganisationID=0;
$AllocateRevenueItems=0;
$AllocateNonRevenueItems=0;
$AccountID=0;
$IsActive=0;
$IsBehaveAsSubLedger=0;
$IsAffectGrossProfit=0;
$SORT=0;
$CreditPeriod=0;
$CreditLimit=0;
$MaintainBillByBill=0;
$TaxClassID=0;
$TaxTypeID=0;
$Percentage=100;
$IsCalculative=0;
$OpeningBalance=0;
$ClosingBalance=0;
$Asset=0;
$Liabilities=0;
$Expense=0;
$Income=0;
$NetDebitCreditBalanceForReporting=0;
$UseForCalculation=0;
$AllocationMethodID=0;
$CreatedBy=1;
$ModifiedBy=1;
$CreateTime='';
$ModifyTime='';
$PDID='';
$Nominee='';
$Relation='';
$NomineeAge=0;
$NomineeDOB='';
$NomineeContact='';
$NomineeAddressID=0;
$OperationArea='';
$OfficeID;
$DocumentNo='';
$RegisterDate='';
$ImageID=0;
$AadhaarNo='';
$AddressID=0;
$Address='';
$HouseNo='';
$AddressLine1='';
$AddressLine2='';
$PO='';
$DIST='';
$PIN='';
$State='WB';
$Country='INDIA';
$ContactNo='';
$TEL='';
$Email='';
$AnnualIncome='0';


$Gender='';
$Nationality= '';
$Religion= ''; 
$FatherName= ''; 
$FatherEducation= ''; 
$FatherOccupation= ''; 
$MotherName= ''; 
$MotherEducation= ''; 
$MotherOccupation= ''; 
$Dependents= '0'; 
$GurdianName='';
$GurdianRelation='';
$GurdianOccupation= ''; 
$PreviousSchool= ''; 
$PreviousClass= ''; 
$ReasonOfLeaving= ''; 
$BirthMark= ''; 
$AnyDisease= ''; 
$DiseasePeriod= '1'; 
$Disease= ''; 
$DiseasePrecaution= ''; 
$AdmissionClass= ''; 
$AdmissionAge= ''; 
$AdmissionDate= date('Y-m-d');
$DOB= date('Y-m-d'); 

if($ID!=0)
{
	//$sql="SELECT * FROM tbl_master where mastertypeid=6 and MasterGroupID<>101 and ID=$ID order by MasterGroupID,Name";
	//echo $sql;
$getinfo = $Handle->StudentDetails($ID);
/* WHERE MasterTypeID=1");*/
// print_r($getinfo);
for ($x = 0; $x < count($getinfo,0); $x++)
	{
		$ID=$getinfo[$x]["ID"];
		$MID=$getinfo[$x]["MID"];
		$CODE=$getinfo[$x]["CODE"];
		$MembershipID=$getinfo[$x]["MembershipID"];
		$Name=$getinfo[$x]["Name"];
		//echo $Name;
		$Alias=$getinfo[$x]["Alias"];
		$PrintName=$getinfo[$x]["PrintName"];
		$Description=$getinfo[$x]["Description"];
		$MasterTypeID=$getinfo[$x]["MasterTypeID"];
		$DrCr=$getinfo[$x]["DrCr"];
		$Debit=$getinfo[$x]["Debit"];
		$Credit=$getinfo[$x]["Credit"];
		$IsMaster=$getinfo[$x]["IsMaster"];
		$AddressID=$getinfo[$x]["AddressID"];
		$IsMasterGroup=$getinfo[$x]["IsMasterGroup"];
		$CostCategoryID=$getinfo[$x]["CostCategoryID"];
		$MasterGroupID=$getinfo[$x]["MasterGroupID"];
		$DesignationID=$getinfo[$x]["DesignationID"];
		$PersonOrganisationID=$getinfo[$x]["PersonOrganisationID"];
		$AllocateRevenueItems=$getinfo[$x]["AllocateRevenueItems"];
		$AllocateNonRevenueItems=$getinfo[$x]["AllocateNonRevenueItems"];
		$AccountID=$getinfo[$x]["AccountID"];
		$IsActive=$getinfo[$x]["IsActive"];
		$IsBehaveAsSubLedger=$getinfo[$x]["IsBehaveAsSubLedger"];
		$IsAffectGrossProfit=$getinfo[$x]["IsAffectGrossProfit"];
		$SORT=$getinfo[$x]["SORT"];
		$CreditPeriod=$getinfo[$x]["CreditPeriod"];
		$CreditLimit=$getinfo[$x]["CreditLimit"];
		$MaintainBillByBill=$getinfo[$x]["MaintainBillByBill"];
		$TaxClassID=$getinfo[$x]["TaxClassID"];
		$TaxTypeID=$getinfo[$x]["TaxTypeID"];
		$Percentage=$getinfo[$x]["Percentage"];
		$IsCalculative=$getinfo[$x]["IsCalculative"];
		$OpeningBalance=$getinfo[$x]["OpeningBalance"];
		$ClosingBalance=$getinfo[$x]["ClosingBalance"];
		$Asset=$getinfo[$x]["Asset"];
		$Liabilities=$getinfo[$x]["Liabilities"];
		$Expense=$getinfo[$x]["Expense"];
		$Income=$getinfo[$x]["Income"];
		$NetDebitCreditBalanceForReporting=$getinfo[$x]["NetDebitCreditBalanceForReporting"];
		$UseForCalculation=$getinfo[$x]["UseForCalculation"];
		$AllocationMethodID=$getinfo[$x]["AllocationMethodID"];
		$CreatedBy=$getinfo[$x]["CreatedBy"];
		$ModifiedBy=$getinfo[$x]["ModifiedBy"];
		$CreateTime=$getinfo[$x]["CreateTime"];
		$ModifyTime=$getinfo[$x]["ModifyTime"];
		$PDID=$getinfo[$x]["PDID"];
		$Nominee=$getinfo[$x]["Nominee"];
		$Relation=$getinfo[$x]["Relation"];
		$NomineeAge=$getinfo[$x]["NomineeAge"];
		$NomineeDOB=$getinfo[$x]["NomineeDOB"];
		$NomineeContact=$getinfo[$x]["NomineeContact"];
		$NomineeAddressID=$getinfo[$x]["NomineeAddressID"];
		$OperationArea=$getinfo[$x]["OperationArea"];
		$OfficeID=$getinfo[$x]["OfficeID"];
		$DocumentNo=$getinfo[$x]["DocumentNo"];
		$RegisterDate=$getinfo[$x]["RegisterDate"];
		$ImageID=$getinfo[$x]["ImageID"];
		$AadhaarNo=$getinfo[$x]["AadhaarNo"];
		$Gender= $getinfo[$x]["Gender"]; 
		$Nationality= $getinfo[$x]["Nationality"]; 
		$Religion= $getinfo[$x]["Religion"]; 
		$FatherName= $getinfo[$x]["FatherName"]; 
		$FatherEducation= $getinfo[$x]["FatherEducation"]; 
		$FatherOccupation=$getinfo[$x]["FatherOccupation"];
		$MotherName=$getinfo[$x]["MotherName"]; 
		$MotherEducation=$getinfo[$x]["MotherEducation"];
		$MotherOccupation= $getinfo[$x]["MotherOccupation"];
		$Dependents= $getinfo[$x]["Dependents"]; 
		$GurdianName= $getinfo[$x]["GurdianName"];
		$GurdianRelation= $getinfo[$x]["GurdianRelation"];
		
		$GurdianOccupation= $getinfo[$x]["GurdianOccupation"]; 
		$PreviousSchool= $getinfo[$x]["PreviousSchool"];
		$PreviousClass=$getinfo[$x]["PreviousClass"];
		$ReasonOfLeaving=$getinfo[$x]["ReasonOfLeaving"];
		$BirthMark= $getinfo[$x]["BirthMark"];
		$AnyDisease= $getinfo[$x]["AnyDisease"];
		$DiseasePeriod= $getinfo[$x]["DiseasePeriod"]; 
		$Disease= $getinfo[$x]["Disease"]; 
		$DiseasePrecaution= $getinfo[$x]["DiseasePrecaution"]; 
		$AdmissionClass= $getinfo[$x]["AdmissionClass"];
		$AdmissionAge= $getinfo[$x]["AdmissionAge"]; 
		$AdmissionDate= $getinfo[$x]["AdmissionDate"]; 
		$DOB= $getinfo[$x]["DOB"]; 
 if($AddressID!=0)
		{
		$getAddress = $Handle->AddressByID($getinfo[$x]['AddressID']);
 		$Address=$getAddress[0]['Address'];
		$HouseNo=$getAddress[0]['HouseNo'];
		$AddressLine1=$getAddress[0]['AddressLine1'];
		$AddressLine2=$getAddress[0]['AddressLine2'];
		$PO=$getAddress[0]['PO'];
		$DIST=$getAddress[0]['DIST'];
		$PIN=$getAddress[0]['PIN'];
		$State=$getAddress[0]['State'];
		$Country=$getAddress[0]['Country'];
		}
		else
		{
			$Address=''; 
			$HouseNo='';
			$AddressLine1='';
			$AddressLine2='';
			$PO='';
			$DIST='';
			$PIN='';
			$State='WB';
			$Country='INDIA';
			}
			
		$State=$getinfo[$x]["State"];
		$Country=$getinfo[$x]["Country"];
		$ContactNo=$getinfo[$x]["ContactNo"];
		$TEL=$getinfo[$x]["TEL"];
		$Email=$getinfo[$x]["Email"];
	}
}
       ?>
    <style>
    .form-group{
		margin:0px; 
	}
    </style>
    <!--img class="blur-bgimage" src='images/header.jpg'--> 
    <div class="workspace">
  <div class="displayhead">
  <?php
  if($ID==0)
  {
	echo 'New Student  ';
}
else
{
	$Image="app/StudentImages/default.png";
	if(file_exists("app/StudentImages/".$ID.".jpg"))
	{
		$Image="app/StudentImages/".$ID.".jpg";
	}
	elseif(file_exists("app/StudentImages/".$ID.".jpeg"))
	{
		$Image="app/StudentImages/".$ID.".jpeg";
	}
	elseif(file_exists("app/StudentImages/".$ID.".png"))
	{
		$Image="app/StudentImages/".$ID.".png";
	}
	elseif(file_exists("app/StudentImages/".$ID.".gif"))
	{
		$Image="app/StudentImages/".$ID.".gif";
	}
  ?>
 
     <div style="display:inline-block; vertical-align:top; border-radius:3px; ">
 <img src="<?php echo $Image;?>" alt="" 
 onerror="this.onerror=null;this.src='app/StudentImages/default.png';"
 style=" overflow:hidden;height:80px; width:70px; cursor:pointer;" 
 onClick="redirectBypagewithIDValue('studentimageupload',0,<?php echo $ID;?>);">  
  </div>
 
 <div style="display:inline-block; font-size:14px; ">
 <div>Name: <?php echo $Name;?></div>
 <?php 
 $Class='Not Applied';
 $Section='Not Applied';
 $RollNo='Not Applied';
 $sql="Select * from tbl_academicyear where IsCurrent=1";
 $GetAcademicYearInfo= $Handle->runQuery($sql);
 if(count($GetAcademicYearInfo,0)>0)
 {
	 $AcademicYear=$GetAcademicYearInfo[0]['AcademicYear'];
	 $sql="Select * from tbl_studentclass where AcademicYear=$AcademicYear and StudentID=$ID";
	  $GetstudentclassInfo= $Handle->runQuery($sql);
	  if(count( $GetstudentclassInfo,0)>0)
	  {
	  $ClassID= $GetstudentclassInfo[0]['ClassID'];
	  $Class=$Handle->getMasterName($ClassID);
	  $SecID= $GetstudentclassInfo[0]['SecID'];
 $Section=$Handle->getMasterName($SecID);
 $RollNo=  $GetstudentclassInfo[0]['RollNo'];;
	  }
}
 ?>
<div>Class: <?php echo $Class;?></div>
   <div>Section: <?php echo $Section;?></div>
   <div>Roll No: <?php echo $RollNo;?></div>
 </div>
 <?php
}
?>
<span id="ActionPanel">
  <span style=""  name="Operation"   class="btn  pull-right"  onClick="SaveStudent();" > <i class="fa fa-check-circle-o" aria-hidden="true"></i> Save </span> <span style="margin-right:5px;"  name="Operation"   class="btn  pull-right "onClick="redirectBypagewithIDValue('indexstudent',0,0);" >Student Register</span>
  
  <span style="margin-right:5px;"  name="Operation"   class="btn  pull-right " onClick="GrantPromotion(<?php echo $ID;?>);" >Promotion</span>
  <span style="margin-right:5px;"  name="Operation"   class="btn  pull-right disabled " onClick="redirectBypagewithIDValue('fees',0,<?php echo $ID;?>);" >Fees</span>
  <span style="margin-right:5px;"  name="Operation"   class="btn  pull-right " onClick="GrantAdmission(<?php echo $ID;?>);" >Grant Admission</span>
  </span>
   </div>
  <div class="panel-body" id="StudentPanel"> 
    <span>
    <div id="Report"></div>
    <div class="con-hr">
      <input type="hidden" id="MasterTypeID" value="<?php echo $MasterTypeID; ?>">
    <input type="hidden"  id="ID" name="ID" value="<?php echo $ID; ?>">
    <input type="hidden" id="PDID" name="PDID" value="<?php echo $PDID; ?>">
    <input type="hidden"  id="MID" name="MID" value="<?php echo $MID; ?>">
    <input type="hidden" name="Address" id="Address" value="<?php echo $Address; ?>">
      <input type="hidden" id="AddressID" name="AddressID" value="<?php echo $AddressID; ?>">
      <input type="hidden" name="LocalAddressID" id="LocalAddressID" value="<?php echo $AddressID; ?>">
      <!--input type="hidden" id="ImageID" name="ImageID" value="<?php echo $ImageID; ?>"-->
      <input type="hidden" class="form-control" id="Email"  name="Email"  placeholder="Enter Email" value="<?php echo $Email; ?>"> 
      <input type="hidden" name="IsMaster" id="IsMaster" value="0">
      <input type="hidden" name="PersonOrganisationID" id="PersonOrganisationID" value="0">
      <input type="hidden" name="AllocateRevenueItems" id="AllocateRevenueItems" value="0">
      <input type="hidden" name="AllocateNonRevenueItems" id="AllocateNonRevenueItems" value="0">
    </div>
    <div class="col-lg-12">
    
        <div class="form-group col-lg-3">
  <label class="control-label" for="CODE">Application No.:</label>
  <div class="">
  <input type="text" class="form-control" id="CODE" name="CODE" placeholder="Enter Account No." value="<?php echo $CODE; ?>"> 
</div></div>
<div class="form-group col-lg-6">
</div>
<div class="form-group col-lg-3">
 <label class="control-label" for="AdmissionDate">AdmissionDate:</label>
  <div class="">
 <input type="date" class="form-control" id="AdmissionDate"  name="AdmissionDate"  placeholder="Enter AdmissionDate" value="<?php echo $AdmissionDate; ?>" onBlur="CalculateAge();"> 
</div></div>
    </div>
    
    <div class="col-lg-12">
    <div class="form-group col-lg-3">
      <label class="control-label" for="Name">Name:</label>
      <div class="">
        
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name" value="<?php echo $Name; ?>">
      </div>
    </div>
    <div class="form-group col-lg-3">
 <label class="control-label" for="Gender">Sex:</label>
  <div class="">
   <select name="Gender" id="Gender"  class="form-control">
  <option value="MALE" <?php if($Gender=='MALE'){echo 'selected="selected"';}?>>MALE</option>
  <option value="FEMALE"  <?php if($Gender=='FEMALE'){echo 'selected="selected"';}?>>FEMALE</option>
  <option value="OTHER"  <?php if($Gender=='OTHER'){echo 'selected="selected"';}?>>OTHER</option>
  </select>
 <!--input type="text" class="form-control" id="Gender"  name="Gender"  placeholder="Enter Gender" value="<?php echo $Gender; ?>"--> 
</div></div>

<div class="form-group col-lg-3">
 <label class="control-label" for="Nationality">Nationality:</label>
  <div class="">
  <select name="Nationality" id="Nationality"  class="form-control">
  <option value="INDIAN" <?php if($Nationality=='INDIAN'){echo 'selected="selected"';}?>>INDIAN</option>
  
  <option value="OTHER"  <?php if($Nationality=='OTHER'){echo 'selected="selected"';}?>>OTHER</option>
  </select>
 <!--input type="text" class="form-control" id="Nationality"  name="Nationality"  placeholder="Enter Nationality" value="<?php echo $Nationality; ?>"--> 
</div></div>

    <div class="form-group col-lg-3">
 <label class="control-label" for="Religion">Religion:</label>
  <div class="">
 <input type="text" class="form-control" id="Religion"  name="Religion"  placeholder="Enter Religion" value="<?php echo $Religion; ?>"> 
</div></div>
    </div>
    <div class="col-lg-12">
    <div class="form-group col-lg-3">
 <label class="control-label" for="BirthMark">BirthMark:</label>
  <div class="">
 <input type="text" class="form-control" id="BirthMark"  name="BirthMark"  placeholder="Enter BirthMark" value="<?php echo $BirthMark; ?>"> 
</div></div>
        <div class="form-group col-lg-3">
 <label class="control-label" for="AadhaarNo">Aadhaar No:</label>
  <div class="">
 <input type="text" class="form-control" id="AadhaarNo"  name="AadhaarNo"  placeholder="Enter AadhaarNo" value="<?php echo $AadhaarNo; ?>"> 
</div></div>
    
    <div class="form-group col-lg-3">
 <label class="control-label" for="FatherName">FatherName:</label>
  <div class="">
 <input type="text" class="form-control" id="FatherName"  name="FatherName"  placeholder="Enter FatherName" value="<?php echo $FatherName; ?>"> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="MotherName">MotherName:</label>
  <div class="">
 <input type="text" class="form-control" id="MotherName"  name="MotherName"  placeholder="Enter MotherName" value="<?php echo $MotherName; ?>"> 
</div></div>
    </div>
    <div class="col-lg-12">
    <!--div class="form-group  col-lg-3">
  <label class="control-label" for="Address">Address:</label>
  <div class="">
   <textarea class="form-control " placeholder="Enter Address" id="Address"  name="Address" rows="1" >
  <?php echo ltrim($Address); ?></textarea>  
</div></div-->
<div class="form-group col-lg-3"> 
  <label class="control-label" for="HouseNo">House No:</label>
  <div class="">
  <input type="text" class="form-control" id="HouseNo"  name="HouseNo" placeholder="Enter HouseNo" value="<?php echo $HouseNo; ?>"> 
</div></div>
<div class="form-group col-lg-3"> 
  <label class="control-label" for="AddressLine1">Street / Town:</label>
  <div class="">
  <input type="text" class="form-control" id="AddressLine1"  name="AddressLine1" placeholder="Enter Street/Town" value="<?php echo $AddressLine1; ?>"> 
</div></div>
<div class="form-group col-lg-3"> 
  <label class="control-label" for="AddressLine2">Area:</label>
  <div class="">
  <input type="text" class="form-control" id="AddressLine2"  name="AddressLine2" placeholder="Enter Area" value="<?php echo $AddressLine2; ?>"> 
</div></div>
<div class="form-group col-lg-3"> 
  <label class="control-label" for="PO">Post Office:</label>
  <div class="">
  <input type="text" class="form-control" id="PO"  name="PO" placeholder="Enter PostOffice" value="<?php echo $PO; ?>"> 
</div></div>
<div class="form-group col-lg-3"> 
  <label class="control-label" for="DIST">District:</label>
  <div class="">
  <input type="text" class="form-control" id="DIST"  name="DIST" placeholder="Enter District" value="<?php echo $DIST; ?>"> 
</div></div>
<div class="form-group col-lg-3"> 
  <label class="control-label" for="PIN">PIN:</label>
  <div class="">
  <input type="text" class="form-control" id="PIN"  name="PIN" placeholder="Enter PIN" value="<?php echo $PIN; ?>"> 
</div></div>

<div class="form-group col-lg-3"> 
  <label class="control-label" for="State">State:</label>
  <div class="">
  <select name="State" id="State"  class="form-control">
  <option value="WB" <?php if($State=='WB'){echo 'selected="selected"';}?>>WB</option>
  
  <option value="OTHER"  <?php if($State=='OTHER'){echo 'selected="selected"';}?>>OTHER</option>
  </select>
  <!--input type="text" class="form-control" id="State"  name="State" placeholder="Enter State" value="<?php echo $State; ?>"--> 
</div></div>

 <div class="form-group col-lg-3"> 
  <label class="control-label" for="Country" >Country:</label>
  <div class="">
  <select name="Country" id="Country"  class="form-control">
  <option value="INDIA" <?php if($Country=='INDIA'){echo 'selected="selected"';}?>>INDIA</option>
  
  <option value="OTHER"  <?php if($Country=='OTHER'){echo 'selected="selected"';}?>>OTHER</option>
  </select>
  <!--input type="text" class="form-control" id="Country"  name="Country" placeholder="Enter Country" value="<?php echo $Country; ?>"-->
  <input type="hidden" class="form-control" id="tel" name="tel"  placeholder="Enter Telephone no" value="<?php echo $TEL; ?>">  
</div></div>

</div>

  <!--div class="col-lg-12">

  
 <div class="form-group col-lg-3">
 <label class="control-label" for="Email">Email:</label>
  <div class="">
 <input type="text" class="form-control" id="Email"  name="Email"  placeholder="Enter Email" value="<?php echo $Email; ?>"> 
</div></div>

</div-->

  <div class="col-lg-12">

<div class="form-group col-lg-3">
 <label class="control-label" for="FatherEducation">Father Education:</label>
  <div class="">
 <input type="text" class="form-control" id="FatherEducation"  name="FatherEducation"  placeholder="Enter FatherEducation" value="<?php echo $FatherEducation; ?>"> 
</div></div>

<div class="form-group col-lg-3">
 <label class="control-label" for="FatherOccupation">Father Occupation:</label>
  <div class="">
 <input type="text" class="form-control" id="FatherOccupation"  name="FatherOccupation"  placeholder="Enter FatherOccupation" value="<?php echo $FatherOccupation; ?>"> 
</div></div>

<div class="form-group col-lg-3">
 <label class="control-label" for="MotherEducation">Mother Education:</label>
  <div class="">
 <input type="text" class="form-control" id="MotherEducation"  name="MotherEducation"  placeholder="Enter MotherEducation" value="<?php echo $MotherEducation; ?>"> 
</div></div>

<div class="form-group col-lg-3">
 <label class="control-label" for="MotherOccupation">Mother Occupation:</label>
  <div class="">
 <input type="text" class="form-control" id="MotherOccupation"  name="MotherOccupation"  placeholder="Enter MotherOccupation" value="<?php echo $MotherOccupation; ?>"> 
</div></div>
</div>
  <div class="col-lg-12">
<div class="form-group col-lg-3">
 <label class="control-label" for="AnnualIncome">Annual Income:</label>
  <div class="">
 <input type="text" class="form-control" id="AnnualIncome"  name="AnnualIncome"  placeholder="Enter Annual Income" value="<?php echo $AnnualIncome; ?>"> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="Dependents">No of Dependents in Family:</label>
  <div class="">
 <input type="text" class="form-control" id="Dependents"  name="Dependents"  placeholder="Enter Dependents" value="<?php echo $Dependents; ?>"> 
</div></div>
</div>
  <div class="col-lg-12">
<div class="form-group col-lg-3">
 <label class="control-label" for="GurdianName">Gurdian Name</label>
  <div class="">
 <input type="text" class="form-control" id="GurdianName"  name="GurdianName"  placeholder="Enter GurdianName" value="<?php echo $GurdianName; ?>"> 
</div></div>
<div class="form-group col-lg-3">
  <label class="control-label" for="ContactNo">Mobile:</label>
  <div class="">
  <input type="text" class="form-control" id="ContactNo"  name="ContactNo" placeholder="Enter Mobile no" value="<?php echo $ContactNo; ?>"> 
</div></div>
<div class="form-group col-lg-3">
  <label class="control-label" for="GurdianRelation">Gurdian Relation:</label>
  <div class="">
  <input type="text" class="form-control" id="GurdianRelation"  name="GurdianRelation" placeholder="Enter GurdianRelation" value="<?php echo $GurdianRelation; ?>"> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="GurdianOccupation">Gurdian Occupation:</label>
  <div class="">
 <input type="text" class="form-control" id="GurdianOccupation"  name="GurdianOccupation"  placeholder="Enter GurdianOccupation" value="<?php echo $GurdianOccupation; ?>"> 
</div></div>

</div>
<div class="col-lg-12">
<div class="form-group col-lg-3">
 <label class="control-label" for="PreviousSchool">PreviousSchool:</label>
  <div class="">
 <input type="text" class="form-control" id="PreviousSchool"  name="PreviousSchool"  placeholder="Enter PreviousSchool" value="<?php echo $PreviousSchool; ?>"> 
</div></div>

<div class="form-group col-lg-3">

 <label class="control-label" for="PreviousClass">Previous Class:</label>
  <div class="">
 <input type="text" class="form-control" id="PreviousClass"  name="PreviousClass"  placeholder="Enter Previous Class" value="<?php echo $PreviousClass; ?>"> 
</div></div>
<div class="form-group col-lg-3">

 <label class="control-label" for="ReasonOfLeaving">Reason Of Leaving:</label>
  <div class="">
 <input type="text" class="form-control" id="ReasonOfLeaving"  name="ReasonOfLeaving"  placeholder="Enter Reason Of Leaving" value="<?php echo $ReasonOfLeaving; ?>"> 
</div></div>


</div>
<div class="col-lg-12">
<div class="form-group col-lg-3">
 <label class="control-label" for="AnyDisease">AnyDisease:</label>
  <div class="">
  <select name="AnyDisease" id="AnyDisease"  class="form-control">
  <option value="1" <?php if($AnyDisease==1){echo 'selected="selected"';}?>>YES</option>
  <option value="0"  <?php if($AnyDisease==0){echo 'selected="selected"';}?>>NO</option>
  </select>
 <!--input type="text" class="form-control" id="AnyDisease"  name="AnyDisease"  placeholder="Enter AnyDisease" value="<?php echo $AnyDisease; ?>"--> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="DiseasePeriod">DiseasePeriod:</label>
  <div class="">
 <input type="text" class="form-control" id="DiseasePeriod"  name="DiseasePeriod"  placeholder="Enter DiseasePeriod" value="<?php echo $DiseasePeriod; ?>"> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="Disease">Disease:</label>
  <div class="">
 <input type="text" class="form-control" id="Disease"  name="Disease"  placeholder="Enter Disease" value="<?php echo $Disease; ?>"> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="DiseasePrecaution">Disease Precaution:</label>
  <div class="">
 <input type="text" class="form-control" id="DiseasePrecaution"  name="DiseasePrecaution"  placeholder="Enter DiseasePrecaution" value="<?php echo $DiseasePrecaution; ?>"> 
</div></div>
</div>
<div class="col-lg-12">
<div class="form-group col-lg-3">
 <label class="control-label" for="AdmissionClass">AdmissionClass:</label>
  <div class="">
 <input type="text" class="form-control" id="AdmissionClass"  name="AdmissionClass"  placeholder="Enter AdmissionClass" value="<?php echo $AdmissionClass; ?>"> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="DOB">Date Of Birth:</label>
  <div class="">
 <input type="date" class="form-control" id="DOB"  name="DOB"  placeholder="Enter DOB" value="<?php echo $DOB; ?>" onBlur="CalculateAge();"> 
</div></div>
<div class="form-group col-lg-3">
 <label class="control-label" for="AdmissionAge">AdmissionAge:</label>
  <div class="">
 <input type="text" class="form-control" id="AdmissionAge"  name="AdmissionAge"  placeholder="Enter AdmissionAge" value="<?php echo $AdmissionAge; ?>"> 
</div></div>
</div>
 
    <!--div class="form-group">
  <label class="control-label" for="Alias">Alias:</label>
  <div class="">
  <input type="text" class="form-control" id="Alias" name="Alias" placeholder="Enter alias" value="<?php echo $Alias; ?>"> 
</div></div>

     <div class="form-group">
  <label class="control-label" for="CODE">Account No.:</label>
  <div class="">
  <input type="text" class="form-control" id="CODE" name="CODE" placeholder="Enter Account No." value="<?php echo $CODE; ?>"> 
</div></div-->
    
    <!--div class="form-group ">
      <label for="MID" class="control-label"  >Under:</label>
      <div class="">
        <select name="MID" id="MID" class="form-control" onChange="GetNature(this.value);">
          <option value="">Please select...</option>
          <?php
$getitemgroupinfo = $Handle->runQuery("SELECT ID,Name FROM tbl_master where mastertypeid=6 and (ismastergroup=0 or ismaster=1) order by Name");
$GroupID=$MID;
for ($ig = 0; $ig < count($getitemgroupinfo,0); $ig++) {
       ?>
          <option value="<?php echo $getitemgroupinfo[$ig]['ID'];?>" <?php if($GroupID==$getitemgroupinfo[$ig]['ID']) echo 'selected= "selected"'; ?>><?php echo $getitemgroupinfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
      </div>
    </div-->

      <span >
      <!--label for="MasterGroupID" class="control-label"  >Nature of Group</label-->
      <span class="" id="MasterGroupID_Display">
        
      </span>
    </span>
    <!--div class="form-group ">
      <label for="IsAffectGrossProfit" class="control-label"  >IsAffectGrossProfit ?</label>
      <div class="">
        <select name="IsAffectGrossProfit" id="IsAffectGrossProfit" class="form-control">
          <option value="1"  <?php if($IsAffectGrossProfit=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($IsAffectGrossProfit=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="IsBehaveAsSubLedger" class="control-label"  >Group Behave as Sub-Ledger ?</label>
      <div class="">
        <select name="IsBehaveAsSubLedger" id="IsBehaveAsSubLedger" class="form-control">
          <option value="1" <?php if($IsBehaveAsSubLedger=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($IsBehaveAsSubLedger=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="NetDebitCreditBalanceForReporting" class="control-label"  >Net Debit/Credit balance for reporting ?</label>
      <div class="">
        <select name="NetDebitCreditBalanceForReporting" id="NetDebitCreditBalanceForReporting" class="form-control">
          <option value="1" <?php if($NetDebitCreditBalanceForReporting=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($NetDebitCreditBalanceForReporting=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="UseForCalculation" class="control-label"  >Used For Calculation [Tax & Discounts] [for Sales Invoice entry] ?</label>
      <div class="">
        <select name="UseForCalculation" id="UseForCalculation" class="form-control">
          <option value="1"  <?php if($UseForCalculation=="1") echo 'selected= "selected"'; ?>>YES</option>
          <option value="0"  <?php if($UseForCalculation=="0") echo 'selected= "selected"'; ?>>NO</option>
        </select>
      </div>
    </div>
    <div class="form-group ">
      <label for="AllocationMethodID" class="control-label"  >Method to Allocate when used in Purchase Invoice ?</label>
      <div class="">
        <select name="AllocationMethodID" id="AllocationMethodID" class="form-control">
          <option value="1"  <?php if($AllocationMethodID=="0") echo 'selected= "selected"'; ?>>NOT APPLICABLE</option>
          <option value="0"  <?php if($AllocationMethodID=="1") echo 'selected= "selected"'; ?>>APPROPRIATE BY QTY</option>
          <option value="0"  <?php if($AllocationMethodID=="2") echo 'selected= "selected"'; ?>>APPROPRIATE BY VALUE</option>
          <option value="0"  <?php if($AllocationMethodID=="3") echo 'selected= "selected"'; ?>>NO APPRICIATION</option>
        </select>
      </div>
    </div-->
    <!--div class="form-group ">
	<label for="Description" class="control-label"  >Description</label>
	<div class="">
		<textarea  name="Description" id="Description" class="form-control" style="height:150px;"><?php echo $Description; ?></textarea>
        
</div>
</div--> 
    
    </span>
    
  </div>
</div>

<!--script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script--> 
<script>
 GetNature(<?php echo $MID; ?>);
 CalculateAge();
function CalculateAge()
{
        var mdate = $("#DOB").val().toString();
		//alert(mdate);
        var yearThen = parseInt(mdate.substring(0,4), 10);
        var monthThen = parseInt(mdate.substring(5,7), 10);
        var dayThen = parseInt(mdate.substring(8,10), 10);
        
        //var today = new Date();
		var AdmissionDate = $("#AdmissionDate").val().toString();
		var yearAdm = parseInt(AdmissionDate.substring(0,4), 10);
        var monthAdm = parseInt(AdmissionDate.substring(5,7), 10);
        var dayAdm = parseInt(AdmissionDate.substring(8,10), 10);
		
		var today= new Date(yearAdm, monthAdm-1, dayAdm);
        var birthday = new Date(yearThen, monthThen-1, dayThen);
        
        var differenceInMilisecond = today.valueOf() - birthday.valueOf();
        
        var year_age = Math.floor(differenceInMilisecond / 31536000000);
        var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);
        
        if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
           // alert("Happy B'day!!!");
		   document.getElementById("AdmissionAge").value="Happy Birth Day";
        }
        
        var month_age = Math.floor(day_age/30);
        
        day_age = day_age % 30;
        
        if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
            //$("#exact_age").text("Invalid birthday - Please try again!");
			document.getElementById("AdmissionAge").value="Invalid birthday - Please try again!";
        }
        else {
			document.getElementById("AdmissionAge").value=year_age + " years " + month_age + " months " + day_age + " days";
//			$("#AdmissionAge").value("You are<br/><span id=\"age\">" + year_age + " years " + month_age + " months " + day_age + " days</span> old");
           // $("#exact_age").html("You are<br/><span id=\"age\">" + year_age + " years " + month_age + " months " + day_age + " days</span> old");
        }
}

function StudentImageUpload(ID)
{
	var pg="app/views/StudentImageUpload.php";
	var Type="UploadImage";
	//  alert(ID);
	$.post(pg,{Type:Type,ID:ID},function(data){
		document.getElementById("StudentPanel").innerHTML=data;
		//document.getElementById("MasterGroup").type="hidden";
		});
}
function GetNature(ID)
{
	var pg="app/controllers/Accounts.php";
	var Type="GetNature";
	//  alert(ID);
	$.post(pg,{Type:Type,ID:ID},function(data){
		document.getElementById("MasterGroupID_Display").innerHTML=data;
		document.getElementById("MasterGroup").type="hidden";
		});
}
function SaveCustomer0()
{
	var pg="app/controllers/Accounts.php";
	var Type="SaveCustomer";
	var ID=document.getElementById("ID").value;
	var MasterTypeID = document.getElementById("MasterTypeID").value;
	var Name=document.getElementById("Name").value;
	 
	var MID = document.getElementById("MID").value;
	var MasterGroupID = document.getElementById("MasterGroupID").value;
	var DrCr = document.getElementById("DrCr").value;
	//alert(DrCr);
	$.post(pg,{Type:Type,MasterTypeID:MasterTypeID,ID:ID,Name:Name,MID,MID,MasterGroupID:MasterGroupID,DrCr:DrCr},function(data){
		
		document.getElementById("Report").innerHTML=data;
		});
}
 function SaveStudent()
 {
	 	var pg='app/controllers/Save.Student.php';
		 //alert(MasterID);
	 var type='SaveStudent';
	 var Name = $("#Name").val();
	 var CODE = $("#CODE").val();
	 var AadhaarNo = $("#AadhaarNo").val();
	  var DOB = $("#DOB").val();
	 var MID = $("#MID").val();
	 var PDID = $("#PDID").val();
	 var AddressID = $("#AddressID").val();
	 var ContactNo = $("#ContactNo").val();
	 var Address = $("#Address").val();
	 var RegDate = $("#RegDate").val();
	 var Email = $("#Email").val();
	 var State = $("#State").val();
	 
	 var Country = $("#Country").val();
	  var IsMaster = $("#IsMaster").val();
	 
	 var ID = $("#ID").val();
		 
	var MasterTypeID = document.getElementById("MasterTypeID").value;
	   
	var MasterGroupID = document.getElementById("MasterGroupID").value;
	
	var HouseNo= document.getElementById("HouseNo").value;
var AddressLine1= document.getElementById("AddressLine1").value; 
var AddressLine2=  document.getElementById("AddressLine2").value;
var LANDMARK=''; 
var VILL=  ''; 

var PO=  document.getElementById("PO").value;

var DIST=  document.getElementById("DIST").value;
//alert(ID);
var PIN=  document.getElementById("PIN").value;

var State=  document.getElementById("State").value;

//var StateID= '33'; 
var Country=  document.getElementById("Country").value;

	var Nationality = document.getElementById("Nationality").value;
	var AnnualIncome = document.getElementById("AnnualIncome").value;
	var Religion = document.getElementById("Religion").value;
	var Gender = document.getElementById("Gender").value;
	 
	var FatherName = document.getElementById("FatherName").value;
	var FatherEducation = document.getElementById("FatherEducation").value;
	var FatherOccupation = document.getElementById("FatherOccupation").value;
	
	var MotherName = document.getElementById("MotherName").value;
	var MotherEducation = document.getElementById("MotherEducation").value;
	var MotherOccupation = document.getElementById("MotherOccupation").value;
	var Dependents = document.getElementById("Dependents").value;
	var GurdianName = document.getElementById("GurdianName").value;
	var GurdianRelation = document.getElementById("GurdianRelation").value;
	
	var GurdianOccupation = document.getElementById("GurdianOccupation").value;
	
	var PreviousSchool = document.getElementById("PreviousSchool").value;
	
	var PreviousClass = document.getElementById("PreviousClass").value;
	
	var ReasonOfLeaving = document.getElementById("ReasonOfLeaving").value;
	
	var BirthMark = document.getElementById("BirthMark").value;
	
	var AnyDisease = document.getElementById("AnyDisease").value;
	var DiseasePeriod = document.getElementById("DiseasePeriod").value;
	var Disease = document.getElementById("Disease").value;
	var DiseasePrecaution = document.getElementById("DiseasePrecaution").value;
	
	var AdmissionClass = document.getElementById("AdmissionClass").value;
	var AdmissionAge = document.getElementById("AdmissionAge").value;
	var AdmissionDate = document.getElementById("AdmissionDate").value;
	
	//var BirthMark = document.getElementById("BirthMark").value;
	
	//ID, Name, AddressID, LocalAddressID, GurdianName, Relation, SpouseName, ContactNo, PAN, VAT, DOB, Age, DOJ, Gender, Email, Website, EPFNo, ESINo, PassportNo, Country, AadhaarNo, path, image, imageid, CreateTime, ModifyTime, CreatedBy, ModifiedBy, Description, BankName, BankBranch, AccountNo, BANKCODE, Occupation, Fax, VoterID, area_operation, BankAccountType, OLDID, MaritalStatus, Education, Nationality, AnnualIncome, TagLine, TEL, State, CIN, TAN, CST, TIN, GST, MAP, WhatsApp, DesignationID, Religion, FatherName, FatherEducation, FatherOccupation, MotherName, MotherEducation, MotherOccupation, Dependents, GurdianOccupation, PreviousSchool, PreviousClass, ReasonOfLeaving, BirthMark, AnyDisease, DiseasePeriod, Disease, DiseasePrecaution, AdmissionClass, AdmissionAge, AdmissionDate
	//HouseNo, AddressLine1, AddressLine2, LANDMARK, VILL, PO, DIST, PIN, State, Country 
	var DrCr = document.getElementById("DrCr").value;
                $.post( pg, 
				{type:type,CODE:CODE,Gender:Gender,AadhaarNo:AadhaarNo,DOB:DOB, MasterTypeID:MasterTypeID, ID:ID, MID:MID, PDID:PDID, Name:Name, AddressID:AddressID, ContactNo: ContactNo, Address: Address, HouseNo:HouseNo, AddressLine1:AddressLine1, AddressLine2:AddressLine2, LANDMARK:LANDMARK, VILL:VILL, PO:PO, DIST:DIST, PIN:PIN, State:State, Country:Country, RegDate: RegDate,Email: Email, State: State, Country:Country, IsMaster:IsMaster,MasterGroupID:MasterGroupID,DrCr:DrCr,Nationality:Nationality, Religion:Religion,AnnualIncome:AnnualIncome, FatherName:FatherName, FatherEducation:FatherEducation, FatherOccupation:FatherOccupation, MotherName:MotherName, MotherEducation:MotherEducation, MotherOccupation:MotherOccupation, Dependents:Dependents, GurdianName:GurdianName,GurdianRelation:GurdianRelation, GurdianOccupation:GurdianOccupation, PreviousSchool:PreviousSchool, PreviousClass:PreviousClass, ReasonOfLeaving:ReasonOfLeaving, BirthMark:BirthMark, AnyDisease:AnyDisease, DiseasePeriod:DiseasePeriod, Disease:Disease, DiseasePrecaution:DiseasePrecaution, AdmissionClass:AdmissionClass, AdmissionAge:AdmissionAge, AdmissionDate:AdmissionDate})
                    .done(function( data ) {
						document.getElementById("Report").innerHTML=data;
						//alert(data);
                        //$("#message").html(data);
						window.location.reload();
						document.getElementById("Name").focus();
						 /*if(data==0)
							 {
								 redirectBypagewithIDValue('error',PageID,MasterID);
								 }*/
                    });
                //e.preventDefault();
	 }
function getDrCr()
{
	var pg="app/controllers/Accounts.php";
	var Type="DrCr";
	var MasterGroupID = document.getElementById("MasterGroupID").value;
	 //alert(MasterGroupID);
	$.post(pg,{Type:Type,MasterGroupID:MasterGroupID},function(data){
		document.getElementById("DrCr").value=data;
		});
	}
function saveitem(val01,val02,val03) {
	//val01=row or GUI GENERATE ID WE CAN CALL VIEW_ID
	//val02=ITEM_ID
	//val03=what to save (1= id,name,alias,partno,_desc     
						//2=Item or Product Group and Category
						//3= UNIT, ALTERNATE UNIT, STANDARD COST, STANDARD PRICE, COSTING METHOD, PRICING METHOD
						//4= IsFinishGoods,IsRawMaterial, IsUnfinishGoods, IsFinancialItem, IsStockItem, Is Non Stock Item, IsNegetiveSalesAllow, IsSalesAsNewManufacture, IsPurchaseAsConsumed, IsRejectionAsScrap
	//e.preventDefault();
 // console.log(42);
 var resultelementid='saveresult'+val01;
 	
  	 var formname='myform'+val01;
	//alert(val01);
	//alert(formname);
	var Name=document.getElementById("name"+val01).value;
	//alert(name);
	var id=document.getElementById("id"+val01).value;
	//alert(id);
	
	
	var alias=document.getElementById("alias"+val01).value;
	
		var code=document.getElementById("code"+val01).value;
		var c = document.getElementById("group"+val01);
		var MID=c.options[c.selectedIndex].value;
		
		var d = document.getElementById("MasterGroupID"+val01);
		var MasterGroupID=d.options[d.selectedIndex].value;
		
		var e = document.getElementById("IsAffectGrossProfit"+val01);
		var IsAffectGrossProfit=e.options[e.selectedIndex].value;
		 
	 	var f = document.getElementById("IsBehaveAsSubLedger"+val01);
		 
	 	var IsBehaveAsSubLedger=f.options[f.selectedIndex].value;
		 
		/*/ var g = document.getElementById("DrCr"+val01);
		var DrCr=g.options[g.selectedIndex].value;*/
		var DrCr=1;
		
		 var h = document.getElementById("NetDebitCreditBalanceForReporting"+val01);
		var NetDebitCreditBalanceForReporting=h.options[h.selectedIndex].value;
		
		 var i = document.getElementById("UseForCalculation"+val01);
		var UseForCalculation=i.options[i.selectedIndex].value;
		
		 var j = document.getElementById("AllocationMethodID"+val01);
		var AllocationMethodID=j.options[j.selectedIndex].value;
		var IsMaster=0;
		var IsMasterGroup=0;
		var desc=document.getElementById("desc"+val01).value;
		
			//var _desc=document.getElementById(formname).elements["_desc"+val01].value;
		//	alert(name+id+alias+code+j);
	// alert(name+id+alias+code+j);
	 $("#"+resultelementid).empty();
	//   var myform = document.getElementById(formname);
	var fd ='';
	//alert(IsBehaveAsSubledger, IsAffectGrossProfit, DrCr, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, IsMaster, IsMasterGroup);
	if (val03==1)
	//ID, MID, MasterGroupID, Name, Alias, CODE,MID:MID,MasterGroupID:MasterGroupID, IsBehaveAsSubledger, IsAffectGrossProfit, DrCr, NetDebitCreditBalanceForReporting, UseForCalculation, AllocationMethodID, IsMaster, IsMasterGroup, CreatedBy, ModifiedBy, Createtime, ModifyTime
	//alert(desc);
	fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID,IsBehaveAsSubLedger:IsBehaveAsSubLedger, IsAffectGrossProfit:IsAffectGrossProfit, DrCr:DrCr, NetDebitCreditBalanceForReporting:NetDebitCreditBalanceForReporting, UseForCalculation:UseForCalculation, AllocationMethodID:AllocationMethodID, IsMaster:IsMaster, IsMasterGroup:IsMasterGroup,desc:desc};
	//fd={id:id,name:name,alias:alias,code:code,MID:MID,MasterGroupID:MasterGroupID};
	//alert(resultelementid);
     var pg='modules/sql/sql.acledger.php';
	$.post(pg,fd,function(data){$("#"+resultelementid).html(data)});
/*	$.ajax({
            type: 'POST',
            url: 'modules/sql.item.php',
            data: fd,
            success: function (dataofconfirm) {
				      alert(dataofconfirm);
            }
          });*/

 
}
</script> 
<script>
	function printAdmissionReceipt(str)
{
		//var VTID=document.getElementById("VoucherTypeID").value;
	  //var win = window.open( "app/views/print/print.moneyreceipt.php?BID="+str , "_blank");
	  var win = window.open( "app/views/student.admissionreceipt.php?ID="+str , "_blank");
   win.focus();
}
 
</script>