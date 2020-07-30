<?php
if (!isset($_SESSION)) {session_start();}
//require_once("file:///D|/wamp64/www/patho/app/includes/dbase.php");
require_once("MOD.Item.php");
//error_reporting(E_ALL && ~E_NOTICE);
 $Handle= new MODItem();
$qtype="";
$qtype=$_REQUEST['qtype'];

/*?>
<script>
alert();
</script>
<?php*/

if($qtype=="getItemInfo")
{
	$code="";
	$code=$_REQUEST['acode'];
	
	/*$list= array('ID'=>0,'Name'=>"No Name Found",'UnitID'=>"0",'ItemCost'=>"0",'Price'=>"0",'UnitRatio'=>"0");
	  	$c = json_encode($list);
		   echo $c;*/
		   
	$sql="select ID,Name,UnitID,MRP,ItemCost, Price,PurchaseTaxClassID,SalesTaxClassID,CGSTPercentage,SGSTPercentage from tbl_item where ID=$code";
 //echo $sql;
	 $GetInfo=$Handle->runQuery($sql);
	 
 	if (count($GetInfo,0)==1)
	{
		 
		$list= array('CNT'=>count($GetInfo,0),
		'ID'=>$GetInfo[0]['ID'],
		'Name'=>$GetInfo[0]['Name'],
		'UnitID'=>$GetInfo[0]['UnitID'],
		'MRP'=>$GetInfo[0]['MRP'],
		'ItemCost'=>$GetInfo[0]['ItemCost'],
		'Price'=>$GetInfo[0]['Price'],
		'PurchaseTaxClassID'=>$GetInfo[0]['PurchaseTaxClassID'],
		'SalesTaxClassID'=>$GetInfo[0]['SalesTaxClassID'],
		'CGSTPercentage'=>$GetInfo[0]['CGSTPercentage'],
		'SGSTPercentage'=>$GetInfo[0]['SGSTPercentage'],
		'Unit'=>$Handle->getUnitByID($GetInfo[0]['UnitID']));
	  		$c = json_encode($list);
		    echo $c;
	}
	else
	{
			$list= array('CNT'=>count($GetInfo,0),
			'ID'=>0,
			'Name'=>"No Name Found",
			'UnitID'=>"0",
			'MRP'=>"0",
			'ItemCost'=>"0",
			'Price'=>"0",
			'PurchaseTaxClassID'=>"0",
			'SalesTaxClassID'=>"0",
			'CGSTPercentage'=>"0",
			'SGSTPercentage'=>"0",
			'Unit'=>"-");
	  	$c = json_encode($list);
		   echo $c;
		 
		}
}
if($qtype=="getItemBatchInfo")
{
	$BatchNo=$_REQUEST['acode'];
	$ItemID=$_REQUEST['itid'];
$sql="select BatchNo,MfgDate,ExpDate, sum(InventoryNature*Quantity) Quantity, sum(InventoryNature*Amount) Amount from tbl_itembatch where BatchNo='$BatchNo' and ItemID='$ItemID' Group By BatchNo,MfgDate,ExpDate";
$GetInfo= $Handle->runQuery($sql);
		$Count=count($GetInfo,0);
		if ($Count>0)
		{
			$list= array('CNT'=>$Count,
			'BatchNo'=>$GetInfo[0]['BatchNo'],
			'MfgDate'=>$GetInfo[0]['MfgDate'],
			'ExpDate'=>$GetInfo[0]['ExpDate'],
			'Quantity'=>$GetInfo[0]['Quantity'],
			'Amount'=>$GetInfo[0]['Amount']);
			
	  		$c = json_encode($list);
		    echo $c;
		}
		else
		{
			$list= array('CNT'=>count($GetInfo,0),
				'BatchNo'=>"0",
				'MfgDate'=>"0",
				'ExpDate'=>"0",
				'Quantity'=>"0",
				'Amount'=>"0");
				$c = json_encode($list);
				echo $c;
		}
}
if($qtype=="getVoucherAccountInfo")
{
	$code="";
	$AccountID=$_REQUEST['acode'];
	$VoucherTypeID=$_REQUEST['vtid'];
	/*$list= array('ID'=>0,'Name'=>"No Name Found",'UnitID'=>"0",'ItemCost'=>"0",'Price'=>"0",'UnitRatio'=>"0");
	  	$c = json_encode($list);
		   echo $c;*/
		  $sql="SELECT va.ID, va.AccountTypeID,va.IsTaxable, va.DrCr, va.CalculationMethodID, va.Percentage, va.AcGroupID, va.AccountID, va.IsPermanent, va.VoucherTypeID, va.IsEditable, va.IsDeleted from tbl_voucheraccount va where va.AccountID=$AccountID and va.VoucherTypeID=$VoucherTypeID and va.IsDeleted=0 and (AccountTypeID=3 or AccountTypeID=4)";
		  //echo $sql;
		$GetInfo= $Handle->runQuery($sql);
		$Count=count($GetInfo,0);
		if ($Count>0)
		{
			$list= array('CNT'=>$Count,
			'AccountTypeID'=>$GetInfo[0]['AccountTypeID'],
			'DrCr'=>$GetInfo[0]['DrCr'],
			'IsTaxable'=>$GetInfo[0]['IsTaxable'],
			'CalculationMethodID'=>$GetInfo[0]['CalculationMethodID'],
			'Percentage'=>$GetInfo[0]['Percentage'],
			'AcGroupID'=>$GetInfo[0]['AcGroupID'],
			'AccountID'=>$GetInfo[0]['AccountID'],
			'VoucherTypeID'=>$GetInfo[0]['VoucherTypeID']);
			
	  		$c = json_encode($list);
		    echo $c;
		}
		else
		{
			$sql="SELECT va.ID, va.AccountTypeID,va.IsTaxable, va.DrCr, va.CalculationMethodID, va.Percentage, va.AcGroupID, va.AccountID, va.IsPermanent, va.VoucherTypeID, va.IsEditable, va.IsDeleted from tbl_voucheraccount va 
		left outer join tbl_master m on m.MID=va.AcGroupID
		where m.ID=$AccountID and va.VoucherTypeID=$VoucherTypeID and va.IsDeleted=0 and (va.AccountTypeID=3 or va.AccountTypeID=4)";
			$GetInfo= $this->runQuery($sql);
			if (count($GetInfo,0)>0)
			{
				$list= array('CNT'=>count($GetInfo,0),
				'ID'=>$GetInfo[0]['ID'],
				'AccountTypeID'=>$GetInfo[0]['AccountTypeID'],
				'DrCr'=>$GetInfo[0]['DrCr'],
				'IsTaxable'=>$GetInfo[0]['IsTaxable'],
				'CalculationMethodID'=>$GetInfo[0]['CalculationMethodID'],
				'Percentage'=>$GetInfo[0]['Percentage'],
				'AcGroupID'=>$GetInfo[0]['AcGroupID'],
				'AccountID'=>$GetInfo[0]['AccountID'],
				'IsPermanent'=>$GetInfo[0]['IsPermanent'],
				'VoucherTypeID'=>$GetInfo[0]['VoucherTypeID'],
				'IsEditable'=>$GetInfo[0]['IsEditable'],
				'IsDeleted'=>$GetInfo[0]['IsDeleted']);
				$c = json_encode($list);
				echo $c;
			}
			else
			{
				$list= array('CNT'=>count($GetInfo,0),
				'ID'=>"0",
				'AccountTypeID'=>"0",
				'DrCr'=>"0",
				'IsTaxable'=>"0",
				'CalculationMethodID'=>"0",
				'Percentage'=>"0",
				'AcGroupID'=>"0",
				'AccountID'=>"0",
				'IsPermanent'=>"0",
				'VoucherTypeID'=>"0",
				'IsEditable'=>"0",
				'IsDeleted'=>"0");
				$c = json_encode($list);
				echo $c;
			}
		}
	
}
elseif($qtype=="getItemInfoByUnit")
{
	$code="";
	$code=$_REQUEST['acode'];
	$UnitID=$_REQUEST['unitid'];
	$mastertypeid=0;
	//echo $code;
	//$costcategoryid	=7;
	$sql="select ID,Name,UnitID,ItemCost, Price, UnitRatio from
	(select ID,Name,UnitID,ItemCost, Price, 1 UnitRatio from tbl_Item where ID=$code
	Union All
	select ItemID ID,'Alt' Name,UnitID,ItemCost, Price,UnitRatio from tbl_ItemUnit where ItemID=$code and UnitID=$UnitID) a  where ID=$code and UnitID=$UnitID";
	//echo $sql;
	mysql_select_db(DB_NAME,$conndb);
	$result=mysql_query($sql,$conndb);
	//echo mysql_num_rows($result);
	if (mysql_num_rows($result)==1)
	{
		//$row = mysql_fetch_array($result);
		$row2=mysql_fetch_array($result);
	  		$list= array('CNT'=>mysql_num_rows($result),'SQL'=>$sql,'ID'=>$row2["ID"],'Name'=>$row2["Name"],'UnitID'=>$row2["UnitID"],'ItemCost'=>$row2["ItemCost"],'Price'=>$row2["Price"],'UnitRatio'=>$row2["UnitRatio"]);
	  		$c = json_encode($list);
		    echo $c;
	}
 
	else
	{
		$list= array('CNT'=>mysql_num_rows($result),'SQL'=>$sql,'ID'=>0,'Name'=>"No Name Found",'UnitID'=>"0",'ItemCost'=>"0",'Price'=>"0",'UnitRatio'=>"0");
	  	$c = json_encode($list);
		   echo $c;
		  
		}
}
elseif($qtype=="getPDDetailsBy_LedgerID")
{
	$code="";
	$code=$_REQUEST['acode'];
	//$UnitID=$_REQUEST['unitid'];
	$mastertypeid=0;
	//echo $code;
	//$costcategoryid	=7;
	$sql="select m.ID,m.PDID,m.PriceLevelID, PD.Name,PD.AddressID BillingAddressID,B.Display BillingAddress, PD.LocalAddressID ShippingAddressID, S.Display ShippingAddress, PD.ContactNo,PD.PAN, PD.VAT,
PD.BankName, PD.BankBranch, PD.AccountNo, PD.BANKCODE, PD.BankAccountType from tbl_master m
Left Outer Join tbl_PD PD on PD.ID=m.PDID
Left Outer Join tbl_Address B on B.ID=PD.AddressID
Left Outer Join tbl_Address S on S.ID=PD.LocalAddressID
where m.PDID<>0 and m.ID=$code";
	//echo $sql;
	mysql_select_db(DB_NAME,$conndb);
	$result=mysql_query($sql,$conndb);
	//echo mysql_num_rows($result);
	if (mysql_num_rows($result)==1)
	{
		
		//$row = mysql_fetch_array($result);
		//ID, PDID, Name, BillingAddressID, BillingAddress, ShippingAddressID, ShippingAddress, ContactNo, PAN, VAT, BankName, BankBranch, AccountNo, BANKCODE, BankAccountType
		$row2=mysql_fetch_array($result);
		$BALANCE=0;
		
		
		
		
	  		$list= array('CNT'=>mysql_num_rows($result),
						 'BALANCE'=>$BALANCE,
						 'SQL'=>$sql,
						 'PriceLevelID'=>$row2["PriceLevelID"],
						 'ID'=>$row2["ID"],
						 'PDID'=>$row2["PDID"],
						 'Name'=>$row2["Name"],
						 'BillingAddressID'=>$row2["BillingAddressID"],
						 'BillingAddress'=>$row2["BillingAddress"],
						 'ShippingAddressID'=>$row2["ShippingAddressID"],
						 'ShippingAddress'=>$row2["ShippingAddress"],
						 'ContactNo'=>$row2["ContactNo"],
						 'PAN'=>$row2["PAN"],
						 'VAT'=>$row2["VAT"],
						 'BankName'=>$row2["BankName"],
						 'BankBranch'=>$row2["BankBranch"],
						 'AccountNo'=>$row2["AccountNo"],
						 'BANKCODE'=>$row2["BANKCODE"],
						 'BankAccountType'=>$row2["BankAccountType"]);
	  		$c = json_encode($list);
		    echo $c;
	}
 
	else
	{
		$list= array('CNT'=>mysql_num_rows($result),'BALANCE'=>"0",'SQL'=>$sql,'ID'=>0,'PDID'=>$row2["PDID"],
						 'Name'=>"",
					 	'PriceLevelID'=>"0",
						 'BillingAddressID'=>"0",
						 'BillingAddress'=>"0",
						 'ShippingAddressID'=>"0",
						 'ShippingAddress'=>"",
						 'ContactNo'=>"",
						 'PAN'=>"",
						 'VAT'=>"",
						 'BankName'=>"",
						 'BankBranch'=>"",
						 'AccountNo'=>"",
						 'BANKCODE'=>"",
						 'BankAccountType'=>"");
	  	$c = json_encode($list);
		   echo $c;
		  
		}
}
elseif($qtype=="getBalanceBy_LedgerID")
{
	$code="";
	$code=$_REQUEST['acode'];
	//$UnitID=$_REQUEST['unitid'];
	$mastertypeid=0;
	//echo $code;
	//$costcategoryid	=7;
	$sql="select vd.AccountID, SUM(Debit) Debit, SUM(Credit) Credit from tbl_vouchermaster vm
left outer join tbl_voucherdetails vd on vd.VoucherID=vm.ID
where vm.IsEffectLedgerValue=0 and AccountID=$code group by vd.AccountID";
	//echo $sql;
	mysql_select_db(DB_NAME,$conndb);
	$result=mysql_query($sql,$conndb);
	//echo mysql_num_rows($result);
	if (mysql_num_rows($result)==1)
	{
		
		//$row = mysql_fetch_array($result);
		//ID, PDID, Name, BillingAddressID, BillingAddress, ShippingAddressID, ShippingAddress, ContactNo, PAN, VAT, BankName, BankBranch, AccountNo, BANKCODE, BankAccountType
		$row2=mysql_fetch_array($result);
		$BALANCE=0;
			 
		$BALANCE=$row2("Debit")-$row2("Credit");	
		
		
	  		$list= array('CNT'=>mysql_num_rows($result),
						 'BALANCE'=>$BALANCE,
						 'SQL'=>$sql);
	  		$c = json_encode($list);
		    echo $c;
	}
 
	else
	{
		$list= array('CNT'=>mysql_num_rows($result),'BALANCE'=>"0",'SQL'=>$sql );
	  	$c = json_encode($list);
		   echo $c;
		  
		}
}
elseif($qtype=="CALC_METHOD")
{
	$code="";
	$code=$_REQUEST['acode'];
	
	$AccountID=0; $VoucherTypeID=0; $DrCr=0;
	
	
	if (isset($_REQUEST['AccountID'])) {
	$AccountID = $_REQUEST['AccountID'];
	}
	if (isset($_REQUEST['VoucherTypeID'])) {
	$VoucherTypeID = $_REQUEST['VoucherTypeID'];
	}
	if (isset($_REQUEST['DrCr'])) {
	$DrCr = $_REQUEST['DrCr'];
	}
	
	
	//CALC_METHOD
	//echo $DrCr;
//echo $Account->GetCalcMethodID($VoucherTypeID,$DrCr,$AccountID);
	//$UnitID=$_REQUEST['unitid'];
	//$mastertypeid=0;
	//echo $code;
	//$costcategoryid	=7;
	$CalcMethodID=0;
	$Percentage=0;
	require_once("file:///D|/wamp64/www/patho/app/includes/dbase.php");
	$db_handle = new DBController();
	$sql="Select va.CalcMethodID,va.Percentage from tbl_voucheraccounthead va 
	left outer join tbl_master m on m.MID=AcGroupID where  (va.AccountID=$AccountID or m.ID=$AccountID)  and va.VoucherTypeID=$VoucherTypeID and va.DrCr=$DrCr";
	//$sql="Select va.CalcMethodID,va.Percentage from tbl_voucheraccounthead va where  va.ID=73";//   and va.VoucherTypeID=$VoucherTypeID and va.DrCr=$DrCr";
	
		//echo $sql;
	$QResult= $db_handle->runQuery($sql); 
	//print_r($QResult);
		/*	$list= array('CNT'=>sizeof($QResult),'SQL'=>$sql, 'CalcMethodID'=>1,'Percentage'=>'100');
			$c = json_encode($list);
			echo $c;*/
	if (sizeof($QResult)>0)
	{

	//return $QResult[0]["CalcMethodID"];
			// $row2=mysql_fetch_array($QResult);
			$CalcMethodID=$QResult[0]['CalcMethodID'];
			$Percentage=$QResult[0]['Percentage'];
			$list= array('CNT'=>sizeof($QResult),'SQL'=>$sql, 'CalcMethodID'=>$CalcMethodID,'Percentage'=>$Percentage);
			$c = json_encode($list);
			echo $c;
	}
	else  
	{
		$list= array('CNT'=>sizeof($QResult),'SQL'=>$sql, 'CalcMethodID'=>0,'Percentage'=>'0');
			$c = json_encode($list);
			echo $c;
		 
		/*require_once("file:///D|/wamp64/www/patho/app/includes/dbase.php");
		$db_handle = new DBController();
		$sql="Select va.CalcMethodID,va.Percentage from tbl_voucheraccounthead va where  va.AcGroup=(Select MID FROM tbl_master where ID=$AccountID)  and va.VoucherTypeID=$VoucherTypeID and va.DrCr=$DrCr";
			// echo $sql;
		$QResult0= $db_handle->runQuery($sql); 
		if (sizeof($QResult0)>0)
		{
			//return $QResult[0]["CalcMethodID"];
			//$row2=mysql_fetch_array($QResult);
			$CalcMethodID=$QResult0[0]['CalcMethodID'];
			$Percentage=$QResult0[0]['Percentage'];
			$list= array('CNT'=>sizeof($QResult0), 'SQL'=>$sql,'CalcMethodID'=>$CalcMethodID,'Percentage'=>$Percentage);
			$c = json_encode($list);
			echo $c;
		}*/
		 
	} 
	
}


	?>
		 