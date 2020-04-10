<?php
   
   function add($a,$b){
	   echo $a + $b;
   }
   
   add(10,20);
   echo "<br />";
   

   function jog($x,$y,$o=3){
	   $z= $x + $y + $o;
	   return $z;
   }
   
   echo jog(7,5);
   echo "<br />";
   echo jog(7,5,5);
   
   echo "<br />";
   echo "<br />";
   
   
   function name(){
	   return "Rakib";
   }
   
   echo name();
   
   
   
   
   
   
   
   
   
 
   
?>
