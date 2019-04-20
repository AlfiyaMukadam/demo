
<?php
	$connect=mysqli_connect('localhost','root','','hms');

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

	$selected_val7 = $_POST['room_no'];

	$id="0";



	$sql18 = "SELECT room_no, check_in, check_out FROM room WHERE room_no = '$selected_val7'";    //$rNumber is room number obtained from a dropdown list
	$results18 = mysqli_query($connect, $sql18);

	while ($row = mysqli_fetch_array($results18))
	 {
    if (($selected_val3 >= $row["check_in"] && $selected_val3 <= $row["check_out"]) ||  //$cInDate and $cOutDate are user inputs
        ($selected_val4 > $row["check_in"] && $selected_val4 <= $row["check_out"])) 
    {
        echo "ROOM IS FULL...SORRY FOR INCONVENIENCE....";
        exit(0);
    }
	}	












    
	echo "HELLO!!!!".$first_name." YOU ARE SUCCESSFULLY REGISTERED GO TO HOME PAGE";

	mysqli_query($connect,"INSERT INTO booking3 VALUES ('$first_name','$last_name','$address','$Adhaar_no','$Contact_Number','$selected_val','$selected_val1','$selected_val2','$selected_val3','$selected_val4','$selected_val5','$selected_val6','$selected_val7')");


	mysqli_query($connect,"INSERT INTO room(room_no,check_in,check_out) VALUES ('$selected_val7','$selected_val3','$selected_val4')");

	

	mysqli_query($connect,"UPDATE room SET status='".$id."' where room_no='".$selected_val7."' ");
	echo $selected_val7;

	



	mysqli_query($connect,"INSERT INTO check2345 VALUES ('$Adhaar_no','$selected_val3','$selected_val4','$room_type','$selected_val')");

	mysqli_query($connect,"INSERT INTO payment VALUES ('$Adhaar_no','$selected_val5','$selected_val6')");


?>