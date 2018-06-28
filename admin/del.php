<?php
header('Location: category.php'); 
       require_once('MysqliDb.php');
       $config = include('config.php');
       
      
       $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
      // $db->where('ID',$ID);
       if($db->delete('category')) echo 'successfully deleted';

     
       ?>