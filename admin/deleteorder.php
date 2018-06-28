<?php
header('Location: order.php'); 
       require_once('MysqliDb.php');
       $config = include('config.php');
       
      
       $db = new MysqliDb($config['db_host'],$config['db_user'],$config['db_pass'],$config['db_name'] );
      // $db->where('ID',$ID);
       if($db->delete('orders')) echo 'successfully deleted';

     
       ?>