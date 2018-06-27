<?php
require_once('MysqliDb.php');
$config = include('config.php');
session_start();

$db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );


   
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $username = $_POST['username'];
   $password = $_POST['password']; 

    $db->where('username', $username);
    $result = $db->get('admin');

    print_r($result);

    echo $result[0]['password'];}
   
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

?>




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

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>

<h2>Menu</h2>

<ul>
  <li><a href="product.php">Products</a></li>
  <li><a href="category.php">Category</a></li>
  <li><a href="order.php">Orders</a></li>

</ul>

</body>
</html>