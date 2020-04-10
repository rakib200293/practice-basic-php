<?php
    if(isset($_GET['submit'])){
	$name = $_GET['name'];
	$email = $_GET['email'];
	$password = $_GET['password'];
    //echo "<h1>Name : $name</h1>"."<h1>Email : $email</h1>"."<h1>Password : $password</h1>";
    echo "<h1>Name : $name <br /> Email : $email <br /> Password : $password</h1>";
	}
?>




<!DOCKTYPE HTML>
<html>
<head>
  <title>GET POST METHOD</title>
</head>
<body>
   
   <form action="" method="GET">
       
	   <input type="text" name="name"/><br /><br />
	   <input type="email" name="email"/><br /><br />
	   <input type="password" name="password"/><br /><br />
       <input type="submit" name="submit" value="Submit"/>
   </form>
   


</body>
</html>