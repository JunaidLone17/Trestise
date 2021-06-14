<?php
$name = $_POST['FullName'];
$Registerusername = $_POST['Username'];
$email = $_POST['UserEmail'];
$Userpassword = md5($_POST['UserPassword']);
$confPassword = md5($_POST['ConfirmPassword']);

$servername = "localhost";
$username = "id17036834_root";
$password = "Junaidrahi12@";
$dbname = "librarysystem";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql2 = "SELECT * FROM users WHERE UserEmail='$email' OR Username='$username'";
$result = $conn->query($sql2);
if ($Userpassword != $confPassword){
    echo "<h1>Password and confirm password must be same</h1>";
    echo "<br><h1>Redirecting you back in 2 Seconds</h1> ";
    header( "refresh:2;url=signup.html" );
}
elseif ($result->num_rows>0){
    echo"<h1>UserName or Email Already Exists</h1><br><h1>Redirecting you back in 2 Seconds</h1>";
    header( "refresh:2;url=signup.html" );
}
else{
$sql = "INSERT INTO users (FullName, UserEmail, UserPassword, Username)
VALUES ('$name', '$email', '$Userpassword', '$Registerusername')";

if ($conn->query($sql) === TRUE) {
  echo "Registration Succesfull <br><h1>Redirecting You to the Login Page in 2 Seconds</h1>";
  header("refresh:2; url=login.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
