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
<!-- <style>
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
</style> -->
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
					<h3>Enter Product information:</h3>



                 <form action="prodcutform.php"  method="post" enctype="multipart/form-data">
  

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



    <input type="submit" name="submit" value="Add"> 
   </div>

  <div class="container" style="background-color:#f1f1f1">
   
  </div>
</form>
       </body>
       </html>


       
   


