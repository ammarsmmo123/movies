<?php
define('DB_SERVER','den1.mysql1.gear.host');
define('DB_USER','movdb');
define('DB_PASS' ,'Lg5476-o?BiR');
define('DB_NAME', 'movdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>