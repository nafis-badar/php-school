<?php
if (!isset($_SESSION)) {session_start();}
//error_reporting(E_ALL && ~E_NOTICE);
//require_once("includes/functions.php");

$sl_no=0;
//global $mode;
//$mode=0;
//var_dump($_GET);
//echo $_GET['mode'];
if (isset($_GET['mode'])) {
//	global $mode;
$mode = $_GET['mode'];
}
else
{$mode =0;
//echo $mode."P";
	}
	
if ($mode!=0){
	global $mode;
	//echo $mode;
	//echo "1";
unset ($_SESSION["journal_master"]);
	unset ($_SESSION["journal_item"]);
	}
	$VoucherTypeID=5;
?>
<div>
<!--script src="js/jquery.min.js" type="text/javascript"></script-->

<script >
function getDrCr()
{
	var dramount=document.getElementById("DrAmount").value;
	var cramount=document.getElementById("CrAmount").value;
	var getvalue=document.getElementById("DebitCredit").value;
	document.getElementById("DrAmount").disabled=false;
	document.getElementById("CrAmount").disabled=false;
	document.getElementById("DrAmount").style.visibility="visible";
	document.getElementById("CrAmount").style.visibility="hidden";
	if (getvalue==1)
	{
		document.getElementById("DrAmount").disabled=false;
		document.getElementById("DrAmount").style.visibility="visible";
		document.getElementById("CrAmount").disabled=true;
		document.getElementById("CrAmount").style.visibility="hidden";
	}
	else if (getvalue==-1)
	{
			document.getElementById("DrAmount").disabled=true;
			document.getElementById("CrAmount").disabled=false;	
			document.getElementById("DrAmount").style.visibility="hidden";
			document.getElementById("CrAmount").style.visibility="visible";
	}
}
function addtojournalmaster()
{
	
		var id=1;
		
		var VoucherNo= $("#VoucherNo").val();
			
		var VoucherID=$("#VoucherID").val();
		
		var VoucherDate= $("#VoucherDate").val();
		var VoucherTypeID= 5;
		var VoucherCategoryID=7;
		//alert(VoucherDate);
		var pg="modules/sess.journalmaster.add.php";
		var param={id:id,VoucherNo:VoucherNo,VoucherID:VoucherID,VoucherDate:VoucherDate,VoucherTypeID:VoucherTypeID,VoucherCategoryID:VoucherCategoryID};
		$.post(pg,param,function(data){});
}
</script>

<?php
	require_once("app/models/dbase.php");
	$Handle = new DBController();
	
	if(!isset($_SESSION['journal_item']))
	{
		$_SESSION['journal_item'] = array();
	}
	if(!isset($_SESSION['journal_master']))
	{
		$_SESSION['journal_master'] = array();
	}
	
	if(isset($_SESSION['journal_master']))
	{
		//echo $mode;
		$_SESSION['journal_master'] = array();
		$sl_no=1;
		$VoucherNo="New";
		$VoucherID=$mode;
		$VoucherDate=date('d-m-Y');
		$VoucherTypeID=5;
		$VoucherCategoryID=7;
		//echo $mode;
		if ($mode!=0)
		{
		//global $mode;
		//	echo $mode."ABC";
			$sql="Select ID,VoucherID,VoucherDate,VoucherTypeID,VoucherCategoryID from tbl_vouchermaster where id=$VoucherID";
			//echo $sql;
			$getjournalmasterdetails = $Handle->runQuery($sql);
			
			foreach ($getjournalmasterdetails as $Item)
			{
				$sl_no=1;
				$VoucherNo=$Item['VoucherID'];
				$VoucherID=$Item['ID'];
				$VoucherDate=$Item['VoucherDate'];
				$VoucherTypeID=$Item['VoucherTypeID'];
				$VoucherCategoryID=$Item['VoucherCategoryID'];
				$journalMasterArray = array($sl_no=>array('sl_no'=>$sl_no, 'VoucherNo'=>$VoucherNo,'VoucherID'=>$VoucherID,'VoucherDate'=>$VoucherDate,
										'VoucherTypeID'=>$VoucherTypeID,'VoucherCategoryID'=>$VoucherCategoryID ));
					 
					if(!empty($_SESSION["journal_master"]))
					{
						unset ($_SESSION["journal_master"][0]);
						$_SESSION["journal_master"] = array_merge($_SESSION["journal_master"],$journalMasterArray);
					}
					else 
					{
						$_SESSION["journal_master"] = array_merge($_SESSION["journal_master"],$journalMasterArray);
						//$_SESSION["journal_master"] = $journalArray;
					}
			}
			
		}
		else
		{
			$journalMasterArray = array($sl_no=>array('sl_no'=>$sl_no, 'VoucherNo'=>$VoucherNo,'VoucherID'=>$VoucherID,'VoucherDate'=>$VoucherDate,
										'VoucherTypeID'=>$VoucherTypeID,'VoucherCategoryID'=>$VoucherCategoryID ));
			if(!empty($_SESSION["journal_master"]))
			{
				unset ($_SESSION["journal_master"][0]);
				$_SESSION["journal_master"] = array_merge($_SESSION["journal_master"],$journalMasterArray);
			}
			else 
			{
				$_SESSION["journal_master"] = array_merge($_SESSION["journal_master"],$journalMasterArray);
				//$_SESSION["journal_master"] = $journalArray;
			}
		}
	}
	
	if(isset($_SESSION['journal_item']))
	{
	 //   $_SESSION['journal_item'] = array();
	 //global $mode;
	//$vid=$mode;
		if ($mode!=0)
		{
			//
			//echo $vid;
			$sql="Select ID,EntryIndex,VoucherID,Debit,AccountID,Credit,DrCr from tbl_voucherdetails where VoucherID=$VoucherID";
			//echo $sql.".....";
			$getjournaldetails = $Handle->runQuery($sql);
			//echo "ERROR";
			//$countrows= sizeof($getjournaldetails);
			foreach ($getjournaldetails as $Item){
				$entryid=$Item['ID'];
				$entryindex=$Item['EntryIndex'];
				$drcr= $Item['DrCr'];
				$accountid= $Item['AccountID'];
				$dramount=$Item['Debit'];
				$cramount=$Item['Credit'];
			 
				$iseditable=0;
				 
				$isdeleted = 0;
	  
				$sl_no=$entryindex;
					$journalArray = array($sl_no=>array('sl_no'=>$sl_no, 'drcr'=>$drcr,'accountid'=>$accountid,'dramount'=>$dramount,'cramount'=>$cramount,'iseditable'=>$iseditable,'isdeleted'=>$isdeleted));
				if(!empty($_SESSION["journal_item"])) {
						
						$_SESSION["journal_item"] = array_merge($_SESSION["journal_item"],$journalArray);
					
				} else {
					$_SESSION["journal_item"] = array_merge($_SESSION["journal_item"],$journalArray);
					//$_SESSION["journal_item"] = $journalArray;
				}
				}// end of each loop
	
			}
	}
//echo $mode;
$sl_no=sizeof($_SESSION['journal_item']);
function showpanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount)
{
	require_once("app/models/dbase.php");
	$Handle = new DBController();
	?>
	 <table class="mytable">
     	<tr>
            <td style="width:5%;     " >
              <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) inset;"><?php echo  $a; ?></span>
            </td>
            <td style="width:5%;     " >
                <span style=" padding-left:10px; text-align:left;" >
                    <label>
                        <?php   
                        if ($drcr==1)
                        {
                            echo 'DR'; 
                        }
                        else if ($drcr==-1)
                        {
                            echo '<label style=" color:rgba(50,50,50,1.00);">CR</label>'; 
                        } 
                        ?>
                     </label> 
                </span>
            </td>
            <td style="width:50%;     " >
                <span  style=" padding-left:40px; text-align:left " >
                    <?php 
                    $accid=$accountid;
                    $getaccountinfo = $Handle->runQuery("SELECT * FROM tbl_master where id=$accid limit 1");
                    if ($drcr==1)
                    {
                        echo  '<label  style=" ">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    else if ($drcr==-1)
                    {
                        echo  '<label  style=" padding-left:20px; color:rgba(50,50,50,1.00);">'.$getaccountinfo[0]["Name"].' </label> '; 
                    } 
                    ?>
                </span>
            </td>
            <td style="width:15%; ">
                <span class="  pull-right " style="padding-right:40px;" >
                   <?php
                    if ($drcr==1)
                    {
                        echo  '<div>'.sprintf("%0.2f", $dramount).'</div>'; 
                    }
                    else if ($drcr==-1)
                    {
                        echo  '<div  style="color:transparent;">'.sprintf("%0.2f", $dramount).'</div>'; 
                    }
                    ?>
                </span>    
            </td>
            <td style="width:15%; ">
                <span class="  pull-right " style="padding-right:40px;  color:rgba(50,50,50,1.00);" >
                    <?php
                    if ($drcr==1)
                    {
                        echo  '<div style="color:transparent;">'.sprintf("%0.2f", $cramount).'</div>'; 
                    }
                    else if ($drcr==-1)
                    {
                        echo  '<div >'.sprintf("%0.2f", $cramount).'</div>'; 
                    }
                    ?>
                </span> 
            </td>
            <td style="width:10%; ">
                <span class="btn glyphicon glyphicon-edit" style="color:rgba(195,255,116,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onclick="enableeditmode(<?php echo $sl_no; ?>);"></span>
                <span class="btn glyphicon glyphicon-remove-circle"  style="color:rgba(200,0,0,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"
                onclick="removeentry(<?php echo $sl_no; ?>);"></span>
            </td>
		</tr>
	</table>
        <?php
}

function entrypanel($mode,$a,$sl_no,$VoucherTypeID)
{
	//echo $mode." ".$a." ".$sl_no."<br>";
	//global $VoucherTypeID;
	//echo "p".$VoucherTypeID."x";
	  require_once("app/models/dbase.php");
	//global $Handle;
	 $Handle = new DBController();
	
	?>
    <table class="mytable">
    	<tr>
        
        	<td style="width:5%; border-right:1px  ridge rgba(215,106,108,1.00);">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) outset; float:left;">
                <?php echo ($a+1); ?>
      			</span>
            </td>
            <td style="width:5%;">
				<div style="   text-align:left; " >
                    <select style=" float:left; width:100%; padding:0px; min-width:50px; 
                    background-color:rgba(86,86,86,0.76); color:rgba(50,50,50,1.00); font-size:14px;" 
                    name="DebitCredit" id="DebitCredit" class="input-sm" 
                    onChange="getDrCr();" onBlur="getDrCr();" autofocus >
                        <option value="1" >Dr</option>
                        <option value="-1" >Cr</option>
                    </select> 
				</div>
            </td>
            <td style="width:50%;">
                 <div>  
    <div>
       
      <div>
        <select name="AccountID" id="AccountID" class="form-control" style="width:100%;" >
          <option value="">Please select...</option>
          <?php
 $sql="Select s.AcID ID,s.Name from (
SELECT va.ID, va.AccountTypeID, va.DrCr, va.CalculationMethodID, va.Percentage, va.AcGroupID, va.AccountID, va.IsPermanent, va.VoucherTypeID, va.IsEditable, va.IsDeleted,m.Name,m.ID AcID,m.MID FROM tbl_voucheraccount va
left outer join tbl_master m on m.MID=va.AcGroupID
where va.VoucherTypeID=$VoucherTypeID and va.AccountTypeID=2 and va.AcGroupID!=0
union All
SELECT va.ID, va.AccountTypeID, va.DrCr, va.CalculationMethodID, va.Percentage, va.AcGroupID, va.AccountID, va.IsPermanent, va.VoucherTypeID, va.IsEditable, va.IsDeleted,m.Name,m.ID AcID,m.MID FROM tbl_voucheraccount va
left outer join tbl_master m on m.ID=va.AccountID
where va.VoucherTypeID=$VoucherTypeID  and va.AccountID!=0) s order by ID";
//echo $sql;
$LedgerInfo = $Handle->runQuery($sql);
 
for ($ig = 0; $ig < count($LedgerInfo,0); $ig++) {
       ?>
          <option value="<?php echo $LedgerInfo[$ig]['ID'];?>" ><?php echo $LedgerInfo[$ig]['Name'];?></option>
          <?php } ?>
        </select>
        
      </div>
    </div>
    <div class="col-md-4">
    <!--input type="button" class="btn " onClick="setWhichEntry(2);" style="padding:3px 20px;" value="Confirm"-->
    </div>
 </div>
 
 
       		</td>
            <td style="width:15%;">
            	<div   style="padding-right:20px;  ">  
                	<input type="text"  class="input-sm  col-lg-12" id="DrAmount" value=""   
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00);
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00);" 
                    onKeyPress="addtojournal(<?php echo ($sl_no+1); ?>,event);">
                </div>
            </td>
            <td style="width:15%;">
            	<div   style="padding-right:20px;" >  
                	<input type="text" class="input-sm col-lg-12" id="CrAmount"  value=""  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="addtojournal(<?php echo ($sl_no+1); ?>,event);">
                </div>
            </td>
            <td style="width:10%; ">
        		<span class="glyphicon glyphicon-ok-circle"  
                style="color:rgba(121,255,116,1.00); 
                border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"></span>
        	</td>
    	</tr>
	</table>
<?php 
}
function editpanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount,$isdeleted,$iseditable)
{
	require_once("includes/dbase.php");
	$Handle = new DBController();
	?>
    <table class="mytable">
    	<tr>
        	<td style="width:5%;">
                <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) inset; float:left;">
           			<?php echo $a; ?>
				</span>
            </td>
            <td style="width:5%;">
            	<div style="   text-align:left; " >
                	<select style=" float:left; width:100%; padding:0px; min-width:50px; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); font-size:14px;" 
                    name="DebitCredit"  id="DebitCredit" class="input-sm" onChange="getDrCr();" onBlur="getDrCr();" autofocus >
						<option value="1" <?php if($drcr==1) echo "selected='selected'"; ?> >Dr</option>
                        <option value="-1" <?php if($drcr==-1) echo "selected='selected'"; ?>>Cr</option>
					</select> 
				</div>
            </td>
            <td style="width:50%;">
	         
			</td>
			<td style="width:15%;">
            	<div   style="padding-right:20px;  ">  
					<input type="text"  class="input-sm  col-lg-12" id="DrAmount" value="<?php echo $dramount;  ?>"  
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00);" 
                    onKeyPress="editjournal(<?php echo ($sl_no); ?>,event);">
				</div>
            </td>
            <td style="width:15%;">
				<div   style="padding-right:20px;" >  
					<input type="text" class="input-sm col-lg-12" id="CrAmount" value="<?php echo  $cramount;  ?>" 
                    style="float:right; text-align:right; width:100%;overflow:hidden; 
                    background-color:rgba(86,86,86,0.76); color:rgba(239,239,239,1.00); 
                    border-radius:0px; border:1px solid rgba(223,223,223,1.00); visibility:hidden;" 
                    onKeyPress="editjournal(<?php echo ($sl_no); ?>,event);">
                </div>
            </td>
            <td style="width:10%; ">
                <span class="glyphicon glyphicon-ok-circle"  
                style="color:rgba(121,255,116,1.00); border:1px outset rgba(22,200,255,1.00); border-radius:5px; padding:5px;"></span>
        	</td>
    	</tr>
	</table>
    <script>
		getDrCr();
	</script>
<?php 
}
?>
<style>
.mytable{
	table-layout:auto;   width:100%; background:rgba(250,250,250,1.00); color:rgba(0,0,0,1.00) !important;
	}
	.mytable td{
		padding:5px 5px;
		 border-left:1px rgba(50,50,50,0.90) solid;
		}
ul
{
list-style: none;
margin: 17px 20px 20px 24px;
width: 330px;
}
li
{
display: block;
padding: 5px;
background-color: #ccc;
border-bottom: 1px solid #367;
}
#content
{
padding:0px;
width:500px; border:1px solid #666;
float:left;
}
#clear
{ clear:both; }
#box
{
float:left;
margin:0 0 20px 0;
text-align:justify;
}
input[type=text]
{width:330px; height:35px;}
input[type=submit]
{
width:90px; height:35px;
}		
 
.selected{
    background:#ff0000;
}
#SearchBox{width:450px;padding:1px;font-size:15px;}
.mainbutton{
float:left;
margin:0 2px 0 2px;height:34px;display:block;background:#f4f4f4;
border:1px solid #ececec;cursor:pointer;width:130px;
font-size:15px;font-weight:bolder;text-transform:uppercase;
}
.mainbutton:hover {
background:#06a1e1;
color:#fff !important;
text-decoration:none !important;

}
#SearchForm{padding:5px;display:block;}
#SearchFieldContainer{position:relative;margin:1px auto 2px auto;}
/*----------------main Suggestion Search-----------*/
#wrapjsuggest{float:left;position:relative; }
div#mainSearch div#suggestme{position:absolute;z-index:1000;background:white;left:0px;top:33px;overflow:hidden;width:452px;border:1px solid #aaa;display:none;-webkit-box-shadow: rgba(0, 0, 0, 0.296875) 0px 2px 2px;box-shadow: rgba(0, 0, 0, 0.296875) 0px 2px 2px;}
ul.searchsugg{width:100%;display:block;-webkit-box-shadow: rgba(0, 0, 0, 0.296875) 0px 2px 2px;box-shadow: rgba(0, 0, 0, 0.296875) 0px 2px 2px;padding:0px;margin-top:0px;}
ul.searchsugg li{padding:5px;font-size:15px;color:#575757;cursor:pointer;list-style-type:none;margin:0px;}
ul.searchsugg li:hover{background:#05a6ee;color:white;font-weight:bold;}
ul.searchsugg li.active{background:#05a6ee;color:white;font-weight:bold;}
.load{background:url("modules/images/loading.gif") no-repeat right;}
input[type=text] ,select{
	width:100%;overflow:hidden; background-color:rgba(239,239,239,1.00); color:rgba(86,86,86,0.76); border-radius:0px; border:1px solid rgba(223,223,223,1.00);
}
	input[type=text]:focus{
		background-color:rgba(212,212,212,0.70);
		color:rgba(0,0,0,1.00);
		
	}
</style>
 <style>
    .glyphicon{
		border: 1px outset rgba(185,184,195,1.00);
		border-radius:5px;
		padding:2px;
		}
    </style>
<!--div id="result" style="background-color:rgba(61,193,240,0.90);">as</div-->

<?php 
foreach ($_SESSION["journal_master"] as $itemMaster)
{
	$VoucherNo=$itemMaster["VoucherNo"];
	$VoucherDate=$itemMaster["VoucherDate"];
}
	?>
<table class="mytable">
<thead>
<tr >
<th colspan="8">
<div  style="background-color:rgba(17,148,255,0.4); text-align:left; display:block; margin:auto; padding:10px; font-size:16px; color:rgba(255,255,255,1.00);">JOURNAL ENTRY</div>
</th>
</tr>
<tr style="border-bottom:1px outset rgba(255,255,255,1.00);">
<th colspan="8"  >
<div style="padding:5px; text-align:left;">
<label style="width:130px;">Journal No: </label><input type="text" id="VoucherNo" value="<?php echo $VoucherNo; ?>"   style=" border-radius:0px; border:1px solid rgba(223,223,223,1.00); width:100px; padding-left:3px;">
<input id="VoucherID" type="hidden" value="0">
</div>
<div style="padding:5px; text-align:left;">
<label style="width:130px;">Journal date: </label><input type="text" id="VoucherDate" value="<?php echo $VoucherDate; ?>"   style=" border-radius:0px; border:1px solid rgba(223,223,223,1.00); width:100px;padding-left:3px;">
</div>
</th>
</tr>
<tr style="border-bottom:1px outset rgba(255,255,255,1.00);">
<th colspan="4" style="width:60%;     " >
  <div ><p style="  text-align:center;  ">PARTICULARS</p></div>
     
</th>
<th style="width:15%; text-align:right;   "> <span class="  pull-right " style="padding-right:40px;" >DEBIT </span> </th>
<th style="width:15%; text-align:right;  "><span class="  pull-right " style="padding-right:40px;" > CREDIT </span></th>
<th style="width:10%; "><span class="  pull-right " style="padding-right:40px;">#</span> </th>
</tr>
 
</thead>
<script>
	addtojournalmaster();
</script>
<tbody>
<tr>
<td colspan="7">
<?php		
$a=0;
$drtotal=0;
$crtotal=0;
$narration="";
$savebtn="";
$mode=1;
/*
$mode defined as :
0 as unsaved add mode;
*/
//echo sizeof($_SESSION['journal_item']);
$editmode=0;
foreach ($_SESSION["journal_item"] as $item)
{
	$a=$a+1;?>
    <div id="panel<?php echo $item["sl_no"]; ?>" style="background-color:rgba(54,53,53,0.48);">
		<?php
        $mode=$mode;
        $sl_no=$item["sl_no"];
        $drcr=$item["drcr"];
        $accountid=$item["accountid"];
        $dramount=sprintf("%0.2f", $item["dramount"]);
        $cramount=sprintf("%0.2f", $item["cramount"]);
        $isdeleted=$item["isdeleted"];
        $iseditable=$item["iseditable"];
        if ($iseditable==0)
        {
            showpanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount,$isdeleted,$iseditable);
        }
        elseif ($iseditable==1)
        {
			if ($editmode==0)
			{
            	$editmode=1;
				editpanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount,$isdeleted,$iseditable);
			}
			else
			{
				showpanel($mode,$a,$sl_no,$drcr,$accountid,$dramount,$cramount,$isdeleted,$iseditable);
			}
			
        }
        ?>
	</div>
	<?php
	$drtotal +=$item["dramount"];
	$crtotal +=$item["cramount"];
	//	$item_total1 += $item["amount"];	
       // $item_total2 += ($item["amount"]*$item["amount"]);
}
$balance=$drtotal-$crtotal;
if ($balance==0)
{ 
	if ($drtotal==0 and $crtotal==0)
	{
		$narration="Entry Pending";	
		$savebtn="";
	}
	else
	{
		$narration="JOURNAL BALANCED. ";
		$savebtn="<a href='#' onClick='savejournal();' class='btn btn-danger'>POST NOW</a>";
	}
}
else if ($balance<0)
{
	$narration=sprintf('%0.2f',($crtotal-$drtotal))." DEDIT BALANCE REQUIRED";
	$savebtn="";
}		
else if ($balance>0)
{ 
	$narration=sprintf('%0.2f',($drtotal-$crtotal))." CREIT BALANCE REQUIRED";
	$savebtn="";
}	


if ($editmode==0)
{
	$editmode=1;
	 entrypanel($mode,$a,$sl_no,$VoucherTypeID);
}
?>

</td>
</tr>

<tr>
<td colspan="7">
<div  style=" vertical-align:middle; background-color:rgba(17,148,255,0.77); font-size:small;  " >
<table class="mytable" style="width:100%;">
         <tr>
    <td style="width:5%;     " >
      <span class="badge" style="background:rgba(12,20,58,0.69); border:1px rgba(244,244,244,0.89) inset;"><?php echo  '#'; ?></span>
    </td>
    <td style="width:5%;     " ></td>
    <td style="width:50%;     " >  <span style=" padding-left:10px; text-align:left;" >
             
			 <?php echo  $narration; ?>
          
              </span>
    </td>
   
    <td style="width:15%; "><span class="  pull-right " style="padding-right:40px;" >
<label><?php echo sprintf('%0.2f',$drtotal); ?></label>
                        </span>
        </td>
    <td style="width:15%; ">
    <span class="  pull-right " style="padding-right:40px;  color:rgba(250,250,250,0.7);" >
            
           <label><?php echo sprintf('%0.2f',$crtotal); ?></label>
        </span> </td>
        <td style="width:10%; ">
         <?php echo  $savebtn; ?>
        </td>
        
         
</tr>
        </table>
 
    
</div>
</td>
 
</tr>    
 
</tbody>
<tfoot>


</tfoot>
</table>
<div id ="res" style="background-color:rgba(205,199,199,1.00); color:rgba(0,0,0,1.00); border:5px solid #B8B3B4; padding:5px; margin:10px;">

</div>
<div style=" background-color:rgba(255,255,255,0.80);color:rgba(255,49,53,1.00); font-size:16px; font-weight:bold;">
<pre>
<?php
print_r($_SESSION);
?>
</pre>
</div>
 
<!--script src="js/suggestion.js"></script-->
<script>
function debug(str) {
  document.getElementById("debug").innerHTML += str + "<br>"
}
</script>


<script>
function savejournal(){
	//alert("Lets Save");
	//var pg ="modules/journal.save.php"; 
 	var pg ="modules/save.journalmaster.php";
 	var type="insert";
	
	//alert(VoucherID);
	dt={type:type};
	
	$.post(pg,dt,function(data){
		//$("#res").html(data);
		alert(data);
	redirectBypageValue('journal',data);
	//redirectBypage('journal'); 
	});
	}
	
	
function savetransaction(){
	//if (document.getElementById("entrymode").value==2)
	//{alert(document.getElementById("entrymode").value); exit;}
	//var vtypeid=17;
	var pg ="modules/save.vouchermaster.php";
 	var type="insert";
	var AssignmentID=document.getElementById("assignmentid").innerHTML;
	var VoucherDate=document.getElementById("podt").value;
	//alert(VoucherDate);
	var ActiveDate=0;
	var TargetDate=0;
	var DocumentNo=document.getElementById("documentno").value;
//alert(pg) ;
//aniopen();
	$.post(pg,{transactionid:transactionid,VoucherDate:VoucherDate},function(data){$("#transactioncart").html(data);});
	//aniclose();
	//	$.post(pg,{transactionid:transactionid},function(data){$("#transactioncart").val(data)});
//alert(data);
	}
function takeevent(balance,val0,event)
	{
		var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
		alert(balance);
		if(chCode == 13)
			{
				if (balance==0)
					{
						if ($("#entrypanel"+val0).val()==0)
							{
								document.getElementById("entrypanel"+val0).style.visibility=false;
							}
					}
				else
					{
						document.getElementById("DrAmount"+val0).focus();
					}
			}
	}
function addtojournal(val0,event)
{
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
	// alert ("The Unicode character code is: " + chCode);
	if(chCode == 13)
	{
		var id=val0;
		var drcr=$("#DebitCredit").val();
		var accountid=$("#AccountID").val();
		var dramount= $("#DrAmount").val();
		var cramount= $("#CrAmount").val();
		var pg="modules/Save.Journal.php";
		var param={id:id,drcr:drcr,accountid:accountid,dramount:dramount,cramount:cramount};
		$.post(pg,param,function(data){redirectBypage('journal');});
	}
}
function editjournal(val0,event)
{
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
	// alert ("The Unicode character code is: " + chCode);
	if(chCode == 13)
	{
		var id=val0;
		//alert(id);
		var drcr=$("#DebitCredit").val();
		var accountid=$("#AccountID").val();
		var dramount= $("#DrAmount").val();
		var cramount= $("#CrAmount").val();
		var pg="modules/sess.journal.edit.php";
		var param={id:id,drcr:drcr,accountid:accountid,dramount:dramount,cramount:cramount};
		$.post(pg,param,function(data){redirectBypage('journal');});
	}
}
/*function redirectBypage(val01)
{
	var http = location.protocol;
	var slashes = http.concat("//");
	var host = slashes.concat(window.location.hostname);
	var pathname=host.concat(window.location.pathname);
	var redirectlocation=pathname.concat("?p="+val01);
    window.location=redirectlocation;
}*/
function addtojournalonclick(val0)
{
	var id=val0;
	var drcr=$("#DebitCredit"+val0).val();
	var accountid=$("#AccountID"+val0).val();
	var dramount= $("#DrAmount"+val0).val();
	var cramount= $("#CrAmount"+val0).val();
	var pg="modules/sess.journal.add.php";
	var param={id:id,drcr:drcr,accountid:accountid,dramount:dramount,cramount:cramount};
		$.post(pg,param,function(data){redirectBypage('journal');});
}
function enableeditmode(val0)
{
	var id=val0;
	var drcr=$("#DebitCredit"+val0).val();
	var accountid=$("#AccountID"+val0).val();
	var dramount= $("#DrAmount"+val0).val();
	var cramount= $("#CrAmount"+val0).val();
	var pg="modules/sess.journal.editmode.php";
	var param={id:id,drcr:drcr,accountid:accountid,dramount:dramount,cramount:cramount};
		$.post(pg,param,function(data){redirectBypage('journal');});
}		
 function removeentry(val0)
{
	var ans=confirm("DO you really want to remove?");
	if (ans==true)
	{
	var id=val0;
	var drcr=$("#DebitCredit"+val0).val();
	var accountid=$("#AccountID"+val0).val();
	var dramount= $("#DrAmount"+val0).val();
	var cramount= $("#CrAmount"+val0).val();
	var pg="modules/sess.journal.removeentry.php";
	var param={id:id,drcr:drcr,accountid:accountid,dramount:dramount,cramount:cramount};
		$.post(pg,param,function(data){redirectBypage('journal');});
	}
}
 </script>
 <script type="text/javascript">
function fill(Value)
{
$('#name').val(Value);
$('#display').hide();
}

function searchac(){
//	alert();
var name = $('#name').val();

if(name=="")
{
$("#display").html("");
}
else
{
$.ajax({
type: "POST",
url: "ajax.php",
data: "name="+ name ,
success: function(html){
$("#display").html(html).show();
}
});
}
}

jQuery(".btn-group .dropdown-menu li").mouseover(function() {
		console.log('mousie')
	    jQuery(".btn-group .dropdown-menu li").removeClass('selected');
	    jQuery(this).addClass('selected');
})	

jQuery(".btn-group").keydown(function(e) {
    if (e.keyCode == 38) { // up
        console.log('keyup pressed');
        var selected = jQuery('.selected');
        jQuery(".btn-group .dropdown-menu li").removeClass('selected');
        if (selected.prev().length == 0) {
            selected.siblings().last().addClass('selected');
        } else {
            selected.prev().addClass('selected');
        }
    }
    if (e.keyCode == 40) { // down
        console.log('keydown');
        var selected = jQuery('.selected');
        jQuery(".btn-group .dropdown-menu li").removeClass('selected');
        if (selected.next().length == 0) {
            selected.siblings().first().addClass('selected');
        } else {
            selected.next().addClass('selected');
            console.log(selected.text());
        }
    }
});


function suggestme(inputString,searchfor,e)
{
	//alert(inputString);
	if(e.keyCode==40 || e.keyCode==38){
		//setTimeout("$('#suggestme').fadeOut();", 600);
	return false;
	}
	 
	/*if(inputString.length == 0)
	 {
				$('#suggestme').fadeOut();
			} 
	else {*/
	var a =0;
		if (a==0){
			$('#SearchBox').addClass('load');
				$.post("process.php", {"name": ""+inputString+"",searchfor:searchfor}, function(data){
					if(data.length >0) {
						$('#suggestme').fadeIn();					
						$('#suggestmeList').html(data);
						$('#SearchBox').removeClass('load');
						$(document).ajaxStop(function(){
							var chosen="";
							$("#SearchBox").keydown(function(e){
								var list = $(this);   
								if(e.keyCode==40){
									if(chosen === "") {
											chosen = 0;
										} else if((chosen+1) < $('.searchsugg li').length) {
											chosen++; 
										}								
									 $('.searchsugg li').removeClass('active');
									  $('.searchsugg li:eq('+chosen+')').addClass('active');
								$('#SearchBox').val($('.searchsugg li:eq('+chosen+')').text());
								$("#AccountID").val($('.searchsugg li:eq('+chosen+')').attr("id"));
									return false;
								}
								else if(e.keyCode==38){
									 if(chosen === "") {
										chosen = 0;
									} else if(chosen > 0) {
										chosen--;            
									}
									$('.searchsugg li').removeClass('active');
									$('.searchsugg li:eq('+chosen+')').addClass('active');
									$('#SearchBox').val($('.searchsugg li:eq('+chosen+')').text());
							$("#AccountID").val($('.searchsugg li:eq('+chosen+')').attr("id"));
									return false;
								}
								
							});
						});
						
					}
				});
			}
}
function fillSearch(val,val_id)
{
//alert(val_id);
$("#SearchBox").val(val);

$("#AccountID").val(val_id);

//$("#SearchForm").submit();
setTimeout("$('#suggestme').fadeOut();", 600);
}

function activate(event){
	  var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13' || keycode=='9'){
		 // alert('You pressed a "TAB" key in textbox');  
		setTimeout("$('#suggestme').fadeOut();", 200);
//        alert('You pressed a "enter" key in textbox');  
    }
	}
$(document).ready(function(){
$("#SearchForm").mouseleave(function(){
	setTimeout("$('#suggestme').fadeOut();", 600);
	});
 
});
</script>
</div>