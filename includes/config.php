<?php
define('DB_SERVER','cc-mini-db.cxms22nldz2i.ap-northeast-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS' ,'gauravj7');
define('DB_NAME', 'edmsdb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>