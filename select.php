<?php
$conn = mysqli_connect('localhost','root','','mydb');
if(!$conn){

    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "SELECT id, name FROM new1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
 }
} else {
 echo "0 results";
}
mysqli_close($conn);
?>