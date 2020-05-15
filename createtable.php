<?php
$conn = mysqli_connect('localhost','root','','mydb');

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!";

$sql="CREATE TABLE mydb.new1(id SERIAL, name varchar(40))";

if(mysqli_query($conn,$sql)){

    echo " Table named new1 created in Database mydb created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>