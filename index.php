<?php
if(!isset($_COOKIE['user']))
{
  header("refresh:0.1;url=login.html");
}
  $UserName = $_COOKIE['user'];
  $servername = "localhost";
$username = "id17036834_root";
$password = "Junaidrahi12@";
$dbname = "librarysystem";
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error)
{
    die("connection error: " . $conn->connect_error);
}
$sqlque = "SELECT * FROM users WHERE Username='$UserName'";
$ans = $connection->query($sqlque);
$row = mysqli_fetch_assoc($ans);
$name = $row["FullName"];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="css/Style1.css">
      <link rel="stylesheet" href="css/responsive.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar background h-nav ">
      
      <ul class="nav-list v-class ">
          <div class="logo"><img src="img/logo.jpg" alt="Logo Here"></div>
        <li><a href="#Home">Home </a> </li>
        <li><a href="#Library ">Library</a></a></li>
        <li><a href="#BooksIssued">Issued</a></li>
        <!--<div class="hide">Lists all books You have Issued from Library</div>-->
        <li><a href="#Request A PDF">Request</a></li>
        <li><a><?php echo $name; ?></a></li>
      </ul>
      <div class="rightnav v-class">
        <input type="text" id="search" name="search">
     <button type="submit"   form="#form" value="submit" class="btn-sm">Search</button>
        </div>
        <div class="burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
    </nav>
    <section class="background firstsection">
     
      <div class="box-main">
        <div class="firstHalf">
            <p class="text-big">The Cloud Based Library is here</p>
            <p class="text-small">Today, education remains an inaccessible right for
                 millions of People around the world..
                    Undeniably, many children from disadvantaged backgrounds are forced to
                     abandon their education. As Archemdies said give me a place to stand on and i will move the earth</p>
                <div class="buttons">
                  <button class="btn"> Donate Books</button>      
                  <a href="logout.php"><button class="btn" style="margin-left: 15px;">Log Out </button></a>
                </div>
                    </div>
                    
      
        
        </div>
        </div>
    </section>
  
  
  
</div>
    <script src="js/responsive.js"></>
  </body>
</html>
