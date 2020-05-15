<?php

$link = mysqli_connect('localhost','root','','mydb');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = "UPDATE mydb.new1 SET name='Doe' WHERE id=1";

if (mysqli_query($link, $sql)) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($link);

// The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables.

?>