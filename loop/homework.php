<?php

//Factorial

 echo "<h1>Factorial</h1>";
 
 $n = 5;
 $f = 1;
 for($i=1;$i<=$n;$i++){
	 $f = $f * $i;
 }
 echo "Factorial =".$f;
 
 echo "<br />";


 
 //Fibonacci Series
 
 echo "<h1>Fibonacci Series</h1>";
 
 $f1 =0;
 $f2 =1;
 
 $count =0;
 
 echo $f1."+";
 echo $f2."+";
 
 while($count<=10){
	 
	 $f3 = $f1 + $f2;
	 echo $f3."+";
	 
	 $f1 = $f2;
	 $f2 = $f3;
	 $count = $count+1;
 }
 echo $f1."+";
 echo $f2."";
 
 
 //Star Print
 
 echo "<h1>Star Print</h1>";
 

 for($a=1;$a<=10;$a++){
	for($b=1;$b<=$a;$b++){
		echo "*"." ";
	}
	echo "<br />";
 }
 

 //Star Reverse
 
 echo "<h1>Star Reverse</h1>";

for($e=0;$e<=10;$e++)
{
for($f=10-$e;$f>=1;$f--)
{
echo "* ";
}
echo "<br>";
}



 
 //Numbers Print
 
 echo "<h1>Numbers Print</h1>";

 for($c=1;$c<=10;$c++){
	for($d=1;$d<$c;$d++){
		echo $d." ";
	}
	echo "<br />";
 }
 
 
 //Even Total
 
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
 
 
 
  //Odd Total
 
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
 
 
 echo "<br />";
 echo "<br />";
 
 
   //2 Dimentional Array
   
 echo "<h1>2 Dimentional Array</h1>";
 
 $arr = array(
      "first"=>  array(1,2,3),
      "second"=> array(4,5,6),
      "third"=>  array(7,8,9)
         );
 
 echo $arr["second"][1];
 
 echo "<br />";
 echo "<br />";
 
 
  //3 Dimentional Array
  
  echo "<h1>3 Dimentional Array</h1>";
  
    $arr_3d = array(
	              array(
				      array('Rakib','Alamin','Goutom'),
				      array('Kawser','Hira','Sujon'),
				      array('Akhi','Moni','Jannatun'),
				    ),
	               array(
				      array('Nazmul','Erfan','Mominul'),
				      array(12,22,33),
				      array(11,21,31),
				    ),
	);
   echo $arr_3d[1][0][1];
?>

