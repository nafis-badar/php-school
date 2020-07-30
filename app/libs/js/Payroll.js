 function SavePayrollPeriod()
 {
	 	var pg='app/controllers/Save.PayrollPeriod.php';
		 // alert(ID);
	 var Type='SavePayrollPeriod';
	  
	 var FromDate = $("#FromDate").val();
	 var ToDate = $("#ToDate").val();
	 var Name = $("#Name").val();
	 
	 
	 var ID = $("#ID").val();
		 
                $.post( pg, 
				{Type:Type, ID:ID, Name:Name, FromDate:FromDate, ToDate: ToDate})
                    .done(function( data ) {
                       // $("#message").html(data);
						redirectBypagewithIDValue('indexpayrollperiod',0,0);
						// window.location.reload();
						document.getElementById("Search").focus();
						 /*if(data==0)
							 {
								 redirectBypagewithIDValue('error',PageID,MasterID);
								 }*/
                    });
              //  e.preventDefault();
	 }
function CreatePayroll(PayrollPeriodID)
	 {
		 var pg='app/controllers/Save.Payroll.php';
		  var Type='CreatePayroll';
		 // alert(Type);
		  $.post( pg, 
				{Type:Type, PayrollPeriodID:PayrollPeriodID})
                    .done(function( data ) {
                       // $("#message").html(data);
						redirectBypagewithIDValue('indexpayrollperiod',0,0);
						// window.location.reload();
						document.getElementById("Search").focus();
						 /*if(data==0)
							 {
								 redirectBypagewithIDValue('error',PageID,MasterID);
								 }*/
                    });
		 }