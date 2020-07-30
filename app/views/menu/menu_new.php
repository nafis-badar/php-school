<style>
@media screen and (min-width:768px){
    .navbar-brand-centered {
        position: absolute;
        left: 50%;
        display: block;
        width: 160px;
        text-align: center;
        background-color: #eee;
    }
    .navbar>.container .navbar-brand-centered, 
    .navbar>.container-fluid .navbar-brand-centered {
        margin-left: -80px;
    }
/*	.answer{
		max-width:44%;
	min-width:44%;
	border-radius:3px;
	font-size:16px;}*/
}
 .question{
	 
	padding:3px 5px;
	min-width:94%; 
	max-width:94%; 
 
	font-size:20px;
	  
	    margin:10px auto;
   
    
   
    border: 7px inset rgba(149,198,225,0.76);
    padding: 10px;
	 background-color:rgba(235,251,218,1.00);
	 min-height:200px;
	}
	.answer{
		min-width:95%; 
	max-width:95%; 
	background-color:rgba(0,59,96,0.98) ;
	backface-visibility:visible;
	padding:3px 5px;
	color:rgba(255,255,255,1.00);
	text-align:justify!important;
	vertical-align:middle!important;
	font-weight:bold;
	margin:2px auto;
	font-size:16px;
	border:2px outset rgba(217,222,224,0.90);
	 text-wrap:normal!important;
	 display:inline-block;
	 min-height:50px;
	
	 cursor:pointer;
	 border-radius:5px;	
	 
		}
		div.answer:click{
			background-color:rgba(138,8,11,1.00);
			}
.panel-table .panel-body{
  padding:0;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px;
}

.panel-table .panel-footer .pagination{
  margin:0; 
}

/*
used to vertically center elements, may need modification if you're not using default sizes.
*/
.panel-table .panel-footer .col{
 line-height: 34px;
 height: 34px;
}

.panel-table .panel-heading .col h3{
 line-height: 30px;
 height: 30px;
}

.panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}


</style>
 <nav class="navbar navbar-default" role="navigation">
          <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
            
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
			  <span class="navbar-brand navbar-brand-centered" style="height:30px; width:200px; padding:2px; ">
			 <i style="    margin-top: 10px!important;
    margin-bottom: 3px;!important; color:rgba(8,135,129,1.00); font-weight:bold; "> BIZ ACCOUNTS</i>
<!--h6 style="    margin-top: 3px!important;    margin-bottom: 3px;!important; color:rgba(147,147,147,1.00);   ">Making history Creating the Future</h6-->
			  </span>
		       <!--img class="navbar-brand navbar-brand-centered" style="height:50px; width:100px; padding:2px; background-color:#f8f8f8;" src=<?php echo IMAGES_PATH."festivalsofindia.png"; ?>-->
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a  style="color:rgba(0,0,0,1.00)!important; font-size:20px!important;" href="#" onClick="redirectBypage('queries');">Queries</a></li>
		        <li><a  style="color:rgba(0,0,0,1.00)!important; font-size:20px!important; " href="#" onClick="redirectBypage('queries');">Delivery </a></li>
		        <li><a  style="color:rgba(0,0,0,1.00)!important; font-size:20px!important;" href="#"  onClick="redirectBypage('specimen');">Specimen</a></li>

		      </ul>
		      <ul class="nav navbar-nav navbar-right">
              <li><a href="#" onClick="redirectBypage('developer');">Developer Area</a>   </li>
		        <li><a href="#" onClick="redirectBypage('patient');">Performance & Activity</a>   </li>
		         
		        <li>
<a href=" <?php echo APP_URL; ?>views/redirect.php?action=logout" onClick="javascript:void();"   >
        <?php echo 'Log Out'; ?> <span><img  style="width:20px; height:20px;" src=<?php echo IMAGES_PATH."key.png"; ?> alt="" > </span>
        </a></li>		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>