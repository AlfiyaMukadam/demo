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
		<body>
		<table>
        <thead>
            <tr>
                <th>PRODUCT ID</th>
                <th>TRANSACTION DATE</th>
                <th>AMOUNT</th>
                <th>QUANTITY</th>
            </tr>
        </thead>
        <tbody>';
         
while ($row = mysqli_fetch_row($query))
{
    echo '<tr>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
            <td>'.number_format($row[2], 0, ',', '.').'</td>
            <td class="right">'.$row[3].'</td>
        </tr>';
}
echo '
    </tbody>
</table>
</body>
</html>';
 
// Should we need to run this? read section VII
mysqli_free_result($query);
 
// Should we need to run this? read section VII
mysqli_close($conn);