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

<header id="header">
<h1><a>Hadeel E-commerce</a></h1>

</header>
</br>
<header class="major">
<?php
require_once('MysqliDb.php');
$config = include('config.php');

$db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );


$products = $db->get('product', 10);
foreach ($products as $product) {
echo "<h2> $product[pname] </h2>";
echo "</br>";

echo "<div style=background-color:white;color:black;padding:20px ; align=left;>";
echo "<h4> Details: </h4>";
echo "<p> $product[des] </p>";
echo "</div>";
}
?>

