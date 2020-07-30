 function SaveProfile()
 {
	 	var pg='app/controllers/Save.Company.php';
		 //alert(MasterID);
	 var Type='SaveCompany';
	 var Name = $("#Name").val();
	 var TagLine = $("#TagLine").val();
	 var PDID = $("#PDID").val();
	 var AddressID = $("#AddressID").val();
	 var ContactNo = $("#ContactNo").val();
	 var Address = $("#Address").val();
	 var RegDate = $("#RegDate").val();
	 var Email = $("#Email").val();
	 var State = $("#State").val();
	 var GST = $("#GST").val();
     var ID = $("#ID").val();
		 
                $.post( pg, 
				{Type:Type, ID:ID, PDID:PDID, Name:Name, AddressID:AddressID, 
				ContactNo: ContactNo, Address: Address, RegDate: RegDate, 
				Email: Email, State: State, TagLine:TagLine, GST:GST  })
                    .done(function( data ) {
                        $("#message").html(data);
						
						window.location.reload();
						document.getElementById("Name").focus();
						 /*if(data==0)
							 {
								 redirectBypagewithIDValue('error',PageID,MasterID);
								 }*/
                    });
                e.preventDefault();
	 }