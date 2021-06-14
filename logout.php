<?php
setcookie('user', '', time() - (86400*30), '/');
header("refresh:1;url=index.php");

?>