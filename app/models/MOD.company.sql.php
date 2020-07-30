<?php
if (!isset($_SESSION)) {session_start();}
error_reporting(E_ALL && ~E_NOTICE);
//echo "BLANK";
require_once("dbase.php");
$db_handle = new DBController();
 // echo 'Happy Update';
 //include_once("../header.php");
	//echo "fafaf";
	//echo ROOT_PATH;
//	include_once($page);

if($_REQUEST['Operation'] == 'Update')
{
  
$ID=$_REQUEST['ID'];
$PDID=$_REQUEST['PDID'];	
 $Name=$_REQUEST['name'];
 $AddressID=$_REQUEST['AddressID'];
 $LocalAddressID=$_REQUEST['AddressID'];
 $ContactNo=$_REQUEST['ContactNo'];
 $TEL=$_REQUEST['tel'];
 $MAP=$_REQUEST['address'];
 $DOJ=$_REQUEST['regdate'];
 $Email=$_REQUEST['email'];
 $Website=$_REQUEST['website'];
 $Country=$_REQUEST['country'];
 $ModifyTime=date("Y-m-d H:i:s"); 
 $ModifiedBy=$_SESSION['UserID'];
// $Description=$_REQUEST['Operation'];
 $TagLine=$_REQUEST['tagline'];
 $State=$_REQUEST['state'];
 $PAN=$_REQUEST['pan'];
 $GST=$_REQUEST['GST'];
 $CIN=$_REQUEST['CIN'];
 $TAN=$_REQUEST['TAN'];
 $VAT=$_REQUEST['VAT'];
 $CST=$_REQUEST['CST'];
 $TIN=$_REQUEST['TIN'];
 $sql="Update tbl_address set Display='$MAP' where ID=$AddressID";
 // echo $sql;
 $getinfo = $db_handle->insertQuery($sql);
 $sql="Update tbl_pd set Name='$Name', AddressID=$AddressID, LocalAddressID=$LocalAddressID, ContactNo='$ContactNo', TEL='$TEL', MAP='$MAP', DOJ='$DOJ', RegisterDate ='$DOJ', Email='$Email', Website='$Website', Country='$Country', ModifyTime='$ModifyTime',ModifiedBy=$ModifiedBy, TagLine='$TagLine', State='$State', PAN='$PAN', GST='$GST', TAN='$TAN', VAT='$VAT', CST='$CST', TIN='$TIN', CIN='$CIN' where ID=$PDID";
// echo $sql;
 $getinfo = $db_handle->insertQuery($sql);
$sql="Update tbl_master set CODE='C00001', Name='$Name', Alias='$Name', PrintName='$Name', Description='$TagLine', MasterTypeID=1, DrCr=0, Debit=1, Credit=1, IsMaster=1, IsMasterGroup=1, CostCategoryID=0, MasterGroupID=1, DesignationID=0, PersonOrganisationID=$PDID, AllocateRevenueItems=1, AllocateNonRevenueItems=1, AccountID=1, IsActive=1, IsBehaveAsSubLedger=0, IsAffectGrossProfit=1, SORT=1, CreditPeriod=100000, CreditLimit=0, MaintainBillByBill=1, TaxClassID=0, TaxTypeID=0, Percentage=100, IsCalculative=0, OpeningBalance=0, ClosingBalance=0, Expense=0, Income=0, NetDebitCreditBalanceForReporting=0, UseForCalculation=0, AllocationMethodID=0, ModifiedBy=$ModifiedBy,  ModifyTime='$ModifyTime', PDID=$PDID where ID=$ID";
 //echo $sql;
 $getinfo = $db_handle->insertQuery($sql);
// echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));
echo   "<div style='text-align:center;'><div>........................................</div>";
echo   "<div style='font-size:24px;'>ALL INFORMATION SAVED SUCCESSFULLY</div>";
?>
<div><a class="btn btn-black " onClick="window.history.back();">GET BACK TO COMPANY INFORMATION PAGE..</a></div>
<script>
window.history.back();
</script>
</div>
<?php
 $output = var_export($_GET, true);
  //  error_log($output, 0, "../file.log");
}
else
if($_REQUEST['Operation'] == "Insert")
{
  //Do insert here
}
//	include_once("../footer.php");
	
	
	function getAddressID($address)
	{
		
		}
?>
<script>
function redirectBypageVal(val01,val02){
	//clearsession('journal_master');
	//clearsession('journal_item');
	var http = location.protocol;
//alert(http);
var slashes = http.concat("//");
//alert(slashes);
var host = slashes.concat(window.location.hostname);
//alert(host);
var pathname=host.concat(window.location.pathname);
//alert(pathname);
var redirectlocation=pathname.concat("?p="+val01+"&mode="+val02);
//alert(redirectlocation);
//alert(redirectlocation);
window.location=redirectlocation;
}
</script>