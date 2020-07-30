<?php
require_once 'dbase.php';

class MODVoucherMaster extends DBController
{
 
	function QueryAccountName($ID)
	{
		$sql="select ID,Name from tbl_master where ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
		
	}
	function QueryPDID($ID)
	{
		$sql="select ID,PDID Name from tbl_master where ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
		
	}
	function QueryAddressID($ID)
	{
		$sql="select ID,AddressID Name from tbl_pd where ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
		
	}
	 function convert_number($number)
{
if (($number < 0) || ($number > 999999999))
{
throw new Exception("Number is out of range");
}
 
$Gn = floor($number / 100000);  /* Millions (giga) */
$number -= $Gn * 100000;
$kn = floor($number / 1000);     /* Thousands (kilo) */
$number -= $kn * 1000;
$Hn = floor($number / 100);      /* Hundreds (hecto) */
$number -= $Hn * 100;
$Dn = floor($number / 10);       /* Tens (deca) */
$n = $number % 10;               /* Ones */
 
$res = "";
 
if ($Gn)
{
$res .= $this->convert_number($Gn) . " Lacs";
}
 
if ($kn)
{
$res .= (empty($res) ? "" : " ") .
$this->convert_number($kn) . " Thousand";
}
 
if ($Hn)
{
$res .= (empty($res) ? "" : " ") .
$this->convert_number($Hn) . " Hundred";
}
 
$ones = array("", "One", "Two", "Three", "Four", "Five", "Six",
"Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen",
"Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen",
"Nineteen");
$tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty",
"Seventy", "Eigthy", "Ninety");
 
if ($Dn || $n)
{
if (!empty($res))
{
$res .= " and ";
}
 
if ($Dn < 2)
{
$res .= $ones[$Dn * 10 + $n];
}
else
{
$res .= $tens[$Dn];
 
if ($n)
{
$res .= "-" . $ones[$n];
}
}
}
 
if (empty($res))
{
$res = "zero";
}
 
return $res;
}
 
	function QueryContact($ID)
	{
		$sql="select ID,ContactNo Name from tbl_pd where ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function QueryGender($ID)
	{
		$sql="select ID,Gender Name from tbl_pd where ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function QueryAge($ID)
	{
		$sql="select ID,Age Name from tbl_pd where ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function QueryUserName($ID)
	{
		$sql="select m.ID,m.Name from users u left outer join tbl_master m on m.ID=u.MasterID where u.ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function QueryAddress($ID)
	{
		$sql="select ID,Address Name from tbl_address where ID='$ID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
		
	}
	function GetVoucherNo($VoucherTypeID,$VoucherDate)
	{
		 $sql="select count(ID) CNT from tbl_vouchermaster where VoucherTypeID='$VoucherTypeID' and VoucherDate='$VoucherDate' ";
		 // echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['CNT']+1;
	}
	function VoucherType($ID)
	{
		$sql="select * from tbl_vouchertype where ID=$ID";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
		return $getInfo;
		}
		else
		{
			return 0;
		}
	}
	
	function QueryVoucherMaster($ID)
	{
		$sql="select * from tbl_vouchermaster where ID='$ID' ";
		//  echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}

	function SaveVoucherAccount($ID, $AccountTypeID, $DrCr, $CalculationMethodID, $Percentage, $AcGroupID, $AccountID, $IsPermanent, $VoucherTypeID)
	{
		if($ID==0)
		{
					$sql="INSERT INTO tbl_voucheraccount( AccountTypeID, DrCr, CalculationMethodID, Percentage, AcGroupID, AccountID, IsPermanent, VoucherTypeID) 
		values('$AccountTypeID', '$DrCr', '$CalculationMethodID', '$Percentage', '$AcGroupID', '$AccountID', '$IsPermanent', '$VoucherTypeID')";

			}
		else
		{
		$sql="UPDATE tbl_voucheraccount SET AccountTypeID='$AccountTypeID', DrCr='$DrCr', CalculationMethodID='$CalculationMethodID', Percentage='$Percentage', AcGroupID='$AcGroupID', AccountID='$AccountID', IsPermanent='$IsPermanent', VoucherTypeID='$VoucherTypeID'
		where ID=$ID;";
		}
		 // echo $sql;
		$getInfo= $this->insertQuery($sql);
		return $getInfo;
	}
	function getVoucherDetailsID($VoucherID,$AccountTypeID)
	{
		$sql="select ID,AccountID from tbl_voucherdetails where VoucherID='$VoucherID' and AccountTypeID='$AccountTypeID'";
		//  echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['ID'];
		}
		else
		{
			return 0;
		}
	}
	
	function QueryAccountsNature($ID){
		$sql="select ID,AccountsNature from tbl_vouchertype where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['AccountsNature'];
		}
		else
		{
			return 0;
		}
	}
	function QueryVoucherType($ID){
		$sql="select ID,Name from tbl_vouchertype where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function QueryTVTID($ID){
		$sql="select ID,TransactionVoucherTypeID Name from tbl_vouchertype where ID=".$ID."";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		//4r5print_r($getInfo,0);
		//QueryTransactionVoucherTypeID
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function QueryReturnVoucherTypeID($ID){
		$sql="select ID,ReturnVoucherTypeID Name from tbl_vouchertype where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function QueryInventoryVoucherTypeID($ID){
		$sql="select ID,InventoryVoucherTypeID Name from tbl_vouchertype where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
			return $getInfo[0]['Name'];
		}
		else
		{
			return 0;
		}
	}
	function GetInventoryAccountID($VoucherID,$AccountTypeID)
	{
		$sql="select ID,AccountID from tbl_voucherdetails where VoucherID='$VoucherID' and AccountTypeID='$AccountTypeID'";
		 //  echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
		return $getInfo[0]['AccountID'];
		}
		else
		{
			return 0;
		}
	}
	function	GetActivityAccountID($VoucherID)
	{
		$sql="select ID,AccountID from tbl_vouchermaster where ID='$VoucherID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
		return $getInfo[0]['AccountID'];
		}
		else
		{
			return 0;
		}
	}
	function QueryCalculationMethod($AccountID,$VoucherTypeID)
	{
		$sql="SELECT * from tbl_voucheraccount where AccountID=$AccountID and VoucherTypeID=$VoucherTypeID 
				and (AccountTypeID=3 or AccountTypeID=4)";
		$getInfo= $this->runQuery($sql);
		if (count($getInfo,0)>0)
		{
		return $getInfo[0]['CalculationMethodID'];
		}
		else
		{
			$sql="SELECT va.* from tbl_voucheraccount va 
					left outer join tbl_master m on m.MID=va.AcGroupID
			where m.ID=$AccountID and va.VoucherTypeID=$VoucherTypeID";
			$getInfo= $this->runQuery($sql);
			if (count($getInfo,0)>0)
			{
				return $getInfo[0]['CalculationMethodID'];
			}
			else
			{
				return 0;
			}
		}
	
	}
	function 	QueryAdditionalAccounts($VoucherID,$AccountTypeID)
	{
		$sql="select * from tbl_voucherdetails where VoucherID='$VoucherID' and (AccountTypeID=3 or AccountTypeID=4)  and IsDeleted=0  order by EntryIndex";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	function GetVoucherDetailsByVoucherIDOrderEntryIndex($VoucherID)
	{
		$sql="select * from tbl_voucherdetails where VoucherID='$VoucherID' and IsDeleted=0 order by EntryIndex";
		
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo;
	}
	function VoucherMasterExist($AddressID, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID)
	{
		$result=0;
		$getInfo= $this->getVoucherMaster($Address);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['ID'];	
		}
		else
		{
		$result=$this->AddressInsert($AddressID, $AddressLine1, $AddressLine2, $LANDMARK, $VILL, $PO, $DIST, $PIN, $State, $StateID, $Country, $CountryID, $ContactPerson, $ContactNo, $Email, $WebSite, $Address, $MacID, $CreatedBy, $CreateTime, $OldID);
		}
		return $result;
	}
	function CheckLedgerForGroup($ID)
	{
		$sql="SELECT g.ID,g.IsBehaveAsSubLedger,g.DrCr,g.Debit,g.Credit from tbl_master l left outer join tbl_master g on g.ID=l.MID
				 where l.ID=$ID";
		 $getInfo= $this->runQuery($sql);
		 return $getInfo;
				 
	}
	function QueryUnitAliasByID($ID)
	{
		$sql="SELECT ID,Name,Alias From tbl_unit where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		$result=0;
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['Alias'];	
		}
		else
		{
				$result='?';	
			}
			return $result;
		}
	function QueryCartID($ID){
		$sql="SELECT CartID From tbl_vouchermaster where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		$result=0;
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['CartID'];	
		}
		else
		{
				$result=0;	
			}
			return $result;
		}
		function QueryCart($ID){
		$sql="SELECT * From tbl_cart where ID='$ID'";
		// echo $sql;
		$getInfo= $this->runQuery($sql);
		 
			return $getInfo;
		}
		function QueryCartDetails($ID){
		$sql="SELECT * From tbl_cartdetails where CartID='$ID' and BillingQuantity<>0 and Amount<>0 and ItemID<>0 and IsDeleted=0";
		// echo $sql;
		$getInfo= $this->runQuery($sql);
		 
			return $getInfo;
		}
		function QueryCartDetailsByID($ID){
		$sql="SELECT * From tbl_cartdetails where ID='$ID'";
		 //echo $sql.'A';
		$getInfo= $this->runQuery($sql);
		 	return $getInfo;
		}
		function GetCartIDByVoucherID($ID)
	{
		$sql="select CartID from tbl_vouchermaster where ID='$ID' ";
		//  echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['CartID'];
	}
	function GetBatchDetailsForOut($ItemID,$CartDetailsID)
	{
		$sql="select StorageID,BatchNo,MfgDate,ExpDate, sum(InventoryNature*Quantity) Quantity, sum(InventoryNature*Amount) Amount from tbl_itembatch where ItemID='$ItemID' and BatchNo not in(select BatchNo from tbl_itembatch where CartDetailsID=$CartDetailsID)  Group By StorageID,BatchNo,MfgDate,ExpDate having sum(InventoryNature*Quantity)>0";
		 
		$getInfo= $this->runQuery($sql);
		 	return $getInfo;
		}
	function GetVoucherIDByCartID($ID)
	{
		$sql="select ID from tbl_vouchermaster where CartID='$ID' ";
		//  echo $sql;
		$getInfo= $this->runQuery($sql);
		return $getInfo[0]['ID'];
	}
	function GetCartAmountByCartID($CartID)
	{
		$sql="SELECT ifnull(sum(amount),0) Amount From tbl_cartdetails where CartID='$CartID' 
		and IsDeleted=0 and IsCancelled=0";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		 return $getInfo[0]['Amount'];
	}
		function GetCartAmountByVoucherID($VoucherID)
		{
			$CartID=$this->GetCartIDByVoucherID($VoucherID);
			$Amount=$this->GetCartAmountByCartID($CartID);
			return $Amount;
		}
	function IsItemAlreadyExist($ItemID,$CartID)
	{
		$sql="SELECT * From tbl_cartdetails where ItemID='$ItemID' and CartID='$CartID' and IsDeleted=0";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		if(count($getInfo,0)==0)
		{
			return 0;
		}
		else
		{
		 	return $getInfo[0]['ID'];
		}
	}
	
	function QueryVoucherNo($ID){
		$sql="SELECT VoucherNo From tbl_vouchermaster where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['VoucherNo'];	
		}
		else
		{
				$result='TEMP'.$ID;	
			}
			return $result;
		}
	function QueryVoucherDate($ID){
		$sql="SELECT VoucherDate From tbl_vouchermaster where ID='$ID'";
		$getInfo= $this->runQuery($sql);
		if (sizeof($getInfo,0)>=1)
		{
			$result=$getInfo[0]['VoucherDate'];	
		}
		else
		{
					$result=date('d-m-Y');	
			}
			return $result;
		}
	function QueryVoucherSessionID($ID, $UserID, $VoucherTypeID, $VoucherID, $IsClosed, $CreateTime, $CloseTime)
	{
		$sql="SELECT ID, VoucherID from tbl_vouchersession 
			where  UserID='$UserID' and VoucherTypeID='$VoucherTypeID' and IsClosed=0";
		 //echo $sql;
		$getinfo= $this->runQuery($sql);
		if (count($getinfo,0)>0){ return $getinfo[0]['ID'];}
		else { return 0;}
	}
	function QueryVoucherIDFromSession($ID)
	{
		$sql="SELECT ID, VoucherID from tbl_vouchersession 
			where  ID='$ID' and IsClosed=0";
		//echo $sql;
		$getinfo= $this->runQuery($sql);
		if (count($getinfo,0)>0){ return $getinfo[0]['VoucherID'];}
		else { return 0;}
	}
	 
	function QueryWhichEntry($ID)
	{
		$sql="SELECT ID, WhichEntry from tbl_vouchermaster 
			where  ID='$ID'";
		//echo $sql;
		$getinfo= $this->runQuery($sql);
		if (count($getinfo,0)>0){ return $getinfo[0]['WhichEntry'];}
		else { return 0;}
	}
	function QueryMaintainBatch($ID)
	{
		$sql="SELECT ID,MaintainBatch from tbl_item  where  ID='$ID'";
		 //echo $sql;
		$getinfo= $this->runQuery($sql);
		if (count($getinfo,0)>0){ return $getinfo[0]['MaintainBatch'];}
		else { return 0;}
	}
	
	function SetActivityAccountID($ID,$AccountID)
	{
		$sql="UPDATE   tbl_vouchermaster SET AccountID=$AccountID
			where  ID='$ID'";
		//echo $sql;
		$getinfo= $this->updateQuery($sql);
	}
	function UpdateNote($Note,$ID)
	{
		$sql="UPDATE   tbl_vouchermaster SET Note='$Note' where  ID='$ID'";
		// echo $sql;
		$getinfo= $this->updateQuery($sql);
	}
	function EnableItemEditMODE($ID)
	{
		$sql="UPDATE   tbl_cartdetails SET IsEditable='1'
			where  ID='$ID'";
		//echo $sql;
		$getinfo= $this->insertQuery($sql);
		
		//return $this->QueryWhichEntry($ID);
	}
	function RemoveItemEntry($ID)
	{
		$sql="UPDATE   tbl_cartdetails SET IsDeleted='1'
			where  ID='$ID'";
		//echo $sql;
		$getinfo= $this->insertQuery($sql);
		
		//return $this->QueryWhichEntry($ID);
	}
	function EnableAccountsEditMODE($ID)
	{
		$sql="UPDATE   tbl_voucherdetails SET IsEditable='1'
			where  ID='$ID'";
		 //echo $sql;
		$getinfo= $this->insertQuery($sql);
		
		//return $this->QueryWhichEntry($ID);
	}
	function UpdateWhichEntry($ID,$WhichEntry)
	{
		$sql="UPDATE   tbl_vouchermaster SET WhichEntry='$WhichEntry'
			where  ID='$ID'";
		//echo $sql;
		$getinfo= $this->insertQuery($sql);
		
		return $this->QueryWhichEntry($ID);
	}
	
	function InsertVoucherSession($ID, $UserID, $VoucherTypeID, $VoucherID, $IsClosed, $CreateTime, $CloseTime)
	{
		$sql="INSERT INTO tbl_vouchersession(UserID, VoucherTypeID, VoucherID, IsClosed, CreateTime) 
			values('$UserID', '$VoucherTypeID', '$VoucherID', '$IsClosed', " . ($CreateTime==NULL ? "NULL" : "'$CreateTime'") . ")";
		//echo $sql;
		$getID= $this->insertQuery($sql);
		//echo "<p>Successfully Saved</p>";
		return $getID;
	}
	
		function CloseVoucherSession($UserID, $VoucherTypeID, $VoucherID, $CloseTime)
	{
		$sql="UPDATE tbl_vouchersession SET 
		IsClosed=1, CloseTime='$CloseTime', CloseBy='$UserID'  
		where VoucherTypeID='$VoucherTypeID' and  VoucherID='$VoucherID'";
		//echo $sql;
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
		}
function GetItemBatchInfo($CartDetailsID)
{
	$sql="SELECT * from tbl_itembatch where CartDetailsID='$CartDetailsID'";
		 //echo $sql;
		$getInfo= $this->runQuery($sql);
		 return $getInfo;
}
function BatchInsert($ID, $StorageID, $ItemID, $CartID, $CartDetailsID, $InventoryNature, $IsEffectInventoryValue, $BatchNo, $BatchDate, $ExpDate, $MfgDate, $MRP, $ItemCost, $Price, $Rate,$DiscountPercentage, $Quantity, $UnitID, $Amount, $CreatedBy, $ModifedBy, $CreateTime, $ModifyTime,$TaxClassID,$CGSTPercentage, $SGSTPercentage,$CGST,$SGST )
{
	$sql="INSERT INTO tbl_itembatch(ItemID, CartID, CartDetailsID, InventoryNature, IsEffectInventoryValue, BatchNo , BatchDate, ExpDate, MfgDate, MRP,ItemCost, Price,DiscountPercentage, Rate, Quantity, UnitID, Amount, CreatedBy, ModifedBy, CreateTime, ModifyTime, StorageID, TaxClassID, CGSTPercentage, SGSTPercentage, CGST, SGST ) 
	values 
	('$ItemID', '$CartID', '$CartDetailsID', '$InventoryNature', '$IsEffectInventoryValue', '$BatchNo', " . ($BatchDate==NULL ? "NULL" : "'$BatchDate'") . ", '$ExpDate', '$MfgDate', '$MRP','$ItemCost', '$Price', '$DiscountPercentage', '$Rate', '$Quantity', '$UnitID', '$Amount', '$CreatedBy', '$ModifedBy', '$CreateTime', '$ModifyTime', '$StorageID','$TaxClassID', '$CGSTPercentage', '$SGSTPercentage','$CGST','$SGST' )";

  //echo $sql;
		$getID= $this->insertQuery($sql);
		//echo "<p>Successfully Saved</p>";
		return $getID;
	
}
function BatchUpdate($ID, $StorageID, $ItemID, $CartID, $CartDetailsID, $InventoryNature, $IsEffectInventoryValue, $BatchNo, $BatchDate, $ExpDate, $MfgDate, $MRP, $ItemCost, $Price, $Rate,$DiscountPercentage, $Quantity, $UnitID, $Amount, $CreatedBy, $ModifedBy, $CreateTime, $ModifyTime,$TaxClassID,$CGSTPercentage, $SGSTPercentage,$CGST,$SGST )
{
	$sql="Update tbl_itembatch set 
	ItemID='$ItemID',
CartID='$CartID',
CartDetailsID='$CartDetailsID',
InventoryNature='$InventoryNature',
IsEffectInventoryValue='$IsEffectInventoryValue',
BatchNo='$BatchNo',
BatchDate=" . ($BatchDate==NULL ? "NULL" : "'$BatchDate'") . ",
ExpDate=" . ($ExpDate==NULL ? "NULL" : "'$ExpDate'") . ",
MfgDate=" . ($MfgDate==NULL ? "NULL" : "'$MfgDate'") . ",
MRP='$MRP',
ItemCost='$ItemCost',
Price='$Price',
Rate='$Rate',
Quantity='$Quantity',
TaxClassID='$TaxClassID',
CGSTPercentage='$CGSTPercentage',
SGSTPercentage='$SGSTPercentage',
CGST='$CGST',
SGST='$SGST',
UnitID='$UnitID',
Amount='$Amount',
CreatedBy='$CreatedBy',
ModifedBy='$ModifedBy',
CreateTime='$CreateTime',
ModifyTime='$ModifyTime',
StorageID='$StorageID' where ID=$ID";

  //echo $sql;
		$getID= $this->updateQuery($sql);
		//echo "<p>Successfully Saved</p>";
		return $getID;

	
}
function GetItemBatchTotal($CartDetailsID)
{
	$sql="SELECT count(ID) CNT,sum(Quantity) Quantity,max(MRP) MRP, max(ItemCost) ItemCost, max(Price) Price, avg(Rate) Rate,Sum(Amount) Amount from tbl_itembatch where CartDetailsID='$CartDetailsID' GROUP BY CartDetailsID";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		 return $getInfo;
	}
	function GetItemBatchDetails($CartDetailsID)
{
	$sql="SELECT * from tbl_itembatch where CartDetailsID='$CartDetailsID' ";
		//echo $sql;
		$getInfo= $this->runQuery($sql);
		 return $getInfo;
	}
function UpdateCartDetailsByBatch($CartDetailsID,$CNT, $Quantity, $ItemCost, $MRP,$Price, $Rate, $Amount, $TaxClassID, $DiscountPercentage,$CGSTPercentage,$SGSTPercentage)
{
	
	$sql="UPDATE tbl_cartdetails set 
	BillingQuantity='$Quantity',
	ActualQuantity='$Quantity', MRP='$MRP', ItemCost='$ItemCost', Price='$Price', 
	PrimaryRate='$Rate', SecondaryRate='$Rate',TaxClassID='$TaxClassID',DiscountPercentage='$DiscountPercentage',CGSTPercentage='$CGSTPercentage',SGSTPercentage='$SGSTPercentage',
	 Amount ='$Amount' where ID=$CartDetailsID";
	// echo $sql;
	$getID= $this->UpdateQuery($sql);
		//echo "<p>Successfully Saved</p>";
		return $getID;
}
function ItemNameByID($ItemID)
{
	$sql="SELECT ID,Name From tbl_item where ID='$ItemID'";
	 //echo $sql;
	$getInfo= $this->runQuery($sql);
	if(count($getInfo,0)==0)
	{
		return 'NOT FOUND';
	}
	else
	{
		return $getInfo[0]['Name'];
	}
}
function ItemDetailsByID($ItemID)
{
	$sql="SELECT * From tbl_item where ID='$ItemID'";
	 //echo $sql;
	$getInfo= $this->runQuery($sql);
	
		return $getInfo;
	
}
function GetUnitID($ItemID)
{
	$sql="SELECT ID,UnitID From tbl_item where ID='$ItemID'";
	 //echo $sql;
	$getInfo= $this->runQuery($sql);
	if(count($getInfo,0)==0)
	{
		return '0';
	}
	else
	{
		return $getInfo[0]['UnitID'];
	}
}
function GetUnitByID($UnitID)
{
	$sql="SELECT ID,Name From tbl_unit where ID='$UnitID'";
	 //echo $sql;
	$getInfo= $this->runQuery($sql);
	if(count($getInfo,0)==0)
	{
		return '';
	}
	else
	{
		return $getInfo[0]['Name'];
	}
}
	function VoucherMasterInsert($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCr, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote,$WhichEntry,$ItemBatchCheckID,$ItemPriceTypeID)
	{
		$sql="INSERT INTO tbl_vouchermaster( RefVoucherID, AssignmentID, VoucherNo, VoucherCategoryID, VoucherTypeID, VoucherDate, TestDate, ActiveDate, TargetDate, DocumentNo, InventoryNature, IsEffectInventoryValue, AccountsNature, IsEffectLedgerValue, PayrollNature, IsEffectPayrollValue, VoucherNature, IsOptional, Note, Signatory, IsMfgJournal, HasItem, IsClosed, IsSaved, IsDelete, IsCancelled, CancelledBy, CancelTime, CancelNote, OfficeID, MacID, FiscalYearID, CalenderYearID, MonthID, DateID, CompanyID, AppRegistrationID, CreateOfficeID, ModifyOfficeID, ModifyMacID, CreatedBy, ModifiedBy, ModifyTime, CreateTime, PriceLevelID, DrCr, ShowDiscount, TaxablePeritem, EmployeeID, CPID, CartID, CartDetailsID, IsVerified, VerifiedBy, VerifiedTime, VerifyNote, DebitAccountID, CreditAccountID, BillingAddressID, ShippingAddressID, PDID, PatientID, DoctorID, AccountID, HasCreditNote, HasDebitNote,WhichEntry,ItemBatchCheckID,ItemPriceTypeID) 
		values( '$RefVoucherID', '$AssignmentID', '$VoucherNo', '$VoucherCategoryID', '$VoucherTypeID', " . ($VoucherDate==NULL ? "NULL" : "'$VoucherDate'") . ", " . ($TestDate==NULL ? "NULL" : "'$TestDate'") . ", " . ($ActiveDate==NULL ? "NULL" : "'$ActiveDate'") . ", " . ($TargetDate==NULL ? "NULL" : "'$TargetDate'") . ", '$DocumentNo', '$InventoryNature', '$IsEffectInventoryValue', '$AccountsNature', '$IsEffectLedgerValue', '$PayrollNature', '$IsEffectPayrollValue', '$VoucherNature', '$IsOptional', '$Note', '$Signatory', '$IsMfgJournal', '$HasItem', '$IsClosed', '$IsSaved', '$IsDelete', '$IsCancelled', '$CancelledBy', " . ($CancelTime==NULL ? "NULL" : "'$CancelTime'") . ", '$CancelNote', '$OfficeID', '$MacID', '$FiscalYearID', '$CalenderYearID', '$MonthID', '$DateID', '$CompanyID', '$AppRegistrationID', '$CreateOfficeID', '$ModifyOfficeID', '$ModifyMacID', '$CreatedBy', '$ModifiedBy', '$ModifyTime', '$CreateTime', '$PriceLevelID', '$DrCr', '$ShowDiscount', '$TaxablePeritem', '$EmployeeID', '$CPID', '$CartID', '$CartDetailsID', '$IsVerified', '$VerifiedBy', " . ($VerifiedTime==NULL ? "NULL" : "'$VerifiedTime'") . ", '$VerifyNote', '$DebitAccountID', '$CreditAccountID', '$BillingAddressID', '$ShippingAddressID', '$PDID', '$PatientID', '$DoctorID', '$AccountID', '$HasCreditNote', '$HasDebitNote','$WhichEntry','$ItemBatchCheckID', '$ItemPriceTypeID')";
		// echo $sql;
		$getID= $this->insertQuery($sql);
		//echo "<p>Successfully Saved</p>";
		return $getID;
	}
			
	function VoucherMasterUpdate($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDeleted, $IsEditable,  $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCrEffect, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_vouchermaster set 
		RefVoucherID='$RefVoucherID',
		AssignmentID='$AssignmentID',
		VoucherNo='$VoucherNo',
		VoucherCategoryID='$VoucherCategoryID',
		VoucherTypeID='$VoucherTypeID',
		VoucherDate=" . ($VoucherDate==NULL ? "NULL" : "'$VoucherDate'") . ",
		TestDate=" . ($TestDate==NULL ? "NULL" : "'$TestDate'") . ",
		ActiveDate=" . ($ActiveDate==NULL ? "NULL" : "'$ActiveDate'") . ",
		TargetDate=" . ($TargetDate==NULL ? "NULL" : "'$TargetDate'") . ",
		DocumentNo='$DocumentNo',
		InventoryNature='$InventoryNature',
		IsEffectInventoryValue='$IsEffectInventoryValue',
		AccountsNature='$AccountsNature',
		IsEffectLedgerValue='$IsEffectLedgerValue',
		PayrollNature='$PayrollNature',
		IsEffectPayrollValue='$IsEffectPayrollValue',
		VoucherNature='$VoucherNature',
		IsOptional='$IsOptional', 
		Signatory='$Signatory',
		IsMfgJournal='$IsMfgJournal',
		HasItem='$HasItem',
		IsClosed='$IsClosed',
		IsSaved='$IsSaved',
		IsDelete='$IsDelete',
		IsCancelled='$IsCancelled',
		CancelledBy='$CancelledBy',
		CancelTime=" . ($CancelTime==NULL ? "NULL" : "'$CancelTime'") . ",
		CancelNote='$CancelNote',
		OfficeID='$OfficeID',
		MacID='$MacID',
		FiscalYearID='$FiscalYearID',
		CalenderYearID='$CalenderYearID',
		MonthID='$MonthID',
		DateID='$DateID',
		CompanyID='$CompanyID',
		AppRegistrationID='$AppRegistrationID',
		CreateOfficeID='$CreateOfficeID',
		ModifyOfficeID='$ModifyOfficeID',
		ModifyMacID='$ModifyMacID', 
		ModifiedBy='$ModifiedBy',
		ModifyTime='$ModifyTime', 
		PriceLevelID='$PriceLevelID',
		DrCrEffect='$DrCrEffect',
		ShowDiscount='$ShowDiscount',
		TaxablePeritem='$TaxablePeritem',
		EmployeeID='$EmployeeID',
		CPID='$CPID',
		CartID='$CartID',
		CartDetailsID='$CartDetailsID',
		IsVerified='$IsVerified',
		VerifiedBy='$VerifiedBy',
		VerifiedTime=" . ($VerifiedTime==NULL ? "NULL" : "'$VerifiedTime'") . ",
		VerifyNote='$VerifyNote',
		DebitAccountID='$DebitAccountID',
		CreditAccountID='$CreditAccountID',
		BillingAddressID='$BillingAddressID',
		ShippingAddressID='$ShippingAddressID',
		PDID='$PDID',
		PatientID='$PatientID',
		DoctorID='$DoctorID',
		AccountID='$AccountID',
		HasCreditNote='$HasCreditNote',
		HasDebitNote='$HasDebitNote' 
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		// echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
	function VoucherDetailsInsert($ID, $EntryIndex, $transactionid, $VoucherID, $AccountTypeID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $IsTaxable,$TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDeleted, $IsEditable,  $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID)
	{
		$sql="INSERT INTO tbl_voucherdetails(EntryIndex, transactionid, VoucherID, AccountTypeID, AccountID, SubAccountID, Debit, Credit, PaymentReceiptTypeID, CalculationMethodID, AttendanceTypeID, VoucherNature, Note, InstrumentID, TaxAccountID, TaxClassID, TaxTypeID, TaxRate, IsTaxable,TaxableAmount, ServiceChargeAccountID, ServiceChargeRate, ServiceChargableAmount, DiscountAccountID, DiscountID, DiscountRate, DiscountValue, HasItem, CostCategoryID, CostCentreID, GodownID, IsClosed, IsSaved, IsDeleted, IsEditable, CustomerID, BillingName, BillingAddressID, SalesTaxNo, DeliveryDetailsID, PaymentMode, IsCancelled, AdjustMethodID, CancelledBy, CancelTime, CancelNote, EntryPointID, MacID, CreateEntryPointID, ModifyEntryPointID, ModifyMacID, CreatedBy, ModifiedBy, ModifyTime, CreateTime, PriceLevelID, DesignationID, Grade, Percentage, DrCr, HasParent, HasChild, ParentControlID, ChildControlID, ControlID, SourceGodownID, DestinationGodownID, SourceOfficeID, DestinationOfficeID) 
		values('$EntryIndex', '$transactionid', '$VoucherID', '$AccountTypeID', '$AccountID', '$SubAccountID', '$Debit', '$Credit', '$PaymentReceiptTypeID', '$CalculationMethodID', '$AttendanceTypeID', '$VoucherNature', '$Note', '$InstrumentID', '$TaxAccountID', '$TaxClassID', '$TaxTypeID', '$TaxRate', '$IsTaxable','$TaxableAmount', '$ServiceChargeAccountID', '$ServiceChargeRate', '$ServiceChargableAmount', '$DiscountAccountID', '$DiscountID', '$DiscountRate', '$DiscountValue', '$HasItem', '$CostCategoryID', '$CostCentreID', '$GodownID', '$IsClosed', '$IsSaved', '$IsDeleted', '$IsEditable', '$CustomerID', '$BillingName', '$BillingAddressID', '$SalesTaxNo', '$DeliveryDetailsID', '$PaymentMode', '$IsCancelled', '$AdjustMethodID', '$CancelledBy'," . ($CancelTime==NULL ? "NULL" : "'$CancelTime'") . ", '$CancelNote', '$EntryPointID', '$MacID', '$CreateEntryPointID', '$ModifyEntryPointID', '$ModifyMacID', '$CreatedBy', '$ModifiedBy', '$ModifyTime', '$CreateTime', '$PriceLevelID', '$DesignationID', '$Grade', '$Percentage', '$DrCr', '$HasParent', '$HasChild', '$ParentControlID', '$ChildControlID', '$ControlID', '$SourceGodownID', '$DestinationGodownID', '$SourceOfficeID', '$DestinationOfficeID')";
	//	echo $sql;
		$getID= $this->insertQuery($sql);
		//echo "<p>Successfully Saved</p>";
		return $getID;
	}
	
	function VoucherDetailsUpdate($ID, $EntryIndex, $transactionid, $VoucherID, $AccountTypeID,  $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $IsTaxable,$TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDeleted, $IsEditable,  $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID)
{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_voucherdetails set 
		EntryIndex='$EntryIndex',
		transactionid='$transactionid',
		VoucherID='$VoucherID',
		AccountTypeID='$AccountTypeID',
		AccountID='$AccountID',
		SubAccountID='$SubAccountID',
		Debit='$Debit',
		Credit='$Credit',
		PaymentReceiptTypeID='$PaymentReceiptTypeID',
		CalculationMethodID='$CalculationMethodID',
		AttendanceTypeID='$AttendanceTypeID',
		VoucherNature='$VoucherNature',
		Note='$Note',
		InstrumentID='$InstrumentID',
		TaxAccountID='$TaxAccountID',
		TaxClassID='$TaxClassID',
		TaxTypeID='$TaxTypeID',
		TaxRate='$TaxRate',
		IsTaxable='$IsTaxable',
		TaxableAmount='$TaxableAmount',
		ServiceChargeAccountID='$ServiceChargeAccountID',
		ServiceChargeRate='$ServiceChargeRate',
		ServiceChargableAmount='$ServiceChargableAmount',
		DiscountAccountID='$DiscountAccountID',
		DiscountID='$DiscountID',
		DiscountRate='$DiscountRate',
		DiscountValue='$DiscountValue',
		HasItem='$HasItem',
		CostCategoryID='$CostCategoryID',
		CostCentreID='$CostCentreID',
		GodownID='$GodownID',
		IsClosed='$IsClosed',
		IsSaved='$IsSaved',
		IsDeleted='$IsDeleted',
		IsEditable='$IsEditable',
		CustomerID='$CustomerID',
		BillingName='$BillingName',
		BillingAddressID='$BillingAddressID',
		SalesTaxNo='$SalesTaxNo',
		DeliveryDetailsID='$DeliveryDetailsID',
		PaymentMode='$PaymentMode',
		IsCancelled='$IsCancelled',
		AdjustMethodID='$AdjustMethodID',
		CancelledBy='$CancelledBy',
		CancelTime=" . ($CancelTime==NULL ? "NULL" : "'$TargetDate'") . ",
		CancelNote='$CancelNote',
		EntryPointID='$EntryPointID',
		MacID='$MacID',
		ModifyEntryPointID='$ModifyEntryPointID',
		ModifyMacID='$ModifyMacID',
		ModifiedBy='$ModifiedBy',
		ModifyTime='$ModifyTime',
		PriceLevelID='$PriceLevelID',
		DesignationID='$DesignationID',
		Grade='$Grade',
		Percentage='$Percentage',
		DrCr='$DrCr',
		HasParent='$HasParent',
		HasChild='$HasChild',
		ParentControlID='$ParentControlID',
		ChildControlID='$ChildControlID',
		ControlID='$ControlID',
		SourceGodownID='$SourceGodownID',
		DestinationGodownID='$DestinationGodownID',
		SourceOfficeID='$SourceOfficeID',
		DestinationOfficeID='$DestinationOfficeID' 
		where ID=$ID";
		  //  echo $sql;
		 $result = $this->updateQuery($sql);
		// echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
		function CartInsert($ID, $OfficeID, $Createdby, $CreateTime, $ModifyBy, $ModifyTime, $TransactionID, $CartDate, $InventoryNature, $EffectInventoryValue, $VoucherID, $VoucherDetailsID, $CartTypeID,$ItemPriceTypeID)
	{
		$sql="INSERT INTO tbl_cart(OfficeID, Createdby, CreateTime, ModifyBy, ModifyTime, TransactionID, CartDate, InventoryNature, EffectInventoryValue, VoucherID, VoucherDetailsID, CartTypeID,ItemPriceTypeID) 
		values('$OfficeID', '$Createdby', '$CreateTime', '$ModifyBy', '$ModifyTime', '$TransactionID', '$CartDate', '$InventoryNature', '$EffectInventoryValue', '$VoucherID', '$VoucherDetailsID', '$CartTypeID','$ItemPriceTypeID')";
		//echo $sql;
		$getID= $this->insertQuery($sql);
		// echo "<p>Successfully Saved</p>";
		//echo $getID;
		return $getID;
	}
			
	function CartUpdate($ID, $OfficeID, $Createdby, $CreateTime, $ModifyBy, $ModifyTime, $TransactionID, $CartDate, $InventoryNature, $EffectInventoryValue, $VoucherID, $VoucherDetailsID, $CartTypeID,$ItemPriceTypeID)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_cart set 
		OfficeID='$OfficeID',
		Createdby='$Createdby',
		CreateTime='$CreateTime',
		ModifyBy='$ModifyBy',
		ModifyTime='$ModifyTime',
		TransactionID='$TransactionID',
		CartDate=" . ($CartDate==NULL ? "NULL" : "'$CartDate'") . ",
		InventoryNature='$InventoryNature',
		EffectInventoryValue='$EffectInventoryValue',
		VoucherID='$VoucherID',
		VoucherDetailsID='$VoucherDetailsID' , 
		CartTypeID='$CartTypeID' , 
		ItemPriceTypeID='$ItemPriceTypeID' 
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		// echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
		function CartDetailsInsert($ID, $EntryIndex, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $VoucherID, $DocumentNo, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $MRP,$ItemCost, $Price, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime, $IsDeleted, $IsEditable,$TaxClassID,$CGSTPercentage, $SGSTPercentage,$CGST,$SGST)
	{
		$sql="INSERT INTO tbl_cartdetails(EntryIndex, CartID, TestDate, ReportDate, CollectionCenterID, LabID, TransactionID, VoucherID, DocumentNo, ItemID, ItemGroupID, ItemCategoryID, PrimaryUnitID, SecondaryUnitID, ItemCost, Price, BillingQuantity, ActualQuantity, PrimaryRate, SecondaryRate, DiscountPercentage, PrimaryDiscountRate, SecondaryDiscountRate, Amount, CreatedBy, CreateTime, ModifyBy, ModifyTime, IsCancelled, CancellationRequestBy, CancellationRequestTime, CancellationConfirmBy, CancellationConfirmTime, IsDeleted, IsEditable) 
		values('$EntryIndex', '$CartID', " . ($TestDate==NULL ? "NULL" : "'$TestDate'") . ", " . ($ReportDate==NULL ? "NULL" : "'$ReportDate'") . ", '$CollectionCenterID', '$LabID', '$TransactionID', '$VoucherID', '$DocumentNo', '$ItemID', '$ItemGroupID', '$ItemCategoryID', '$PrimaryUnitID', '$SecondaryUnitID', '$ItemCost', '$Price', '$BillingQuantity', '$ActualQuantity', '$PrimaryRate', '$SecondaryRate', '$DiscountPercentage', '$PrimaryDiscountRate', '$SecondaryDiscountRate', '$Amount', '$CreatedBy', '$CreateTime', '$ModifyBy', '$ModifyTime', '$IsCancelled', '$CancellationRequestBy', " . ($CancellationRequestTime==NULL ? "NULL" : "'$CancellationRequestTime'") . ", '$CancellationConfirmBy', " . ($CancellationConfirmTime==NULL ? "NULL" : "'$CancellationConfirmTime'") . ", '$IsDeleted', '$IsEditable')";
		// echo $sql;
		$getID= $this->insertQuery($sql);
		//echo "<p>Successfully Saved</p>";
		return $getID;
	}
			
	function CartDetailsUpdate($ID, $EntryIndex, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $VoucherID, $DocumentNo, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $MRP, $ItemCost, $Price, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime, $IsDeleted, $IsEditable,$TaxClassID,$CGSTPercentage, $SGSTPercentage,$CGST,$SGST)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_cartdetails set 
		EntryIndex='$EntryIndex',
		CartID='$CartID',
		TestDate=" . ($TestDate==NULL ? "NULL" : "'$TestDate'") . ",
		ReportDate=" . ($ReportDate==NULL ? "NULL" : "'$ReportDate'") . ",
		CollectionCenterID='$CollectionCenterID',
		LabID='$LabID',
		TransactionID='$TransactionID',
		VoucherID='$VoucherID',
		DocumentNo='$DocumentNo',
		ItemID='$ItemID',
		ItemGroupID='$ItemGroupID',
		ItemCategoryID='$ItemCategoryID',
		PrimaryUnitID='$PrimaryUnitID',
		SecondaryUnitID='$SecondaryUnitID',
		ItemCost='$ItemCost',
		Price='$Price',
		BillingQuantity='$BillingQuantity',
		ActualQuantity='$ActualQuantity',
		PrimaryRate='$PrimaryRate',
		SecondaryRate='$SecondaryRate',
		DiscountPercentage='$DiscountPercentage',
		PrimaryDiscountRate='$PrimaryDiscountRate',
		SecondaryDiscountRate='$SecondaryDiscountRate',
		Amount='$Amount',
		CreatedBy='$CreatedBy',
		CreateTime='$CreateTime',
		ModifyBy='$ModifyBy',
		ModifyTime='$ModifyTime',
		IsCancelled='$IsCancelled',
		CancellationRequestBy='$CancellationRequestBy',
		CancellationRequestTime=" . ($CancellationRequestTime==NULL ? "NULL" : "'$CancellationRequestTime'") . ",
		CancellationConfirmBy='$CancellationConfirmBy',
		CancellationConfirmTime=" . ($CancellationConfirmTime==NULL ? "NULL" : "'$CancellationConfirmTime'") . ",
		IsDeleted='$IsDeleted',
		IsEditable='$IsEditable'
		where ID=$ID";
		 //   echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
	
	function VoucherMasterTempInsert($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCr, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote)
	{
		$sql="INSERT INTO tbl_vouchermaster_temp( RefVoucherID, AssignmentID, VoucherNo, VoucherCategoryID, VoucherTypeID, VoucherDate, TestDate, ActiveDate, TargetDate, DocumentNo, InventoryNature, IsEffectInventoryValue, AccountsNature, IsEffectLedgerValue, PayrollNature, IsEffectPayrollValue, VoucherNature, IsOptional, Note, Signatory, IsMfgJournal, HasItem, IsClosed, IsSaved, IsDelete, IsCancelled, CancelledBy, CancelTime, CancelNote, OfficeID, MacID, FiscalYearID, CalenderYearID, MonthID, DateID, CompanyID, AppRegistrationID, CreateOfficeID, ModifyOfficeID, ModifyMacID, CreatedBy, ModifiedBy, ModifyTime, CreateTime, PriceLevelID, DrCr, ShowDiscount, TaxablePeritem, EmployeeID, CPID, CartID, CartDetailsID, IsVerified, VerifiedBy, VerifiedTime, VerifyNote, DebitAccountID, CreditAccountID, BillingAddressID, ShippingAddressID, PDID, PatientID, DoctorID, AccountID, HasCreditNote, HasDebitNote) 
		values( '$RefVoucherID', '$AssignmentID', '$VoucherNo', '$VoucherCategoryID', '$VoucherTypeID', '$VoucherDate', '$TestDate', '$ActiveDate', '$TargetDate', '$DocumentNo', '$InventoryNature', '$IsEffectInventoryValue', '$AccountsNature', '$IsEffectLedgerValue', '$PayrollNature', '$IsEffectPayrollValue', '$VoucherNature', '$IsOptional', '$Note', '$Signatory', '$IsMfgJournal', '$HasItem', '$IsClosed', '$IsSaved', '$IsDelete', '$IsCancelled', '$CancelledBy', '$CancelTime', '$CancelNote', '$OfficeID', '$MacID', '$FiscalYearID', '$CalenderYearID', '$MonthID', '$DateID', '$CompanyID', '$AppRegistrationID', '$CreateOfficeID', '$ModifyOfficeID', '$ModifyMacID', '$CreatedBy', '$ModifiedBy', '$ModifyTime', '$CreateTime', '$PriceLevelID', '$DrCr', '$ShowDiscount', '$TaxablePeritem', '$EmployeeID', '$CPID', '$CartID', '$CartDetailsID', '$IsVerified', '$VerifiedBy', '$VerifiedTime', '$VerifyNote', '$DebitAccountID', '$CreditAccountID', '$BillingAddressID', '$ShippingAddressID', '$PDID', '$PatientID', '$DoctorID', '$AccountID', '$HasCreditNote', '$HasDebitNote)";
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
	
	function VoucherMasterTempUpdate($ID, $RefVoucherID, $AssignmentID, $VoucherNo, $VoucherCategoryID, $VoucherTypeID, $VoucherDate, $TestDate, $ActiveDate, $TargetDate, $DocumentNo, $InventoryNature, $IsEffectInventoryValue, $AccountsNature, $IsEffectLedgerValue, $PayrollNature, $IsEffectPayrollValue, $VoucherNature, $IsOptional, $Note, $Signatory, $IsMfgJournal, $HasItem, $IsClosed, $IsSaved, $IsDelete, $IsCancelled, $CancelledBy, $CancelTime, $CancelNote, $OfficeID, $MacID, $FiscalYearID, $CalenderYearID, $MonthID, $DateID, $CompanyID, $AppRegistrationID, $CreateOfficeID, $ModifyOfficeID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DrCrEffect, $ShowDiscount, $TaxablePeritem, $EmployeeID, $CPID, $CartID, $CartDetailsID, $IsVerified, $VerifiedBy, $VerifiedTime, $VerifyNote, $DebitAccountID, $CreditAccountID, $BillingAddressID, $ShippingAddressID, $PDID, $PatientID, $DoctorID, $AccountID, $HasCreditNote, $HasDebitNote)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_vouchermaster_temp set 
		RefVoucherID='$RefVoucherID',
		AssignmentID='$AssignmentID',
		VoucherNo='$VoucherNo',
		VoucherCategoryID='$VoucherCategoryID',
		VoucherTypeID='$VoucherTypeID',
		VoucherDate=" . ($VoucherDate==NULL ? "NULL" : "'$VoucherDate'") . ",
		TestDate=" . ($TestDate==NULL ? "NULL" : "'$TestDate'") . ",
		ActiveDate=" . ($ActiveDate==NULL ? "NULL" : "'$ActiveDate'") . ",
		TargetDate=" . ($TargetDate==NULL ? "NULL" : "'$TargetDate'") . ",
		DocumentNo='$DocumentNo',
		InventoryNature='$InventoryNature',
		IsEffectInventoryValue='$IsEffectInventoryValue',
		AccountsNature='$AccountsNature',
		IsEffectLedgerValue='$IsEffectLedgerValue',
		PayrollNature='$PayrollNature',
		IsEffectPayrollValue='$IsEffectPayrollValue',
		VoucherNature='$VoucherNature',
		IsOptional='$IsOptional',
		Note='$Note',
		Signatory='$Signatory',
		IsMfgJournal='$IsMfgJournal',
		HasItem='$HasItem',
		IsClosed='$IsClosed',
		IsSaved='$IsSaved',
		IsDelete='$IsDelete',
		IsCancelled='$IsCancelled',
		CancelledBy='$CancelledBy',
		CancelTime='$CancelTime',
		CancelNote='$CancelNote',
		OfficeID='$OfficeID',
		MacID='$MacID',
		FiscalYearID='$FiscalYearID',
		CalenderYearID='$CalenderYearID',
		MonthID='$MonthID',
		DateID='$DateID',
		CompanyID='$CompanyID',
		AppRegistrationID='$AppRegistrationID',
		CreateOfficeID='$CreateOfficeID',
		ModifyOfficeID='$ModifyOfficeID',
		ModifyMacID='$ModifyMacID', 
		ModifiedBy='$ModifiedBy',
		ModifyTime='$ModifyTime', 
		PriceLevelID='$PriceLevelID',
		DrCrEffect='$DrCrEffect',
		ShowDiscount='$ShowDiscount',
		TaxablePeritem='$TaxablePeritem',
		EmployeeID='$EmployeeID',
		CPID='$CPID',
		CartID='$CartID',
		CartDetailsID='$CartDetailsID',
		IsVerified='$IsVerified',
		VerifiedBy='$VerifiedBy',
		VerifiedTime='$VerifiedTime',
		VerifyNote='$VerifyNote',
		DebitAccountID='$DebitAccountID',
		CreditAccountID='$CreditAccountID',
		BillingAddressID='$BillingAddressID',
		ShippingAddressID='$ShippingAddressID',
		PDID='$PDID',
		PatientID='$PatientID',
		DoctorID='$DoctorID',
		AccountID='$AccountID',
		HasCreditNote='$HasCreditNote',
		HasDebitNote='$HasDebitNote' 
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	
	
	function VoucherDetailsTempInsert($ID, $EntryIndex, $transactionid, $VoucherID, $ActivityAccountID, $InventoryAccountID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDelete, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID)
	{
		$sql="INSERT INTO tbl_voucherdetails_temp(EntryIndex, transactionid, VoucherID, ActivityAccountID, InventoryAccountID, AccountID, SubAccountID, Debit, Credit, PaymentReceiptTypeID, CalculationMethodID, AttendanceTypeID, VoucherNature, Note, InstrumentID, TaxAccountID, TaxClassID, TaxTypeID, TaxRate, TaxableAmount, ServiceChargeAccountID, ServiceChargeRate, ServiceChargableAmount, DiscountAccountID, DiscountID, DiscountRate, DiscountValue, HasItem, CostCategoryID, CostCentreID, GodownID, IsClosed, IsSaved, IsDelete, CustomerID, BillingName, BillingAddressID, SalesTaxNo, DeliveryDetailsID, PaymentMode, IsCancelled, AdjustMethodID, CancelledBy, CancelTime, CancelNote, EntryPointID, MacID, CreateEntryPointID, ModifyEntryPointID, ModifyMacID, CreatedBy, ModifiedBy, ModifyTime, CreateTime, PriceLevelID, DesignationID, Grade, Percentage, DrCr, HasParent, HasChild, ParentControlID, ChildControlID, ControlID, SourceGodownID, DestinationGodownID, SourceOfficeID, DestinationOfficeID) 
		values('$EntryIndex', '$transactionid', '$VoucherID', '$ActivityAccountID', '$InventoryAccountID', '$AccountID', '$SubAccountID', '$Debit', '$Credit', '$PaymentReceiptTypeID', '$CalculationMethodID', '$AttendanceTypeID', '$VoucherNature', '$Note', '$InstrumentID', '$TaxAccountID', '$TaxClassID', '$TaxTypeID', '$TaxRate', '$TaxableAmount', '$ServiceChargeAccountID', '$ServiceChargeRate', '$ServiceChargableAmount', '$DiscountAccountID', '$DiscountID', '$DiscountRate', '$DiscountValue', '$HasItem', '$CostCategoryID', '$CostCentreID', '$GodownID', '$IsClosed', '$IsSaved', '$IsDelete', '$CustomerID', '$BillingName', '$BillingAddressID', '$SalesTaxNo', '$DeliveryDetailsID', '$PaymentMode', '$IsCancelled', '$AdjustMethodID', '$CancelledBy', '$CancelTime', '$CancelNote', '$EntryPointID', '$MacID', '$CreateEntryPointID', '$ModifyEntryPointID', '$ModifyMacID', '$CreatedBy', '$ModifiedBy', '$ModifyTime', '$CreateTime', '$PriceLevelID', '$DesignationID', '$Grade', '$Percentage', '$DrCr', '$HasParent', '$HasChild', '$ParentControlID', '$ChildControlID', '$ControlID', '$SourceGodownID', '$DestinationGodownID', '$SourceOfficeID', '$DestinationOfficeID')";
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
	
	function VoucherDetailsTempUpdate($ID, $EntryIndex, $transactionid, $VoucherID, $ActivityAccountID, $InventoryAccountID, $AccountID, $SubAccountID, $Debit, $Credit, $PaymentReceiptTypeID, $CalculationMethodID, $AttendanceTypeID, $VoucherNature, $Note, $InstrumentID, $TaxAccountID, $TaxClassID, $TaxTypeID, $TaxRate, $TaxableAmount, $ServiceChargeAccountID, $ServiceChargeRate, $ServiceChargableAmount, $DiscountAccountID, $DiscountID, $DiscountRate, $DiscountValue, $HasItem, $CostCategoryID, $CostCentreID, $GodownID, $IsClosed, $IsSaved, $IsDelete, $CustomerID, $BillingName, $BillingAddressID, $SalesTaxNo, $DeliveryDetailsID, $PaymentMode, $IsCancelled, $AdjustMethodID, $CancelledBy, $CancelTime, $CancelNote, $EntryPointID, $MacID, $CreateEntryPointID, $ModifyEntryPointID, $ModifyMacID, $CreatedBy, $ModifiedBy, $ModifyTime, $CreateTime, $PriceLevelID, $DesignationID, $Grade, $Percentage, $DrCr, $HasParent, $HasChild, $ParentControlID, $ChildControlID, $ControlID, $SourceGodownID, $DestinationGodownID, $SourceOfficeID, $DestinationOfficeID)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_voucherdetails_temp set 
		EntryIndex='$EntryIndex',
		transactionid='$transactionid',
		VoucherID='$VoucherID',
		ActivityAccountID='$ActivityAccountID',
		InventoryAccountID='$InventoryAccountID',
		AccountID='$AccountID',
		SubAccountID='$SubAccountID',
		Debit='$Debit',
		Credit='$Credit',
		PaymentReceiptTypeID='$PaymentReceiptTypeID',
		CalculationMethodID='$CalculationMethodID',
		AttendanceTypeID='$AttendanceTypeID',
		VoucherNature='$VoucherNature',
		Note='$Note',
		InstrumentID='$InstrumentID',
		TaxAccountID='$TaxAccountID',
		TaxClassID='$TaxClassID',
		TaxTypeID='$TaxTypeID',
		TaxRate='$TaxRate',
		TaxableAmount='$TaxableAmount',
		ServiceChargeAccountID='$ServiceChargeAccountID',
		ServiceChargeRate='$ServiceChargeRate',
		ServiceChargableAmount='$ServiceChargableAmount',
		DiscountAccountID='$DiscountAccountID',
		DiscountID='$DiscountID',
		DiscountRate='$DiscountRate',
		DiscountValue='$DiscountValue',
		HasItem='$HasItem',
		CostCategoryID='$CostCategoryID',
		CostCentreID='$CostCentreID',
		GodownID='$GodownID',
		IsClosed='$IsClosed',
		IsSaved='$IsSaved',
		IsDelete='$IsDelete',
		CustomerID='$CustomerID',
		BillingName='$BillingName',
		BillingAddressID='$BillingAddressID',
		SalesTaxNo='$SalesTaxNo',
		DeliveryDetailsID='$DeliveryDetailsID',
		PaymentMode='$PaymentMode',
		IsCancelled='$IsCancelled',
		AdjustMethodID='$AdjustMethodID',
		CancelledBy='$CancelledBy',
		CancelTime='$CancelTime',
		CancelNote='$CancelNote',
		EntryPointID='$EntryPointID',
		MacID='$MacID',
		ModifyEntryPointID='$ModifyEntryPointID',
		ModifyMacID='$ModifyMacID',
		ModifiedBy='$ModifiedBy',
		ModifyTime='$ModifyTime',
		PriceLevelID='$PriceLevelID',
		DesignationID='$DesignationID',
		Grade='$Grade',
		Percentage='$Percentage',
		DrCr='$DrCr',
		HasParent='$HasParent',
		HasChild='$HasChild',
		ParentControlID='$ParentControlID',
		ChildControlID='$ChildControlID',
		ControlID='$ControlID',
		SourceGodownID='$SourceGodownID',
		DestinationGodownID='$DestinationGodownID',
		SourceOfficeID='$SourceOfficeID',
		DestinationOfficeID='$DestinationOfficeID'
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
			function CartTempInsert($ID, $OfficeID, $Createdby, $CreateTime, $ModifyBy, $ModifyTime, $TransactionID, $CartDate, $InventoryNature, $EffectInventoryValue, $VoucherID, $VoucherDetailsID)
	{
		$sql="INSERT INTO tbl_cart_temp(OfficeID, Createdby, CreateTime, ModifyBy, ModifyTime, TransactionID, CartDate, InventoryNature, EffectInventoryValue, VoucherID, VoucherDetailsID) 
		values('$OfficeID', '$Createdby', '$CreateTime', '$ModifyBy', '$ModifyTime', '$TransactionID', '$CartDate', '$InventoryNature', '$EffectInventoryValue', '$VoucherID', '$VoucherDetailsID')";
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
			
	function CartTempUpdate($ID, $OfficeID, $Createdby, $CreateTime, $ModifyBy, $ModifyTime, $TransactionID, $CartDate, $InventoryNature, $EffectInventoryValue, $VoucherID, $VoucherDetailsID)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_cart_temp set 
		OfficeID='$OfficeID',
		Createdby='$Createdby',
		CreateTime='$CreateTime',
		ModifyBy='$ModifyBy',
		ModifyTime='$ModifyTime',
		TransactionID='$TransactionID',
		CartDate=" . ($CartDate==NULL ? "NULL" : "'$CartDate'") . ",
		InventoryNature='$InventoryNature',
		EffectInventoryValue='$EffectInventoryValue',
		VoucherID='$VoucherID',
		VoucherDetailsID='$VoucherDetailsID' 
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
	function CartDetailsTempInsert($ID, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $EntryIndex, $DocumentNo, $VoucherID, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime)
	{
		$sql="INSERT INTO tbl_cartdetails_temp(CartID, TestDate, ReportDate, CollectionCenterID, LabID, TransactionID, BillingQuantity, ActualQuantity, PrimaryRate, SecondaryRate, DiscountPercentage, PrimaryDiscountRate, SecondaryDiscountRate, Amount, CreatedBy, CreateTime, ModifyBy, ModifyTime, EntryIndex, DocumentNo, VoucherID, ItemID, ItemGroupID, ItemCategoryID, PrimaryUnitID, SecondaryUnitID, IsCancelled, CancellationRequestBy, CancellationRequestTime, CancellationConfirmBy, CancellationConfirmTime) 
		values('$CartID', '$TestDate', '$ReportDate', '$CollectionCenterID', '$LabID', '$TransactionID', '$BillingQuantity', '$ActualQuantity', '$PrimaryRate', '$SecondaryRate', '$DiscountPercentage', '$PrimaryDiscountRate', '$SecondaryDiscountRate', '$Amount', '$CreatedBy', '$CreateTime', '$ModifyBy', '$ModifyTime', '$EntryIndex', '$DocumentNo', '$VoucherID', '$ItemID', '$ItemGroupID', '$ItemCategoryID', '$PrimaryUnitID', '$SecondaryUnitID', '$IsCancelled', '$CancellationRequestBy', '$CancellationRequestTime', '$CancellationConfirmBy', '$CancellationConfirmTime')";
		$getID= $this->insertQuery($sql);
		echo "<p>Successfully Saved</p>";
		return $getID;
	}
			
	function CartDetailsTempUpdate($ID, $CartID, $TestDate, $ReportDate, $CollectionCenterID, $LabID, $TransactionID, $BillingQuantity, $ActualQuantity, $PrimaryRate, $SecondaryRate, $DiscountPercentage, $PrimaryDiscountRate, $SecondaryDiscountRate, $Amount, $CreatedBy, $CreateTime, $ModifyBy, $ModifyTime, $EntryIndex, $DocumentNo, $VoucherID, $ItemID, $ItemGroupID, $ItemCategoryID, $PrimaryUnitID, $SecondaryUnitID, $IsCancelled, $CancellationRequestBy, $CancellationRequestTime, $CancellationConfirmBy, $CancellationConfirmTime)
	{
		//$Address=$this->sql_escape($Address);
		 $sql="Update tbl_cartdetails_temp set 
		CartID='$CartID',
		TestDate=" . ($TestDate==NULL ? "NULL" : "'$TestDate'") . ",
		ReportDate=" . ($ReportDate==NULL ? "NULL" : "'$ReportDate'") . ",
		CollectionCenterID='$CollectionCenterID',
		LabID='$LabID',
		TransactionID='$TransactionID',
		BillingQuantity='$BillingQuantity',
		ActualQuantity='$ActualQuantity',
		PrimaryRate='$PrimaryRate',
		SecondaryRate='$SecondaryRate',
		DiscountPercentage='$DiscountPercentage',
		PrimaryDiscountRate='$PrimaryDiscountRate',
		SecondaryDiscountRate='$SecondaryDiscountRate',
		Amount='$Amount',
		ModifyBy='$ModifyBy',
		ModifyTime='$ModifyTime',
		EntryIndex='$EntryIndex',
		DocumentNo='$DocumentNo',
		VoucherID='$VoucherID',
		ItemID='$ItemID',
		ItemGroupID='$ItemGroupID',
		ItemCategoryID='$ItemCategoryID',
		PrimaryUnitID='$PrimaryUnitID',
		SecondaryUnitID='$SecondaryUnitID',
		IsCancelled='$IsCancelled',
		CancellationRequestBy='$CancellationRequestBy',
		CancellationRequestTime='$CancellationRequestTime',
		CancellationConfirmBy='$CancellationConfirmBy',
		CancellationConfirmTime='$CancellationConfirmTime' 
		where ID=$ID";
		 // echo $sql;
		 $result = $this->updateQuery($sql);
		 echo "<p>Successfully Saved</p>";
		 return $ID;
	}
}
?>