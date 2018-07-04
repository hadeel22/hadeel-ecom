<?php
  //header('Location: userboard.php'); 
  require_once('MysqliDb.php');
  $config = include('config.php');
  
  $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
  session_start(); 
  if(isset($_POST["submit"])) {
           

      $email = $_POST["email"]; 
      $passw = $_POST["passw"]; 
    $db->where('email', $email);
    $results = $db->get ('user');


    print_r($results);
    $hash = $results[0]["passw"];

    $valid = password_verify ( $passw, $hash );

   // echo $valid . '<br/>';

   if($valid){
    header('Location: userboard.php'); 
   }else{
    header('Location: userlog.php?err=1'); 
   }
  }
//  $valid = password_verify ( $passw, $hash );
//  if ( $valid ) {
//    if ( password_needs_rehash ( $hash, PASSWORD_DEFAULT ) ) {
//      $newHash = password_hash( $passw, PASSWORD_DEFAULT );
//      /* UPDATE the user's row in `log_user` to store $newHash */
//    }
// echo "logged in";
//  }
//  else {
// echo "password of email inncorect"; }
//  }
?>
