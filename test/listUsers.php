<!doctype html>
<html>
	<head>
	<title>List Users</title>
	<style>
		table * {
			border: 1px solid black;
		}
	</style>
	
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
			//UID INT, firstName CHAR(20), lastName CHAR(20), phone CHAR(10), email CHAR(50), address1 CHAR(50), address2 CHAR(20), meal CHAR(1), plusOne CHAR(1), PRIMARY KEY (UID)
			$sql = "SELECT * FROM Users";
			
			$results = mysqli_query($con,$sql);
			if($results) {
				echo "<table>";
				echo "<th>UID</th>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Phone</th>";
				echo "<th>Email Address</th>";
				echo "<th>Address 1</th>";
				echo "<th>Address 2</th>";
				echo "<th>Meal</th>";
				echo "<th>+1?</th>";
				while($row = mysqli_fetch_array($results)){
					echo "<tr>";
					echo "<td>".$row['UID']."</td>";
					echo "<td>".$row['firstName']."</td>";
					echo "<td>".$row['lastName']."</td>";					
					echo "<td>".$row['phone']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['address1']."</td>";
					echo "<td>".$row['address2']."</td>";
					echo "<td>".$row['meal']."</td>";
					echo "<td>".$row['plusOne']."</td>";
  					echo "</tr>";
  				}
  				echo "</table> <br/>";
			} else {
				echo "Something went wrong!".mysqli_error($con);
			}
			
			

			
		
		?>
		
	</body>




</html>