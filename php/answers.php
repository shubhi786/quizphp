<?php 

session_start();

 include('dbconfig.php');
 
 # print_r($_POST);

 $right = 0;
 $wrong = 0;
 $no_attempt = 0;

 $cat_key = $_SESSION['catog_id'];

  $query = "SELECT qid,ans FROM ques WHERE cat_id = '$cat_key' ";

  $qrun = mysqli_query($conn,$query);

  while($rows = mysqli_fetch_assoc($qrun))
  {
  	if($rows['ans'] == $_POST[$rows['qid']])
  	{
        $right++;
  	}
  	elseif( $_POST[$rows['qid']] == "4")
  	{
       $no_attempt++;  
  	}
  	else
  	{
  		$wrong++;
  	}
  }
 
?>
<!DOCTYPE html>
<html>
<head>
	<title> RESULTS </title>

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
 	}

 	.pallete {
 		width:1000px;
 		height:500px;
 		background-color: red;
 		position:absolute;
 		top:20%;
 		left:20%;
 		background-color:rgb(235, 235, 224);
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
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,128C384,107,480,149,576,176C672,203,768,213,864,181.3C960,149,1056,75,1152,69.3C1248,64,1344,128,1392,160L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

	<div class="fix-back-btn">
    <a href="../index.php">BACK TO HOME</a>
   </div>


	<div class="pallete">
        <div class="heading">
            <h1 class="text-center mt-3" style="font-family:'FFF Tusj';">RESULTS</h1>
        </div>

        <div class="pallete-body mt-5 col-lg-6 col-sm-6 container-fluid">
            <h3>RIGHT ANSWER : <?php echo $right; ?> </h3> 
            <BR>
            <h3>WRONG ANSWER : <?php echo $wrong; ?> </h3> 
            <BR>
            <h3>NOT ATTEMPTED : <?php echo $no_attempt; ?> </h3> 
        </div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1290 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,165.3C384,181,480,235,576,234.7C672,235,768,181,864,181.3C960,181,1056,235,1152,213.3C1248,192,1344,96,1392,48L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
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