 function SaveEmployee()
 {
	 	var pg='app/controllers/Save.Employee.php';
		 //alert(MasterID);
	 var Type='SaveCompany';
	 var Name = $("#Name").val();
	 var MID = $("#MID").val();
	 var PDID = $("#PDID").val();
	 var AddressID = $("#AddressID").val();
	 var ContactNo = $("#ContactNo").val();
	 var Address = $("#Address").val();
	 var RegDate = $("#RegDate").val();
	 var Email = $("#Email").val();
	 var State = $("#State").val();
	 
	 var Country = $("#Country").val();
	  var IsMaster = $("#IsMaster").val();
	  var DepartmentID = $("#DepartmentID").val();
	 var ID = $("#ID").val();
		 
                $.post( pg, 
				{Type:Type, ID:ID, MID:MID, PDID:PDID, Name:Name, AddressID:AddressID, 
				ContactNo: ContactNo, Address: Address, RegDate: RegDate, 
				Email: Email, State: State, Country:Country, IsMaster:IsMaster, DepartmentID:DepartmentID})
                    .done(function( data ) {
                       // $("#message").html(data);
						
						 window.location.reload();
						document.getElementById("Name").focus();
						 /*if(data==0)
							 {
								 redirectBypagewithIDValue('error',PageID,MasterID);
								 }*/
                    });
              //  e.preventDefault();
	 }