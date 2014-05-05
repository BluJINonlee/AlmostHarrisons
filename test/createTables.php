<!doctype html>
<html>
	<head>
	<title>Create Database</title>
	</head>
	<body>
		<?php
		//mysqli_query($con,$sql) To run query.
		
		
		
			$con = mysqli_connect("localhost","JHarrison","QvkNM8r4#vPN","toy");
			
			if (mysqli_connect_errno()) {
				echo mysqli_connect_errno();
				echo " That didn't work, bro!";
			} else {
				echo "Connection to the database was successful!";
			}
			echo "<br/>";
			//Deletes the 'Users' table
			$sql = "DROP TABLE Users";
			
			if(mysqli_query($con,$sql)) {
				echo "The temporary 'Users' table has been deleted!";
			} else {
				echo "Something went wrong!".mysqli_error($con);
			}
			echo "<br/>";
			//creates a new one
			$sql = "CREATE TABLE Users(UID INT AUTO_INCREMENT, firstName CHAR(20), lastName CHAR(20), phone CHAR(10), email CHAR(50), address1 CHAR(50), address2 CHAR(20), meal CHAR(1), plusOne Boolean, PRIMARY KEY (UID))";
			
			if(mysqli_query($con,$sql)) {
				echo "The temporary 'Users' table has been created!";
			} else {
				echo "Something went wrong!".mysqli_error($con);
			}			
		
		?>
	
	
	</body>




</html>