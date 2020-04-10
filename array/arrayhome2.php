<?php





$customerInfo = array(
	array('name'=>'Rakib','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
	array('name'=>'Kamal','house'=>'H#012,Mirpur Dhaka','age'=>25,'contact'=>array('mobile'=>"021545454",'email'=>'email@gmail.com')),
			);
		
		?>
		
		<table border="5" width="100%">
		
		 <tr>
		    <th>Name</th>
		    <th>House</th>
		    <th>Age</th>
		    <th>Contact</th>
		
        <tr/>
		
		<?php
		 foreach($customerInfo as $key=> $cusinfo){
			 echo "<tr>";
			 foreach($cusinfo as $datakey=> $data){
				 echo "<td>";
				   if(is_array($data)){
					   foreach($data as $contact){
						   echo $contact.",";
					   }
				   }else{
					   echo $data;
				   }
				   echo "</td>";
			 }
			 
			 echo "</tr>";
		 }
		
		
		
		
		
		?></table>


