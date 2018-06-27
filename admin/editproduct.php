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
</head>

<body>


 
<!-- Main -->
<!-- Header -->
<header id="header">
<h1><a>Hadeel E-commerce</a></h1>
<!-- <nav id="nav">

<section id="main" class="wrapper">
				<div class="container">
					<header class="major">
						<h2>Add Product:</h2>
						 -->
					</header>
					<h3>Edit Product information:</h3>



                 <form action="edit.php"  method="post" enctype="multipart/form-data">
  

  <div class="container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="pname" required>

    <label for="pr"><b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="price" required>
        
    <label for="des"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="des" required>

     <label for="des"><b>Category</b></label>
    <input type="text" placeholder="Enter Category" name="cat" required>

     <label for="des"><b>Quantity</b></label>
    <input type="text" placeholder="Enter Quantity" name="qun" required>
   
   <label for="img" > <b> Image</b> </label>
   <input type="file" name="file" id="file">



    <input type="submit" name="Change">
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
   
  </div>
</form>
       </body>
       </html>