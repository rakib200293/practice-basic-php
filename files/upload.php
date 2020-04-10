<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	  <?php
	    
		if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"images/".$_FILES["myfile"]["name"])){
			echo "File Uploded Successfully";
		}else{
			echo "Failed to Upload File!";
		}
	  
	  ?>
</body>
</html>