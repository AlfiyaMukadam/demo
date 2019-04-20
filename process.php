
<?php

$connect=mysqli_connect('localhost','root','','mydatabase');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];

//Execute the query
mysqli_query($connect,"INSERT INTO employees1 (first_name,last_name,department,email)
VALUES ('$first_name','$last_name','$department','$email')");
?>
