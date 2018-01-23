<?php
include"connection.php";
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width=device-width">
<title>My Doctor</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/6-512.png">
</head>

<body>
   <!-- start header-->
   <div class="container">
     <div class="row">
       <div class="col-sm-6" class="navbar-brand">
        <img src="images/reallogo.png" class="img-responsive" id="real_logo" >
       </div>
       <br>
       <!-- navigation start-->
        <div class="col-sm-6" id="my_menu">
          <nav class="nav navbar-default">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my_collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
          
              </div><!-- nav header-->
          
           </nav><!-- end of nav -->
        </div>
        <!-- navigation end-->
        
     </div> <!-- row end -->
     
   </div> <!-- end container -->
   
    <!-- end header -->
    <!------------------------------------style------------------------------->
    <style>
    .pagination>li {
display: inline;
padding:0px !important;
margin:0px !important;
border:none !important;
}
.modal-backdrop {
  z-index: -1 !important;
}
/*
Fix to show in full screen demo
*/
iframe
{
    height:700px !important;
}

.btn {
display: inline-block;
padding: 6px 12px !important;
margin-bottom: 0;
font-size: 14px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
-ms-touch-action: manipulation;
touch-action: manipulation;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
background-image: none;
border: 1px solid transparent;
border-radius: 4px;
}

.btn-primary {
color: #fff !important;
background: #428bca !important;
border-color: #357ebd !important;
box-shadow:none !important;
}
.btn-danger {
color: #fff !important;
background: #d9534f !important;
border-color: #d9534f !important;
box-shadow:none !important;
}
    
    </style>
    
    <!----------------------------- end --------------------------------------->
    
                         <!-- start body-->
                         
           <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<body>
<div class="container">
	<div class="row">
		<h2 class="text-center">Select Your Doctor</h2>
        <br>
	</div>
    
        <div class="row">
		
            <div class="col-md-12">
            
            
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
                            <th>NO#</th>
							<th>Name</th>
							<th>Email</th>
							<th>address</th>
							<th>specility</th>
                            <th>Information</th>
                            <th>Appointment</th>
							
						</tr>
					</thead>

					

					<tbody>
						<?php
         $run=mysql_query("select * from doc_info");
	     while ($row=mysql_fetch_array($run)){
?>
						
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['f_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['specialty'];?></td>
                    <td>
                        <a href="view_profile.php?id=<?php echo $row['id'];?>">
                            <button class='btn btn-info btn-xs' data-title='Edit' data-toggle='modal' >View Profile</button>
                        </a>
                    </td>
            <td>
                <a href="app.php?id=<?php echo $row['id']; ?>&patient_id=<?php echo $_SESSION['email']; ?> &company_id=<?php echo $_SESSION['email']  ?>">
                <button class='btn btn-success btn-xs' data-title='Delete' data-toggle='modal' >Online Hire</button>
                </a>
            </td>
          
				        </tr>
  <?php       }
        ?>
   
                       
					</tbody>
    
        
						
                        
                       
					
   
				</table>

	
	</div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Tiger Nixon">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="System Architect">
        </div>
        <div class="form-group">
        
        
      <input class="form-control " type="text" placeholder="Edinburgh">
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    </body>
            
            
            <!-- end of profile-->
            </div><!-- end of container-->
            
            
            
            </div><!-- end of container fluaid-->             
                         
                         
                         
                         
                    </div>     <!-- end body-->
                         
                         
             <!-- footer start-->
            <div class="container-fluid" id="footer">
            <div class="container">
              <div class="row">
               <div class="col-sm-6">
               <span class="glyphicon glyphicon-envelope">afaqzai@gmail.com</span>
               <span class="glyphicon glyphicon-earphone">+92326967721</span>
               
               </div>
               <div class="col-sm-6">
           
               </div>
              
              </div>
            </div><!--container end -->
            </div><script type="text/javascript" src="js/jquery-3.1.1.js"></script><!-- footer END --><script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
