<?php
include('connect.php');
require_once('session1.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/alert.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="assets/img/calculator.png">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>Add Class</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    
   
    .col-sm-2 {
        width: 38.666667%;
    }
    </style>

</head>
  <body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include("side_nav.php"); ?>   

<!--//////////////////////////////// Add Dialog ///////////////////////////////////////////-->

<br><br>
 <div class="container-fluid">

                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fa fa-sitemap fa"></i>&nbsp;Add New Class</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table">
							
								<form method="post">
                                    <tbody>
                                        <tr>
										<center>
										 
                                      <div class="form-group input-group">
									  <label class="col-sm-2 control-label">Class</label>
									  <input type="text" class="form-control" id="room_name" name="room_name" value="" required>
									  </div>
									  
									  	<div class="form-group input-group">
										<label class="col-sm-2 control-label">Library Fees</label>
										<input type="text" class="form-control" id="rental" name="rental" placeholder="library fees" required>
									   </div>
								<div class="form-group input-group">
                                        <label class="col-sm-2 control-label">Exam Fees</label>
                                        <input type="text" class="form-control" id="rental1" name="rental1" placeholder="exam Amount" required>
                                       </div>
									   
                               
										    <div class="col-md-11">
						           				 <button name="save" class="btn btn-success">Save</button>
						           			 </div>
											 <?php				
if (isset($_POST['save'])){
$room_name=$_POST['room_name'];
$rental=$_POST['rental'];
$rental1=$_POST['rental1'];

$query = mysql_query("select * from room where room_name = '$room_name' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Class Already Exist');
</script>
<?php
}else{
mysql_query("insert into room (room_name,rental,rental1) values('$room_name','$rental','$rental1')")or die(mysql_error());

?>
<script>
alert('Succsessfully Save');
window.location = "view_room.php";
</script>
<?php
}
}
?>
                                   
									</tr>
									</tbody>
						            </div>
									</center>
                                 </form>      
                                    
                            </div>                          
                        </div>                     
                    </div>                   
                </div>
			</div>
		</div>	
<?php include("footer.php"); ?>