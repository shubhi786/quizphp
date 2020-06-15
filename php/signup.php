<html>
<head> 
<title> Online study | Free tutorials  </title>

<!-- META TAGS -->

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
      background:url('../img/mainbg.jpg');
      background-size:100% 100%;
      background-repeat:no-repeat;
   }

   form .parent input {
      border:none;
      border-bottom:1px solid rgba(0,0,0,0.7);
      border-radius:1px;

   }

   .heading h1 {
    color:rgba(0,0,0,0.7);
    font-family:'FFF Tusj';
    font-weight: bold;
    position:relative;
    left:40%;
    top:150px;
    
   }

   form label {
      color:rgba(0,0,0,0.7);
      font-weight:bolder;
      font-family:'FFF Tusj';
   }

   .form_main {
      position:absolute;
      top:230%;
      left:30%;
   }

   .form-control {
      background-color:transparent;
      width:300px;
   }

   .signupbtn {
      background-color:rgba(0,0,0,0.6);
      color:white;
      width:100%;
   }

   .signupbtn:hover {
      background-color:transparent;
      border:1px solid black; 
   }

   .login-page a {
      position:relative;
      top:470px;
      left:40%;
      color:black;
      
   }


</style>


</head>

<body>
	<!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,288L34.3,245.3C68.6,203,137,117,206,74.7C274.3,32,343,32,411,74.7C480,117,549,203,617,234.7C685.7,267,754,245,823,213.3C891.4,181,960,139,1029,117.3C1097.1,96,1166,96,1234,85.3C1302.9,75,1371,53,1406,42.7L1440,32L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> -->

   <div class="user-creds container mt-5">
       <div class="col-lg-8 ml-auto d-block container">

         <?php
           
           include('dbconfig.php');
           include('users.php');

           if(isset($_POST['signup']))
           {
              $uname = $_POST['uname'];
              $pass = $_POST['password'];
              $email = $_POST['email'];

              $query = "SELECT * FROM users where username = '$uname' ";

         $run = mysqli_query($conn,$query);

         $check = mysqli_num_rows($run);

         if($check == 0)
         {
              $q = "INSERT INTO users values ( '0' , '$uname' , '$pass' , '$email' ) ";

              mysqli_query($conn,$q);
         }
         else
         {
            echo "failed";
         }


       }

          ?>

          <div class="heading">
             <h1>SIGN UP</h1>
          </div>

           <form action="" method="post" class="form_main">
               <div class="parent form-group">
                  <label>USERNAME</label>
                   <input type="text" name="uname" class="form-control">
               </div>

               <div class="parent form-group">
                   <label>PASSWORD</label>
                   <input type="password" name="password" class="form-control" required="">
               </div>

               <div class="parent form-group">
                   <label>EMAIL</label> 
                   <input type="email" name="email" class="form-control" required="">
               </div>

               <input type="submit" name="signup" class="btn signupbtn" value="Sign up">
           </form>

           <div class="login-page">
               <a class="nav-link" href="login.php">LOGIN HERE...</a>
           </div>
       </div>
   </div>
 
    
   





<!-- SCRIPTS  -->

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script  src="../js/aos.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script src="../js/owl.carousel.min.js" type="text/javascript"></script>


<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/owl.js" type="text/javascript"></script>

<script type="text/javascript">
  AOS.init({
    duration:1000,
  });
</script>

<!-- SCRIPTS ENDS-->

</body>
</html>
