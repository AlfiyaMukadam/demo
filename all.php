<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'hms'; // Nama Database
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
}
 
$sql = 'SELECT * FROM booking3';
         
$query = mysqli_query($conn, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
 
echo '<table>
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
         
while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['first_name'].'</td>
            <td>'.$row['last_name'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['Adhaar_no'].'</td>
            <td>'.$row['Contact_Number'].'</td>
            <td>'.$row['bed'].'</td>
            <td>'.$row['accomodation'].'</td>
            <td>'.$row['a_accomodation'].'</td>
            <td>'.$row['d_o_b'].'</td>
            <td>'.$row['d_o_l'].'</td>
            <td>'.$row['payment'].'</td>
            <td>'.$row['payment_gateway'].'</td>

            
        </tr>';
}
echo '
    </tbody>
</table>';
 
// Should we need to run this? read section VII
mysqli_free_result($query);
 
// Should we need to run this? read section VII
mysqli_close($conn);

?>