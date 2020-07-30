<?php
require_once 'MOD.Address.php';

class MODPD extends MODAddress
{
	 
	function PDByID($ID)
	{
		$sql="select ID,Name from tbl_PD where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
		}
	 	
	function PDUpdate($ID, $Name='', $AddressID=0, $LocalAddressID=0, $GurdianName='', $GurdianRelation='', $SpouseName='', $ContactNo='', $PAN='', $VAT='', $DOB=NULL, $Age='', $DOJ= NULL, $Gender='', $Email='', $Website='', $EPFNo='', $ESINo='', $PassportNo='', $Country='', $AadhaarNo='', $Path='', $Image='', $ImageID=0, $CreateTime='', $ModifyTime='', $CreatedBy=0, $ModifiedBy=0, $Description='', $BankName='', $BankBranch='', $AccountNo='', $BANKCODE='', $Occupation='', $Fax='', $VoterID='', $area_operation='', $BankAccountType='', $OLDID='', $MaritalStatus='', $Education='', $Nationality='', $AnnualIncome=0, $TagLine='', $TEL='', $State='', $CIN='', $TAN='', $CST='', $TIN='', $GST='', $MAP='', $WhatsApp='', $DesignationID=0,  $Religion='', $FatherName='', $FatherEducation='', $FatherOccupation='', $MotherName='', $MotherEducation='', $MotherOccupation='', $Dependents='0', $GurdianOccupation='', $PreviousSchool='', $PreviousClass='', $ReasonOfLeaving='', $BirthMark='', $AnyDisease='0', $DiseasePeriod='', $Disease='', $DiseasePrecaution='', $AdmissionClass='', $AdmissionAge='', $AdmissionDate=NULL)
	{
		 $sql="Update tbl_PD set 
		 Name= '$Name', 
		AddressID= '$AddressID', 
		LocalAddressID= '$LocalAddressID', 
		GurdianName= '$GurdianName', 
		GurdianRelation= '$GurdianRelation', 
		SpouseName= '$SpouseName', 
		ContactNo= '$ContactNo', 
		PAN= '$PAN', 
		VAT= '$VAT', 
		DOB= " . ($DOB==NULL ? "NULL" : "'$DOB'") . ", 
		Age= '$Age', 
		DOJ=  " . ($DOJ==NULL ? "NULL" : "'$DOJ'") . ",  
		Gender= '$Gender', 
		Email= '$Email', 
		Website= '$Website', 
		EPFNo= '$EPFNo', 
		ESINo= '$ESINo', 
		PassportNo= '$PassportNo', 
		Country= '$Country', 
		AadhaarNo= '$AadhaarNo', 
		Path= '$Path', 
		Image= '$Image', 
		ImageID= '$ImageID', 
		ModifyTime= '$ModifyTime', 
		ModifiedBy= '$ModifiedBy', 
		Description= '$Description', 
		BankName= '$BankName', 
		BankBranch= '$BankBranch', 
		AccountNo= '$AccountNo', 
		BANKCODE= '$BANKCODE', 
		Occupation= '$Occupation', 
		Fax= '$Fax', 
		VoterID= '$VoterID', 
		area_operation= '$area_operation', 
		BankAccountType= '$BankAccountType', 
		OLDID= '$OLDID', 
		MaritalStatus= '$MaritalStatus', 
		Education= '$Education', 
		Nationality= '$Nationality', 
		AnnualIncome= '$AnnualIncome', 
		TagLine= '$TagLine', 
		TEL= '$TEL', 
		State= '$State', 
		CIN= '$CIN', 
		TAN= '$TAN', 
		CST= '$CST', 
		TIN= '$TIN', 
		GST= '$GST', 
		MAP= '$MAP', 
		WhatsApp= '$WhatsApp', 
		DesignationID= '$DesignationID' ,
		Religion= '$Religion' ,
		FatherName= '$FatherName' ,
		FatherEducation= '$FatherEducation' ,
		FatherOccupation= '$FatherOccupation' ,
MotherName= '$MotherName' ,
MotherEducation= '$MotherEducation' ,
MotherOccupation= '$MotherOccupation' ,
Dependents= '$Dependents' ,
GurdianOccupation= '$GurdianOccupation' ,
PreviousSchool= '$PreviousSchool' ,
PreviousClass= '$PreviousClass' ,
ReasonOfLeaving= '$ReasonOfLeaving' ,
BirthMark= '$BirthMark' ,
AnyDisease= '$AnyDisease' ,
DiseasePeriod= '$DiseasePeriod' ,
Disease= '$Disease' ,
DiseasePrecaution= '$DiseasePrecaution' ,
AdmissionClass= '$AdmissionClass' ,
AdmissionAge= '$AdmissionAge' ,
AdmissionDate=  " . ($AdmissionDate==NULL ? "NULL" : "'$AdmissionDate'") . "  
		where ID=$ID";
		   // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	function PDInsert($ID, $Name='', $AddressID='0', $LocalAddressID='0', $GurdianName='', $GurdianRelation='', $SpouseName='', $ContactNo='', $PAN='', $VAT='', $DOB=NULL, $Age='', $DOJ='', $Gender='', $Email='', $Website='', $EPFNo='', $ESINo='', $PassportNo='', $Country='', $AadhaarNo='', $Path='', $Image='', $ImageID=0, $CreateTime='', $ModifyTime='', $CreatedBy=0, $ModifiedBy=0, $Description='', $BankName='', $BankBranch='', $AccountNo='', $BANKCODE='', $Occupation='', $Fax='', $VoterID='', $area_operation='', $BankAccountType='', $OLDID='', $MaritalStatus='', $Education='', $Nationality='', $AnnualIncome=0, $TagLine='', $TEL='', $State='', $CIN='', $TAN='', $CST='', $TIN='', $GST='', $MAP='', $WhatsApp='', $DesignationID=0,  $Religion='', $FatherName='', $FatherEducation='', $FatherOccupation='', $MotherName='', $MotherEducation='', $MotherOccupation='', $Dependents='0', $GurdianOccupation='', $PreviousSchool='', $PreviousClass='', $ReasonOfLeaving='', $BirthMark='', $AnyDisease='0', $DiseasePeriod='', $Disease='', $DiseasePrecaution='', $AdmissionClass='', $AdmissionAge='', $AdmissionDate=NULL)
	{
		$sql="INSERT INTO tbl_PD(Name, AddressID, LocalAddressID, GurdianName, GurdianRelation, SpouseName, ContactNo, PAN, VAT, DOB, Age, DOJ, Gender, Email, Website, EPFNo, ESINo, PassportNo, Country, AadhaarNo, path, image, imageid, CreateTime, ModifyTime, CreatedBy, ModifiedBy, Description, BankName, BankBranch, AccountNo, BANKCODE, Occupation, Fax, VoterID, area_operation, BankAccountType, OLDID, MaritalStatus, Education, Nationality, AnnualIncome, TagLine, TEL, State, CIN, TAN, CST, TIN, GST, MAP, WhatsApp, DesignationID,Religion, FatherName, FatherEducation, FatherOccupation, MotherName, MotherEducation, MotherOccupation, Dependents, GurdianOccupation, PreviousSchool, PreviousClass, ReasonOfLeaving, BirthMark, AnyDisease, DiseasePeriod, Disease, DiseasePrecaution, AdmissionClass, AdmissionAge, AdmissionDate) 
		values ('$Name', $AddressID, $LocalAddressID, '$GurdianName', '$GurdianRelation', '$SpouseName', '$ContactNo', '$PAN', '$VAT', " . ($DOB==NULL ? "NULL" : "'$DOB'") . ", '$Age', " . ($DOB==NULL ? "NULL" : "'$DOB'") . ", '$Gender', '$Email', '$Website', '$EPFNo', '$ESINo', '$PassportNo', '$Country', '$AadhaarNo', '$Path', '$Image', '$ImageID', '$CreateTime', '$ModifyTime', $CreatedBy, $ModifiedBy, '$Description', '$BankName', '$BankBranch', '$AccountNo', '$BANKCODE', '$Occupation', '$Fax', '$VoterID', '$area_operation', '$BankAccountType', '$OLDID', '$MaritalStatus', '$Education', '$Nationality', '$AnnualIncome', '$TagLine', '$TEL', '$State', '$CIN', '$TAN', '$CST', '$TIN', '$GST', '$MAP', '$WhatsApp', '$DesignationID', '$Religion', '$FatherName', '$FatherEducation', '$FatherOccupation', '$MotherName', '$MotherEducation', '$MotherOccupation', '$Dependents', '$GurdianOccupation', '$PreviousSchool', '$PreviousClass', '$ReasonOfLeaving', '$BirthMark',  " . ($AnyDisease==NULL ? "0" : "'$AnyDisease'") . " , '$DiseasePeriod', '$Disease', '$DiseasePrecaution', '$AdmissionClass', '$AdmissionAge', " . ($AdmissionDate==NULL ? "NULL" : "'$AdmissionDate'") . " )";
		// echo $sql;
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		//echo $getID;
		 return  $getID;
		}
}
?>