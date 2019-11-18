<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','dawangba1');//密码
define('DB_NAME','new_tech');//
global $conn,$conn_obj;
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_query($conn,'set names utf8');
