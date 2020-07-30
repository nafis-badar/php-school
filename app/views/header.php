<?php
//echo "Header<br>";
require_once 'app/controllers/Company.php';
$Company= new Company;
$_COMPANY_NAME=$Company->CompanyName() ;
?>
<html>
  <head>
    <meta charset="utf-8">
    <!--link rel="shortcut icon" type="image/png" href="app/libs/images/microscope.png"/-->
    <title><?php  echo $_COMPANY_NAME; ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--link rel="shortcut icon" href="favicon.ico"/-->
    <!--link rel="bookmark" href="favicon.ico"/-->
    <!-- site css -->
    <link rel="stylesheet" href="app/libs/dist/css/site.min.css">
     <!--link rel="stylesheet" href="app/libs/select2/dist/css/select2.min.css"-->
    <link rel="stylesheet" href="app/libs/select2/dist/css/select2.css">
     <!--link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'-->
<style>
.error {color: #FF0000;}
    .container, .container-fluid {
		width:1202; 
    padding-right: 1px;
    padding-left: 1px;
    margin-right: auto;
    margin-left: auto;
}
     .displayhead{
	height:90px;
	margin-top: 1px;
	
	
	
	padding: 0px 5px 5px 20px;
	color:rgba(123,122,122,1.00);
	font-size:25px;
	font-weight:bold;
	background-color:rgba(0,160,226,1.00);
	background-color:rgba(255,255,255,1.00);
	background-image:none;
	padding-right:20px;
	border-bottom:5px double rgba(255,176,240,1.00);
	
}
.workspace{
	width:1200px; 
	border:1px solid rgba(158,158,158,0.83);
	
	box-shadow:1px 10px 25px 2px rgba(81,81,81,0.84);
	border-top:1px solid rgba(46,102,215,0.50);
	border-left:10px solid rgba(46,102,215,0.90);
	padding-top:15px;
	border-top-right-radius:3px;	
	border-bottom-right-radius:3px;
	}
.icon-flipped {
    transform: scaleX(-1);
    -moz-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    -ms-transform: scaleX(-1);
	
}
	 @media (max-width:768px){
		 .workspace{ width:95%;}
		 .displayhead{	height:90px;	font-size:20px; }
	 }
.panel-body {
    padding: 0px 20px 20px;
	}
 .input{color:#9A2527;
 }
  .input-sm:focus{color:#9A2527;
  background-color:rgba(255,254,212,1.00);
 }
.form-group
{margin-top:10px;}
* {box-sizing: border-box;}

.form-control {
    color: #434A54;
    border-color: #AAB2BD;
}
.control-label {
    text-align: left;
    font-size: 11px!important;
    color: rgba(5,91,14,0.80)!important;
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}
.topnav .search-container button {
    float: right;
    padding: 6px 10px;
    margin-top: 4px;
    margin-right: 16px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
}
.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 4px;
    margin-right: 1px;
    font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
    .topnav a, .topnav input[type=text] ,.topnav div{
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
    }
    .topnav input[type=text] {
        border: 1px solid #ccc;
    }
	
}
</style>
    <!--link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css"-->
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--script type="text/javascript" async="" src="http://s1.smartaddon.com/share_addon.js"></script-->
      <link rel="stylesheet" href="app/libs/css/wishModal.css">
       <link rel="stylesheet" href="app/libs/css/style.css">
  <script type="text/javascript" src="app/libs/dist/js/site.min.js"></script>
  <script type="text/javascript" src="app/libs/js/Login.js"></script>
  <!--script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script-->
<style>
@media print {
    div.do-not-print {display: none;}
	span.do-not-print {display: none;}
	a.do-not-print {display: none;}
}
</style>
 <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"-->
  <link rel="stylesheet" href="app/WYCWYG/css/froala_editor.css">
  <!--link rel="stylesheet" href="app/WYCWYG/css/froala_style.css">
  <link rel="stylesheet" href="app/WYCWYG/css/plugins/code_view.css">
  <link rel="stylesheet" href="app/WYCWYG/css/plugins/image_manager.css">
  <link rel="stylesheet" href="app/WYCWYG/css/plugins/image.css">
  <link rel="stylesheet" href="app/WYCWYG/css/plugins/table.css">
  <link rel="stylesheet" href="app/WYCWYG/css/plugins/video.css"-->
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css"-->

  <script>
  
 function GrantPromotion(ID)
{
	var pg="app/views/GrantPromotion.php";
	var Type="GrantPromotion";
	//  alert(ID);
	$.post(pg,{Type:Type,ID:ID},function(data){
		document.getElementById("StudentPanel").innerHTML=data;
		document.getElementById("ActionPanel").innerHTML='<span style=""  name="Operation"   class="btn  pull-right"  onClick="redirectBypagewithIDValue(\'menu\',0,0);" >Dashboard</span><span style="margin:0px 5px;"  name="Operation"   class="btn  pull-right"  onClick="redirectBypagewithIDValue(\'student\',0,'+ID+');" >Student</span>';
		
		//document.getElementById("MasterGroup").type="hidden";
		});
}
 function GrantAdmission(ID)
{
	var pg="app/views/GrantAdmission.php";
	var Type="GrantAdmission";
	//  alert(ID);
	$.post(pg,{Type:Type,ID:ID},function(data){
		document.getElementById("StudentPanel").innerHTML=data;
		document.getElementById("ActionPanel").innerHTML='<span style=""  name="Operation"   class="btn  pull-right"  onClick="redirectBypagewithIDValue(\'menu\',0,0);" >Dashboard</span><span style="margin:0px 5px;"  name="Operation"   class="btn  pull-right"  onClick="redirectBypagewithIDValue(\'student\',0,'+ID+');" >Student</span>';
		
		//document.getElementById("MasterGroup").type="hidden";
		});
}
function SetClass(StudentID)
{
 //alert();
	var pg="app/controllers/ManageMaster.php";
	var Type="GrantPromotion";
	var AcademicYear=document.getElementById("AcademicYear").value;
	
	var ClassID=document.getElementById("ClassID").value;
	
	var SecID=document.getElementById("SecID").value;
	
	var RollNo=document.getElementById("RollNo").value;
	var Amount=document.getElementById("Amount").value;
	  // alert(RollNo);
	$.post(pg,{Type:Type,StudentID:StudentID,AcademicYear:AcademicYear,ClassID:ClassID,SecID:SecID,RollNo:RollNo,Amount:Amount},function(data){
	 document.getElementById("QryResult").innerHTML=data;
		//document.getElementById("MasterGroup").type="hidden";
		GrantPromotion(StudentID);
		});
}
function SetAdmission(StudentID)
{
 //alert();
	var pg="app/controllers/ManageMaster.php";
	var Type="GrantAdmission";
	var AcademicYear=document.getElementById("AcademicYear").value;
	
	var ClassID=document.getElementById("ClassID").value;
	
	var SecID=document.getElementById("SecID").value;
	
	var RollNo=document.getElementById("RollNo").value;
	var IsAdmission=1;
	var Amount=document.getElementById("Amount").value;
	  // alert(RollNo);
	$.post(pg,{Type:Type,StudentID:StudentID,AcademicYear:AcademicYear,ClassID:ClassID,SecID:SecID,RollNo:RollNo, IsAdmission:IsAdmission,Amount:Amount},function(data){
	 document.getElementById("QryResult").innerHTML=data;
		//document.getElementById("MasterGroup").type="hidden";
		GrantPromotion(StudentID);
		});
}
			
   function Cancellation_Confirm(BookingID){
	//var BookingID=document.getElementById("BookingID").value;
	
	if(BookingID>0)
	{
		var pg='app/views/test.cancellation.php';
	 var Type='Cancellation';
	 
	 $.post(pg,{Type:Type,ID:BookingID},function(data){
			alert(data);	//alert(data);
		// LoadTestQueue();
		
			//document.getElementById("cart_area").innerHTML='';
			//document.getElementById("cart_area").innerHTML=data;  
		 
		});
	}
}
  function DuePayment(BookingID)
  {
	  var pg='app/models/accounts.php';
	  var Type="DuePayment";

	  var Amount=document.getElementById("PaybleAmount").value;
	  //alert(Amount);	  
	  document.getElementById("status").style.visibility="visible";
		document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i>';
	  $.post(pg,{Type:Type, Amount:Amount,BookingID:BookingID},function(data){ 
	 console.log(data);
		  // document.getElementById("errr").innerHTML=data;
		   // alert(data);
		  redirectBypagewithIDValue('testpayment',0,BookingID);
		  	  document.getElementById("status").style.visibility="visible";
		  document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i> ';
		 // document.getElementById("status").innerHTML=data;
		 // setTimeout(hidestat(),3000);
	    var myVar = setTimeout(hidestat, 3000);
		  });
	  }
  function RefundPayment(BookingID)
  {
	  var pg='app/models/accounts.php';
	  var Type="RefundPayment";

	  var Amount=document.getElementById("RefundValue").value;
	  //alert(Amount);	  
	  document.getElementById("status").style.visibility="visible";
		document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i>';
	  $.post(pg,{Type:Type, Amount:Amount,BookingID:BookingID},function(data){ 
	 console.log(data);
		  // document.getElementById("errr").innerHTML=data;
		   // alert(data);
		  redirectBypagewithIDValue('testpayment',0,BookingID);
		  	  document.getElementById("status").style.visibility="visible";
		  document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i> ';
		 // document.getElementById("status").innerHTML=data;
		 // setTimeout(hidestat(),3000);
	    var myVar = setTimeout(hidestat, 3000);
		  });
	  }
	  function DiscountOnInvoice(BookingID)
  {
	  var pg='app/models/accounts.php';
	  var Type="DiscountOnInvoice";

	  var Amount=document.getElementById("DiscountValue").value;
	  //alert(Amount);	  
	  document.getElementById("status").style.visibility="visible";
		document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i>';
	  $.post(pg,{Type:Type, Amount:Amount,BookingID:BookingID},function(data){ 
	// console.log(data);
		   document.getElementById("status").innerHTML=data;
		   // alert(data);
		 // redirectBypagewithIDValue('testpayment',0,BookingID);
		  	  document.getElementById("status").style.visibility="visible";
		//  document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i> ';
		 // document.getElementById("status").innerHTML=data;
		 // setTimeout(hidestat(),3000);
	  //  var myVar = setTimeout(hidestat, 3000);
		  });
	  }  	  
 function CancelThis(BookingID)
  {
	  var pg='app/models/accounts.php';
	  var Type="CancelThis";

	  var Amount=document.getElementById("CancelTotal").value;
	  //alert(Amount);	  
	 document.getElementById("status").style.visibility="visible";
		document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i>';
	  $.post(pg,{Type:Type, Amount:Amount,BookingID:BookingID},function(data){ 
	// console.log(data);
		 //  document.getElementById("errr").innerHTML=data;
		   // alert(data);
		  redirectBypagewithIDValue('cancellation',0,BookingID);
		  document.getElementById("status").style.visibility="visible";
		  document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i> ';
		 // document.getElementById("status").innerHTML=data;
		 // setTimeout(hidestat(),3000);
	    var myVar = setTimeout(hidestat, 3000);
		  });
	  }
		function hidestat()
		{
			document.getElementById("status").style.visibility="hidden";
			}
			function hideteststat()
		{
			document.getElementById("test_status").style.visibility="hidden";
			}
function setConsultedDoctor(ReportMasterID,DoctorID)
{
	var pg='app/views/BookingToReport.php';
				   
					var Type='WriteDoc';
				//	var ReportMasterID=document.getElementById("ReportMasterID").value;
				  //alert(type);
					//var ID=document.getElementById("Temp_CartID").value;
					//-------------------------------------------
					  //BookingID As  ReportDetails Value
				  //===========================================
					$.post(pg,{Type:Type,BookingID:0,DoctorID:DoctorID,ReportMasterID:ReportMasterID},function(data){
						//alert(data);
						document.getElementById("errorr").innerHTML=data;
						//document.getElementById("error").innerHTML=data;  
					// document.getElementById("TestID").focus();
					 //document.getElementById("TestID").accessKey;
				});
	}
function setReportDate(ReportMasterID,ReportDate)
{
	var pg='app/views/BookingToReport.php';
				   
					var Type='WriteReportDate';
					//var ReportMasterID=document.getElementById("ReportMasterID").value;
				//alert(ReportDate);
					$.post(pg,{Type:Type,BookingID:0,ReportDate:ReportDate,ReportMasterID:ReportMasterID},function(data){
						//alert(data);
						document.getElementById("errorr").innerHTML=data;
						//document.getElementById("error").innerHTML=data;  
					// document.getElementById("TestID").focus();
					 //document.getElementById("TestID").accessKey;
				});
	}
function WriteValue(val01,TestValue)		 
			{
					var pg='app/views/BookingToReport.php';
				   
					var Type='WriteValue';
				  //alert(type);
					//var ID=document.getElementById("Temp_CartID").value;
					//-------------------------------------------
					  //BookingID As  ReportDetails Value
				  //===========================================
					$.post(pg,{Type:Type,BookingID:val01,TestValue:TestValue},function(data){
						//alert(data);
						document.getElementById("errorr").innerHTML=data;
						//document.getElementById("error").innerHTML=data;  
					// document.getElementById("TestID").focus();
					 //document.getElementById("TestID").accessKey;
				});
			}
 function Show_Report()
{
		
		 var pg='app/views/Booking_SetReport.php';
	  
		var Type='ReportSetup';
	  // alert(type);
		 var ReportID=document.getElementById("ReportMasterID").value;
		  
		$.post(pg,{Type:Type,ReportID:ReportID},function(data){
			document.getElementById("report_cart_area").innerHTML=data;
			// alert(data);
			//document.getElementById("errorr").innerHTML=data;
			//document.getElementById("error").innerHTML=data;  
		// document.getElementById("TestID").focus();
		 //document.getElementById("TestID").accessKey;
	});
 
	}
function ShowReport(ReportID)
{ 	
		var pg='app/views/Booking_SetReport.php';
	  
		var Type='ReportSetup';
	 // alert(type);
		//var ID=document.getElementById("Temp_CartID").value;
		  
		$.post(pg,{Type:Type,ReportID:ReportID},function(data){
			 // alert(data);
			document.getElementById("report_cart_area").innerHTML=data;
			//document.getElementById("error").innerHTML=data;  
		// document.getElementById("TestID").focus();
		 //document.getElementById("TestID").accessKey;
	});
 
}
function PayNow()
{
	 var pg='app/views/Booking_SetReport.php';
	  
		var Type='PayNow';
	 // alert(type);
		//var ID=document.getElementById("Temp_CartID").value;
		  
		$.post(pg,{Type:Type,ReportID:ReportID},function(data){
			 // alert(data);
			document.getElementById("report_cart_area").innerHTML=data;
			});
	}
 // $('input[text]').select2();
 function Search_master(val01)
{
	var pg='app/views/search.list.php';
	//alert(pg);
		var Type='doctor';
		if (val01==36){type='patient';}
		else if (val01==37){type='doctor';}
		else if (val01==39){type='test'; }
		else if (val01==40){type='agency'; }
		else if (val01==201){type='agency'; }
		//alert(type+val01);
		var search_str=document.getElementById("src_str").value;
		//alert(type+val01+'a');
		 //if(search_str==''){search_str='a'};
		$.post(pg,{Type:Type,search_str:search_str},function(data){document.getElementById("SearchResult").innerHTML=data});
     }
   function Search_Insider_Set(val01,val02)
{
	var pg='app/views/MasterDetails.php';
	//alert(pg);
		var Type='doctor';
		if (val01==36){type='patient';}
		else if (val01==37){type='doctor';}
		else if (val01==39){type='test'; }
		else if (val01==40){type='agency'; }
		else if (val01==201){type='InsiderSet'; }
		//alert(type+val01);
		var search_str="";
		//alert(type+val01+'a');
		 //if(search_str==''){search_str='a'};
		$.post(pg,{Type:Type,ID:val02},function(data){document.getElementById("SearchResult").innerHTML=data});
     }

    function redirectBypage(val01)
{
	//alert(val01);
	var http = location.protocol;
	var slashes = http.concat("//");
	var host = slashes.concat(window.location.hostname);
	var pathname=host.concat(window.location.pathname);
	var redirectlocation=pathname.concat("?p="+val01);
   //alert(redirectlocation);
	window.location=redirectlocation;
	
}
function redirectBypagewithIDValue(val01,val02,val03)
	{
		
		//alert(val03);
		CheckPagePermission(val01,val02,val03,<?php echo $_SESSION['MasterID']?>);
		
		
	
}
function rad(val01,val02,val03)
{
	var http = location.protocol;
	//alert(http);
	var slashes = http.concat("//");
	//alert(slashes);
	var host = slashes.concat(window.location.hostname);
	//alert(host);
	var pathname=host.concat(window.location.pathname);
	//alert(pathname);
	var redirectlocation=pathname.concat("?p="+val01+"&mode="+val02+"&ID="+val03);
	//alert(redirectlocation);
	// alert(redirectlocation);
	window.location=redirectlocation;
	}
  function CheckPermission(PageID,MasterID){
	//var BookingID=document.getElementById("BookingID").value;
	
	 
		var pg='app/controllers/ManageMaster.php';
		 //alert(MasterID);
	 var Type='CheckPermission';
	 
	 $.post(pg,{Type:Type,MasterID:MasterID,PageID:PageID},function(data){
		//return data;
		
		 if(data==0)
		 {
			 redirectBypagewithIDValue('error',PageID,MasterID);
			 }
		});
 
}
   function CheckPagePermission(val01,val02,val03,MasterID){
	//var BookingID=document.getElementById("BookingID").value;
	
	 
		var pg='app/controllers/ManageMaster.php';
		
	 var Type='CheckPagePermission';
	 
	 $.post(pg,{Type:Type,MasterID:MasterID,Page:val01},function(data){
		//console.log(data);
		  // alert(data);
		 if(data==0)
		 {
			  
			 redirectBypage('error');
			 //alert(data);
			 }
			 else
			 {
				 rad(val01,val02,val03);
				 }
			 		});
 
}
function getproduct01(id,val01){
	//alert("BLANK");
	
			var pg ="app/views/itemUpdate0"+val01+".php";
			if (val01>=10)
			{
			pg ="app/views/itemUpdate"+val01+".php";	
				}
			//alert(pg);
			$.post(pg,{ID:id},function(data){
				//alert(data);
				
				openModal();
				$("#modalsearchresult").html(data)});
			// alert("group");
	}	
	 function gettestsettings(val0,val1){
	//alert(val0+String(val1));
			var pg ="app/views/testUpdate0"+val1+".php";
			//var pgtype=null;
			/*if (val1==2)
			{pgtype="grp";}
			else if (val1==3)
			{pgtype="cat";}
			var Typeval=val0;*/
			 //alert(pg);
						//alert(typeval);
			$.post(pg,{ID:val0},function(data){$("#contentarea").html(data)});
	}

function Popup_Content(val01,val02)
{
	openModal();
	var pg='app/views/search.list.php';
	//alert(pg);
		var Type='doctor';
		if (val01==36){type='patient';pg='app/views/popup_patient.php';}
		else if (val01==37){type='doctor';}
		else if (val01==39){type='test'; }
		else if (val01==40){type='agency'; }
		else if (val01==201){type='agency'; }
		//alert(type+val01);
		var search_str='';//document.getElementById("src_str").value;
		//alert(type+val01+'a');
		 //if(search_str==''){search_str='a'};
		$.post(pg,{Type:Type,search_str:search_str,ID:0},function(data){document.getElementById("popup_content").innerHTML=data});
	}	
function  Popup_ContentWithID(val01,val02)
{
	var ID=0;
	openModal();
	var pg='app/views/search.list.php';
	//alert(pg);
	
		var Type='doctor';
		if (val01==36){type='patient';pg='app/views/popup_patient.php'; ID=document.getElementById("PatientID").value;}
		else if (val01==37){type='doctor';pg='app/views/popup_doctor.php'; ID=document.getElementById("DoctorID").value;}
		else if (val01==39){type='test'; }
		else if (val01==40){type='agency';pg='app/views/popup_agency.php'; ID=document.getElementById("AgencyID").value;}
		else if (val01==201){type='agency'; }
		//alert(type+val01);
		var search_str='';//document.getElementById("src_str").value;
		//alert(type+val01+'a');
		 //if(search_str==''){search_str='a'};
		$.post(pg,{Type:Type,search_str:search_str,ID:ID},function(data){document.getElementById("popup_content").innerHTML=data});
	}
	function  Popup_ContentWith_ID(val01,val02)
{
	var ID=0;
	openModal();
	var pg='app/views/search.list.php';
	//alert(pg);
	
		var Type='doctor';
		if (val01==36){type='patient';pg='app/views/popup_patient.php'; ID=val02;}
		else if (val01==37){type='doctor';pg='app/views/popup_doctor.php'; ID=val02;}
		else if (val01==39){type='test'; }
		else if (val01==40){type='agency';pg='app/views/popup_agency.php'; ID=val02;}
		else if (val01==201){type='agency'; }
		//alert(type+val01);
		var search_str='';//document.getElementById("src_str").value;
		//alert(type+val01+'a');
		 //if(search_str==''){search_str='a'};
		$.post(pg,{Type:Type,search_str:search_str,ID:ID},function(data){document.getElementById("popup_content").innerHTML=data});
	}

	  function SaveThis() //Save Popup Patient
{
	
	var ID=document.getElementById("PatientID_T").value;
	var Name=document.getElementById("Name_T").value;
	var Gender=document.getElementById("Gender_T").value;
	var Age=document.getElementById("Age_T").value;
	
	var RegisterDate=document.getElementById("RegisterDate_T").value;
	var ContactNo=document.getElementById("ContactNo_T").value;
	var Email=document.getElementById("Email_T").value;
	var Address=document.getElementById("Address_T").value;
	var State=document.getElementById("State_T").value;
	var Country=document.getElementById("Country_T").value;
	var DoctorID=document.getElementById("DoctorID_T").value;
	var AccountID=document.getElementById("AccountID_T").value;
	var IsMaster=0;
	var MID=DoctorID;
	var PDID=document.getElementById("PDID_T").value;
	var Operation='Save';
	var pg="app/models/save.patient.php";
	var fd={ID:ID,Name:Name,Gender:Gender,Age:Age,RegisterDate:RegisterDate,ContactNo:ContactNo,Email:Email,Address:Address,State:State,Country:Country,DoctorID:DoctorID,AccountID:AccountID,IsMaster:IsMaster,MID:MID,PDID:PDID,Operation:Operation};
	document.getElementById("status").style.visibility="visible";
		document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i>';
	//  var pg='modules/sql/sql.acledger.php';
	$.post(pg,fd,function(data){
		//alert(data);
		if(ID==0)
		{
			load_pat_select(data);
			}
		document.getElementById("PatientID").value=data;
		getDetails(36,data);
			
		//document.getElementById("erP").innerHTML=data;
		document.getElementById("status").style.visibility="visible";
		  document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i> ';
		 // document.getElementById("status").innerHTML=data;
		 // setTimeout(hidestat(),3000);
	    var myVar = setTimeout(hidestat, 3000);
		});
	
}	 
		function hidestat()
		{
			document.getElementById("status").style.visibility="hidden";
			}
  function SaveThisDoctor() //Save Popup Patient
{
	alert();
	var ID=document.getElementById("DoctorID_T").value;
	var Name=document.getElementById("Name_T").value;
//	var Gender=document.getElementById("Gender_T").value;
	//var Age=document.getElementById("Age_T").value;
	
	var RegisterDate=document.getElementById("RegisterDate_T").value;
	var ContactNo=document.getElementById("ContactNo_T").value;
	var Email=document.getElementById("Email_T").value;
	var Address=document.getElementById("Address_T").value;
	var State=document.getElementById("State_T").value;
	var Country=document.getElementById("Country_T").value;
	var Education=document.getElementById("Qualification_T").value;
	//var AccountID=document.getElementById("AccountID_T").value;
	var IsMaster=0;
	var MID=1;
	var PDID=document.getElementById("PDID_T").value;
	var Operation='Save';
	var pg="app/models/save.doctor.php";
	var fd={ID:ID,Name:Name,RegisterDate:RegisterDate,ContactNo:ContactNo,Email:Email,Address:Address,State:State,Country:Country,IsMaster:IsMaster,MID:MID,PDID:PDID,Operation:Operation,Education:Education};
	document.getElementById("status").style.visibility="visible";
		document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i>';
	//  var pg='modules/sql/sql.acledger.php';
	$.post(pg,fd,function(data){
		//alert(data);
		if(ID==0)
		{
			load_pat_select(data);
			}
		document.getElementById("PatientID").value=data;
		getDetails(36,data);
			
		//document.getElementById("erP").innerHTML=data;
		document.getElementById("status").style.visibility="visible";
		  document.getElementById("status").innerHTML='<i class="fa fa-gear fa-spin" style="font-size:24px;"></i> ';
		 // document.getElementById("status").innerHTML=data;
		 // setTimeout(hidestat(),3000);
	    var myVar = setTimeout(hidestat, 3000);
		});
	
}	
function  Popup_DiscountAllowed(val01)
{
	var ID=0;
	openModal();
	var pg='app/views/search.list.php';
	//alert(pg);
	
		var Type='discount';
		var pg='app/views/booking_discount.php'; 
		var BookingID=val01;
		
		//alert(type+val01);
		var search_str='';//document.getElementById("src_str").value;
		//alert(type+val01+'a');
		 //if(search_str==''){search_str='a'};
		$.post(pg,{Type:Type,ID:BookingID},function(data){document.getElementById("popup_content").innerHTML=data});
	}
	
function	SMS_Modal(val02){
	//alert(val02);
	openModal();
	$("#modalsearchresult").html(val02);
	}
                /* Open when someone clicks on the span element */
function openModal() {
		document.getElementById('myNav').style.display='block';
		document.getElementById('myNav').style.zIndex='1001';
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeModal() {
	//alert();
	setTimeout(function() {
  //your code to be executed after 1 second
}, 0);
    document.getElementById("myNav").style.height = "0%";
	document.getElementById("myNav").style.width = "0%";
}
function openModalV() {
	alert();
	document.getElementById('myNav').style.display='block';
	/*document.getElementById("myNav").style.width = "0%";
	document.getElementById("myNav").style.height = "100%";
	setTimeout(function() {
  //your code to be executed after 1 second
}, 5000);
	document.getElementById("myNav").style.width = "100%";*/
}

function openModalV1() {
	document.getElementById("myNavVoucher").style.height = "0%";
	//sleep(2000);
	document.getElementById("myNavVoucher").style.width = "100%";
	setTimeout(function() {
  //your code to be executed after 1 second
}, 0);
		
    document.getElementById("myNavVoucher").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeModalV() {
	//alert();
	setTimeout(function() {
  //your code to be executed after 1 second
}, 0);
    document.getElementById("myNavVoucher").style.height = "0%";
	document.getElementById("myNavVoucher").style.width = "0%";
}
function openModalV() {
	document.getElementById("myNavVoucher").style.width = "0%";
	document.getElementById("myNavVoucher").style.height = "100%";
	setTimeout(function() {
  //your code to be executed after 1 second
}, 5000);
	document.getElementById("myNavVoucher").style.width = "100%";
}
function TestReport_Print(val01){
	//$("#downlineresult").html("Generating .... Please wait");
	var tp=val01;
	var pg ="app/models/print.testreport.php";
	var code=$("#ReportMasterID").val();
	alert(code);
	$.post(pg,{code:code,tp:tp},function(data){$("#previewresult").html(data);});
	}
function initiateSelect2() {
  $('select').select2();
}
//initiateSelect2();
// when modal is open
$('.w3-modal').on('shown.bs.modal', function () {
  initiateSelect2();
})


 /*
// block refresh on F5 Button
 $(function () {  
        $(document).keydown(function (e) {  
            return (e.which || e.keyCode) != 116;  
        });  
    }); */
	 
/*window.addEventListener('popstate', function () {
   // history.pushState(null, null, document.title);
});*/
//window.open ("yourPageURL","mywindow","status=1,toolbar=0");
                </script>
  </head>
  <body style="overflow:visible;">
    <!--nav-->
     <?php //include_once("app/views/modal.php")?>
  
  <div id="myNav" class="w3-modal">
    <div class="w3-modal-content" id="popup_content" style="position:relative;">
      
    </div>
  </div>
 

  
 
    <nav role="navigation" class="navbar navbar-inverse" style="border-radius: 1px!important;  ">
        <div class="" style="box-shadow:1px 5px 15px rgba(150,150,150,0.60); z-index:2501;" >
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <span class="navbar-brand" style=" padding-left:20px;color:rgba(231,231,231,1.00)!important;">
            
            <span >          <a href="javascript:void(0);" class="toggle-sidebar">
 <span class="glyphicon glyphicon-align-justify" data-toggle="offcanvas" title="Maximize Panel" onClick="redirectBypagewithIDValue('menu',0,0);"></span></a></span><?php  echo $_COMPANY_NAME; ?></span>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
 <?php
          if(isset($_SESSION['id']))
{
	?>
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="">Getting Started</a></li>
              <li class="active"><a href="">Documentation</a></li>
              <!-- <li class="disabled"><a href="#">Link</a></li> -->
              <li class="dropdown">
              
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $_SESSION['name']; ?> <b class="caret"></b> </a>
                <ul role="menu" class="dropdown-menu">
                  <li class="dropdown-header">Setting</li>
                  <li><a href="#">Action</a></li>
                  <li class="divider"></li>
                  <li class="active"><a href="#">Separated link</a></li>
               
                  <li class="divider"></li>
                  <li class=""><i class="glyphicon glyphicon-lock"></i>
                  <a href=" <?php echo APP_URL; ?>views/redirect.php?action=logout" onClick="javascript:void();"   >
        <?php echo 'Signout'; ?> <span> </span>
        </a></li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
          <?php
}
?>
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <div class="container" style="margin-top:0px; background-color:rgba(255,255,255,1.00);">
    <!--documents-->
        