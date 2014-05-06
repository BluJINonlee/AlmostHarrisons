<!doctype html>
<html>
	<head>
	<title>Create Database</title>
	</head>
	<body>
		<?php
		//mysqli_query($con,$sql) To run query.
		
		
		
			$con = mysqli_connect("localhost","root","","toy");
			
			if (mysqli_connect_errno()) {
				echo mysqli_connect_errno();
				echo " That didn't work, bro!";
			} else {
				echo "Connection to the database was successful!";
			}
			echo "<br/>";
			//Deletes the 'guest' table
			$sql = "DROP TABLE Guests";
			
			if(mysqli_query($con,$sql)) {
				echo "The temporary 'Users' table has been deleted!";
			} else {
				echo "Something went wrong!".mysqli_error($con);
			}
			echo "<br/>";
			//creates a new one
			$sql = "CREATE TABLE Guests(GID INT AUTO_INCREMENT, firstName CHAR(20), lastName CHAR(20), email CHAR(50), response BOOLEAN, meal CHAR(1), PRIMARY KEY (GID))";
			
			if(mysqli_query($con,$sql)) {
				echo "The 'Guest' table has been created!";
			} else {
				echo "Something went wrong!: ".mysqli_error($con);
			}			
		
		?>
	
	
	</body>




</html>