
<?php

$connect=mysqli_connect('localhost','root','','mydb');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

// create a variable
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$Adhaar_no = $_POST['Adhaar_no'];
$Contact_Number = $_POST['Contact_Number'];
$bed = $_POST['bed'];
$accommodation = $_POST['accommodation'];
$a_accommodation = $_POST['a_accommodation'];


//Execute the query

mysqli_query($connect,"INSERT INTO booking2 (f_name,l_name,address,Adhaar_no,Contact_Number,bed,accommodation,a_accommodation) 
	VALUES ('$first_name','$last_name','$address','$Adhaar_no','$Contact_Number','$bed','$accommodation','$a_accommodation')");

?>
