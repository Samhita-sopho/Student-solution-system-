<?php
  session_start();
  include 'create_database_essentials.php';

  if(isset($_SESSION['user'])) {
    header("Location:policy.php"); 
  }

  if(isset($_POST['login'])) {
    $s_id = $_POST['s_id'];
    $password = $_POST['password'];
    
    $login_query = "SELECT * FROM studentlogin WHERE username= $s_id AND password = '$password'";
    echo $login_query;
	$retval = mysql_query( $login_query, $conn );
    if(mysql_num_rows($retval)!=0) {
      $_SESSION['user']=$s_id;
      header("Location:welcome.php");
    }
    
  }
  
  if(isset($_POST['register'])) {
    $s_id = $_POST['s_id'];
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    $retval=mysql_query("insert into student values ($s_id,'$name','$branch',$phoneNumber)")
             or die("Failed to query database ".mysql_error());
    $retval=mysql_query("insert into studentlogin values ($s_id,'$password')")
             or die("Failed to query database ".mysql_error());
    session_destroy();
    header("Location:student_login.php");  }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">
          <form action="student_login.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Student ID<span class="req">*</span>
              </label>
              <input type="text" name="s_id"required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Branch<span class="req">*</span>
              </label>
              <input type="text" name="branch"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Name<span class="req">*</span>
            </label>
            <input type="text" name="name"required autocomplete="off"/>
          </div>
          
		  <div class="field-wrap">
            <label>
              Phone Number<span class="req">*</span>
            </label>
            <input type="text" name="phoneNumber"required autocomplete="off"/>
          </div>
		  
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" name="register" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="student_login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Student ID<span class="req">*</span>
            </label>
            <input type="text" name="s_id"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password"required autocomplete="off"/>
          </div>
          
          
          
          <button class="button button-block" name="login">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
