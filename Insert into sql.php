<?php
$link = mysqli_connect('localhost','root','','sample');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$result = "INSERT INTO sample.simple VALUES(2,'NEELAPPAN','1952-03-18','this file is used to check the data in the sql server')";

  if (mysqli_query($link, $result)) {
    echo "New record created successfully";
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
   }

  mysqli_close($link);
  ?>