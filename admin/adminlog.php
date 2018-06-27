<!DOCTYPE html>
<!--
Transit by TEMPLATED
templated.co @templatedco
Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Hadeel E-commerce</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="js/init.js"></script>
<noscript>
<link rel="stylesheet" href="css/skel.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-xlarge.css" />
</noscript>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

<body>


 
<!-- Main -->
<!-- Header -->
<header id="header">
<h1><a>Hadeel E-commerce</a></h1>
<nav id="nav">
<ul>



            
</ul>
</nav>
</header>
<!-- Main -->
<section id="main" class="wrapper">
<div class="container">


 
<header class="major">
<h2>Log in</h2>
</header>


<form action="dashboard.php"    method="post">
  

  <div class="container">
    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
   
  </div>
</form>





</html>


<?php
// require_once('MysqliDb.php');
// $config = include('config.php');
// session_start();

// $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );


   
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//    // username and password sent from form 
   
//    $username = mysqli_real_escape_string($db,$_POST['username']);
//    $password = mysqli_real_escape_string($db,$_POST['password']); 

//     $db->where('username', $username);
//     $result = $db->get('admin');

//     print_r($result);
   
// //    $sql = "SELECT id FROM admin WHERE username = '$username' and password = '$password'";
// //    $result = mysqli_query($db,$sql);
// //    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// //    $active = $row['active'];
   
// //    $count = mysqli_num_rows($result);
   
//    // If result matched $myusername and $mypassword, table row must be 1 row
     
//    if($count == 1) {
//       session_register("username");
//       $_SESSION['login_user'] = $username;
      
//       header("location: dashboard.php");
//    }else {
//       $error = "Your Login Name or Password is invalid";
//    }
//}
require_once('MysqliDb.php');
$config = include('config.php');

$db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );


   
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $username = $_POST['username'];
   $password = $_POST['password']; 

    $db->where('username', $username);
    $result = $db->get('admin');

    print_r($result);

    echo $result[0]['password'];}
?>
