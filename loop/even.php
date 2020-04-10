<?php
 echo "<h1>Even or Odd Numbers</h1>";
 $i = 6;
 
 if($i%2==0){
	 echo "This is Even";
 }else{
	 echo "This is Odd";
 }

   echo "<br/>";
   echo "<br/>";
   echo "<br/>";



//Loop
  echo "<h1>Even Total</h1>";
  $sum=0;
  
   for($m=1;$m<=50;$m++){
	 if($m%2==0){
	   echo "$m+";
	 }
	   $sum = $sum +$m;
	   
   }
 echo "<h3>Even Total =</h3> $sum";


   echo "<br/>";
   echo "<br/>";
   echo "<br/>";

   
    echo "<h1>ODD Total</h1>";
  $summ=0;
  
   for($x=50;$x<=100;$x++){
	 if($x%2!=0){
	   echo $x."+";
	 }
	   $summ = $summ +$x;
	   
   }
 echo "<h3>Odd Total =</h3> $summ";


   echo "<br/>";
   echo "<br/>";
   echo "<br/>";
   
   
   
   
   
   
   
 //Loop
  
  
  echo "<h1>N er Man</h1>";
  $n=25;
  
   for($a=0;$a<=$n;$a=$a+3){
	
	   echo $a."<br/>";
   }





   echo "<br/>";
   echo "<br/>";
   echo "<br/>";


 // For Loop
  echo "<h1>Break</h1>";

  
   for($b=0;$b<=10;$b++){
	   echo $b."<br/>";
	 if($b>=7){
		 break;
	 }
	   
   }
   
   
   
   echo "<br/>";
   echo "<br/>";
   echo "<br/>";
   
   
   
   // For Loop
	echo "<h1>Even Numbers</h1>";
	$j=1;
	while($j<=15){
		if($j%2==0){
		echo $j."<br/>";
		}
		$j++;
	}
	
   echo "<br/>";
   echo "<br/>";
   echo "<br/>";
	
	echo "<h1>Odd Numbers</h1>";
	$k=1;
	while($k<=15){
		if($k%2!=0){
		echo $k."<br/>";
		}
		$k++;
	}
	
	
	
   echo "<br/>";
   echo "<br/>";
   echo "<br/>";
	
	echo "<h1>1,5,10,15----</h1>";
	$l=0;
	while($l<=50){
		
		echo $l."<br/>";
		$l=$l+5;
	}
	


?>





