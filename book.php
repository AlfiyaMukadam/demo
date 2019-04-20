<?php
$connect=mysqli_connect('localhost','root','','hotel management system');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}


	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$address = $_POST['address'];
	$Adhaar_no = $_POST['Adhaar_no'];
	$Contact_Number = $_POST['Contact_Number'];
    $selected_val = $_POST['bed'];  // Storing Selected Value In Variable
	$selected_val1 = $_POST['accomodation'];
	$selected_val2 = $_POST['a_accomodation'];
	$selected_val3 = $_POST['d_o_b'];
	$selected_val4 = $_POST['d_o_l'];
	$selected_val5 = $_POST['payment'];
	$selected_val6 = $_POST['payment_gateway'];
	$room_type=$_POST['room'];


	mysqli_query($connect,"INSERT INTO book_now (f_name,l_name,address,Adhaar_no,Contact_Number,bed,accommodation,a_accommodation,d_o_b,d_o_l,payment,payment_gateway) 
	VALUES ('$first_name','$last_name','$address','$Adhaar_no','$Contact_Number','$selected_val','$selected_val1','$selected_val2','$selected_val3','$selected_val4','$selected_val5','$selected_val6')");

	mysqli_query($connect,"INSERT INTO check1 (Adhaar_no,room_type,bed_type) VALUES ('$Adhaar_no','$room_type','$selected_val')");



?>