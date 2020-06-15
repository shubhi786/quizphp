<html>
<head> 
<title> Online quiz  </title>

<!-- META TAGS -->

<meta title="online study tutorial">
<meta description="This website is about online study tutorials . The tutorials about computer science , softwares , hardware and network">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- META TAGS ENDS-->

<script type="text/javascript" src="js/jquery-3.4.1.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">

<style type="text/css">
   
   * {
      margin:0px;
      padding:0px;
   }
    
   .main-frame {
      width:1000px;
      height:500px;
      background-color:rgb(235, 235, 224);
      position:absolute;
      top:20%;
      left:20%;
      -webkit-box-shadow: 3px 9px 33px -8px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 9px 33px -8px rgba(0,0,0,0.75);
box-shadow: 3px 9px 33px -8px rgba(0,0,0,0.75);
   }

   .heading h1 {
      color:rgba(0,0,0,0.7);
      font-family:'FFF Tusj';
   }

   #quiz {
      width:60%;

   }

   .start {
      margin-left:40%;
   }

   .options {
      margin-left:30%;
	   }


</style>


</head>

<body>
   
   

   <section class="">

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,288L34.3,245.3C68.6,203,137,117,206,74.7C274.3,32,343,32,411,74.7C480,117,549,203,617,234.7C685.7,267,754,245,823,213.3C891.4,181,960,139,1029,117.3C1097.1,96,1166,96,1234,85.3C1302.9,75,1371,53,1406,42.7L1440,32L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> 

      <div class="main-frame col-lg-8 container">

          <div class="heading">

               <h1 class="text-center mt-4">I.T. QUIZ</h1>

          </div>
            
            <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">

  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">Info</a>
  </li>

</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">  <!-- HOME TAB -->
    

         <button type="button" class="btn btn-primary btn-lg start" data-toggle="tab" href="#quiz">CHOOSE QUIZ</button>



<!--      <script type="text/javascript">
          
             $(document).ready(function(){
               $("button").click(function(){
                  $("select").toggle();
               });
             });

      </script> -->

         <div class="tab-pane fade mt-4" id="quiz">     

         <form action="php/show_ques.php" method="post">
             <select class="form-control form-control-lg options" name="cat">

               <?php

                 #error_reporting(0);

                  session_start();
                   
                   include('php/dbconfig.php');

                   $query = "SELECT * FROM catog";

                   $run = mysqli_query($conn,$query);

                   $check = mysqli_num_rows($run);

                   if($check > 0 )
                   {

                     while($rows = mysqli_fetch_assoc($run))
                       { ?>
       
                  <option value="<?php echo $rows['id']; ?>"><?php echo $rows['cat_name']; ?></option>   <!-- CATEGORIES  --> 

              <?php 
                   }
                }
                ?>    

                <input type="submit" value="Start" class="btn btn-success" style="margin-left:70%;margin-top:3%;">
     
             </select> 
         </form>                  

         </div>

  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> <!-- PROFILE TAB -->

    <h3><a class="nav-link text-priamry" href="php/login.php">LOG IN</a></h3>
     
     <?php 

       #error_reporting(0);

       include('php/dbconfig.php');

       $checkvar = $_SESSION['user'];

       echo $checkvar;

       $q = "SELECT * FROM users where username='".$_SESSION['user']."' ";

       $qrun = mysqli_query($conn,$q);

       $veri = mysqli_num_rows($qrun);

       if($veri == 1)
       {
         while($rows = mysqli_fetch_assoc($qrun))
         {  ?>
          
           <table>
               <tr>
                  <th>
                     ID
                  </th>
                  <th>
                     NAME
                  </th>
                  <th>
                     EMAIL
                  </th>
                  <th>
                     PASSWORD
                  </th>
               </tr>

               <tr>
                  <td>
                     <?php echo $rows['id']; ?>
                  </td>
                  <td>
                     <?php echo $rows['username']; ?>
                  </td>
                  <td>
                     <?php echo $rows['email']; ?>
                  </td>
               </tr>
           </table>   

         <?php    
         }
       }
      ?>


  </div>

  <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab"> <!-- INFO TAB -->
     


  </div>
</div>

      </div>

   </section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1290 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L30,250.7C60,245,120,235,180,213.3C240,192,300,160,360,144C420,128,480,128,540,149.3C600,171,660,213,720,202.7C780,192,840,128,900,133.3C960,139,1020,213,1080,234.7C1140,256,1200,224,1260,186.7C1320,149,1380,107,1410,85.3L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>   

   
   

 
   





<!-- SCRIPTS  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
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
