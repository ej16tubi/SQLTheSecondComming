
<?php
 $servername = "localhost";
 $username = "csis400";
 $password = "password";
 $dbname = "Demo";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 $name = $_POST["name"];
 $sql = "SELECT * FROM tellSecrets WHERE name='".$name."'";
 $result = $conn->query($sql);
 if($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
     echo "<br> name: " . $row["name"]. " - favorite thing: " . $row["ItemName"]. "<br>";
   }
  } else {
     echo "0 results";
 }
   $conn->close();
?>
