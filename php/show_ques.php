<?php 

session_start();

  include('dbconfig.php');

  $key = $_POST['cat'];

  $_SESSION['catog_id'] = $key;

 $q = "SELECT * FROM catog where id = '$key' ";

 $heading = mysqli_query($conn,$q);

 while($roww = mysqli_fetch_assoc($heading))
 { ?>


<!DOCTYPE html>
<html>
<head>
  <title><?php echo $roww['cat_name']; ?> QUIZ</title>


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
  
  * 
  {
       margin:0px;
       padding:0px;
  }

  .pallete {
    width:900px;
    background-color:rgb(235, 235, 224);
    position:absolute;
    top:20%;
    left:23%;
    -webkit-box-shadow: 3px 9px 33px -8px rgba(0,0,0,0.75);
-moz-box-shadow: 3px 9px 33px -8px rgba(0,0,0,0.75);
box-shadow: 3px 9px 33px -8px rgba(0,0,0,0.75);
border-radius:10px;
  }

  .fix-back-btn {
    background-color:rgba(0,0,0,0.7);
    width:130px;
    height:60px;
    position:fixed;
        border-radius:0px 10px 10px 0px; 
  }

  .fix-back-btn a {
    text-decoration:none;
    color:white;
    line-height:60px;
  }

</style>

</head>
<body>


<section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,320L34.3,298.7C68.6,277,137,235,206,208C274.3,181,343,171,411,144C480,117,549,75,617,101.3C685.7,128,754,224,823,218.7C891.4,213,960,107,1029,96C1097.1,85,1166,171,1234,218.7C1302.9,267,1371,277,1406,282.7L1440,288L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

  <div class="fix-back-btn">
    <a href="../index.php">BACK TO HOME</a>
  </div>


    <div class="pallete mb-5 col-xl-12 col-lg-12">

      <div class="heading">
        <h1 class="text-center mt-4" style="font-family:'FFF Tusj';"><?php echo $roww['cat_name']." QUIZ"; ?></h1>
      </div>
        <?php
 }

?>

      <div class="ques_table">
        
             <form action="answers.php" method="post">
              <?php 

          $i = 1;
              $query= "SELECT * FROM ques where cat_id= '$key' ";

              $run = mysqli_query($conn,$query);

              $num = mysqli_num_rows($run);

              if($num > 0)
              {  
                while($rows = mysqli_fetch_assoc($run))
                { ?>
             
        <table class="mt-5 ml-5 mb-5">
           <tr>
            <th>
              <?php echo $i; ?>.&emsp;<?php echo $rows['question']; ?>
            </th>
           </tr>
           <?php if(isset($rows['ans1'])) 
           {
            ?>
           <tr>
            <td>
              &emsp;<input type="radio" name="<?php echo $rows['qid']; ?>" value="0">&emsp;<?php echo $rows['ans1']; ?>
            </td>
           </tr>
           <?php 
         }
         ?>
         <?php if(isset($rows['ans2'])) 
           {
            ?>
           <tr>
            <td>
              &emsp;<input type="radio" name="<?php echo $rows['qid']; ?>" value="1">&emsp;<?php echo $rows['ans2']; ?>
            </td>
           </tr>
         <?php } ?>
         <?php if(isset($rows['ans3'])) 
           {
            ?>
           <tr>
            <td>
              &emsp;<input type="radio" name="<?php echo $rows['qid']; ?>" value="2">&emsp;<?php echo $rows['ans3']; ?>
            </td>
           </tr>
           <?php 
         }
         ?>
         <?php if(isset($rows['ans4'])) 
           {
            ?>
           <tr>
            <td>
              &emsp;<input type="radio" name="<?php echo $rows['qid']; ?>" value="3">&emsp;<?php echo $rows['ans4']; ?>
            </td>
           </tr>
           <?php 
         }
         ?>
         <tr>
            <td>
              &emsp;<input type="radio" name="<?php echo $rows['qid']; ?>" value="4" checked="checked" style="display: none;">
            </td>
           </tr>
        </table>

        <?php
          $i++;
                }
              }
        ?>

        <input type="submit" name="submit" value="RESULTS" class="btn btn-success mt-3 mb-5 container col-lg-4 " style="margin-left:30%;">

        </form>
      </div>
    </div>
 
  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,288L34.3,266.7C68.6,245,137,203,206,181.3C274.3,160,343,160,411,186.7C480,213,549,267,617,240C685.7,213,754,107,823,96C891.4,85,960,171,1029,197.3C1097.1,224,1166,192,1234,149.3C1302.9,107,1371,53,1406,26.7L1440,0L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> -->
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