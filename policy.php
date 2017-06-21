<!DOCTYPE html>
<?php session_start()?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">Faculty</a> 
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
				
					
                    
                    <li>    <a  href="schedule.html"><i class="fa fa-desktop fa-3x"></i>Schedule</a>                     </li>
                    <li>
                        <a href="policy.php"><i class="fa fa-qrcode fa-3x"></i>Policies</a>
                    </li>
                     <li>
                        <a href="complaint.php"><i class="fa fa-edit fa-3x"></i> Complaints </a>
                    </li>
                </ul>
            </div>
            
        </nav>  
        <div id="page-wrapper" >
        <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
        if(! $conn ) {
          die('Could not connect: ' . mysql_error());
        }

        mysql_select_db('hackathon');
        $sql = "SELECT * FROM policy" ;
        $result = mysql_query($sql, $conn);
        echo '    <div class="col-md-6">
                  <!--   login -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Login Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Faculty ID</th>
                                            <th>Policy ID</th>
								
                                        </tr>
                                    </thead>
                                    <tbody>' ;
                                      
                                    while($row = mysql_fetch_array($result))
                                    {
                                    echo "<tr>";
									echo "<td>" . $row['f_id'] . "</td>";
                                    echo "<td><a href=".$row['p_link'].">" . $row['p_id'] . "</a></td>";
                                    echo "</tr>";
                                    }

                            echo ' </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>';

    mysql_close($conn);
?>
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
