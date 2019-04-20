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

 
$sql = "SELECT *
        FROM booking3 where Adhaar_no=$adh1 ";
         
$query = mysqli_query($conn, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
 
echo '<html>
		<head>
			<title>MySQL Fetch Array</title>
			<style>
				body {
					font-family: "segoe ui";

				}
				table {
					margin:auto;
					margin-top: 15px;
					border-collapse: collapse;
				}
				th, td {
					border: 1px solid #dadada;
					padding: 5px 10px;
				}
				th {
					background-color: #f3f3f3;
				}
				td{
					text-align: center;
				}
			</style>
		<head>
		<body background="w1.jpg">
		<table>
        <thead>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>address</th>
                <th>adhaar_no</th>
                <th>contact_no</th>
                <th>bed</th>
                <th>accomodation</th>
                <th>a_accomodation</th>
                <th>d_o_b</th>
                <th>d_o_l</th>
                <th>payment</th>
                <th>payment_gateway</th>
            </tr>
        </thead>
        <tbody>';
         
while ($row = mysqli_fetch_row($query))
{
     echo '<tr>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
        
            <td class="right">'.$row[2].'</td>
            <td>'.$row[3].'</td>
           <td>'.$row[4].'</td>
            <td>'.$row[5].'</td>
            <td>'.$row[6].'</td>
            <td>'.$row[7].'</td>
            <td>'.$row[8].'</td>
            <td>'.$row[9].'</td>
            <td>'.$row[10].'</td>
            <td>'.$row[11].'</td>
        </tr>';
}
echo '
    </tbody>
</table>
</body>
</html>';
 
?>