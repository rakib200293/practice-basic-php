<?php
   
   echo "<h2>Array Using For Loop</h2>";
   
    $laptop = array(
	             array("Rakib","HP","10"),
	             array("Alamin","Dell","20"),
	             array("Goutom","Asus","30"),
	             array("Kawser","HP","40"),
	             array("Sujon","Acer","60"),
	             array("Hira","Lenovo","70")
	
	
	
	);
     
      for($i =0; $i<count($laptop);$i++){
	  for($j =0; $j<count($laptop[$i]);$j++){
		  
		  echo $laptop[$i][$j]." ";
	  }
	     echo "<br />";
	  }
	  
	  
	  
	  
	  
	   echo "<h2>Assosiative Array Using For Loop</h2>";
   
    $fees = array(
	             "Rakib" => array("PHP" => "10k","JAVA" => "15k","HTML" => "8k"),
	             "Alamin" => array("PHP" => "11k","JAVA" => "15k","HTML" => "9k"),
	             "Goutom" => array("PHP" => "12k","JAVA" => "15k","HTML" => "7k")
	
	
	
	);
     
	    $keys = array_keys($fees);
		for($i =0;$i<count($keys);$i++){
			
			$fees_key = array_keys($fees[$keys[$i]]);
		    for($j=0;$j<count($fees_key);$j++){
				echo  $keys[$i]." ".$fees_key[$j]." ". $fees[$keys[$i]][$fees_key[$j]]." ";
			}
			
			 echo "<br />";
			 echo "<br />";
		}
      

?>