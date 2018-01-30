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
    <title>Billed</title>

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

</head>
  <body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="span3">&nbsp;&nbsp;&nbsp;&nbsp;<img class="index_logo" height="45" width="100" src="assets/img/logosmall.png"></div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php
				//Check to see if the user is logged in.
				
				if(isset($_SESSION['fname']))
				{ 
				echo 
				"".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
				}

				?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<li>
                        <a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;Accounts</a>
                    </li>
					<li class="divider"></li>
                    <li>
                        <a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a>
                    </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demon"><i class="fa fa-sitemap fa"></i> Class <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demon" class="collapse">
							<li>
                                <a href="processAdd_room.php" class="glyphicon glyphicon-plus">&nbsp;Add Class</a>
                            </li>
                            <li>
                                <a href="view_room.php" class="glyphicon glyphicon-eye-open">&nbsp;View Class</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-users fa-lg"></i> Student <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
							<li>
                                <a href="register.php" class="glyphicon glyphicon-plus">&nbsp;Add Student</a>
                            </li>
                            <li>
                                <a href="tenant_room.php" class="glyphicon glyphicon-eye-open">&nbsp;View v</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="rental.php"><i class="glyphicon glyphicon-import"></i>&nbsp;Library Fees</a>
                    </li>
                     <li>
                        <a href="rental1.php"><i class="glyphicon glyphicon-import"></i>&nbsp;
                        Exam Fees</a>
                    </li>
                  
					<li>
                        <a href="water.php"><i class="glyphicon glyphicon-tint"></i>&nbsp;Admission Fee</a>
                    </li>

					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demow"><i class="glyphicon glyphicon-flash"></i> Monthly Fees <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demow" class="collapse">
							<li>
                                <a href="electric_bill.php" class="glyphicon glyphicon-plus">&nbsp;Add Monthly Fees</a>
                            </li>
                            <li>
                                <a href="electricity.php" class="glyphicon glyphicon-pencil">&nbsp;Edit Monthly Fees</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demor"> All  Details Fees Invoices <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demor" class="collapse">
                            <li>
                                <a href="bill_tenant.php" class="glyphicon glyphicon-eye-open">&nbsp; All invoices View</a>
                            </li>
                            <li>
                                <a href="billed.php" class="glyphicon glyphicon-usd">&nbsp;Fees Paided invoices</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tenant_log.php"><i class="glyphicon glyphicon-sort"></i> Student Logs</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		<div id="page-wrapper">
            <div class="container-fluid">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<div class="container-fluid">
<div class="row-fluid"> 
<div id="header">
</div>
</div>
</div>
</head>
</div>
<body>
                <!-- Page Heading -->
				<nav>
				<?php
				$monthh = strtotime('now');
				$mon = date('F',$monthh);
				?>
				<center><h4>Paid in the Month of <?php echo"$mon";?><h4></center>
				<br>
				
					<div id="block_bg" class="block">	
                            <div class="navbar navbar-inner block-header">
                            <div class="block-content collapse in">
                                <div class="span12">
								
									<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<br>
									<br>
							 
									<thead>
										  <tr>
												<th><strong>Full Name</strong></th>
												<th><strong>Class</strong></th>
												<th><strong>Issued By</strong></th>
												<th><strong>Paid</strong></th>
												<th><strong>Action</strong></th>
										   </tr>
										</thead>
									<tbody>
							 
						<?php 	
						$ll = date("Y",strtotime("next year"));
						$nwww = date("Y-m-d",strtotime("Now"));
						$nww = date("Y",strtotime("Now"));
						$jan = date("m-d",strtotime("January 1"));
						$feb = date("m-d",strtotime("February 1"));
						$mar = date("m-d",strtotime("March 1"));
						$apr = date("m-d",strtotime("April 1"));
						$may = date("m-d",strtotime("May 1"));
						$jun = date("m-d",strtotime("June 1"));
						$jul = date("m-d",strtotime("July 1"));
						$aug = date("m-d",strtotime("August 1"));
						$sep = date("m-d",strtotime("September 1"));
						$oct = date("m-d",strtotime("October 1"));
						$nov = date("m-d",strtotime("November 1"));
						$dec = date("m-d",strtotime("December 1"));	
						
						
						//START DI	
						if(($nwww >= "$nww-$jan") && ($nwww < "$nww-$feb")){
						$janss = "$nww-$jan";
						$febss = "$nww-$feb";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$janss' AND date_issued  < '$febss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$feb") && ($nwww < "$nww-$mar")){
						$febss = "$nww-$feb";
						$marss = "$nww-$mar";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$febss' AND date_issued  < '$marss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$mar") && ($nwww < "$nww-$apr")){
						$marss = "$nww-$mar";
						$aprss = "$nww-$apr";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$marss' AND date_issued  < '$aprss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$apr") && ($nwww < "$nww-$may")){
						$aprss = "$nww-$apr";
						$mayss = "$nww-$may";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$aprss' AND date_issued  < '$mayss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$may") && ($nwww < "$nww-$jun")){
						$mayss = "$nww-$may";
						$junss = "$nww-$jun";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$mayss' AND date_issued  < '$junss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$jun") && ($nwww < "$nww-$jul")){
						$junss = "$nww-$jun";
						$julss = "$nww-$jul";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$junss' AND date_issued  < '$julss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$jul") && ($nwww < "$nww-$aug")){
						$julss = "$nww-$jul";
						$augss = "$nww-$aug";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$julss' AND date_issued  < '$augss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$aug") && ($nwww < "$nww-$sep")){
						$augss = "$nww-$aug";
						$sepss = "$nww-$sep";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$augss' AND date_issued  < '$sepss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$sep") && ($nwww < "$nww-$oct")){
						$sepss = "$nww-$sep";
						$octss = "$nww-$oct";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$sepss' AND date_issued  < '$octss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$oct") && ($nwww < "$nww-$nov")){
						$octss = "$nww-$oct";
						$novss = "$nww-$nov";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$octss' AND date_issued  < '$novss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$nov") && ($nwww < "$nww-$dec")){
						$novss = "$nww-$nov";
						$decss = "$nww-$dec";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$novss' AND date_issued  < '$decss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}
						if(($nwww >= "$nww-$dec") && ($nwww < "$ll-$jan")){
						$decss = "$nww-$dec";
						$janss = "$ll-$jan";
							$qry = mysql_query("SELECT * FROM bill, tenant, room WHERE
							bill.tenant_id = tenant.tenant_id AND bill.room_id = room.room_id
							AND date_issued > '$decss' AND date_issued  < '$janss'")or die(mysql_error());
							while($rec = mysql_fetch_array($qry)){
							$tenant_id = "$rec[tenant_id]";
							$bill_id = "$rec[bill_id]";
							$stat = "$rec[status]";
								if($stat == '1'){
								echo "<tr>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-success' type='button' disabled='disabled'><i class='glyphicon glyphicon-ok'></i></button></td>
								<td><a href='print_receipt.php?id=$bill_id'>
								<button class='btn btn-primary' type='button' title='click here to print'><i class='glyphicon glyphicon-print'></i></button>
								</a></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></td>
								</tr>";}
								else{
								echo "<tr class='danger'>
								<td>$rec[fname] &nbsp; $rec[lname]</td>
								<td>$rec[room_name]</td>
								<td>$rec[issued_by]</td>
								<td><button class='btn btn-danger' type='button' disabled='disabled'><i class='glyphicon glyphicon-remove'></i></button></td>
								<td><button class='btn btn-primary' type='button' disabled='disabled'><i class='glyphicon glyphicon-print'></i></button>
								<a button class='btn btn-danger' type='button' href='delete_billed.php?id=$bill_id' title='click here to delete'><i class='glyphicon glyphicon-trash'></i></button></a>
								&nbsp;<a button class='btn btn-success' type='button' href='paid.php?id=$bill_id' title='click here if already paid'><i>Paid</i></button>
								</td>
								</tr>";}
							}
							}		
						//END DI	
						?>
						</tbody>
						</table>
						</form>
						</div>
						</div>
						</div>
				<center><h5>All Rights Reserved 2017</h5></center>
							</div>
							</div>
						  </div>
						</div>
	</nav>
    <!-- /#wrapper -->

     <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
<?php include('script.php'); ?>
</body>

</html>
