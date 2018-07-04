<?php
    //  header('Location: welcome.html'); 

  require_once('MysqliDb.php');
  $config = include('config.php');
  
  $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );

  if(isset($_POST["submit"])) {
    $username=$_POST['username'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $hash = password_hash( $passw , PASSWORD_DEFAULT);

    echo "hashed password "  . $hash;
    $data = Array ("username" => $username,
       "email" => $email,
   "passw" => $hash,
   );
  // header('Location: usereg.php?err=1');
    $id = $db->insert ('user', $data);

    if($id){
    header('Location: welcome.html'); 
    }else{
        header('Location: usereg.php?err=1');
    }
  }
   // if(!$this->CheckLoginInDB($email,$passw))

  //  {
   //     return false;
   // }

   




?>