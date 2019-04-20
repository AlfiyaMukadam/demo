<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'tutorial_wdc'; // Nama Database
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
}
 
$sql = 'SELECT prod_id, trans_date, amount, qty 
        FROM sales';
         
$query = mysqli_query($conn, $sql);

$sql = 'SELECT prod_id, trans_date, amount, qty 
        FROM sales';
         
$query = mysqli_query($conn, $sql);
 
$row = mysqli_fetch_array($query);
echo 'Product: ' . $row['prod_id'] . ' Transaction Date: ' . $row['trans_date'] . ' Amount: ' . $row['amount'] . '</br/>';
 
$row = mysqli_fetch_array($query);
echo 'Product: ' . $row['prod_id'] . ' Transaction Date: ' . $row['trans_date'] . ' Amount: ' . $row['amount'] . '</br/>';
 
$row = mysqli_fetch_array($query);
echo 'Product: ' . $row['prod_id'] . ' Transaction Date: ' . $row['trans_date'] . ' Amount: ' . $row['amount'] . '</br/>';
