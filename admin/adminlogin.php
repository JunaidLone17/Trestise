<?php

$crede = md5($_POST["AdminEmail"]);
$credp = md5($_POST["AdminPassword"]);

if($crede == "5f4dcc3b5aa765d61d8327deb882cf99" AND $credp == "5f4dcc3b5aa765d61d8327deb882cf99")
{
    header('location:index2.php');
}else{
    echo "Kindly check your credentials";
}


?>