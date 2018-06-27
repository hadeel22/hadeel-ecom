<?php
header('Location: product.php'); 
       require_once('MysqliDb.php');
       $config = include('config.php');
       
      
       $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
       $db->where('ID','6');
       if($db->delete('product')) echo 'successfully deleted';


       ?>