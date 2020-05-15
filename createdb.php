<?php
$link = mysqli_connect('localhost','root','');
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = "CREATE DATABASE myDB";

// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
//    } else {
//     echo "Error creating database: " . $conn->error;
//    }


   if(mysqli_query($link,$sql)){
    echo "Database created successfully";
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
   }

   mysqli_close($link);
?>