<?php
 
    session_start();

   
    echo "<mark>$_SESSION['user']</mark>";

    include('php/dbconfig.php');

    if(isset($_POST['submit']))
    {
    	if(!empty($_POST['opt']))
    	{

    	$count = count($_POST['opt']);

    	echo("You have attempted".$count."Questions out of all");

    	$options = $_POST['opt'];	

    	$q = "SELECT * FROM ques";

    	$query = mysqli_query($conn,$q);

    	while($rows = mysqli_fetch_assoc($query))
    	{

            $_SESSION['check_opt_id'] = $rows['ans_id'];

            if($_SESSION['check_opt_id'] == $_SESSION['check_id'])
            {
                
                echo "Your answer is right";

            } //2nd Inner IF ended here

    	}   // while loop ended here
        
        }  // inner IF ended here

    } // Outer IF ended here

 ?>