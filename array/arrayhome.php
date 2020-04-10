
<?php

				$customerInfo = array(
				array('name'=>'Rakib','house'=>'H#012,Mirpur 2','age'=>25),
				array('name'=>'Goutom','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Alamin','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Kawser','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Hira','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Sujon','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Rabu','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Nazmul','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Erfan','house'=>'H#012,Mirpur Dhaka','age'=>25),
				array('name'=>'Mominul','house'=>'H#012,Mirpur Dhaka','age'=>25)
				
				);


		  // echo '<pre>'; 
		   
		   //var_dump($stdInfo);
		 ?>
		 <table border='5' width="500">
		 
		 <tr>
			<th>Name</th>
			<th>House</th>
			<th>Age</th>
			
		 </tr>
		 <?php
		foreach($customerInfo as $key=> $csinfo) {
			echo "<tr>";
			 foreach($csinfo as $dataKey=> $data){
				 
				  echo "<td>";
				    echo $data;
				  }
				  echo "</td>";
			 }
			 
			 echo "</tr>";
			 

?></table>