<?php
require_once 'dbase.php';

class MODAddress extends DBController
{
	public $UserName = null;
	function AddressByID($ID)
	{
		$sql="select ID, HouseNo, AddressLine1, AddressLine2, LANDMARK, VILL, PO, DIST, PIN, State, StateID, Country, CountryID, ContactPerson, ContactNo, Email, WebSite, Address, MacID, CreatedBy, CreateTime, OldID from tbl_address where ID=$ID";
		  //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
	function getAddress($Address)
	{
		$sql="select * from tbl_address where Address='$Address' ";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
	function AddressExist($AddressID, $HouseNo, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		$result=0;
		$getInfo= $this->getAddress($Address);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['ID'];	
		}
		else
		{
		$result=$this->AddressInsert($AddressID, $HouseNo, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID);
		}
		return $result;
	}
		
	function AddressUpdate($ID,  $HouseNo,$AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_address set 
		   HouseNo='$HouseNo',
		 AddressLine1= '$AddressLine1', 
		AddressLine2= '$AddressLine2', 
		LANDMARK= '$LANDMARK', 
		VILL= '$VILL', 
		PO= '$PO', 
		DIST= '$DIST', 
		PIN= '$PIN', 
		State= '$State', 
		StateID= '$StateID', 
		Country= '$Country', 
		CountryID= '$CountryID', 
		ContactPerson= '$ContactPerson', 
		ContactNo= '$ContactNo', 
		Email= '$Email', 
		WebSite= '$WebSite', 
		Address= '$Address', 
		MacID= '$MacID', 
		CreatedBy= '$CreatedBy', 
		CreateTime= '$CreateTime', 
		OldID= '$OldID'  
		where ID=$ID";
		  echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
	function AddressInsert($ID, $HouseNo, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		$sql="INSERT INTO tbl_address( HouseNo,AddressLine1, AddressLine2, LANDMARK, VILL, PO, DIST, PIN, State, StateID, Country, CountryID, ContactPerson, ContactNo, Email, WebSite, Address, MacID, CreatedBy, CreateTime, OldID) 
		values('$HouseNo, '$AddressLine1', '$AddressLine2', '$LANDMARK', '$VILL', '$PO', '$DIST', '$PIN', '$State', '$StateID', '$Country', '$CountryID', '$ContactPerson', '$ContactNo', '$Email', '$WebSite', '$Address', '$MacID', '$CreatedBy', '$CreateTime', '$OldID')";
		
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
}
?>