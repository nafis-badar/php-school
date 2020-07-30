<?php
require_once 'dbase.php';

class MODItemGroup extends DBController
{
	public $UserName = null;
	function ItemByID($ID)
	{
		$sql="select ID,Name from tbl_item where ID=$ID";
		  //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	
	function getItem($Item)
	{
		$sql="select * from tbl_item where Item='$Item' ";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	function ItemDetails($ID)
	{
		$sql="select * from tbl_item where ID=$ID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo ;
		}
	function ItemExist($ItemID, $ItemLine1, $ItemLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Item, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		$result=0;
		$getInfo= $this->getItem($Item);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['ID'];	
		}
		else
		{
		$result=$this->ItemInsert($ItemID, $ItemLine1, $ItemLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Item, $MacID, $CreatedBy, $CreateTime, $OldID);
		}
		return $result;
	}
		
	function ItemUpdate($ID, $ItemLine1, $ItemLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Item, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		//$Item=$this->sql_escape($Item);
		 $sql="Update tbl_item set 
		 ItemLine1= '$ItemLine1', 
		ItemLine2= '$ItemLine2', 
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
		Item= '$Item', 
		MacID= '$MacID', 
		CreatedBy= '$CreatedBy', 
		CreateTime= '$CreateTime', 
		OldID= '$OldID'  
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
	function ItemInsert($Item)
	{
		$sql="INSERT INTO tbl_item(ItemLine1, ItemLine2, LANDMARK, VILL, PO, DIST, PIN, State, StateID, Country, CountryID, ContactPerson, ContactNo, Email, WebSite, Item, MacID, CreatedBy, CreateTime, OldID) 
		values('$ItemLine1', '$ItemLine2', '$LANDMARK', '$VILL', '$PO', '$DIST', '$PIN', '$State', '$StateID', '$Country', '$CountryID', '$ContactPerson', '$ContactNo', '$Email', '$WebSite', '$Item', '$MacID', '$CreatedBy', '$CreateTime', '$OldID')";
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
}
?>