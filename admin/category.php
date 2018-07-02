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
<header class="major">
<h2>List of Categories</h2>
<div class="w3-bar w3-border w3-light-grey" align="left">
  <a href="dashboard.php" class="w3-bar-item w3-button">Home</a>
  </br>
  <a href="product.php" class="w3-bar-item w3-button">Product</a>
  </br>
  <a href="order.php" class="w3-bar-item w3-button">Order</a>
  
</div>
  <div class="4u 12u$(small)">
  <a href="addcategory.php">
								<img src="images/add.png" style="width:100px;height:90px; " >
								<h5>Add category</h5>
                            
								</a>
					   
					   
								
							
						
						
					
					   
								
							
						
						</div>
</header>

<table>

<tr>
<th> Name </th>
<th colspan='2'>    More options</th>
</tr>

<?php
  require_once('MysqliDb.php');
  $config = include('config.php');
  
  $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
  
  $categories = $db->get('category', 10); //contains an Array 10 users

  foreach ($categories as $category) {

	echo "<tr>";
    echo "<td>" . $category["cname"] . "</td>";
    echo "<td>  <p><a href=del.php>Delete</a></p></td> " ;
     echo "<td>  <p><a href=editcategory.php> Edit product</a></p>      </td> " ;
  }
     ?>

     </table>
     </body>
     </html>