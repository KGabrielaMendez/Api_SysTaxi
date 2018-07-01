<?php
  session_start();
  DEFINE('HOST', '127.0.0.1');
  DEFINE('USER', 'root');
  DEFINE('PSWD', '');
  mysql_connect(HOST, USER, PSWD) or die('Error: ' . mysql_error());
  mysql_select_db('systaxi') or die('Error: ' . mysql_error());
  
  $mysqli = new $mysqli('127.0.0.1','root'.'','systaxi');
  $mysqli->set_charset("utf8");
?>