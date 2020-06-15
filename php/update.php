<!DOCTYPE html>
<html>
<head>
	<title>UPDATE FIELDS</title>

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

	.heading h1 {
		transform:translate(0%,-155%);
		/*position:absolute;
		top:10%;
		left:35%;*/
		font-family: 'courier new';
		font-weight:bolder;
		font-size:60px; 
	}

    .pallete {
    	margin-left:40%;
    }

    .pallete label {
    	font-family:'courier new';
    	font-size:30px; 
    }

</style>


</head>
<body>




  <section>

  	 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,320L48,272C96,224,192,128,288,85.3C384,43,480,53,576,74.7C672,96,768,128,864,144C960,160,1056,160,1152,149.3C1248,139,1344,117,1392,106.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  	   <div class="heading">
  	   	  <h1 class="text-center mb-5">UPDATING FIELD</h1>
  	   </div>

<?php
                     include('dbconfig.php');

                     if(isset($_GET['update'])) 
                     {
                     
                     $qid = $_GET['qid'];
                     $question = $_GET['question'];
                     $ans1 = $_GET['ans1'];
                     $ans2 = $_GET['ans2'];
                     $ans3 = $_GET['ans3'];
                     $ans4 = $_GET['ans4'];
                     $ans = $_GET['ans'];
                     $cat_id = $_GET['cat_id'];

                     $q = "UPDATE `ques` SET `question` = '$question', `ans1` = '$ans1', `ans2` = '$ans2', `ans3` = '$ans3', `ans4` = '$ans4', `ans` = '$ans', `cat_id` = '$cat_id' WHERE `qid` = '$qid' ";

                     mysqli_query($conn,$q); 
                   
                    header('location:admin.php');
                     

                 }

           	   	   ?>

  	   <div class="pallete">
           <form class="mb-5" method="get" action="">

           	   <table>
           	   	   <tr>
           	   	   	  <th>
           	   	   	  	 <label>QUESTION</label>
           	   	   	  </th>
           	   	   	  <td> 	
           	   	   	  	<input type="text" name="question" class="form-control" required="" value="<?php echo $_GET['question']; ?>">
           	   	   	  </td>
           	   	   	</tr>
           	   	   	<tr>
           	   	   	  <th>
           	   	   	  	 <label>OPTION 1</label>
           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	<input type="text" name="opt1" class="form-control" required="" value="<?php echo $fans1; ?>">
           	   	   	  </td>
           	   	   	</tr>
           	   	   	<tr>
           	   	   	  <th>
           	   	   	  	 <label>OPTION 2</label>
           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	<input type="text" name="opt2" class="form-control" required="" value="<?php echo $fans2; ?>">
           	   	   	  </td>
           	   	   	</tr>
           	   	   	<tr>
           	   	   	  <th>
           	   	   	  	 <label>OPTION 3</label>
           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	<input type="text" name="opt3" class="form-control" required="" value="<?php echo $_GET['ans3']; ?>">
           	   	   	  </td>
           	   	   	</tr>
           	   	   	<tr>
           	   	   	  <th>
           	   	   	  	 <label>OPTION 4</label>
           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	<input type="text" name="opt4" class="form-control" required="" value="<?php echo $_GET['ans4']; ?>">
           	   	   	  </td>
           	   	   	</tr>
           	   	   	<tr>
           	   	   	  <th>
           	   	   	  	 <label>ANSWER</label>
           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	<input type="text" name="ans" class="form-control" required="" value="<?php echo $_GET['ans']; ?>">
           	   	   	  </td>
           	   	   	</tr>
           	   	    <tr>
           	   	   	  <th>
           	   	   	  	 <label>CATEGORY ID</label>
           	   	   	  </th>
           	   	   	  <td>
           	   	   	  	<input type="text" name="cat_id" class="form-control" required="" value="<?php echo $_GET['cat_id']; ?>">
           	   	   	  </td>
           	   	    </tr>
           	   	    <tr>
           	   	    	<th>
           	   	    	   <input type="submit" name="update" class="btn btn-success w-100 mt-5">
           	   	    	</th> 
           	   	    </tr>
           	   </table>
           </form>
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