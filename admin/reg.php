<?php
      header('Location: welcome.html'); 

  require_once('MysqliDb.php');
  $config = include('config.php');
  
  $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );

  if(isset($_POST["submit"])) {
    $username=$_POST['username'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];
  }
   // if(!$this->CheckLoginInDB($email,$passw))

  //  {
   //     return false;
   // }

   $data = Array ("username" => $username,
       "email" => $email,
   "passw" => $passw,
   
);
$id = $db->insert ('user', $data);




?>