 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login here</title>


<meta title="online study tutorial">
<meta description="This website is about online study tutorials . The tutorials about computer science , softwares , hardware and network">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- META TAGS ENDS-->


<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../css/owl.carousel.css">
<link rel="stylesheet" href="../css/owl.theme.default.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/flaticon.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/aos.css">
<link rel="stylesheet" href="../css/bootstrap-datepicker.css">


<style type="text/css">
   
   * {
      margin:0px;
      padding:0px;
   }

   body {
      background:url('../img/secbg.jpg');
      background-size:cover;
      background-repeat:no-repeat;
   }

   .main-form {
    position:absolute;
      top:100px;
      left:30%;
   }

   form .parent input {
      background-color:transparent;
      border:none;
      border-bottom:1px solid black;
      border-radius:1px;
      width:500px;
      
   }

   .heading h1 {
    color:white;
    font-family:'FFF Tusj';
    position: relative;
    top:100px;
   }

   form label {
      color:black;
      font-family:'FFF Tusj';
   }

   .loginbtn {
    background-color:rgba(0,0,0,0.7);
    color:white;
    width:100%;
   }

   .loginbtn:hover {
    color:black;
    border:1px solid black;
    background-color:transparent;
   }

   .signupbtn {
    position:relative;
    top:400px;
    left:40%;
    background-color:rgba(0,0,0,0.7);
    padding:10px;
    color:white;
   }

   .signupbtn:hover {
     text-decoration:none;
     color:black;
     background-color:rgba(0,0,0,0.2);
   }



</style>

 </head>

 <body>
 
 <?php

  session_start();

  

    include('dbconfig.php');

    if(isset($_POST['login']))
    {
    	$uname= $_POST['uname'];
    	$pass = $_POST['pass'];

    	$query = "SELECT * FROM users where username='$uname' AND password='$pass' ";

    	$result_q=mysqli_query($conn,$query);

    	$query_check = mysqli_num_rows($result_q);

      $usrname = $_REQUEST['uname'];
      $_SESSION['pass']=$pass;

    	if($query_check == 1)
    	{
        $_SESSION['user']= $usrname;
        echo "<script> location.href='../index.php' </script>";
    		#header('location:../index.php');
    	}

    	else
    	{
    		echo "user is not registered .PLEASE SIGN UP";
        header('location:login.php');
    	}
    }

  ?>

  <section class="main-body container">

  	 <div class="heading">
  	 	 <h1 class="text-center text-dark font-weight-bold">LOG IN</h1>
  	 </div>

  	  <div class="row">
  	  	  <div class="col-lg-12 ml-auto d-block mt-5">
  	  	  	  <form action="" method="post" class="main-form">
  	  	  	  	 <div class="parent form-group">
  	  	  	  	     <label> USERNAME</label>
  	  	  	  	     <input type="text" name="uname" class="form-control" required="">
  	  	  	  	  </div>

  	  	  	  	  <div class="parent form-group">
                      <label> PASSWORD</label> 
  	  	  	  	      <input type="password" name="pass" class="form-control" required="">
  	  	  	  	  </div>

  	  	  	  	  <input type="submit" name="login" class="btn mt-5 loginbtn" value="Log in">

  	  	  	  </form>
  	  	  	  <a class="signupbtn" href="signup.php">SIGN UP</a>
  	  	  </div>
  	  </div>
  </section>





    

<!-- SCRIPTS  -->

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script  src="js/aos.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script src="js/owl.carousel.min.js" type="text/javascript"></script>


<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.js" type="text/javascript"></script>

<script type="text/javascript">
  AOS.init({
    duration:1000,
  });
</script>

<!-- SCRIPTS ENDS-->

 </body>
 </html>