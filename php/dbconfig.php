<?php 

$hostname="localhost";
            $user="root";
            $pass="";

            $conn = mysqli_connect($hostname,$user,$pass) or die ("unable to connect").mysqli_connect_error();

            if($conn)
            {
            	echo "";
            }

            mysqli_select_db($conn,'quiz');

?>