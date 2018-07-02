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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
<h2>List of Orders</h2>
 
<div class="w3-bar w3-border w3-light-grey" align="left">
  <a href="dashboard.php" class="w3-bar-item w3-button">Home</a>
</br>
  <a href="product.php" class="w3-bar-item w3-button">Product</a>
  </br>
  <a href="category.php" class="w3-bar-item w3-button">Category</a>
  
</div>

  
</header>

<div data-role="page" id="pageone">
  
  
  <div data-role="main" class="ui-content">
    <form>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Status..">
    </form>
    
<table id="myTable">

<tr>
<th> Status </th>
<th> User </th>
<th> Date </th>
<th> Total price </th>

<th colspan='2'>    More options</th>
</tr>

<?php
  require_once('MysqliDb.php');
  $config = include('config.php');
  
  $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
  
  $order = $db->get('orders', 50); //contains an Array 10 users

  foreach ($order as $orders) {

	echo "<tr>";
    echo "<td>" . $orders["status"] . "</td>";
    echo "<td>" . $orders["userId"] . "</td>";
    echo "<td>" . $orders["date"] . "</td>";
    echo "<td>" . $orders["totprice"] . "</td>";
    echo "<td>  <p><a href=deleteorder.php>Delete</a></p></td> " ;
     echo "<td>  <p><a href=editorder.php> Edit order</a></p>      </td> " ;
     echo "</tr>";

  }
     ?>

     </table>
     <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


     </body>
     </html>