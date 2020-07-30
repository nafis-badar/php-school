 function SaveNews()
 {
	 	var pg='app/controllers/News.php';
		 //alert(MasterID);
	 var Type='SaveNews';
	 var HeadLine = $("#HeadLine").val();
	 var HighLights = $("#HighLights").val();
	 var News = $("#News").val();
	 
	 var ID = $("#ID").val();
		//ID, HeadLine, HighLights, News, NewsDate, Image1, CreatedBy, CreateTime, ModifiedBy, ModifyTime
		 
                $.post( pg, 
				{Type:Type, ID:ID, HeadLine:HeadLine, HighLights:HighLights, News:News})
                    .done(function( data ) {
                        //$("#message").html(data);
						
						 window.location.reload();
						document.getElementById("HeadLine").focus();
						 /*if(data==0)
							 {
								 redirectBypagewithIDValue('error',PageID,MasterID);
								 }*/
                    });
              //  e.preventDefault();
	 }