<?php
   // define('DB_SERVER', 'localhost:3307');
   // define('DB_USERNAME', 'root');
   // define('DB_PASSWORD', '');
   // define('DB_DATABASE', 'INMS');
   // $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   $host = "localhost"; /* Host name */
   $user = "root"; /* User */
   $password = ""; /* Password */
   $dbname = "INMS"; /* Database name */
   $db = mysqli_connect($host, $user, $password,$dbname);
?>