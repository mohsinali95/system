<?php 
$title = "home page";
include("header.php");
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("side_nav.php"); ?>
		<!-- /Navigation -->
        <div id="page-wrapper">
            <div class="container-fluid">
			<nav>
			<head>
     <div class="row-fluid">	
              <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <center><h4>Welcome to the School Billing System!</h4></center>
                    </div>
               </div>
       </div>
                <!-- Page Heading -->
      <div class="row">
        <!--=================================================== site1 ===================================================-->
				<?php
				$monthh = strtotime('now');
				$mon = date('F',$monthh);
				?>
              <div id="g-site1" class="col-xs-12">
                  <div class="demo-container">
					<strong><h3><center>Updates in the month of <?php echo "$mon"?></center></h3></strong>
						<div id="block_bg" class="block">	
                            <div class="navbar navbar-inner block-header">
                            <div class="block-content collapse in">
                                <div class="span12">
								<form class="form-horizontal" role="form" method="post">
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
								<br>
								<br>
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
					
					if(($nwww >= "$nww-$jan") && ($nwww < "$nww-$feb")){
					$janss = "$nww-$jan";
					$febss = "$nww-$feb";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$janss' AND date_issued  < '$febss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$janss' AND date_st  < '$febss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Class</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$feb") && ($nwww < "$nww-$mar")){
					$febss = "$nww-$feb";
					$marss = "$nww-$mar";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$febss' AND date_issued  < '$marss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$febss' AND date_st  < '$marss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Class</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$mar") && ($nwww < "$nww-$apr")){
					$marss = "$nww-$mar";
					$aprss = "$nww-$apr";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$marss' AND date_issued  < '$aprss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$marss' AND date_st  < '$aprss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Class</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$apr") && ($nwww < "$nww-$may")){
					$aprss = "$nww-$apr";
					$mayss = "$nww-$may";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$aprss' AND date_issued  < '$mayss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$aprss' AND date_st  < '$mayss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Class</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$may") && ($nwww < "$nww-$jun")){
					$mayss = "$nww-$may";
					$junss = "$nww-$jun";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$mayss' AND date_issued  < '$junss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$mayss' AND date_st  < '$junss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Class</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$jun") && ($nwww < "$nww-$jul")){
					$junss = "$nww-$jun";
					$julss = "$nww-$jul";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$junss' AND date_issued  < '$julss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$junss' AND date_st  < '$julss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success'>Total Paid: $count Students</td><td class='danger'>Total UnPaid: $unbilled Student</td></tr>
					<tr><td class='danger'>Total Students: $counts Students</td><td class='warning'>Total Paid on Security: $countt Class</td></tr>";
					}
					
					if(($nwww >= "$nww-$jul") && ($nwww < "$nww-$aug")){
					$julss = "$nww-$jul";
					$augss = "$nww-$aug";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$julss' AND date_issued  < '$augss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$julss' AND date_st  < '$augss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Class</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$aug") && ($nwww < "$nww-$sep")){
					$augss = "$nww-$aug";
					$sepss = "$nww-$sep";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$augss' AND date_issued  < '$sepss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$augss' AND date_st  < '$sepss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Classes</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$sep") && ($nwww < "$nww-$oct")){
					$sepss = "$nww-$sep";
					$octss = "$nww-$oct";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$sepss' AND date_issued  < '$octss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$sepss' AND date_st  < '$octss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Classes</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$oct") && ($nwww < "$nww-$nov")){
					$octss = "$nww-$oct";
					$novss = "$nww-$nov";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$octss' AND date_issued  < '$novss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$octss' AND date_st  < '$novss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Classes</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$nov") && ($nwww < "$nww-$dec")){
					$novss = "$nww-$nov";
					$decss = "$nww-$dec";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$novss' AND date_issued  < '$decss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$novss' AND date_st  < '$decss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total UnPaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Classes</h4></strong></td></tr>";
					}
					
					if(($nwww >= "$nww-$dec") && ($nwww < "$ll-$jan")){
					$decss = "$nww-$dec";
					$janss = "$ll-$jan";
					
					$qry = mysql_query("SELECT * FROM bill WHERE date_issued > '$decss' AND date_issued  < '$janss'")or die(mysql_error());
					$count = mysql_num_rows($qry);
					$qrys = mysql_query("SELECT * FROM `tenant`")or die(mysql_error());
					$counts = mysql_num_rows($qrys);
					$unbilled = $counts - $count;
					$qryt = mysql_query("SELECT * FROM electricity WHERE date_st > '$decss' AND date_st  < '$janss'")or die(mysql_error());
					$countt = mysql_num_rows($qryt);
					
					echo"<tr><td class='success' height='50'><strong><h4>Total Paid: $count Students</h4></strong></td><td class='danger' height='50'><strong><h4>Total Unpaid: $unbilled Students</h4></strong></td></tr>
					<tr><td class='danger' height='50'><strong><h4>Total Students: $counts Students</h4></strong></td><td class='info' height='50'><strong><h4>Total Paid on Security: $countt Classes</h4></strong></td></tr>";
					}
					?>
					</table>
					
					<br>
					<br>
					<br>
					</form>
					</div>
					</div>
					</div>
					</div>
                </div>
                      </div>
                  </div>
              </div>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			</head>
			</nav>
            </div>
            <!-- /.container-fluid -->

        </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php 
include("footer.php");
?>
