<?php
      header('Location: editorder.php'); 
       require_once('MysqliDb.php');
       $config = include('config.php');
       
       $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
     //  echo "Inside of submit" . "<br/>";
       if(isset($_POST["submit"])) {
           echo "Inside of submit" . "<br/>";
       $status=$_POST['status'];}

       $data = Array ("status" => "$status");
$id = $db->insert ('order', $data);
?>
