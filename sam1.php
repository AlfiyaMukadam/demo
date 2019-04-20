<?php

$connect=mysqli_connect('localhost','root','','test');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

$bed_type = $_POST['bed'];
echo $bed_type;
mysqli_query($connect,"INSERT INTO sam VALUES ('$bed_type')");
?>






