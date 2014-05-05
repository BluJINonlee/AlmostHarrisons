<!doctype html>
<html>
	<head>
	<title>Populate Database</title>
	</head>
	<body>
		<?php
		//mysqli_query($con,$sql) To run query.
		
			//creating fake data to populate table.
			$firstName = array("Joshua","Jasmine","Lorna","Nathalie","Brian","George","Freddie","Lavell","Ebony","Keenan");
			$lastName = array("Harrison", "Douglas", "Harrell", "Henaine", "Roper", "Ellsey", "Simon", "Eaton", "Leaks", "Hightower");
			$phone = mt_rand(1111111,9999999);
			$email = "emailAddress@email.com";
			
			
			$meal = array("C", "F", "V");
			$plusOne = 0;
			
			function getPhone() {
				return mt_rand(100,999) . mt_rand(100,999) . mt_rand(1000,9999);
			}
			
			function getAddress1() {
				$streetNumber = mt_rand(0,999);
				$streetDirection = array("",  " N.", " W.", " S.", " E.");
				$streetName = array(" Main", " Washington", " Lake", " State", " MLK", " Michigan", " Stockton", " First", " California", " Madison");
				$streetType = array(" Street", " Drive", " Court", " Road", " Avenue", " Boulevard", " Lane");
				return $streetNumber . $streetDirection[mt_rand(0,4)] . $streetName[mt_rand(0,9)] . $streetType[mt_rand(0,6)];
			}
			function getAddress2() {
				$unit = array("", "Apt.", "Unit", "Ste.");
				$arrayNumber = mt_rand(0,3);
				if ($arrayNumber == 0){
					return "";
				} else {
					return $unit[$arrayNumber]. " " . mt_rand(1,999);
				}
				
			}
		
			$con = mysqli_connect("localhost","JHarrison","QvkNM8r4#vPN","toy");
			
			if (mysqli_connect_errno()) {
				echo mysqli_connect_errno();
				echo " That didn't work, bro!";
			} else {
				echo "Connection to the database was successful!";
			}
			echo "<br/>";
			$counter = 0;
			for ($i = 0; $i <= mt_rand(1,100); $i++){
			//UID INT, firstName CHAR(20), lastName CHAR(20), phone CHAR(10), email CHAR(50), address1 CHAR(50), address2 CHAR(20), meal CHAR(1), plusOne CHAR(1), PRIMARY KEY (UID)
			$sql = "INSERT INTO Users (firstName, lastName, phone, email, address1, address2, meal, plusOne) VALUES(";
			$sql=$sql . "'". $firstName[mt_rand(0,9)] . "',"; //firstName
			$sql=$sql . "'". $lastName[mt_rand(0,9)] . "',"; //lastName
			$sql=$sql . "" . getPhone() . ","; //phone
			$sql=$sql . "'". $email ."',"; //email
			$sql=$sql . "'".getAddress1()."',"; //address1
			$sql=$sql . "'".getAddress2()."',"; //address2
			$sql=$sql . "'".$meal[mt_rand(0,2)]."',"; //meal
			$sql=$sql . "".mt_rand(0,1).")"; //plusOne
			
			if(mysqli_query($con,$sql)) {
				$counter++;
			} else {
				echo "Something went wrong:<br/> ".mysqli_error($con)."<br/>";
				echo "This is what the SQL looks like:<br/>" . $sql;
			}
			
		}
		echo $counter . " user(s) have been added!";
		?>
	
	
	</body>




</html>