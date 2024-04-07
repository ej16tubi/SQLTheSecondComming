<?php
$servername = "localhost";
$username = "csis400";
$password = "password";
$dbname = "Demo";
echo $_POST["name"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connection_error) {
	die("Connection failed: " . $conn->connection_error);
}
$sql = "SELECT * FROM tellSecrets";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()){
		echo "<br> name: " . $row["name"] . " - favorite thing: " . $row["ItemName"] . "<br>";
		}
} else {
	echo "0 results";
}
$conn->close();
?>
