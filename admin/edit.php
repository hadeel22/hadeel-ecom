<?php
       require_once('MysqliDb.php');
       $config = include('config.php');
       
       $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
     //  echo "Inside of submit" . "<br/>";
       if(isset($_POST["submit"])) {
           echo "Inside of submit" . "<br/>";
       $pname=$_POST['pname'];
       $price=$_POST['price'];
       $des=$_POST['des'];
       $cat=$_POST['cat'];
       $qun=$_POST['qun'];
	
        
        
        
        
        if (isset($_FILES["file"]["name"])) {
          //echo "Inside of file" . "<br/>";
           $name = $_FILES["file"]["name"];
          // echo $name;
           $tmp_name = $_FILES['file']['tmp_name'];
          // $error = $_FILES['file']['error'];
      
          if (!empty($name)) {
              $location = '../images/';
      
              if  (move_uploaded_file($tmp_name, $location.$name)){
                  echo 'Uploaded';
              }
            }
          } else {
              echo 'please choose a file';
          }
      
        
        }

        
        
    $data = Array ("pname" => "$pname",
                  "price" =>  "$price",
                  "des" =>  "$des",
                  "cat" =>  "$cat",
                  "qun" =>  "$qun");
$id = $db->update ('product', $data);


?>