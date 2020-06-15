<?php 

 $r=10;
 
 $t =function() use($r)
 {
   for ($i=1; $i < 11; $i++) { 
   	   $res = $i * $r;

   	   echo "$res<br/>";
   }
 };

$t();


 $p=10;
 
 $t =function($p)
 {
   for ($i=1; $i < 11; $i++) { 
   	   $res = $i * $p;

   	   echo "$res<br/>";
   }
 };

 $t($p);

?>

<script type="text/javascript">


</script>