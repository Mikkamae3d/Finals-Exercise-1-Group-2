<php
$servername = "localhost";
$username = "email";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $email, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
