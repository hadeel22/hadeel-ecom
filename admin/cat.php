<?php
      header('Location: addcategory.php'); 
       require_once('MysqliDb.php');
       $config = include('config.php');
       
       $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
     //  echo "Inside of submit" . "<br/>";
       if(isset($_POST["submit"])) {
           echo "Inside of submit" . "<br/>";
       $cname=$_POST['cname'];}

       $data = Array ("cname" => "$cname");
$id = $db->insert ('category', $data);
?>
