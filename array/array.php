<?php

//$myInfo = array('name'=>'Rakib','id'=>56464545,'dept'=>'CMT','mobile'=>0154544,'gpa'=>3.50);

$myInfo = ['name'=>'Goutom','id'=>656556,'dept'=>'cse'];

//var_dump($myInfo);
/*
echo $myInfo['name'];
echo $myInfo['id'];
echo $myInfo['dept'];

*/

//echo count($myInfo); 
/*

foreach($myInfo as $key => $data){
	echo $key.' ---'.$data.'<br/>';
}
echo '-----------------------<br/>';
$stdInfo = array('Kawsar',0325454,'cse',0215454545);

  ;

for($i=0;$i<sizeof($stdInfo);$i++){
	
	echo $stdInfo[$i].'<br/>';
	
}

*/





$stdInfo = [
			['name'=>'Akhi','roll'=>321,'dept'=>'cmt','mobile'=>024544,'email'=>['email1'=>'email@gmail.com','email2'=>'email@gmail.com']],
			['name'=>'Rakib','roll'=>545,'dept'=>'cmt','mobile'=>024544,'email'=>['email1'=>'email@gmail.com','email2'=>'email@gmail.com']],
			['name'=>'Jannati','roll'=>5454,'dept'=>'civil','mobile'=>024544,'email'=>['email1'=>'email@gmail.com','email2'=>'email@gmail.com']],
			['name'=>'Suzon','roll'=>6565,'dept'=>'cmt','mobile'=>024544,'email'=>['email1'=>'email@gmail.com','email2'=>'email@gmail.com']],
			['name'=>'Al amin','roll'=>5554,'dept'=>'Power','mobile'=>024544,'email'=>['email1'=>'email@gmail.com','email2'=>'email@gmail.com']],
			['name'=>'Mominur','roll'=>254,'dept'=>'food','mobile'=>024544,'email'=>['email1'=>'email@gmail.com','email2'=>'email@gmail.com']]
		   ];
		  // echo '<pre>'; 
		   
		   //var_dump($stdInfo);
		 ?>
		 <table border='5' width="500">
		 
		 <tr>
			<th>Name</th>
			<th>Roll</th>
			<th>dept</th>
			<th>mobile</th>
			<th>Email</th>
		 </tr>
		 <?php
		foreach($stdInfo as $key=> $sTinfo) {
			echo "<tr>";
			 foreach($sTinfo as $dataKey=> $data){
				  echo "<td>";
				  if(is_array($data)){
					  foreach($data as $email){
						  echo $email.',';
					  }
				  }else{
				  echo $data;
				  }
				  echo "</td>";
			 }
			 
			 echo "</tr>";
			 
		}
?></table>


