<section class="main_body_div container mt-5 mb-5">

      <div class="heading">
      	  <h1 class="text-center">I.T. Quiz</h1>
      </div>

      <div class="body mt-5 card col-lg-12 ml-auto d-block">
      	<form action="../result.php" method="post">


      	<?php

            session_start();

            $hostname="localhost";
            $user="root";
            $pass="";

            $conn = mysqli_connect($hostname,$user,$pass) or die ("unable to connect");

            mysqli_select_db($conn,'quiz');

            for($loop=1;$loop<=2;$loop++)
            {
            $q= "SELECT * FROM ques where qid=$loop";

            $res=mysqli_query($conn,$q);

            $result=mysqli_num_rows($res);

            if($result > 0)
            {
            	while($rows=mysqli_fetch_assoc($res))
            	{ 
            		$_SESSION['id']=$rows['qid'];
            		$id=$_SESSION['id'];
            		?>   

      	  <div class="ques card-header">  <!-- QUESTIONS -->
      	  	  <h2 class=""><?php echo $rows['question']; ?></h2>
          </div>


<?php
            include('dbconfig.php');

            $q= "SELECT * FROM ans where ans_id=$id";

            $res=mysqli_query($conn,$q);

            $result=mysqli_num_rows($res);

            if($result > 0)
            {
            	while($rows=mysqli_fetch_assoc($res))
            	{ 
            		?>
      	  	  <div class="options card-body">  <!-- OPTIONS -->
      	  	  	
      	  	  	<input type="radio" name="opt[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>"> <?php echo $rows['answer'];?>
      	  	     
      	      </div>
      	     
      	     <?php
            	}
            }
        }
            	}
            }

            $_SESSION['check_id'] = $rows['aid'];

      	 ?>
      	  
      	  <div class="mt-5 mb-5">
      	  	  <input class="p-2 btn btn-primary text-center" type="submit" name="submit" value="Submit">
      	  </div>

      	  <div class="col-lg-7 ml-auto d-block">
      	  	 <a class="nav-link text-light p-5" href="logout.php"><button class="btn btn-danger p-3">Log Out</button></a>
      	  </div>

      </div>
          </form>

   </section>