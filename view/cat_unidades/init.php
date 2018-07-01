<?php
  session_start();
  DEFINE('HOST', 'localhost');
  DEFINE('USER', 'root');
  DEFINE('PSWD', '');
  mysql_connect(HOST, USER, PSWD) or die('Error: ' . mysql_error());
  mysql_select_db('systaxi') or die('Error: ' . mysql_error());
?>