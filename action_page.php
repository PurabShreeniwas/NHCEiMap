<html>
<body>
  <?php

  $Event=$_POST['event'];
  $Name=$_POST['name'];

  ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "purab";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (name,event) VALUES ('$Name','$Event')";

if (mysqli_query($conn, $sql)) {
  header('Location: o1.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
