<?php

 for($i=2;$i<=100;$i++){
	 for($j=2;$j<=100;$j++){
		 if($i%$j==0){
			 break;
		 }
	 }if($i==$j){
		 echo $i."<br />";
	 }
 }



?>