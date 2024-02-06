<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "sivapradayini", "India3693!", "siva");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
//name
// $name = $_REQUEST['name'];
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];

//Mobile - 10 digits validation eg 9791952564 in html
// $mobile = $_REQUEST['mobile'];
		$gender = $_REQUEST['gender'];
//E-Mail - check for @ symbol validation using javascript or html
// $mail = $_REQUEST['email'];
		
		$email = $_REQUEST['email'];
//Message - No Validation Long text variable
// $message = $_REQUEST['message'];

$address = $_REQUEST['address'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$first_name', 
			'$last_name','$gender','$address','$email')";
		// $sql = "INSERT INTO siva VALUES ('$name','$mobile','$email','$message')";
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");

			// echo nl2br("\n$name\n"
				. "$mobile\n $email\n $message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
