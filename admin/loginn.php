<?php

session_start();
if(!session_is_registered(email)){
header("location:userboard.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>