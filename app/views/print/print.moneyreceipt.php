<?php
if(!isset($_SESSION)){session_start();}
ob_start();
//filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
 require_once("../../models/MOD.VoucherMaster.php");
//require_once '../../models/dbase.php';
//require_once("../models/class.DBfunction.php");
$Handle= new MODVoucherMaster();
//echo $conndb;
//$Handle = new DBController();
	
$id = $_REQUEST['BID'];
$VoucherID = $_REQUEST['BID'];
//$ReportID = $_REQUEST['RID'];
$CreatedBy=$_SESSION['loginid'];
$ModifiedBy=$_SESSION['loginid'];

	
function CheckInvoice($VoucherID,$PatientID)
{
	$Handle= new MODVoucherMaster();
	$sql="SELECT  c.ID from tbl_cart c  
			left  outer join tbl_vouchermaster vm on vm.CartID=c.ID
	 where vm.ID=$VoucherID";
	// echo $sql.'<br>';
	$CartInfo= $Handle->runQuery($sql);
	if(count($CartInfo,0)>0)
	{
		$CartID=$CartInfo[0]['ID'];
		$sql="SELECT * from tbl_cartdetails where CartID=$CartID";
		//  echo $sql.'<br>';
		$CartDetailsInfo= $Handle->runQuery($sql);
		//	 echo $sql.'<br>';
		//	 print_r($CartDetailsInfo);
		?>
        <style>
            .bdr > td
			{
				border-bottom:1px solid rgba(30,30,30,1.00);
				}
			 .nobdr > td
			{
				border:none!important;
				}	
			.bdr-top > td
			{
				border-top:2px solid rgba(0,0,0,1.00);
				border-bottom:none!important;
				}
				p.bodyText {font-family:verdana, arial, sans-serif;}
            </style>
		<table style="width:95%;border-collapse:collapse;font-size:12px;" >
        <tr class="bdr" >
            <td style="width:60px;">SL NO</td>
            <td style="width:250px;text-align:left!important;">Test</td>
            <td  style="width:90px;text-align:right">Rate(INR)</td>
            <td style="width:90px;text-align:center">Quantity</td>
            <td style="width:80px;text-align:right">Discount(%)</td>
            <td style="width:120px;text-align:right">Amount(INR)</td>
            </tr>
        <?php
		$Total=0;
		$Balance=0;
		$CancellationAmount=0;
		$Paid=0;
		$CashTransaction=0;
		
		for($x=0; $x<count($CartDetailsInfo,0); $x++)
		{
			$CartDetailsID=$CartDetailsInfo[$x]['ID'];
			$Quantity=$CartDetailsInfo[$x]['BillingQuantity'];
			$Rate=$CartDetailsInfo[$x]['PrimaryRate'];
			$Discount=$CartDetailsInfo[$x]['DiscountPercentage'];
			$Amount=$CartDetailsInfo[$x]['Amount'];
			$Total=$Total+$Amount;
			//$ReportingTypeID=$CartDetailsInfo[$x]['ReportingTypeID'];
			$ItemID=$CartDetailsInfo[$x]['ItemID'];
			// echo $ReportingTypeID.'<br>';
			
			
			?>
		 
            
					
            <tr style="border-bottom:1px solid rgba(0,0,0,1.00);"><td style="text-align:center;"><?php echo $x+1; ?></td><td 
            style="padding-left:5px; text-align:left; font-weight:bold; 
            <?php if($CartDetailsInfo[$x]['IsCancelled']>0)
			{
				?>
                text-decoration:line-through;
                <?php	
			}
            ?>
            "><?php echo $Handle->ItemNameByID($ItemID);?></td>
            <td style="text-align:right"><?php echo number_format($Rate,2,'.','');?></td>
            <td style="text-align:center"><?php echo $Quantity;?></td>
            <td style="text-align:right"><?php echo $Discount;?></td>
            <td style="text-align:right"><?php echo number_format($Amount,2,'.','');?></td>
            
            </tr>
            
<?php 
		}
		   
	// $Balance=$Balance+$Total;
	
		?>
        
        
        <!--tr class="bdr bdr-top">
					<td colspan="3" style="text-align:left;"></td>
					<td></td>
					<td style="text-align:right">Sub Total : </td>
					<td style="text-align:right"><?php echo number_format($Total,2,'.','');?></td>
				</tr-->
                
            <?php
            
			   $sql="select vm.ID VoucherID,vm.AccountsNature, vm.VoucherDate, vm.VoucherNo,m.Printname Name,vd.AccountID, 
		vd.Debit,vd.Credit, mt.Debit DEffect, mt.Credit CEffect 
		 from tbl_vouchermaster vm
left outer join tbl_voucherdetails vd on vd.VoucherID=vm.ID 
left outer join tbl_master m on m.ID=vd.AccountID
left outer join tbl_master mt on mt.ID=m.MasterGroupID
where  (vm.ID=".$VoucherID." or vm.RefVoucherID=".$VoucherID.") ";
	      // echo $sql;
	   $getAccountinfo = $Handle->runQuery($sql);
	   $Debit=0;$Credit=0;$Amount=0;$ReceivableAmount=0;
	   $NetReceipt=0;
	   for($a=0;$a<count($getAccountinfo,0);$a++)
	   {
			$PrintName=$getAccountinfo[$a]['Name'];
			if($getAccountinfo[$a]['AccountID']==$PatientID)
			{
				$ReceivableAmount=$getAccountinfo[$a]['Credit']+$getAccountinfo[$a]['Debit'];
			}
			else
			{
				$Amount=($getAccountinfo[$a]['Credit']*$getAccountinfo[$a]['CEffect'])+($getAccountinfo[$a]['Debit']*$getAccountinfo[$a]['DEffect']);
				$sign="+";
				$Bal=0;
				if($getAccountinfo[$a]['Debit']==0)
				{
					$Bal=$getAccountinfo[$a]['Credit']*$getAccountinfo[$a]['CEffect'];
					//echo $Bal.'C<br>';
					if($Bal>0){$Balance=$Balance+$Bal;}
					else{$Balance=$Balance-$Bal;}
					$sign="+";
					if($getAccountinfo[$a]['AccountID']==1001){$PrintName='Refund';$NetReceipt=$NetReceipt+$Bal;}
					if($getAccountinfo[$a]['AccountID']==1021){$PrintName='Discount Return';}
				}
				elseif($getAccountinfo[$a]['Credit']==0)
				{
					$Bal=$getAccountinfo[$a]['Debit']*$getAccountinfo[$a]['DEffect'];
					//echo $Bal.'D<br>';
					if($Bal>0){$Balance=$Balance-$Bal;}
					else{$Balance=$Balance+$Bal;}
					$sign="-";
					if($getAccountinfo[$a]['AccountID']==1001){$PrintName='Cash Receipt';$NetReceipt=$NetReceipt+$Bal;}
				}
				?>
                <tr class=" ">
            	    <td colspan="2" style="text-align:left;"> <?php //echo "&nbsp;&nbsp;&nbsp;Rupees. " . $Handle->convert_number($Balance). " only";?></td>
                    
                    <td colspan="2" style="text-align:right"><?php echo $PrintName; ?> :  </td>
                    <td><!--(<?php echo $sign; ?>)--></td>
                     
           <td style="text-align:right"><?php echo number_format(abs($Amount),2,'.','');?></td></tr>
				<?php
        	}
    	}
			    
            
   if($Balance>0)
	{
			   ?><tr>
               <td colspan="4" style="text-align:right">Due : </td><td></td><td style="text-align:right">
			   <?php echo abs($Balance); ?></td>
               </tr>
           <?php  
	}
	elseif($Balance<0)
	{
	?>
    	<tr>
        <td colspan="4" style="text-align:right">To Be Refund : </td><td></td>
        <td style="text-align:right"><?php echo abs($Balance); ?></td>
		</tr>
    <?php  
	}
	?>
	 
        <tr style="font-weight:bold; border-top:1px solid rgba(0,0,0,1.00);">
        <td colspan="3" style="text-align:left;"> <?php echo "&nbsp;&nbsp;&nbsp;Rupees. " . $Handle->convert_number($NetReceipt). " only";?></td>
             <td style="text-align:right">Net Receipt : </td><td></td>
             <td style="text-align:right"><?php echo abs($NetReceipt).'.00'; ?></span></td>
               </tr>
   	</table>
        <?php
	}
}	
 
function CheckReportExistance($ReportID)
{
	$db_handle = new DBController();
	$sql="SELECT  ID from tbl_testreportmaster where ID=$ReportID";
	 //echo $sql.'<br>';
	$ReportExistanceInfo= $Handle->runQuery($sql);
	if(count($ReportExistanceInfo,0)>0)
	{
		$TestReportID=$ReportExistanceInfo[0]['ID'];
		$sql="SELECT * from tbl_testreportdetails where TestReportID=$TestReportID";
		 //echo $sql.'<br>';
		$ReportDetailsInfo= $Handle->runQuery($sql);
		//	 echo $sql.'<br>';
		//	 print_r($ReportDetailsInfo);
		echo '<table style="width:80%;border-collapse:collapse;" >';
		for($x=0; $x<count($ReportDetailsInfo,0); $x++)
		{
			$ReportDetailsID=$ReportDetailsInfo[$x]['ID'];
			$TestValue=$ReportDetailsInfo[$x]['TestValue'];
			$ReportingTypeID=$ReportDetailsInfo[$x]['ReportingTypeID'];
			$ItemID=$ReportDetailsInfo[$x]['ItemID'];
			// echo $ReportingTypeID.'<br>';
			
			if($ReportingTypeID==1)
			{ ?>
            <tr><td colspan="5" style="text-align:center!important; font-size:18px; text-decoration:underline;"><?php echo ItemName($ItemID);?></td></tr> <?php 
			}
			if($ReportingTypeID==2){ ?>
            <tr><td colspan="5" style="text-align:center; font-size:18px; text-decoration:underline;"><?php echo ItemName($ItemID);?></td></tr> <?php 
			}
			if($ReportingTypeID==3){ ?>
            <tr><td colspan="5" style="text-align:center; font-size:18px; text-decoration:underline;"><?php echo ItemName($ItemID);?></td></tr> <?php 
			}
			
			if($ReportingTypeID==4)
			{ ?>
            <tr><td colspan="5" style="text-align:left;  font-weight:bold;font-size:18px; text-decoration:underline;"><?php echo ItemName($ItemID);?></td></tr> <?php 
			}
			if($ReportingTypeID==5)
						{ ?>
            <tr><td></td><td colspan="5" style="text-align:center; font-weight:bold; font-size:16px; text-decoration:underline;">REPORT ON <?php echo ItemName($ItemID);?></td></tr> 
			<tr class="bdr"><td></td><td colspan="2" style="text-align:left!important;" >Primary Specimen : <?php echo Specimen($ItemID);?></td><td colspan="3" style="text-align:center; font-weight:bold; font-size:16px; text-decoration:underline;"></td></tr>
            <style>
            .bdr > td
			{
				border-bottom:2px solid rgba(0,0,0,1.00);
				}
            </style>
            <tr class="bdr" >
            <td></td><td style="text-align:left!important;">Test</td><td>Result</td><td>Unit</td><td>Range</td><td>Method</td>
            </tr>
			<?php 
			}

			if($ReportingTypeID==6)
			{ ?>
            <tr><td></td><td colspan="4" style="padding-left:5px; padding-top:10px; text-align:left; font-weight:bold; font-size:18px;"><?php echo ItemName($ItemID);?></td></tr>
            
             <?php 
			}
			if($ReportingTypeID==7)
			{ ?>
            <tr><td style="width:10%;"></td><td  style="width:30%; text-align:left;padding-left:10px;"><?php echo ItemName($ItemID);?></td>
            <td style="width:10%; "><?php echo $TestValue;?></td><td style="width:15%;"><?php echo ItemUnit($ItemID);?></td><td style="width:20%;"><?php echo ItemRange($ItemID);?></td><td style="width:20%;"><?php echo ItemMethod($ItemID); ?></td></tr> 
			<?php 
			}
			if($ReportingTypeID==8){ ?><tr><td><?php echo ItemName($ItemID);?></td><td>A</td></tr> <?php }
			if($ReportingTypeID==9){ ?><tr><td><?php echo ItemName($ItemID);?></td><td>A</td></tr> <?php }
			
		/*	1, 'Report Title', ''
2, 'Report Group', ''
3, 'Report Footer', ''
4, 'Report Header', ''
5, 'Group', ''
6, 'Sub-Group', ''
7, 'Details Singleline with VALUE + RANGE + UNIT+ METHOD', ''
8, 'Details Multiline with VALUE + RANGE + UNIT+ METHOD', ''
9, 'Details Single line with statement', ''
10, 'Details Multiline with statement', ''*/
		}
		echo '</table>';
	}
}
//$company = $Handle->runQuery("SELECT * FROM tbl_master WHERE ID=1");
//$companyname=$Handle->runQuery("SELECT * FROM tbl_master WHERE ID=1");
 $companyname=$Handle->QueryAccountName(1);

$CompantPDID=$Handle->QueryPDID(1);

//echo $CompantPDID;
$CompanyAddressID=$Handle->QueryAddressID($CompantPDID);
$companyconatct=$Handle->QueryContact($CompantPDID);
//$companyaddressQuery= $Handle->runQuery("SELECT a.Display FROM  tbl_pd p left outer join tbl_address a on a.ID=p.AddressID WHERE P.ID='".$CompantPDID."'");
$companyaddress=$Handle->QueryAddress($CompanyAddressID);

$voucherdetails = $Handle->runQuery("SELECT * FROM tbl_vouchermaster WHERE ID='".$VoucherID."'");
//$transactionid=$voucherdetails[0]["transactionid"];
$VoucherID=$voucherdetails[0]["VoucherNo"];
$VoucherDate=$voucherdetails[0]["VoucherDate"];
//$amount=$voucherdetails[0]["Amount"];
 $date = DateTime::createFromFormat('Y-m-d', $VoucherDate);
 //echo $_POST['VoucherDate'];
 //cho $date;
 $VoucherDate=date_format($date,"d-m-Y");
 
 $PatientID=$voucherdetails[0]["PatientID"];
 $RefDoctorID=$voucherdetails[0]["DoctorID"];
 $RefDoctor=$Handle->QueryAccountName($RefDoctorID);

//echo   $ReportDate;
//echo $VoucherDate;
/*$itemid=$voucherdetails[0]["ItemID"];
$customerid=$voucherdetails[0]["CustomerID"];
$ItemDetails = $Handle->runQuery("SELECT * FROM tbl_item WHERE ID='".$itemid."'");
$item=$ItemDetails[0]["Alias"];
$itemduration=$ItemDetails[0]["Description"];*/
//echo $item;
//$PatientByID = $Handle->runQuery("SELECT * FROM tbl_master WHERE ID='".$PatientID."'");
$PatientPDID=$Handle->QueryPDID($PatientID);
$PatientName=$Handle->QueryAccountName($PatientID);
//$PatientDetailsByPDID = $Handle->runQuery("SELECT * FROM tbl_pd WHERE ID='".$PatientPDID."'");
$PatientAddressID=$Handle->QueryAddressID($PatientPDID);

//$PatientAddressResult= $Handle->runQuery("SELECT * FROM tbl_address WHERE ID='".$PatientAddressID."'");
$PatientAddress=$Handle->QueryAddress($Handle->QueryAddressID($PatientPDID));
$PatientGender=$Handle->QueryGender($PatientPDID);
$PatientAge=$Handle->QueryAge($PatientPDID);
$PatientContact=$Handle->QueryContact($PatientPDID);
$CreatedByName=$Handle->QueryUserName($voucherdetails[0]["CreatedBy"]);

//echo $customeraddress;
?>
 
<html>
<head>
 
<title>Money Receipt</title>
 
 
<style>
body {
  background: rgb(204,204,204); 
  font-family:verdana, arial, sans-serif;
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  /* margin-bottom: 0.5cm; 
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);*/
}
footer {
 
  color: #f00;
  text-align: center;
   position: absolute;
    bottom: 0;
	width:100%;
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
	position:absolute;
  }
    p.bodyText {font-family:verdana, arial, sans-serif;/*font-family:georgia, times, serif;*/}
		 
			@page:first{
				background-color:red;
				}
			@page chapter{
				 
			}
			section[data-type="chapter"]{
				page:chapter;
			}
	footer {
    position: realtive;
    bottom:25;
	right:10;
  }
	 
}
@media screen {
         p.bodyText {font-family:verdana, arial, sans-serif;}
 
		 .main-body{
	/* overflow-y: scroll;*/
 
  
	}
		footer {
    position: relative;
    bottom: -180;
  }
 
 
}

 @media screen, print {
         p.bodyText {font-size:10pt}
		 .main-body{
		   margin:0 auto; 
			/*width:100%;*/
		 position:relative;
		  top: 25%;
		   left: 50%;
		   transform: translate(-50%, -50%);
		  border:0px solid rgba(127,127,127,1.00);
		}
	
      }
 
 
</style>

</head>
<body>
<page size="A5" layout="landscape">
 <span style="position:fixed; display:flex; "><img src="../libs/images/test.png" alt="" style="width:50px; height:50px; top:-10; left:-10;"></span>
 <header id="pageHeader" style="text-align:center;">
 
    <table id="example"  class="table"    cellspacing="0" width="90%" style="margin-top:5px; margin-left:5%;">
 <thead>
 		<tr>
             
            <th style="width:100%; text-align:center; font-size:18px; font-weight:bold;"><?php echo $companyname;?></th>
        </tr>
         <tr>
        	<th   style="width:100%; text-align:center; font-size:10px; " ><?php echo $companyaddress; ?>, Contact: <?php echo $companyconatct; ?></th>
        </tr>
        <!--tr>
        	<th  style="width:100%; text-align:center; font-size:10px; " ><?php //echo $companytagline; ?></th>
        </tr-->
 </thead>
 </table>
 
 <table class="table"    cellspacing="0" width="90%" style="margin-top:30px; margin-left:5%; font-size:12px;">
<tbody>
 <tr >
   <td width="13%">Supp/Vendor</td>
   <td width="2%" align="center">:</td>
   <td width="53%" align="left"><?php echo $PatientName.' ( '.$PatientGender.' | '.$PatientAge.' )'; ?></td>
   <td width="15%" align="left">Voucher No. </td>
   <td width="3%" align="center">:</td>
   <td width="14%"><?php echo $VoucherID; ?></td>
 </tr>
<tr >
  <td>ADDRESS </td>
  <td align="center">:</td>
  <td align="left"><?php echo $PatientAddress; ?></td>
  <td align="left">Booking Date </td>
  <td align="center">:</td>
  <td><?php echo $VoucherDate; ?></td>
</tr>
<tr >
  <td>Contact No.</td>
  <td align="center">:</td>
  <td align="left"><?php echo $PatientContact; ?></td>
  <td align="left"></td>
  <td align="center"></td>
  <td><?php //echo $RefDoctor; ?><?php //echo $ReportDate; ?></td>
</tr>
<tr >
  <td>Reffered By</td>
  <td align="center">:</td>
  <td align="left"><?php echo $RefDoctor; ?></td>
  <td align="right"> </td>
  <td align="center"></td>
  <td><?php //echo $ReportDate; ?></td>
</tr>
 
 
</tbody>
</table>
 
    </header>

<div  class="main-body" style="padding-left:5%; text-align:center; font-size:12px;">
<?php CheckInvoice($VoucherID,$PatientID);?></div>
<footer>
<table style="width:100%;font-size:12px;">
   <tfoot>
   <tr>
   <th style="padding-left:20px;">
   Prepared By: <?php echo $CreatedByName; ?>
   </th>
   </tr>
<tr>
	<th style="text-align:center; border-top:1px solid rgba(0,0,0,1.00); font-size:11px;">
    <p>"This is computer generated invoice no signature required."<br>
    "If you take an X-ray plate, the X-ray plate will be submitted for report within 3 days"<br>
"The authorities are not responsible for not receiving the report within 15 days"</p>

    </th>
</tr>

<!--tr>
     
    <th   style="width:100%; text-align:center; font-size:14px; font-weight:bold;"><?php echo $companyname;?></th>
</tr-->
       
</tfoot>      
</table>
 
<div class="numberOfPages" style="text-align:right; color:rgba(0,0,0,1.00); font-size:10px;">

 
</div>

</footer>
 
</page>
<script>
 
document.body.style.zoom = "100%";
 
// print();
 </script>
</body>
</html>