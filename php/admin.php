<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>

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

<style type="text/css" rel="stylesheet">
	
   * {
   	margin:0px;
   	padding:0px;
   	font-family:'courier new';
   	font-size:20px;
   }

   .main-frame h1{
     text-align: center;

   }

   .table-style {
     margin-top:3%;
     margin-left:40%; 
   }

   .submit_btn {
   	 background-color:rgba(0,0,0,0.7);
   	 text-decoration: none;
   	 border:none;
   	 border-radius:10px;
   	 padding:5px;
   	 color:white;
   	 margin-top:10%;
   	 width:100%; 
   }

 b {
   	background-color:transparent;
   	color:black;
   	border:1px solid black;
   	font-weight:bolder;

   }

   .disp-vals .heading h1 {
   	margin-top:5%;
   }

   .show-btn {
   	margin-left:50%;
   }


</style>


</head>
<body>


  <section class="main-frame">
  	   <div class="heading">
           <h1>ENTER INFO</h1>
  	   </div>

  	   <div class="input-form">
           <form action="" method="post">

           	 <?php

           	  session_start();

                $hostname = "localhost";
                $user = "root";
                $pass = "";

                $conn = mysqli_connect($hostname,$user,$pass) or die ("unable to connect ");

                if($conn)
                {
                     echo "";
                }

                mysqli_select_db($conn,"quiz");


                if(isset($_POST['SUBMIT']))
                {
                	$question = $_POST['ques'];
                	$op1 = $_POST['opt1'];
                	$op2 = $_POST['opt2'];
                	$op3 = $_POST['opt3'];
                	$op4 = $_POST['opt4'];
                	$answer = $_POST['ans'];
                	$catog_id = $_POST['cat_id'];


                	$query = "INSERT INTO ques values( '0' , '$question' , '$op1' , '$op2' , '$op3' , '$op4' , '$answer' , '$catog_id' ) ";

                	$run = mysqli_query($conn,$query);
                }
                
?>

           	   <table class="table-style">
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	  <label>QUESTION</label>

           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	  <input type="text" name="ques" required="">           	   	   	  	
           	   	   	  </td>
           	   	   </tr>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	  <label>OPTION 1</label>

           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	  <input type="text" name="opt1" required="">           	   	   	  	
           	   	   	  </td>
           	   	   </tr>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	  <label>OPTION 2</label>

           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	  <input type="text" name="opt1" required="">           	   	   	  	
           	   	   	  </td>
           	   	   </tr>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	  <label>OPTION 3</label>

           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	  <input type="text" name="opt3" required="">           	   	   	  	
           	   	   	  </td>
           	   	   </tr>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	  <label>OPTION 4</label>

           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	  <input type="text" name="opt4" required="">           	   	   	  	
           	   	   	  </td>
           	   	   </tr>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	  <label>CORRECT ANSWER</label>

           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	  <input type="text" name="ans" required="">           	   	   	  	
           	   	   	  </td>
           	   	   </tr>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	  <label>CATEGORY ID :</label>

           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	  <input type="text" name="cat_id" required="">           	   	   	  	
           	   	   	  </td>
           	   	   </tr>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	 <input type="submit" name="submit" value="Submit" class="submit_btn">
           	   	   	  </th>
           	   	   </tr>
           	   </table>
           </form>
  	   </div>
  </section>


  <section class="disp-vals">
  	  <div class="heading">
  	  	  <h1 class="text-center">RECORDS</h1>
  	  </div>

  	  <div class="title">
  	  	  <form method="post" action="admin.php">
  	  	  	  <select class="form-control form-control-md container mt-3 mb-5" name="cat">

  	  	  	 <?php     

                 include('dbconfig.php');

                    $e = $_POST['cat'];

                 	$query_for_val = "SELECT * FROM catog";

                 	$query_run = mysqli_query($conn,$query_for_val);

                 	$num_check = mysqli_num_rows($query_run);

                 	if($num_check > 0)
                 	{
                 		while($rows = mysqli_fetch_assoc($query_run))
                 		{  ?>
  	  	  	  	  <option value="<?php echo $rows['id']; ?>"><?php echo $rows['cat_name']; ?></option>
  	  	  	  	  <?php 
                 		}
                 	}
  	  	  	  ?>
              <input class="text-center show-btn btn btn-primary mb-3" type="submit" name="enter" value="Show">
  	  	  	  </select>
               

  	  	  </form>
  	  </div>

<!--
   <script type="text/javascript">

   	   var a = function(price)
   	   {
   	   	document.getElementById('price_sp').innerHTML = price;
   	   };
  
   </script> -->

    <div class="cont">
    	<div class="container-fluid">


  	  <div class="vals">
          <table border="2" cellpadding="1"> 
          	 <tr>
          	 	<th>
          	 		ID
          	 	</th>
          	 	<th>
          	 		QUESTIONS
          	 	</th>
          	 	<th>
          	 		OPTION 1
          	 	</th>
          	 	<th>
          	 		OPTION 2
          	 	</th>
          	 	<th>
          	 		OPTION 3
          	 	</th>
          	 	<th>
          	 		OPTION 4
          	 	</th>
          	 	<th>
          	 		ANSWERS
          	 	</th>
          	 	<th>
          	 		CATEGORY ID
          	 	</th>
          	 	<th>
          	 		UPDATE
          	 	</th>
          	 	<th>
          	 		DELETE
          	 	</th>

          	 </tr>

<?php
                 include('dbconfig.php');



                 error_reporting(0);

                 	$query_for_disp = "SELECT * FROM ques where cat_id = '$e' ";

                 	$queryrun = mysqli_query($conn,$query_for_disp);

                 	$numcheck = mysqli_num_rows($query_run);

                 	if($numcheck > 0)
                 	{
                 		while($rows = mysqli_fetch_assoc($queryrun))
                 		{  ?>


          	 <tr>
          	 	<td>
                   <?php echo $rows['qid']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo $rows['question']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo $rows['ans1']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo $rows['ans2']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo $rows['ans3']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo $rows['ans4']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo $rows['ans']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo $rows['cat_id']; ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo "<a href='update.php?qid=$rows[qid]&question=$rows[question]&ans1=$rows[ans1]&ans2=$rows[ans2]&ans3=$rows[ans3]&ans4=$rows[ans4]&ans=$rows[ans]&cat_id=
          	 		$rows[cat_id] '>Update </a> " ?>     	 		
          	 	</td>
          	 	<td>
          	 		<?php echo "delete"; ?>     	 		
          	 	</td>
          	 </tr>

          	 <!-- <script type="text/javascript">
          	 	includes('+');

          	 	// checks if given parameters is present or not
          	 </script> -->

          	 <?php 
              
              }
          }
     ?>
          </table>
  	  </div>


    	</div>
    </div>
  </section>



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

	 
