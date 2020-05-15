<?php

$con = mysqli_connect('localhost','root','','mydb');
if(!$con){

    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql="DELETE FROM mydb.new1 WHERE id=2";
if(mysqli_query($con,$sql)){

    echo "Record deleted successfully";

}else{ echo "Error deleting record: " . mysqli_error($conn);}
mysqli_close($con);

?>