<?php
$mail = $_POST['credmail'];
$pass = md5($_POST['credpass']);
$servername = "localhost";
$username = "id17036834_root";
$password = "Junaidrahi12@";
$dbname = "librarysystem";
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error)
{
    die("connection error: " . $conn->connect_error);
}
$sqlquery = "SELECT * FROM users WHERE UserEmail='$mail' AND UserPassword='$pass'";
$answers = $connection->query($sqlquery);

if($answers->num_rows>0)
{
    $row = mysqli_fetch_assoc($answers);
    $cookie_name = "user";
    $cookie_value = $row["Username"];
    setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");
    header( "refresh:0.5;url=index.php" );
   
}
else
{
    echo"<h1>Email or Password Incorrect</h1><br><h1>Redirecting You back to the login page</h1>";
    header( "refresh:2; url=login.html");
}
?>