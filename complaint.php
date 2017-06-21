<!DOCTYPE html>
<?php       
             session_start();

			$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn ) {
            die('Could not connect: ' . mysql_error());
            }

            mysql_select_db('hackathon');
			if(isset($_POST['submit']))
				
			{   $filename="policy_".$_POST['policy_num'].".txt";
			    echo $_SESSION['user'];
			    $myfile = fopen($filename, "w") or die("Unable to open file!");
				$txt = $_POST['complaint'];
				fwrite($myfile, $txt);
				fclose($myfile);
				
				$sql = "INSERT INTO complaints(s_id,f_id,complain_link) values({$_SESSION['user']},{$_POST['faculty_id']},'$filename') ";
				echo $sql;$result = mysql_query($sql, $conn);
				echo $result;
			}
			
?>
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
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                     <li>
                        <a  href="appointment.php"><i class="fa fa-dashboard fa-3x"></i> Appointments</a>
                    </li>
                    <li>
                        <a  href="policy.php"><i class="fa fa-qrcode fa-3x"></i>Policies</a>
                    </li>
						   
                     <li>
                        <a class="active-menu"  href="complaint.php"><i class="fa fa-edit fa-3x"></i> Complaints </a>
                    </li>
					
					                   
                   
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>UI Elements</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Simple Buttons Examples
                        </div>      <div class="panel-body"> 
                                          <h4>Complaint Submission </h4>  
                                       <div style="margin-top: 10px;">
										<form action="" method="post">
										Policy Number<input type="text box" name="policy_num"><br><br>
										Faculty ID	<input type="text box" name="faculty_id"><br><br>
										Complaint<input type="text box" name="complaint">	<br><br>
										<br><br><center><input type="submit" value="submit" name="submit"></center>
										</form>
									  </div></div>
                                       

                                       
											
															
									

                                       
                   
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
