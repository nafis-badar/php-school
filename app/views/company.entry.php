<?php
if (!isset($_SESSION)) {session_start();}
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL && ~E_NOTICE);
require_once("Company.php");
	ShowForm();
function ShowForm()
{
 
?>
<div class="workspace">
<div class="displayhead">Business Profile<span style=""  name="Operation"   class="btn btn-primary pull-right"  onclick="SaveProfile();">
	<i class="fa fa-check-circle-o" aria-hidden="true"></i> Save
</span>
<span style="margin-right:5px;"  name="Operation"   class="btn btn-primary pull-right "onClick="window.history.back();" >
	
<i class="glyphicon glyphicon-share-alt  icon-flipped " aria-hidden="true"></i> Back</span></div>
<div class="panel-body">

<?php
//$db_handle = new DBController();
$company_handle = new Company();
$getinfo = $company_handle->CompanyDetails();
// ("SELECT m.ID, m.Name, m.Alias, m.PDID, p.TagLine, p.AddressID, m.RegisterDate InCorporationDate,p.ContactNo, p.TEL,p.Website,p.Email,p.State,p.Country,p.PAN,p.CIN,p.TAN,p.VAT,p.CST,p.TIN,p.GST  FROM tbl_master m left outer join tbl_pd p on p.id=m.pdid where m.mastertypeid=1 limit 1");/* WHERE MasterTypeID=1");*/
/*echo sizeof($getcompanyinfo,1)."<br>";
echo sizeof($getcompanyinfo,0)."<br>";
echo count($getcompanyinfo,1)."<br>";
echo count($getcompanyinfo,0)."<br>";
echo $getcompanyinfo[0]["Name"];*/
//Unicorp
for ($x = 0; $x < count($getinfo,0); $x++) {
       ?>
  
     
	
<div class="" name="myform<?php echo $x; ?>" id ="myform<?php echo $x; ?>" >

   <div class="form-group ">
   <div class="" style="">

<input type="hidden" id="ID" name="ID"value="<?php echo $getinfo[$x]["ID"]; ?>">
<input type="hidden" id="PDID" name="PDID" value="<?php echo $getinfo[$x]["PDID"]; ?>">
<input type="hidden" id="AddressID" name="AddressID" value="<?php echo $getinfo[$x]["AddressID"]; ?>">
</div>
  <label class="control-label" for="name">Business Name:</label>
   <div>
  <input type="text" class="form-control " id="Name" name="Name" placeholder="Enter Name" value="<?php echo $getinfo[$x]["Name"]; ?>"> 
 
  
</div> </div> 

   <div class="form-group ">
  <label class="control-label" for="tagline">Tag Line:</label>
  <div class="">
  <input type="text" class="form-control " id="TagLine" name="TagLine" placeholder="Enter Organisation Tagline" value="<?php echo $getinfo[$x]["TagLine"]; ?>"> 
</div></div>

     <div class="form-group ">
  <label class="control-label" for="regdate">Registration Date:</label>
  <div class="">
  <input type="date" class="form-control " id="RegDate" name="RegDate"  placeholder="Enter Registration Date" value="<?php echo $getinfo[$x]["InCorporationDate"]; ?>"> 
</div></div>
 
<div class="form-group  ">
  <label class="control-label" for="Address">Business Address:</label>
  <div class="">
   <?php
  //$address_handle = new Address();
$getaddress = $company_handle->AddressByID($getinfo[$x]['AddressID']);
?>
  <textarea class="form-control " placeholder="Enter Address" id="Address"  name="Address" rows="3" >
  <?php echo ltrim($getaddress[0]["Address"]); ?></textarea> 
</div>
 
</div>

<div class="form-group   "> 
  <label class="control-label" for="State">State:</label>
  <div class="">
  <input type="text" class="form-control " id="State"  name="State" placeholder="Enter State" value="<?php echo $getinfo[$x]["State"]; ?>"> 
  </div> 
 </div>
 <!--div class="form-group   "> 
  <label class="control-label" for="country" >Country:</label>
  <div class="">
  <input type="text" class="form-control " id="country"  name="country" placeholder="Enter Country" value="<?php echo $getinfo[$x]["Country"]; ?>"> 
	</div>  
 </div-->
 
 <!--div class="form-group  ">
    <label class="control-label" for="tel">Tel:</label>
  <div class="">
  <input type="text" class="form-control " id="tel" name="tel"  placeholder="Enter Telephone no" value="<?php echo $getinfo[$x]["TEL"]; ?>"> 
  </div>
</div-->
 
<div class="form-group   ">
  <label class="control-label" for="ContactNo">Mobile:</label>
  <div class="">
  <input type="text" class="form-control " id="ContactNo"  name="ContactNo" placeholder="Enter Mobile no" value="<?php echo $getinfo[$x]["ContactNo"]; ?>"> 
	</div>
</div>
  
 <div class="form-group   ">
 
  <label class="control-label" for="email">Email:</label>
  <div class="">
  <input type="text" class="form-control " id="Email"  name="Email"  placeholder="Enter email" value="<?php echo $getinfo[$x]["Email"]; ?>"> 
 
</div></div>
 
 <!--div class="form-group   ">
  <label class="control-label" for="website">Web Site:</label>
  <div class="">
  <input type="text" class="form-control " id="website"  name="website"  placeholder="Enter Web Site" value="<?php echo $getinfo[$x]["Website"]; ?>"> 
	</div>
</div-->
  
  <div class="form-group   ">
  <label class="control-label" for="GST">GST NO:</label>
  <div class="">
  <input type="text" class="form-control " id="GST"  name="GST" placeholder="Enter GST NO" value="<?php echo $getinfo[$x]["GST"]; ?>"> 
	</div>
</div>

<!--div class="form-group   ">
  <label class="control-label" for="pan">PAN NO:</label>
  <div class="">
  <input type="text" class="form-control " id="pan"  name="pan" placeholder="Enter PAN NO" value="<?php echo $getinfo[$x]["PAN"]; ?>"> 
	</div>
</div>

 <div class="form-group   ">
  <label class="control-label" for="CIN">CIN NO:</label>
  <div class="">
  <input type="text" class="form-control " id="CIN"  name="CIN" placeholder="Enter CIN" value="<?php echo $getinfo[$x]["CIN"]; ?>"> 
	</div>
</div>

 
 <div class="form-group   ">
  <label class="control-label" for="TAN">TAN NO:</label>
  <div class="">
  <input type="text" class="form-control " id="TAN"  name="TAN" placeholder="Enter TAN" value="<?php echo $getinfo[$x]["TAN"]; ?>"> 
	</div>
</div>
 <div class="form-group   ">
  <label class="control-label" for="VAT">VAT NO:</label>
  <div class="">
  <input type="text" class="form-control " id="VAT" name="VAT"  placeholder="Enter VAT" value="<?php echo $getinfo[$x]["VAT"]; ?>"> 
	</div>
</div>
 <div class="form-group">
  <label class="control-label" for="CST">CST NO:</label>
  <div class="">
  <input type="text" class="form-control " id="CST" name="CST"  placeholder="Enter CST" value="<?php echo $getinfo[$x]["CST"]; ?>"> 
	</div>
</div>
    <div class="form-group   ">
  <label class="control-label" for="TIN">TIN NO:</label>
  <div class="">
  <input type="text" class="form-control " id="TIN" name="TIN"  placeholder="Enter TIN" value="<?php echo $getinfo[$x]["TIN"]; ?>"> 
	</div>
</div-->      
 
     </div>
      <!--div style="text-align:right;"><a class="btn btn-black btn-block">Update</a></div--> 
 
   
<?php

} 
 
?>
 
 </div>
 <script type="text/javascript" src="app/libs/js/Company.js"></script>
  </div>

 <?php

} 
 
?>