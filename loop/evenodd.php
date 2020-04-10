<?php
echo "<h1>Even Numbers</h1>";
$n=50;
for($i=0;$i<=50;$i++){
	if($i%2==0){
		echo $i."<br/>";
	}
}



echo "<h1>Odd Numbers</h1>";
$m=50;
for($i=50;$i<=100;$i++){
	if($i%2!=0){
		echo $i."<br/>";
	}
}



echo "<h1>Even Total</h1>";
 $sum= 0;
 for($x=1;$x<=50;$x++){
	 if($x%2==0){
		 if($x==50){
			 echo "$x =";
		 }else{
			 echo "$x +";
		 }
	 }
	 $sum = $sum +$x;
 }
 echo  $sum;
 
 
 echo "<h1>Odd Total</h1>";
 $sum= 0;
 for($x=50;$x<=100;$x++){
	 if($x%2!=0){
		 if($x==99){
			 echo "$x =";
		 }else{
			 echo "$x +";
		 }
	 }
	 $sum = $sum +$x;
 }
 echo  $sum;
 
 
	 
?>