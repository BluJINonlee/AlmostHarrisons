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
			//GID INT AUTO_INCREMENT, firstName CHAR(20), lastName CHAR(20), email CHAR(50), response BOOLEAN, meal CHAR(1), PRIMARY KEY (GID)
			$sql = "SELECT * FROM Guests";
			

//creates table to list all the information in the database
			$results = mysqli_query($con,$sql);
			if($results) {
				echo "<table>";
				echo "<th>ID</th>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Email Address</th>";
                echo "<th>Response</th>";
				echo "<th>Meal</th>";
				
                //iterates through each result, and makes a row with the appropriate information.
				while($row = mysqli_fetch_array($results)){
					echo "<tr>";
					echo "<td>".$row['GID']."</td>";
					echo "<td>".$row['firstName']."</td>";
					echo "<td>".$row['lastName']."</td>";
                    if ($row['email'] ==NULL) {
                     echo "<td>None Given</td>";   
                    } else {
					echo "<td>".$row['email']."</td>";}
                    
                     if ($row['response'] ==NULL) {
                     echo "<td>No Response Yet</td>";   
                    } else {
					echo "<td>".$row['response']."</td>";}
                    
                     if ($row['meal'] ==NULL) {
                     echo "<td>N/A</td>";   
                    } else {
					echo "<td>".$row['meal']."</td>";}
                    
                    
                    
					
                    
					echo "</tr>";
  				}
  				echo "</table> <br/>";
			} else {
				echo "Something went wrong!".mysqli_error($con);
			}
			
			

			
		
		?>
		
	</body>




</html>