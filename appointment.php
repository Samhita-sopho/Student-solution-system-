<!DOCTYPE html>
<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    
                    <li>    <a  href="schedule.html"><i class="fa fa-desktop fa-3x"></i>Schedule</a>
                    </li>
                    <li>
                        <a href="policy.php"><i class="fa fa-qrcode fa-3x"></i>Policies</a>
                    </li>
                     <li>
                        <a href="complaint.php"><i class="fa fa-edit fa-3x"></i> Complaints </a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabs & Panels </h2>   
                        <h5>Welcome Faculty , Here is your appointment list for today. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                                 
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            8am-9am
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 8 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            9am-10am
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 9 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            10am-11am
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 10 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            11am-12pm
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 11 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            12pm-1pm
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 12 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            2pm-3pm
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 14 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            3pm-4pm
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 15 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            4pm-5pm
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 16 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            5pm-6pm
                        </div>
                        <div class="panel-body">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                }

                                mysql_select_db('hackathon');

                                $sql = "SELECT student.s_id , s_name , s_branch , phone_number , a_time FROM appointment, student WHERE f_id=911379 AND a_date=CURDATE() AND a_time = 17 AND student.s_id = appointment.s_id" ;
                                $result = mysql_query($sql, $conn);
                                while($row = mysql_fetch_array($result))
                                {
                                echo "<p>";
                                echo "RollNo : " . $row['s_id'] . "<br/>";
                                echo "Name : " . $row['s_name'] . "<br/>";
                                echo "Branch : " . $row['s_branch'] . "<br/>";
                                echo "</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
