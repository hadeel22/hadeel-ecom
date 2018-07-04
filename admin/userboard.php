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
<style>
        .button {
            background-color: rgb(97, 11, 146);
            border: none;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 3px 2px;
            cursor: pointer;
        }


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  color:  white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: purple;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

{
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
</style>

        </style>

</head>

<body>


 
<!-- Main -->
<!-- Header -->
<header id="header">
<h1><a>Hadeel E-commerce</a></h1>
<div align="right" >
<a href="logout.php" class="button" >Log Out</a>
    </div>
</header>
</br>
<header class="major">
<h2>Welcome to Hadeel E-commerce</h2>
<div class="topnav">
  <a href="#news">Phones</a>
  <a href="#contact">TV's</a>
  <a href="#about">Tablets</a>
  <a href="#about">Headphones</a>
</div>

</br>
</br>
</br>
<h4> Added recentley </h4>

<?php
require_once('MysqliDb.php');
$config = include('config.php');

$db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );


$products = $db->get('product', 10);
foreach ($products as $product) {
    
   echo "<div class=row>";
  echo  "<div class=column>";
    echo" <img  runat=server src=../images/$product[img]   width=170 height=190 .. />";
echo "<br>";
    echo " <a href=detail.php> " . $product["pname"] .  "</a> ";

    echo "</div>";
    echo "</div>";
   
}
    ?>
						
</body>
</html>
