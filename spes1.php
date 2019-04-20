
<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'hms'; // Nama Database
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
}
$adh1=$_GET['number'];
echo $adh1;
 
$sql = 'SELECT * FROM booking3 where Adhaar_no="$adh1" ';
         
$query = mysqli_query($conn, $sql);

 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
 
$row = mysqli_fetch_array($query);
echo 'First_name: ' . $row['first_name'] . 'Last_name: ' . $row['last_name']  . '</br/>';
 
 
// Should we need to run this? read section VII
mysqli_free_result($query);
 
// Should we need to run this? read section VII
mysqli_close($conn);