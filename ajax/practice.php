<?php

$name = isset($_POST['naam']) ? $_POST['naam']: 'empty';
$address =isset($_POST['address']) ? $_POST['naam']: 'empty';

 echo "Name : ".$name;
 echo "<br />";
 echo "Address :".$address;
?>