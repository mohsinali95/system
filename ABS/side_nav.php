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
                        <a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;View User</a>
                    </li>
					<li>
                        <a href="register_form.php"><i class="fa fa-users fa-lg"></i>&nbsp;Add New User</a>
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