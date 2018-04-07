<?php
$name=$_POST["firstName"];
$lastName=$_POST["lastName"];
$address=$_POST["address"];
$depth=$_POST["depth"];
$latitude=$_POST["latitudess3434"];
$longitude=$_POST["longitude4545"];

$servername = "localhost";
$username = "root";
$dbpass = 'rootpassword';
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,"users");
$sql = "
CREATE TABLE env (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
)
";
if ($conn->query($sql) === TRUE) {
    echo "Table env created successfully";
} else {
    // echo "Error creating table: " . $conn->error;
}
echo $name;
echo $lastName;
echo $address;
echo $depth;
echo $latitude ;
echo $longitude ;

$sql = "INSERT INTO `registration` (`r_id`, `first_name`, `last_name`, `address`, `latitudess3434`, `longitude4545`) VALUES (NULL, '". $name. "', '". $lastName. "', '". $address. "', '". $latitude. "', '". $longitude. "');";
$conn->query($sql);
echo "Inserted successfully\n";
?>