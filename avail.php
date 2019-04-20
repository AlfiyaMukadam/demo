<?php
$connect=mysqli_connect('localhost','root','','hms');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

$a=mysqli_query($connect,"SELECT * FROM room");
$data=mysqli_fetch_assoc($a);
if(($data)==0)
{
	
	include 'booking.html';
	
}
else{
	$a=mysqli_query($connect,"SELECT COUNT(status) as total FROM room WHERE status=1");
$data=mysqli_fetch_assoc($a);
if(($data['total'])>0)
{
	
	include 'booking.html';
	
}
else
{
	echo "SORRY WE ARE FULL";

}



}



